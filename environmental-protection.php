<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/environmental.png);">
            <div class="container">
                <div class="title-text">
                    <h1>Environmental Protection
                    </h1>
                    <ul class="title-menu clearfix">
                        <li>
                        <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Environmental Protection
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
                        <img loading="lazy" src="images/services/tree.png" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Environmental Protection</h2>
                        </div>
                        <p>We are a Trust of nature enthusiasts who want to safeguard and maintain the diversity of natural resources and a healthy environment by living in peace with nature. Participation, demonstration projects, monitoring, and research,
                            as well as cooperation and networking with other NGOs and government departments, all contribute to efforts for sustainable development.
                        </p>
                        <p>Maintain vigilant vigilance over nearby plant and animal habitats, air, water, and noise levels, among other things; protect natural resources, watersheds, and ecosystems, and push authorities to take corrective action in cases
                            of lapses or over-exploitation. Take steps to conserve ethnic culture and heritage, as well as to share expertise, knowledge, and information about all aspects of nature and history with people who need it. Gather knowledge
                            about environmentally friendly technologies and take steps to publicise them. Increase public awareness of the need to conserve water, fuel, and other natural resources by promoting the use of renewable energy sources such
                            as solar, wind, and biogas.</p>
                        <?php 
                        $selectenvironmentprotectionquery = "select * from environmentprotection";
                              $runenvironmentprotectionQuery = mysqli_query($con,$selectenvironmentprotectionquery);
                               $serialNum = 1;
                               while ($rowenvironmentprotectionquery = mysqli_fetch_array($runenvironmentprotectionQuery)) {
                                $serialNumber = $serialNum++;
                                $environmentprotectionid = $rowenvironmentprotectionquery['environmentprotectionid'];
                                
                                $environmentprotectionno = $rowenvironmentprotectionquery['environmentprotectionno'];
                                $date = $rowenvironmentprotectionquery['date'];
                                $tag = $rowenvironmentprotectionquery['tag'];
                                $project = $rowenvironmentprotectionquery['project'];
                                $firstname = $rowenvironmentprotectionquery['firstname'];
                                $lastname = $rowenvironmentprotectionquery['lastname'];
                                $permanataddress = $rowenvironmentprotectionquery['permanataddress'];
                                $currentaddress = $rowenvironmentprotectionquery['currentaddress'];
                                $guardianparentscareofphonenumber = $rowenvironmentprotectionquery['guardianparentscareofphonenumber'];
                                $whatsappnumber = $rowenvironmentprotectionquery['whatsappnumber'];
                                $aadharnumber = $rowenvironmentprotectionquery['aadharnumber'];
                                $guardianparentscareofoccupation = $rowenvironmentprotectionquery['guardianparentscareofoccupation'];
                                $problemcasestudies = $rowenvironmentprotectionquery['problemcasestudies'];
                                $solution = $rowenvironmentprotectionquery['solution'];
                                $comments = $rowenvironmentprotectionquery['comments'];
                                $environmentprotectionimg = $rowenvironmentprotectionquery['environmentprotectionimg'];
                                $creatdate = $rowenvironmentprotectionquery['creatdate'];
                                $modifydate = $rowenvironmentprotectionquery['modifydate'];

                                $eligible = $rowenvironmentprotectionquery['eligible'];
                           ?> 
                           <?php } ?>          
                        <div class="col-lg-12">
                            <?php 
                        $planted_count = "select * from environmentprotection where tag = 'Trees Planted' and eligible = '1'";
                        $planted_count_run = mysqli_query($con, $planted_count);
                        $planted_count_row = mysqli_num_rows($planted_count_run);
                      ?>
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 21px; max-width: 48%; color: #fff;">No of Trees Planted
                                <h3>No. <?= $planted_count_row ?></h3>
                           </div>
                           <?php 
                        $planned_count = "select * from environmentprotection where tag = 'Trees Planned' and eligible = '1'";
                        $planned_count_run = mysqli_query($con, $planned_count);
                        $planned_count_row = mysqli_num_rows($planned_count_run);
                      ?>
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 21px; max-width: 48%; color: #fff;">No of Trees Planned
                                <h3>No. <?= $planned_count_row ?></h3>
                           </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>
<?php include('include/footer.php')?>