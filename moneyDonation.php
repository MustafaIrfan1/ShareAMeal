<?php

include 'scripts/dbconnect.php';
session_start();

?>

<?php

include "includes/header.php";
?>

<?php
include 'scripts/donationscript.php'
?>

<body id="page-top">

<!-- Navigation-->
<?php
if (isset($_SESSION['userSession']))
    include 'includes/navBar_Donation.php';
else
    include 'includes/navBar.php';
?>

<br><br><br>
<!--Login form-->

<section class="page-section" id="login">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Donate Money</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Login Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="control-group text-center">
                    <?php
                    if (isset($_POST['btn-donate-money'])) {
                        echo $msg;
                    }
                    ?>
                </div>

                <?php

                if (isset($_SESSION['userSession'])) {
                ?>

                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="control-group">
                        <div class="form-group  controls mb-0 pb-2">
                            <label>Amount</label><input class="form-control" id="moneyPortion" type="number"
                                                        name="moneyAmount"
                                                        placeholder="Amount Share" required oninvalid="this.setCustomValidity('Please Enter money amount')"
                                                        oninput="setCustomValidity('')"

                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group  controls mb-0 pb-2">
                            <label>Location</label><input class="form-control" id="moneyLocation"
                                                          type="text" placeholder="Your Location"
                                                          required name="moneyLocation"
                                                          oninvalid="this.setCustomValidity('Please Enter your location')"
                                                          oninput="setCustomValidity('')"

                        </div>
                    </div>

                    <br/>
                    <div class="form-group text-center">
                        <button class="btn btn-danger btn-xl" id="moneyButton" name="btn-donate-money">Give!!
                        </button>&nbsp;

                        <a href="foodDonation.php" class="btn btn-success btn-xl" id="foodButton" >Wanna Share Food?
                        </a>
                    </div>
                </form>
                    <?php
                }else{
                    header("refresh:0.00005;url=login.php");
                }?>
            </div>
        </div>
    </div>
</section>


<!-- Footer-->
<?php
include "includes/footer.php"
?>


<!-- Copyright Section-->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright © ShareAMeal 2020</small>
    </div>
</section>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
</div>


<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
