<?php 
session_start();
 if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    $pageuser = $_SESSION['username'];
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
                            
                            <div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card_title mb-0">About Me</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="general-info">
                                                <?php 
                                        $selectdonaterquery = "select * from donater where donaterno = '$pageuser'";
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
                                            <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="table-responsive">

                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">User Name</th>
                                                                    <td><?= $donaterno; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Donate Category</th>
                                                                    <td><?= $donatecategory; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Donate amount</th>
                                                                    <td><?= $donateamount; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">First Name</th>
                                                                    <td><?= $firstname; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Last Name</th>
                                                                    <td><?= $lastname; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td><a href="#!"><?= $email; ?></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Phone</th>
                                                                    <td><?= $phone; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Address</th>
                                                                    <td><?= $address; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">City</th>
                                                                    <td><?= $city; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">State</th>
                                                                    <td><?= $state; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pincode</th>
                                                                    <td><?= $pincode; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Country</th>
                                                                    <td><?= $country; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Nationality</th>
                                                                    <td><?= $nationality; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Do you want 80g tax benefit?</th>
                                                                    <td><?= $eightegtaxbenefit; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Date of Birth</th>
                                                                    <td><?= $dob; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Gender</th>
                                                                    <td><?= $gender; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">PAN(Only for India)</th>
                                                                    <td><?= $pan; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Password</th>
                                                                    <td><?= $password; ?></td>
                                                                </tr>
                                                                
                                                                    <th scope="row">Action</th>
                                                                   <td>
                                                                        <a href="donateredit.php?donateredit=<?= $donaterid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                           <!--  <a href="donner-bill.php?donaterprint=<?= $donaterid; ?>" class="label label-sm label-warning">Print</a><br><br> -->
                                                                       
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
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