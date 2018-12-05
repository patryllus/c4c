<?php
error_reporting(E_ERROR | E_PARSE);

$do=$_GET['do'];
if(!isset($do)){
	$do=$_SESSION["do"];
}
$task=explode('::',$do);
//var_dump($task); die;

$action=$task[0];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karmanta - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Karmanta, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>mHealthKenya</title>

    <!-- Bootstrap CSS -->    
    <link href="../code/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../code/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../code/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../code/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="../code/css/style.css" rel="stylesheet">
    <link href="../code/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">
  
    <div class="container">
     <!-- <form action="serve.php" class="form-signin" method="post"> -->
      <form class="login-form" action="serve" method="post">  
      
        <div class="login-wrap"> 
        
              <a href="login.php" class="logo">mHEALTH<span>Kenya</span></a>
              
             <!-- <p class="login-img"><i class="logo">mHEALTH<span>Kenya</span>  </i>  -->
           
             <?php	
			 	print "</br> </br>";		 				 
 			 if($action=="error") { $mess=" </br> Either Username or Password  is Incorrect"; }
			 else { 
                 $mess=" </br> Welcome To MHealth Kenya </br>  Enter your username and password";    }  
				 print $mess;
 				?>
                </p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" autofocus>
            </div>
            <div class="input-group">
            <!--  <a href="index.html" class="logo">mHEALTH<span>Kenya</span></a> -->
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password">      
                
                <input type="hidden" name="mybutton" value="login">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
      </form>

    </div>


  </body>
</html>
