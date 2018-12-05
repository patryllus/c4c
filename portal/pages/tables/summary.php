<!DOCTYPE html>
<?php
include 'db.php';
error_reporting(0);
 require_once("DbInterface.php");
 $dbi=new DbInterface();
 $con=$dbi->connect();

$status_pep=$dbi->sum_status_pep($con);
$status_nonpep=$dbi->sum_status_nonpep($con);	
$status_reexposed=$dbi->sum_status_reexposed($con);							

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
       <input type="hidden" name="status_pep" class="status_pep" placeholder="Search..." value="<?php echo $status_pep; ?>" >		
       <input type="hidden" name="status_nonpep" class="status_nonpep" placeholder="Search..." value="<?php echo $status_nonpep; ?>" >
        <input type="hidden" name="status_reexposed" class="status_reexposed" placeholder="Search..." value="<?php echo $status_reexposed; ?>" >													
		<script type="text/javascript">
$(function () {
    // Create the cha
	var status_pep= $(".status_pep").val();
	var client_pep=parseInt(status_pep);
	var status_nonpep= $(".status_nonpep").val();
	var clients_nonpep=parseInt(status_nonpep);
	var status_reexposed= $(".status_reexposed").val();
	var clients_reexposed=parseInt(status_reexposed);
	//alert (tfacilities);

    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Status summary, 2016'
        },
        subtitle: {
            text: 'Click respective arcs to view clients'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Client number',
            data: [
                ['PEP', client_pep],
                ['Non PEP', clients_nonpep],
                ['Reexposed', clients_reexposed],
                             
            ]
        }]
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
            </header>            <!-- Left side column. contains the logo and sidebar -->
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
                                  <li><a href="counties.php"><i class="fa fa-circle-o"></i> Counties</a></li>
                                   <li><a href="facilities.php"><i class="fa fa-circle-o"></i> Facilities</a></li>
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
                                <h3 class="box-title">Status Summary</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
<!--                                <input type="datetime" name="date_from" id="date_from" placeholder="Date  From" class="date_from "/>
                                <input type="datetime" name="date_to" id="date_to" placeholder="Date To" class="date_to "/>-->
                                <input type="date" name="date_from" class="date_range_filter  hasDatepicker" id="example_range_from_1" rel="1">
                                <input type="date" name="date_to" class="date_range_filter  hasDatepicker" id="example_range_from_1" rel="1">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr> 
                                            <th>Counties</th>
                                            <th>Facilties</th> 
                                            <th>Total Clients</th>  
                                            <th>PEP</th>                                    
                                            <th>Non PEP</th>
                                            <th>Reexposed</th>                                                                    
                                          </tr>

                                    </thead>
                                    <!-- <tbody> -->
                                    <?php
												 
												  //Aggregations
												    $tcounties=$dbi->sum_status_counties($con);
												    $tfacilities=$dbi->sum_status_facilities($con);
                                                    $tclients=$dbi->sum_status_clients($con);
												    $tpep=$dbi->sum_status_pep($con);
													$tnonpep=$dbi->sum_status_nonpep($con);
													$treexposed=$dbi->sum_status_reexposed($con);
																									
                                                    
									 ?>				
                                        <tr>
                                             <td><?php print $tcounties; ?></td>
                                             <td><?php print $tfacilities; ?></td>
                                             <td><?php print $tclients; ?></td>
                                             <td><?php print $tpep; ?></td>                                                                  
                                             <td><?php print $tnonpep; ?></td>
                                             <td><?php print $treexposed; ?></td>
                                                                                                    
                                         </tr>
                                    <?php
                                
                                    ?>

                                    <!-- </tbody> -->
                                    <tfoot>
                                        <tr>
                                          <th>Counties</th>
                                            <th>Facilties</th> 
                                            <th>Total Clients</th>  
                                            <th>PEP</th>                                    
                                            <th>Non PEP</th>
                                            <th>Reexposed</th> 
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
