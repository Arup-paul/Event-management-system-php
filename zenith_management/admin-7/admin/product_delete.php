<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Product list</h1>
				<h4>Product History A-Z</h4>
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
		 $pid=$_GET['id'];
		 $edit_query="SELECT * FROM product WHERE id='$pid'";
		if($run_edit=mysql_query($edit_query)){
			while($edit_row=mysql_fetch_array($run_edit)){
				$image=$edit_row['pimage'];
				unlink('../../images/upload/'.$image);
			}
			$del_query="DELETE FROM product WHERE id='$pid'";
			if($del_query_del=mysql_query($del_query)){
				echo "<script>alert('Information DELETED Successfully!!');</script>";
				header('Location:productupdate.php');
			}else{
				echo mysql_error();
			}
		}

	}

	?>






		</div>
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

