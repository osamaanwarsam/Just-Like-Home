<?php



class LoadTables {
	
	private $con="";
	
		function __CONSTRUCT(){
		
		include 'dbconnect.php';
		
	}

	function loadAreaTable(){


	$result = $this->con->query("SELECT area.AreaId,AreaName,CityName,CountryName,Count(adds.AreaId) FROM `country` inner join city on country.Id=city.CountryId inner join area ON city.Cityid=area.CityId LEFT JOIN adds ON area.AreaId=adds.AreaId GROUP BY area.AreaId;");

	if($result->num_rows > 0){
		
		while($row = $result->fetch_assoc()){
			
			?>
				
								<tr class="item row100 body">
									<td class="cell100 columnarea1"><?php echo $row['AreaName']?></td>
									<td class="cell100 columnarea2"><?php echo $row['CityName']?></td>
									<td class="cell100 columnarea3"><?php echo $row['CountryName']?></td>
									<td class="cell100 columnarea4"><?php echo $row['Count(adds.AreaId)']?></td>
							
									<td class="cell100 columnarea5"><button id="delete-button" value="<?php echo $row['AreaId']?>" type="button" class="btn btn-primary">DELETE</button></td>
								</tr>
								
				<?php
			
			}

		}
		
	
	}
	
	
		function loadHomeTable(){


	$result = $this->con->query("SELECT RoomName,RoomAvailable,coustomer.Coustomer_Name,adds.UserCode,AddCode,adds.Status FROM coustomer INNER JOIN adds ON coustomer.UserCode=adds.UserCode;");

	if($result->num_rows > 0){
		
		while($row = $result->fetch_assoc()){
			
			?>
				
								<tr class="item row100 body">
									<td class="cell100 columnhome1"><?php echo $row['RoomName']?></td>
									<td class="cell100 columnhome2"><?php echo $row['RoomAvailable']?></td>
									<td class="cell100 columnhome3"><?php echo $row['Coustomer_Name']?></td>
									<td class="cell100 columnhome4"><?php echo $row['UserCode']?></td>							
									<td class="cell100 columnhome5"><?php echo $row['AddCode']?></td>
									<td class="cell100 columnhome6"><?php echo $row['Status']?></td>
								
								</tr>
								
				<?php
			
			}

		}	
	}
	
	
	function loadStatusTable(){


	$result = $this->con->query("SELECT RoomName,coustomer.Coustomer_Name,adds.UserCode,AddCode,adds.Status FROM coustomer INNER JOIN adds ON coustomer.UserCode=adds.UserCode;");

	if($result->num_rows > 0){
		
		while($row = $result->fetch_assoc()){
			
			?>
				
								<tr class="item row100 body">
									<td class="cell100 columnstatus1"><?php echo $row['RoomName']?></td>
									<td class="cell100 columnstatus2"><?php echo $row['UserCode'].' - '.$row['Coustomer_Name']?></td>
									<td class="cell100 columnstatus3"><?php echo $row['AddCode']?></td>
									<td class="cell100 columnstatus4"><?php echo $row['Status']?></td>							
									<td class="cell100 columnstatus5"><button id="view-button" value="<?php echo $row['AddCode']?>" type="button" class="btn btn-primary">View/Edit</button></td>
								
								
								</tr>
								
				<?php
			
			}

		}	
	}
	
	function loadBookingTable(){
		
		$result = $this->con->query("SELECT adds.RoomName, coustomer.Coustomer_Name,booking.UserCode_Seller, (select coustomer.Coustomer_Name FROM coustomer WHERE coustomer.UserCode = UserCode_Seller) 'SellerName' ,`UserCode_Buyer`,(select coustomer.Coustomer_Name FROM coustomer WHERE coustomer.UserCode = UserCode_Buyer) 'BuyerName',  `BookCode` FROM `booking` INNER JOIN adds on adds.Addcode = booking.AddCode INNER join coustomer on booking.UserCode_Seller = coustomer.UserCode;");

	if($result->num_rows > 0){
		
		while($row = $result->fetch_assoc()){
			
			?>
				
								<tr class="item row100 body">
									<td class="cell100 columnbooking1"><?php echo $row['RoomName']?></td>
									<td class="cell100 columnbooking2"><?php echo $row['UserCode_Seller'].' - '.$row['SellerName']?></td>
									<td class="cell100 columnbooking3"><?php echo $row['UserCode_Buyer'].' - '.$row['BuyerName']?></td>
									<td class="cell100 columnbooking4"><?php echo $row['BookCode']?></td>							
									<td class="cell100 columnbooking5"><button id="view-button" value="<?php echo $row['BookCode']?>" type="button" class="btn btn-primary">View/Edit</button></td>
								
								
								</tr>
								
				<?php
			
			}

		}	
		
	}
	
	
	
	function loadUsersTable(){
		
		$result = $this->con->query("SELECT `Coustomer_Name`,  `UserCode` FROM `coustomer`;");

	if($result->num_rows > 0){
		
		while($row = $result->fetch_assoc()){
			
			?>
				
								<tr class="item row100 body">
									<td class="cell100 columnau1"><?php echo $row['Coustomer_Name']?></td>
									<td class="cell100 columnau2"><?php echo $row['UserCode']?></td>
									<td class="cell100 columnau3"><button id="view-profile" value="<?php echo $row['UserCode']?>" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary">View Profile</button></td>							
									<td class="cell100 columnau4"><button id="send-email" value="<?php echo $row['UserCode']?>" type="button" class="btn btn-primary">Send Email</button></td>
								
								
								</tr>
								
				<?php
			
			}

		}	
		
	}
}


	$obj_table = new LoadTables();
	$pagename = $_POST["pgname"];
	

if($pagename == "AREA"){
	
	$obj_table->loadAreaTable();
	
} elseif ($pagename == "HOME"){
	
	$obj_table->loadHomeTable();
	
} elseif ($pagename == "STATUS"){
	
	$obj_table->loadStatusTable();
	
} elseif ($pagename == "BOOKING"){
	
	$obj_table->loadBookingTable();
	
}
elseif ($pagename == "USERS"){
	
	$obj_table->loadUsersTable();
	
}

?>