<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id', 'braintree_id', 'successful', 'amount', 'interest'
    ];

    protected $hidden = [
        'braintree_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function recordTransaction($userId, $braintreeId, $successful, $amount)
    {
         return static::create([
                    'user_id' => $userId,
                    'braintree_id' => $braintreeId,
                    'successful' => $successful,
                    'amount' => $amount,
                    'interest' => ($amount * 1.2 - $amount)
                ]);
    }

    public function getData()
    {
        $payments = $this->where('successful', true)->get();
        $change = $change = getPercentageChange($payments);

        $total = $this->calculateProfit($payments);
        $this_month = $this->calculateProfit($payments, 'month');
        $today = $this->calculateProfit($payments, 'today');

        return [
            'total' => $total,
            'this_month' => $this_month,
            'today' => $today,
            'change' => $change
        ];
    }

    protected function calculateProfit($data, $when = false)
    {
        if ($when == 'month') {
            $data = $data->filter(function ($item) {
                return $item->created_at->format('m-Y') == Carbon::now()->format('m-Y');
            });
        } elseif ($when == 'today') {
            $data = $data->filter(function ($item) {
                return $item->created_at->format('d-m-Y') == Carbon::now()->format('d-m-Y');
            });
        }

        if ($data->isEmpty()) return 0;

        $amount = $data->sum(function ($item) {return $item->amount;});
        $interest = $data->sum(function ($item) {return $item->interest;});
        $count = $data->count();

        $total = $amount + $interest;

        $profit = ($total) - ($total * 0.019 + (.20 * $count)) - $amount;

        return number_format($profit, 2);
    }
}
