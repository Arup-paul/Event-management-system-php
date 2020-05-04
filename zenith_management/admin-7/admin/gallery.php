<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>


<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-picture-o"></i> Media Update</h1>
			
		</div>


		
			<form action="gallery.php" method="POST" role="form" enctype="multipart/form-data" class="col-lg-6">
				<div class="form-group  col-lg-12 ">
					<select name="pstatus" class="form-control ">
						<option value="" selected="selected">-- Select Gallery --</option>
					
						<option value="wedding">Wedding</option>
						<option value="photography">Photography</option>
						<option value="media">Media</option>
						<option value="other">Other</option>
						
						
					</select>
				</div>

				<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
				      <input type="text" class="form-control caption_text" name="vurl" placeholder="Video Link id">
				</div>


				<div class="form-group col-lg-12">
					
						<input type="FILE" name="mypic" class="file_upload">
					
				</div>

				<!--<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
				      <input type="text" class="form-control caption_text" name="caption" placeholder="Photo Caption">
				</div>-->

				<div class="col-lg-12 " style="margin-top: 30px">
					<textarea id="summernote" class="form-control" rows="5" style="height: 300px" name="caption" ></textarea>
				</div>

				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-4 form-group">
				      <button type="submit" name="picup" class="btn btn-primary upload"><i class="fa fa-plus"></i> UPLOAD</button>
				</div><br><br>
			</form>


			
			<?php 

			echo '
			<table class="table table-bordered">
						<thead>
						<tr>
						
						<th>video link</th>
						<th>Gallery Name</th>
						<th>Media (Image)</th>
						<th>Caption</th>
						
						<th>DELETE</th>
						</tr>
						</thead>
						<tbody>
				';		

						$we_care_main="SELECT * FROM gallery ORDER BY id DESC";
						if($we_care_main1=mysql_query($we_care_main)){
						while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
							$empid         =$we_care_main2['id'];
							$vurl      =$we_care_main2['vurl'];
							$empname      =$we_care_main2['image'];
							$pstatus      =$we_care_main2['caption'];
							$gallery_name      =$we_care_main2['gallery_name'];
							
							
							echo '
							 <tr>
							   <td>'.$vurl.'</td>
						        <td>'.$gallery_name.'</td>
						        
						        <td ><img src="../../images/upload/'.$empname.'" style="height:100px;"></td>
						        
						        <td>'.$pstatus.'</td>
							 <td>
						            <a href="gallery.php?delete='.$empid.'&type='.$pstatus.'">DELETE</a>
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
	require_once 'footer.php';

	if(isset($_POST['picup'])){
		
		if(empty($_FILES['mypic']) || empty($_POST['caption'])){
			echo('<script>alert("Image Upload Failed, Please check image type-size or Caption");</script>');
		}else{
			$image=$_FILES['mypic']['name'];
			$gallery_name=$_POST['pstatus'];
		if (empty($gallery_name)) {
			$gallery_name='অন্যান্য';
		}
			$caption=$_POST['caption'];
			$vurl=$_POST['vurl'];
			$img_tmp =$_FILES['mypic']['tmp_name'];
			$image_type =$_FILES['mypic']['type'];
			$temp = explode(".",$image);
			$newfile= time().'.'.end($temp);
			
			$image=basename($newfile);
			move_uploaded_file($img_tmp,"../../images/upload/".$image);

			$insert ="INSERT INTO gallery(vurl,gallery_name,caption,image,type) VALUES ('$vurl','$gallery_name','$caption','$image','image')";
			if($insert_run=mysql_query($insert)){
				echo('<script>alert("Gallery Image Added Successfully");</script>');
			}
			else{
				echo mysql_error();
			}
		}
	}


	if(isset($_POST['vup'])){
		if(empty($_FILES['mypic']) || empty($_POST['caption']) || empty($_POST['vurl'])){
			echo('<script>alert("Video Add Failed, Please check image type-size-URL or Caption");</script>');
		}else{
			$image=$_FILES['mypic']['name'];
			$caption=$_POST['caption'];
			$gallery_name=$_POST['pstatus'];
		if (empty($gallery_name)) {
			$gallery_name='অন্যান্য';
		}
			$vurl=$_POST['vurl'];
			$promo=$_POST['promo'];
			$img_tmp =$_FILES['mypic']['tmp_name'];
			$image_type =$_FILES['mypic']['type'];
			$temp = explode(".",$image);
			$newfile= time().'.'.end($temp);

			$image=basename($newfile);
			move_uploaded_file($img_tmp,"../../images/upload/".$image);

			$insert ="INSERT INTO gallery(gallery_name,caption,image,vurl,type,promo) VALUES ('$gallery_name','$caption','$image','$vurl','video','$promo')";
			if($insert_run=mysql_query($insert)){
				if($promo==1){
					$insertWatch ="INSERT INTO watch(link,date) VALUES ('$vurl',CURDATE())";
					if ($runinsertWatch=mysql_query($insertWatch)) {
						echo('<script>alert("Video Added Successfully");</script>');
					}
					else{
						echo('<script>alert("Something Went Wrong!");</script>');
						echo mysql_error();
					}
				}else{
					echo('<script>alert("Video Added Successfully to the gallery");</script>');
				}echo $promo;
				

			}
			else{
				echo mysql_error();
			}
		}
		
	}
	
	
	if(isset($_GET['delete'])){
		$pid=$_GET['delete'];
		$edit_query="SELECT * FROM gallery WHERE id='$pid'";
		if($run_edit=mysql_query($edit_query)){
			while($edit_row=mysql_fetch_array($run_edit)){
				$image=$edit_row['image'];
				unlink('../../images/upload/'.$image);
			}
			$del_query="DELETE FROM gallery WHERE id='$pid'";
			if($del_query_del=mysql_query($del_query)){
				echo "<script>alert('Information DELETED Successfully!!');</script>";
			}else{
				echo mysql_error();
			}
		}

	}
?>

