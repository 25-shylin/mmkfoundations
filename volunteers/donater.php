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
                            <h4 class="header-title">Donner</h4>
                            <div class="table-responsive datatable-primary">
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Donater No</th>
                                        <th>Donate Category</th>
                                        <th>Donate Amount</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Pan</th>
                                        <th>Creat Date</th>
                                        <th>Modify Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selectdonaterquery = "select * from donater";
                                              $rundonaterQuery = mysqli_query($con,$selectdonaterquery);
                                               $serialNum = 1;
                                               while ($rowdonaterquery = mysqli_fetch_array($rundonaterQuery)) {
                                                $serialNumber = $serialNum++;
                                                $donaterid = $rowdonaterquery['donaterid'];
                                                
                                                $donaterno = $rowdonaterquery['donaterno'];
                                               
                                                $donatecategory = $rowdonaterquery['donatecategory'];
                                                $donateamount = $rowdonaterquery['donateamount'];
                                                $name = $rowdonaterquery['name'];
                                                $email = $rowdonaterquery['email'];
                                                $phone = $rowdonaterquery['phone'];
                                                $address = $rowdonaterquery['address'];
                                                $country= $rowdonaterquery['country'];
                                                $dob = $rowdonaterquery['dob'];
                                                $gender = $rowdonaterquery['gender'];
                                                $pan = $rowdonaterquery['pan'];
                                                $creatdate = $rowdonaterquery['creatdate'];
                                                $modifydate = $rowdonaterquery['modifydate'];
                                                $status = $rowdonaterquery['status'];
                                           ?>
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $donaterno; ?></td>
                                        <td><?= $donatecategory; ?></td>
                                        <td><?= $donateamount; ?></td>
                                        <td><?= $name; ?></td>
                                        <td><?= $email; ?></td>
                                        <td><?= $phone; ?></td>
                                        <td><?= $address; ?></td>
                                        <td><?= $country; ?></td>
                                        <td><?= $dob; ?></td>
                                        <td><?= $gender; ?></td>
                                        <td><?= $pan; ?></td>
                                        <td><?= $creatdate; ?></td>
                                        <td><?= $modifydate; ?></td>
                                        <td><?= $status; ?></td>
                                        <td>
                                            <a href="donateredit.php?donateredit=<?= $donaterid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                           <a href="edit/delete.php?donatersedit=<?= $donaterid; ?>" class="label label-sm label-danger">Delete</a>
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