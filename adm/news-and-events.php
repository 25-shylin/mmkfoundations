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
                            <h4 class="header-title">News and Events</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="newsadd.php" class="btn btn-primary mb-3">Add News and Events</a>
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>News Title</th>
                                        <th>News Date</th>
                                        <th>News Description</th>
                                        <th>News Photo</th>
                                        <th>Create Date</th>
                                        <th>Modify Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selectnewsquery = "select * from news";
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
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $newstitle; ?></td>
                                        <td><?= $newsdate; ?></td>
                                        <td><?= $newsdescription; ?></td>
                                        <td>
                                          <img src="../newsphoto/<?= $newsphoto; ?>" width="100" height="100">
                                        </td>
                                        <td><?= $createdate; ?></td>
                                        <td><?= $modifydate; ?></td>

                                        <td>
                                            <a href="newsedit.php?newsedit=<?= $newsid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                           <a href="edit/delete.php?newsedit=<?= $newsid; ?>" class="label label-sm label-danger">Delete</a>
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