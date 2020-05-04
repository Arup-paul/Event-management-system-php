<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i>New Member Add</h1>
			</div>
		</div>
		<!-- END Page Title -->

		

		                  <div class="row">
								<form action="" method="post">
								
											<div class="col-lg-6 col-sm-12 col-md-6 col-xs-6">
												<label for="name">Name</label>
												<input type="text" id="name" class="form-control caption_text" placeholder="Enter Name" name="user" >
											</div>

											<div class="col-lg-6 col-sm-12 col-md-6 col-xs-6">
												<label for="pass">Password</label>
												<input type="password" id="pass" class="form-control caption_text" placeholder="Enter Password" name="pass" >
											</div>

											<div class="col-lg-6 col-sm-12 col-md-6 col-xs-6">
												<label for="email">Email</label>
												<input type="text" id="email" class="form-control caption_text" placeholder="Enter your Email" name="email" >
											</div>

                                            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-6">
												<label for="role">Role</label>
												<select name="role" id="role" class="form-control caption_text">
						                        <option>Select Role</option>
						                         <option value="1" >Admin</option>
						                         <option value="2" >Editor</option>
						                         <option value="3" >Moderator</option>
						
					                           </select>
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
											      <input type="submit" name="insert" class="upload" value="Add New Member">
											</div>

										
								</form>
								
		</div>



         

							


<?php
	require_once 'footer.php';

	if(isset($_POST['insert'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$pass = md5($pass);
		$email=$_POST['email'];
		$role=$_POST['role'];

		$speech="INSERT INTO user(user,pass,email,role) VALUES ('$user','$pass','$email','$role')";
		if($speech_run=mysql_query($speech)){
			echo '<script>alert("New Member Adderd Succesfully Succesfully !");</script>';
		}else{
			echo '<script>alert("Sorry Something Wrong in your Code !");</script>';

			echo mysql_error();
		}

	}	
?>




