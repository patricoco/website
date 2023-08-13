<?php
//if using localhost
$servername = "localhost";
$dBUsername = "root";
$dBName = "mywebsite";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}