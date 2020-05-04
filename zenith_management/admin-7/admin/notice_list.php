<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Notice list</h1>
				<h4>Notice History A-Z</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Notice list below</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>Heding</th>
				        <th>Description</th>
				        <th>Date</th>
				        <th>ACTION</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM notice ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) {
							$id=$data['id'];
							$caption=$data['caption'];
							$description=$data['description'];
							$date=$data['date'];
							echo '
							 <tr>
						        <td>'.$caption.'</td>
						        <td>'.$description.'</td>
						        <td>'.$date.'</td>
						        <td>
						         <button class="btn btn-danger" value="'.$id.'" onclick="confirm(\'Are you sure to delete it !\'); newsDelete(this)">Delete</button>
						        </td>
						      </tr>
							';
						}
					}
			    	?>
			     


			    </tbody>
			</table>
			
		</div>

		

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
	function newsDelete(a){
	var newsDelete = $(a).val().trim();
	$.ajax({
        type: "POST",
        url: "ajax.php",
        data: { newsDelete:  ""+newsDelete+""}
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