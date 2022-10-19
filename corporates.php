<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/corporates.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Corporates</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Corporates</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img loading="lazy" src="images/services/corporates.jpg" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Corporates</h2>
                            <p>MMK Foundation is a small non-profit organization with a big heart dedicated to bringing about a paradigm shift in the NGO space through selfless and sustained service to restore the dignity of socially backward communities.</p>

                            <p>A corporate that supports socially responsible initiatives would not only resonate with customers and employees, but would also make a difference in the real world. If you want to keep your CSR initiatives thriving, you will need drive and passion at the leadership level. You would need to partner with the right NGO to effectively reach out to the greatest number of underprivileged people and ensure that your donations positively transform their lives. You will be pleased to know that the MMK Foundation has been at the forefront of "Including the Excluded in the Growth Trajectory." "Every rupee we receive will be spent wisely."
                            </p>

                            <p>"We guarantee it." Rural health and hygiene, education, environmental sustainability, rural employment, and women's empowerment are just a few of the flagship projects we're working on.
                            </p>

                         <!-- <a href="corporate-contact-form.php">Corporate Contact form</a> -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section contact school">
            <!-- container start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-5 ">
                       
                    </div>
                    <div class="col-lg-8 col-md-7">
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
                                <div class="col-md-12 text-left">
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