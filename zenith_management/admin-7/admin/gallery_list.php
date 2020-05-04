<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-picture-o"></i>Media Archieve</h1>
				<h4>All Uploaded Image & Videos</h4>
			
		</div>

		
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>Type</th>
				        <th>Image/Cover</th>
				        <th>Caption</th>
				        <th>Date Added</th>
				        <th>DELETE</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$parts = "../../images/upload";
			    	$sqlforuser="SELECT * FROM gallery ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) {
							$id=$data['id'];
							$caption=$data['caption'];
							$type=$data['type'];
							$image=$data['image'];
							$date=$data['date'];
							if ($type=='image') {
								$type='<i class="fa fa-camera"></i>';
							}else{
								$type='<i class="fa fa-play-circle"></i>';
							}
							echo '
							 <tr>
						        <td>'.$type.'</td>

						        <td style="overflow:hidden;height:100px"><img src="'.$parts.'/'.$image.'" style="height:100%"> </td>
						        <td>'.$caption.'</td>
						        <td>'.$date.'</td>
							    <td>
							         <a href="gallery_delete.php?id='.$id.'">DELETE</a>
							    </td>
						      </tr>
							';
						}
					}
			    	?>
			     


			    </tbody>
			</table>
			
		

		

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

<script type="text/javascript">
	function newsGDelete(a){
	var newsGDelete = $(a).val().trim();
	$.ajax({
        type: "POST",
        url: "ajax.php",
        data: { newsGDelete:  ""+newsGDelete+""}
      }).done (function(data) {  

            if (data==1) { 
            	$(a).hide('slow');
            	location.reload();
            	return true;
            }else{
            	alert('Could not delete, try again'+data);
            	return false;
            }
        }).fail (function()  {       
    });


}
</script>