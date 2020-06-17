<?php
// include database connection

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
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0 m-b-20">vehicles</h4>
                    </div>

                    <div class="col-lg-12">
                        <div class="m-b-20">
                            <h5 class="font-14"><b>vehicle Table</b></h5>
                            <table class="table table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">EDIT</th>
                                    <th class="text-center">REMOVE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                $result = mysqli_query($db, "SELECT * FROM vehicles");

                                while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo $row['VehicleID'] ?></th>
                                        <td class="text-center"><?php echo $row['VehicleType'] ?></td>

                                        <td class="text-center">
                                            <form action="pages-update-vehicles.php?update=<?php echo $row['VehicleID']; ?>"
                                                  method="post" enctype="multipart/form-data">
                                                <button type="submit" class="btn btn-custom btn-rounded"
                                                        name="btn-update">Update
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="scripts/vehicles-scripts.php?delete=<?php echo $row['VehicleID']; ?>"
                                                  method="post" enctype="multipart/form-data">
                                                <button type="submit" class="btn btn-danger btn-rounded"
                                                        name="btn-delete">Delete
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                    <?php
                                }

                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a href="pages-add-vehicles.php" class="btn btn-primary"
                                    >Add
                            </a>
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