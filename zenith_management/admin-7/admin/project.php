<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Home</h1>
				<h4>Overview, stats, chat and more</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Home</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<form action="gallery.php" method="POST" role="form" enctype="multipart/form-data">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<input type="FILE" name="mypic" class="file_upload">
					
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
				      <input type="text" class="form-control caption_text" name="caption" placeholder="Caption text Here....">
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<textarea name="" id="input" class="form-control" rows="3" placeholder="text here "></textarea>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
				      <button type="submit" name="picup" class="btn btn-primary upload">UPLOAD</button>
				</div>
			</form>
			
		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';

	if(isset($_POST['picup'])){
		$image=$_FILES['mypic']['name'];
		$caption=$_POST['caption'];
		$img_tmp =$_FILES['mypic']['tmp_name'];
		$image_type =$_FILES['mypic']['type'];
		$temp = explode(".",$image);
		$newfile= time().'.'.end($temp);

		$image=basename($newfile);


		move_uploaded_file($img_tmp,"../../images/upload/".$image);

		$insert ="INSERT INTO gallery(caption,image) VALUES ('$caption','$image')";
		if($insert_run=mysql_query($insert)){
			echo('<script>alert("Hey Boss Image inserted !");</script>');
		}
		else{
			echo mysql_error();
		}
	}else{
			echo mysql_error();
		}
?>

