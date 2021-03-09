<?php

$localhost 	= "localhost:3307";
$username 	= "root";
$password 	= "";
$dbname 	= "ratedsolution";

$con = new mysqli($localhost, $username, $password, $dbname);

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}

/* end of file */