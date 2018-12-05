<?php session_start();
error_reporting(E_ERROR | E_PARSE);
//if (isset($_GET['mytask'])&&isset($_GET['myaction']) && isset($_GET['page'])&& isset($_GET['do'])) {
$mytask=$_GET['mytask'];
$myaction=$_GET['myaction'];
$page=$_GET['page'];

$p_id=$_GET['p_id'];
$mobile=$_GET['mobile'];
$names=$_GET['names'];

$do=$_GET['do'];

/*var_dump($p_id); 
var_dump($mobile); 
var_dump($names);*/ 

//$enroll=$_GET['enroll'];
//$username=$_GET['username'];
if(!isset($do)){
	$do=$_SESSION["do"];
}
$task=explode('::',$do);
//var_dump($task); 
$action=$task[0];
//var_dump($action);
//print_r($_SESSION);

?><html lang="en"> 
<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>MHealth_Kenya</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="40">    
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <script type="text/javascript" src="taskInterpreter.js"></script>
    <link rel="stylesheet" href="template/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="template/assets/css/main.css" />
    <link rel="stylesheet" href="template/assets/css/theme.css" />
    <link rel="stylesheet" href="template/assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="template/assets/plugins/Font-Awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="style.css" />
    <!--END GLOBAL STYLES -->
 <!-- START CHART STYLES    -->    
    <script src="charts/lib/js/jquery.min.js"></script>
    <script src="charts/lib/js/chartphp.js"></script>
    <link rel="stylesheet" href="charts/lib/js/chartphp.css">
    <!-- END CHART STYLES    -->
    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
<script type="text/javascript" src="date/jquery-1.4.2.min.js"></script>
<link rel="stylesheet" href="date/cupertino/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="date/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="date/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="date/jquery.ui.datepicker.min.js"></script>
<style type="text/css">
.ui-datepicker
{
   font-family: Arial;
   font-size: 13px;
   z-index: 1003 !important;
   background-color:#A91E22;
	color:#ffffff;
}
</style>
	
