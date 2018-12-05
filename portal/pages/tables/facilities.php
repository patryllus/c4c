<!DOCTYPE html><!DOCTYPE html>
<?php
error_reporting(0);
 require_once("DbInterface.php");
 $dbi=new DbInterface();
 $con=$dbi->connect();

						
$cnairobi=$dbi->sum_facilities($con,"Nairobi");
$cisiolo=$dbi->sum_facilities($con,"Isiolo");
$cmombasa=$dbi->sum_facilities($con,"Mombasa");
//print "No of Facilities at Homa Bay ==> ".$tfacilities;

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mpep | Reports</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../dist/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../../dist/css/buttons.dataTables.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

      <script type="text/javascript" src="../../hcharts/jquery.min.js"></script>
		<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  -->
		<style type="text/css">
${demo.css}
		</style>
        						
	  <input type="hidden" name="cnairobi" class="cnairobi" placeholder="Search..." value="<?php echo $cnairobi; ?>" >		
       <input type="hidden" name="cisiolo" class="cisiolo" placeholder="Search..." value="<?php echo $cisiolo; ?>" >	
       <input type="hidden" name="cmombasa" class="cmombasa" placeholder="Search..." value="<?php echo $cmombasa; ?>" >												
		<script type="text/javascript">
$(function () {
    // Create the cha
	var cnairobi= $(".cnairobi").val();
	var clients_nairobi=parseInt(cnairobi);
	var cisiolo= $(".cisiolo").val();
	var clients_isiolo=parseInt(cisiolo);
	var cmombasa= $(".cmombasa").val();
	var clients_mombasa=parseInt(cmombasa);
	//alert (tfacilities);
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Facilities per County, 2015'
        },
        subtitle: {
            text: 'Click the columns to view facilities.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Number of Facilities'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b> of total<br/>'
        },

        series: [{
            name: 'Hospitals',
            colorByPoint: true,
            data: [{
		
                 name:'Nairobi' ,
                y:clients_nairobi ,
                   
            }, {
                name: 'Mombasa',
                y: clients_mombasa,
              
            }, {
                name: 'Isiolo',
                y: clients_mombasa,
                
            }, {
                name: 'Siaya',
                y: 0,
               
            }, {
                name: 'Kiambu',
                y: 0,
               
            }, {
                name: 'Machakos',
                y: 0,
               
            }]
        }],
       
    });
});
		</script>
   </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->

                <a href="../../index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Mpep</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Mpep </b>Reports</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                               
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                               
                                           
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                          <!--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                        </div>
                        <!--            <div class="pull-left info">
                                      <p>Alexander Pierce</p>
                                      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                    </div>-->
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                   <li><a href="facilities.php"><i class="fa fa-circle-o"></i> Counties</a></li>
                                   <li><a href="counties.php"><i class="fa fa-circle-o"></i> Facilities</a></li>
                                   <li><a href="clients.php"><i class="fa fa-circle-o"></i> Clients</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Reports</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="county_report.php"><i class="fa fa-circle-o"></i> Counties</a></li>
                                <li><a href="facility_report.php"><i class="fa fa-circle-o"></i> Facilities</a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="status.php">
                                <i class="fa fa-th"></i> <span>Summary</span> <small class="label pull-right bg-green">new</small>
                            </a>
                        </li>
                         <li>
                            <a href="summary.php">
                                <i class="fa fa-th"></i> <span>Charts</span> <small class="label pull-right bg-green">new</small>
                            </a>
                        </li>
                         <li>
                            <a href="trend.php">
                                <i class="fa fa-th"></i> <span>Trend</span> <small class="label pull-right bg-green">new</small>
                            </a>
                        </li>
                       
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>

                        <small></small>
                    </h1> 
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active"><a href='../../../mhealth/serve?task=logout&action=logout'>
                             <span class="label label-danger">LOG-OUT</span>
                        </a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Facilities per County</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
