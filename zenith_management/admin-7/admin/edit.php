<?php
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

					echo '';

			
						$edit_id=$_GET['id'];
						$edit_query="SELECT * FROM address WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

							$id           =$edit_row['id'];
							$new_location =$edit_row['location'];
							$new_number   =$edit_row['number'];
							$new_email    =$edit_row['email'];

							echo' 
								<form action="edit.php" method="post">
									<table class="table table-bordered">
										<tbody>
											
											<td><input type="text" value="'.$id.'" name="id" ></td>
											<td><input type="text" value="'.$new_location.'" name="mylocation" ></td>
											<td><input type="text" value="'.$new_number.'" name="mynumber"></td>
											<td><input type="text" value="'.$new_email.'" name="myemail"></td>

											<input type="submit" name="update" Value="Update Info">
										</tbody>
									</table>
								</form>
								';
						}
					}



				if(isset($_POST['update'])){
					$new_id       =$_POST['id'];
					$mylocation       =$_POST['mylocation'];
					$mynumber       =$_POST['mynumber'];
					$myemail      =$_POST['myemail'];

					$new_insert ="UPDATE address SET location ='$mylocation', number='$mynumber' , email='$myemail' WHERE id='$new_id'";
					if($new_return=mysql_query($new_insert)){
						echo '<script>alert("Data Updated !");</script>';
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

