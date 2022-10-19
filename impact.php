<?php include('include/header.php')?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/education.png);">
            <div class="container">
                <div class="title-text">
                    <h1>Impact</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="impact.php">Impact &nbsp;/</a>
                        </li>
                        <li>Impact</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img loading="lazy" src="images/services/edu.png" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Impact</h2>
                         
                        <div class="col-lg-12" style="margin-bottom: 170px;">
                          <?php 
                        $education_count = "select * from beneficiary where tag = 'Education'";
                        $education_count_run = mysqli_query($con, $education_count);
                        $education_count_row = mysqli_num_rows($education_count_run);
                      ?>   
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Education
                                <h3>No. <?= $education_count_row ?></h3>
                           </div>
                           <?php 
                        $health_count = "select * from health";
                        $health_count_run = mysqli_query($con, $health_count);
                        $health_count_row = mysqli_num_rows($health_count_run);
                      ?> 
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 33px; max-width: 48%; color: #fff;">No. of Health
                                <h3>No. <?= $health_count_row ?></h3>
                           </div>
                        </div>
                        <?php 
                        $livelihood_count = "select * from beneficiary where tag = 'Livelihood'";
                        $livelihood_count_run = mysqli_query($con, $livelihood_count);
                        $livelihood_count_row = mysqli_num_rows($livelihood_count_run);
                      ?> 
                        <div class="col-lg-12" style="margin-bottom: 340px;">
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Livelihood
                                <h3>No. <?= $livelihood_count_row ?></h3>
                           </div>
                           <?php 
                        $women_count = "select * from beneficiary where tag = 'Women Empowerment'";
                        $women_count_run = mysqli_query($con, $women_count);
                        $women_count_row = mysqli_num_rows($women_count_run);
                      ?> 
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 33px; max-width: 48%; color: #fff;">No. of Women Empowerment
                                <h3>No. <?= $women_count_row ?></h3>
                           </div>
                        </div>
                        <div class="col-lg-12" style="margin-bottom: 510px;">
                          <?php 
                        $disaster_count = "select * from disasterresponse";
                        $disaster_count_run = mysqli_query($con, $disaster_count);
                        $disaster_count_row = mysqli_num_rows($disaster_count_run);
                      ?> 
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Disaster Response
                                <h3>No. <?= $disaster_count_row ?></h3>
                           </div>
                           <?php 
                        $environmentprotection_count = "select * from environmentprotection";
                        $environmentprotection_count_run = mysqli_query($con, $environmentprotection_count);
                        $environmentprotection_count_row = mysqli_num_rows($environmentprotection_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 33px; max-width: 48%; color: #fff;">No. of Environmental Protection
                                <h3>No. <?= $environmentprotection_count_row ?></h3>
                           </div>
                        </div>
                        <?php 
                        $kid_count = "select * from beneficiary where tag = 'Kid for Kid'";
                        $kid_count_run = mysqli_query($con, $kid_count);
                        $kid_count_row = mysqli_num_rows($kid_count_run);
                      ?> 
                        <div class="col-lg-12" style="margin-bottom: 600px;">
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Kid for Kid
                                <h3>No. <?= $kid_count_row ?></h3>
                           </div>
                           
                        </div>
                        
                    </div>
                        
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>

  <?php include('include/footer.php')?>