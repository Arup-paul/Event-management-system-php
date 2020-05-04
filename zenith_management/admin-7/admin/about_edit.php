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
				if(isset($_GET['id'])){
						
						$edit_id=$_GET['id'];
						$edit_query="SELECT * FROM latest_news WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

							$id          =$edit_row['id'];
							$latest_run    =$edit_row['lnews'];

							echo' 
									<h1>QUICK LINK EDIT FORM</h1>
								<form action="" method="post">
								
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$id.'" name="id" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$latest_run.'" name="latestplus" >
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
					$latestplus  =$_POST['latestplus'];

					$new_insert ="UPDATE latest_news SET lnews ='$latestplus' WHERE id='$new_id'";
					if($new_return=mysql_query($new_insert)){
						echo '<script>alert("Data Updated !");</script>';
						header('Location:footerupdatestory.php');
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

