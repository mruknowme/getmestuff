<?php

require_once("dbh.php");

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$paswd = $_POST['paswd'];
$checkpaswd = $_POST['checkpaswd'];

if (isset($_POST['newsletter'])) {
    $newsletter = 1;
} else {
    $newsletter = 0;
}

$sql = "INSERT INTO users (name, surname, email, paswd, newsletter) VALUES ('$name', '$surname', '$email', '$paswd', '$newsletter')";
$check = $conn->query("SELECT email FROM users WHERE email='$email'");
$row = $check->fetch_array();

if(count($row) >= 1) {
    echo 'email is taken';
} else {
    if($paswd == $checkpaswd) {
        $conn->query($sql);
    } else {
        echo 'passwords don\'t match';
    }
}