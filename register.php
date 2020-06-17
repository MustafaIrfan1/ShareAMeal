<?php
include 'scripts/registerscript.php';
?>


<?php

include "includes/header.php";
?>
<body id="page-top">

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Share A Meal</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<br><br><br>
<!--Register form-->
<section class="page-section" id="register">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Register</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form id="registerForm" action="" method="post" enctype="multipart/form-data">
                    <div class="control-group text-center">
                        <?php
                        if (isset($_POST['btn-register'])) {
                            echo $msg;
                        }
                        ?>
                    </div>

                    <div class="control-group">
                        <div class="form-group  controls mb-0 pb-2">
                            <label>Email Address</label><input class="form-control" id="email" type="email" name="email"
                                                               placeholder="Email Address" required oninvalid="this.setCustomValidity('Please Enter valid email')"
                                                               oninput="setCustomValidity('')"
                                                               data-validation-required-message="Please enter your email address."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls mb-0 pb-2">
                            <label>Phone Number</label><input class="form-control" id="phone" type="tel" name="phone"
                                                              placeholder="Phone Number" required oninvalid="this.setCustomValidity('Please Enter Contact Number')"
                                                              oninput="setCustomValidity('')"
                                                              data-validation-required-message="Please enter your phone number."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group  controls mb-0 pb-2">
                            <label>Password</label><input class="form-control" id="name" type="password" placeholder="Password" name="password"
                                                          required
                                                          pattern=".{8,}"
                                                          title="8 characters minimum"
                                                          oninvalid="this.setCustomValidity('Please Enter 8 length Password')"
                                                          oninput="setCustomValidity('')"
                                                          data-validation-required-message="Please enter your password."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br/>
                    <div id="success"></div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-xl" id="registerButton" name="btn-register">Register</button>&nbsp;
                        <a class="btn btn-primary btn-xl" href="login.php" id="wantLoginButton" type="submit">Already have account? Login</a>
                    </div>
                </form>
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

<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
