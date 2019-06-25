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
    <title>Expenses</title>
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

    <!--===============================================================================================-->
    <!-- Include charts-->
    <?php include_once './includes/expense-chart-row1.inc.php'; ?>
    <!--===============================================================================================-->
    <!-- Include charts-->
    <?php include_once './includes/expense-chart-row2.inc.php'; ?>
    <!--===============================================================================================-->
     <?php include_once './includes/expense-accuracy-all-branch.inc.php'; ?>
   
    
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <!--=======================================================================================-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Expenses</li>
            </ol>

            <!--  Pie Chart Card-->
            <!--===================================================================================-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-pie-chart"></i> Actual Total Costs</h4></div>
                        <div class="card-body">
                            <div id="actual-expense-pie-chart" style="height: 300px; width: 100%;"><br></div>
                        </div>
                        <div class="card-footer small text-muted"><br></div>
                    </div>
                </div> <!--End of <div class="col-lg-6">-->

                <!--  Pie Chart Card-->
                <!--===================================================================================-->
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-pie-chart"></i> Estimated Total Costs</h4></div>
                        <div class="card-body">
                            <div id="estimated-expense-pie-chart" style="height: 300px; width: 100%;"><br></div>
                        </div>
                        <div class="card-footer small text-muted"><br></div>
                    </div>
                </div> <!--End of <div class="col-lg-6">-->
            </div> <!--End of <div class="row">-->

            <!-- Accuracy of All Branches Bar Chart Card-->
            <!--====================================================================================-->
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-bar-chart"></i> Accuracy of All Branches %</h4></div>
                        <div class="card-body">
                            
                             <div id="columnchart_values" style="height: 500px;"></div>
                            
                        </div>
                        <div class="card-footer small text-muted"><br></div>
                    </div>
                </div> <!--End of <div class="col-lg-6">-->

                <!--  Pie Chart Card-->
                <!--===================================================================================-->
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-bar-chart"></i> Accuracy by Property %</h4></div>
                        <div class="card-body">

                            <div id="categoryPicker_div" style="padding-left: 0" ></div>
                            <div id="chart_div" style="height: 470px;"></div>

                        </div>
                        <div class="card-footer small text-muted"><br></div>
                    </div>
                </div> <!--End of <div class="col-lg-6">-->
                
                
            </div> <!--End of <div class="row">-->
            
            
        </div> <!--<div class="container-fluid">-->
    </div>     <!--End of <div class="content-wrapper">-->

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