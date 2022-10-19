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
                            <h4 class="header-title">Gallery</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="galleryadd.php" class="btn btn-primary mb-3">Add Gallery</a>
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Title</th>
                                        <th>Gallery Photo</th>
                                        <th>Description</th>
                                        <th>Create Date</th>
                                        <th>Modify Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selectgalleryquery = "select * from gallery";
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
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $title; ?></td>
                                        <td>
                                          <img src="../galleryphoto/<?= $galleryphoto; ?>" width="100" height="100">
                                        </td>
                                        <td><?= $description; ?></td>
                                        <td><?= $createdate; ?></td>
                                        <td><?= $modifydate; ?></td>

                                        <td>
                                            <a href="galleryedit.php?galleryedit=<?= $galleryid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                           <a href="edit/delete.php?galleryedit=<?= $galleryid; ?>" class="label label-sm label-danger">Delete</a>
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