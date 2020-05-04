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
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>BLOG NAME</th>
				        <th>BLOG TYPE</th>
				        <th>BLOG IMAGE</th>
				        <th>BLOG TEXT</th>
				        <th>BLOG POST DATE</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM blog ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) {
							$id        =$data['id'];
							$blogname  =$data['blogname'];
							$type      =$data['type'];
							$image     =$data['image'];
							$blog_text =$data['blog_text'];
							$date      =$data['date'];
							echo '<tr>
								 	<td>'.$id.'</td>
							        <td>'.$blogname.'</td>
							        <td>'.$type.'</td>
							        <td><img src="../../images/upload/'.$image.'" alt="Here is uploaded image" width="300px" height="150px"> </td>
							        <td>'.$blog_text.'</td>
							        <td>'.$date.'</td>
							        <td>
								        <a href="blog_edit.php?id='.$id.'">EDIT</a>
								    </td>
								    <td>
								         <a href="blog_delete.php?id='.$id.'">DELETE</a>
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

