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
                            <h4 class="header-title">Change Password</h4>
                            <div class="table-responsive datatable-primary">
                              <?php 
                                 if (isset($_GET['update'])) {
                                    $edit_id = $_GET['update'];

                                    $edit_query = "select * from admin where id='$edit_id'";
                                    $run_edit = mysqli_query($con,$edit_query);
                                    while ($edit_row = mysqli_fetch_array($run_edit)) {
                                         $edit_admin_id = $edit_row['id'];
                                        
                                         
                                    }
                                 }
                                 ?>
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="newusername">New User Name</label>
                                                            <input type="text" class="form-control" id="newusername"  name="newusername">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="newpassword">New Password</label>
                                                            <input type="password" class="form-control" id="newpassword"  name="newpassword">
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
      
        $update_id = $_GET['update'];
        $newusername = $_POST['newstitle'];
        $newpassword = $_POST['newsdate'];
        
       
        //-----------------------------------------//
        

      $changepasswordquery = "update admin set admin_name='$newusername', admin_password='$newpassword' where id='$update_id'";
      
       if ($newusername == '') {
        echo "<script>alert('Please Enter New User Name')</script>";
       }else
          {
          mysqli_query($con, $changepasswordquery);
          echo "<script>alert('Your Username and Password Details Updated')</script>";
          echo "<script>window.open('../logout.php','_self')</script>";
          
         }
     
     }

 ?>