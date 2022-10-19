<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/live.png);">
            <div class="container">
                <div class="title-text">
                    <h1>Livelihood</h1>
                    <ul class="title-menu clearfix">
                        <li>
                        <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Livelihood</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img loading="lazy" src="images/services/live.png" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Livelihood</h2>
                            <p>Over one-third of India&#39;s population is under the age of 30, making up a significant portion of the country&#39;s labour force. According to Financial Express estimates, just 14% of new graduates graduating from colleges
                                are employable, while the remainder are labelled unemployable.
                            </p>

                            <p>This is not due to a lack of theoretical knowledge on their part. Instead, it&#39;s a lack of the necessary abilities and attitude. As a result, there is growing anxiety among the country&#39;s top businesses about a shortage
                                of ready-to-deliver staff. Furthermore, the macro perspective</p>

                            <p>emphasises that it is critical for the underprivileged youth&#39;s energy to be channelled appropriately and in the right direction to aid economic progress and nation building, avoiding their contribution to family problems,
                                societal stress, and national sorrow.</p>

                            <p> This national-level initiative, through its livelihood programmes, teaches English proficiency, basic computer education, and soft skills to disadvantaged and underprivileged youngsters in order to improve their career prospects
                                in the fast-growing retail, hospitality, and BPO sectors.</p>
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
                        $Livelihood_count = "select * from beneficiary where tag = 'Livelihood'";
                        $Livelihood_count_run = mysqli_query($con, $Livelihood_count);
                        $Livelihood_count_row = mysqli_num_rows($Livelihood_count_run);
                      ?>                         
                        <div class="col-lg-12">
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Applicants
                                <h3>No. <?= $Livelihood_count_row ?></h3>
                           </div>
                    <?php 
                        $eligible_count = "select * from beneficiary where tag = 'Livelihood' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 33px; max-width: 48%; color: #fff;">No. of Applicants Eligible
                                <h3>No. <?= $eligible_count_row ?></h3>
                           </div>
                        </div>
                        <div class="col-lg-12">
                            <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'Livelihood' and beneficiarystatus = '1'";
                        $beneficiary_count_run = mysqli_query($con, $beneficiary_count);
                        $beneficiary_count_row = mysqli_num_rows($beneficiary_count_run);
                      ?>
                           <div class="col-lg-3" style="float: left;background: #ff636c;padding: 30px 44px; margin-top: 20px; max-width: 48%; color: #fff;">Beneficiaries
                                <h3>No. <?= $beneficiary_count_row ?></h3>
                            </div>
                        <?php 
                        $eligible_count = "select * from beneficiary where tag = 'Livelihood' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>    
                      <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'Livelihood' and beneficiarystatus = '1'";
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