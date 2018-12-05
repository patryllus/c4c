<?php session_start();

function getcon() 
{
// print "Getting con";
//get con
$server='localhost';
$user='root';
$db='mpep_dev';
$pwd='pass';     //password

$conn = @mysql_connect($server, $user,$pwd); 
				//or die ('Unable to connect to server!');
				// select database for use;
				if($conn)
				{
				 @mysql_select_db($db);  
                 return $conn;	
				}
				
}



?>