<?php include('include/header.php')?>

        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/disaster.png);">
            <div class="container">
                <div class="title-text">
                    <h1>Disaster Response
                    </h1>
                    <ul class="title-menu clearfix">
                        <li>
                        <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Disaster Response
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
                        <img loading="lazy" src="images/services/response.png" class="responsive" alt="story">
                    </div>
                    <div class="col-lg-6">
                        <div class="story-content">
                            <h2>Disaster Response</h2>
                        </div>
                        <p>Due to its geographical location, India is very vulnerable to numerous forms of natural calamities, making it a disaster-prone country. According to the National Disaster Management Authority of India, more than 58.6% of the country&#39;s
                            landmass is prone to earthquakes, and over 12% is prone to floods; nearly 5,700km of the country&#39;s 7,516km long coastline is prone to cyclones and tsunamis; and 68 percent of its cultivable area is prone to droughts, all
                            of which highlight the importance of disaster preparedness.</p>

                        <p>Increased vulnerabilities associated to shifting demography, socioeconomic conditions—unplanned urbanisation, development within high-risk zones, environmental degradation, climate change, and epidemics and pandemics—increase disaster
                            risks in India. All of these variables have combined to produce a situation in which disasters pose a major threat to the country&#39;s long-term growth, as well as countless lives and livelihoods.</p>
                      <?php 
                        $selectdisasterresponsequery = "select * from disasterresponse";
                              $rundisasterresponseQuery = mysqli_query($con,$selectdisasterresponsequery);
                               $serialNum = 1;
                               while ($rowdisasterresponsequery = mysqli_fetch_array($rundisasterresponseQuery)) {
                                $serialNumber = $serialNum++;
                                $disasterresponseid = $rowdisasterresponsequery['disasterresponseid'];
                                
                                $disasterresponseno = $rowdisasterresponsequery['disasterresponseno'];
                                $date = $rowdisasterresponsequery['date'];
                                $tag = $rowdisasterresponsequery['tag'];
                                $project = $rowdisasterresponsequery['project'];
                                $firstname = $rowdisasterresponsequery['firstname'];
                                $lastname = $rowdisasterresponsequery['lastname'];
                                $permanataddress = $rowdisasterresponsequery['permanataddress'];
                                $currentaddress = $rowdisasterresponsequery['currentaddress'];
                                $guardianparentscareofphonenumber = $rowdisasterresponsequery['guardianparentscareofphonenumber'];
                                $whatsappnumber = $rowdisasterresponsequery['whatsappnumber'];
                                $aadharnumber = $rowdisasterresponsequery['aadharnumber'];
                                $guardianparentscareofoccupation = $rowdisasterresponsequery['guardianparentscareofoccupation'];
                                $problemcasestudies = $rowdisasterresponsequery['problemcasestudies'];
                                $solution = $rowdisasterresponsequery['solution'];
                                $comments = $rowdisasterresponsequery['comments'];
                                $disasterresponseimg = $rowdisasterresponsequery['disasterresponseimg'];
                                $creatdate = $rowdisasterresponsequery['creatdate'];
                                $modifydate = $rowdisasterresponsequery['modifydate'];

                                $eligible = $rowdisasterresponsequery['eligible'];
                           ?>
                           <?php } ?>       
                        <div class="col-lg-12">
                            <?php 
                        $dry_count = "select * from disasterresponse where tag = 'Dry Ration Kits' and eligible = '1'";
                        $dry_count_run = mysqli_query($con, $dry_count);
                        $dry_count_row = mysqli_num_rows($dry_count_run);
                      ?> 
                           <div class="col-lg-3" style="float: left; background: #fcac4b; padding: 30px 21px; max-width: 48%; color: #fff;">Dry Ration Kits
                                <h3>No. <?= $dry_count_row ?></h3>
                           </div>
                           <?php 
                        $meals_count = "select * from disasterresponse where tag = 'Meals Served' and eligible = '1'";
                        $meals_count_run = mysqli_query($con, $meals_count);
                        $meals_count_row = mysqli_num_rows($meals_count_run);
                      ?> 
                           <div class="col-lg-3" style="float: right; background: #5ad05e;padding: 30px 21px; max-width: 48%; color: #fff;">Meals Served
                                <h3>No. <?= $meals_count_row ?></h3>
                           </div>
                        </div>
                        <?php 
                        $clothes_count = "select * from disasterresponse where tag = 'Clothes and Blankets' and eligible = '1'";
                        $clothes_count_run = mysqli_query($con, $clothes_count);
                        $clothes_count_row = mysqli_num_rows($clothes_count_run);
                      ?>
                        <div class="col-lg-12">
                           <div class="col-lg-3" style="float: left;background: #ff636c;padding: 30px 21px; margin-top: 20px; max-width: 48%; color: #fff;">Clothes and Blankets
                                <h3>No. <?= $clothes_count_row ?></h3>
                            </div>
                           
                        </div>
                    </div>

                </div>
                </div>
            </div>
    </div>
    </section>

  <?php include('include/footer.php')?>