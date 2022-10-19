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
    if (isset($_GET['newsedit'])) {
      $page_id = $_GET['newsedit'];
      $selectnewsquery = "select * from news where newsid = '$page_id'";
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
                            <h4 class="header-title">News Edit Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="newsedit.php?newsedit=<?= $newsid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="newstitle">News newstitle</label>
                                                            <input type="text" class="form-control" id="newstitle"  name="newstitle" value="<?= $newstitle ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="newsdate">News Date</label>
                                                            <input type="date" class="form-control" id="newsdate"  name="newsdate" value="<?= $newsdate ?>">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="newsdescription">News newsdescription</label>
                                                            <input type="text" class="form-control" id="newsdescription" name="newsdescription" value="<?= $newsdescription ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="newsphoto">News Photo</label>
                                                            <img src="../newsphoto/<?= $newsphoto; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img" value="<?= $newsphoto; ?>">
                                                            <input type="hidden" name="newsphoto" value="<?= $newsphoto; ?>">
                                                            <input type="file" class="form-control" id="newsphoto" name="newsphoto">
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
        
        $newstitle = $_POST['newstitle'];
        $newsdate = $_POST['newsdate'];
        $newsdescription = $_POST['newsdescription'];
        $modifydate = date("d/m/y");

        $old_img = $_POST['old_img'];
        //-----------------------------------------//
        
        $newsphoto_news = $_FILES['newsphoto'] ['name'];
            if ($newsphoto_news != '') {
                   $newsphoto_news = $_FILES['newsphoto'] ['name'];
                   $newsphoto_tmp = $_FILES['newsphoto'] ['tmp_name'];
                   $newsphoto = $newstitle."_".$newsphoto_news;
             }
             else {
                $newsphoto = $old_img;
             }     

        
        
       if ($newsphoto_news != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../newsphoto/$old_img");
                move_uploaded_file($newsphoto_tmp, "../newsphoto/$newsphoto");
             }
      
      

       //-----------------------------------------//

      $newsyquery = "update news set newstitle = '$newstitle', newsdate = '$newsdate', newsdescription = '$newsdescription', newsphoto = '$newsphoto', modifydate = '$modifydate' where newsid = '$newsid' ";
      
       if ($newstitle == '') {
        echo "<script>alert('Please Enter News Title')</script>";
       }else
          {
          mysqli_query($con, $newsyquery);
          echo "<script>alert('Your News Details Updated')</script>";
          echo "<script>window.open('news-and-events.php','_self')</script>";
          
         }
     
     }

 ?>