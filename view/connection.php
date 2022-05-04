<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "weatherdb";

$con = new mysqli('localhost', 'root', '', 'weatherdb');

if(!$con) {
    die(mysqli_error($con));
}
?>