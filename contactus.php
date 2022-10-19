<?php include('include/header.php') ?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 ">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
                        <i class="far fa-map"></i>
                        <div class="media-body">
                            <h3>Location</h3>
                            D.No 632, <br> Kattukottai, Manivilundan South, <br> Manivilundan, Vadachennimalai Post, <br>Attur Taluk, Salem District – 636121


                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        <i class="fas fa-phone"></i>
                        <div class="media-body">
                            <h3>Phone</h3>
                            <p>
                                04282 - 251797
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="far fa-envelope"></i>
                        <div class="media-body">
                            <h3>Email</h3>
                            <p>
                                director@mmkfoundation.org
                            </p>
                        </div>
                    </div>
                </div>
                <!-- address end -->
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form name="contact_form" class="row" action="emailnotification.php" method="post">                        <!-- name -->
                        <div class="col-lg-6">
                        <input class="form-control main" type="text" name="Name" placeholder="Name" required>
                        </div>
                        <!-- email -->
                        <div class="col-lg-6">
                        <input class="form-control main" type="email" name="Email" placeholder="Email" required>
                        </div>
                        <!-- phone -->
                        <div class="col-lg-6">
                        <input class="form-control main" type="text" name="Phone" placeholder="Phone" required>
                        </div>
                        <!-- subject -->
                        <div class="col-lg-6">
                        <input class="form-control main" type="text" name="subject" placeholder="subject" required>
                        </div>
                        <!-- message -->
                        <div class="col-lg-12">
                        <textarea class="form-control main" name="form_message" placeholder="Your Message" required></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-style-one">Send Message</button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<section class="map">
    <!-- Google Map -->
    <div class="col-md-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.375066425424!2d78.5944956!3d11.596586499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bab9dfacf4a7087%3A0x5f8f5003a1777adf!2sMMK%20Foundation!5e0!3m2!1sen!2sin!4v1651844105669!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</section>
<!--====  End of Google Map  ====-->

<?php include('include/footer.php') ?>
