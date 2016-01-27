<?php
ob_start();
session_start();

error_reporting(E_ALL); // 0 = slået fra ::: E_ALL = slået til.

$host = "localhost";
$user = "poul";
$password = "root";
$database = "praktik3";

// $host = "mysql33.unoeuro.com";
// $user = "poullyngel_com";
// $password = "fgekrm2zt9";
// $database = "poullyngelarsen_com_db";

$con = mysqli_connect($host,$user,$password,$database);

// Tjekker om der er forbindelse.

if (mysqli_connect_errno()) {
	echo "Kunne ikke forbinde til MySQL: " . mysqli_connect_error();
}

mysqli_query($con, "SET NAMES utf8");

 ?>