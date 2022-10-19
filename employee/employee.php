<?php 
session_start();
 if (!isset($_SESSION['username'])) {
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
                            <h4 class="header-title">Employee</h4>
                            
                                
                                
                            <div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card_title mb-0">About Me</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="general-info">
                                                <?php 
                                        $selectemployeequery = "select * from employee where employeeno = '$pageuser'";
                                        
                                              $runemployeeQuery = mysqli_query($con,$selectemployeequery);
                                               $serialNum = 1;
                                               while ($rowemployeequery = mysqli_fetch_array($runemployeeQuery)) {
                                                $serialNumber = $serialNum++;
                                                $employeeid = $rowemployeequery['employeeid'];
                                                
                                                $employeeno = $rowemployeequery['employeeno'];
                                               $staffdesignation = $rowemployeequery['staffdesignation'];
                                                $staffname = $rowemployeequery['staffname'];
                                                $fathername = $rowemployeequery['fathername'];
                                                $dob = $rowemployeequery['dob'];
                                                $gender = $rowemployeequery['gender'];
                                                $city = $rowemployeequery['city'];
                                                $state = $rowemployeequery['state'];
                                                $pincode = $rowemployeequery['pincode'];
                                                $address = $rowemployeequery['address'];
                                                $mobileno = $rowemployeequery['mobileno'];
                                                $email = $rowemployeequery['email'];
                                                $workknowledge = $rowemployeequery['workknowledge'];
                                                $workingexperience = $rowemployeequery['workingexperience'];
                                                $dateofjoining = $rowemployeequery['dateofjoining'];
                                                
                                                $salarydetails = $rowemployeequery['salarydetails'];
                                                $accountsdetails= $rowemployeequery['accountsdetails'];

                                                $dayreport = $rowemployeequery['dayreport'];
                                                $username = $rowemployeequery['employeeno'];
                                                $password = $rowemployeequery['password'];
                                                $degree = $rowemployeequery['degree'];
                                                $nameofdegree = $rowemployeequery['nameofdegree'];
                                                $tenthcertification = $rowemployeequery['tenthcertification'];
                                                $twelfthcertificate = $rowemployeequery['twelfthcertificate'];
                                                $ugdegreecertificate = $rowemployeequery['ugdegreecertificate'];
                                                $pgdegreecertificate = $rowemployeequery['pgdegreecertificate'];
                                                $experiencecertificate = $rowemployeequery['experiencecertificate'];
                                                $aadhaarcard = $rowemployeequery['aadhaarcard'];
                                                $pancard = $rowemployeequery['pancard'];
                                                $staffimg = $rowemployeequery['staffimg'];
                                                $creatdate = $rowemployeequery['creatdate'];
                                                $modifydate = $rowemployeequery['modifydate'];
                                                $status = $rowemployeequery['status'];
                                           ?>
                                           
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="table-responsive">

                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Staff Designation</th>
                                                                    <td><?= $staffdesignation; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Staff Name</th>
                                                                    <td><?= $staffname; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Father Name</th>
                                                                    <td><?= $fathername; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">DOB</th>
                                                                    <td><?= $dob; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Gender</th>
                                                                    <td><?= $gender; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">city</th>
                                                                    <td><a href="#!"><?= $city; ?></a></td>
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
                                                                    <th scope="row">Address</th>
                                                                    <td><?= $address; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mobile Number</th>
                                                                    <td><?= $mobileno; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email id</th>
                                                                    <td><?= $email; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Working knowledge</th>
                                                                   <td><?= $workknowledge; ?></td>
                                                                 <tr>
                                                                    <th scope="row">Date of Joining</th>
                                                                    <td><?= $dateofjoining; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Salary details</th>
                                                                    <td><?= $salarydetails; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Account details</th>
                                                                    <td><?= $accountsdetails; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Day Report</th>
                                                                    <td><?= $dayreport; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Username</th>
                                                                    <td><?= $username; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Password</th>
                                                                    <td><?= $password; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Degree</th>
                                                                    <td><?= $degree; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Name of Degree</th>
                                                                    <td><?= $nameofdegree; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Tenth Certification</th>
                                                                    <td>
                                                                    <img src="../tenthcertification/<?= $tenthcertification; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                 <tr>
                                                                    <th scope="row">Twelfth Certificate</th>
                                                                    <td>
                                                                    <img src="../twelfthcertificate/<?= $twelfthcertificate; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">UG Degree Certificate</th>
                                                                    <td>
                                                                    <img src="../ugdegreecertificate/<?= $ugdegreecertificate; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">PG Degree Certificate</th>
                                                                    <td>
                                                                    <img src="../pgdegreecertificate/<?= $pgdegreecertificate; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Experience Certificate</th>
                                                                    <td>
                                                                    <img src="../experiencecertificate/<?= $experiencecertificate; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Aadhaar Card</th>
                                                                    <td>
                                                                    <img src="../aadhaarcard/<?= $aadhaarcard; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pan Card</th>
                                                                    <td>
                                                                    <img src="../pancard/<?= $pancard; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Staff Img</th>
                                                                    <td>
                                                                    <img src="../staffimg/<?= $staffimg; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                </tr>
                                                                
                                                                    <th scope="row">Action</th>
                                                                   <td>
                                                                        <a href="employeeedit.php?employeeedit=<?= $employeeid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                                                       
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