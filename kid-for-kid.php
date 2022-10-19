<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/kid.png);">
            <div class="container">
                <div class="title-text">
                    <h1>Kid For Kid
                    </h1>
                    <ul class="title-menu clearfix">
                        <li>
                        <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Kid For Kid
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img loading="lazy" src="images/services/kd.png" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Kid for Kid</h2>
                        </div>
                        <p>Children are a country&#39;s future. They are the most effective change agents, whether in the family or in the community in which they live. It is therefore critical to assist children, to catch them when they are young and to
                            instil in them feelings of empathy and conscience so that they grow up to be responsible individuals. Recognizing this need, the MMK Foundation launched the Kid for Kid (KFK) programme in 2022. Sensitization of privileged children
                            and their parents to existing inequalities around them is a key goal of KFK.
                        </p>
                        <p>Privileged children are made aware of the deprivation and pain endured by underprivileged children. KFK aims to instil a sense of conscience and a value system in children so that they grow up to be responsible citizens and change
                            agents. The KFK programme tries to make them count their blessings and understand the plight of those who are less fortunate before their minds are set with age. They automatically turn their thoughts to positivity and develop
                            the right outlook once they begin to recognise the value of the advantages they are born with. This eventually helps them develop into not only successful but also responsible adults. They grow up to be significant change agents
                            who positively contribute to society.</p>
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
                        $Kid_for_Kid_count = "select * from beneficiary where tag = 'Kid for Kid'";
                        $Kid_for_Kid_count_run = mysqli_query($con, $Kid_for_Kid_count);
                        $Kid_for_Kid_count_row = mysqli_num_rows($Kid_for_Kid_count_run);
                      ?>                         
                        <div class="col-lg-12">
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 44px; max-width: 48%; color: #fff;">Total No. of Applicants
                                <h3>No. <?= $Kid_for_Kid_count_row ?></h3>
                           </div>
                    <?php 
                        $eligible_count = "select * from beneficiary where tag = 'Kid for Kid' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 33px; max-width: 48%; color: #fff;">No. of Applicants Eligible
                                <h3>No. <?= $eligible_count_row ?></h3>
                           </div>
                        </div>
                        <div class="col-lg-12">
                            <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'Kid for Kid' and beneficiarystatus = '1'";
                        $beneficiary_count_run = mysqli_query($con, $beneficiary_count);
                        $beneficiary_count_row = mysqli_num_rows($beneficiary_count_run);
                      ?>
                           <div class="col-lg-3" style="float: left;background: #ff636c;padding: 30px 44px; margin-top: 20px; max-width: 48%; color: #fff;">Beneficiaries
                                <h3>No. <?= $beneficiary_count_row ?></h3>
                            </div>
                        <?php 
                        $eligible_count = "select * from beneficiary where tag = 'Kid for Kid' and eligible = '1'";
                        $eligible_count_run = mysqli_query($con, $eligible_count);
                        $eligible_count_row = mysqli_num_rows($eligible_count_run);
                      ?>    
                      <?php 
                        $beneficiary_count = "select * from beneficiary where tag = 'Kid for Kid' and beneficiarystatus = '1'";
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