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
		<h1> LOGO UPDATE </h1>
			<form action="" method="POST" role="form" enctype="multipart/form-data">	
				<div class="col-lg-5 col-sm-5 col-md-5 col-xs-4">
						<input type="FILE" class="form-control caption_text" name="logo" placeholder="About Real Estate text Type Here....">
				</div>

				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="logo_sub" class="btn btn-primary upload">DATA INSERT </button>
				</div>
			</form>
</div>

<!-- video link update -->
		<div class="row">
		<h1>Right Div List Update</h1>
			<form action="" method="POST" role="form">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
						<input type="text" class="form-control caption_text" name="About" placeholder="Watch Us text Type Here....">
				</div>
				
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
				      <button type="submit" name="picup" class="btn btn-primary upload">UPLOAD</button>
				</div>
			</form>
		</div>

<!-- video link update -->

		<div class="row">

		<h1> WE Care about Real Estate</h1>
			<form action="" method="POST" role="form">
				<div class="col-lg-5 col-sm-5 col-md-5 col-xs-4">
						<input type="text" class="form-control caption_text" name="we_title" placeholder="Div Title text Type Here....">
				</div>
				
				<div class="col-lg-5 col-sm-5 col-md-5 col-xs-4 form-group">
				      <textarea name="we_detail"  class="form-control" rows="5" placeholder="Type Your Text From Here ....."></textarea>
				</div>
				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="we_submit" class="btn btn-primary upload">WE CARE DATA INSERT</button>
				</div>
			</form>
		</div>

		<!-- watch us insert form -->
		<div class="row">
					<form action="" method="POST" role="form">
					<h1>Watch Us Form </h1>
						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
						      <input type="text" class="form-control caption_text" name="Youtube" placeholder="Youtube Link Type Here....">
						</div>

			
						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
						      <button type="submit" name="watch" class="btn btn-primary upload">YOUTUBE LINK INSERT </button>
						</div>
					</form>
		</div>
		<!-- watch us insert form -->

		<!-- Map upload -->
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
		<!-- Map Upload -->
	</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';


		if(isset($_POST['logo_sub'])){


			$image=$_FILES['logo']['name'];
			$img_tmp =$_FILES['logo']['tmp_name'];
			$image_type =$_FILES['logo']['type'];
			$temp = explode(".",$image);
			$newfile= time().'.'.end($temp);

			$image=basename($newfile);


			move_uploaded_file($img_tmp,"../../images/upload/".$image);
		

			$logo ="INSERT INTO logo (logo) VALUES ('$image')";
			if($logo1=mysql_query($logo)){
				echo('<script>alert("HELLO SIR LOGO UPDATED !");</script>');
			}
			else{
				echo mysql_error();
			}
		}else{
				echo mysql_error();
			}

/* video icon update and text update*/

		if(isset($_POST['picup'])){

		$About=$_POST['About'];
	

		$insert ="INSERT INTO we_are_realestate(list) VALUES ('$About')";
		if($insert_run=mysql_query($insert)){
			echo('<script>alert("Hey Boss Image inserted !");</script>');
		}
		else{
			echo mysql_error();
		}
	}else{
			echo mysql_error();
		}

		/* we care about real estate */
		if(isset($_POST['we_submit'])){

			$wecare_name   =$_POST['we_title'];
			$we_care_icon  =$_POST['we_care_icon'];
			$we_detail     =$_POST['we_detail'];
		

			$insert52 ="INSERT INTO we_care (name,we_care_icon,we_care_detail) VALUES ('$wecare_name','$we_care_icon','$we_detail')";
			if($insert_run11=mysql_query($insert52)){
				echo('<script>alert("Hey Boss Image inserted !");</script>');
			}
			else{
				echo mysql_error();
			}
		}
		/* we care about real estate */


/* watch us video link update insert query */
			if(isset($_POST['watch'])){
			$watch_link  =$_POST['Youtube'];
		

			$insert52 ="INSERT INTO watch (link) VALUES ('$watch_link')";
			if($insert_run11=mysql_query($insert52)){
				echo('<script>alert("Hey Boss Image inserted !");</script>');
			}
			else{
				echo mysql_error();
			}
		}else{
				echo mysql_error();
			}
/* watch us video link update insert query */


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

