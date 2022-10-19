<?php 
session_start();
 if (!isset($_SESSION['username'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
 ?>
    <!--==================================*
               Main Content Section
    *====================================-->
    <div class="main-content page-content">

        <!--==================================*
                   Main Section
        *====================================-->
        <div class="main-content-inner">
             <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">News and Events</h4>
            <div class="row">
                <?php 
                $selectnewsquery = "select * from news";
                      $runnewsquery = mysqli_query($con,$selectnewsquery);
                       $serialNum = 1;
                       while ($rownewsquery = mysqli_fetch_array($runnewsquery)) {
                        $serialNumber = $serialNum++;
                        $newsid = $rownewsquery['newsid'];
                        $newstitle = $rownewsquery['newstitle'];
                        $newsdate = $rownewsquery['newsdate'];
                        $newsdescription = $rownewsquery['newsdescription'];
                        $newsphoto = $rownewsquery['newsphoto'];
                        $createdate = $rownewsquery['createdate'];
                        $modifydate = $rownewsquery['modifydate'];
                        $status = $rownewsquery['status'];
                        
                   ?>
                <div class="col-md-6 mb-4">
                    <div class="card_with_image">
                        <div class="blog_card_image">
                            <a href="javascript:void(0);">
                                <img src="../newsphoto/<?= $newsphoto; ?>" alt="<?= $newstitle; ?>" class="img-responsive ">
                            </a>
                        </div>
                        <div class="rt_post_data">
                            
                            <div class="blog_card_description">
                                <div class="blog_data">
                                    <h3><?= $newstitle; ?></h3>
                                    <h3><?= $newsdate; ?></h3>
                                    <p><?= $newsdescription; ?></p>
                                    <a href="javascript:void(0)" class="btn btn-primary">
                                        Join Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            </div>
        </div>
        </div>
        
        <!--==================================*
                   End Main Section
        *====================================-->
    </div>

    
    <!--=================================*
           End Main Content Section
    *===================================-->

<?php include('includes/footer.php') ?>
<?php } ?>