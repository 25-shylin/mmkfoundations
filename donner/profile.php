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
            <div class="row">
                <!-- Primary table -->
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Welcome to "<?= $_SESSION['username']; ?>"</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                               <!-- <th>Action</th> -->
                                                 <th>User Name</th>
                                                 <th>Change User details</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                             <?php 
                                            $query = "select * from admin LIMIT 0,1";
                                            $run = mysqli_query($con,$query);
                                            while ($row = mysqli_fetch_array($run)) {
                                            $admin_id = $row['id'];
                                            $admin_name = $row['admin_name'];
                                        ?>

                                         
                                        <tr align="center" class="odd gradeX">
                                            <td><?= $admin_name; ?></td>
                                            
                                            
                                            
                                             <td align="center"><a href="changepassword.php?update=<?= $admin_id; ?>" class="btn btn-primary btn-sm">Change user details</a></td>
                                            
                                        </tr>

                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>

                                        
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
