<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-plus"></i> Add New Destination Details</h1>
				<a href="productupdate.php" style="border: 1px solid #000;padding: 3px 5px;display: inline-block;"> View All </a>
			
		</div>
	

	

		<div class="row">
			
			<form action="" method="POST" enctype="multipart/form-data">
			

				



					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 from-group">
					<select name="category" id="pcategory" class="form-control departement" onchange="return getSubcategory10()">
						<option>-- Choose  Destinations --</option>
					    <?php
						        $we_care_main="SELECT * FROM productcategory ORDER BY id DESC";
						        if($we_care_main1=mysql_query($we_care_main)){
						        while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
						          $empid         =$we_care_main2['id'];
						          $category      =$we_care_main2['category'];     
						 
						      ?>
						<option value="<?php echo $category;?>"><?php echo $category;?>
							
						</option>
						<?php } } ?>
					</select>
				</div>

				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 from-group">
					<select name="subcategory" class="form-control departement">
						<option>-- Choose Category --</option>
						<option>Hotel</option>
						<option>Restraunt</option>
						<option>Shopping</option>
						<option>Beauty & Spa</option>
						<option>Cinema</option>
						<option>Place</option>
						<option>Nature</option>
					</select>
				</div>


				<div class="col-lg-4 from-group">
						<input type="text" class="form-control caption_text" name="name" placeholder="Destination name ....">
				</div>


				<div class="col-lg-12 " style="margin-top: 30px">
					<textarea id="summernote" class="form-control" rows="5" style="height: 300px" name="details" ></textarea>
				</div>


				<div class="col-lg-12 from-group">
					<input type="FILE" name="pimage" class="file_upload">
				</div>
			



				
				

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
					<button type="SUBMIT" name="service_insert" class="btn btn-md btn-primary" value=""><i class="fa fa-plus"></i> Add New Detination</button>
				</div>
			</form>
		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';

	if(isset($_POST['service_insert'])){
		$category=$_POST['category'];
		$subcategory=$_POST['subcategory'];
		$details=$_POST['details'];
		$details=mysql_real_escape_string($details);
		$name=$_POST['name'];

		$who_image=$_FILES['pimage']['name'];
		$img_tmp=$_FILES['pimage']['tmp_name'];
		$image_type=$_FILES['pimage']['type'];
		$temp=explode(".",$who_image);
		$newfile = time().'.'.end($temp);
		$who_image=basename($newfile);
		move_uploaded_file($img_tmp,"../../images/upload/".$who_image);


		


		$speech="INSERT INTO product(name,category,subcategory,details,pimage) VALUES ('$name','$category','$subcategory','$details','$who_image')";
		if($speech_run=mysql_query($speech)){
			echo '<script>alert("Product Inserted Succesfully !");</script>';
		}else{
			echo '<script>alert("Sorry Something Wrong in your Code !");</script>';

			echo mysql_error();
		}

	}				
?>

