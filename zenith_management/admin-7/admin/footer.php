
</div>

<footer>
	<p style="color: #4C8BF5;font-size: 1.5rem; text-align: center;">Zenith Event Managment company</p>
</footer>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/jquery-cookie/jquery.cookie.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!--page specific plugin scripts-->
<script src="assets/flot/jquery.flot.js"></script>
<script src="assets/flot/jquery.flot.resize.js"></script>
<script src="assets/flot/jquery.flot.pie.js"></script>
<script src="assets/flot/jquery.flot.stack.js"></script>
<script src="assets/flot/jquery.flot.crosshair.js"></script>
<script src="assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/sparkline/jquery.sparkline.min.js"></script>

<script src="js/flaty.js"></script>
<script src="js/flaty-demo-codes.js"></script>


  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
        $('.note-editable').keyup(function(){
        	
        	var data=$('.note-editable').text();
        	//alert(32323+data);
        	$('#text_area_detail').html(data);
        });
    });
  



  //Get Account Head & Generate Auto Voucher after Choosing Payment Type Start
  var ajax_url='ajax.php';
function getSubcategory10(){
  var pcategory=$('#pcategory').val();
  if(pcategory.length>2){
    $.ajax({
            type: "POST",
            url: ajax_url,
            //data: { name:  ""+value+"",name:  ""+value+"",name:  ""+value+""} 
            data: { npcategory:  ""+pcategory+""} 
        }).done (function(data) {
                  $('#psubcategory').html(data);
            }).fail (function()  {
            alert('Check Internet Connection');
        });
   
  }
}

  </script>
</body>

</html>
