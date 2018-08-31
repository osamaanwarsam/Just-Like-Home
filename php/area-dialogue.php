<?php


Class Combo_Box{
	
	private $con = "";
	
	function __CONSTRUCT(){
		
		include 'dbconnect.php';
	}
	
function loadAreaCombo($headingname,$tablename){
	

	$st = $this->con->query("select $headingname from $tablename");
	
	echo "<option>Select An Option</option>";
	
	while($rows = $st->fetch_assoc())
	{?>
		<option><?php echo $rows["$headingname"]?></option>
		
	<?php	
	}
	
}

	
	function loadUserCombo(){
	

	$st = $this->con->query("SELECT `Coustomer_Name`, `UserCode` FROM `coustomer`");
	
	echo "<option>Select An Option</option>";
	
	while($rows = $st->fetch_assoc())
	{?>
		<option><?php echo $rows["UserCode"]." - ".$rows["Coustomer_Name"]?></option>
		
	<?php	
	}
	
}
	
}

$objdialogue = new Combo_Box;


?>