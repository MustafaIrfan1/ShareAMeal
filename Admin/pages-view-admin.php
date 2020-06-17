<?php
// include database connection
include 'scripts/dbconnect.php';

// If ADD button is clicked ...
if (isset($_POST['btn-add-admin'])) {

    // Get all values
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    if ($password == $cpassword) {
//        echo "Password Matched";


        $select = "SELECT * FROM admins WHERE Email='$email'";

        $execute = $db->query($select);

        $row_count = $execute->num_rows;



        if ($row_count == 0) {
            $query = "INSERT INTO admins (AdminName,Email,Password) 
                        VALUES ('$name','$email','". md5($password) ."_admin". "')";
            // execute query


            if ($db->query($query)) {
                $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Admin Successfully Created
                </div>";
                //header("refresh:3;url=index.php");
            } else {

                $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while creating
                </div>";
            }
        } else {

            $msg = "<div class='alert alert-danger'>
             <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Admin Already exists with same Email
             </div>";

        }

    } else {
//        echo "Password NotMatched";

        $msg = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Password Not Matched
        </div>";

    }

}

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

    <?php

    include 'includes/topbar.php';
    ?>

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
                        <h4 class="header-title m-t-0 m-b-20">Founders</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <?php
                    //$db = mysqli_connect("localhost", "root", "", "shareameal");
                    $execute = mysqli_query($db, "SELECT * FROM admins");

                    while ($row = mysqli_fetch_array($execute)) {
                        ?>

                        <div class="col-md-4">
                            <div class="text-center card-box">
                                <div class="member-card mt-4">
                                    <span class="user-badge bg-warning">Admin</span>
                                    <div class="thumb-xl member-thumb m-b-10 center-page">
                                        <img src="images/profile-picture.jpg"
                                             class="rounded-circle img-thumbnail"
                                             alt="profile-image">
                                    </div>

                                    <div class="">
                                        <h5 class="m-b-5 mt-2"><?php echo $row['AdminName']?></h5>
                                        <p class="text-muted">@Administrator <span> | </span> <span> <a
                                                        href="#"
                                                        class="text-pink"><?php echo $row['Email'] ?></a> </span>
                                        </p>
                                    </div>

                                    <p class="text-muted font-13">
                                        Hi I'm Admin Text, has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type.
                                    </p>

                                    <ul class="social-links list-inline m-t-30">
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                               href="#"
                                               data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                               href="#"
                                               data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                               href="#"
                                               data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                        </div>
                        <!-- end col -->

                        <?php
                    }
                    ?>
                </div>
                <!-- end row -->

                <?php

                $email = $_SESSION['adminsession'];
                if ($email == 'admin@shareameal.com') {

                    ?>

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <?php
                            if (isset($_POST['btn-add-admin'])) {
                                echo $msg;
                            }
                            ?>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary btn-rounded btn-lg m-b-30 center-page" data-toggle="modal"
                                    data-target="#add-admin">Add Admin
                            </button>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                    <?php
                }
                ?>

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

<!-- sample modal content -->
<div id="add-admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-contactLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="add-contactLabel">Add Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="fname">Name</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter name" name="fname"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="inputEmai1">Email Address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="Inputpassword">Password</label>
                        <input type="password" class="form-control" id="Inputpassword" placeholder="Enter Password"
                               name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="inputconfirmpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="inputconfirmpassword"
                               placeholder="Enter Confirm Password" name="cpassword" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default " data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary " name="btn-add-admin" value="Add">
                    </div>

                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


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