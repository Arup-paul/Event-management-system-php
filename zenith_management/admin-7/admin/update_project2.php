<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-trophy"></i> Sonar Bangla Logistics Award </h1>
				<h4>Add award Image & Details </h4>
			
		</div>

			<?php
				if (isset($_GET['edit'])) {
					$id=$_GET['edit'];
					$edit_query="SELECT * FROM project WHERE id='$id' AND pstatus='award'";
					if($run_edit=mysql_query($edit_query)){
						while($edit_row=mysql_fetch_array($run_edit)){
							$id=$edit_row['id'];
							$address=$edit_row['address'];
							$simage=$edit_row['image'];
							$sname=$edit_row['name'];
							$sdetails=$edit_row['details'];
							
							echo '
								

							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12">
									<input type="text" name="pname" class=" form-control " value="'.$sname.'">
								</div>
								<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12" style="display:none;">
									<input type="text" name="pimage_old" class=" form-control " value="'.$simage.'">
								</div>
								<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12" style="display:none;">
									<input type="text" name="pid" class=" form-control " value="'.$id.'">
								</div>
								<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12">
									<input type="text" name="paddress" class=" form-control " value="'.$address.'">
								</div>

								<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12" style="max-height:200px;overflow:hidden;">
									<img src="../../images/upload/'.$simage.'" style="max-width:200px;" alt="'.$sname.'">
								</div>
								

								<div class="orm-group col-lg-6 col-sm-6 col-md-6 col-xs-12">
									<input type="FILE" name="pimage" class=" form-control ">
								</div>
								<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12">
									<textarea name="pdetails"  class="form-control file_upload" rows="5" >'.$sdetails.'</textarea>
								</div>
								

								
								<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
								      <input type="submit" name="service_update" class="upload" value="Update Information">
								</div>
							</form>
							';
						}
					}else{
						echo mysql_error();
					}
				}
				else{
					echo '

					<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<input type="text" name="pname" class=" form-control " placeholder="Title">
				</div>
				<div class="form-group  col-lg-6 col-sm-6 col-md-6 col-xs-12" style="display:none;">
					<input type="text" name="pstatus" class=" form-control " value="award">
				</div>
				<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12" style="display:none;">
					<input type="text" name="paddress" class=" form-control " placeholder="Client Information for Portfolio only">
				</div>
				

				<div class="orm-group col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<input type="FILE" name="pimage" class=" form-control ">
				</div>
				<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<textarea name="pdetails"  class="form-control file_upload" rows="5" placeholder="Details"></textarea>
				</div>
				

				
				<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
				      <input type="submit" name="service_insert" class="upload" value="Insert Information">
				</div>
			</form>
					';
				}
			?>
			








			<?php 

			echo '
			<table class="table table-bordered">
						<thead>
						<tr>
						
						<th>Title</th>
						<th>Details</th>
						<th>EDIT</th>
						<th>DELETE</th>
						</tr>
						</thead>
						<tbody>
				';		

						$we_care_main="SELECT * FROM project WHERE pstatus='award' ORDER BY id DESC";
						if($we_care_main1=mysql_query($we_care_main)){
						while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
							$empid         =$we_care_main2['id'];
							$empname      =$we_care_main2['name'];
							$pstatus      =$we_care_main2['pstatus'];
							$sdetails=$we_care_main2['details'];
							$sdetails=substr($sdetails, 0, 200).'...';

							echo '
							 <tr>
						        <td>'.$empname.'</td>
						        <td>'.$sdetails.'</td>
							    <td>
								    <a href="update_project2.php?edit='.$empid.'&type='.$pstatus.'">EDIT</a>
								</td>
								<td>
								    <a href="update_project2.php?delete='.$empid.'&type='.$pstatus.'">DELETE</a>
								</td>
						      </tr>
							';
							
							}
						}
						echo '
						</tbody>
						</table>
						';

				?>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php

	if(isset($_POST['service_insert'])){
		$pname=$_POST['pname'];
		$pstatus=$_POST['pstatus'];
		$paddress=$_POST['paddress'];
		$detail=$_POST['pdetails'];
		$who_image=$_FILES['pimage']['name'];
		$img_tmp=$_FILES['pimage']['tmp_name'];
		$image_type=$_FILES['pimage']['type'];
		$temp=explode(".",$who_image);
		$newfile = time().'.'.end($temp);
		$who_image=basename($newfile);
		
		if(empty($pname) || empty($who_image)){	
			
			echo "<script>alert('Failed!!! Pleas give lat or long and also Image and all information.');</script>";
		}else{
			$pro_query="INSERT INTO project (name,address,pstatus,image,details,date) 
			VALUES('$pname','$paddress','$pstatus','$who_image','$detail',CURDATE())";
			if($run_pro_query=mysql_query($pro_query)){
				move_uploaded_file($img_tmp,"../../images/upload/".$who_image);
			echo "<script>alert('Congratulations! Information  Added');</script>";
			}else{
				echo mysql_error();
			}
		}

	}


	if(isset($_POST['service_update'])){
		$pname=$_POST['pname'];
		$pid=$_POST['pid'];
		$paddress=$_POST['paddress'];
		$detail=$_POST['pdetails'];
		$pimage_old=$_POST['pimage_old'];
		$who_image=$_FILES['pimage']['name'];
		$img_tmp=$_FILES['pimage']['tmp_name'];
		$image_type=$_FILES['pimage']['type'];
		$temp=explode(".",$who_image);
		$newfile = time().'.'.end($temp);
		$who_image=basename($newfile);
		
		if(empty($who_image)){	
			
			$pro_query="UPDATE project SET name='$pname',address='$paddress',details='$detail' WHERE id='$pid'";
			if($run_pro_query=mysql_query($pro_query)){
				echo "<script>alert('Congratulations! Information  Updated without Image');</script>";
			}else{
				echo mysql_error();
			}
		}else{
			$pro_query="UPDATE project SET name='$pname',address='$paddress',image='$who_image',details='$detail' WHERE id='$pid'";
			if($run_pro_query=mysql_query($pro_query)){
				unlink('../../images/upload/'.$pimage_old);
				move_uploaded_file($img_tmp,"../../images/upload/".$who_image);
				echo "<script>alert('Congratulations! Information  Updated with Image');</script>";
			}else{
				echo mysql_error();
			}
		}

	}


	if(isset($_GET['delete'])){
		$pid=$_GET['delete'];
		$edit_query="SELECT * FROM project WHERE id='$pid'";
		if($run_edit=mysql_query($edit_query)){
			while($edit_row=mysql_fetch_array($run_edit)){
				$image=$edit_row['image'];
				unlink('../../images/upload/'.$image);
			}
			$del_query="DELETE FROM project WHERE id='$pid'";
			if($del_query_del=mysql_query($del_query)){
				echo "<script>alert('Information DELETED Successfully!!');</script>";
			}else{
				echo mysql_error();
			}
		}

	}




	require_once 'footer.php';


				
?>

