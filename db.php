<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

if(!$con){
  die("connection faild:".mysqli_connect_error());
}
