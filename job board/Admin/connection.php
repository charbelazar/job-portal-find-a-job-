<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dberror1="Could not connect to the database";
$dbname="finalproject";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ($dberror1) ;
?>