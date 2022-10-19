<?php include('include/header.php')?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/education.png);">
            <div class="container">
                <div class="title-text">
                    <h1>Education</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Education</li>
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
                            <h2>Education</h2>
                            <p>Education is a state-level initiative of the MMK Foundation, a non-profit organisation dedicated to providing basic education and healthcare to impoverished children. The MMK Foundation, a non-profit organisation dedicated
                                to improving the education of underprivileged children, thinks that there is no better place to begin than in the halls of education, whether the issue is healthcare, poverty, population control, unemployment, or human
                                rights.
                            </p>
                            <p>Education is both the means and the end to a better life; it is the means because it allows an individual to earn a living, and it is the end because it increases one&#39;s awareness of a variety of issues ranging from healthcare
                                to appropriate social behaviour to understanding one&#39;s rights, allowing one to evolve as a better citizen.</p>
                       <?php 
                        $selectbeneficiaryquery = "select * from beneficiary";
                              $runbeneficiaryQuery = mysqli_query($con,$selectbeneficiaryquery);
                               $serialNum = 1;
                               while ($rowbeneficiaryquery = mysqli_fetch_array($runbeneficiaryQuery)) {
                                $serialNumber = $serialNum++;
                                $beneficiaryid = $rowbeneficiaryquery['beneficiaryid'];
                                
                                $beneficiaryno = $rowbeneficiaryquery['beneficiaryno'];
                                $date = $rowbeneficiaryquery['date'];
                                $tag = $rowbeneficiaryquery['tag'];
                                $project = $rowbeneficiaryquery['project'];
                                $firstname = $rowbeneficiaryquery['firstname'];
                                $lastname = $rowbeneficiaryquery['lastname'];
                                $permanataddress = $rowbeneficiaryquery['permanataddress'];
                                $currentaddress = $rowbeneficiaryquery['currentaddress'];
                                $guardianparentscareofphonenumber = $rowbeneficiaryquery['guardianparentscareofphonenumber'];
                                $whatsappnumber = $rowbeneficiaryquery['whatsappnumber'];
                                $aadharnumber = $rowbeneficiaryquery['aadharnumber'];
                                $guardianparentscareofoccupation = $rowbeneficiaryquery['guardianparentscareofoccupation'];
                                $problemcasestudies = $rowbeneficiaryquery['problemcasestudies'];
                                $solution = $rowbeneficiaryquery['solution'];
                                $comments = $rowbeneficiaryquery['comments'];
                                $beneficiaryimg = $rowbeneficiaryquery['beneficiaryimg'];
                                $creatdate = $rowbeneficiaryquery['creatdate'];
                                $modifydate = $rowbeneficiaryquery['modifydate'];

                                $eligible = $rowbeneficiaryquery['eligible'];
                           ?>
                           <?php } ?>  
                     <?php 
                        $education_count = "select * from beneficiary where tag = 'education'";
                        $education_count_run = mysqli_query($con, $education_count);
                        $education_count_row = mysqli_num_rows($education_count_run);
                      ?>                         
                        <div class="col-lg-12">
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Applicants
                                <h3>No. <?= $education_count_row ?></h3>
                           </div>
                    <?php 
                        $eligible_count = "select * from beneficiary where tag = 'education' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 33px; max-width: 48%; color: #fff;">No. of Applicants Eligible
                                <h3>No. <?= $eligible_count_row ?></h3>
                           </div>
                        </div>
                        <div class="col-lg-12">
                            <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'education' and beneficiarystatus = '1'";
                        $beneficiary_count_run = mysqli_query($con, $beneficiary_count);
                        $beneficiary_count_row = mysqli_num_rows($beneficiary_count_run);
                      ?>
                           <div class="col-lg-3" style="float: left;background: #ff636c;padding: 30px 44px; margin-top: 20px; max-width: 48%; color: #fff;">Beneficiaries
                                <h3>No. <?= $beneficiary_count_row ?></h3>
                            </div>
                        <?php 
                        $eligible_count = "select * from beneficiary where tag = 'education' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>    
                      <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'education' and beneficiarystatus = '1'";
                        $beneficiary_count_run = mysqli_query($con, $beneficiary_count);
                        $beneficiary_count_row = mysqli_num_rows($beneficiary_count_run);
                      ?>
                      <?php 
                      $balance = $eligible_count_row - $beneficiary_count_row;
                      ?>
                           <div class="col-lg-3" style="float: right; background: #1c62fe;padding: 30px 44px; margin-top: 20px; max-width: 48%; color: #fff;">Yet to Receive Support
                                <h3>No. <?= $balance ?></h3>
                           </div>
                        </div>
                    </div>
                        
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>

  <?php include('include/footer.php')?>