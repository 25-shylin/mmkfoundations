<?php 
include('include/header.php');
include('include/database.php');
?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>For Colleges</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index-2.html">home &nbsp;/</a>
                        </li>
                        <li>For Colleges</li>
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
                        <h2 style="color: #000;">For Colleges<br><br></h2>
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
                                <div class="col-lg-12">
                                    <label>College Name *</label>
                                    <input type="text" name="collegename" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>State *</label>
                                    <input type="text" name="state" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>City *</label>
                                    <input type="text" name="city" class="form-control main" required autocomplete="off">
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
        $forcollegeno = "MMKC".rand(100000, 100000000);
        $password = rand(100000, 100000000);
        $collegename=$_POST['collegename'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $volunteering=$_POST['volunteering'];
        $cmpfullname=$_POST['cmpfullname'];
        $cmpmobile=$_POST['cmpmobile'];
        $cmpemail=$_POST['cmpemail'];
        $cmpdesignation=$_POST['cmpdesignation'];
        
        
        $forcollegeQuery = "insert into forcollege(forcollegeno, password, collegename, state, city, volunteering, cmpfullname, cmpmobile, cmpemail, cmpdesignation)values('$forcollegeno', '$password', '$collegename', '$state', '$city', '$volunteering', '$cmpfullname', '$cmpmobile', '$cmpemail', '$cmpdesignation')";
        
         if ($collegename == '') {
        echo "<script>alert('Please Enter Full Name')</script>";
       }else
          {
          mysqli_query($con, $forcollegeQuery);
         
          echo "<script>alert('Your For College Details Added')</script>";
          echo "<script>window.open('index.php','_self')</script>";
          
         }
    }
?>