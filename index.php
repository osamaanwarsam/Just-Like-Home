<?php


	
	require('php/connect-admin.php');
	echo "Success";
	
	?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width", initial-scale=1>
  <meta name="description">
  <meta name="author">
  
  
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" type="text/css" rel="stylesheet">
    <link href="css/CUSTOMGENERAL.CSS" type="text/css" rel="stylesheet">
   <!--DIALOGUE BOX-->
<link rel="stylesheet" type="text/css" href="css/demo-float-label.min.css">
 <script src="js/CUSTOMGENERAL.js" type="text/css"></script>
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






<body class="bg-light">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
       
        <form method="post">
          <div class="form-group">
           
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="txtemail">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="txtpassword">
          </div>
          
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          
          
         <input class="btn btn-primary btn-block login-btn" type="submit" name="btnlogin" value="Sign In">
          
          
        </form>
        
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
        
      </div>
    </div>
  </div>
  
	
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
