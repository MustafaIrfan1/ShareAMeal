<?php
session_start();
include 'scripts/dbconnect.php';

if (isset($_SESSION['adminsession'])) {
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
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="header-title m-t-0 m-b-20 text-center">Welcome to Admin Panel</h4>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box widget-inline">
                                <div class="row">
                                    <div class="col-lg-2 col-sm-6">
                                        <?php
                                        //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                        $result = mysqli_query($db, "SELECT * FROM admins");
                                        $num = 0;

                                        while ($row = mysqli_fetch_array($result)) {
                                            $num++;
                                        }
                                        ?>
                                        <div class="widget-inline-box text-center">
                                            <h3 class="m-t-10"><i class="text-primary mdi mdi-account"></i>
                                                <b><?php echo $num; ?></b>
                                            </h3>
                                            <p class="text-muted">Total Admins</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <?php
                                        //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                        $result = mysqli_query($db, "SELECT * FROM riders");
                                        $num = 0;

                                        while ($row = mysqli_fetch_array($result)) {
                                            $num++;
                                        }
                                        ?>
                                        <div class="widget-inline-box text-center">
                                            <h3 class="m-t-10"><i class="text-custom mdi mdi-shopping"></i>
                                                <b><?php echo $num; ?></b></h3>
                                            <p class="text-muted">Total Riders</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <?php
                                        //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                        $result = mysqli_query($db, "SELECT * FROM vehicles");
                                        $num = 0;

                                        while ($row = mysqli_fetch_array($result)) {
                                            $num++;
                                        }
                                        ?>
                                        <div class="widget-inline-box text-center">
                                            <h3 class="m-t-10"><i class="text-custom mdi mdi-car"></i>
                                                <b><?php echo $num; ?></b></h3>
                                            <p class="text-muted">Total Vehicles</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <?php
                                        //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                        $result = mysqli_query($db, "SELECT * FROM users");
                                        $num = 0;

                                        while ($row = mysqli_fetch_array($result)) {
                                            $num++;
                                        }
                                        ?>
                                        <div class="widget-inline-box text-center">
                                            <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i>
                                                <b><?php echo $num; ?></b></h3>
                                            <p class="text-muted">Total Users</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <div class="widget-inline-box text-center b-0">
                                            <?php
                                            //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                            $result = mysqli_query($db, "SELECT * FROM foods");
                                            $num = 0;

                                            while ($row = mysqli_fetch_array($result)) {
                                                $num++;
                                            }
                                            ?>
                                            <h3 class="m-t-10"><i class="text-danger mdi mdi-food"></i>
                                                <b><?php echo $num; ?></b>
                                            </h3>
                                            <p class="text-muted">Total Foods Share</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <div class="widget-inline-box text-center b-0">
                                            <?php
                                            //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                            $result = mysqli_query($db, "SELECT * FROM moneys");
                                            $num = 0;

                                            while ($row = mysqli_fetch_array($result)) {
                                                $num++;
                                            }
                                            ?>
                                            <h3 class="m-t-10"><i class="text-danger mdi mdi-cash"></i>
                                                <b><?php echo $num; ?></b>
                                            </h3>
                                            <p class="text-muted">Total Money Donates</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row -->


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h6 class="m-t-0">Admins</h6>
                                <div class="table-responsive">

                                    <!-- table starts -->

                                    <table class="table table-hover mails m-0 table table-actions-bar">
                                        <thead>
                                        <tr>
                                            <th style="min-width: 95px;">
                                                Profile
                                            </th>
                                            <th>#ID</th>
                                            <th>Name</th>
                                            <th>Email</th>

                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php
                                        //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                        $execute = mysqli_query($db, "SELECT * FROM admins");

                                        while ($row = mysqli_fetch_array($execute)) {

                                            ?>

                                            <tr>
                                                <td>
                                                    <!--                                            <div class="checkbox checkbox-primary m-r-15">-->
                                                    <!--                                                <input id="checkbox2" type="checkbox">-->
                                                    <!--                                                <label for="checkbox2"></label>-->
                                                    <!--                                            </div>-->

                                                    <img src="images/profile-picture.jpg" alt="contact-img"
                                                         title="contact-img" class="rounded-circle thumb-sm"/>
                                                </td>

                                                <td>
                                                    <?php echo $row['AdminID'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $row['AdminName'] ?>
                                                </td>

                                                <td>
                                                    <a href="#" class="text-muted"><?php echo $row['Email'] ?></a>
                                                </td>

                                                <!--                                            <td>-->
                                                <!--                                                <b><a href="" class="text-dark"><b>356</b></a> </b>-->
                                                <!--                                            </td>-->


                                            </tr>

                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>

                                    <!-- table ends -->

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


    <?php
} else {

    header("Location: pages-login.php");
}

?>
