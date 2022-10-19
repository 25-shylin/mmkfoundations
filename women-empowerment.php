<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/women.png);">
            <div class="container">
                <div class="title-text">
                    <h1>women-Empowerment</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index.php">Home /</a>
                        </li>
                        <li>women-Empowerment</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img loading="lazy" src="images/services/wom.png" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Women Empowerment</h2>
                            <p>Various research, as well as our own experience, have proven that working toward women&#39;s empowerment benefits the entire society. However, in India, far from empowering women, the majority are denied even fundamental rights
                                such as health, girls&#39; education for women&#39;s empowerment, job, and a decent social status.</p>

                            <p>According to a recent UNDP Human Development Report, India has a dangerously skewed sex ratio, with female infanticide and sex-selective abortions being the primary causes.</p>

                            <p>Increase awareness of corporate innovations that accelerate women&#39;s empowerment and have a real impact on women&#39;s, families&#39;, and communities&#39; quality of life; child marriage is still practised in many parts
                                of India. This leads to early pregnancies, which endangers not only the lives and health of young women, but also their ability to raise a family. The MMK Foundation wants women and girls to be able to make their own decisions
                                and to understand that they do not object to being told who and when they should marry. We intend to put a stop to this type of discrimination by educating individuals about family planning options.</p>
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
                        $Women_Empowerment_count = "select * from beneficiary where tag = 'Women Empowerment'";
                        $Women_Empowerment_count_run = mysqli_query($con, $Women_Empowerment_count);
                        $Women_Empowerment_count_row = mysqli_num_rows($Women_Empowerment_count_run);
                      ?>                         
                        <div class="col-lg-12">
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Applicants
                                <h3>No. <?= $Women_Empowerment_count_row ?></h3>
                           </div>
                    <?php 
                        $eligible_count = "select * from beneficiary where tag = 'Women Empowerment' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 33px; max-width: 48%; color: #fff;">No. of Applicants Eligible
                                <h3>No. <?= $eligible_count_row ?></h3>
                           </div>
                        </div>
                        <div class="col-lg-12">
                            <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'Women Empowerment' and beneficiarystatus = '1'";
                        $beneficiary_count_run = mysqli_query($con, $beneficiary_count);
                        $beneficiary_count_row = mysqli_num_rows($beneficiary_count_run);
                      ?>
                           <div class="col-lg-3" style="float: left;background: #ff636c;padding: 30px 44px; margin-top: 20px; max-width: 48%; color: #fff;">Beneficiaries
                                <h3>No. <?= $beneficiary_count_row ?></h3>
                            </div>
                        <?php 
                        $eligible_count = "select * from beneficiary where tag = 'Women Empowerment' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>    
                      <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'Women Empowerment' and beneficiarystatus = '1'";
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