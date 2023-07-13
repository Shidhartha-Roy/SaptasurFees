<?php
$sname = "localhost:3307";
$uname = "root";
$password = "";
$dbname = "saptasurfees";

$conn = mysqli_connect($sname, $uname, $password, $dbname);

if(!$conn){
    echo "Connection Failed";
}



?>