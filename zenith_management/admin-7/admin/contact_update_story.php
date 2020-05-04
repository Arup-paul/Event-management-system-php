<?php
	ob_start();
	
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Gallery Image list</h1>
				<h4>Gallery History A-Z</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Gallery list below</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>id</th>
				        <th>Address</th>
				        <th>Call</th>
				        <th>E-mail</th>
				        <th>EDIT</th>
				        <th>DELETE</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlrun="SELECT * FROM address ORDER BY id DESC";
					if($sqlrun1=mysql_query($sqlrun)){
						while ($sqlrun2=mysql_fetch_assoc($sqlrun1)) {
							$id=$sqlrun2['id'];
							$location=$sqlrun2['location'];
							$number=$sqlrun2['number'];
							$email=$sqlrun2['email'];
							echo '
							 <tr>
						        <td>'.$id.'</td>
						        <td>'.$location.'</td>
						        <td>'.$number.'</td>
						        <td>'.$email.'</td>
						        <td>
						         <a href="contact_edit.php?apps='.$id.'">EDIT</a>
						        </td>
						        <td>
						         <a href="contact_delete.php?id='.$id.'">DELETE</a>
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
?>
