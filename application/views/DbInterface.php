<?php session_start();
error_reporting(E_ERROR | E_PARSE);
class DbInterface {

function connect() {

include("conn.php");

return $con=getcon();

}
function login($username,$pass)
{
  $con=$this->connect();
  $qry="select usergroup from tbl_staffdetails where username='$username'and pass='$pass'";
  if($con)//if successful connected to the server
  {
  	 $rs=mysql_query($qry,$con);
	         if($rs)
	          {
	          if(mysql_num_rows($rs)>0) 
	             {
	               $row=mysql_fetch_row($rs);
	               $usergroup=$row[0];
	 
                   //session_register("username");
                   $_SESSION['username'] =$username;
	  
	               //session_register("usergroup");
                   $_SESSION['usergroup'] =$usergroup;
	  
	               $event="Successful user login ";
				   
				   return $usergroup;
	               //log this event
	               $this->dothelog($con,$_SESSION['username'],$event,0);	
                  }
	          else//empty results.
	              {
                    $userErr="user does not exist.";
                    $this->getError($userErr);
                    $this->errlog($userErr."i.e ".mysql_error()."\r\n");
	              }
	           }
	          else
	           {
		       $userErr="Login statement not executed.";
               $this->getError($userErr);
               $this->errlog($userErr." i.e ".mysql_error()."\r\n");
	           }
              }
else  //connection to server not successful
{
  
  $userErr="A problem was encountered while connecting to the server.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
}
	

}
function getError($errMessage)//add the error message to an array session
{
	array_push($_SESSION['errorMessage'],$errMessage);	
}
function errlog($errorMessage)//log the error.
{
    $date=date("D M j G:i:s Y",time());
    $filename="errLog.txt";
    if(!file_exists("$filename"))
	{
		touch("$filename");// create the logfile and log error message
	    if($fp=fopen("$filename", "a"))
		{
		     
			 fputs( $fp,"\r\n\t\t      *************************************M-Health Error Log *************************************\r\n\n");
			 fputs( $fp,"\r\n\n$date ".$errorMessage);
             fclose( $fp );
		}		
       

	}	
	else       //log the error message
	{
	    
	    $fp=fopen( $filename, "a");		
        fputs( $fp, "$date ".$errorMessage."\n");
        fclose( $fp );	
	}
}

function blogin($busername,$bpass)
{
  $con=$this->connect();
  $qry="select usergroup from tbl_staffdetails where username='$busername' and pass='$bpass'";
  $rs=mysql_query($qry,$con);
	       if($rs)
	{  
		 $row=mysql_fetch_row($rs);
		$usergroup=$row[0];
   
return $usergroup;
	}
	
	else
	 {
	   $userErr="Unable to get patients details .";
       $this->getError($userErr);
       $this->errlog($userErr."i.e ".mysql_error()."\r\n");
	   	
	 }
}
function clogin($c_username,$c_pass)
{
  $con=$this->connect();
  $qry="select usergroup from tbl_staffdetails where username='$c_username' and pass='$c_pass'";
  $rs=mysql_query($qry,$con);
	       if($rs)
	{  
		 $row=mysql_fetch_row($rs);
		$usergroup=$row[0];
   
return $usergroup;
	}
	
	else
	 {
	   $userErr="Unable to get patients details .";
       $this->getError($userErr);
       $this->errlog($userErr."i.e ".mysql_error()."\r\n");
	   	
	 }
}
}
?>