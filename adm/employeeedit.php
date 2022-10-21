<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
} else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    $page_user = $_SESSION['admin_name'];
    if (isset($_GET['employeeedit'])) {
        $page_id = $_GET['employeeedit'];
        $selectemployeequery = "select * from employee where employeeid='$page_id'";

        $runemployeeQuery = mysqli_query($con, $selectemployeequery);
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
             $accountsdetails = $rowemployeequery['accountsdetails'];
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
            $ifsc = $rowemployeequery['ifsc'];
            $branch = $rowemployeequery['branch'];
  
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
                                    <h4 class="header-title">Employee Edit Details</h4>
                                    <div class="table-responsive datatable-primary">
                                        <div class="col-md-12">
                                            <div class="card-box">

                                                <form method="post" action="employeeedit.php?employeeedit=<?= $employeeid; ?>" enctype="multipart/form-data">
                                                    <div class="row">


                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="employeeno">Employee No</label>
                                                                <input type="text" class="form-control" id="employeeno" name="employeeno" value="<?= $employeeno ?>" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="staffdesignation">Staff Designation</label>
                                                                <input type="text" class="form-control" id="staffdesignation" name="staffdesignation" value="<?= $staffdesignation ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="staffname">Staff Name</label>
                                                                <input type="text" class="form-control" id="staffname" name="staffname" value="<?= $staffname ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fathername">Father Name</label>
                                                                <input type="text" class="form-control" id="fathername" name="fathername" value="<?= $fathername ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="dob">Date of Birth</label>
                                                                <input type="date" class="form-control" id="dob" name="dob" value="<?= $dob ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="gender">Gender</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="<?= $gender ?>"><?= $gender ?></option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <input type="text" class="form-control" id="city" name="city" value="<?= $city ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input type="text" class="form-control" id="state" name="state" value="<?= $state ?>">
                                                            </div>



                                                            <div class="form-group">
                                                                <label for="pincode">Pincode</label>
                                                                <input type="text" class="form-control" id="pincode" name="pincode" value="<?= $pincode ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control" id="address" name="address" value="<?= $address ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Bank name</label>
                                                                <input type="text" class="form-control" id="address" name="address" value="<?= $bankname ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Type of account</label>
                                                                <input type="text" class="form-control" id="address" name="address" value="<?= $typeofacc ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Account number</label>
                                                                <input type="text" class="form-control" id="address" name="address" value="<?= $accnum ?>">
                                                            </div>
                                                          
                                                            <div class="form-group">
                                                                <label for="tenthcertification">Tenth Certification</label>
                                                                <img src="../tenthcertification/<?= $tenthcertification; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img" value="<?= $tenthcertification; ?>">
                                                                <input type="hidden" name="tenthcertification" value="<?= $tenthcertification; ?>">
                                                                <input type="file" class="form-control" id="tenthcertification" name="tenthcertification">
                                                            </div>



                                                            <div class="form-group">
                                                                <label for="twelfthcertificate">Twelfth Certificate</label>
                                                                <img src="../twelfthcertificate/<?= $twelfthcertificate; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img1" value="<?= $twelfthcertificate; ?>">
                                                                <input type="hidden" name="twelfthcertificate" value="<?= $twelfthcertificate; ?>">
                                                                <input type="file" class="form-control" id="twelfthcertificate" name="twelfthcertificate">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="ugdegreecertificate">UG Degree Certificate</label>
                                                                <img src="../ugdegreecertificate/<?= $ugdegreecertificate; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img2" value="<?= $ugdegreecertificate; ?>">
                                                                <input type="hidden" name="ugdegreecertificate" value="<?= $ugdegreecertificate; ?>">
                                                                <input type="file" class="form-control" id="ugdegreecertificate" name="ugdegreecertificate">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="pgdegreecertificate">PG Degree Certificate</label>
                                                                <img src="../pgdegreecertificate/<?= $pgdegreecertificate; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img3" value="<?= $pgdegreecertificate; ?>">
                                                                <input type="hidden" name="pgdegreecertificate" value="<?= $pgdegreecertificate; ?>">
                                                                <input type="file" class="form-control" id="pgdegreecertificate" name="pgdegreecertificate">
                                                            </div>
                                                             

                                                        </div>
                                                        <div class="col-md-1">

                                                        </div>
                                                        <div class="col-md-5">

                                                        <div class="form-group">
                                                                <label for="mobileno">Mobile No</label>
                                                                <input type="text" class="form-control" id="mobileno" name="mobileno" value="<?= $mobileno ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="workknowledge">Work Knowledge</label>
                                                                <input type="text" class="form-control" id="workknowledge" name="workknowledge" value="<?= $workknowledge ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="workingexperience">Working Experience</label>
                                                                <input type="text" class="form-control" id="workingexperience" name="workingexperience" value="<?= $workingexperience ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="dateofjoining">Date of Joining</label>
                                                                <input type="date" class="form-control" id="dateofjoining" name="dateofjoining" value="<?= $dateofjoining ?>">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label for="salarydetails">Salary Details</label>
                                                                <input type="text" class="form-control" id="salarydetails" name="salarydetails" value="<?= $salarydetails ?>">
                                                            </div>

                                                            <!-- <div class="form-group">
                                                                <label for="accountsdetails">Accounts Details</label>
                                                                <input type="text" class="form-control" id="accountsdetails" name="accountsdetails" value="<?= $accountsdetails ?>">
                                                            </div> -->

                                                            <div class="form-group">
                                                                <label for="dayreport">Day Report</label>
                                                                <input type="text" class="form-control" id="dayreport" name="dayreport" value="<?= $dayreport ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="text" class="form-control" id="password" name="password" value="<?= $password ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="degree">Degree</label>
                                                                <input type="text" class="form-control" id="degree" name="degree" value="<?= $degree ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nameofdegree">Name of Degree</label>
                                                                <input type="text" class="form-control" id="nameofdegree" name="nameofdegree" value="<?= $nameofdegree ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nameofdegree">IFSC code</label>
                                                                <input type="text" class="form-control" id="nameofdegree" name="nameofdegree" value="<?= $ifsc ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nameofdegree">Branch</label>
                                                                <input type="text" class="form-control" id="nameofdegree" name="nameofdegree" value="<?= $branch ?>">
                                                            </div>
                                                       
                                                       
                                                        

                                                          
                                                     
                                                            <div class="form-group">
                                                                <label for="experiencecertificate">Experience Certificate</label>
                                                                <img src="../experiencecertificate/<?= $experiencecertificate; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img4" value="<?= $experiencecertificate; ?>">
                                                                <input type="hidden" name="experiencecertificate" value="<?= $experiencecertificate; ?>">
                                                                <input type="file" class="form-control" id="experiencecertificate" name="experiencecertificate">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="aadhaarcard">Aadhaarcard</label>
                                                                <img src="../aadhaarcard/<?= $aadhaarcard; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img5" value="<?= $aadhaarcard; ?>">
                                                                <input type="hidden" name="aadhaarcard" value="<?= $aadhaarcard; ?>">
                                                                <input type="file" class="form-control" id="aadhaarcard" name="aadhaarcard">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="pancard">Pancard</label>
                                                                <img src="../pancard/<?= $pancard; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img6" value="<?= $pancard; ?>">
                                                                <input type="hidden" name="pancard" value="<?= $pancard; ?>">
                                                                <input type="file" class="form-control" id="pancard" name="pancard">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="staffimg">Staff Img</label>
                                                                <img src="../staffimg/<?= $staffimg; ?>" width="100" height="100" style="margin-left:380px;">
                                                                <input type="hidden" name="old_img7" value="<?= $staffimg; ?>">
                                                                <input type="hidden" name="staffimg" value="<?= $staffimg; ?>">
                                                                <input type="file" class="form-control" id="staffimg" name="staffimg">
                                                            </div>

                                                        </div>
                                                            <div class="form-group">

                                                                <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="width: 100px;">
                                                                <a href="http://localhost/mmkfoundation/adm/employee.php"> <input type="button" class="btn btn-primary" value="Back" style="margin-right: 10px;width:100px;"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                        </div>
                                                    </div>
                                            </div>


                                            </form>
                                        </div>
                                    </div><!-- end col -->
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
<?php }
    }
} ?>

