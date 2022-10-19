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
                            <h4 class="header-title">News and Events Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="newstitle">News Title</label>
                                                            <input type="text" class="form-control" id="newstitle"  name="newstitle">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="newsdate">News Date</label>
                                                            <input type="date" class="form-control" id="newsdate"  name="newsdate">
                                                        </div>

                                                    
                                                        <div class="form-group">
                                                            <label for="newsdescription">News Description</label>
                                                            <input type="text" class="form-control" id="newsdescription" name="newsdescription">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="newsphoto">News Photo</label>
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

<?php }  ?>
<?php 
      
     if (isset($_POST['submit'])) {
        
        $newstitle = $_POST['newstitle'];
        $newsdate = $_POST['newsdate'];
        $newsdescription = $_POST['newsdescription'];
       
        //-----------------------------------------//
        
       $selectnewsquerycount = "select * from news";
       $runcount = mysqli_query($con,$selectnewsquerycount);

       $newsnumber = mysqli_num_rows($runcount) + 1;

       $newsphoto_news = $_FILES['newsphoto'] ['name'];
       $newsphoto_tmp = $_FILES['newsphoto'] ['tmp_name'];

       $newsphoto = $newsnumber."_".$newsphoto_news;

        
        
      move_uploaded_file($newsphoto_tmp, "../newsphoto/$newsphoto");
      
      

       //-----------------------------------------//

      $newsquery = "insert into news(newstitle, newsdate, newsdescription, newsphoto)values('$newstitle', '$newsdate', '$newsdescription', '$newsphoto')";
      
       if ($newstitle == '') {
        echo "<script>alert('Please Enter News Title')</script>";
       }else
          {
          mysqli_query($con, $newsquery);
          echo "<script>alert('Your News Details Added')</script>";
          echo "<script>window.open('news-and-events.php','_self')</script>";
          
         }
     
     }

 ?>