<!--                                <input type="datetime" name="date_from" id="date_from" placeholder="Date  From" class="date_from "/>
                                <input type="datetime" name="date_to" id="date_to" placeholder="Date To" class="date_to "/>-->
                                <input type="date" name="date_from" class="date_range_filter  hasDatepicker" id="example_range_from_1" rel="1">
                                <input type="date" name="date_to" class="date_range_filter  hasDatepicker" id="example_range_from_1" rel="1">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                             <th>County</th>
                                            <th>Facilties</th>                                     
                                            <th>Clients</th>                                                                          
                                             <th>Date</th>
                                        </tr>

                                    </thead>
                                    <!-- <tbody> -->
                                    <?php
						
						 $c_rs=$dbi->getCountyList($con);
    	                  while($c_row=mysql_fetch_array($c_rs)) {
                                       
                                                    $county=$c_row['county'];
													$tfacilities=$dbi->sum_facilities($con,$county);
												  
												  	 $d_rs=$dbi->getClientsWithin($con,$county);												 
													  while($d_row=mysql_fetch_array($d_rs)) {
													           $county=$d_row['county'];
															   $tclients=$dbi->sum_clientsWithinCounties($con,$county);
									 ?>	
                                    		
                                        <tr>
                                            <td><?php print $county; ?></td>            
                                            <td><?php print $tfacilities; ?></td>                                         
                                            <td><?php print $tclients; ?></td>                                                                   
                                            <td><span><?php echo $row['f_datereg']; ?></span></td>  
                                        </tr>
                                    <?php
                                  } 
								 }
                                    ?>

                                    <!-- </tbody> -->
                                    <tfoot>
                                        <tr>
                                            <th>County</th>
                                            <th>Facilties</th>
                                            <th>Clients</th>                                                
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.box-body -->
                           <!--  <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script src="https://code.highcharts.com/modules/exporting.js"></script>

                             <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>   -->
                             <script src="../../hcharts/highcharts.js"></script>
							<script src="../../hcharts/exporting.js"></script>
                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>    
                        </div><!-- /.box -->
                    </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href=""></a>.</strong> All rights reserved.
    </footer>


<!-- jQuery 2.1.4 
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>   Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script type="text/javascript" src="../../dist/js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="../../dist/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../dist/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../../dist/js/jszip.min.js"></script>
<script type="text/javascript" src="../../dist/js/pdfmake.min.js"></script>
<script type="text/javascript" src="../../dist/js/vfs_fonts.js"></script>
<script type="text/javascript" src="../../dist/js/buttons.html5.min.js"></script>

