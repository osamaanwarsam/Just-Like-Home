<?php

	class ViewProfile{
		
		
		private $con="";
	
		function __CONSTRUCT(){
		
		include 'dbconnect.php';
		
		}
		
		
		function viewProfileModal(){
			
		$usercode = $_POST["usercode"];	
			
			
			
						$result = $this->con->query("SELECT `Coustomer_Name`, `Address`, `Email`, `Cnic`, `Mobile`, `UserCode` FROM `coustomer` WHERE UserCode = '$usercode';");

			if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){

												 

?>
																	
												
							<div class="entry-box" >
													
							<h2>User Profile</h2>
							<hr>							

							
											<form id="add-form">
											<label class="has-float-label">
											<input name="addheading" type="text" placeholder=" " disabled/>
											<span>User Name: <?php echo $row['Coustomer_Name']?></span>
										</label>
										
										<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" " disabled/>
											<span>Address: <?php echo $row['Address']?></span>
										</label>
											
										<label class="has-float-label">
											<input name="rent" type="text" placeholder=" " disabled/>
											<span>Area Name: <?php echo $row['Email']?></span>
										</label>
											
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" " disabled/>
											<span>CNIC: <?php echo $row['Cnic']?></span>
										</label>
											
											<label class="has-float-label">
											<input name="noofrooms" type="text" placeholder=" " disabled/>
											<span>Mobile Number: <?php echo $row['Mobile']?></span>
										</label>
											
											

						
							<button id="delete-user-button" value="<?php echo $row['UserCode']?>" type="button" class="btn btn-danger">Delete</button>
							
				
									</form>					
		</div>	
		
						
					
	<?php  	
					
				
				}

			}	

			
		}
		
	}

	$obj_profile = new ViewProfile();

	if($_GET["q"]=="USERS"){
		
		$obj_profile->viewProfileModal();
		
	}


?>