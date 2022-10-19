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
    if (isset($_GET['galleryedit'])) {
    $page_id = $_GET['galleryedit'];
    $selectgalleryquery = "select * from gallery where galleryid = '$page_id'";
    $rungalleryquery = mysqli_query($con,$selectgalleryquery);
     $serialNum = 1;
     while ($rowgalleryquery = mysqli_fetch_array($rungalleryquery)) {
      $serialNumber = $serialNum++;
      $galleryid = $rowgalleryquery['galleryid'];
      $title = $rowgalleryquery['title'];
      $galleryphoto = $rowgalleryquery['galleryphoto'];
      $description = $rowgalleryquery['description'];
      $createdate = $rowgalleryquery['createdate'];
      $modifydate = $rowgalleryquery['modifydate'];
      $status = $rowgalleryquery['status'];
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
                            <h4 class="header-title">Gallery Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="galleryedit.php?galleryedit=<?= $galleryid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title"  name="title" value="<?= $title ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="galleryphoto">Gallery Photo</label>
                                                            <img src="../galleryphoto/<?= $galleryphoto; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img" value="<?= $galleryphoto; ?>">
                                                            <input type="hidden" name="galleryphoto" value="<?= $galleryphoto; ?>">
                                                            <input type="file" class="form-control" id="galleryphoto" name="galleryphoto">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <input type="text" class="form-control" id="description" name="description" value="<?= $description ?>">
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
        $description = $_POST['description'];
        $modifydate = date("d/m/y");

        $old_img = $_POST['old_img'];
        //-----------------------------------------//
        
        $galleryphoto_gallery = $_FILES['galleryphoto'] ['name'];
            if ($galleryphoto_gallery != '') {
                   $galleryphoto_gallery = $_FILES['galleryphoto'] ['name'];
                   $galleryphoto_tmp = $_FILES['galleryphoto'] ['tmp_name'];
                   $galleryphoto = $title."_".$galleryphoto_gallery;
             }
             else {
                $galleryphoto = $old_img;
             }     

        
        
       if ($galleryphoto_gallery != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../galleryphoto/$old_img");
                move_uploaded_file($galleryphoto_tmp, "../galleryphoto/$galleryphoto");
             }
      
      

       //-----------------------------------------//

      $galleryquery = "update gallery set title = '$title', galleryphoto = '$galleryphoto', description = '$description', modifydate = '$modifydate' where galleryid = '$galleryid' ";
      
       if ($title == '') {
        echo "<script>alert('Please Enter Gallery Title')</script>";
       }else
          {
          mysqli_query($con, $galleryquery);
          echo "<script>alert('Your Gallery Details Updated')</script>";
          echo "<script>window.open('gallery.php','_self')</script>";
          
         }
     
     }

 ?>