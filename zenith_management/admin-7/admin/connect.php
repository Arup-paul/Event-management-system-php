<?php
	ob_start();
	session_start();
	if (isset($_SESSION['MyUserName'])) {
	error_reporting(E_ALL ^ E_DEPRECATED);
		
		$db = mysql_connect("localhost","root","");
		$connect = mysql_select_db("zenith_event",$db);
	}else{
		session_destroy();
		header('Location:../index.php');
	}	
?>