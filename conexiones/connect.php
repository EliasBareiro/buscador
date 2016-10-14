<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "escuela";

$connect = new mysqli($host,$user,$pass,$db) or die("error" . mysqli_error($connect));

?>