<?php
	ob_start();
	session_start();
	require_once 'connect.php';
	if(isset($_POST['submitme'])){
		$user=$_POST['uname'];
		$pass=md5($_POST['upass']);

		if(empty($user) || empty($pass)){
			echo "<script>alert('Hey your session Almost Destroy !');</script>";
		}
		else{
			$data="SELECT * FROM user WHERE user='$user' AND pass='$pass' ";
			if($my=mysql_query($data)){
				if(mysql_num_rows($my)>0){
					$user=$_SESSION['MyUserName']=$_POST['uname'];
					$pass=$_SESSION['MyUserPass']=$_POST['upass'];
					header('Location:admin/index.php');
				}
				else{
					echo "<script>alert('Your User Name or  Password Doesn't Match !);</script>";
					
				}
			}else{
				echo mysql_error();
			}
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">
      <script src="js/jquery.min.js"></script>
  </head>
  <body>
  	<div class="container-fluid edit_form">
  		<div class="container">
  			<div class="col-lg-5 col-lg-offset-3 col-md-5 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-12 edit_from_two">
			  	<form class="form-horizontal login" method="post" action="">
			  		<div class="user">
				  		<i class="fa fa-user"></i>
			  		</div>
					<div class="form-group email">
					    <div>
					    	<input type="text" name="uname" class="form-control  form-style" id="email" placeholder="User Name">
					    </div>
					</div>
					<div class="form-group password">
					    <div>
					    	<input type="password" name="upass" class="form-control form-style" id="pwd" placeholder="Enter password">
					    </div>
					</div>


					<div class="form-group">
						<div class=" btn-submit" style="text-align: center;">
							<button type="submit" style="display: inline-block;" name="submitme" class="btn btn-success submit">Login</button>

						</div>
					</div>
					
					
				</form>
			</div>
		</div>
  	</div>
  </body>
</html>