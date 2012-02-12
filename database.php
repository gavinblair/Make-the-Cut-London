<?php
include 'config.php';

$con = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$con) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);
	
if($_GET['action'] == "choicelog") {
	$question = filter_var($_GET['question'], FILTER_SANITIZE_SPECIAL_CHARS);
	$choice = filter_var($_GET['choice'], FILTER_SANITIZE_SPECIAL_CHARS);
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$query = "INSERT INTO choicelog (question, choice, ip) VALUES ('$question', '$choice', '$ip')";
	echo $query;
	mysql_query($query,$con);
	
}
	
mysql_close($con);