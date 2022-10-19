<?php 
session_start();
 if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    $page_user = $_SESSION['admin_name'];
    if (isset($_GET['videosedit'])) {
    $page_id = $_GET['videosedit'];
    $selectvideosquery = "select * from videos where videosid = '$page_id'";
    $runvideosquery = mysqli_query($con,$selectvideosquery);
     $serialNum = 1;
     while ($rowvideosquery = mysqli_fetch_array($runvideosquery)) {
      $serialNumber = $serialNum++;
      $videosid = $rowvideosquery['videosid'];
      $title = $rowvideosquery['title'];
      $videolink = $rowvideosquery['videolink'];
      $createdate = $rowvideosquery['createdate'];
      $modifydate = $rowvideosquery['modifydate'];
      $status = $rowvideosquery['status'];
    ?>

    <!--==================================*
               Main Content Section
    *====================================-->
    <div class="main-content page-content">

        <!--==================================*
                   Main Section
        *====================================-->
        <div class="main-content-inner">
            <div class="row">
                <!-- Primary table -->
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">videos Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="videosedit.php?videosedit=<?= $videosid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title"  name="title" value="<?= $title ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Video Link</label>
                                                            <input type="text" class="form-control" id="videolink"  name="videolink" value="<?= $videolink ?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            
                                                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                </div>
                                          </div>
                                        </div>

                                        
                                    </form>
                                </div>
                            </div><!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Primary table -->
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

<?php } } } ?>
<?php 
      
     if (isset($_POST['submit'])) {
        
        $title = $_POST['title'];
        $videolink = $_POST['videolink'];
        $modifydate = date("d/m/y");

        /*$old_img = $_POST['old_img'];*/
        //-----------------------------------------//
        
       /* $videosphoto_videos = $_FILES['videosphoto'] ['name'];
            if ($videosphoto_videos != '') {
                   $videosphoto_videos = $_FILES['videosphoto'] ['name'];
                   $videosphoto_tmp = $_FILES['videosphoto'] ['tmp_name'];
                   $videosphoto = $title."_".$videosphoto_videos;
             }
             else {
                $videosphoto = $old_img;
             }     

        
        
       if ($videosphoto_videos != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../videosphoto/$old_img");
                move_uploaded_file($videosphoto_tmp, "../videosphoto/$videosphoto");
             }
      */
      

       //-----------------------------------------//

      $videosquery = "update videos set title = '$title', videolink = '$videolink', modifydate = '$modifydate' where videosid = '$videosid' ";
      
       if ($title == '') {
        echo "<script>alert('Please Enter videos Title')</script>";
       }else
          {
          mysqli_query($con, $videosquery);
          echo "<script>alert('Your videos Details Updated')</script>";
          echo "<script>window.open('videos.php','_self')</script>";
          
         }
     
     }

 ?>