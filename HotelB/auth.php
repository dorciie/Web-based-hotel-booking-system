<?php
$username = "unleashe_hotel";
$password = "unleashe_hotel";
$hostname = "localhost"; 

//connection to the database
($dbhandle = mysqli_connect($hostname, $username, $password)) || die(mysqli_error($dbhandle));

//select a database to work 
$db = "unleashe_hotel";
($selected = mysqli_select_db($dbhandle, $db)) || die(mysqli_error($dbhandle));


?>