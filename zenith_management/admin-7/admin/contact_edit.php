<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			
				<h1><i class="fa fa-map-marker"></i> Contact Update</h1>
				<h4>From this panel, you can edit and Update all contacts of SEVEN Properties Limited</h4>
			
		</div>
		<!-- END Page Title -->


		<div class="row">
			<?php
				if(isset($_GET['apps'])){
						
						$edit_id=$_GET['apps'];
						$edit_query="SELECT * FROM address WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

							$id           =$edit_row['id'];
							$new_location =$edit_row['location'];
							$map =$edit_row['map'];
							$new_number   =$edit_row['number'];
							$new_email    =$edit_row['email'];

							echo' 
								
								<form action="" method="post">
								
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$id.'" name="id" style="display:none" >
											</div>

											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<label for="map"><i class="fa fa-map-marker"></i> Google Office Map location</label>
												<input type="text" class="form-control caption_text" value="'.$map.'" name="map" >
											</div>

											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
											<label for="mylocation"><i class="fa fa-map-marker"></i> Office Address</label>
												<input type="text" class="form-control caption_text" value="'.$new_location.'" name="mylocation" >
											</div>

											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<label for="mynumber"><i class="fa fa-phone"></i> Contact Mobile/Phone</label>
												<input type="text" class="form-control caption_text" value="'.$new_number.'" name="mynumber" >
											</div>

											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<label for="myemail"><i class="fa fa-envelope"></i> E-mail</label>
												<input type="text" class="form-control caption_text" value="'.$new_email.'" name="myemail" >
											</div>

										
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
											      <input type="submit" name="update" class="upload" value="Update Contact Info">
											</div>
										
								</form>
								';
						}
					}



				if(isset($_POST['update'])){
					$new_id       =$_POST['id'];
					$mylocation       =$_POST['mylocation'];
					$map       =$_POST['map'];
					$mynumber       =$_POST['mynumber'];
					$myemail      =$_POST['myemail'];

					$new_insert ="UPDATE address SET location ='$mylocation', number='$mynumber' , email='$myemail', map='$map' WHERE id='$new_id'";
					if($new_return=mysql_query($new_insert)){
						echo '<script>alert("Contact Updated !");</script>';
						header('Location:contact_edit.php?apps=1');
					}
					else{
						echo "<script>alert('Nothing Update');</script>";
						echo mysql_error();
					}

				}
				?>
		</div>
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