<?php


if (isset($_POST['submit'])) {
    $employeeno = $_POST['employeeno'];
    $staffdesignation = $_POST['staffdesignation'];
    $staffname = $_POST['staffname'];
    $fathername = $_POST['fathername'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $workknowledge = $_POST['workknowledge'];
    $workingexperience = $_POST['workingexperience'];
    $dateofjoining = $_POST['dateofjoining'];
    $salarydetails = $_POST['salarydetails'];
    $accountsdetails = $_POST['accountsdetails'];
    $dayreport = $_POST['dayreport'];
    $password = $_POST['password'];
    $degree = $_POST['degree'];
    $nameofdegree = $_POST['nameofdegree'];
    $tenthcertification = $_POST['tenthcertification'];
    $twelfthcertificate = $_POST['twelfthcertificate'];
    $ugdegreecertificate = $_POST['ugdegreecertificate'];
    $pgdegreecertificate = $_POST['pgdegreecertificate'];
    $experiencecertificate = $_POST['experiencecertificate'];
    $aadhaarcard = $_POST['aadhaarcard'];
    $pancard = $_POST['pancard'];
    $staffimg = $_POST['staffimg'];
    $modifydate = date("d/m/y");

    $old_img = $_POST['old_img'];
    $old_img1 = $_POST['old_img1'];
    $old_img2 = $_POST['old_img2'];
    $old_img3 = $_POST['old_img3'];
    $old_img4 = $_POST['old_img4'];
    $old_img5 = $_POST['old_img5'];
    $old_img6 = $_POST['old_img6'];
    $old_img7 = $_POST['old_img7'];

    //-----------------------------------------//

    $tenthcertification_employee = $_FILES['tenthcertification']['name'];
    if ($tenthcertification_employee != '') {
        $tenthcertification_employee = $_FILES['tenthcertification']['name'];
        $tenthcertification_tmp = $_FILES['tenthcertification']['tmp_name'];
        $tenthcertification = $employeeno . "_" . $tenthcertification_employee;
    } else {
        $tenthcertification = $old_img;
    }
    //-----------------------------------------//

    //-----------------------------------------//

    $twelfthcertificate_employee = $_FILES['twelfthcertificate']['name'];
    if ($twelfthcertificate_employee != '') {
        $twelfthcertificate_employee = $_FILES['twelfthcertificate']['name'];
        $twelfthcertificate_tmp = $_FILES['twelfthcertificate']['tmp_name'];
        $twelfthcertificate = $employeeno . "_" . $twelfthcertificate_employee;
    } else {
        $twelfthcertificate = $old_img1;
    }
    //-----------------------------------------//

    //-----------------------------------------//

    $ugdegreecertificate_employee = $_FILES['ugdegreecertificate']['name'];
    if ($ugdegreecertificate_employee != '') {
        $ugdegreecertificate_employee = $_FILES['ugdegreecertificate']['name'];
        $ugdegreecertificate_tmp = $_FILES['ugdegreecertificate']['tmp_name'];
        $ugdegreecertificate = $employeeno . "_" . $ugdegreecertificate_employee;
    } else {
        $ugdegreecertificate = $old_img2;
    }
    //-----------------------------------------//

    //-----------------------------------------//

    $pgdegreecertificate_employee = $_FILES['pgdegreecertificate']['name'];
    if ($pgdegreecertificate_employee != '') {
        $pgdegreecertificate_employee = $_FILES['pgdegreecertificate']['name'];
        $pgdegreecertificate_tmp = $_FILES['pgdegreecertificate']['tmp_name'];
        $pgdegreecertificate = $employeeno . "_" . $pgdegreecertificate_employee;
    } else {
        $pgdegreecertificate = $old_img3;
    }
    //-----------------------------------------//

    //-----------------------------------------//

    $experiencecertificate_employee = $_FILES['experiencecertificate']['name'];
    if ($experiencecertificate_employee != '') {
        $experiencecertificate_employee = $_FILES['experiencecertificate']['name'];
        $experiencecertificate_tmp = $_FILES['experiencecertificate']['tmp_name'];
        $experiencecertificate = $employeeno . "_" . $experiencecertificate_employee;
    } else {
        $experiencecertificate = $old_img4;
    }
    //-----------------------------------------//


    //-----------------------------------------//

    $aadhaarcard_employee = $_FILES['aadhaarcard']['name'];
    if ($aadhaarcard_employee != '') {
        $aadhaarcard_employee = $_FILES['aadhaarcard']['name'];
        $aadhaarcard_tmp = $_FILES['aadhaarcard']['tmp_name'];
        $aadhaarcard = $employeeno . "_" . $aadhaarcard_employee;
    } else {
        $aadhaarcard = $old_img5;
    }
    //-----------------------------------------//

    //-----------------------------------------//

    $pancard_employee = $_FILES['pancard']['name'];
    if ($pancard_employee != '') {
        $pancard_employee = $_FILES['pancard']['name'];
        $pancard_tmp = $_FILES['pancard']['tmp_name'];
        $pancard = $employeeno . "_" . $pancard_employee;
    } else {
        $pancard = $old_img6;
    }
    //-----------------------------------------//

    //-----------------------------------------//

    $staffimg_employee = $_FILES['staffimg']['name'];
    if ($staffimg_employee != '') {
        $staffimg_employee = $_FILES['staffimg']['name'];
        $staffimg_tmp = $_FILES['staffimg']['tmp_name'];
        $staffimg = $employeeno . "_" . $staffimg_employee;
    } else {
        $staffimg = $old_img7;
    }
    //-----------------------------------------//


    if ($tenthcertification_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../tenthcertification/$old_img");
        move_uploaded_file($tenthcertification_tmp, "../tenthcertification/$tenthcertification");
    }

    if ($twelfthcertificate_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../twelfthcertificate/$old_img1");
        move_uploaded_file($twelfthcertificate_tmp, "../twelfthcertificate/$twelfthcertificate");
    }

    if ($ugdegreecertificate_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../ugdegreecertificate/$old_img2");
        move_uploaded_file($ugdegreecertificate_tmp, "../ugdegreecertificate/$ugdegreecertificate");
    }

    if ($pgdegreecertificate_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../pgdegreecertificate/$old_img3");
        move_uploaded_file($pgdegreecertificate_tmp, "../pgdegreecertificate/$pgdegreecertificate");
    }

    if ($experiencecertificate_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../experiencecertificate/$old_img4");
        move_uploaded_file($experiencecertificate_tmp, "../experiencecertificate/$experiencecertificate");
    }

    if ($aadhaarcard_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../aadhaarcard/$old_img5");
        move_uploaded_file($aadhaarcard_tmp, "../aadhaarcard/$aadhaarcard");
    }

    if ($pancard_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../pancard/$old_img6");
        move_uploaded_file($pancard_tmp, "../pancard/$pancard");
    }

    if ($staffimg_employee != '') {
        unlink($_SERVER['DOCUMENT_ROOT'] . "../staffimg/$old_img7");
        move_uploaded_file($staffimg_tmp, "../staffimg/$staffimg");
    }

    $employeequery = "update employee set staffdesignation = '$staffdesignation', staffname = '$staffname', fathername = '$fathername', dob = '$dob', gender = '$gender', city = '$city', state = '$state', pincode = '$pincode', address = '$address', mobileno = '$mobileno', email = '$email', workknowledge = '$workknowledge', workingexperience = '$workingexperience', dateofjoining = '$dateofjoining', salarydetails = '$salarydetails', accountsdetails = '$accountsdetails', dayreport = '$dayreport', password = '$password', degree = '$degree', nameofdegree = '$nameofdegree', tenthcertification = '$tenthcertification', twelfthcertificate = '$twelfthcertificate', ugdegreecertificate = '$ugdegreecertificate', pgdegreecertificate = '$pgdegreecertificate', experiencecertificate = '$experiencecertificate', aadhaarcard = '$aadhaarcard', pancard = '$pancard', staffimg = '$staffimg', modifydate = '$modifydate' where employeeid = '$employeeid'";

    if ($staffdesignation == '') {
        echo "<script>alert('Please Enter Staff Designation')</script>";
    } else {
        mysqli_query($con, $employeequery);
        echo "<script>alert('Your Employee Details Updated')</script>";
        echo "<script>window.open('employee.php','_self')</script>";
    }
}

?>