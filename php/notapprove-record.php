<?php



class NotApproveRecord {
	
	private $con="";
	
		function __CONSTRUCT(){
		
		include 'dbconnect.php';
		
	}
	
	
	function notApproveStatusRecord(){
		
		$adcode = $_POST["adcode"];
		
		$resultcheck = $this->con->query("SELECT AddStatus from adds where Addcode = '$adcode';");
		
		if($resultcheck->num_rows > 0){
		
		while($row = $resultcheck->fetch_assoc()){
			
			$adstatus= $row['AddStatus'];
			
			echo($adstatus);
	
			}
			
			if($adstatus== 0 || $adstatus== 1){
				
				$result = $this->con->prepare("UPDATE `adds` SET `AddStatus`= 2 WHERE Addcode =?;");
				$result->bind_param("s",$adcode);
				$result->execute();
			
				echo("Ad Has Not Been Approved");
				
			} elseif ($adstatus== 2){
	
				echo("Already Not Approved");

			}

		}
		
	}
	
	
	
	
	
		function notApproveBookingRecord(){
		
		$bookcode = $_POST["adcode"];
		
		$resultcheck = $this->con->query("SELECT Status from booking where BookCode = '$bookcode';");
		
		if($resultcheck->num_rows > 0){
		
		while($row = $resultcheck->fetch_assoc()){
			
			$bookstatus= $row['Status'];
			
			echo($bookstatus);
	
			}
			
			if($bookstatus== 0 || $bookstatus== 1){
				
				$result = $this->con->prepare("UPDATE `booking` SET `Status`= 2 WHERE BookCode =?;");
				$result->bind_param("s",$bookcode);
				$result->execute();
			
				echo("Ad Has Not Been Approved");
				
			} elseif ($bookstatus== 2){
	
				echo("Already Not Approved");

			}

		}
		
	}
}

$obj_approve= new NotApproveRecord();

if($_GET["q"]=="STATUS"){
	
	$obj_approve->notApproveStatusRecord();

	
}

elseif($_GET["q"]=="BOOKING"){
	
	$obj_approve->notApproveBookingRecord();

	
}

?>