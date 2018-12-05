<?php //session_start();
error_reporting(E_ERROR | E_PARSE);

class DbInterface {

function connect() {

include("conn.php");

return $con=getcon();

}

function getHospitals($con)
{
	$qry="select * from tbl_hospitaldetails";    // where sys_categ='$categ'	
	$rs=mysql_query($qry,$con) ;//or die ("Unable to get incoming messages for $categ ".mysql_error()."\r\n");
	if($rs)
	{
	return $rs;	
	}
	
	else
	{
	   $userErr="Unable to get outgoing  hospital details .";
       $this->getError($userErr);
       $this->errlog($userErr."i.e ".mysql_error()."\r\n");
	   	
	}
}
function getFacilityList($con) 
{
  
  $qry="select * from tbl_patientdetails where sms_enabled='1' GROUP BY mfl_no";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get patients list.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}
function getCountyList($con) 
{
  
  $qry="select * from tbl_patientdetails GROUP BY county";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get county list.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}

function getClientsWithin($con,$county) 
{
  
  $qry="select * from tbl_patientdetails where county='$county' GROUP BY county";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get clients list.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}
function getClientsWithinReportList($con,$county) 
{
  
  $qry="select * from syscontent_out where f_county='$county' GROUP BY f_county";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get clients list.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}
function getClientsReport($con) 
{
  
  $qry="select * from tbl_patientdetails GROUP BY county";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get clients list.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}

function getHospital($con,$mfl_no) 
{
 
 $qry="select pf_attach from tbl_patientdetails where mfl_no=$mfl_no";
 $rs=mysql_query($qry,$con);//or die("Unable to get diseases".mysql_error()."\r\n");
 if($rs)
   {
   	
   $row=mysql_fetch_row($rs);
   $f_name=$row[0];
   
return $f_name;
}
else
     {
     $userErr="Unable to get Facility Name.";
     $this->getError($userErr);
     $this->errlog($userErr."i.e ".mysql_error()."\r\n");
     }
}
function getCounty($con,$mfl_no) 
{
 
 $qry="select county from tbl_patientdetails where mfl_no='$mfl_no'";
 $rs=mysql_query($qry,$con);//or die("Unable to get diseases".mysql_error()."\r\n");
if($rs)
   {
   	
   $row=mysql_fetch_row($rs);
   $f_county=$row[0];
   
return $f_county;
}
else
     {
     $userErr="Unable to get County.";
     $this->getError($userErr);
     $this->errlog($userErr."i.e ".mysql_error()."\r\n");
     }
}

function getFacilityType($con,$mfl_no) 
{
 
 $qry="select facility_type from tbl_patientdetails where mfl_no='$mfl_no'";
 $rs=mysql_query($qry,$con);//or die("Unable to get diseases".mysql_error()."\r\n");
if($rs)
   {
   	
   $row=mysql_fetch_row($rs);
   $f_type=$row[0];
   
return $f_type;
}
else
     {
     $userErr="Unable to get f_type.";
     $this->getError($userErr);
     $this->errlog($userErr."i.e ".mysql_error()."\r\n");
     }
}
function getReportList($con) 
{
  
  $qry="select * from syscontent_out GROUP BY mfl_no";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get patients list.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}
function getStatustList($con) 
{
  
  $qry="select * from tbl_patient_appointment GROUP BY app_status";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get patients list.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}
function getCountyReportList($con) 
{
  
  $qry="select * from syscontent_out GROUP BY f_county";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get patients details.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}
function getCountyListReport($con,$county) 
{
  
  $qry="select * from syscontent_out where f_county='$county' GROUP BY f_county";
  $rs=mysql_query($qry,$con);
  if(!$rs)
  {
  $userErr="Unable to get patients details.";
  $this->getError($userErr);
  $this->errlog($userErr."i.e ".mysql_error()."\r\n");
  }
  else
  {
      return $rs;
   
  }
  
}

function sum_pep($con,$mfl_no) {

	$qry="select count(*) as total from syscontent_out where mfl_no='$mfl_no' and status='pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_nonpep($con,$mfl_no) {

	$qry="select count(*) as total from syscontent_out where mfl_no='$mfl_no' and status='non_pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_reexposed($con,$mfl_no) {

	$qry="select count(*) as total from syscontent_out where mfl_no='$mfl_no' and status='reexposure'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_status_pep($con) {

	$qry="select count(*) as total from syscontent_out where status='pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_status_nonpep($con) {

	$qry="select count(*) as total from syscontent_out where status='non_pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_status_reexposed($con) {

	$qry="select count(*) as total from syscontent_out where status='reexposure'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_facility_reexposed($con,$mfl) {

	$qry="select count(*) as total from syscontent_out where mfl_no='$mfl' and status='reexposure'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_facility_nonpep($con,$mfl) {

	$qry="select count(*) as total from syscontent_out where mfl_no='$mfl' and status='non_pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_county_nonpep($con,$f_county) {

	$qry="select count(*) as total from syscontent_out where f_county='$f_county' and status='non_pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_county_pep($con,$f_county) {

	$qry="select count(*) as total from syscontent_out where f_county='$f_county' and status='pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_facility_pep($con,$mfl) {

	$qry="select count(*) as total from syscontent_out where mfl_no='$mfl' and status='pep'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_county_reexposed($con,$f_county) {

	$qry="select count(*) as total from syscontent_out where f_county='$f_county' and status='reexposure'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}


function sum_defaulted($con,$f_id) {

	$qry="select count(*) as total from tbl_patient_appointment where f_id='$f_id' and app_status='Defaulted'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum defaulted clients ".mysql_error();
	   		$userErr="Unable to get sum clients ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_county_defaulted($con,$f_county) {

	$qry="select count(*) as total from tbl_patient_appointment where county='$f_county' and app_status='Defaulted'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum defaulted clients ".mysql_error();
	   		$userErr="Unable to get sum clients ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_pep_clients($con,$mfl_no) {

	$qry="select count(*) as total from syscontent_out where mfl_no='$mfl_no'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum reported clients ".mysql_error();
	   		$userErr="Unable to get sum clients ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_status_clients($con) {

	$qry="select count(*) as total from syscontent_out";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_county_clients($con,$county) {

	$qry="select count(*) as total from syscontent_out where f_county='$county'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum reported clients ".mysql_error();
	   		$userErr="Unable to get sum clients ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_clients($con,$mfl_code) {

	$qry="select count(*) as total from tbl_patientdetails where mfl_no='$mfl_code'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum clients ".mysql_error();
	   		$userErr="Unable to get sum clients ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_clientsWithinCounties($con,$county) {

$qry="select count(*) as total from tbl_patientdetails where county='$county'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum clients ".mysql_error();
	   		$userErr="Unable to get sum clients ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_clientsWithinCountiesReportList($con,$county) {

$qry="select count(*) as total from syscontent_out where f_county='$county'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum clients ".mysql_error();
	   		$userErr="Unable to get sum clients ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_facilities($con,$county) {
          
	$qry="SELECT COUNT(DISTINCT mfl_no) as total from tbl_patientdetails where county='$county'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum of facilities ".mysql_error();
	   		$userErr="Unable to get sum of facilities  ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_facilitiesReportList($con,$county) {
          
	$qry="SELECT COUNT(DISTINCT mfl_no) as total from syscontent_out where f_county='$county'";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			print "Unable to get sum of facilities ".mysql_error();
	   		$userErr="Unable to get sum of facilities  ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function sum_status_facilities($con) {

	$qry="select count(*) as total from syscontent_out";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
function sum_status_counties($con) {

	$qry="SELECT COUNT(DISTINCT f_county) as total from syscontent_out";
	$rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  
		}
	
		else
		{
			return 0;
	     	
		}	
}
//TREND GRAPH CLASS FUNCTION
//Registration
//PEP
function getReg4List_graph($con) 
{
  $qry="select count(*) as total from tbl_patientdetails where weekly_count <4 ";   
   $rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  //print "This is sum bookedd : ".$row['total'];
		  
		}
	
		else
		{
			print "Unable to get outgoing mambo messages ".mysql_error();
	   		$userErr="Unable to get incoming messages for patient ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function getReg6List_graph($con) 
{
  $qry="select count(*) as total from tbl_patientdetails where weekly_count >4 and weekly_count <=6 ";   
   $rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
		  //print "This is sum bookedd : ".$row['total'];
		  
		}
	
		else
		{
			print "Unable to get outgoing mambo messages ".mysql_error();
	   		$userErr="Unable to get incoming messages for patient ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function getReg12List_graph($con) 
{
   $qry="select count(*) as total from tbl_patientdetails where weekly_count >6 and weekly_count <=12";   
   $rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
				  
		}
	
		else
		{
			print "Unable to get outgoing mambo messages ".mysql_error();
	   		$userErr="Unable to get incoming messages for patient ";
       		$this->getError($userErr);
       		$this->errlog($userErr."i.e ".mysql_error()."\r\n");
	     	
		}	
}
function getReg24List_graph($con) 
{
   $qry="select count(*) as total from tbl_patientdetails where weekly_count >12 and weekly_count <=24";   
   $rs=mysql_query($qry,$con) ;//or die ("Unable to Update Broadcast Service Date ".mysql_error()."\r\n");
		if($rs)
		{
		  $row=mysql_fetch_array($rs);
		  
		  return $row['total'];
				  
		}
	
		else
		{
			print "Unable to get outgoing mambo messages ".mysql_error();
	   		$userErr="Unable to get incoming messages for patient ";
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

} // end class dbinterface


?>