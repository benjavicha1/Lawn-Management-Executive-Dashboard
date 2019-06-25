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
    <title>Leads</title>
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

            <!--=======================================================================================-->
            <!-- Include charts-->
            <?php include_once './includes/lead-charts.inc.php'; ?>
            <!--=======================================================================================-->

            <!-- Breadcrumbs-->
            <!--=======================================================================================-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Successful Leads</li>
                
            </ol>


            <!-- Accuracy of All Branches Bar Chart Card-->
            <!--====================================================================================-->
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-bar-chart"></i> Leads by Branch
                                        <!--Add an User-->
                <!--===================================================================================-->
                <button type="reset" class="btn btn-primary pull-right" 
                        onclick="window.location.href='./lead-marketing-table.php'" ><i class="fa fa-table"></i> Marketing Table
                </button>
                <!--===================================================================================-->
                        </h4></div>
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8 my-auto">
                                    <div id="by-branch-bar-chart" style="height: 400px; width: 150%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted"><br></div>
                    </div>
                </div> <!--End of <div class="col-lg-12">-->
                 <div class="col-lg-6 col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-bar-chart"></i> Leads by Industry</h4></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8 my-auto">
                                    <div id="by-industry-bar-chart" style="height: 400px; width: 150%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted"><br></div>
                     </div>
                </div> <!--End of <div class="col-lg-12">-->
            </div> <!--End of the row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-bar-chart"></i> Leads by Year</h4></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8 my-auto">
                                    <div id="by-year-bar-chart" style="height: 400px; width: 150%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted"><br></div>
                    </div>
                </div> <!--End of <div class="col-lg-12">-->
            </div> <!--End of the row-->

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