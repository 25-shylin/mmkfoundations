<?php include('include/database.php')?>
<?php include('include/header.php')?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Donate Now</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index.php">home &nbsp;/</a>
                        </li>
                        <li>Donate Now</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <section class="section contact">
            <!-- container start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-5 ">
                       
                    </div>
                    <div class="col-lg-8 col-md-7">
                       <center> <h2 style="color: #000;">Donate Now<br></h2>
                        <h5>Yes, I want to Support<br><br></h5></center>
                        <div class="contact-form">
                            <!-- contact form start -->
                            <form method="post" action="#" class="row" >
                                <!-- name -->
                                
                                <!-- <div class="col-lg-12">
                                    
                                    <input type="radio" class="radio-inline" name="amount_advanced" id="aamount18" value="30000.00" onclick="update_amount('30000.00')"> Rs. 30,000/- (for the education of 5 children for 1 year)


                                </div>
                                <div class="col-lg-12">
                                    
                                    <input type="radio" class="radio-inline" name="amount_advanced" id="aamount25" value="18000.00" onclick="update_amount('18000.00')"> Rs. 18,000/- (for the education of 3 children for 1 year)

                                    
                                </div>
                                <div class="col-lg-12">
                                    
                                    <input type="radio" class="radio-inline" name="amount_advanced" id="aamount50" value="6000.00" checked="checked" onclick="update_amount('6000.00')"> Rs. 6,000/- (for the education of 1 child for 1 year)

                                    
                                </div> -->
                                <div class="col-lg-12">
                                    <label>Donate Category</label>
                                    <select name="donatecategory" class="form-select">
                                          <option value="Education">Education</option>
                                          <option value="Health">Health</option>
                                          <option value="Livelihood">Livelihood</option>
                                          <option value="Women Empowerment">Women Empowerment</option>
                                          <option value="Disaster Response">Disaster Response</option>
                                          <option value="Environmental Protection">Environmental Protection</option>
                                          <option value=" Kid for Kid"> Kid for Kid</option>
                                          
                                    </select>
                                </div>
                                 <div class="col-lg-12">
                                    <label><strong>Donate amount:</strong></label>
                                    <input type="text" name="donateamount" class="form-control main" required autocomplete="off" placeholder="Rs.6000">
                                </div>
                                <div class="col-lg-12">
                                    <center><h4 style="color: #000;">DONATION FORM </h4></center>
                                </div><br><br>
                                <!-- <div class="col-lg-12">
                                    <h5 style="color: #000;">Title: Mr. or Ms. or Mrs.</h5>
                                </div><br> -->
                                <div class="col-lg-6">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Pincode</label>
                                    <input type="text" name="pincode" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Nationality</label>
                                    <input type="text" name="nationality" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-12">
                                    <label>Do you want 80g tax benefit?</label>
                                    <select name="eightegtaxbenefit" class="form-select">
                                        <option>Select Benefit</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <!-- email -->
                                <div class="col-lg-6">
                                    <label>Date of Birth</label>
                                    <input type="Date" name="dob" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Gender</label>
                                   <select name="gender" class="form-select">
                                        <option>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <label>PAN(Only for India)</label>
                                    <p>Please note that if you do not provide your PAN Number, you will not be able to claim 50% tax exemption u/s 80G in India.</p>
                                    <input type="text" name="pan" class="form-control main" required autocomplete="off">

                                </div>
                                <div class="col-lg-12">
                                    <input type="checkbox"name="EmailAuth" required> I Agree and accept that Donations are not refundable under any circumstances for http://www.mmkfoundation.org/
                                </div>
                                <!-- phone -->
                                
                                <!-- submit button -->
                                <div class="col-md-12 text-right">
                                    <center><button class="btn btn-style-one" type="submit" name="submit">Donate Now</button></center>
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

<?php include('include/footer.php')?>

<?php 
    if(isset($_POST['submit'])){
        $donaterno = "MMKD".rand(10000, 100000000);
        $password = rand(10000, 100000000);
        $donatecategory = $_POST['donatecategory'];
        $donateamount = $_POST['donateamount'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $country = $_POST['country'];
        $nationality = $_POST['nationality'];
        $eightegtaxbenefit = $_POST['eightegtaxbenefit'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $pan = $_POST['pan'];

        $donationquery = "insert into donater(donaterno, password, donatecategory, donateamount, firstname, lastname, email, phone, address, city, state, pincode, country, nationality, eightegtaxbenefit, dob, gender, pan)values('$donaterno', '$password', '$donatecategory', '$donateamount', '$firstname', '$lastname', '$email', '$phone', '$address', '$city', '$state', '$pincode', '$country', '$nationality', '$eightegtaxbenefit', '$dob', '$gender', '$pan')";
        
        if ($donatecategory == '') {
        echo "<script>alert('Please Enter Donater Category')</script>";
       }else
          {
          mysqli_query($con, $donationquery);
          echo "<script>alert('Your Donater Details Added')</script>";
          echo "<script>window.open('donate-welcome-letter.php','_self')</script>";
          
         }
        echo print_r($donationQuery); exit();
    }
?>