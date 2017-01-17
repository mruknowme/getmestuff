<?php

require_once("dbh.php");

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$paswd = $_POST['paswd'];
$checkpaswd = $_POST['checkpaswd'];

/*if (isset($_POST['newsletter'])) {
    $newsletter = 1;
} else {
    $newsletter = 0;
}

$check = $conn->query("SELECT email FROM users WHERE email='$email'");
$row = $check->fetch_assoc();

echo $row;*/
