<?php

session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
} else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
?>

    <div class="main-content page-content" style="background-color: #fff;">

        <!--==================================*
           Main Section
*====================================-->

        <div class="main-content-inner">
            <div class="row">
                <!-- Primary table -->
                <div class="col-12 mt-4">

                    <div class="card" style="box-shadow: none;">
                        <div class="card-body">
                            <h5 style="color: #00807c;">Employee - details</h5>
                         <a href="http://localhost/mmkfoundation/adm/employee.php" >  <button type="button" class="btn btn-outline-primary" style="border: 1px  solid #00807c;margin-left: 87%;width:100px;">Back</button></a>
                       
                            <div class="row">

                                <div class="col-sm-5" style="background-color:#f2f8f8;margin:10px;">
                                    <div class="row" style="padding: 35px;">
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <label>Employee no</label>
                                            </div>
                                            <div class="row">
                                                <label>Staff designation</label>
                                            </div>
                                            <div class="row">
                                                <label>Staff name</label>
                                            </div>
                                            <div class="row">
                                                <label>Father name</label>
                                            </div>
                                            <div class="row">
                                                <label>DOB</label>
                                            </div>
                                            <div class="row">
                                                <label>Gender</label>
                                            </div>
                                            <div class="row">
                                                <label>City</label>
                                            </div>
                                            <div class="row">
                                                <label>State</label>
                                            </div>
                                            <div class="row">
                                                <label>Pincode</label>
                                            </div>
                                            <div class="row">
                                                <label>Address</label>
                                            </div>
                                            <!-- <div class="row">
                                                <h4 style="margin-top: 20px;margin-bottom:20px;"> Account details</h4>
</label>
                                            </div> -->
                                            <div class="row">
                                                <label>Bank name</label>
                                            </div>
                                            <div class="row">
                                                <label>Type of account</label>
                                            </div>
                                            <div class="row">
                                                <label>Account number</label>
                                            </div>
                                          
                                           

                                        </div>
                                        <div class="col-sm-2">
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                           
                                          
                                          




                                        </div>
                                        <div class="col-sm-5">
                                            <?php
                                            $page_user = $_SESSION['admin_name'];
                                            if (isset($_GET['employeeedit'])) {
                                            $page_id = $_GET['employeeedit'];
                                              $selectemployeequery = "select * from employee where employeeid='$page_id'";
                                              
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
                                                $bankname = $rowemployeequery['bankname'];
                                                $typeofacc = $rowemployeequery['typeofacc'];
                                                $accnum = $rowemployeequery['accnum'];


                                            ?>
                                                    <div class="row">
                                                        <label><?= $employeeno; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $staffdesignation; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $staffname; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $fathername; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $dob; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $gender; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $city; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $state; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $pincode; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $address; ?></label>
                                                    </div>
                                                     <div class="row">
                                                        <label><?= $bankname; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $typeofacc; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $accnum; ?></label>
                                                    </div>
                                
                     

                                            <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6" style="background-color:#f2f8f8;margin:10px;">
                                    <div class="row" style="padding: 35px;">
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <label>Mobile no</label>
                                            </div>
                                            <div class="row">
                                                <label>Email</label>
                                            </div>
                                            <div class="row">
                                                <label>Work Knowledge</label>
                                            </div>
                                            <div class="row">
                                                <label>Work Experience</label>
                                            </div>
                                            <div class="row">
                                                <label>Date of joining</label>
                                            </div>
                                            <div class="row">
                                                <label>Salary Details</label>
                                            </div>
                                            <div class="row">
                                                <label>Day report</label>
                                            </div>
                                            <div class="row">
                                                <label>Password</label>
                                            </div>
                                            <div class="row">
                                                <label>Degree</label>
                                            </div>
                                            <div class="row">
                                                <label>Name of degree</label>
                                            </div>
                                           
                                            <div class="row">
                                                <label>IFSC</label>
                                            </div>
                                            <div class="row">
                                                <label>Branch</label>
                                            </div>

                                        </div>
                                        <div class="col-sm-2">
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                          




                                        </div>
                                        <div class="col-sm-5">
                                            <?php
                                            $page_user = $_SESSION['admin_name'];
                                            if (isset($_GET['employeeedit'])) {
                                            $page_id = $_GET['employeeedit'];
                                              $selectemployeequery = "select * from employee where employeeid='$page_id'";
                                              
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
                                                $ifsc = $rowemployeequery['ifsc'];
                                                $branch = $rowemployeequery['branch'];

                                            ?>
                                                    <div class="row">
                                                        <label><?= $mobileno; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $email; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $workknowledge; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $workingexperience; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $dateofjoining; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $salarydetails; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $dayreport; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $password; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $degree; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $nameofdegree; ?></label>
                                                    </div>
                                                     <div class="row">
                                                        <label><?= $ifsc; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $branch; ?></label>
                                                    </div>
                                                    
                                                    

                                            <?php
                                                }
                                            } ?>
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


    <?php } ?>