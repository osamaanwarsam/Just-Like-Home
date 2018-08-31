<?php

class DeleteRecord{


		function __CONSTRUCT(){
		
		include 'dbconnect.php';
	}	

	
	function deleteAreaRecord(){
	
		$rowid = $_POST["rowid"];

		
		$st=$this->con->prepare("DELETE FROM `area` WHERE `AreaId`= ?");
		$st->bind_param("i",$rowid);
		return $st->execute();
		
	}

}

$obj_del= new DeleteRecord();

if($_GET["q"]=="AREA"){
	
	$obj_del->deleteAreaRecord();

	
}

?>