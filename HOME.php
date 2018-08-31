<?php
session_start();

include 'MUST/HEADER.php';

$_SESSION["page_name"]="HOME";


?>
      
       <!--TOP IMAGE-->
       
       
        <div class="topimgholder">
        	<div class="topbg"></div>        	
        </div>
 
             <!--DIALOGUE BOX-->
             
           <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12  entry-main-box">
				
				<div class="row">
				
					<!--SEARCH SECTION-->
					
					<section class="col-xl-11 col-lg-5 col-md-5 col-sm-10 entry-box-theme">
						
						<h2>Search Home</h2>
						<hr>
							
							<div class="entry-box">
								
														
							<label class="has-float-label">
							<input id="txt" type="text" placeholder=" "/>
							<span>User/Ad Code</span>
						</label>
						
						</div>
		
					</section>
			
				
						<section class="gap col-lg-1 col-md-1"></section>

								<!--ADD HOME SECTION-->
							
							
						<section class="col-xl-11 col-lg-5 col-md-5 col-sm-10 entry-box-theme">
						
						<h2>Add Home</h2>
						<hr>
						
						
						

						<button data-toggle="modal" data-target="#myModal" class="btn btn-primary">ADD HOME</button>	
						
						  <!-- The Modal -->
						  
						  
						  
						  
 							 <div class="modal fade" id="myModal">
								<div class="modal-dialog modal-lg">
								  <div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header">
									  <h4 class="modal-title"></h4>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">




										<section class="entry-box-theme">

										<h2>Add Home</h2>
										<hr>

										<div class="entry-box">
										
										

										<form id="add-form">
											<label class="has-float-label">
											<input name="placename" type="text" placeholder=" "/>
											<span>Place Name</span>
										</label>
										
										<label class="has-float-label">
											<input name="roomname" type="text" placeholder=" "/>
											<span>Room Name</span>
										</label>
										
											<label class="form-group has-float-label">
											<select name="area-name" class="form-control custom-select">

											<?php
											include 'php/area-dialogue.php';
											$objdialogue->loadAreaCombo("AreaName","area");
											?>

											</select>
										<span>Area Name</span>
										</label>
										
										<label class="form-group has-float-label">
											<select name="usercode" class="form-control custom-select">

											<?php
											$objdialogue->loadUserCombo();
											?>

											</select>
										<span>User Code</span>
										</label>
										

											<label class="has-float-label">
											<input name="noofrooms" type="number" placeholder=" "/>
											<span>Number Of Rooms</span>
										</label>

										<label class="has-float-label">
											<input name="rent" type="text" placeholder=" "/>
											<span>Rent</span>
										</label>
	
								
									
										<label class="has-float-label">
											 <textarea name="description" id="message" placeholder=" " cols="50" rows="5"></textarea>
											<span>Description</span>
											</label>
											
									<label class="has-float-label">
											 <textarea name="roomdescription" id="message" placeholder=" " cols="50" rows="5"></textarea>
											<span>Room Description</span>
											</label>

									<button id="add-button" type="button" class="btn btn-primary">ADD</button>	

									</form>	
									
									
										</div>

										</section>



									</div>





									<!-- Modal footer -->
									<div class="modal-footer">
									  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>

								  </div>
								</div>
							  </div>
  
						

					
					
		
					</section>
				</div>
			
			</div>
		
	    
	    <!--TABLE-->
	    
	    
 	    <section class="col-xl-8 col-lg-12 table-box">   
 	       	
 	       	      
  	       	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
		
									
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" class="cell100 columnhome1">Place Name</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" class="cell100 columnhome2">Rooms</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" class="cell100 columnhome3">User</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" class="cell100 columnhome4">User Code</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(5)')" class="cell100 columnhome5">Ad Code</th>
									<th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(6)')" class="cell100 columnhome6">Status</th>
									
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table id="myTable">
							<tbody  id="tabledata">
							
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