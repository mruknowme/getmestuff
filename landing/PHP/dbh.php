<?php

$conn = mysqli_connect("localhost", "root", "", "fjghi1");
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }