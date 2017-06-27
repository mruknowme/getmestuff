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


/**
 * @param $number
 * @return string
 */
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
        if (++$i === $numOfCrumbs) {
            $bc .= '<li class="active">'.ucfirst($crumb).'</li>';
        } else {
            $bc .= "<li><a href='$site/$home/$crumb'>".ucfirst($crumb)."</a>$sep</li>";
        }
    }

    $bc .= '</ol>';

//    dd($bc);

    echo $bc;

    return;
}