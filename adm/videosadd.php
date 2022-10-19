<?php 
session_start();
 if (!isset($_SESSION['admin_name'])) {
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
            <div class="row">
                <!-- Primary table -->
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Video Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title"  name="title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="videolink">Video Link</label>
                                                            <input type="text" class="form-control" id="videolink"  name="videolink">
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

<?php }  ?>
<?php 
      
     if (isset($_POST['submit'])) {
        
        $title = $_POST['title'];
        $videolink = $_POST['videolink'];
       
        //-----------------------------------------//
        
       /*$selectgalleryquerycount = "select * from gallery";
       $runcount = mysqli_query($con,$selectgalleryquerycount);

       $gallerynumber = mysqli_num_rows($runcount) + 1;

       $galleryphoto_gallery = $_FILES['galleryphoto'] ['name'];
       $galleryphoto_tmp = $_FILES['galleryphoto'] ['tmp_name'];

       $galleryphoto = $gallerynumber."_".$galleryphoto_gallery;

        
        
      move_uploaded_file($galleryphoto_tmp, "../galleryphoto/$galleryphoto");*/
      
      

       //-----------------------------------------//

      $galleryquery = "insert into videos(title, videolink)values('$title', '$videolink')";
      
       if ($title == '') {
        echo "<script>alert('Please Enter Video Title')</script>";
       }else
          {
          mysqli_query($con, $galleryquery);
          echo "<script>alert('Your Video Details Added')</script>";
          echo "<script>window.open('videos.php','_self')</script>";
          
         }
     
     }

 ?>