<!-- page script -->
<script>
    var j = jQuery.noConflict();

    j(document).ready(function () {
        j('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'pageLength'],
            lengthMenu: [
                [5, 10, 25, 50, -1],
                ['5 rows', '10 rows', '25 rows', '50 rows', 'Show all rows']
            ],
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api(), data;

                // Remove the formatting to get integer data for summation
                var intVal = function (i) {
                    return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                };

                // Total over all pages
                total = api
                        .column(2)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                // Total over this page
                pageTotal = api
                        .column(2, {page: 'current'})
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                // Update footer
                $(api.column(2).footer()).html(
                        'Total ' + pageTotal + ' , Cumulative ' + total + ' '
                        );
            },
            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                        );

                                column
                                        .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                            });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });

    });

    $(document).ready(function () {
        $(".filter_report_button").click(function () {
            $(".report_filter_window").modal("show");
        });

        $('select[multiple]').multiselect({
            columns: 4,   //a
            placeholder: 'Select options',
            // how many columns should be use to show options

            columns: 1,
                    // include option search box  
// include option search box  

                    search: true,
// search filter options

            searchOptions: {
                default: 'Search', // search input placeholder text

                showOptGroups: true     // show option group titles if no options remaining

            },
// add select all option

            selectAll: true,
// select entire optgroup  

            selectGroup: true,
// minimum height of option overlay

            minHeight: 200,
// maximum height of option overlay

            maxHeight: null,
// display the checkbox to the user

            showCheckbox: true,
// options for jquery.actual

            jqActualOpts: {},
// maximum width of option overlay (or selector)

            maxWidth: null,
// minimum number of items that can be selected

            minSelect: true,
// maximum number of items that can be selected

            maxSelect: true,
        });


        $(function () {
            // Basic Setup
            var $tableSel = $('#oTable');
            $tableSel.dataTable({
                'aaData': dummyData,
                'aoColumns': [
                    {'mData': 'name'},
                    {'mData': 'registered'}
                ],
                'sDom': '' // Hiding the datatables ui
            });

            $('#filter').on('click', function (e) {
                e.preventDefault();
                var startDate = $('#start').val(),
                        endDate = $('#end').val();

                filterByDate(1, startDate, endDate); // We call our filter function

                $tableSel.dataTable().fnDraw(); // Manually redraw the table after filtering
            });

            // Clear the filter. Unlike normal filters in Datatables,
            // custom filters need to be removed from the afnFiltering array.
            $('#clearFilter').on('click', function (e) {
                e.preventDefault();
                $.fn.dataTableExt.afnFiltering.length = 0;
                $tableSel.dataTable().fnDraw();
            });

        });

        /* Our main filter function
         * We pass the column location, the start date, and the end date
         */
        var filterByDate = function (column, startDate, endDate) {
            // Custom filter syntax requires pushing the new filter to the global filter array
            $.fn.dataTableExt.afnFiltering.push(
                    function (oSettings, aData, iDataIndex) {
                        var rowDate = normalizeDate(aData[column]),
                                start = normalizeDate(startDate),
                                end = normalizeDate(endDate);

                        // If our date from the row is between the start and end
                        if (start <= rowDate && rowDate <= end) {
                            return true;
                        } else if (rowDate >= start && end === '' && start !== '') {
                            return true;
                        } else if (rowDate <= end && start === '' && end !== '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
            );
        };

// converts date strings to a Date object, then normalized into a YYYYMMMDD format (ex: 20131220). Makes comparing dates easier. ex: 20131220 > 20121220
        var normalizeDate = function (dateString) {
            var date = new Date(dateString);
            var normalized = date.getFullYear() + '' + (("0" + (date.getMonth() + 1)).slice(-2)) + '' + ("0" + date.getDate()).slice(-2);
            return normalized;
        }

// Filler data for demo (thanks to http://json-generator.com)




    });



</script>
</body>
</html>

<?php
include 'db.php';
error_reporting(0);
 require_once("DbInterface.php");
 $dbi=new DbInterface();
 $con=$dbi->connect();

$chomabay=$dbi->sum_clientsWithinCounties($con,"Homa Bay");						
$ckisumu=$dbi->sum_clientsWithinCounties($con,"Kisumu");
//print "No of Facilities at Homa Bay ==> ".$tkisumu;

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mpep | Reports</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../dist/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../../dist/css/buttons.dataTables.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        
<script type="text/javascript" src="../../hcharts/jquery.min.js"></script>
		<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  -->
		<style type="text/css">
${demo.css}
		</style>
  <input type="hidden" name="chomabay" class="chomabay" placeholder="Search..." value="<?php echo $chomabay; ?>" >		
       <input type="hidden" name="ckisumu" class="ckisumu" placeholder="Search..." value="<?php echo $ckisumu; ?>" >												
		<script type="text/javascript">
$(function () {
    // Create the cha
	var chomabay= $(".chomabay").val();
	var clients_homabay=parseInt(chomabay);
	var ckisumu= $(".ckisumu").val();
	var clients_kisumu=parseInt(ckisumu);
	//alert (tfacilities);
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Clients per County, 2016'
        },
        subtitle: {
            text: 'Click the columns to view clients.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Number of Clients'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
		
                name:'Homa Bay' ,
                y:clients_homabay ,
                   
            }, {
                name: 'Kisumu',
                y: clients_kisumu,
              
            }, {
                name: 'Migori',
                y: 0,
                
            }, {
                name: 'Siaya',
                y: 0,
               
            }, {
                name: 'Kiambu',
                y: 0,
               
            }, {
                name: 'Nairobi',
                y: 0,
            }]
        }],
       
    });
});
		</script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="../../index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Mpep</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Mpep </b>Reports</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                      <!--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                                  <span class="hidden-xs">Alexander Pierce</span>
                                                </a>-->
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                          <!--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                        </div>
                        <!--            <div class="pull-left info">
                                      <p>Alexander Pierce</p>
                                      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                    </div>-->
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                  <li><a href="facilities.php"><i class="fa fa-circle-o"></i> Counties</a></li>
                                   <li><a href="counties.php"><i class="fa fa-circle-o"></i> Facilities</a></li>
                                   <li><a href="clients.php"><i class="fa fa-circle-o"></i> Clients</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Reports</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="counties.php"><i class="fa fa-circle-o"></i> Counties</a></li>
                                   <li><a href="facilities.php"><i class="fa fa-circle-o"></i> Facilities</a></li>
                                   <li><a href="clients.php"><i class="fa fa-circle-o"></i> Clients</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                                <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                                <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                <li class="active"><a href="data.php"><i class="fa fa-circle-o"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="label pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                                <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                                <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Multilevel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            </ul>
                        </li>
                        <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                        <li class="header">LABELS</li>
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>

                        <small></small>
                    </h1> 
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Clients per County</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
<!--                                <input type="datetime" name="date_from" id="date_from" placeholder="Date  From" class="date_from "/>
                                <input type="datetime" name="date_to" id="date_to" placeholder="Date To" class="date_to "/>-->
                                <input type="date" name="date_from" class="date_range_filter  hasDatepicker" id="example_range_from_1" rel="1">
                                <input type="date" name="date_to" class="date_range_filter  hasDatepicker" id="example_range_from_1" rel="1">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                             <th>County</th>                                                                             
                                            <th>Clients</th> 
                                              <th>Facilties</th>                                                                           
                                             <th>Date</th>
                                        </tr>

                                    </thead>
                                    <!-- <tbody> -->
                                    <?php
						
						 $c_rs=$dbi->getCountyList($con);
    	                  while($c_row=mysql_fetch_array($c_rs)) {
                                       
                                                    $f_county=$c_row['f_county'];
													$tfacilities=$dbi->sum_facilities($con,$f_county);
												  
												  	 $d_rs=$dbi->getClientsWithin($con,$f_county);												 
													  while($d_row=mysql_fetch_array($d_rs)) {
													           $f_county=$d_row['county'];
															   $tclients=$dbi->sum_clientsWithinCounties($con,$f_county);
									 ?>	
                                    		
                                        <tr>
                                            <td><?php print $f_county; ?></td>  
                                            <td><?php print $tclients; ?></td>
                                            <td><?php print $tfacilities; ?></td>
                                            <td><span><?php echo $row['f_datereg']; ?></span></td>  
                                        </tr>
                                    <?php
                                  } 
								 }
                                    ?>

                                    <!-- </tbody> -->
                                    <tfoot>
                                        <tr>
                                            <th>County</th>                                            
                                            <th>Clients</th>
                                            <th>Facilties</th>                                                
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.box-body -->
                            <script src="../../hcharts/highcharts.js"></script>
							<script src="../../hcharts/exporting.js"></script>
                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>   
                        </div><!-- /.box -->
                    </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href=""></a>.</strong> All rights reserved.
    </footer>

