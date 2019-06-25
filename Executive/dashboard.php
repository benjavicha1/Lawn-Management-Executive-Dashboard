<?php 
session_start();
include_once './includes/redirect-to-index.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Dashboard</title>
     <!--===============================================================================================-->
     <link rel="icon" type="image/png" href="images/icons/grass-icon.ico"/>
     <!--===============================================================================================-->
     <!-- Bootstrap core CSS-->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!--===============================================================================================-->
     <!-- Custom fonts for this template-->
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!--===============================================================================================-->
     <!-- Page level plugin CSS-->
     <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
     <!--===============================================================================================-->
     <!-- Custom styles for this template-->
     <link href="css/sb-admin.css" rel="stylesheet">
     <!--===============================================================================================-->
     <?php include_once './includes/performance/Q5-branch-geochart.inc.php'; ?>
     <!--===============================================================================================-->
     <!-- Include issues.inc.php-->
     <?php include_once './includes/ticket-statuses/ticket-statuses.inc.php'; ?>
     <!--===============================================================================================-->
     <!-- Google icons-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <!--===============================================================================================-->


     
          
</head>    

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    
    <!-- Include template-dashboard.inc.php-->
    <!--===============================================================================================-->
    <?php include_once './includes/dashboard-Q2-Total-Revenue-Year.inc.php'; ?>
    <?php include_once './includes/dashboard-Q5-branch-geochart.inc.php'; ?>
    <?php include_once './includes/dashboard-number-of-cards.inc.php'; ?>
    
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <!--=======================================================================================-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>

            <!-- Icon Cards (4 cards on the top of the page)-->
            <!--=======================================================================================-->
            <div class="row">


                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-handshake-o"></i>
                            </div>
                            <div class="mr-5"><?php echo number_format($_SESSION['open_ticket']);?> Open Tickets!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" 
                           href="./open-tickets.php">
                            <span class="float-left">View Table</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5"><?php echo number_format($_SESSION['new_purchase']); ?> New Orders!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="./new-orders.php">
                            <span class="float-left">View Table</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-envelope-open-o"></i>
                            </div>
                            <div class="mr-5"><?php echo number_format($_SESSION['open_issue']);?> Open Issues!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" 
                           href="./open-issues.php">
                            <span class="float-left">View Table</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-handshake-o"></i>
                            </div>
                            <div class="mr-5"><?php echo number_format($_SESSION['new_lead']);?> New Leads!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" 
                           href="./lead-charts.php">
                            <span class="float-left">View Table</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div> <!--End of <div class="row">-->

            
            <!-- Data Tables -->
            <div class ="row">
                <div class="col-xl-12 col-sm-12 mb-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-dollar"></i> Company Performance</h4>
                        </div>

                        <div class="card-body">       
                            <!--==================================================================--> 
                            <?php include_once './includes/Q1-Profit-Margin.inc.php'; ?>
                            <!--==================================================================--> 
                            
                            <hr>
                            
                            <div class="row"  id="dashboard_div_company">
                                <div class="col-sm-12 col-lg-6 my-auto">
                                    <div id="categoryFilter_control_div_company" style="padding-left: 20px; padding-top: 10px "></div>

                                    <div id="chart_div_company" style="padding-left: 0px; padding-top: 30px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">
*Table displays the total revenue and expense of each year calculated from every contracts and all properties.</div>
                    </div> <!--End of <div class="card mb-3">-->
                </div> <!--End of the Row-->

            </div>
            <!--=======================================================================================-->
            <div class ="row">
                <!-- Example Pie Chart Card-->
                <!--===================================================================================-->
                <div class="col-xl-12 col-sm-12 mb-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4> <i class="material-icons">place</i> Branches </h4></div>
                        <div class="card-body">
                            <div id="geoChart_div" style="height: 450px; width: 500px;"></div>
                        </div>
                        <div class="card-footer small text-muted">*Map of Branches</div>
                    </div>
                </div>
            </div> <!--End of the Row-->

        </div> <!--End of <div class="container-fluid">-->
    </div> <!--End of <div class="content-wrapper">-->

    <!-- Include template-dashboard.inc.php-->
    <!--===========================================================================================-->
    <?php include_once './includes/template-dashboard.inc.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <!--===========================================================================================-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script> 
</body>
</html>