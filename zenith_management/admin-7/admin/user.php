<?php
	require_once 'connect.php';

	if(isset($_POST['reg'])){

		$user=$_POST['uname'];
		$pass=$_POST['upass'];

		$insert = "INSERT INTO user (username,userpassword) VALUES ('$user','$pass')";

		if($insert_run=mysql_query($insert)){
			echo "<script>alert('Done it Men !');</script>";
			header('Location:login.php');
		}
		else{
			echo mysql_error();
		}
	}
	else{
			echo mysql_error();
		}

?>

<form method="POST">
	<input type="text" name="uname" placeholder="User Name"></br>
	<input type="text" name="upass" placeholder="User Pass"></br>
	<input type="SUBMIT" name="reg" value="SIGN UP">
</form>