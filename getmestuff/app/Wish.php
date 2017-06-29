<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $fillable = [
        'user_id', 'item', 'url', 'current_amount',
        'amount_needed', 'address', 'donated', 'completed',
        'priority', 'validated'
    ];

    protected $casts = [
        'address' => 'json'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'url', 'address', 'priority', 'validated', 'completed', 'donated', 'updated_at'
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function (Wish $wish) {
            if ($wish->amount_needed == $wish->current_amount) {
                $wish->completed = 1;

                if ($wish->user->number_of_wishes == 0) {
                    $wish->user->increment('number_of_wishes');
                }
                return;
            }
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recordDonation($user, $value)
    {
        $this->current_amount += $value;
        $donated = json_decode($this->donated, true);

        if (is_null($donated)) {
            $donated = [
                ['user_id' => $user, 'amount' => $value]
            ];
        } else {
            $donated = array_merge($donated, [
                ['user_id' => $user, 'amount' => $value]
            ]);
        }

        $this->donated = json_encode($donated);

        $this->save();
    }

    public static function getWishes($id, $limit = 6, $ids = false)
    {
        $wishes = static::orderBy(\DB::raw('-LOG(1.0 - RAND()) / `priority`'))
            ->where('user_id', '!=', $id)
            ->where('completed', "!=", 1)
            ->where('validated', '=', 0)
            ->whereRaw(
                "(reported IS NULL OR reported NOT LIKE '%user.$id.report%') AND 
                (donated IS NULL OR donated NOT LIKE '%\"user_id\": $id%')"
            );

        if ($ids) {
            $wishes = $wishes->whereNotIn('id', $ids);
        }
        
        return $wishes->limit($limit)->get();
    }

    public function getWish($id, $ids)
    {
        return $this->orderBy(\DB::raw('-LOG(1.0 - RAND()) / `priority`'))
            ->where('user_id', '!=', $id)
            ->where('completed', "!=", 1)
            ->where('validated', '=', 0)
            ->whereNotIn('id', $ids)
            ->whereRaw("donated NOT LIKE '%\"user_id\": $id%' OR donated IS NULL AND reported NOT LIKE '%user.$id.report%' OR reported IS NULL")
            ->limit(1)
            ->get();
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
