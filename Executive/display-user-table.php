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
    <title>Manage Users</title>
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
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Manage Users</li>
            </ol>

            <!-- Data Tables -->
            <div class="card mb-3">
                <div class="card-header">

                    <!--Add an User-->
                    <!--===================================================================================-->
                        <button type="reset" class="btn btn-primary pull-right" 
                               onclick="window.location.href='./register.php'" ><i class="fa fa-user-plus"></i> Add New User
                        </button>
                    <!--===================================================================================-->
                    <h4><i class="fa fa-table"></i> User Table</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>
                                <!--==================================================================-->
                                <tr>
                                    <th class='text-center'>User ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>E-mail</th>
                                    <th>Role</th>
                                    <th class='text-center'>Update</th> 
                                    <th class='text-center'>Delete</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <!--==================================================================-->
                                <tr>
                                    <th class='text-center'>User ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>E-mail</th>
                                    <th>Role</th>
                                    <th class='text-center'>Update</th> 
                                    <th class='text-center'>Delete</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <!--==================================================================--> 
                                <?php include_once './includes/display-user-table.inc.php'; ?>
                                <!--==================================================================--> 
                            </tbody>
                        </table> <!--End of Table-->
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated
                    <?php echo $_SESSION['latest_user_upated_on']; ?>
                </div>
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



    <!--===================================================================================================================-->
    <!-- Update User Modal-->
    <!--===================================================================================================================-->
    <div class="modal fade" id="updateUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="./includes/update-user.inc.php" method="POST" name="updateForm" id ="updateForm" >
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">First name</label>
                                    <input class="form-control" name="user_first" id="user_first" type="text" 
                                           aria-describedby="nameHelp" placeholder="Enter first name" 
                                           value="<?php echo $_POST['updateFirstName']; ?>" required>

                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputLastName">Last name</label>
                                    <input class="form-control" name="user_last" id="user_last" type="text" 
                                           aria-describedby="nameHelp" placeholder="Enter last name" 
                                           value="<?php echo $_POST['updateLastName']; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" name="user_email" id="user_email" type="email" 
                                   aria-describedby="emailHelp" placeholder="Enter email"
                                   value="<?php echo $_POST['updateEmail']; ?>">
                        </div>

                        <?php 
                        if($_POST['updateUserTypeID'] == 1){
                        ?>    
                            <div class="form-group">
                                <br>User type:<br>  
                                <input type="radio" style="width:4%" name="user_type_id" value="1" required checked="checked"> Admin 
                                <input type="radio" style="width:4%" name="user_type_id" value="2"> Executive Manager 
                                <input type="radio" style="width:4%" name="user_type_id" value="3"> Account Manager 
                            </div>
                        <?php   
                         }
                         ?>
                        
                        <?php 
                        if($_POST['updateUserTypeID'] == 2){
                        ?>    
                            <div class="form-group">
                                <br>User type:<br>  
                                <input type="radio" style="width:4%" name="user_type_id" value="1" required> Admin 
                                <input type="radio" style="width:4%" name="user_type_id" value="2" checked="checked"> Executive Manager 
                                <input type="radio" style="width:4%" name="user_type_id" value="3"> Account Manager 
                            </div>
                        <?php   
                         }
                         ?>
                        
                        <?php 
                        if($_POST['updateUserTypeID'] == 3){
                        ?>    
                            <div class="form-group">
                                <br>User type:<br>  
                                <input type="radio" style="width:4%" name="user_type_id" value="1" required> Admin 
                                <input type="radio" style="width:4%" name="user_type_id" value="2"> Executive Manager 
                                <input type="radio" style="width:4%" name="user_type_id" value="3" checked="checked"> Account Manager 
                            </div>
                        <?php   
                         }
                         ?>

                        <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input class="form-control" name="user_username" id="user_username" type="username"
                                   placeholder="Username" value="<?php echo $_POST['updateUsername']; ?>" required>
                        </div>     

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" name="user_pwd" id="user_pwd" type="password"
                                           placeholder="Password" onkeyup='check();'>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirm password</label>
                                    <input class="form-control" name="user_pwd_confirm" id="user_pwd_confirm"
                                           type="password"placeholder="Confirm password" onkeyup='check();'>
                                    <span id='message'></span>
                                </div>
                            </div>
                        </div>
                        
                        <input type='hidden' name='userID' value="<?php echo $_POST['userID']; ?>">
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <button type="submit" class="btn btn-primary" id="updateUserButton"
                                    name="updateUserButton" data-toggle="modal" data-target="#updateModal">Update user</button>
                        </div> <!--End of <div class="modal-footer">-->
                         
                    </form> <!-- End of <form action="./includes/update-user.inc.php">-->

                </div> <!--End of <div class="modal-body">-->
            </div> <!--End of <div class="modal-content">-->
        </div> <!--End of <div class="modal-dialog" role="document">-->
    </div> <!--End of <div id="updateUserModal">-->



    <!--===================================================================================================================-->
    <!--Error: Update to an existing username/email Modal-->
    <!--===================================================================================================================-->
    <div class="modal fade" id="updateModalExistUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert-danger">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <div style="color:red;">Error: Fail to update the user ID '<?php echo $_SESSION['fail_user_id'];?>'</div>
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                
                <?php
                    if ( ($_SESSION['isUsernameExisted'] == true) && ($_SESSION['isEmailExisted'] == true) ){
                ?>
                    <div class="modal-body">
                        Username "<?php echo $_SESSION['existingUsername']; ?>" 
                        and E-mail "<?php echo $_SESSION['existingEmail']; ?>" already exists. 
                    </div>
                
                <?php   
                    }
                    elseif($_SESSION['isUsernameExisted'] == true){
                ?>
                    <div class="modal-body">
                        Username "<?php echo $_SESSION['existingUsername']; ?>" already exists. 
                    </div>
                <?php   
                    }
                   elseif($_SESSION['isEmailExisted'] == true){
                ?>
                    <div class="modal-body">
                        E-mail "<?php echo $_SESSION['existingEmail']; ?>" already exists. 
                    </div>
                <?php   
                    }
                ?>
                
                <div class="modal-footer">  
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>       
                </div>
            </div>
        </div>
    </div>       
    
    
    <!--===================================================================================================================-->
    <!--Delete User Modal-->
    <!--===================================================================================================================-->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert-danger">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <div style="color:red;">Delete "<?php echo $_POST['delete_user_username']; ?>" account</div>
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to delete this user ID?</div>
                <div class="modal-footer">  
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="./includes/delete-user.inc.php" method="POST"> 
                        <input type='hidden' name='delete_user_username' value="<?php echo $_POST['delete_user_username']; ?>">
                        <input type='hidden' name='delete_user_id' value="<?php echo $_POST['delete_user_id']; ?>">
                        <button class="btn btn-danger" type="submit" name="delete">Delete</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!--====================================================================-->
    <!--Show the modals conditions-->
    <!--====================================================================-->
     <?php
    if(isset($_POST['updateUsername'])) {
    ?>
    <script> $('#updateUserModal').modal('show');</script>
    <?php  
    }
    ?>
    <!--====================================================================-->
    <?php
    if ($_SESSION['show_update_modal'] == true) {
        $_SESSION['show_update_modal'] = false;
    ?>     
    <script> $('#updateModalExistUser').modal('show');</script>
    <?php
    }
    ?>  
    <!--====================================================================-->
    <?php
    if(isset($_POST['delete_user_id'])) {
    ?>
    <script> $('#deleteUserModal').modal('show');</script>
    <?php  
    }
    ?>
    <!--====================================================================-->

   

    <!--========JavaScript function to check password matching?=========-->
    <script> 
        var check = function() {
            // var cansubmit = true;
            if (document.getElementById('user_pwd').value ==
                document.getElementById('user_pwd_confirm').value
                && document.getElementById('user_pwd').value.length != 0) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
                document.getElementById('updateUserButton').disabled = false;
            } else if (document.getElementById('user_pwd').value !=
                       document.getElementById('user_pwd_confirm').value) {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
                document.getElementById('updateUserButton').disabled = true;
            } else {
                document.getElementById('message').innerHTML = '';
                document.getElementById('updateUserButton').disabled = false;
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