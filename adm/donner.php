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
                                        <th>Donate Category</th>
                                        <th>Donate Amount</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <!-- <th>Phone</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Pincode</th>
                                        <th>Country</th>
                                        <th>Nationality</th>
                                        <th>Do you want 80g tax benefit?</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Pan</th>
                                        <th>User Name</th>
                                        <th>Password</th>
                                        <th>Creat Date</th>
                                        <th>Modify Date</th> -->
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
                                                $password = $rowdonaterquery['password'];
                                                $donatecategory = $rowdonaterquery['donatecategory'];
                                                $donateamount = $rowdonaterquery['donateamount'];
                                                $firstname = $rowdonaterquery['firstname'];
                                                $lastname = $rowdonaterquery['lastname'];
                                                $email = $rowdonaterquery['email'];
                                                $phone = $rowdonaterquery['phone'];
                                                $address = $rowdonaterquery['address'];
                                                $city= $rowdonaterquery['city'];
                                                $state= $rowdonaterquery['state'];
                                                $pincode= $rowdonaterquery['pincode'];
                                                $country= $rowdonaterquery['country'];
                                                $nationality= $rowdonaterquery['nationality'];
                                                $eightegtaxbenefit= $rowdonaterquery['eightegtaxbenefit'];
                                                $dob = $rowdonaterquery['dob'];
                                                $gender = $rowdonaterquery['gender'];
                                                $pan = $rowdonaterquery['pan'];
                                                $creatdate = $rowdonaterquery['creatdate'];
                                                $modifydate = $rowdonaterquery['modifydate'];
                                                $status = $rowdonaterquery['status'];
                                           ?>
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $donatecategory; ?></td>
                                        <td><?= $donateamount; ?></td>
                                        <td><?= $firstname; ?></td>
                                        <td><?= $lastname; ?></td>
                                        <td><?= $email; ?></td>
                                        <!-- <td><?= $phone; ?></td>
                                        <td><?= $address; ?></td>
                                        <td><?= $city; ?></td>
                                        <td><?= $state; ?></td>
                                        <td><?= $pincode; ?></td>
                                        <td><?= $country; ?></td>
                                        <td><?= $nationality; ?></td>
                                        <td><?= $eightegtaxbenefit; ?></td>
                                        <td><?= $dob; ?></td>
                                        <td><?= $gender; ?></td>
                                        <td><?= $pan; ?></td>
                                        <td><?= $donaterno; ?></td>
                                        <td><?= $password; ?></td>
                                        <td><?= $creatdate; ?></td>
                                        <td><?= $modifydate; ?></td> -->
                                        <td><?= $status; ?></td>
                                        <td>
                                            <a href="donner-details.php?donateredit=<?= $donaterid; ?>"<i class="fa fa-eye" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i> </a>
                                            <a href="donateredit.php?donateredit=<?= $donaterid; ?>"<i class="fa fa-pencil" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i> </a>
                                           <a href="edit/delete.php?donatersedit=<?= $donaterid; ?>" <i class="fa fa-trash" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
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