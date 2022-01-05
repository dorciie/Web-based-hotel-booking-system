<?php
$username = "unleashe_hotel";
$password = "unleashe_hotel";
$hostname = "localhost"; 

//connection to the database
($dbhandle = mysqli_connect($hostname, $username, $password)) || die("Unable to connect to MySQL");

//select a database to work 
$db = "unleashe_hotel";
($selected = mysqli_select_db($db,$dbhandle)) || die("Could not select database");
