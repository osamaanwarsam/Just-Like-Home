<?php

class DeleteProfileRecord{


		function __CONSTRUCT(){
		
		include 'dbconnect.php';
	}	

	
	function deleteProfileRecord(){
	
		$usercode = $_POST["usercode"];



		
		$st=$this->con->prepare("DELETE FROM `coustomer` WHERE `UserCode`= ?");
		$st->bind_param("s",$usercode);
		return $st->execute();
		echo("User Account Deleted");
		
	}

}

$obj_del= new DeleteProfileRecord();

if($_GET["q"]=="USERS"){
	
	$obj_del->deleteProfileRecord();

	
}

?>






	<center id="dummy-box">
						
						
			<div class="dummy-text">
							
								
						<div class="image-dummy" style="">
							
							<img src="images/image-dummy.jpg" alt="" style="margin-bottom: 50px; border-radius: 60%; height: 60%; width: 60%;">
							
						</div>
							
							<p class="dummy-text-lg" style="opacity: 0.5;">Click on 'View/Edit' Button</p>
							<p class="dummy-text-sm" style="opacity: 0.3;">'View/Edit' Lets you see more details about the ad posted and lets you edit it as well.</p>
						
			</div>
	</center>
						