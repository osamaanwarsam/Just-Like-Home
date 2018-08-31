<?php



class ApproveRecord {
	
	private $con="";
	
		function __CONSTRUCT(){
		
		include 'dbconnect.php';
		
	}
	
	
	function approveStatusRecord(){
		
		$adcode = $_POST["adcode"];
		
		$resultcheck = $this->con->query("SELECT AddStatus from adds where Addcode = '$adcode';");
		
		if($resultcheck->num_rows > 0){
		
		while($row = $resultcheck->fetch_assoc()){
			
			$adstatus= $row['AddStatus'];
			
			
	
			}
			
			if($adstatus== 0 || $adstatus== 2){
				
				$result = $this->con->prepare("UPDATE `adds` SET `AddStatus`= 1 WHERE Addcode =?;");
				$result->bind_param("s",$adcode);
				$result->execute();
			
				echo("Ad Approved");
				
			} elseif ($adstatus== 1){
	
				echo("already approved");

			}

		}
		
	}
	
	
	function approveBookingRecord(){
		
		$bookcode = $_POST["adcode"];
		
		$resultcheck = $this->con->query("SELECT Status from booking where BookCode = '$bookcode';");
		
		if($resultcheck->num_rows > 0){
		
		while($row = $resultcheck->fetch_assoc()){
			
			$bookstatus= $row['Status'];
			
			echo($bookstatus);
	
			}
			
			if($bookstatus== 0 || $bookstatus== 2){
				
				$result = $this->con->prepare("UPDATE `booking` SET `Status`= 1 WHERE BookCode =?;");
				$result->bind_param("s",$bookcode);
				$result->execute();
			
				echo("Booking Approved");
				
			} elseif ($bookstatus== 1){
	
				echo("Already approved");

			}

		}
		
	}
}

$obj_approve= new ApproveRecord();

if($_GET["q"]=="STATUS"){
	
	$obj_approve->approveStatusRecord();	
}

elseif($_GET["q"]=="BOOKING"){
	$obj_approve->approveBookingRecord();
}

?>