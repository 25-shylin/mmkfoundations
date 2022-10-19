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
    if (isset($_GET['testimonialedit'])) {
    $page_id = $_GET['testimonialedit'];
    $selecttestimonialquery = "select * from testimonial where testimonialid = '$page_id'";
    $runtestimonialquery = mysqli_query($con,$selecttestimonialquery);
     $serialNum = 1;
     while ($rowtestimonialquery = mysqli_fetch_array($runtestimonialquery)) {
      $serialNumber = $serialNum++;
      $testimonialid = $rowtestimonialquery['testimonialid'];
      $date = $rowtestimonialquery['date'];
      $title = $rowtestimonialquery['title'];
      $testimonialphoto = $rowtestimonialquery['testimonialphoto'];
      $description = $rowtestimonialquery['description'];
      $createdate = $rowtestimonialquery['createdate'];
      $modifydate = $rowtestimonialquery['modifydate'];
      $status = $rowtestimonialquery['status'];
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
                            <h4 class="header-title">Testimonial Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="testimonialedit.php?testimonialedit=<?= $testimonialid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                        <label for="date">date</label>
                                                        <input type="date" class="form-control" id="date"  name="date" value="<?= $date ?>">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title"  name="title" value="<?= $title ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="testimonialphoto">Testimonial Photo</label>
                                                            <img src="../testimonialphoto/<?= $testimonialphoto; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img" value="<?= $testimonialphoto; ?>">
                                                            <input type="hidden" name="testimonialphoto" value="<?= $testimonialphoto; ?>">
                                                            <input type="file" class="form-control" id="testimonialphoto" name="testimonialphoto">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            
                                                            <textarea class="form-control" id="description" name="description"><?= $description ?></textarea>
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
        $date = $_POST['date'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $modifydate = date("d/m/y");

        $old_img = $_POST['old_img'];
        //-----------------------------------------//
        
        $testimonialphoto_testimonial = $_FILES['testimonialphoto'] ['name'];
            if ($testimonialphoto_testimonial != '') {
                   $testimonialphoto_testimonial = $_FILES['testimonialphoto'] ['name'];
                   $testimonialphoto_tmp = $_FILES['testimonialphoto'] ['tmp_name'];
                   $testimonialphoto = $title."_".$testimonialphoto_testimonial;
             }
             else {
                $testimonialphoto = $old_img;
             }     

        
        
       if ($testimonialphoto_testimonial != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../testimonialphoto/$old_img");
                move_uploaded_file($testimonialphoto_tmp, "../testimonialphoto/$testimonialphoto");
             }
      
      

       //-----------------------------------------//

      $testimonialquery = "update testimonial set date = '$date', title = '$title', testimonialphoto = '$testimonialphoto', description = '$description', modifydate = '$modifydate' where testimonialid = '$testimonialid' ";
      
       if ($title == '') {
        echo "<script>alert('Please Enter testimonial Title')</script>";
       }else
          {
          mysqli_query($con, $testimonialquery);
          echo "<script>alert('Your testimonial Details Updated')</script>";
          echo "<script>window.open('testimonial.php','_self')</script>";
          
         }
     
     }

 ?>