<?php
	require_once "../connect.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Zenith Event Management Company</title>

		<!--base css styles-->
		 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
		
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

		<!--page specific css styles-->
		<link rel="stylesheet" href="assets/code-prettify/code-prettify.css">

		<!--flaty css styles-->
		<link rel="stylesheet" href="css/flaty.css">
		<link rel="stylesheet" href="css/flaty-responsive.css">

		<link rel="shortcut icon" href="img/favicon.html">



		<link rel="stylesheet" type="text/css" href="css/admin_page_style.css">
	</head>
<body>


<div id="navbar" class="navbar">
	<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
	<span class="fa fa-bars"></span>
	</button>
	<a class="navbar-brand" href="#">
		<small style="text-align: center!important;">
			<i class="fa fa-desktop"></i>
				Zenith Event Management
		</small>
	</a>

	<ul class="nav flaty-nav pull-right">
		<li class="user-profile">
			<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
				<img class="nav-user-photo" src="img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />
				<span class="hhh" id="user_info">
				Admin Panel
				</span>
			</a>
		</li>
	</ul>
</div>

<div class="container" id="main-container">