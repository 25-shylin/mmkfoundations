<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/awareness-camps.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Awareness Camps</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Awareness Camps</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                 <div class="section-title">
                    <h3>Events</h3>
                </div>
                <?php 
                                   
                          $eventsquery = "select * from events ORDER BY eventsid DESC LIMIT 4";
                          $runeventsquery = mysqli_query($con,$eventsquery);
                           $serialNum = 1;
                           while ($roweventsquery = mysqli_fetch_array($runeventsquery)) {
                            $serialNumber = $serialNum++;
                            $eventsid = $roweventsquery['eventsid'];
                            $eventsno = $roweventsquery['eventsno'];
                            $eventtitle = $roweventsquery['eventtitle'];
                            $eventdate = $roweventsquery['eventdate'];
                            $eventsphoto = $roweventsquery['eventsphoto'];
                            $eventsdescription = $roweventsquery['eventsdescription'];
                            $creatdate = $roweventsquery['creatdate'];
                            $phpdate = strtotime( $creatdate );
                            $date1 = date('d-m-y', $phpdate);

                            $modifydate = $roweventsquery['modifydate'];
                            /*$phpmodDate = strtotime( $modDate );
                            $modDate1 = date('d-m-y', $phpmodDate);*/
                       ?>            
                <div class="row" style="margin: 30px 0;">
                    <div class="col-lg-4">
                        <img loading="lazy" class="img-fluid" src="eventsphoto/<?= $eventsphoto ?>" alt="<?= $eventtitle ?>">
                    </div>
                    <div class="col-lg-8">
                        <div class="contents">
                            <div class="section-title">
                                <h5>Event Name : <?= $eventtitle ?></h5><br>
                                <h5>Event Date : <?= $eventdate ?></h5><br>
                            </div>
                           
                            <div class="text">
                                <p><?= $eventsdescription ?>
                                </p>
                                
                            </div>

                            <a href="education.php" class="btn btn-style-one">Read more</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </section>

        <?php include('include/footer.php')?>