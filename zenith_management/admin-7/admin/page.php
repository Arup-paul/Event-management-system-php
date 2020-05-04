<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-home"></i> New Page/Post </h1>
				<h4>Add Images &amp; Information </h4>
			
		</div>
			<?php
				if (isset($_GET['edit'])) {
					$id=$_GET['edit'];
					$edit_query="SELECT * FROM project WHERE id='$id'";
					if($run_edit=mysql_query($edit_query)){
						while($edit_row=mysql_fetch_array($run_edit)){
							$id=$edit_row['id'];
							$address=$edit_row['address'];
							$simage=$edit_row['image'];
							$sname=$edit_row['name'];
							$sdetails=$edit_row['details'];
							
							echo '
								

							<form action="" method="POST" enctype="multipart/form-data">
							<div  class="form-group col-lg-12" >
							<label><strong>Link</strong></label>
								<input class="form-control" type="text" value="http://selfaid4.org/detail.php?type=news&id='.$id.'&headline='.$sname.'" readonly>
							</div>
							<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12" style="max-height:200px;overflow:hidden;">
									<img src="../../images/upload/'.$simage.'" style="max-width:200px;" alt="'.$sname.'">
								</div>
								<div class="form-group col-lg-4 ">
									<input type="text" name="pname" class=" form-control " value="'.$sname.'">
								</div>
								<div class="form-group col-lg-4 " style="display:none;">
									<input type="text" name="pimage_old" class=" form-control " value="'.$simage.'">
								</div>
								<div class="form-group col-lg-4" style="display:none;">
									<input type="text" name="pid" class=" form-control " value="'.$id.'">
								</div>
								<div class="form-group col-lg-4 "  style="display:none;">
									<input type="text" name="paddress" class=" form-control " value="'.$address.'">
								</div>

								
								

								<div class="orm-group col-lg-4 ">
									<input type="FILE" name="pimage" class=" form-control ">
								</div>
								
								<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12">
									<textarea id="summernote" name="pdetails" >'.$sdetails.'</textarea>
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
				<div class="form-group col-lg-6 ">
					<input type="text" name="pname" class=" form-control " placeholder="Page Title">
				</div>
				
				<div class="form-group col-lg-6 " style="display:none">
					<input type="text" name="pstatus" class=" form-control " value="custom_post">
				</div>
				<div class="form-group col-lg-4 " style="display:none">
					<input type="text" name="paddress" class=" form-control " placeholder="Client Information for Portfolio only">
				</div>

				

				<div class="orm-group col-lg-6 ">
					<input type="FILE" name="pimage" class=" form-control ">
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="col-lg-12"  id=""></div>
				<div class="clearfix"></div>

				<div class="col-lg-12 ">
					<textarea id="summernote" name="pdetails" ></textarea>
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
						
						<th>Category</th>
						<th>Title</th>
						<th>Details</th>
						<th>Link</th>
						<th>EDIT</th>
						<th>DELETE</th>
						</tr>
						</thead>
						<tbody>
				';		

						$we_care_main="SELECT * FROM project ORDER BY id DESC";
						if($we_care_main1=mysql_query($we_care_main)){
						while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
							$empid         =$we_care_main2['id'];
							$empname      =$we_care_main2['name'];
							$pstatus      =$we_care_main2['pstatus'];
							$sdetails=$we_care_main2['details'];
							$sdetails=substr($sdetails, 0, 200).'...';
							if($pstatus=='custom_post'){
								$pstatus='<b>Page- </b>'.$empname;
							}
							echo '
							 <tr>
						        <td>'.$pstatus.'</td>
						        <td>'.$empname.'</td>
						        <td>'.$sdetails.'</td>
						        <td><input class="form-control" type="text" value="http://selfaid4.org/detail.php?type=news&id='.$empid.'&headline='.$empname.'" readonly></td>

							    <td>
								    <a href="update_project.php?edit='.$empid.'&type='.$pstatus.'">EDIT</a>
								</td>
								<td>
								    <a href="update_project.php?delete='.$empid.'&type='.$pstatus.'">DELETE</a>
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
		$detail=mysql_real_escape_string($_POST['pdetails']);
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
				header("Location:update_project.php");
			
			}else{
				echo mysql_error();
			}
		}

	}


	if(isset($_POST['service_update'])){
		$pname=$_POST['pname'];
		$pid=$_POST['pid'];
		$paddress=$_POST['paddress'];
		$detail=mysql_real_escape_string($_POST['pdetails']);
		$pimage_old=$_POST['pimage_old'];
		$who_image_check=$who_image=$_FILES['pimage']['name'];
		$img_tmp=$_FILES['pimage']['tmp_name'];
		$image_type=$_FILES['pimage']['type'];
		$temp=explode(".",$who_image);
		$newfile = time().'.'.end($temp);
		$who_image=basename($newfile);
		
		if(empty($who_image_check)){	
			
			$pro_query="UPDATE project SET name='$pname',address='$paddress',details='$detail' WHERE id='$pid'";
			if($run_pro_query=mysql_query($pro_query)){
				echo "<script>alert('Congratulations! Information  Updated without Image');</script>";
				header("Location:update_project.php");
			}else{
				echo mysql_error();
			}
		}else{
			$pro_query="UPDATE project SET name='$pname',address='$paddress',image='$who_image',details='$detail' WHERE id='$pid'";
			if($run_pro_query=mysql_query($pro_query)){
				unlink('../../images/upload/'.$pimage_old);
				move_uploaded_file($img_tmp,"../../images/upload/".$who_image);
				echo "<script>alert('Congratulations! Information  Updated with Image');</script>";
				header("Location:update_project.php");

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

