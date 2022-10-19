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
                            <h4 class="header-title">Videos</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="videosadd.php" class="btn btn-primary mb-3">Add Videos</a>
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Title</th>
                                        <th>Videos Link</th>
                                        <th>Create Date</th>
                                        <th>Modify Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selectvideosquery = "select * from videos";
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
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $title; ?></td>
                                        <td><?= $videolink; ?></td>
                                        <td><?= $createdate; ?></td>
                                        <td><?= $modifydate; ?></td>

                                        <td>
                                            <a href="videosedit.php?videosedit=<?= $videosid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                           <a href="edit/delete.php?videosedit=<?= $videosid; ?>" class="label label-sm label-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
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
<?php } ?>