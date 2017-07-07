<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['ip_address', 'country', 'country_code', 'remember_key', 'user_id'];

    public function setCountry()
    {
        if (!$this->checkIfCookieExists()) {
            $ip = request()->ip();

            $data = ip_info($ip);

            $country = $data['country'];
            $country_code = $data['country_code'];
            $remember_key = str_random();

            $this->createCountry($ip, $country, $remember_key);
        }
    }

    protected function checkIfCookieExists()
    {
        return !is_null(request()->cookie('visited'));
    }

    public static function updateCountry($id)
    {
        static::deleteRepeatingResult();

        $remember_key = request()->cookie('visited');

        if(!is_null($remember_key)) {
            $set = static::query()->getByKey($remember_key)->first();
            $set->user_id = $id;

            $set->save();
        } else {
            $set = static::query()->getByIp()->first();
            $set->user_id = $id;

            \Cookie::queue('visited', $set->remember_id, 2628000);

            $set->save();
        }
    }

    public function scopeGetByKey($query, $key)
    {
        return $query->where('remember_key', $key);
    }

    public function scopeGetByIp($query)
    {
        return $query->where('ip_address', request()->ip());
    }

    protected function createCountry($ip, $country, $remember_key)
    {
        $data = $this->newQuery()->getByIp()->first();

        if (is_null($data)) {
            $this->create([
                'ip_address' => $ip,
                'country' => $country,
                'remember_key' => $remember_key
            ]);

            \Cookie::queue('visited', $remember_key, 2628000);
        } else {
            $key = $data->remember_key;

            \Cookie::queue('visited', $key, 2628000);
        }
    }

    public static function getVisits()
    {
        $countries = static::query()->select('country', 'user_id')->orderBy('country')->get();
        $totalUsers = Country::query()->whereNotNull('user_id')->count();
        $totalVisitors = Country::query()->whereNull('user_id')->count();

        return $countries->groupBy(function ($item) {
            if (!is_null($item->user_id)) return 'Users';
            else return 'Visitors';
        })->map(function ($item) {
            return $item->groupBy('country')->map(function ($item) {
                return [
                    'count' => $item->count(),
                ];
            });
        })->map(function ($item, $key) use ($totalVisitors, $totalUsers) {
            if ($key == 'Visitors') {
                return $item->map(function ($item) use ($totalVisitors) {
                    $item['total'] = $totalVisitors;
                    return $item;
                });
            } else {
                return $item->map(function ($item) use ($totalUsers) {
                    $item['total'] = $totalUsers;
                    return $item;
                });
            }
        });
    }
}
