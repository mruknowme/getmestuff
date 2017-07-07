<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountriesController extends Controller
{
    public function visitorCountries()
    {
        return Country::getVisits();
    }

    public function visits(Country $country)
    {
        $countries = $country->select('country_code')->orderBy('country')->get()
            ->groupBy('country_code')->map(function ($item) {
                return $item->count();
            });

        return $countries;
    }
}
