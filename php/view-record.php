					

	
	
	<?php

	class LoadView{
		
		
		private $con="";
	
		function __CONSTRUCT(){
		
			include 'dbconnect.php';
		
			
		
		}
		
		function loadStatusView(){
			
			$adcode = $_POST["adcode"];
	
			$result = $this->con->query("SELECT `Name`, `RoomName`, `RoomCharges`, `RoomStatus`, `RoomDescription`, `RoomAvailable`, `Description`, `Status`,  adds.UserCode, `Addcode`, area.AreaName, coustomer.Coustomer_Name, adds.AddStatus FROM `adds` INNER JOIN area on area.AreaId = adds.AreaId INNER JOIN coustomer on adds.UserCode = coustomer.UserCode where Addcode = '$adcode';");

			if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){



?>
																	
												
							<div class="entry-box" >
													
							<h2>Add Status</h2>
							<hr>							

							
											<form id="add-form">
											<label class="has-float-label">
											<input name="addheading" type="text" placeholder=" "/>
											<span>Place Name: <?php echo $row['Name']?></span>
										</label>
										
										<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Name: <?php echo $row['RoomName']?></span>
										</label>
											
										<label class="has-float-label">
											<input name="rent" type="text" placeholder=" "/>
											<span>Area Name: <?php echo $row['AreaName']?></span>
										</label>
											
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Charges: <?php echo $row['RoomCharges']?></span>
										</label>
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Available: <?php echo $row['RoomAvailable']?></span>
										</label>
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Ad Status: <?php echo $row['Status']?></span>
										</label>
										
										
									<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Ad Status: <?php 
													
																	if($row['AddStatus'] == 0){
																		
																		echo "Pending";
																	} elseif($row['AddStatus'] == 1){
																		
																		echo "Approved";
																	}
												 						elseif($row['AddStatus'] == 2){
																		
																		echo "Not Approved";
																	}
																	
													?>
													
											</span>
										</label>
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Status: <?php echo $row['RoomStatus']?></span>
										</label>

											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Seller Name: <?php echo $row['Coustomer_Name']?></span>
										</label>

										<label class="has-float-label">
											<input name="rent" type="text" placeholder=" "/>
											<span>Seller User Code: <?php echo $row['UserCode']?></span>
										</label>
										
										<label class="has-float-label">
											<input name="rent" type="text" placeholder=" "/>
											<span>Ad Code: <?php echo $row['Addcode']?></span>
										</label>
										

										

								  
							<p>
							
							Room Description:
							
							<?php echo $row['RoomDescription']?>
							

							<br><br>

							Place Description:
							
							<?php echo $row['Description']?>
							</p>

					
							<button id="approve-button" value="<?php echo $row['Addcode']?>" type="button" class="btn btn-primary">Approve</button>	
							<button id="notapprove-button" value="<?php echo $row['Addcode']?>" type="button" class="btn btn-danger">Not Approved</button>
							
				
														
		</div>	
		
						
					
	<?php
				
				}

			}	
				
		}
		
		
		
		function loadBookingView(){
			
			
			$bookcode = $_POST["adcode"];
			

	
			$result = $this->con->query("SELECT adds.Name,adds.RoomName,area.AreaName, adds.RoomCharges, adds.RoomAvailable, `BookRoom`, `BookingDate`, `UserCode_Seller`, (select coustomer.Coustomer_Name FROM coustomer WHERE coustomer.UserCode = UserCode_Seller) 'SellerName' ,`UserCode_Buyer`,(select coustomer.Coustomer_Name FROM coustomer WHERE coustomer.UserCode = UserCode_Buyer) 'BuyerName' , booking.AddCode , `BookCode`, booking.Status, adds.RoomDescription, adds.Description FROM `booking` INNER join adds on adds.Addcode=booking.AddCode INNER JOIN area on area.AreaId=adds.AreaId WHERE booking.BookCode =  '$bookcode';");

			if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){

												 

?>
																	
												
							<div class="entry-box" >
													
							<h2>Booking Status</h2>
							<hr>							

							
											<form id="add-form">
											<label class="has-float-label">
											<input name="addheading" type="text" placeholder=" "/>
											<span>Place Name: <?php echo $row['Name']?></span>
										</label>
										
										<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Name: <?php echo $row['RoomName']?></span>
										</label>
											
										<label class="has-float-label">
											<input name="rent" type="text" placeholder=" "/>
											<span>Area Name: <?php echo $row['AreaName']?></span>
										</label>
											
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Charges: <?php echo $row['RoomCharges']?></span>
										</label>
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Available: <?php echo $row['RoomAvailable']?></span>
										</label>
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Room Booked: <?php echo $row['BookRoom']?></span>
										</label>
										
										<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Booking Date: <?php echo $row['BookingDate']?></span>
										</label>
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Seller: <?php echo $row['UserCode_Seller']." - ".$row['SellerName']?></span>
										</label>
										
										<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Buyer: <?php echo $row['UserCode_Buyer']." - ".$row['BuyerName']?></span>
										</label>
											
											<label class="has-float-label">
											<input name="rent" type="text" placeholder=" "/>
											<span>Ad Code: <?php echo $row['AddCode']?></span>
										</label>

										<label class="has-float-label">
											<input name="rent" type="text" placeholder=" "/>
											<span>Book Code: <?php echo $row['BookCode']?></span>
										</label>
	

										<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" "/>
											<span>Booking Status: <?php 
													
																	if($row['Status'] == 0){
																		
																		echo "Pending";
																	} elseif($row['Status'] == 1){
																		
																		echo "Approved";
																	}
												 						elseif($row['Status'] == 2){
																		
																		echo "Not Approved";
																	}
																	
													?>
													
											</span>
										</label>
		
						
									</form>	
							<p>
							
							Room Description:
							
							<?php echo $row['RoomDescription']?>
							

							<br><br>

							Room Description:
							
							<?php echo $row['Description']?>
							</p>

					
							<button id="approve-button" value="<?php echo $row['BookCode']?>" type="button" class="btn btn-primary">Approve</button>	
							<button id="notapprove-button" value="<?php echo $row['BookCode']?>" type="button" class="btn btn-danger">Not Approved</button>
							
				
														
		</div>	
		
						
					
	<?php  	
					
				
				}

			}	
				
		}
		
	}


$objview = new LoadView();

if($_GET["q"]=="STATUS"){
	
	$objview->loadStatusView();
	
} elseif ($_GET["q"]=="BOOKING"){
	
	$objview->loadBookingView();
}

						
				
		?>
		
										