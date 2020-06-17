
<?php
// include database connection
include 'scripts/dbconnect.php';
session_start();
//function generates_id(&$str)
//{
//    $str++;
//    $str1 = 'YAB-organisation-0';
//    $str = $str1 . $str;
//}
if (isset($_SESSION['adminsession'])) {

    $adminEmail = $_SESSION['adminsession'];

}

// Getting Id
$mail_to = $_GET['MailTo'];

//echo $mail_to;

//echo $adminEmail;
// If ADD button is clicked ...



if (isset($_POST['btn-reply-message'])) {

//    if (!file_exists('../uploads')) {
//        mkdir('../uploads', 0777, true);
//    }

    // Get all values
    //$mailFrom = $_POST['mailFrom'];
    $mailFrom = "k163906@nu.edu.pk";
    //$mailTo = $_POST['mailTo'];
    $mailSubject = $_POST['mailSubject'];
    $mailReply = $_POST['mailReply'];

    ini_set('SMTP', "smtp.gmail.com");
    ini_set('smtp_port', "25");
    ini_set('sendmail_from', "$mailFrom");



    // Recipient
    $to = $mail_to;

    //Subject
    $subject = $mailSubject;

    //Message
    $message = "Share A Meal Team\r\n";
    $message .= "Hi ".$to."\r\n";
    $message .= $mailReply;


    //Headers
    $headers = "From: Share A Meal <".$mailFrom.">\r\n";
    $headers .= "Reply-To: ".$mailFrom."\r\n";
    $headers .= "Content-type: text/html\r\n";

    if(mail($to, $subject,$message)){

        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Email Sent Successfully!
                </div>";
        header("refresh:2;url=pages-view-messages.php");
    }else{
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while Connecting to Server!
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
                        <h4 class="header-title m-t-0 m-b-20">Messages</h4>
                    </div>
                    <?php
                    if (isset($_POST['btn-reply-message'])){
                        ?>
                    <div style="text-align: center" class="center-page"> <?php echo $msg; ?></div>


                    <?php
                    }
                    ?>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="p-20 m-b-20">
                                <h4 class="header-title m-t-0">Reply Message</h4>
                                <p class="text-muted font-13 m-b-10">

                                </p>

                                <div class="m-b-20 ">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="organisation-name" class="col-sm-4 form-control-label">From
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                       id="organisation-name" value="<?php echo $adminEmail; ?>" name="mailFrom">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="organisation-name" class="col-sm-4 form-control-label">To
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                       id="organisation-email"  value="<?php echo $mail_to; ?>" name="mailTo" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="organisation-name" class="col-sm-4 form-control-label">Subject
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" required class="form-control"
                                                       id="organisation-name" placeholder="Enter Subject" name="mailSubject">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="organisation-des" class="col-sm-4 form-control-label">Reply
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <textarea type="text" required class="form-control"
                                                          id="organisation-des" placeholder="Enter your reply" name="mailReply"></textarea>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="form-group row">
                                            <div class="col-sm-8 offset-sm-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="btn-reply-message">
                                                    Reply
                                                </button>
                                                <a href="pages-view-messages.php"
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