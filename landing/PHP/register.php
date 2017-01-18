<?php

header("Location: signup.php");

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

$_SESSION['emailtaken'] = 0;

if(count($check->fetch_array()) >= 1) {
    $_SESSION['emailtaken'] = 1;
    header("Location: signup.php");
} else {
    if($paswd == $checkpaswd) {
        $conn->query($sql);
    } else {
        $_SESSION['paswdnotmatch'] = true;
        header["Location: signup.php"];
    }
}