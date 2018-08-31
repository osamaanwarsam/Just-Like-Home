
   </div>
     </div>    
    
    </div>  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
 
    
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
           <form method="post">
           	 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" name="logout-button" class="btn btn-primary">
        	
           </form>

          </div>
        </div>
      </div>
    </div>
    
  
   <!--  core JQuery-->
    <script src="vendor/jquery/jquery.min.js" type="application/javascript"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js" type="application/javascript"></script>
        <!-- Bootstrap core JavaScript-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="application/javascript"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js" type="application/javascript"></script>
 
    
       
        <!--DIALOGUE BOX JAVASCRIPT-->
		<script src="js/classie.js" type="application/javascript"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
    
    <script>

		$(document).ready(function(){
			
			.resize();
			
				

		});
		
		
		$(window).resize(function(){
				   var width = $(window).width();
				   //Assuming X=550   
				   if(width <= 550px){
					   $('#element').removeClass('one-half').addClass('one');
				   }
				 
				});
</script>

    


<!--TABLE JAVASCRIPT-->


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery.min.js" type="application/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.min.js" type="application/javascript"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js" type="application/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js" type="application/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js" type="application/javascript"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--============================	===================================================================-->
	<script src="js/main.js" type="application/javascript"></script>
	<script src="https://www.w3schools.com/lib/w3.js" type="application/javascript"></script>

<!--===============================================================================================-->
	
			<!--CUSTOM SCRIPTS-->
	

<script>	
	
	function getTable()
	{
		var pgname = "<?php echo($_SESSION["page_name"]);?>";
		
		$('.lds-css').show();
		
			
			$.ajax({
			
			url:"php/table.php",
			type:"POST",
			data:{"pgname":pgname},
			
			success:function(res)
			{		
					
			$("#tabledata").hide().html(res).fadeIn();		
				
			},
			complete:function(){
				
				$('.lds-css').hide();
			}
			
			
		});
	
	}
	


	
	


	$(document).ready(function(){
	
		
			getTable();
			
			$("#txt").keyup(function(){
		
			var searchvar=$("#txt").val();
			var pgname = "<?php echo($_SESSION["page_name"]);?>";
			
					
			$('.lds-css').show();
		
				
			$.ajax({
			url:"php/table-search.php",
			type:"POST",
			data:{"searchvar":searchvar, "pgname":pgname},
		
			success:function(res)
				{
					$("#tabledata").html(res);
				},
			complete:function(){
				
				$('.lds-css').hide();
			}
				
				
			});
		});
		
		
		
		$("#add-button").click(function(){
		
		var frdata = $("#add-form").serialize();

		
		$.ajax({
			
			url:"php/add-record.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:frdata,
			success:function(res)
			{

		
				getTable();
				document.getElementById("add-form").reset();
				 $('#myModal').modal('toggle');
				
			}
			
		});
			
		});
		
		
		$("#myTable").on('click', '#delete-button', function () {
		
			var rowid= $(this).val();
			
			$.ajax({
			
			url:"php/delete-record.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:{"rowid":rowid},
			success:function(res)
			{
					
					getTable();
				
			}
			
		});
			
		});
		
				
		$("#myTable").on('click', '#view-button', function () {
		
		var adcode= $(this).val();
		
		$.ajax({
			
			url:"php/view-record.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:{"adcode":adcode},
			success:function(res)
			{
				
				$("#message-box").hide().html(res).fadeIn();
		
				
			}
			
		});
			
			
			
		});
		
		$("#message-box").on('click', '#approve-button', function () {
		
			var adcode= $(this).val();
			
			$.ajax({
			
			url:"php/approve-record.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:{"adcode":adcode},
			success:function(res)
			{
				
				
				
					$.ajax({

					url:"php/view-record.php?q=<?php echo($_SESSION["page_name"]);?>",
					type:"POST",
					data:{"adcode":adcode},
					success:function(res)
					{

						$("#message-box").hide().html(res).fadeIn();


					}
			
		});	
			}
			
		});
			
		});
		
			$("#message-box").on('click', '#notapprove-button', function () {
		
			var adcode= $(this).val();
			
			$.ajax({
			
			url:"php/notapprove-record.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:{"adcode":adcode},
			success:function(res)
			{
				
				
				
					$.ajax({

					url:"php/view-record.php?q=<?php echo($_SESSION["page_name"]);?>",
					type:"POST",
					data:{"adcode":adcode},
					success:function(res)
					{

						$("#message-box").hide().html(res).fadeIn();


					}
			
			});
			
				
			}
			
		});
			
		});
		
		
			$("#myTable").on('click', '#send-email', function () {
		
			var usercode= $(this).val();
			
			$.ajax({
			
			url:"php/send-email.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:{"usercode":usercode},
			success:function(res)
			{
				
				$("#message-box").hide().html(res).fadeIn();
		
				
			}
			
		});
			
		});
		
		
			$("#myTable").on('click', '#view-profile', function () {
		
			var usercode= $(this).val();
			
			$.ajax({
			
			url:"php/view-profile.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:{"usercode":usercode},
			success:function(res)
			{
				
								
				$("#message-box").hide().html(res).fadeIn();
		
				
		

			}
			
		});
			
		});
		
		
			$("#message-box").on('click', '#delete-user-button', function () {
		
			var usercode= $(this).val();
			
			$.ajax({
			
			url:"php/delete-profile.php?q=<?php echo($_SESSION["page_name"]);?>",
			type:"POST",
			data:{"usercode":usercode},
			success:function(res)
			{
				
						
				getTable();
		
				$("#message-box").hide().html(res).fadeIn();
		

			}
			
		});
			
		});
		

	
		
	});

	
	
	


</script>
	


<!--===============================================================================================-->	

 <p class="CONTACT-ME">
	
   __________________________________
 / \                                 \.
|   |                                |.
 \_ |   Created By: Osama Anwar      |.
    |   Contact No.:+92-3323794248   |.
    |   Email: o.a3101995@gmail.com  |.
    |                                |.
    |   _____________________________|___
    |  /                                /.
    \_/________________________________/.
	
</p>
      
                
	    
</body>

</html>

