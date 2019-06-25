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
    <title>Admin: Add User</title>
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
            <li class="breadcrumb-item">
                <a href="./display-user-table.php">Manage Users</a>
            </li>
            <li class="breadcrumb-item active">Add User</li>
        </ol>

        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Register an Account</div>
                <div class="card-body">
                    <form action="./includes/register.inc.php" method="POST"  name="registerForm" id ="registerForm" >
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">First name</label>
                                    <input class="form-control" name="user_first" id="user_first" type="text" 
                                           aria-describedby="nameHelp" placeholder="Enter first name" required>

                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputLastName">Last name</label>
                                    <input class="form-control" name="user_last" id="user_last" type="text" 
                                           aria-describedby="nameHelp" placeholder="Enter last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" name="user_email" id="user_email" type="email" 
                                   aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <br>User type:<br>  
                            <input type="radio" style="width:4%" name="user_type_id" value="1" required> Admin 
                            <input type="radio" style="width:4%" name="user_type_id" value="2"> Executive Manager 
                            <input type="radio" style="width:4%" name="user_type_id" value="3"> Account Manager 
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input class="form-control" name="user_username" id="user_username" type="username"
                                   placeholder="Username" required>
                        </div>     


                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" name="user_pwd" id="user_pwd" type="password"
                                           placeholder="Password"  onkeyup='check();' required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirm password</label>
                                    <input class="form-control" name="user_pwd_confirm" id="user_pwd_confirm"
                                           type="password"placeholder="Confirm password" onkeyup='check();' required>
                                    <span id='message'></span>

                                </div>
                            </div>
                        </div>
                        <button id="submitbutton" class="btn btn-primary btn-block" type="submit" disabled="disabled"
                                name="register" data-toggle="modal" data-target="#registerModal">Register</button>
                    </form>

                    <!-- Error: Create a User-->
                    <!--==============================================================================================-->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header alert-danger">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <div style="color:red;">Error: Create a User</div>
                                    </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Username or E-mail address already exists. 
                                </div>
                                <div class="modal-footer">  
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>       
                                </div>
                            </div>
                        </div>
                    </div>                       
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

    <?php
    if ($_SESSION['show_register_modal'] == true) {
        $_SESSION['show_register_modal'] = false;
    ?>     
    <script> $('#myModal').modal('show');</script>
    <?php
    }
    ?>
    <!--============================================================================================-->

    <!--========JavaScript function to check password matching?=========-->
    <script> 
        var check = function() {
            // var cansubmit = true;
            if (document.getElementById('user_pwd').value ==
                document.getElementById('user_pwd_confirm').value
                && document.getElementById('user_pwd').value.length != 0) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
                document.getElementById('submitbutton').disabled = false;
            } else if (document.getElementById('user_pwd').value !=
                       document.getElementById('user_pwd_confirm').value) {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
                document.getElementById('submitbutton').disabled = true;
            } else {
                document.getElementById('message').innerHTML = '';
            }
        }
    </script>

    <!--========JQuery function to disable spacebar=========-->
    <script>
        $(document).on('keydown', '#user_pwd, #user_pwd_confirm', function(e) {
            if (e.keyCode == 32) return false;
        });

        $(document).ready(function() {
            validate();
            $('input').on('keyup', validate);
        });      
    </script>

</body>
</html>