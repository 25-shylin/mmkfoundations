<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/health.png);">
            <div class="container">
                <div class="title-text">
                    <h1>Health</h1>
                    <ul class="title-menu clearfix">
                        <li>
                        <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Health</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img loading="lazy" src="images/services/hea.png" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Health</h2>
                            <p>Since independence, India has made remarkable progress in the health sector. However, a variety of eye-opening findings from the National Family Health Survey (NFHS) (Tamil nadu - NFHS-5) plainly show that healthcare access
                                remains a concern.</p>

                            <p>While rural India&#39;s health statistics remain dismal, the health status and access to health for the poor among urban slum dwellers has also been revealed to be appalling, with less than 4% of government primary healthcare
                                facilities.
                            </p>

                            <p></p>Urban slum people suffer from poor health for two main reasons: first, a lack of education and hence awareness; and second, a refusal to forego a day&#39;s income in order to reach the nearest medical facility. As a result,
                            the critical demand for healthcare for the poor is unmet.</p>
                    <?php 
                        $selecthealthquery = "select * from health";
                              $runhealthQuery = mysqli_query($con,$selecthealthquery);
                               $serialNum = 1;
                               while ($rowhealthquery = mysqli_fetch_array($runhealthQuery)) {
                                $serialNumber = $serialNum++;
                                $healthid = $rowhealthquery['healthid'];
                                
                                $healthno = $rowhealthquery['healthno'];
                                $date = $rowhealthquery['date'];
                                $tag = $rowhealthquery['tag'];
                                $project = $rowhealthquery['project'];
                                $firstname = $rowhealthquery['firstname'];
                                $lastname = $rowhealthquery['lastname'];
                                $permanataddress = $rowhealthquery['permanataddress'];
                                $currentaddress = $rowhealthquery['currentaddress'];
                                $guardianparentscareofphonenumber = $rowhealthquery['guardianparentscareofphonenumber'];
                                $whatsappnumber = $rowhealthquery['whatsappnumber'];
                                $aadharnumber = $rowhealthquery['aadharnumber'];
                                $guardianparentscareofoccupation = $rowhealthquery['guardianparentscareofoccupation'];
                                $problemcasestudies = $rowhealthquery['problemcasestudies'];
                                $solution = $rowhealthquery['solution'];
                                $comments = $rowhealthquery['comments'];
                                $healthimg = $rowhealthquery['healthimg'];
                                $creatdate = $rowhealthquery['creatdate'];
                                $modifydate = $rowhealthquery['modifydate'];

                                $eligible = $rowhealthquery['eligible'];
                           ?>
                           <?php } ?> 

                        <div class="col-lg-12">
                            <?php 
                        $eye_count = "select * from health where tag = 'No of eye camps conducted'";
                        $eye_count_run = mysqli_query($con, $eye_count);
                        $eye_count_row = mysqli_num_rows($eye_count_run);
                      ?>
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 21px; max-width: 48%; color: #fff;"> Eye Camps Conducted 
                                <h3>No. <?= $eye_count_row ?></h3>
                           </div>
                           <?php 
                        $eye_eligible_count = "select * from health where tag = 'No of eye camps conducted' and eligible = '1'";
                        $eye_eligible_count_run = mysqli_query($con, $eye_eligible_count);
                        $eye_eligible_count_row = mysqli_num_rows($eye_eligible_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 21px; max-width: 48%; color: #fff;">Beneficiaries
                                <h3>No. <?= $eye_eligible_count_row ?></h3>
                           </div>
                        </div>
                        <div class="col-lg-12">
                            <?php 
                        $sanitary_count = "select * from health where tag = 'No Of Sanitary Napkins Distributed'";
                        $sanitary_count_run = mysqli_query($con, $sanitary_count);
                        $sanitary_count_row = mysqli_num_rows($sanitary_count_run);
                      ?>
                           <div class="col-lg-3" style="float: left;background: #ff636c;padding: 30px 21px; margin-top: 20px; max-width: 48%; color: #fff;">Sanitary Napkins Distributed
                                <h3>No. <?= $sanitary_count_row ?></h3>
                            </div>
                            <?php 
                        $sanitary_eligible_count = "select * from health where tag = 'No Of Sanitary Napkins Distributed' and eligible = '1'";
                        $sanitary_eligible_count_run = mysqli_query($con, $sanitary_eligible_count);
                        $sanitary_eligible_count_row = mysqli_num_rows($sanitary_eligible_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #1c62fe;padding: 30px 21px; margin-top: 20px; max-width: 48%; color: #fff;">Beneficiaries
                                <h3>No. <?= $sanitary_eligible_count_row ?></h3>
                           </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <?php include('include/footer.php')?>