<?php

class SendEmail{
	
		private $con="";
	
		function __CONSTRUCT(){
		
		include 'dbconnect.php';
		
		}
	
	function sendEmail(){
		
		$usercode = $_POST["usercode"];
		
		
		$result = $this->con->query("SELECT `Coustomer_Name`, `Email` FROM `coustomer` WHERE coustomer.UserCode = '$usercode';");
		
		
		if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){
		
		?>
		
		
						<h2>Email</h2>
						<hr>
							
							<div class="entry-box">
								
														
							<label class="has-float-label">
							<input  type="text" placeholder=" " value="<?php echo $row['Coustomer_Name']?>"/>
							<span>Customer Name</span>
						</label>


							<label class="has-float-label">
							<input type="text" placeholder=" " value="<?php echo $row['Email']?>"/>
							<span>Email Address</span>
						</label>
						
						<label class="has-float-label">
						 <textarea name="roomdescription" id="message" placeholder=" " cols="50" rows="15"></textarea>
						<span>Type Email</span>
						</label>
						
					
					<button type="button" class="btn btn-primary">Approve</button>	
					
								
							</div>
		
		
		
		
		<?php
				
			}
		}
		
	}
	
	
}


 $obj_email = new SendEmail();

if($_GET["q"]=="USERS"){
	
	$obj_email->sendEmail();

	
}



?>