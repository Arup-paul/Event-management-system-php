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
				<legend>Form title</legend>
					
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
						<select name="" id="dpt" class="form-control departement"  onchange="showinfo();">
							<option value="0">Select Department</option>
							<option value="Computer">Computer Technology</option>
							<option value="Civil">Civil Technology</option>
							<option value="Power">Power Technology</option>
							<option value="Electrical">Electrical Technology</option>
							<option value="Electronics">Electronics Technology</option>
							<option value="Environment">Environment Technology</option>
							<option value="Mechanical">Mechanical Technology</option>
						</select>

					</div>
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

						<select name="" id="session" class="form-control" onchange="showinfo();">
							<option >Select Session</option>
							<option >8-9</option>
							<option >9-10</option>
							<option >10-11</option>
							<option >11-12</option>
							<option >12-13</option>
							<option >13-14</option>
							<option >14-15</option>
							<option >15-16</option>
							
						</select>
						</div>
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

						<select name="" id="shift" class="form-control"   onchange="showinfo();">
							<option alue="0">SELECT YOUR SHIFT</option>
						<option value="1">First Shift</option>
						<option value="2">Second Shift</option>
						</select>
					</div>
			</form>
		</div>

		<div class="row">
			<h1>Detail</h1>

			 <table class="table table-bordered" id="stresult">
			  	
			</table>
		</div>

		<div class="modal fade" id="detail">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">STUDENT's INFORMATION</h4>
        </div>
        <div class= "modal-body" id="load_stDetail">
	
        </div>
            
          

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

<?php
	require_once 'footer.php';
?>
<script type="text/javascript">
	function showinfo(){
		var dpt = $("#dpt").val().trim();
		var shift = $("#shift").val().trim();
		var session = $("#session").val().trim();
		$.ajax({
	        type: "POST",
	        url: "ajax.php",
	        data: { dptSearch:  ""+dpt+"",shift:  ""+shift+"",session:  ""+session+""}
	      }).done (function(data) {  

	            if (data==0) { 
	            	$("#stresult").html('No match found');;
	            	return false;
	            	
	            }else{
	            	
	            	$("#stresult").html(data);
	            	return true;
	            }
	        }).fail (function()  {       
	    });

		}



		function stDetail(a){
		var stDetail = $(a).val().trim();
		$.ajax({
	        type: "POST",
	        url: "ajax.php",
	        data: { stDetail:  ""+stDetail+""}
	      }).done (function(data) {  

	            if (data==0) { 
	            	$("#load_stDetail").html('System Error!');;
	            	return false;
	            	
	            }else{
	            	
	            	$("#load_stDetail").html(data);
	            	return true;
	            }
	        }).fail (function()  {       
	    });

		}



	function stDelete(a){
		var stDelete = $(a).val().trim();
			$.ajax({
		        type: "POST",
		        url: "ajax.php",
		        data: { stDelete:  ""+stDelete+""}
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