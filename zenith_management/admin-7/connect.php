<?php
//Ei Line ta backdated mysql support kiorar jonne
error_reporting(E_ALL ^ E_DEPRECATED);
//mysql_connect("localhost","user_name","password");
$jata=mysql_connect("localhost","root","");
$connect = mysql_select_db("zenith_event",$jata);
?>