

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


<?php

$myUser_id = $_GET['UserID'];


//echo $myUser_id;
?>


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


                    <a href="pages-view-users.php" class="btn btn-default">Back</a>
                <br>
                <br>
                <?php

                //$db2 = mysqli_connect("localhost", "root", "", "shareameal");
                $result2 = mysqli_query($db, "SELECT * FROM users WHERE UserID='$myUser_id'");
                $row2 = mysqli_fetch_array($result2);

                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0 m-b-20">User <span style="color: #1abc9c"><?php echo $row2['Email'] ?></span> Donations</h4>
                    </div>

                    <div class="col-lg-12">
                        <div class="m-b-20">
                            <h5 class="font-14"><b>Food Donation Table</b></h5>
                            <table class="table table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">DonationID</th>
                                    <th class="text-center">Portion</th>
                                    <th class="text-center">Location</th>
                                    <th class="text-center">Organisation</th>
                                    <th class="text-center">Rider</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //$db = mysqli_connect("localhost", "root", "", "shareameal");

                                $result = mysqli_query($db, "SELECT * FROM foods WHERE UserID='$myUser_id'");

                                while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                    <tr>
                                        <td scope="row" class="text-center"><?php echo $row['FoodID'] ?></td>
                                        <td class="text-center"><?php echo $row['foodPortion'] ?></td>
                                        <td class="text-center"><?php echo $row['Location'] ?></td>
                                        <td class="text-center"><?php

                                            $organisation = $row['OrganisationID'];

                                            //$db2 = mysqli_connect("localhost", "root", "", "shareameal");
                                            $result2 = mysqli_query($db, "select * from organisations WHERE OrganisationID = '$organisation'");
                                            $row2 = mysqli_fetch_array($result2);
                                            $orgName = $row2['organisationName'];

                                            echo $orgName ?>

                                        </td>
                                        <td class="text-center"><?php


                                            $rider = $row['RiderID'];

                                            if ($rider == NULL) {
                                                ?>
                                                <b style="color: red">Not Assigned</b>
                                            <?php
                                            } else {
                                                //$db4 = mysqli_connect("localhost", "root", "", "shareameal");
                                                $result4 = mysqli_query($db, "select * from riders WHERE RiderID = '$rider'");
                                                $row4 = mysqli_fetch_array($result4);
                                                $riderName = $row4['RiderName'];

                                                echo $riderName; } ?>

                                        </td>

                                    </tr>
                                    <?php
                                }

                                ?>
                                </tbody>
                            </table>
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