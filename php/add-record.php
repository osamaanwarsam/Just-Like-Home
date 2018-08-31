
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class AddDialogue{
		private $con = "";
	

		function __CONSTRUCT(){
		
		include 'dbconnect.php';
	}	

	
	function randomString($length = 4) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
	
	
	function addAreaTable(){
	
		$areaName = $_POST["areaname"];
		$cityName = $_POST["city-name"];
		
		$st=$this->con->prepare("INSERT INTO `area`(`AreaName`, `CityId`) VALUES (?,(SELECT `Cityid` FROM `city` WHERE `CityName`= ?))");
		$st->bind_param("ss",$areaName,$cityName);
		return $st->execute();
		
	}
	
	 
	function addHomeTable(){
		
		$placename = $_POST["placename"];
		$roomname = $_POST["roomname"];
		$rent = (string) $_POST["rent"];
		$roomdescription = $_POST["roomdescription"];
		$noofrooms = (int) $_POST["noofrooms"];
		$description = $_POST["description"];
		$userdirect= substr($_POST["usercode"],0,strpos($_POST["usercode"]," -"));
		$usercode = $userdirect;
		$adcode= $this->randomString();
		$areaname= $_POST["area-name"];		
		
/*			
		var_dump($placename);
		var_dump($roomname);
		var_dump($rent);
		var_dump($roomdescription);
		var_dump($noofrooms);
		var_dump($description);
		var_dump($usercode);
		var_dump($adcode);
		var_dump($areaname);
		

		*/
		
		$st=$this->con->prepare("INSERT INTO `adds`(`Name`, `RoomName`, `RoomCharges`, `RoomStatus`, `RoomDescription`, `RoomAvailable`, `Description`, `Status`, `UserCode`, `Addcode`, `AreaId`, `AddStatus`) VALUES (?,?,?,'Active',?,?,?,'Active',?,?,(SELECT AreaId FROM area WHERE area.AreaName = ?),1)");
		$st->bind_param("ssssissss",$placename,$roomname,$rent,$roomdescription,$noofrooms,$description,$usercode,$adcode,$areaname);
		
		
		if($st->execute()){
			echo("sucess");
			
		}
		else{
			
			echo"failure";
		}
	
		
		
			

	}
	
	

}

$obj_add= new AddDialogue();

if($_GET["q"]=="AREA"){
	
	$obj_add->addAreaTable();

	
} elseif ($_GET["q"] == "HOME"){
	

	$obj_add->addHomeTable();
	
}

?>
