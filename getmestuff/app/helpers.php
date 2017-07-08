<?php

/**
 * @param $message
 */
function flash ($message) {
    session()->flash('message', $message);
}

function error ($message) {
    session()->flash('error', $message);
}

function shortenNum($number) {
    $abbrevs = array(12 => "T", 9 => "B", 6 => "M", 3 => "K", 0 => "");

    foreach($abbrevs as $exponent => $abbrev) {
        if($number >= pow(10, $exponent)) {
            $display_num = $number / pow(10, $exponent);
            $decimals = ($exponent >= 3 && round($display_num) < 100) ? 1 : 0;

            return number_format($display_num,$decimals) . $abbrev;
        }
    }

    return $number;
}

function breadcrumbs($sep = '', $home = 'admin')
{
    $site = config('app.url');

    $crumbs = explode('/', request()->path());

    $bc = '<ol class="breadcrumb">';
    $bc .= "<li><a href='$site/$home/dashboard'>".ucfirst($home)."</a>$sep</li>";

    unset($crumbs[0]);

    $i = 0;
    $numOfCrumbs = count($crumbs);

    foreach ($crumbs as $crumb) {
        if (is_numeric($crumb)) {
            $bc .= '<li class="active">Reply</li>';
        } elseif (++$i === $numOfCrumbs) {
            $bc .= '<li class="active">'.ucfirst($crumb).'</li>';
        } else {
            $bc .= "<li><a href='$site/$home/$crumb'>".ucfirst($crumb)."</a>$sep</li>";
        }
    }

    $bc .= '</ol>';

    echo $bc;

    return;
}

function getRandomString($length = 6) {
    $str = str_shuffle(time() . str_random(20));

    return substr($str, -$length);
}

function getUniqueId($str) {
    preg_match('/\(Ref: (.*?)\)/i', $str, $matches);
    $str = trim(preg_replace('/\(Ref: (.*?)\)/i', '', $str));

    if (isset($matches[1])) {
        return [$str, $matches[1]];
    }

    return [$str, false];
}

function getLanguagePref() {
    $data = explode(';', request()->server('HTTP_ACCEPT_LANGUAGE'))[0];
    preg_match('/[a-z]{2}/', $data, $matches);
    return $matches[0];
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

function calculatePercent($a, $b) {
    return round($a / $b * 100);
}

function getPercentageChange($data) {
    $data = $data->groupBy(function ($item) {
        return $item->created_at->format('m-Y');
    })->slice(0, 2)->map(function ($item) {
        return $item->count();
    });

    $this_month = $data->slice(0, 1)->first();
    $last_month = $data->slice(1, 1)->first();

    if (is_null($last_month)) return 0;

    $change = round(($this_month * 100 / $last_month) - 100);

    return $change;
}