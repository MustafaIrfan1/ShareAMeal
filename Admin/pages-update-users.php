<?php

// Getting Id
$user_id = $_GET['update'];

// If update button is clicked ...
include 'scripts/users-scripts.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Share A Meal</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->

    <?php include 'includes/topbar.php'; ?>

    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <?php include 'includes/sidebar.php'; ?>

    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <?php

    //$db = mysqli_connect("localhost", "root", "", "shareameal");
    $result = mysqli_query($db, "SELECT * FROM users WHERE UserID = '$user_id'");
    $row = mysqli_fetch_array($result);

    //get all values
    $email = $row['Email'];
    $contact = $row['Contact'];
    $password = $row['Password'];

    $new_pass = 0;

    ?>


    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0 m-b-20">USERS</h4>
                    </div>
                    <?php
//                    include 'scripts/user-scripts.php';

                    if (isset($_POST['btn-update-user'])) {
                        ?>
                        <div style="text-align: center" class="center-page"> <?php echo $msg; ?></div>


                        <?php
                    }
                    ?>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="p-20 m-b-20">
                                <h4 class="header-title m-t-0">UPDATE USER</h4>
                                <p class="text-muted font-13 m-b-10">

                                </p>

                                <div class="m-b-20 ">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="user-name" class="col-sm-4 form-control-label">User
                                                Email<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                       id="user-name" name="email" value="<?php echo $email; ?>">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="user-des" class="col-sm-4 form-control-label">User
                                                Contact<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                       id="user-des"
                                                       name="contact" value="<?php echo $contact; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user-price" class="col-sm-4 form-control-label">User
                                                Password<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input id="user-price" type="text"
                                                       required
                                                       class="form-control" name="password" value="<?php
                                                echo $password; ?>">
                                            </div>
                                        </div>


                                        <br>

                                        <div class="form-group row">
                                            <div class="col-sm-8 offset-sm-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                        name="btn-update-user">
                                                    UPDATE
                                                </button>
                                                <a href="pages-view-users.php"
                                                        class="btn btn-default waves-effect m-l-5">
                                                    Cancel
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->

            <!-- Down Bar Start -->

            <?php include 'includes/downbar.php'; ?>

            <!-- Down Bar End -->

        </div> <!-- content -->

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>