<?php
	require_once 'connect.php';
	require_once 'head.php';
	require_once 'left_side_nav.php';

	if(isset($_POST['reg'])){

		$user=$_POST['uname'];
		$pass=$_POST['upass'];

		$insert = "INSERT INTO user (user,pass) VALUES ('$user','$pass')";

		if($insert_run=mysql_query($insert)){
			echo "<script>alert('Done it Men !');</script>";
			header('Location:users.php');
		}
		else{
			echo mysql_error();
		}
	}
	else{
			echo mysql_error();
		}

?>




<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Home</h1>
				<h4>Overview, stats, chat and more</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Home</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<form method="POST">
				<input type="text" name="uname" placeholder="User Name"></br>
				<input type="text" name="upass" placeholder="User Pass"></br>
				<input type="SUBMIT" name="reg" value="SIGN UP">
			</form>
			
		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<?php require_once "footer.php"; ?>