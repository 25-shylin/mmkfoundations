<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/awareness-camps.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Testimonial</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Testimonial</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                 <div class="section-title">
                    <h3>Testimonial</h3>
                </div>
                <?php 
                                   
                              $testimonialquery = "select * from testimonial ORDER BY testimonialid DESC LIMIT 4";
                              $runtestimonialquery = mysqli_query($con,$testimonialquery);
                               $serialNum = 1;
                               while ($rowtestimonialquery = mysqli_fetch_array($runtestimonialquery)) {
                                $serialNumber = $serialNum++;
                                $testimonialid = $rowtestimonialquery['testimonialid'];

                                $date = $rowtestimonialquery['date'];
                                $phpdate1 = strtotime( $date );
                                $date2 = date('d-m-y', $phpdate1);
                                $title = $rowtestimonialquery['title'];
                                
                                $testimonialphoto = $rowtestimonialquery['testimonialphoto'];
                                $description = $rowtestimonialquery['description'];
                                $creatdate = $rowtestimonialquery['createdate'];
                                $phpdate = strtotime( $creatdate );
                                $date1 = date('d-m-y', $phpdate);

                                $modifydate = $rowtestimonialquery['modifydate'];
                                /*$phpmodDate = strtotime( $modDate );
                                $modDate1 = date('d-m-y', $phpmodDate);*/
                           ?>           
                <div class="row" style="margin: 30px 0;">
                    <div class="col-lg-4">
                        <img loading="lazy" class="img-fluid" src="testimonialphoto/<?= $testimonialphoto ?>" alt="<?= $title ?>">
                    </div>
                    <div class="col-lg-8">
                        <div class="contents">
                            <div class="section-title">
                                <h5>Name : <?= $title ?></h5><br>
                                <h5>Date : <?= $date2 ?></h5><br>
                            </div>
                           
                            <div class="text">
                                <p><?= $description ?>
                                </p>
                                
                            </div>

                            <!-- <a href="education.php" class="btn btn-style-one">Read more</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </section>

        <?php include('include/footer.php')?>