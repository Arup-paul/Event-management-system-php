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
			<form action="" method="POST" role="form">
			<h1>Quick Link Update From</h1>
				
				<div class="col-lg-5 col-sm-5 col-md-5 col-xs-4">
						<input type="text" class="form-control caption_text" name="quick_link" placeholder="We are Real Estate text Type Here....">
				</div>

				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="quick_submit" class="btn btn-primary upload">QUICK LINK UPDATE</button>
				</div>
			</form>
		</div>

<div class="row">

			<form action="" method="POST" role="form">
			<h1>Latest News Update Form</h1>
				<div class="col-lg-5 col-sm-5 col-md-5 col-xs-4">
						<input type="text" class="form-control caption_text" name="latest" placeholder="Latest Link Text Type Here....">
				</div>

				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="latest_submit" class="btn btn-primary upload">LATEST LINK UPDATE</button>
				</div>
			</form>
</div>
<!--
<div class="row">
			<form action="" method="POST" role="form">
			<h1> LOGO UPDATE </h1>
				<div class="col-lg-5 col-sm-5 col-md-5 col-xs-4">
						<input type="FILE" class="form-control caption_text" name="logo" placeholder="About Real Estate text Type Here....">
				</div>

				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="logo_sub" class="btn btn-primary upload">DATA INSERT </button>
				</div>
			</form>
</div>
-->
		<h1>FOOTER ABOUT TEXT</h1>

		<div class="row">
			<form action="" method="POST" role="form">
				<div class="col-lg-5 col-sm-5 col-md-5 col-xs-4">

						<textarea name="ab_text" class="form-control" placeholder="Footer About text Type Here...." rows="5"></textarea>
				</div>

				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="foot_sub" class="btn btn-primary upload">DATA INSERT </button>
				</div>
			</form>
		</div>

		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';

	if(isset($_POST['foot_sub'])){
		$about=$_POST['ab_text'];

		$about_run="INSERT INTO footer_about (text) VALUES ('$about')";
		if($about_run1=mysql_query($about_run)){
			echo '<script>alert("About data Inserted !");</script>';
		}
	}







	if(isset($_POST['quick_submit'])){

		$quick_link=$_POST['quick_link'];
	
	

		$insert ="INSERT INTO quick(link_name) VALUES ('$quick_link')";
		if($insert_run=mysql_query($insert)){
			echo('<script>alert("HELLO SIR QUICK LINK UPDATED !");</script>');
		}
		else{
			echo mysql_error();
		}
	}else{
			echo mysql_error();
		}


		if(isset($_POST['footer_title_submit'])){

		$foot_title=$_POST['foot_title'];
	
	

		$footer_insert ="INSERT INTO footer_title(name) VALUES ('$foot_title')";
		if($footer_insert1=mysql_query($footer_insert)){
			echo('<script>alert("HELLO SIR FOOTER TITLE UPDATED !");</script>');
		}
		else{
			echo mysql_error();
		}
	}else{
			echo mysql_error();
		}



		if(isset($_POST['latest_submit'])){

		$latest=$_POST['latest'];
	

		$insert ="INSERT INTO latest_news (lnews) VALUES ('$latest')";
		if($insert_run=mysql_query($insert)){
			echo('<script>alert("SIR LATEST NEWS LINK UPDATED !");</script>');
		}
		else{
			echo mysql_error();
		}
	}else{
			echo mysql_error();
		}

		
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


			if(isset($_POST['watch'])){

			$watch_text   =$_POST['watch_text'];
			$watch_icon  =$_POST['watch_icon'];
			$watch_link  =$_POST['Youtube'];
		

			$insert52 ="INSERT INTO watch (text,icon,link) VALUES ('$watch_text','$watch_icon','$watch_link')";
			if($insert_run11=mysql_query($insert52)){
				echo('<script>alert("Hey Boss Image inserted !");</script>');
			}
			else{
				echo mysql_error();
			}
		}else{
				echo mysql_error();
			}



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
		
?>

