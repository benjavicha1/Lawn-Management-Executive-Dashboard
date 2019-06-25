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
    <title>Complete Orders</title>
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
    <!-- Include exportHTMLTableToXLS.inc.php-->
    <?php include_once './includes/exportHTMLTableToXLS.inc.php'; ?>
    <!--===============================================================================================-->
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
                <li class="breadcrumb-item">
                    <a href="./purchase-orders.php">Purchase Orders</a>
                </li>
                <li class="breadcrumb-item active">Complete Orders</li>
            </ol>

            <!-- Data Tables -->
            <div class="card mb-3">
                <div class="card-header">
                    <!--Export to CSV Files-->
                    <!--===================================================================================-->
                    <form>
                        <button class="btn btn-primary pull-right" id="btnExport"
                                onclick="javascript:xport.toCSV('dataTable','complete-order-table');"> Export to CSV</button>
                    </form>
                    <!--===================================================================================-->      
                    <h4><i class="fa fa-table"></i> Complete Order Table</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>
                                <!--==================================================================-->
                                <tr>
                                    <th class='text-center'>PO ID</th>
                                    <th class='text-center'>Vendor Name</th>
                                    <th>Purchase Status</th>
                                    <th>Branch Name</th>
                                    <th>Created by User Code</th>
                                    <th>Submitted on</th>
                                    <th>Estimated Delivery</th>
                                    <th>Full Allocated?</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <!--==================================================================-->
                                <tr>
                                    <th class='text-center'>PO ID</th>
                                    <th class='text-center'>Vendor Name</th>
                                    <th>Purchase Status</th>
                                    <th>Branch Name</th>
                                    <th>Created by User Code</th>
                                    <th>Submitted on</th>
                                    <th>Estimated Delivery</th>
                                    <th>Full Allocated?</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <!--==================================================================--> 
                                <?php include_once './includes/complete-orders.inc.php'; ?>
                                <!--==================================================================--> 
                            </tbody>
                        </table> <!--End of Table-->
                    </div>
                </div>
                <div class="card-footer small text-muted"><br></div>
            </div>
        </div> <!--End of <div class="container-fluid">-->
    </div> <!--End of <div class="content-wrapper">-->

    <!--===========================================================================================-->
    <!-- Include template-dashboard.inc.php-->
    <!--===========================================================================================-->
    <?php include_once './includes/template-dashboard.inc.php'; ?>

    <!--===========================================================================================-->
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