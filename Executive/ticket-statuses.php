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
    <title>Ticket</title>
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
</head>    

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <!--=======================================================================================-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Ticket Statuses</li>
            </ol>
            
            <div class="container">
                <div class="card mx-auto mt-5">
                    <div class="card-header"><h4><i class="fa fa-fw fa-exclamation-triangle"></i> Ticket Statuses</h4></div>
                    <div class="card-body">
                        <!-- Icon Cards (4 cards on the top of the page)-->
                        <!--=======================================================================================-->
                        <div class="row">
                            
                            <div class="col-xl-4 col-sm-6 mb-3">
                                <div class="card text-white bg-success o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-thumbs-o-up"></i>
                                        </div>
                                        <div class="mr-5"><?php echo number_format($_SESSION['billed_ticket']);?> Billed Tickets!</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" 
                                       href="./billed-tickets.php">
                                        <span class="float-left">View Table</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 mb-3">
                                <div class="card text-white bg-info o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-check"></i>
                                        </div>
                                        <div class="mr-5"><?php echo number_format($_SESSION['approved_ticket']);?> Approved Tickets!</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" 
                                       href="./approved-tickets.php">
                                        <span class="float-left">View Table</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-sm-6 mb-3">
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

                        </div> <!--End of <div class="row">-->

                        <!--========================================================================-->
                        <?php include_once './includes/ticket-statuses.inc.php'; ?>
                        <!--========================================================================-->
                        <br><br>
                        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
            </div> <!--End of <div class="container">-->         
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