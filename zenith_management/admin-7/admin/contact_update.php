<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-map-marker"></i></h1>
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
		<h1>MAP LINK INSERT FORM </h1>
			<form action="" method="POST" role="form">
			
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<input type="text" class="form-control caption_text" name="map" placeholder="Map Link Type Here....">
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
				      <button type="submit" name="map_up" class="btn btn-primary upload">MAP LINK INSERT </button>
				</div>
			</form>
		</div>



		<div class="row">
		<h1>GET IN TOUCH UPDATE FORM</h1>
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
				      <textarea name="detail_text" class="form-control caption_text" rows="5" placeholder="Your Details Text Here "></textarea>
				</div>

				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 form-group">
				      <button type="submit" name="insert" class="btn btn-primary upload">UPDATE DETAIL INFO</button>
				</div>
			</form>
		</div>
		<div class="row">
			<h1> OFFICE INFO UPDATE FORM</h1>
			<form action="" method="POST">

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
				      <input type="text" class="form-control caption_text" name="location" placeholder="Update Office Address From Here....">
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
				      <input type="text" class="form-control caption_text" name="call" placeholder="Update Official Phone Number From Here .... ">
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
				      <input type="text" class="form-control caption_text" name="email" placeholder="Update Official E-mail Id From Here ....">
				</div>

				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 form-group">
				      <button type="submit" name="update_office" class="btn btn-primary upload">UPDATE OFFICE ADDRESS</button>
				</div>

			</form>
			
		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
		
</div>

<?php
	require_once 'footer.php';

	if(isset($_POST['insert'])){
		$detail_text=$_POST['detail_text'];
		$insert ="INSERT INTO contact_welcome (gettext) VALUES ('$detail_text')";
		if($insert_run=mysql_query($insert)){
			echo('<script>alert("Hey Boss Image inserted !");</script>');
		}
		else{
			echo mysql_error();
		}
	}else{
			echo mysql_error();
		}



	if(isset($_POST['update_office'])){
		$location  =$_POST['location'];
		$call      =$_POST['call'];
		$email     =$_POST['email'];
		$insert1    ="INSERT INTO address(location,number,email) VALUES ('$location','$call','$email')";
		if($insert_run1=mysql_query($insert1)){
			echo('<script>alert("Sir ! Office Information Updated");</script>');
		}
		else{
			echo mysql_error();
		}
	}
	else{
			echo mysql_error();
		}


/* MAP link update insert query */
			if(isset($_POST['map_up'])){

			$map  =$_POST['map'];
		

			$map1 ="INSERT INTO map (map) VALUES ('$map')";
			if($map2=mysql_query($map1)){
				echo('<script>alert("Hello sir ! Map Link Updated !");</script>');
			}
			else{
				echo mysql_error();
			}
		}else{
				echo mysql_error();
			}
/* MAP link update insert query */



?>

