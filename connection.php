<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "saarthi";
$port=3307;
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$port)){
    die("failed to connect");
}

define('ROOT_PATH',getcwd());