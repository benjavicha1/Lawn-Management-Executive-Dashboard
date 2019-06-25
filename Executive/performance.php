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
    <title>Company Performance</title>
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
    <!-- Google icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--===============================================================================================-->

    <!-- Include php-->
    <!--===========================================================================================-->
    <?php include_once './includes/Q2-Total-Revenue-Year.inc.php'; ?>
    <?php include_once './includes/Q3-Total-Revenue-Branch.inc.php'; ?>
    <?php include_once './includes/Q4-Contribution-Margin.inc.php'; ?>
    
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
                <li class="breadcrumb-item active">Performance</li>
            </ol>
            <!--=======================================================================================-->            

            <!-- Data Tables -->
            <div class="card mb-3">
                <div class="card-header">
                    <h4><i class="fa fa-dollar"></i> Company Performance</h4>
                </div>

                <div class="card-body my-auto">       
                    <!--==================================================================--> 
                    <?php include_once './includes/Q1-Profit-Margin.inc.php'; ?>
                    <!--==================================================================--> 
                    <hr>   
                    <div style="font-family:FontAwesome">
                        <div class="row"  id="dashboard_div_company">
                            <div class="my-auto">
                                <div id="categoryFilter_control_div_company" style="padding-left: 20px; padding-top: 10px "></div>
                                <div id="chart_div_company" style="padding-left: 0px; padding-top: 30px"></div>
                            </div>
                            <div class="my-auto">
                                <div id="categoryPicker_div_company" style="padding-left: 10px; padding-top: 10px"></div>
                                <div id="table_div_company" style="padding-left: 10px; padding-top: 30px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                 *Table displays the total revenue and expense of each year calculated from every contracts and all properties.
                </div>
            </div> <!--End of <div class="card mb-3">-->
            <!--=======================================================================================-->
            
            <!--=======================================================================================-->
            <!-- Data Tables -->
            <div class="card mb-3">
                <div class="card-header">
                    <h4> <i class="fa fa-bar-chart"></i> Total Revenue -vs- Expense by Branch and Year</h4>
                </div>
                <div class="card-body my-auto" style="font-family:FontAwesome">
                    <div class="row"  id="dashboard_div">
                        <div class="my-auto">
                            <div id="categoryFilter_control_div" style="padding-left: 20px" ></div>
                            <div id="chart_div" style="padding-left: 0px"></div>
                        </div>
                        <div class="my-auto">
                            <div id="categoryPicker_div" style="padding-left: 5px"></div>
                            <div id="table_div" style="padding-left: 5px; padding-top: 30px"></div>
                        </div>
                    </div>
                </div>

                <div class="card-footer small text-muted">  
                    *Table displays the total revenue and expense of each year calculated from every contracts and all properties.   
                </div>
            </div> <!--End of <div class="card mb-3">-->
            <!--=======================================================================================-->

            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="card mb-3">
                        <div class="card-header"><h4><i class="fa fa-fw fa-line-chart" aria-hidden="true"></i> Contribution Margin</h4></div>

                        <div class="card-body my-auto" style="font-family:FontAwesome">
                            <div id="dashboard_div">
                                <div class="col-sm-8  my-auto">
                                    <div id="linechart_material" style="width: 900px; height: 500px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer small text-muted"><br></div>
                    </div> <!--End of <div class="card mb-3">-->
                </div>
            </div>

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