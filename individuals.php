<?php include('include/header.php') ?>
<!--Page Title-->
<section class="page-title text-center " style="background-image:url(images/background/individual.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Individuals</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">Home &nbsp;/</a>
                </li>
                <li>Individuals</li>
            </ul>
        </div>
    </div>
</section>


<!-- Our Story -->
<section class="story">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img loading="lazy" src="images/services/individual.jpg" class="responsive" alt="story">
            </div>
            <div class="col-lg-6">
                <div class="story-content">
                    <h2>Individuals</h2>
                    <p>Every single one of us has a dream, one for ourselves and one for the society in which we live.</p>

                    <p>We can "make it work" if we work together. The MMK Foundation assists people like you who have the ability and sensitivity to give wisely and generously to the underprivileged. We make charitable giving simple, flexible, and tax-efficient. We understand your situation and will work with you to make the most of your donation.
                    </p>

                    <!-- <a href="volunteer-individuals.php">Registration</a> -->
                    <!-- <h2>Registration Below:-</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="individual">
    <section class="section contact school">
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-5 ">

                </div>
                <div class="col-lg-8 col-md-7">
                    <center>
                        <h2 style="color: #000;">Registration<br><br></h2>
                    </center>
                    <div class="contact-form">
                        <!-- contact form start -->
                        <form method="post" action="#" class="row">
                            <!-- name -->
                            <div class="col-lg-6">
                                <label>Full Name *</label>
                                <input type="text" name="name" class="form-control main" required autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <label>Mobile *</label>
                                <input type="text" name="mobileno" class="form-control main" required autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <label>E-mail *</label>
                                <input type="email" name="email" class="form-control main" required autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <label>Date of Birth *</label>
                                <input type="Date" name="dob" class="form-control main" required autocomplete="off">
                            </div>

                            <div class="col-lg-6">
                                <label>Location *</label>
                                <input type="text" name="location" class="form-control main" required autocomplete="off">
                            </div>

                            <div class="col-lg-6">
                                <label>Permission to contact over whats-app *</label>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="Yes" name="whatsapp" value="Yes" checked>
                                    <label class="form-check-label" for="Yes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="No" name="whatsapp" value="No">
                                    <label class="form-check-label" for="No">No</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label>Pin code
                                    (For Local Volunteer Opportunities)</label>
                                <input type="text" name="pincode" class="form-control main" autocomplete="off">
                            </div>

                            <div class="col-lg-6">
                                <label>Organization (Company/College) </label>
                                <input type="text" name="organization" class="form-control main" autocomplete="off">
                            </div>
                            <div class="col-lg-12">
                                <label>I would like to receive MMK’s newsletter and emails with updates on MMK’s upcoming events *</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="Yes" name="newsletter" value="Yes" checked>
                                    <label class="form-check-label" for="Yes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="No" name="newsletter" value="No">
                                    <label class="form-check-label" for="No">No</label>
                                </div>
                            </div>
                            

                            <!-- submit button -->
                            <div class="col-md-12 text-right">
                               <center><button class="btn btn-style-one" type="submit" name="submit">Submit</button></center> 
                            </div>

                        </form>
                        <!-- contact form end -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 ">

                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
</div>

<?php include('include/footer.php') ?>
<?php
if (isset($_POST['submit'])) {
    $volunteersindividualsno = "MMKV" . rand(100000, 100000000);
    $password = rand(100000, 100000000);
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $unique = $dob.$name;
    $location = $_POST['location'];
    $whatsapp = $_POST['whatsapp'];
    $newsletter = $_POST['newsletter'];
    $pincode = $_POST['pincode'];
    $organization = $_POST['organization'];

    $volunteersQuery = "insert into volunteersindividuals(volunteersindividualsno, password, name, mobileno, email, dob, unique_id, location, whatsapp, newsletter, pincode, organization)values('$volunteersindividualsno','$password', '$name', '$mobileno', '$email', '$dob','$unique', '$location', '$whatsapp', '$newsletter', '$pincode', '$organization')";

    if ($name == '') {
        echo "<script>alert('Please Enter Name')</script>";
    } else {
        mysqli_query($con, $volunteersQuery);

        echo "<script>alert('Your volunteers Details Added')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>