<!-- jQuery 2.1.4 
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>   Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script type="text/javascript" src="../../dist/js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="../../dist/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../dist/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../../dist/js/jszip.min.js"></script>
<script type="text/javascript" src="../../dist/js/pdfmake.min.js"></script>
<script type="text/javascript" src="../../dist/js/vfs_fonts.js"></script>
<script type="text/javascript" src="../../dist/js/buttons.html5.min.js"></script>

<!-- page script -->
<script>
    var j = jQuery.noConflict();

    j(document).ready(function () {
        j('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'pageLength'],
            lengthMenu: [
                [5, 10, 25, 50, -1],
                ['5 rows', '10 rows', '25 rows', '50 rows', 'Show all rows']
            ],
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api(), data;

                // Remove the formatting to get integer data for summation
                var intVal = function (i) {
                    return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                };

                // Total over all pages
                total = api
                        .column(3)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                // Total over this page
                pageTotal = api
                        .column(3, {page: 'current'})
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                // Update footer
                $(api.column(3).footer()).html(
                        'Total ' + pageTotal + ' , Cumulative ' + total + ' '
                        );
            },
            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                        );

                                column
                                        .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                            });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });

    });

    $(document).ready(function () {
        $(".filter_report_button").click(function () {
            $(".report_filter_window").modal("show");
        });

        $('select[multiple]').multiselect({
            columns: 4,   //a
            placeholder: 'Select options',
            // how many columns should be use to show options

            columns: 1,
                    // include option search box  
// include option search box  

                    search: true,
// search filter options

            searchOptions: {
                default: 'Search', // search input placeholder text

                showOptGroups: true     // show option group titles if no options remaining

            },
// add select all option

            selectAll: true,
// select entire optgroup  

            selectGroup: true,
// minimum height of option overlay

            minHeight: 200,
// maximum height of option overlay

            maxHeight: null,
// display the checkbox to the user

            showCheckbox: true,
// options for jquery.actual

            jqActualOpts: {},
// maximum width of option overlay (or selector)

            maxWidth: null,
// minimum number of items that can be selected

            minSelect: true,
// maximum number of items that can be selected

            maxSelect: true,
        });


        $(function () {
            // Basic Setup
            var $tableSel = $('#oTable');
            $tableSel.dataTable({
                'aaData': dummyData,
                'aoColumns': [
                    {'mData': 'name'},
                    {'mData': 'registered'}
                ],
                'sDom': '' // Hiding the datatables ui
            });

            $('#filter').on('click', function (e) {
                e.preventDefault();
                var startDate = $('#start').val(),
                        endDate = $('#end').val();

                filterByDate(1, startDate, endDate); // We call our filter function

                $tableSel.dataTable().fnDraw(); // Manually redraw the table after filtering
            });

            // Clear the filter. Unlike normal filters in Datatables,
            // custom filters need to be removed from the afnFiltering array.
            $('#clearFilter').on('click', function (e) {
                e.preventDefault();
                $.fn.dataTableExt.afnFiltering.length = 0;
                $tableSel.dataTable().fnDraw();
            });

        });

        /* Our main filter function
         * We pass the column location, the start date, and the end date
         */
        var filterByDate = function (column, startDate, endDate) {
            // Custom filter syntax requires pushing the new filter to the global filter array
            $.fn.dataTableExt.afnFiltering.push(
                    function (oSettings, aData, iDataIndex) {
                        var rowDate = normalizeDate(aData[column]),
                                start = normalizeDate(startDate),
                                end = normalizeDate(endDate);

                        // If our date from the row is between the start and end
                        if (start <= rowDate && rowDate <= end) {
                            return true;
                        } else if (rowDate >= start && end === '' && start !== '') {
                            return true;
                        } else if (rowDate <= end && start === '' && end !== '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
            );
        };

// converts date strings to a Date object, then normalized into a YYYYMMMDD format (ex: 20131220). Makes comparing dates easier. ex: 20131220 > 20121220
        var normalizeDate = function (dateString) {
            var date = new Date(dateString);
            var normalized = date.getFullYear() + '' + (("0" + (date.getMonth() + 1)).slice(-2)) + '' + ("0" + date.getDate()).slice(-2);
            return normalized;
        }

// Filler data for demo (thanks to http://json-generator.com)




    });



</script>
</body>
</html>
