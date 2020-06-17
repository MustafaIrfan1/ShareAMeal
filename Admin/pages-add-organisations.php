<?php
// include database connection
include 'scripts/dbconnect.php';

//function generates_id(&$str)
//{
//    $str++;
//    $str1 = 'YAB-organisation-0';
//    $str = $str1 . $str;
//}


// If ADD button is clicked ...

if (isset($_POST['btn-add'])) {

//    if (!file_exists('../uploads')) {
//        mkdir('../uploads', 0777, true);
//    }


    // Get all values
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];



    $select = "SELECT * FROM organisations WHERE organisationName='$name'";
    $execute = $db->query($select);
    $row_count = $execute->num_rows;


    if ($row_count == 0) {
        $query = "INSERT INTO organisations(organisationName,Address,Contact)
                        VALUES ('$name','$address','$contact')";
        // execute query


        if ($db->query($query)) {
            $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Organisation Successfully Added
                </div>";
            header("location: pages-view-organisations.php");
        } else {

            $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Adding theorganisation
                </div>";

        }
    } else {

        $msg = "<div class='alert alert-danger'>
             <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry!organisation with same email Already exists
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
                        <h4 class="header-title m-t-0 m-b-20">ORGANISATIONS</h4>
                    </div>
                    <?php
                    if (isset($_POST['btn-add'])){
                        ?>
                    <div style="text-align: center" class="center-page"> <?php echo $msg; ?></div>


                    <?php
                    }
                    ?>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="p-20 m-b-20">
                                <h4 class="header-title m-t-0">ADD ORGANISATION</h4>
                                <p class="text-muted font-13 m-b-10">

                                </p>

                                <div class="m-b-20 ">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="organisation-name" class="col-sm-4 form-control-label">Organisation
                                                Name<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                       id="organisation-name" placeholder="Enter Organisation Name" name="name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="organisation-name" class="col-sm-4 form-control-label">Organisation
                                                Address<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                       id="organisation-email" placeholder="Enter Organisation Address" name="address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="organisation-des" class="col-sm-4 form-control-label">Organisation
                                                Contact<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                          id="organisation-des" placeholder="Enter Organisation Contact" name="contact">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="form-group row">
                                            <div class="col-sm-8 offset-sm-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="btn-add">
                                                    ADD
                                                </button>
                                                <a href="pages-view-organisations.php"
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