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
                            <h4 class="header-title">Events</h4>
            <div class="row">
                <?php 
            $selecteventsquery = "select * from events";
                  $runeventsquery = mysqli_query($con,$selecteventsquery);
                   $serialNum = 1;
                   while ($roweventsquery = mysqli_fetch_array($runeventsquery)) {
                    $serialNumber = $serialNum++;
                    $eventsid = $roweventsquery['eventsid'];
                    
                    $eventsno = $roweventsquery['eventsno'];
                   
                    $eventtitle = $roweventsquery['eventtitle'];
                    $eventdate = $roweventsquery['eventdate'];
                    $eventsdescription = $roweventsquery['eventsdescription'];
                    $eventsphoto = $roweventsquery['eventsphoto'];
                    $eventsbudget = $roweventsquery['eventsbudget'];
                    $eventpartnername = $roweventsquery['eventpartnername'];
                    $eventpartnerdescription = $roweventsquery['eventpartnerdescription'];
                    $eventpartnerlogo = $roweventsquery['eventpartnerlogo'];
                    $creatdate = $roweventsquery['creatdate'];
                    $modifydate = $roweventsquery['modifydate'];
                    $status = $roweventsquery['status'];
               ?>
                <div class="col-md-6 mb-4">
                    <div class="card_with_image">
                        <div class="blog_card_image">
                            <a href="javascript:void(0);">
                                <img src="../eventsphoto/<?= $eventsphoto; ?>" alt="<?= $eventtitle; ?>" class="img-responsive ">
                            </a>
                        </div>
                        <div class="rt_post_data">
                            
                            <div class="blog_card_description">
                                <div class="blog_data">
                                    <h3><?= $eventtitle; ?></h3>
                                    <h3><?= $eventdate; ?></h3>
                                    <p><?= $eventsdescription; ?></p>
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