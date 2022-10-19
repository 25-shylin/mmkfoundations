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
                            <h4 class="header-title">Employee Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="staffdesignation">Staff Designation</label>
                                                            <input type="text" class="form-control" id="staffdesignation"  name="staffdesignation">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="staffname">Staff Name</label>
                                                            <input type="text" class="form-control" id="staffname"  name="staffname">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fathername">Father Name</label>
                                                            <input type="text" class="form-control" id="fathername" name="fathername">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="dob">Date of Birth</label>
                                                            <input type="date" class="form-control" id="dob" name="dob">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select name="gender" class="form-control">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                          </select>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city" name="city">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="state">State</label>
                                                            <input type="text" class="form-control" id="state" name="state">
                                                        </div>
                                                    
                                                        
                                                    
                                                        <div class="form-group">
                                                            <label for="pincode">Pincode</label>
                                                            <input type="text" class="form-control" id="pincode" name="pincode">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control" id="address" name="address">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="mobileno">Mobile No</label>
                                                            <input type="text" class="form-control" id="mobileno" name="mobileno">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="workknowledge">Work Knowledge</label>
                                                            <input type="text" class="form-control" id="workknowledge" name="workknowledge">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="workingexperience">Working Experience</label>
                                                            <input type="text" class="form-control" id="workingexperience" name="workingexperience">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="dateofjoining">Date of Joining</label>
                                                            <input type="date" class="form-control" id="dateofjoining" name="dateofjoining">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="salarydetails">Salary Details</label>
                                                            <input type="text" class="form-control" id="salarydetails" name="salarydetails">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="accountsdetails">Accounts Details</label>
                                                            <input type="text" class="form-control" id="accountsdetails" name="accountsdetails">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="dayreport">Day Report</label>
                                                            <input type="text" class="form-control" id="dayreport" name="dayreport">
                                                        </div>
                                                    
                                                        <!-- <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="text" class="form-control" id="password" name="password">
                                                        </div> -->
                                                    
                                                        <div class="form-group">
                                                            <label for="degree">Degree</label>
                                                            <input type="text" class="form-control" id="degree" name="degree">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="nameofdegree">Name of Degree</label>
                                                            <input type="text" class="form-control" id="nameofdegree" name="nameofdegree">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="tenthcertification">Tenth Certification</label>
                                                            <input type="file" class="form-control" id="tenthcertification" name="tenthcertification">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="twelfthcertificate">Twelfth Certificate</label>
                                                            <input type="file" class="form-control" id="twelfthcertificate" name="twelfthcertificate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="ugdegreecertificate">UG Degree Certificate</label>
                                                            <input type="file" class="form-control" id="ugdegreecertificate" name="ugdegreecertificate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="pgdegreecertificate">PG Degree Certificate</label>
                                                            <input type="file" class="form-control" id="pgdegreecertificate" name="pgdegreecertificate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="experiencecertificate">Experience Certificate</label>
                                                            <input type="file" class="form-control" id="experiencecertificate" name="experiencecertificate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="aadhaarcard">Aadhaarcard</label>
                                                            <input type="file" class="form-control" id="aadhaarcard" name="aadhaarcard">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="pancard">Pancard</label>
                                                            <input type="file" class="form-control" id="pancard" name="pancard">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="staffimg">Staff Img</label>
                                                            <input type="file" class="form-control" id="staffimg" name="staffimg">
                                                        </div>
                                                    
                                                        
                                                        <div class="form-group">
                                                            
                                                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
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

