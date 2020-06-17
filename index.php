<?php

include 'scripts/dbconnect.php';
session_start();

?>


<?php

include "includes/header.php";
?>


<body id="page-top">
<!-- Navigation-->
<?php
if (isset($_SESSION['userSession']))
    include 'includes/navBar_afterLogin.php';
else
    include 'includes/navBar.php';
?>


<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="assets/img/images/avataaars.svg" alt=""/>
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">SHARE MORE, WASTE LESS!</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">An application that helps reduce the wastage of excess
            food alongside helping feed the hungry!</p>
    </div>
</header>

<!-- Donate Section-->

<?php
include "donate.php"
?>

<!-- About Section-->
<?php
include "about.php"
?>

<!-- Team Section-->
<?php
include "team.php"
?>

<!-- Contact Section-->
<?php
include "contact.php"
?>

<!-- Footer-->
<?php
include "includes/footer.php"
?>


<!-- Copyright Section-->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright © Your Website 2020</small>
    </div>
</section>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
</div>


<!-- Portfolio Modals--><!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
     aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">


                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Share Food</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>


                            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                            <form id="foodDonationForm" action="scripts/donationscript.php" method="post" enctype="multipart/form-data">
                                <div class="control-group">
                                    <div class="form-group  controls mb-0 pb-2">
                                        <label>Organisations</label>
                                        <select class="form-control" id="foodOrganization" name="food-organization"
                                                required>
                                            <option selected disabled hidden>Select Organisations</option>
                                            <?php
                                            //$db = mysqli_connect("localhost", "root", "", "shareameal");
                                            $result = mysqli_query($db, "SELECT * FROM organisations");
                                            $n = 0;

                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <option class="form-group" name="food-organization" value="<?php echo $row['OrganisationID'] ?>"><?php echo $row['Name'] ?></option>
                                            <?php } ?>
                                        </select>


                                        <!--<input class="form-control" id="foodOrganization"
                                                                           type="text" name="food-organization"
                                                                           placeholder="Select Organization"
                                                                           required oninvalid="this.setCustomValidity('Please Enter Contact Number')"
                                                                           oninput="setCustomValidity('')"
                                                                           data-validation-required-message="Please enter your email address."/>
                                        --><p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group  controls mb-0 pb-2">
                                        <label>Portions</label><input class="form-control" id="foodPortion"
                                                                      type="number" name="food-portion"
                                                                      placeholder="Portions Share" required
                                                                      oninvalid="this.setCustomValidity('Please Enter portion')"
                                                                      oninput="setCustomValidity('')"
                                                                      data-validation-required-message="Please enter portion you want to share."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group  controls mb-0 pb-2">
                                        <label>Location</label><input class="form-control" id="foodLocation" type="text"
                                                                      placeholder="Your Location"
                                                                      required
                                                                      oninvalid="this.setCustomValidity('Please Enter your location')"
                                                                      oninput="setCustomValidity('')"
                                                                      name="food-location"
                                                                      data-validation-required-message="Please enter your location."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <br/>
                                <div id="success"></div>
                                <div class="form-group">
                                    <button class="btn btn-danger btn-xl" id="foodButton" name="btn-donate-food">Share!!
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
     aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">


                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Share Money</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>


                            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                            <form id="moneyDonationForm" name="sentMessage" novalidate="novalidate">
                                <div class="control-group">
                                    <div class="form-group  controls mb-0 pb-2">
                                        <label>Amount</label><input class="form-control" id="moneyPortion" type="number"
                                                                    name="money-amount"
                                                                    placeholder="Amount Share" required="required"
                                                                    data-validation-required-message="Please enter amount to donate."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group  controls mb-0 pb-2">
                                        <label>Location</label><input class="form-control" id="moneyLocation"
                                                                      type="text" placeholder="Your Location"
                                                                      required="required" name="money-location"
                                                                      data-validation-required-message="Please enter your location."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <button class="btn btn-danger btn-xl" id="Button" name="btn-donate-food"
                                            type="submit">Share!!
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
