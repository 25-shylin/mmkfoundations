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
                            <h4 class="header-title">Testimonial</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="testimonialadd.php" class="btn btn-primary mb-3">Add Testimonial</a>
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Testimonial Photo</th>
                                        <th>Description</th>
                                        <th>Create Date</th>
                                        <th>Modify Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selecttestimonialquery = "select * from testimonial";
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
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $date; ?></td>
                                        <td><?= $title; ?></td>
                                        <td>
                                          <img src="../testimonialphoto/<?= $testimonialphoto; ?>" width="100" height="100">
                                        </td>
                                        <td><?= $description; ?></td>
                                        <td><?= $createdate; ?></td>
                                        <td><?= $modifydate; ?></td>

                                        <td>
                                            <a href="testimonialedit.php?testimonialedit=<?= $testimonialid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                           <a href="edit/delete.php?testimonialedit=<?= $testimonialid; ?>" class="label label-sm label-danger">Delete</a>
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