<?php }  ?>
<?php 
      
     if (isset($_POST['submit'])) {
        $employeeno = "MMKE".rand(10000, 100000000);
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
        $password = rand(10000, 100000000);
        $degree = $_POST['degree'];
        $nameofdegree = $_POST['nameofdegree'];
       

      //-----------------------------------------//

           /* $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
            if ($volunteerimg_1 != '') {
                   $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
                   $volunteerimg_tmp = $_FILES['volunteerimg'] ['tmp_name'];
                   $volunteerimg = $firstname."_".$volunteerimg_1;
             }
             else {
                $volunteerimg = $old_img;
             }     */
     //-----------------------------------------//

       /* if ($volunteerimg_1 != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../volunteerimg/$old_img");
                move_uploaded_file($volunteerimg_tmp, "../volunteerimg/$volunteerimg");
             }*/

    $selectemployeequerycount = "select * from employee";
        $runcount = mysqli_query($con,$selectemployeequerycount);

        $employeenumber = mysqli_num_rows($runcount) + 1;

       $tenthcertification_employee = $_FILES['tenthcertification'] ['name'];
       $tenthcertification_tmp = $_FILES['tenthcertification'] ['tmp_name'];

       $tenthcertification = $employeenumber."_".$tenthcertification_employee;

        //-----------------------------------------//

       $twelfthcertificate_employee = $_FILES['twelfthcertificate'] ['name'];
       $twelfthcertificate_tmp = $_FILES['twelfthcertificate'] ['tmp_name'];

       $twelfthcertificate = $employeenumber."_".$twelfthcertificate_employee;

        //-----------------------------------------//

       $ugdegreecertificate_employee = $_FILES['ugdegreecertificate'] ['name'];
       $ugdegreecertificate_tmp = $_FILES['ugdegreecertificate'] ['tmp_name'];

       $ugdegreecertificate = $employeenumber."_".$ugdegreecertificate_employee;

        //-----------------------------------------//

       $pgdegreecertificate_employee = $_FILES['pgdegreecertificate'] ['name'];
       $pgdegreecertificate_tmp = $_FILES['pgdegreecertificate'] ['tmp_name'];

       $pgdegreecertificate = $employeenumber."_".$pgdegreecertificate_employee;

        //-----------------------------------------//

       $experiencecertificate_employee = $_FILES['experiencecertificate'] ['name'];
       $experiencecertificate_tmp = $_FILES['experiencecertificate'] ['tmp_name'];

       $experiencecertificate = $employeenumber."_".$experiencecertificate_employee;

        //-----------------------------------------//

       $aadhaarcard_employee = $_FILES['aadhaarcard'] ['name'];
       $aadhaarcard_tmp = $_FILES['aadhaarcard'] ['tmp_name'];

       $aadhaarcard = $employeenumber."_".$aadhaarcard_employee;

        //-----------------------------------------//

       $pancard_employee = $_FILES['pancard'] ['name'];
       $pancard_tmp = $_FILES['pancard'] ['tmp_name'];

       $pancard = $employeenumber."_".$pancard_employee;

        //-----------------------------------------//

       $staffimg_employee = $_FILES['staffimg'] ['name'];
       $staffimg_tmp = $_FILES['staffimg'] ['tmp_name'];

       $staffimg = $employeenumber."_".$staffimg_employee;

        //-----------------------------------------//
        
      move_uploaded_file($tenthcertification_tmp, "../tenthcertification/$tenthcertification");
      move_uploaded_file($twelfthcertificate_tmp, "../twelfthcertificate/$twelfthcertificate");
      move_uploaded_file($ugdegreecertificate_tmp, "../ugdegreecertificate/$ugdegreecertificate");
      move_uploaded_file($pgdegreecertificate_tmp, "../pgdegreecertificate/$pgdegreecertificate");
      move_uploaded_file($experiencecertificate_tmp, "../experiencecertificate/$experiencecertificate");
      move_uploaded_file($aadhaarcard_tmp, "../aadhaarcard/$aadhaarcard");
      move_uploaded_file($pancard_tmp, "../pancard/$pancard");
      move_uploaded_file($staffimg_tmp, "../staffimg/$staffimg");

       //-----------------------------------------//

      $employeequery = "insert into employee(employeeno, staffdesignation, staffname, fathername, dob, gender, city, state, pincode, address, mobileno, email, workknowledge, workingexperience, dateofjoining, salarydetails, accountsdetails, dayreport, password, degree, nameofdegree, tenthcertification, twelfthcertificate, ugdegreecertificate, pgdegreecertificate, experiencecertificate, aadhaarcard, pancard, staffimg)values('$employeeno', '$staffdesignation', '$staffname', '$fathername', '$dob', '$gender', '$city', '$state', '$pincode', '$address', '$mobileno', '$email', '$workknowledge', '$workingexperience', '$dateofjoining', '$salarydetails', '$accountsdetails', '$dayreport', '$password', '$degree', '$nameofdegree', '$tenthcertification', '$twelfthcertificate', '$ugdegreecertificate', '$pgdegreecertificate', '$experiencecertificate', '$aadhaarcard', '$pancard', '$staffimg')";
       
       if ($staffdesignation == '') {
        echo "<script>alert('please enter Staff Designation')</script>";
       }else
          {
          mysqli_query($con, $employeequery);
          echo "<script>alert('Your Employee Details Added')</script>";
          echo "<script>window.open('employee.php','_self')</script>";
          
         }
     
     }

 ?>