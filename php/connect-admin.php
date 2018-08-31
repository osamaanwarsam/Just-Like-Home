
	<?php


session_start();



if (@$_SESSION["username"]!= "")
{
		header('Location: AREA.php' , true, 301);
	
	
}



	if(@$_POST['btnlogin']){
		
		
	class Connection {
	
	private $con="";
	

	function __CONSTRUCT(){
		
	include 'dbconnect.php';	

}
		
	

	function loginFunction(){
		
		$txtemail = $_POST["txtemail"];		
		$txtpassword = $_POST["txtpassword"];

		
		$st= $this->con->prepare("SELECT user_name FROM adminlogin WHERE user_email=? AND user_password=?");
		$st->bind_param("ss",$txtemail,$txtpassword);
		$st->execute();
		$st->store_result();
		
	
		if($st->num_rows > 0){
		
		$st->bind_result($username);
		$st->fetch();
		header('Location: AREA.php' , true, 301);		
		$_SESSION["username"] = $username;

		
	
		}
		
		else{
			
			echo("wrong password");
		}


	}
		
}
		
		$obj = new Connection();
		$obj->loginFunction();


	
}



?>