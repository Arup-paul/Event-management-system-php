<?php
	ob_start();
	session_start();
	require_once 'connect.php';
	if(isset($_POST['submitme'])){
		$user=$_POST['uname'];
		$pass=md5($_POST['upass']);
		$role=$_POST['role'];

		if(empty($user) || empty($pass)){
			echo "<script>alert('Hey your session Almost Destroy !');</script>";
		}
		else{
			$query="SELECT * FROM user WHERE user='$user' AND pass='$pass' AND role='$role'";
			if ($run_query = mysql_query($query)) {
				$num = mysql_num_rows($run_query);
			}else{
				echo mysql_error();
			}
			if($num==1){
				  while($data=mysql_fetch_assoc($run_query)) {
                    $user=$_SESSION['MyUserName']=$_POST['uname'];
					$pass=$_SESSION['MyUserPass']=$_POST['upass'];
					$role=$_SESSION['role']=$_POST['role'];
				   $_SESSION['logged_in']=true;
          }
          if($role==1){
            header('Location:admin/index.php');
          }
          if($role==2){
            header('Location:admin/index.php');
          }

          if($role==3){
            header('Location:admin/index.php');
          }
          
          exit();
        }
        else{
          $error="Incorrect Details!";
          echo $error;
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
					<div class="form-group password" style="display: none;">
					    <div>
					    	<input type="text" name="role" class="form-control form-style" id="pwd" placeholder="Enter role">
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