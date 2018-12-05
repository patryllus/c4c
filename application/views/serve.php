<?php  session_start();
error_reporting(E_ERROR | E_PARSE);

$task=$_GET['task'];
$action=$_GET['action'];
$username=$_POST['username'];
$pass=$_POST['password'];
$mybutton=$_POST['mybutton'];
$bbutton=$_POST['bbutton'];
$c_button=$_POST['c_button'];
$do=$_GET['do'];

/*var_dump($task); 
print "inside";
 die;*/

  require_once("DbInterface.php");
  $dbi=new DbInterface();  
 
if($mybutton=="login") {

//var_dump($mybutton); die;*/

  			$usergroup=$dbi->login($username,$pass);
    
				//var_dump($username); die;
			 if ($usergroup=="researcher") {
 
						 header("Location:../portal/pages/tables/counties.php"); 
 
 					}
				 else {
				  if(!isset($_SESSION['username']) )
				   {
				  header("Location:../mhealth/login?do=error");
				   }
				  else 
				  { 
				 
				  header("Location:../code/index.php"); 
				  //header("Location:../portal/pages/tables/tables.php"); 
  					}
}
}
if($task=="logout")
{
    
	if($task=="logout") 
	{
	    
  		$con=$dbi->connect();
		
		$event="User logout ";//log this event;
         //log this event
         //$dbi->dothelog($con,$_SESSION['username'],$event,0);
		 
		session_destroy();
	//header("Location:../application/views/login.php");
	header("Location:../mhealth/login");
		//header("Location:../../mhealth_4.9/login.php");
	
	}

}
if($bbutton=="blogin") {
// login user

$busername=$_POST['busername'];
$bpass=$_POST['bpass'];

/*print $busername."</br>";
print $bpass."</br>";
	
 die();*/
 // $dbi->login($username,$pass);
    $usergroup=$dbi->blogin($busername,$bpass);
	
	//print $usergroup."</br>";
		 if($usergroup=="clinician" )
		   {
		   
		  
		 header("Location:../../code/index.php?do=dobroadcast");
		   }
		  else 
		  { 
		  
		
			header("Location:../../code/index.php?do=broadcasterror");
		
  }
}
if($c_button=="clogin") {
// login user

$c_username=$_POST['c_username'];
$c_pass=$_POST['c_pass'];

//print $busername."</br>";
//print $bpass."</br>";
	
 
 // $dbi->login($username,$pass);
    $usergroup=$dbi->clogin($c_username,$c_pass);
	
	//print $usergroup."</br>";
		 if($usergroup=="clinician" )
		   {
		   
		  
		 header("Location:../../code/index.php?do=enroll");
		   }
		  else 
		  { 
		  
		    //header("Location:index.php?do=enrollerror");
			header("Location:../../code/index.php?do=broadcasterror");
		
  }
}

?>