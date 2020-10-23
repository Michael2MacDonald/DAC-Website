<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Muchnote2";
$dBName = "dac";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
?>
