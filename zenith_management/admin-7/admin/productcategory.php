<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-plus"></i> Add New Destination Location</h1>
				
			
		</div>
		<!-- END Page Title -->

	

		<div class="row">
			
			<form action="" method="POST" enctype="multipart/form-data">
			

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<input type="text" class="form-control caption_text" name="category" placeholder="Type Your Destination name ....">
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<input type="SUBMIT" name="service_insert" class="blogSubmit btn btn-info" value="Submit Category">
				</div>
			</form>
		</div>
		<hr>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';

	if(isset($_POST['service_insert'])){
		$category=$_POST['category'];



		$speech="INSERT INTO productcategory(category) VALUES ('$category')";
		if($speech_run=mysql_query($speech)){
			echo '<script>alert("Product Inserted Succesfully !");</script>';
		}else{
			echo '<script>alert("Sorry Something Wrong in your Code !");</script>';

			echo mysql_error();
		}

	}				
?>

