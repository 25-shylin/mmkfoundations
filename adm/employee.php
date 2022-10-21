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
                            <h4 class="header-title">Employee</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="employeeadd.php" class="btn btn-primary mb-3">Add Employee</a>
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Staff Designation</th>
                                        <th>Staff Name</th>
                                        <th>Father Name</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <!-- <th>city</th>
                                        <th>State</th>
                                        <th>Pincode</th>
                                        <th>Address</th> -->
                                        <th>Mobile Number</th>
                                        <th>Email id</th>
                                        <!-- <th>Working knowledge</th>
                                        <th>Working Experience</th>
                                        <th>Date of Joining</th>
                                        <th>Salary details</th>
                                        <th>Account details</th>
                                        <th>Day Report</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Degree</th>
                                        <th>Name of Degree</th>
                                        <th>Tenth Certification</th>
                                        <th>Twelfth Certificate</th>
                                        <th>UG Degree Certificate</th>
                                        <th>PG Degree Certificate</th>
                                        <th>Experience Certificate</th>
                                        <th>Aadhaar Card</th>
                                        <th>Pan Card</th>
                                        <th>Staff Img</th>
                                        <th>Creat Date</th>
                                        <th>Modify Date</th> -->
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selectemployeequery = "select * from employee";
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
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $staffdesignation; ?></td>
                                        <td><?= $staffname; ?></td>
                                        <td><?= $fathername; ?></td>
                                        <td><?= $dob; ?></td>
                                        <td><?= $gender; ?></td>
                                        <!-- <td><?= $city; ?></td>
                                        <td><?= $state; ?></td>
                                        <td><?= $pincode; ?></td>
                                        <td><?= $address; ?></td> -->
                                        <td><?= $mobileno; ?></td>
                                        <td><?= $email; ?></td>
                                        <!-- <td><?= $workknowledge; ?></td>
                                        <td><?= $workingexperience; ?></td>
                                        <td><?= $dateofjoining; ?></td>
                                        <td><?= $salarydetails; ?></td>
                                        <td><?= $accountsdetails; ?></td>
                                        <td><?= $dayreport; ?></td>
                                        <td><?= $employeeno; ?></td>
                                        <td><?= $password; ?></td>
                                        <td><?= $degree; ?></td>
                                        <td><?= $nameofdegree; ?></td>
                                        <td>
                                          <img src="../tenthcertification/<?= $tenthcertification; ?>" width="100" height="100">
                                        </td>
                                        <td>
                                          <img src="../twelfthcertificate/<?= $twelfthcertificate; ?>" width="100" height="100">
                                        </td>
                                        
                                        <td>
                                          <img src="../ugdegreecertificate/<?= $ugdegreecertificate; ?>" width="100" height="100">
                                        </td>
                                        
                                        <td>
                                          <img src="../pgdegreecertificate/<?= $pgdegreecertificate; ?>" width="100" height="100">
                                        </td>
                                        
                                        <td>
                                          <img src="../experiencecertificate/<?= $experiencecertificate; ?>" width="100" height="100">
                                        </td>
                                        <td>
                                          <img src="../aadhaarcard/<?= $aadhaarcard; ?>" width="100" height="100">
                                        </td>
                                        
                                        <td>
                                          <img src="../pancard/<?= $pancard; ?>" width="100" height="100">
                                        </td>
                                        
                                        <td>
                                          <img src="../staffimg/<?= $staffimg; ?>" width="100" height="100">
                                        </td>

                                        <td><?= $creatdate; ?></td>
                                        <td><?= $modifydate; ?></td>
                                        
                                        
                                         -->
                                        <td>
                                        <a href="employee-detail.php?employeeedit=<?= $employeeid; ?>" <i class="fa fa-eye" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
                                            <a href="employeeedit.php?employeeedit=<?= $employeeid; ?>" <i class="fa fa-pencil" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
                                           <a href="edit/delete.php?employeeedit=<?= $employeeid; ?>" <i class="fa fa-trash" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
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