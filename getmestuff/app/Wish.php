<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $fillable = [
        'user_id', 'item', 'url', 'current_amount', 'amount_needed', 'address', 'donated', 'completed'
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
                return;
            }
        });
    }

//    public static function boot()
//    {
//        parent::boot();
//
//        static::saved(function ($wish) {
//            if ($wish->amount_needed == $wish->current_amount) {
//                $wish->update(['completed' => 1]);
//            };
//        });
//    }

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

    public static function getWishes($id, $limit = 6)
    {
        return static::inRandomOrder()
                            ->where('user_id', '!=', $id)
                            ->where('completed', "!=", 1)
                            ->whereRaw("donated IS NULL OR donated NOT LIKE '%\"user_id\": $id%'")
                            ->limit($limit)
                            ->get();
    }

    public function getWish($id, $ids)
    {
        return $this->inRandomOrder()
                        ->where('user_id', '!=', $id)
                        ->where('completed', "!=", 1)
                        ->whereNotIn('id', $ids)
                        ->whereRaw("donated IS NULL OR donated NOT LIKE '%\"user_id\": $id%'")
                        ->limit(1)
                        ->get();
    }
}
