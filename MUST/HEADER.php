<?php 

 if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’)) ob_start(“ob_gzhandler”); else ob_start(); 
			   
			   if($_SESSION["username"] == ""){
				   
			header('Location: index.php' , true, 301);
		
			   }
			   
			   if(@$_POST['logout-button']){
				   
			   session_start();
			   	unset($_SESSION["username"]);
			   	header('Location: index.php' , true, 301);
			   	
			
			   }
			   
			   
			   ?> 


<!DOCTYPE html>
<html lang="en">

<head>
             
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width", initial-scale=1>
  <meta name="description">
  <meta name="author">
  
  
  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  
    <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" type="text/css" rel="stylesheet">
    <link href="css/CUSTOMGENERAL.CSS" type="text/css" rel="stylesheet">
   
    <!--DIALOGUE BOX-->
<link rel="stylesheet" type="text/css" href="css/demo-float-label.min.css">

<!--TABLE CSS LINKS-->
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--========================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/table-column.css">
<!--===============================================================================================-->
 

  
</head>

<body class="fixed-nav bg-light" id="page-top">
 

 
 
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Just Like Home</a>
   
     
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
     
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Areas">
          <a class="nav-link" href="AREA.php">
            <i class="fa-fw fas fa-map-marker-alt"></i>
            <span class="nav-link-text">Area Section</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Homes">
          <a class="nav-link" href="HOME.php">
            <i class="fa-fw fas fa-home"></i>
            <span class="nav-link-text">Hotel Section</span>
          </a>
        </li>
         
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Status">
          <a class="nav-link" href="STATUS.php">
            <i class="fa-fw fas fa-calendar-alt"></i>
            <span class="nav-link-text">Hotel Status</span>
          </a>
        </li>
        
		  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Status">
          <a class="nav-link" href="BOOKING.php">
            <i class="fa-fw fas fa-calendar-alt"></i>
            <span class="nav-link-text">Room Booking</span>
          </a>
        </li>
                                
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="All Users">
          <a class="nav-link" href="A-U.php">
            <i class="fa-fw fas fa-users"></i>
            <span class="nav-link-text">All Users & Chat</span>
          </a>
        </li>
         

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
      
      
      
    </div>
  </nav>

         


  <div class="content-wrapper">
         <div class="container-fluid">
          <div class="row">
          