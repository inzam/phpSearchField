<?php
//connect to mysql db
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '@mwm00a@';
$port = 3306;
$socket = '';
$dbNm = 'articleDB';

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbNm,$port,$socket);

if(!$conn){
    die("Connection Failed: " .mysqli_connect_error());
}//else{ echo "Relax bitch!! DB is connected";}