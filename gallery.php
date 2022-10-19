<?php include('include/header.php')?>
        <!--Page Title-->
        <section class="page-title text-center" style="background-image:url(images/background/awareness-camps.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Gallery</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index.php">Home &nbsp;/</a>
                        </li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Our Story -->
        <section class="story">
            <div class="container">
                 <div class="section-title">
                    <h3>Gallery</h3>
                </div>
                <?php 
                                   
                      $galleryquery = "select * from gallery ";
                      $rungalleryquery = mysqli_query($con,$galleryquery);
                       $serialNum = 1;
                       while ($rowgalleryquery = mysqli_fetch_array($rungalleryquery)) {
                        $serialNumber = $serialNum++;
                        $galleryid = $rowgalleryquery['galleryid'];
                        $tag = $rowgalleryquery['tag'];
                        $title = $rowgalleryquery['title'];
                        $galleryphoto = $rowgalleryquery['galleryphoto'];
                        $description = $rowgalleryquery['description'];
                        $createdate = $rowgalleryquery['createdate'];
                        $modifydate = $rowgalleryquery['modifydate'];
                        $status = $rowgalleryquery['status'];
                        $phpdate = strtotime( $createdate );
                        $date1 = date('d-m-y', $phpdate);

                        /*$modifydate = $rowgalleryquery['modifydate'];*/
                        /*$phpmodDate = strtotime( $modDate );
                        $modDate1 = date('d-m-y', $phpmodDate);*/
                   ?>    
                    <h5><?= $tag ?></h5>          
                <div class="row" style="margin: 30px 0;">

                    <div class="col-lg-4">
                        <img loading="lazy" class="img-fluid" src="galleryphoto/<?= $galleryphoto ?>" alt="<?= $title ?>">
                    </div>
                    <div class="col-lg-8">

                        <div class="contents">
                            
                            <div class="section-title">
                                <h5>Gallery Name : <?= $title ?></h5>
                                <h5>Gallery Date : <?= $date1 ?></h5>
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