<LINK REL=StyleSheet HREF="dimming.css" TYPE="text/css">
<SCRIPT LANGUAGE="JavaScript" SRC="dimmingdiv.js"> </script>
<meta name="GENERATOR" content="Quanta Plus">
  <script type="text/javascript" src="datepickercontrol.js"></script>
  <script language="JavaScript">
     if (navigator.platform.toString().toLowerCase().indexOf("linux") != -1){
	 	document.write('<link type="text/css" rel="stylesheet" href="datepickercontrol_lnx.css">');
	 }
	 else{
	 	document.write('<link type="text/css" rel="stylesheet" href="datepickercontrol.css">');
	 }

   </script>
  
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">
         <!-- HEADER SECTION -->
        <div id="top">
		<!-- this section provides the top nav bar with yellowish color
            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
            
              <!--  <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
               <header class="navbar-header">
                    <a href="index.php" class="navbar-brand">  
                    <img src="template/assets/img/moh_2.png" alt="" /></a>
                     <!-- <img src="template/assets/img/moh_1.png" alt="" /></a> -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                  <!-- <img src="template/assets/img/moh_1.png" alt="" /></a>   --> 
                  <img src="template/assets/img/egpaf_3.png" alt="" />                              
          </header> 
      				  <ul class="nav navbar-top-links navbar-right">
 				<!-- END LOGO SECTION -->
 					
                    <!-- MESSAGES SECTION -->
                     <li class="dropdown">
                        <img src="template/assets/img/T4A6.png" alt="" />
                        <p></p><p></p><p></p>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                 <span class="label label-success">Welcome: <?php echo $_SESSION['username']; ?></span>
                                            <!-- there is usergroup and username    -->
                        </a>
                  
                    </li>
                     <li class="dropdown"> 
                         <a href='../application/views/serve.php?task=logout&action=logout'>
                             <span class="label label-danger">LOG-OUT</span>
                        </a>
                      </li>
                      </ul>
                      <ul>
                      <li class="nav navbar-top-links navbar-right">                
								
                                                   
                 </li>                
                </ul>
                
                
            </nav>

        </div>
      
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
     <div id="left" >
            <div class="media user-media well-small">         
                <div class="media-body">                   
                  </div>
                <br />
            </div>
                       
            <ul id="menu" class="collapse">
                
                <li class="panel active"><a href="index.php" >
                        <i class="icon-dashboard"></i> Dashboard </a>                   
                </li>
                  <?php if($_SESSION['usergroup']=="master_admin"){   ?>     
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardprojects","master_admin");'>
                        <i class="icon-user"> </i> Projects
						<span class="pull-right">                	 
                        </span>
						&nbsp; <span class="label label-default">
						<?php
						     require_once("DbInterface.php");
							 $dbi=new DbInterface();
							 $con=$dbi->connect();
							 //$f_id=$dbi->getF_Id($con,$_SESSION['username']);							
						  	 $rs=$dbi->getDashBoardprojects_index($con);
							print $rs;						
						?> 
						</span> &nbsp;
						
						</a>             
                </li>
				 <?php  }  ?>  
                <?php if($_SESSION['usergroup']=="master_admin"){   ?>     
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardhospitals","master_admin");'>
                        <i class="icon-user"> </i> Hospitals
						<span class="pull-right">
                         </span>
						&nbsp; <span class="label label-default">
						<?php
						   $rs=$dbi->getDashBoardhospitals_index($con);
						   print $rs;
						?> 
						</span> &nbsp;
					</a>             
                </li>
				 <?php  }  ?> 
                  <?php if($_SESSION['usergroup']=="master_admin"){   ?>     
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardusers","master_admin");'>
                        <i class="icon-user"> </i> Users
						<span class="pull-right">
                        </span>
						&nbsp; <span class="label label-default">
						<?php
						  	 $rs=$dbi->getDashBoardusers_index($con);
						   	print $rs;
						?> 
						</span> &nbsp;
						
						</a>             
                </li>
				 <?php  }  ?> 
                 <?php if($_SESSION['usergroup']=="master_admin"){   ?>     
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardclients","master_admin");'>
                        <i class="icon-user"> </i> Clients
						<span class="pull-right">
                       </span>
						&nbsp; <span class="label label-default">
						<?php
						  	 $rs=$dbi->getDashBoardclients_index($con);
						   	print $rs;
						?> 
						</span> &nbsp;
						
						</a>             
                </li>
				 <?php  }  ?> 
                 <?php if($_SESSION['usergroup']=="master_admin"){   ?>     
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardout","master_admin");'>
                        <i class="icon-user"> </i> Appointments
						<span class="pull-right">
                        </span>						
						&nbsp; <span class="label label-default">
						<?php
						  	$con = mysql_connect("localhost","root","") or die("could not connect to the database!");
							$db = mysql_select_db("mhealth_dev",$con) or die("Database not found!");
							$qry=mysql_query("SELECT *
												 FROM syscontent_out
												  WHERE p_id IN
												  (
													 SELECT p_id
													  FROM syscontent_out 
													  GROUP BY p_id
													  HAVING id = max(id))"); 
													 // HAVING id = max(id))");  // where sys_categ='$categ'	
	                        $rs = mysql_num_rows($qry);//or die ("Unable to get incoming messages for $categ ".mysql_error()."\r\n");
							print $rs;						
						?> 
						</span> &nbsp;
						
						</a>             
                </li>
				 <?php  }  ?>
                <?php if($_SESSION['usergroup']=="master_admin"){   ?>     
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardcounties","master_admin");'>
                        <i class="icon-user"> </i> Counties
						<span class="pull-right">             	 
                        </span>						
						&nbsp; <span class="label label-default">
						<?php
						  		 $rs=$dbi->getDashBoardcounties_index($con);
						   		print $rs;	
						?> 
						</span> &nbsp;
						</a>             
                </li>
				 <?php  }  ?>   
                 <?php if($_SESSION['usergroup']=="clinician"){   ?> 
                   <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardout","main_clinician");'>
                        <i class="icon-user"> </i> All Client Status
						<span class="pull-right">
                        </span>					
						&nbsp; <span class="label label-default">
						<?php
						     require_once("DbInterface.php");
							 $dbi=new DbInterface();
							 $con=$dbi->connect();
							 $f_id=$dbi->getF_Id($con,$_SESSION['username']);
							 $rs=$dbi->getDashBoard_out_index($con,$f_id); 							
							 print $rs;
																			
						?> 
						</span> &nbsp;
						
						</a>             
                </li>
                <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  				   
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardactive","main_clinician");'>
                        <i class="icon-signin"> </i> Notified
						<span class="pull-right">                
                        </span>						
						&nbsp; <span class="label btn-metis-2">
						<?php
						   	$rs=$dbi->getDashBoardactive_index($con,$f_id); 							
							print $rs;										
						?> 
						</span> &nbsp;
						
						</a>             
                </li>
                 <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  
				 <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardbooked","main_clinician");'>
				           <i class="icon-time"></i> Booked	   
                          <span class="pull-right">                         
                        </span>
                          &nbsp; <span class="label btn-primary">
						 <?php
						   $rs=$dbi->dashboardbooked_index($con,$f_id); 							
						   print $rs;
						?>  						
						  </span>&nbsp;
                    </a>
			 </li>
              <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardmissed","main_clinician");'>
				           <i class="icon-calendar-empty"></i> Missed	   
                          <span class="pull-right">                       
                        </span>
                          &nbsp; <span class="label label-danger">
						 <?php
						    $rs=$dbi->dashboardmissed_index($con,$f_id); 							
							print $rs;
						?>  
						 </span>&nbsp;
                    </a>
			 </li>
              <?php  }  ?> 
             <?php if($_SESSION['usergroup']=="clinician"){   ?>  
             <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboarddefault","main_clinician");'>
				           <i class="icon-bell"></i> Defaulted	   
                          <span class="pull-right">                      
                        </span>
                          &nbsp; <span class="label label-warning">
						 <?php
						    $rs=$dbi->dashboarddefault_index($con,$f_id); 							
							print $rs;
						?>  
						
						  </span>&nbsp;
                   </a>
			 </li>
              <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  
			  <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardlost","main_clinician");'>
				           <i class="icon-warning-sign"></i> Lost to Followup	   
                          <span class="pull-right">                        
                        </span>
                          &nbsp; <span class="label btn-metis-4">  0
						  </span>&nbsp;
                   </a>
			 </li> 
              <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  
              <li class="panel"> <a href='javascript:taskInterpreter("dose","dashboardpending","main_clinician");'>
				           <i class="icon-puzzle-piece"></i> Outreach	   
                          <span class="pull-right">                      
                        </span>
                          &nbsp; <span class="label btn-metis-4">  
						 <?php
						  $rs=$dbi->dashboardoutreach_index($con,$f_id); 							
						   print $rs;
						?>  						
						  </span>&nbsp;
                   </a>
			 </li> 
             <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  
				<li class="panel"><a href='javascript:taskInterpreter("dose","dashboardwithin","main_clinician");'>
                        <i class="icon-medkit"></i> Lab Results</a>                   
                </li>                         
                 <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  
                <li class="panel"><a href='javascript:taskInterpreter("dose","dashboardcomplete","main_clinician");' >
                        <i class="icon-ok-sign"></i> Completed</a>                   
                </li> 
				   <?php  }  ?> 
                <?php if($_SESSION['usergroup']=="clinician"){   ?>  
                 <li class="panel"><a href='javascript:taskInterpreter("dose","dashboardbad","main_clinician");'>
                        <i class="icon-thumbs-down-alt"></i> Incomplete</a>                   
                </li>
           
		        <?php  }  ?> 
               <?php 
				if($_SESSION['usergroup']=="clinician") {   ?>
                <li class="panel"><a href='#' onclick='javascript:window.open("report.php");'>
                        <i class="icon-bar-chart"></i> Service Reports</a>                   
                </li>
               <?php  }  ?>               
   <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> JOBS MONITOR     
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                    <?php
					 include("chore/panel.php");
                      syspanel();					 
					 ?>
                    </ul>
                </li>
            </ul>

        </div>
        <!--END MENU SECTION -->
   <!--PAGE CONTENT -->
        <div id="content">             
            <div class="inner" style="min-height: 1200px;">
                <div class="row">
                    <div class="col-lg-12">
                      <?php /*?> <h3>Group: <?php echo $_SESSION['usergroup']; ?></h3><?php */?>
							 <!-- there is usergroup and username    -->
                    </div>
                </div>
                  <hr />
                      
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                        <?php if($_SESSION['usergroup']=="master_admin"){   ?>
 	 							<a class="quick-btn" href='javascript:taskInterpreter("signin","p_regform","master_admin")'>
                                <i class="icon-sitemap icon-2x"></i>
                                <span>Add project</span>
                                <span class="label btn-metis-4">
                                <?php
						   $rs=$dbi->getDashBoardprojects_index($con);
							print $rs;	
						?>  
                                </span>
                            </a>    
                       <?php  }    ?> 
                        <?php if($_SESSION['usergroup']=="master_admin"){   ?>
 	                             <a class="quick-btn" href='javascript:taskInterpreter("signin","f_regform","master_admin")'>
                                <i class="icon-h-sign icon-2x"></i>
                                <span>Add Hospital</span>
                                <span class="label btn-metis-4"> 
                               <?php
						  	 $rs=$dbi->getDashBoardhospitals_index($con);
						    print $rs;
						?> 
                            </span>
                            </a>    
                       <?php  }    ?> 
                        <?php if($_SESSION['usergroup']=="master_admin"){   ?>
 	 <a class="quick-btn" href='javascript:taskInterpreter("signin","user_regform","master_admin")'>
                                <i class="icon-user icon-2x"></i>
                                <span>Add User</span>
                                <span class="label btn-metis-4">
                                <?php
						    	 $rs=$dbi->getDashBoardusers_index($con);
						   	     print $rs;
						?>  
                                </span>
                            </a>    
                       <?php  }    ?> 
                        <?php if($_SESSION['usergroup']=="master_admin"){   ?>
 	 <a class="quick-btn" href='javascript:taskInterpreter("profile","search","main_clinician")'>
                                <i class="icon-envelope icon-2x"></i>
                                <span>Messages</span>
                                <span class="label btn-metis-4">
                                <?php
						   	$con = mysql_connect("localhost","root","") or die("could not connect to the database!");
							$db = mysql_select_db("mhealth_dev",$con) or die("Database not found!");
							$qry=mysql_query("select tbl_patientdetails.p_id,p_fname,p_mname,p_lname,p_mobile,enroll_no,p_condition,groups,app_date,app_status from tbl_patientdetails,tbl_patient_appointment where tbl_patientdetails.p_id=tbl_patient_appointment.p_id and tbl_patientdetails.sms_enabled='1' and (p_fname like '$filter%' or p_lname like '$filter%')");
	                        $rs = mysql_num_rows($qry);//or die ("Unable to get incoming messages for $categ ".mysql_error()."\r\n");
							print $rs;
						?>  
                                </span>
                            </a>    
                       <?php  }    ?> 
                        <?php if($_SESSION['usergroup']=="master_admin"){   ?>
 	 <a class="quick-btn" href='javascript:taskInterpreter("profile","search","main_clinician")'>
                                <i class="icon-hospital icon-2x"></i>
                                <span>Appointments</span>
                                <span class="label btn-metis-4">
                                <?php
						   	$con = mysql_connect("localhost","root","") or die("could not connect to the database!");
							$db = mysql_select_db("mhealth_dev",$con) or die("Database not found!");
							$qry=mysql_query("select tbl_patientdetails.p_id,p_fname,p_mname,p_lname,p_mobile,enroll_no,p_condition,groups,app_date,app_status from tbl_patientdetails,tbl_patient_appointment where tbl_patientdetails.p_id=tbl_patient_appointment.p_id and tbl_patientdetails.sms_enabled='1' and (p_fname like '$filter%' or p_lname like '$filter%')");
	                        $rs = mysql_num_rows($qry);//or die ("Unable to get incoming messages for $categ ".mysql_error()."\r\n");
							print $rs;
						?>  
                                </span>
                            </a>    
                       <?php  }    ?>
                        <?php if($_SESSION['usergroup']=="master_admin"){   ?>
 	 <a class="quick-btn" href='javascript:taskInterpreter("profile","search","main_clinician")'>
                                <i class=" icon-save icon-2x"></i>
                                <span>Backup</span>
                                <span class="label btn-metis-4">
                                <?php
						   	$con = mysql_connect("localhost","root","") or die("could not connect to the database!");
							$db = mysql_select_db("mhealth_dev",$con) or die("Database not found!");
							$qry=mysql_query("select tbl_patientdetails.p_id,p_fname,p_mname,p_lname,p_mobile,enroll_no,p_condition,groups,app_date,app_status from tbl_patientdetails,tbl_patient_appointment where tbl_patientdetails.p_id=tbl_patient_appointment.p_id and tbl_patientdetails.sms_enabled='1' and (p_fname like '$filter%' or p_lname like '$filter%')");
	                        $rs = mysql_num_rows($qry);//or die ("Unable to get incoming messages for $categ ".mysql_error()."\r\n");
							print $rs;
						?>  
                                </span>
                            </a>    
                       <?php  }    ?>  
                        <?php if($_SESSION['usergroup']=="master_admin"){   ?>
 	 <a class="quick-btn" href='javascript:taskInterpreter("profile","search","main_clinician")'>
                                <i class="icon-download-alt icon-2x"></i>
                                <span>Data Export</span>
                                <span class="label btn-metis-4">
                                <?php
						   	$con = mysql_connect("localhost","root","") or die("could not connect to the database!");
							$db = mysql_select_db("mhealth_dev",$con) or die("Database not found!");
							$qry=mysql_query("select tbl_patientdetails.p_id,p_fname,p_mname,p_lname,p_mobile,enroll_no,p_condition,groups,app_date,app_status from tbl_patientdetails,tbl_patient_appointment where tbl_patientdetails.p_id=tbl_patient_appointment.p_id and tbl_patientdetails.sms_enabled='1' and (p_fname like '$filter%' or p_lname like '$filter%')");
	                        $rs = mysql_num_rows($qry);//or die ("Unable to get incoming messages for $categ ".mysql_error()."\r\n");
							print $rs;
						?>  
                                </span>
                            </a>    
                       <?php  }    ?> 
                       <?php if($_SESSION['usergroup']=="clinician"){   ?>
                          <a class="quick-btn" href='javascript:taskInterpreter("profile","search","main_clinician")'>
                                <i class="icon-hospital icon-2x"></i>
                                <span>Appointments</span>
                                <span class="label btn-metis-4">
                                <?php
						    $rs=$dbi->dashboardappointments_index($con,$f_id); 		
							print $rs;
						?>  
                                </span>
                            </a> 
                  <?php  }    ?> 
                                <?php if($_SESSION['usergroup']=="clinician"){   ?> 
                         <a class="quick-btn" href='javascript:taskInterpreter("profile","view","main_clinician")'>
                                <i class="icon-user-md icon-2x"></i>
                                <span>Clients</span>
                                <span class="label btn-metis-4">
                                 <?php
						   $rs=$dbi->dashboardclient_index($con,$f_id); 		
							print $rs;
						?>                             
                                </span>
                            </a> 
                         <?php  }    ?>   
                           <?php if($_SESSION['usergroup']=="clinician"){   ?>                         
                            <a class="quick-btn" href='javascript:taskInterpreter("signin","signin","main_clinician")'>
                                <i class="icon-user icon-2x"></i>
                                <span> Add Client</span>
                               <!--  <i class="icon-search icon-2x"></i><span class="label label-warning">2</span>  -->
                            </a>
                      <?php  }    ?>                   
                    <?php if($_SESSION['usergroup']=="clinician"){   ?>                           
                            <a class="quick-btn" href='javascript:taskInterpreter("profile","ListPatients","main_clinician")'>
                                <i class="icon-edit icon-2x"></i>
                                <span>Message</span>
                                <span class="label label-warning">+2</span>
                            </a>
                         <?php  }    ?> 
                    <?php if($_SESSION['usergroup']=="clinician"){   ?>    
                            <a class="quick-btn" href='javascript:taskInterpreter("profile","setbroadcast","main_clinician")'>
                                <i class="icon-external-link icon-2x"></i>
                                <span>Broadcast</span>
                                <span class="label btn-metis-2"> 
								<?php
						   	$con = mysql_connect("localhost","root","") or die("could not connect to the database!");
							$db = mysql_select_db("mhealth_dev",$con) or die("Database not found!");
							$qry=mysql_query("select * from tbl_patientdetails");
	                        $rs = mysql_num_rows($qry);//or die ("Unable to get incoming messages for $categ ".mysql_error()."\r\n");
							print $rs;
						?>           </span>
                            </a>
                       <?php  }    ?> 
                    <?php if($_SESSION['usergroup']=="clinician"){   ?>                          
                            <a class="quick-btn" href='javascript:taskInterpreter("signin","backup","main_clinician")'>
                                <i class="icon-folder-close icon-2x"></i>
                                <span>Backup</span>
                                <span class="label label-default">20</span>
                            </a>
                               <?php  }    ?> 
                            
                            
                        </div>

                    </div>
           
                </div>
                  <!--END BLOCK SECTION -->
                  <!--END BLOCK SECTION -->
                <hr />
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                <div class="row" id="data">

                    <div class="col-lg-12">
                 
                    
   <?php
	if($_SESSION['usergroup']=="clinician") {
					
		?> 
                    <div class="panel panel-primary" id="main_clinician">
                                    
                          <div class="panel-heading"> 
                            </div>   
                       <div style="width:40%; min-width:1400px; height:450px;">
                          
                            <div class="panel-body"> 
         <?php							  
							  
		if($myaction=="dashboardin"){
       print " <IFRAME SRC='dashboard.php?page=$page' WIDTH='100%' HEIGHT='1000px' frameBorder='0' bgcolor='#7F1921'> 
				 Iframes not supported by your browser 
			    </IFRAME>  "; 
	  }
	  else if($myaction=="dashboardout"){
	  print " <IFRAME SRC='dashboardout.php?page=$page' WIDTH='100%' HEIGHT='1000px' frameBorder='0' bgcolor='#7F1921'> 
				 Iframes not supported by your browser 
			    </IFRAME>"; 
	  }
	 
	  else if($action=="dobroadcast"){
	  	require_once("interfaceLibrary.php");
		$message=$dbi->getDefaultBroadcastMessage($con);
		setbroadcast($message);
	  }
	 
	   else if($action=="broadcasterror"){
	  	require_once("interfaceLibrary.php");
		broadcasterror($action);
	  }
	   else if($action=="confirm"){
	  	require_once("interfaceLibrary.php");
		
		getResponse($p_id,$names,$mobile);    
	  }
	   else if($action=="editappoint"){	   
	  	require_once("interfaceLibrary.php");
		
	//get data for personal information
		$p_appoint=$dbi->getPatientAppointInfo($p_id,$con);		
	  	$app_type=$dbi->getapptype($con);
    	$app_type1=$dbi->getapptype_app($con);
	 	$app_type2=$dbi->getapptype_2($con);
	    $personal=$dbi->getIDdetails($con,$p_id);	
	    editappointment_form($p_id,$personal,$p_appoint,$app_date,$app_status,$smsappoint,$app_type,$app_type1,$app_type2);
		
	  }
	   else if($action=="enroll"){
	  	require_once("interfaceLibrary.php");
		/*require_once("DbInterface.php");
	      $dbi=new DbInterface();		
	      $con=$dbi->connect();*/
		  //$personal=$dbi->getIDdetails($con,$p_id);
		 // $p_condition=$personal['p_condition'];
		  //$app_type1=$dbi->getapptype_1($con);
		  $app_type1=$dbi->getapptype_1($con,$p_condition);	
		  $app_type2=$dbi->getapptype_2($con);	  
		  $app_type=$dbi->getapptype($con);     
		  $facility=$dbi->getfacility($con);
		  $subgroups=$dbi->getsubgroups($con);	
		getSigninForm($p_enrollnum,$pf_name,$pm_name,$pl_name,$p_year,$p_num,$facility,$subgroups,$app_type,$app_type1,$app_type2);
	  }
	  else{
	  require_once("interfaceLibrary.php");	  
	  $bk_jan=$dbi->getJanBookedList_graph($con,$f_id);
	  $bk_feb=$dbi->getFebBookedList_graph($con,$f_id);
	  $bk_mar=$dbi->getMarBookedList_graph($con,$f_id);
	  $bk_apr=$dbi->getAprBookedList_graph($con,$f_id);
	  $bk_may=$dbi->getMayBookedList_graph($con,$f_id);
	  $bk_jun=$dbi->getJunBookedList_graph($con,$f_id);	
	  $nt_jan=$dbi->getJanNotifiedList_graph($con,$f_id);
	  $nt_feb=$dbi->getFebNotifiedList_graph($con,$f_id);
	  $nt_mar=$dbi->getMarNotifiedList_graph($con,$f_id);
	  $nt_apr=$dbi->getAprNotifiedList_graph($con,$f_id);
	  $nt_may=$dbi->getMayNotifiedList_graph($con,$f_id);
	  $nt_jun=$dbi->getJunNotifiedList_graph($con,$f_id);	 
	  $ms_jan=$dbi->getJanMissedList_graph($con,$f_id);
	  $ms_feb=$dbi->getFebMissedList_graph($con,$f_id);
	  $ms_mar=$dbi->getMarMissedList_graph($con,$f_id);
	  $ms_apr=$dbi->getAprMissedList_graph($con,$f_id);
	  $ms_may=$dbi->getMayMissedList_graph($con,$f_id);
	  $ms_jun=$dbi->getJunMissedList_graph($con,$f_id);	  
	   gethome ($p_rs,$bk_jan,$bk_feb,$bk_mar,$bk_apr,$bk_may,$bk_jun,$nt_jan,$nt_feb,$nt_mar,$nt_apr,$nt_may,$nt_jun,$ms_jan,$ms_feb,$ms_mar,$ms_apr,$ms_may,$ms_jun);
	  }
				 ?>
                            </div>
            </div>                <div class="panel-footer">
                            Get   in touch: admin@mhealthkenya.org                             </div>
                             
                      </div>        
                <?php				
	}
		
            else  if($_SESSION['usergroup']=="administrator") {
	    
          ?>    
          <div class="panel panel-primary" id="administrator">                
                            <div class="panel-heading">
                       Panel
                            </div>
                            <div class="panel-body">
                          This is administrator I rock in the system wolololo
                            </div>
                            <div class="panel-footer">
                             Get   in touch: admin@mhealthKenya.com                            </div>
                             
                      </div>      
          
          <?php
		 } 
		 else if($_SESSION['usergroup']=="master_admin") {
		  ?> 
          <div class="panel panel-primary" id="master_admin">                
                            <div class="panel-heading">
                       Panel 
                            </div>
                            <div class="panel-body">
                          This is administrator I rock in the system wolololo
                            </div>
                            <div class="panel-footer">
                             Get   in touch: admin@mhealthKenya.com                            </div>
                             
                      </div>                 
                      
                <?php
				}
				 
				else
				{
				
				
				?>     
                    <div class="panel panel-primary">                
                            <div class="panel-heading">
                       Panel  
                            </div>
                            <div class="panel-body">
                          We Develop, Implement and Sustain
                            </div>
                            <div class="panel-footer">
                             Get   in touch: admin@MhealthKenya.com                            </div>
                             
                      </div>   
                <?php 
				} 
				
				?>        
                             
                             
                             
                        </div>

                          
                    
                    </div>
                </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  MHealth Kenya &nbsp;2015 &nbsp;</p>
          <!-- <img src="template/assets/img/mhealth_4.png" alt="" />   -->
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="template/assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="template/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="template/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
      <!-- START CHART STYLES    -->    
    <script src="charts/lib/js/jquery.min.js"></script>
    <script src="charts/lib/js/chartphp.js"></script>
    <link rel="stylesheet" href="charts/lib/js/chartphp.css">
    <!-- END CHART STYLES    -->
</body>
    <!-- END BODY-->
    
</html>
