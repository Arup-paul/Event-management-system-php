<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Notice</h1>
				<h4>Publish notice instantly</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Notice</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<form action="notice.php" method="POST" role="form" enctype="multipart/form-data">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					
						<input type="FILE" name="mypic" class="file_upload">
					
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 form-group">
				      <input type="text" class="form-control caption_text" name="caption" placeholder="Caption text Here....">
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
				      <input type="text" class="form-control caption_text2" name="description" placeholder="Place notice......" style="min-height: 200px">
				</div>

				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="picup" class="btn btn-primary upload">Publish</button>
				</div>
			</form>
			
		</div>

		

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

<?php
	require_once 'footer.php';

	if(isset($_POST['picup'])){
		$image=$_FILES['mypic']['name'];
		$img_tmp =$_FILES['mypic']['tmp_name'];
		$image_type =$_FILES['mypic']['type'];
		$temp = explode(".",$image);
		$newfile= time().'.'.end($temp);
		$caption=$_POST['caption'];
		$description=$_POST['description'];

		$image=basename($newfile);


		move_uploaded_file($img_tmp,"../../images/upload/".$image);

		$insert ="INSERT INTO notice(image,caption,description) VALUES ('$image','$caption','$description')";
		if($insert_run=mysql_query($insert)){
			echo "<script>alert('Notice Inserted ')</script>";
		}
		else{
			echo mysql_error();
		}
	}else{
			echo mysql_error();
		}
?>

