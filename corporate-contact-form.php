<?php 
include('include/header.php');
include('include/database.php');
?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Corporate Contact form</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index-2.html">home &nbsp;/</a>
                        </li>
                        <li>Corporate Contact form</li>
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
                        <h2 style="color: #000;">Corporate Contact form<br><br></h2>
                        <div class="contact-form">
                            <!-- contact form start -->
                            <form method="post" action="#" class="row" >
                                <!-- name -->
                                <div class="col-lg-12">
                                    <label>We are interested in *</label>
                                    <select name="interested" multiple="" class="form-select" required>
                                            <option value="CSR Financial contribution">CSR Financial contribution</option>
                                            <option value="Employee Volunteering / Events">Employee Volunteering / Events</option>
                                            <option value="Wish fulfillment of children (Joy to the World)">Wish fulfillment of children (Joy to the World)</option>
                                                                            
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <label>Full Name *</label>
                                    <input type="text" name="fullname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-12">
                                    <label>Company Name *</label>
                                    <input type="text" name="companyname" class="form-control main" required autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control main" autocomplete="off">
                                </div>
                                
                                <div class="col-lg-6">
                                    <label>Mobile / Landline number *</label>
                                    <input type="text" name="mobileno" class="form-control main" required autocomplete="off">
                                </div>

                                <div class="col-lg-12">
                                    <label>E-mail *</label>
                                    <input type="email" name="email" class="form-control main" required autocomplete="off">
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
        $corporatesno = "MMKC".rand(100000, 100000000);
        $password = rand(100000, 100000000);
        $interested = $_POST['interested'];
        $fullname = $_POST['fullname'];
        $companyname = $_POST['companyname'];
        $designation = $_POST['designation'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        
        
        $corporatesQuery = "insert into corporates(corporatesno, password, interested, fullname, companyname, designation, mobileno, email)values('$corporatesno','$password', '$interested', '$fullname', '$companyname', '$designation', '$mobileno', '$email')";
        
         if ($interested == '') {
        echo "<script>alert('Please Select Interested')</script>";
       }else
          {
          mysqli_query($con, $corporatesQuery);
         
          echo "<script>alert('Your Corporates Details Added')</script>";
          echo "<script>window.open('index.php','_self')</script>";
          
         }
    }
?>