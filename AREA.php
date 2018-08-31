<?php
session_start();

include 'MUST/HEADER.php';

$_SESSION["page_name"]="AREA";



?>
      

      
                  
      
       <!--TOP IMAGE-->
       
       
        <div class="topimgholder">
        	<div class="topbg"></div>        	
        </div>
 
             <!--DIALOGUE BOX-->
             
                          
           <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 entry-main-box">
				
				<div class="row">
				
										<!--SEARCH SECTION-->
					
					<section class="col-xl-11 col-lg-5 col-md-5 col-sm-10 entry-box-theme">
						
						<h2>Search Area</h2>
						<hr>
							
						<div class="entry-box">	
												
							<label class="has-float-label">
							<input id="txt" type="text" placeholder=" "/>
							<span>Enter Area Name</span>
							</label>
									
						</div>
		
					</section>
					
					
						<section class="gap col-lg-1 col-md-1"></section>
					
						<!--ADD SECTION-->
				
				
					<section class="col-xl-11 col-lg-5 col-md-5 col-sm-10 entry-box-theme">
						
						<h2>Add Area</h2>
						<hr>
							
						<div class="entry-box">
								
							<form id="add-form">			
								<label class="has-float-label">
								<input name="areaname" type="text" placeholder=" "/>
								<span>Area Name</span>
							</label>


		
						
			
						  <label class="form-group has-float-label">
							<select name="city-name" class="form-control custom-select">
							
								<?php
								include 'php/area-dialogue.php';
								$objdialogue->loadAreaCombo("CityName","city");
								?>
								
							</select>
							<span>City</span>
						  </label>
						
							<label class="form-group has-float-label">
							<select name="country-name" class="form-control custom-select">
							
								<?php
								
								$objdialogue->loadAreaCombo("CountryName","country");
								?>
								
							</select>
							<span>Country</span>
						  	</label>
						
							<button id="add-button" type="button" class="btn btn-primary">ADD</button>	
							</form>		
								
						</div>
		
					</section>
					
					
				
					<section class="gap col-lg-1 col-md-1"></section>
						
				</div>
			
			</div>
		
	    
	    <!--TABLE-->
	    
	    
 	    <section class="col-xl-7 col-lg-12 table-box">   
 	       	
 	       	      
  	       	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" class="cell100 columnarea1">Area Name</th>			
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" class="cell100 columnarea2">City</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" class="cell100 columnarea3">Country</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" class="cell100 columnarea4">Total Homes</th>
						
									<th onclick="w3.sortHTML('#myTable', '.item')" class="cell100 columnarea5">Delete</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
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





<?php

include 'MUST/FOOTER.php';

?>