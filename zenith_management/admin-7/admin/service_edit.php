<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> BLOG list</h1>
				<h4>BLOG History A-Z</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> BLOG list below</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<?php
				if(isset($_GET['smile'])){
						
						$edit_id=$_GET['smile'];
						$edit_query="SELECT * FROM service WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

							$id     	     =$edit_row['id'];
							$ic 		 =$edit_row['icon'];
							$service_name    =$edit_row['service_name'];
							$service_text    =$edit_row['service_text'];

							echo'<h1>ABOUT SERVICE LINK EDIT FORM</h1>
									<form action="" method="post">
									
												<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
													<input type="text" class="form-control caption_text" value="'.$id.'" name="id" >
												</div>

												<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
													<input type="text" class="form-control caption_text" "name="service_name" value="'.$service_name.'">
												</div>

												<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
													<input type="text" value="'.$ic.'" placeholder="Hello icon" class="form-control caption_text" name="iconmen" >
												</div>

												<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
													<input type="text" class="form-control caption_text" value="'.$service_text.'" name="service_text" >
												</div>

												<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
												      <input type="submit" name="update" class="upload" value="UPDATE INFO ">
												</div>
											
									</form>
								';
						}
					}



				if(isset($_POST['update'])){
					$new_id     =$_POST['id'];
					$iconxxx  =$_POST['iconmen'];
					$service_name  =$_POST['service_name'];
					$service_text  =$_POST['service_text'];

					$new_insert ="UPDATE service SET icon ='$iconxxx', service_name='$service_name', service_text='$service_text' WHERE id='$new_id'";
					if($new_return=mysql_query($new_insert)){
						echo '<script>alert("Data Updated !");</script>';
						header('Location:updateabout.php');
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

