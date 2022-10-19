<?php 
session_start();
 if (!isset($_SESSION['username'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    $page_user = $_SESSION['username'];
    $selectemployeequery = "select * from employee where employeeno='$page_user'";
      
      $runemployeeQuery = mysqli_query($con,$selectemployeequery);
       $serialNum = 1;
       while ($rowemployeequery = mysqli_fetch_array($runemployeeQuery)) {
        $serialNumber = $serialNum++;
        $employeeid = $rowemployeequery['employeeid'];
        $staffdesignation = $rowemployeequery['staffdesignation'];
        $employeeno = $rowemployeequery['employeeno'];
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
                            <h4 class="header-title">Task Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group" hidden>
                                                            <label for="staffname">staffname</label>
                                                            <input type="text" class="form-control" id="staffname"  name="staffname">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label for="staffdesignation">Staff Designation</label>
                                                            <input type="text" class="form-control" id="staffdesignation"  name="staffdesignation">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label for="employeeno">Staff No</label>
                                                            <input type="text" class="form-control" id="employeeno"  name="employeeno">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tasktitle">Task Title</label>
                                                            <input type="text" class="form-control" id="tasktitle"  name="tasktitle">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="taskdate">Task Date</label>
                                                            <input type="date" class="form-control" id="taskdate"  name="taskdate">
                                                        </div>

                                                    
                                                        <div class="form-group">
                                                            <label for="newsdescription">Task Description</label>
                                                            
                                                            <textarea class="form-control" id="taskdescription" name="taskdescription"></textarea>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label for="newsphoto">task Photo</label>
                                                            <input type="file" class="form-control" id="taskphoto" name="taskphoto">
                                                        </div> -->
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

<?php } } ?>
<?php 
      
     if (isset($_POST['submit'])) {
        
      $selectemployeequery = "select * from employee where employeeno='$page_user'";
      
      $runemployeeQuery = mysqli_query($con,$selectemployeequery);
       $serialNum = 1;
       while ($rowemployeequery = mysqli_fetch_array($runemployeeQuery)) {
        $serialNumber = $serialNum++;
        $employeeid = $rowemployeequery['employeeid'];
        $staffdesignation = $rowemployeequery['staffdesignation'];
        $employeeno = $rowemployeequery['employeeno'];
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

        $tasktitle = $_POST['tasktitle'];
        $taskdate = $_POST['taskdate'];
        $taskdescription = $_POST['taskdescription'];
       
        //-----------------------------------------//
        
      /* $selecttaskquerycount = "select * from volunteerstask";
       $runcount = mysqli_query($con, $selecttaskquerycount);
       $tasknumber = mysqli_num_rows($runcount)+1;

       $taskphoto_task = $_FILES['taskphoto'] ['name'];
       $taskphoto_tmp = $_FILES['taskphoto'] ['tmp_name'];

       $taskphoto = $tasknumber."_".$taskphoto_task;

        
        
      move_uploaded_file($taskphoto_tmp, "../taskphoto/$taskphoto");*/
      
      

       //-----------------------------------------//

      $taskquery = "insert into employeestask(staffname, staffdesignation, employeeno, tasktitle, taskdate, taskdescription)values('$staffname', '$staffdesignation', '".$employeeno."', '$tasktitle', '$taskdate', '$taskdescription')";
      
       if ($tasktitle == '') {
        echo "<script>alert('Please Enter Task Title')</script>";
       }else
          {
          mysqli_query($con, $taskquery);
          echo "<script>alert('Your task Details Added')</script>";
          echo "<script>window.open('dashboard.php','_self')</script>";
          
         }
     
     }
}
 ?>