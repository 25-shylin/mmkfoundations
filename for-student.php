<?php 
include('include/header.php');
include('include/database.php');
?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>For Students</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index-2.html">home &nbsp;/</a>
                        </li>
                        <li>For Students</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <section class="section contact">
            <!-- container start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 ">
                       
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <h2 style="color: #000;">For Students<br><br></h2>
                        <div class="contact-form">
                            <!-- contact form start -->
                            1.  Students and the college have been recognized for their social responsibility.<br>
                            2.  Connecting colleges to the MMK Foundation's corporate and school network.<br>
                            3.  College branding as a forerunner in preparing students to be social change-makers.<br><br>
                            <h4 style="color: #000;">MMK Foundation Club Signup<br></h4>
                            I am a College Staff and want to setup a MMK Foundation Club in my college
                            
                            <form method="post" action="#" class="row" >
                                <!-- name -->
                                <div class="col-lg-12">
                                    <label style="color: #000; font-size: 18px;">Your Details</label>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <label>Full Name *</label>
                                    <input type="text" name="fullname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Contact Number *</label>
                                    <input type="text" name="mobileno" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Email *</label>
                                    <input type="email" name="email" class="form-control main" autocomplete="off">
                                </div>
                                
                                <div class="col-lg-6">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" class="form-control main" required autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label>city *</label>
                                    <input type="text" name="city" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>State *</label>
                                    <input type="text" name="state" class="form-control main" required autocomplete="off">
                                </div>

                                <div class="col-lg-12">
                                    <label style="color: #000; font-size: 18px;">College Details</label>
                                    
                                </div>

                                <div class="col-lg-12">
                                    <label>College Name *</label>
                                    <input type="text" name="collegename" class="form-control main" required autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label>College City *</label>
                                    <input type="text" name="collegecity" class="form-control main" required autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label>College State *</label>
                                    <input type="text" name="collegestate" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-12">
                                    <label>Is student volunteering hours mandatory in this college? *</label>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="Yes" name="volunteering" value="Yes" checked>
                                      <label class="form-check-label" for="Yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="No" name="volunteering" value="No">
                                      <label class="form-check-label" for="No">No</label>
                                    </div>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="Don’t Know" name="volunteering" value="Don’t Know">
                                      <label class="form-check-label" for="Don’t Know">Don’t Know</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label style="color: #000; font-size: 18px;">College Management Point of Contact Details</label>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <label>Full Name</label>
                                    <input type="text" name="cmpfullname" class="form-control main" autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Mobile</label>
                                    <input type="text" name="cmpmobile" class="form-control main" autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Email</label>
                                    <input type="email" name="cmpemail" class="form-control main" autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Designation</label>
                                    <input type="text" name="cmpdesignation" class="form-control main" autocomplete="off">
                                </div>
                                <!-- submit button -->
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-style-one" type="submit" name="submit">Submit</button>
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
        $forstudentsno = "MMKC".rand(100000, 100000000);
        $password = rand(100000, 100000000);
        $fullname=$_POST['fullname'];
        $mobileno=$_POST['mobileno'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $collegename=$_POST['collegename'];
        $collegecity=$_POST['collegecity'];
        $collegestate=$_POST['collegestate'];
        $volunteering=$_POST['volunteering'];
        $cmpfullname=$_POST['cmpfullname'];
        $cmpmobile=$_POST['cmpmobile'];
        $cmpemail=$_POST['cmpemail'];
        $cmpdesignation=$_POST['cmpdesignation'];
        
        
        $forstudentsQuery = "insert into forstudents(forstudentsno, password, fullname, mobileno, email, dob, city, state, collegename, collegecity, collegestate, volunteering, cmpfullname, cmpmobile, cmpemail, cmpdesignation)values('$forstudentsno', '$password', '$fullname', '$mobileno', '$email', '$dob', '$city', '$state', '$collegename', '$collegecity', '$collegestate', '$volunteering', '$cmpfullname', '$cmpmobile', '$cmpemail', '$cmpdesignation')";
        
         if ($fullname == '') {
        echo "<script>alert('Please Enter Full Name')</script>";
       }else
          {
          mysqli_query($con, $forstudentsQuery);
         
          echo "<script>alert('Your For Students Details Added')</script>";
          echo "<script>window.open('index.php','_self')</script>";
          
         }
    }
?>