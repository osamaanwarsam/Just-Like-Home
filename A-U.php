<?php
session_start();

include 'MUST/HEADER.php';

$_SESSION["page_name"]="USERS";


?>
      
       <!--TOP IMAGE-->
       
       
        <div class="topimgholder col-xl-12">
        	<div class="topbg col-xl-12"></div>        	
        </div>
 

	
	   
	  <div class="col-xl-6 col-lg-12 table-and-search">
	  	
	  	
	   <div class="row">

   	    		    <!--SEARCH BOX-->      		  
   	    		    
   	    		      <div class="col-xl-12 col-lg-11 col-md-11 col-sm-11 search-box">

   				<section class="col-xl-11 col-lg-12 col-md-12 col-sm-10 entry-box-theme">
						
				
							<div class="entry-box">
								
														
							<label class="has-float-label">
							<input id="txt" type="text" placeholder=" "/>
							<span>Search</span>
						</label>


								
							</div>
		
					</section>
   	    
   	    </div>
	   	    <!--TABLE-->
	   	
 	    <section class="col-xl-12 col-lg-12 col-md-12 col-sm-11">   
 	       	
 	       	      
  	       	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
		
									
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" class="cell100 columnau1">User</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" class="cell100 columnau2">User Code</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" class="cell100 columnau3">View Profile</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" class="cell100 columnau4">Send Email</th>
									
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body-status js-pscroll">
						<table id="myTable">
							<tbody id="tabledata">
							
							<center>
							<div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-ellipsis"><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div></div></div>
						</center>


							
							</tbody>
						</table>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>

       
       
        </section>	
        
			
	   </div>
	      	
	  	
	  </div>
	   
	
	             <!--MESSAGE-->
             
           <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 cover-box">
				
				<section id="message-box" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					
					<center id="dummy-box">
						
						
						<div class="dummy-text">
							
								
						<div class="image-dummy" style="">
							
							<img src="images/image-dummy.jpg" alt="" style="margin-bottom: 50px; border-radius: 60%; height: 60%; width: 60%;">
							
						</div>
							
							<p class="dummy-text-lg" style="opacity: 0.5;">Click on 'View/Edit' Button</p>
							<p class="dummy-text-sm" style="opacity: 0.3;">'View/Edit' Lets you see more details about the ad posted and lets you edit it as well.</p>
						
						</div>
						</center>
						
						
		
					</section>
			
			</div>
			
			
	
					

<?php

include 'MUST/FOOTER.php';

?>