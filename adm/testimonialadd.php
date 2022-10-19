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
                            <h4 class="header-title">Testimonial Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label for="Date">Date</label>
                                                        <input type="date" class="form-control" id="date"  name="date">
                                                    </div>
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title"  name="title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="photo">Testimonial Photo</label>
                                                            <input type="file" class="form-control" id="testimonialphoto" name="testimonialphoto">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            
                                                            <textarea class="form-control" id="description" name="description"></textarea>
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
        $date = $_POST['date'];
        $title = $_POST['title'];
        $description = $_POST['description'];
       
        //-----------------------------------------//
        
       $selecttestimonialquerycount = "select * from testimonial";
       $runcount = mysqli_query($con,$selecttestimonialquerycount);

       $testimonialnumber = mysqli_num_rows($runcount) + 1;

       $testimonialphoto_testimonial = $_FILES['testimonialphoto'] ['name'];
       $testimonialphoto_tmp = $_FILES['testimonialphoto'] ['tmp_name'];

       $testimonialphoto = $testimonialnumber."_".$testimonialphoto_testimonial;

        
        
      move_uploaded_file($testimonialphoto_tmp, "../testimonialphoto/$testimonialphoto");
      
      

       //-----------------------------------------//

      $testimonialquery = "insert into testimonial(date, title, testimonialphoto, description)values('$date','$title', '$testimonialphoto', '$description')";
      
       if ($title == '') {
        echo "<script>alert('Please Enter testimonial Title')</script>";
       }else
          {
          mysqli_query($con, $testimonialquery);
          echo "<script>alert('Your Testimonial Details Added')</script>";
          echo "<script>window.open('testimonial.php','_self')</script>";
          
         }
     
     }

 ?>