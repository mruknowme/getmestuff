<?php
    //echo $_SERVER['REQUEST_URI']."<br>";
    //echo $_SERVER['REDIRECT_URL']."<br>";
    //echo $_SERVER['REDIRECT_QUERY_STRING']."<br>";

    require_once($_SERVER['DOCUMENT_ROOT']."/app/config.php");

    $page = "";

    if ($_SERVER['REDIRECT_URL'] == "/") $page = "home";

    else {
        $page = substr($_SERVER['REDIRECT_URL'], 1);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",BASE_URL.$_SERVER['REQUEST_URI'])) $page = "home";
    }

    switch ($page) {
        case "home":
            echo "Require home page";
            break;
        case "about":
            echo "Require about page";
            break;
        default: echo "Require home/error page";
            
    }
    
?>