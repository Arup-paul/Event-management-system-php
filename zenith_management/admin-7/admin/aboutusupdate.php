<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>


<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-users"></i>About Us</h1>
			
		</div>


		
			<?php
			if(isset($_GET['edit'])){
				$id=$_GET['edit'];
				$type=$_GET['type'];
				$edit_query="SELECT * FROM about WHERE id='$id'";
				$run_edit=mysql_query($edit_query);
				while($edit_row=mysql_fetch_array($run_edit)){

				$id=$edit_row['id'];
				$headline =$edit_row['headline'];
				$text   =$edit_row['text'];
				$type   =$edit_row['type'];
				$update_date   =$edit_row['update_date'];

				if($type=='employee'){
					echo' 
							
					<form action="" method="post">
						<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none">
							<input type="text" class="form-control caption_text" value="'.$id.'" name="id"  >
						</div>

						<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12" >
							<label for="headline"><i class="fa fa-user"></i>Employee Name</label>
							<input type="text" class="form-control caption_text" value="'.$headline.'" name="headline" id="headline" >
						</div>

						<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12" >
							<label for="text"><i class="fa fa-briefcase"></i>Employee Designation</label>
							<input type="text" class="form-control caption_text" value="'.$text.'" name="text" id="text" >
						</div>

						
					
						<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
						      <input type="submit" name="update" class="upload" value="Update Employee">
						</div>
								
						</form>
					';
					}
				}
			}
			else{
				$edit_query="SELECT * FROM about";
				$run_edit=mysql_query($edit_query);
				while($edit_row=mysql_fetch_array($run_edit)){

					$id=$edit_row['id'];
					$headline =$edit_row['headline'];
					$text   =$edit_row['text'];
					$type   =$edit_row['type'];
					$update_date   =$edit_row['update_date'];
					if($type=='about'){
					echo' 
							
					<form action="" method="post" enctype="multipart/form-data">
						<h5 class="col-lg-12 col-sm-12 col-md-12 col-xs-12"><strong>Update Now</strong></h5>
						<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none">
							<input type="text" class="form-control caption_text" value="'.$id.'" name="id"  >
						</div>

						<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none">
							<label for="headline"><i class="fa fa-mike"></i> Big Caption</label>
							<input type="text" class="form-control caption_text" value="'.$headline.'" name="headline" id="headline" >
						</div>

						<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">

							<label for="text"><i class="fa fa-comment"></i> About Details</label>
							<textarea class="form-control caption_text"  name="text" id="text" rows="5" >'.$text.'</textarea>
						</div>

						
					
						<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
						      <input type="submit" name="update" class="upload" value="Update">
						</div>
								
						</form>
					';
					}


					
				}//While ENDS
	



				

			}//Mega else END



				

					



				if(isset($_POST['update'])){
					$new_id       =$_POST['id'];
					$headline       =$_POST['headline'];
					$headline =mysql_real_escape_string($headline);
					$text       =$_POST['text'];
					$text =mysql_real_escape_string($text);
					$new_insert ="UPDATE about SET headline ='$headline', text='$text',update_date='CURDATE()'  WHERE id='$new_id'";
					if($new_return=mysql_query($new_insert)){
						echo '<script>alert("Update Successful");</script>';
						header('Location:aboutusupdate.php');
					}
					else{
						echo "<script>alert('Failed to update!!!');</script>";
						echo mysql_error();
					}

				}

				if(isset($_POST['add_employee'])){
					$empname=$_POST['empname'];
					$emptitle=$_POST['designation'];
					if (empty($empname) || empty($emptitle)) {
						echo "<script>alert('Employee Field Could not be Empty!!');</script>";
					}else{
						$emptitle =mysql_real_escape_string($emptitle);
						$empname =mysql_real_escape_string($empname);
						$new_empinsert ="INSERT INTO about (headline,type,text,update_date) values('$empname','employee','$emptitle',CURDATE())";
						if($new_empreturn=mysql_query($new_empinsert)){
							echo '<script>alert("Employee Added");</script>';
							header('Location:aboutusupdate.php');
						}
						else{
							echo "<script>alert('Failed to Insert');</script>";
							echo mysql_error();
						}

					}
				}


				if (isset($_GET['delete'])) {
					$id=$_GET['delete'];
					$sql_del="DELETE FROM about WHERE id='$id'";
					if ($sql_run=mysql_query($sql_del)) {
						echo '<script>alert("Deleted Successfully");</script>';
						header('Location:aboutusupdate.php');
					}else{
						echo mysql_error();
					}
				}
				?>
		
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

