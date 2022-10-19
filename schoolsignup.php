<?php 
include('include/header.php');
include('include/database.php');
?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Eco-Friendly Champs School Sign Up</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index-2.html">home &nbsp;/</a>
                        </li>
                        <li>Eco-Friendly Champs School Sign Up</li>
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
                        <h2 style="color: #000;">Eco-Friendly Champs School Sign Up<br><br></h2>
                        <div class="contact-form">
                            <!-- contact form start -->
                           We'd love to see your pupils sign up for this free programme and work with you to lead their natural inclination for environmental stewardship in the correct path. We're hosting a demo session for you and your teachers/parents to learn more about how the Eco-Friendly Champs programme works and how it may benefit your pupils.<br><br>

                           
                            
                            <form method="post" action="#" class="row" >
                                <!-- name -->
                               
                                <div class="col-lg-6">
                                    <label>School Name *</label>
                                    <input type="text" name="schoolname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Email *</label>
                                    <input type="email" name="email" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Principal’s Name *</label>
                                    <input type="text" name="principalsname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Principal’s Phone number *</label>
                                    <input type="text" name="principalsphonenumber" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Alternate Contact Person’s Phone number *</label>
                                    <input type="text" name="alternatecontactpersonsphonenumber" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Alternate Contact Person’s name *</label>
                                    <input type="text" name="alternatecontactpersonsname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-12">
                                    <label>Location of school *</label>
                                    <input type="text" name="locationofschool" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-12">
                                    <label>Full address of school *</label>
                                    <input type="text" name="fulladdressofschool" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Pincode of school *</label>
                                    <input type="text" name="pincodeofschool" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Classes interested to sign up *</label>
                                    <select name="interested" multiple="" class="form-select" required="">
                                            <option value="Class 5">Class 5</option>
                                            <option value="Class 6">Class 6</option>
                                            <option value="Class 7">Class 7</option>
                                            <option value="Class 8">Class 8</option>
                                            <option value="Class 9">Class 9</option>
                                                                            
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <label><br>Preferred slot(1 hours) for a Demo and Induction with school teachers/parents    (*mandatory field) *</label>
                                    
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
        $schoolno = "MMKSCH".rand(100000, 100000000);
        $password = rand(100000, 100000000);
        $schoolname=$_POST['schoolname'];
        $email=$_POST['email'];
        $principalsname=$_POST['principalsname'];
        $principalsphonenumber=$_POST['principalsphonenumber'];
        $alternatecontactpersonsphonenumber=$_POST['alternatecontactpersonsphonenumber'];
        $alternatecontactpersonsname=$_POST['alternatecontactpersonsname'];
        $locationofschool=$_POST['locationofschool'];
        $fulladdressofschool=$_POST['fulladdressofschool'];
        $pincodeofschool=$_POST['pincodeofschool'];
        $interested=$_POST['interested'];
        
        
        $forschoolQuery = "insert into school(schoolno, password, schoolname, email, principalsname, principalsphonenumber, alternatecontactpersonsphonenumber, alternatecontactpersonsname, locationofschool, fulladdressofschool, pincodeofschool, interested)values('$schoolno', '$password', '$schoolname', '$email', '$principalsname', '$principalsphonenumber', '$alternatecontactpersonsphonenumber', '$alternatecontactpersonsname', '$locationofschool', '$fulladdressofschool', '$pincodeofschool', '$interested')";
       
         if ($schoolname == '') {
        echo "<script>alert('Please Enter School Name')</script>";
       }else
          {
          mysqli_query($con, $forschoolQuery);
         
          echo "<script>alert('Your School Details Added')</script>";
          echo "<script>window.open('index.php','_self')</script>";
          
         }
    }
?>