<section class="page-section bg-primary text-white mb-0" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Contact Us</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form action="scripts/contactscript.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group controls mb-0 pb-2">
                            <label>Name</label><input class="form-control" id="name" type="text" placeholder="Name"
                                                      required="required" name="name"
                                                      data-validation-required-message="Please enter your name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls mb-0 pb-2">
                            <label>Email Address</label><input class="form-control" id="email" type="email"
                                                               placeholder="Email Address" required="required" name="email"
                                                               data-validation-required-message="Please enter your email address."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls mb-0 pb-2">
                            <label>Phone Number</label><input class="form-control" id="phone" type="tel"
                                                              placeholder="Phone Number" required="required" name="phone"
                                                              data-validation-required-message="Please enter your phone number."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls mb-0 pb-2">
                            <label>Message</label><textarea class="form-control" id="message" rows="5"
                                                            placeholder="Message" required="required" name="msg"
                                                            data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br/>
                    <div id="success"></div>
                    <div class="form-group" align="center">
                        <button class="btn btn-xl btn-outline-light" name="btn-contact">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>