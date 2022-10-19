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
                                                            <label>Pincode:</label>
                                                            <input type="pincode" id="pincode" name="Pincode" placeholder="Enter pincode" value="" required><br/>
                                                            <span style="color:red;"> Enter at least 3 digit to show auto-complete.</span><br>
                                                            Click Here
                                                          </div>
                                                          <div id="pin_det" class="form-control">
                                                          
                                                          </div>
                                                          <input type="text" class="form-control" placeholder="<?= $city ?>" name="<?= $city ?>" readonly style="background: #f7f7f7;" hidden>
                                                          <input type="text" class="form-control" placeholder="<?= $district ?>" name="<?= $district ?>" readonly style="background: #f7f7f7;" hidden>
                                                          <input type="text" class="form-control" placeholder="<?= $state ?>" name="<?= $state ?>" readonly style="background: #f7f7f7;" hidden>
                                                          <input type="text" class="form-control" placeholder="<?= $Pincode ?>" name="<?= $Pincode ?>" readonly style="background: #f7f7f7;" hidden>
                                                    
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
                                                            <input type="text" class="form-control" id="email" name="email">
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
                                                            <input type="text" class="form-control" id="dateofjoining" name="dateofjoining">
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
                                                    
                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="text" class="form-control" id="password" name="password">
                                                        </div>
                                                    
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
                                                            <input type="text" class="form-control" id="tenthcertification" name="tenthcertification">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="twelfthcertificate">Twelfth Certificate</label>
                                                            <input type="text" class="form-control" id="twelfthcertificate" name="twelfthcertificate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="ugdegreecertificate">UG Degree Certificate</label>
                                                            <input type="text" class="form-control" id="ugdegreecertificate" name="ugdegreecertificate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="pgdegreecertificate">PG Degree Certificate</label>
                                                            <input type="text" class="form-control" id="pgdegreecertificate" name="pgdegreecertificate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="experiencecertificate">Experience Certificate</label>
                                                            <input type="text" class="form-control" id="experiencecertificate" name="experiencecertifica">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="aadhaarcard">Aadhaarcard</label>
                                                            <input type="text" class="form-control" id="aadhaarcard" name="aadhaarcard">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="pancard">Pancard</label>
                                                            <input type="text" class="form-control" id="pancard" name="pancard">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="staffimg">Staff Img</label>
                                                            <input type="text" class="form-control" id="staffimg" name="staffimg">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="creatdate">Creat Date</label>
                                                            <input type="text" class="form-control" id="creatdate" name="creatdate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="modifydate">Modify Date</label>
                                                            <input type="text" class="form-control" id="modifydate" name="modifydate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <input type="text" class="form-control" id="status" name="status">
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
<script>
        $('#pincode').change(function(){
          var pincode=$(this).val();
          //alert(pincode);      
          $.ajax({
              type: "POST",
              url: "request.php",
              data:{ pincode:pincode},
              success: function(data){           
                //alert(data);
                $('#pin_det').html(data);
              }
            });
        });
  </script>
<?php }  ?>
<?php 
 
      
     if (isset($_POST['submit'])) {

        $firstname = $_POST['firstname'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $othercity = $_POST['othercity'];
        $state = $_POST['state'];
        $otherstate = $_POST['otherstate'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $localguardian = $_POST['localguardian'];
        $localcity = $_POST['localcity'];
        $localothercity = $_POST['localothercity'];
        $localstate = $_POST['localstate'];
        $localotherstate = $_POST['localotherstate'];
        $localcountry = $_POST['localcountry'];
        $localpincode = $_POST['localpincode'];
        $phoneresid = $_POST['phoneresid'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        $facebook = $_POST['facebook'];
        $degree = $_POST['degree'];
        $university = $_POST['university'];
        $workyears = $_POST['workyears'];
        $industry = $_POST['industry'];
        $profession = $_POST['profession'];
        $english = $_POST['english'];
        $otherlanguage = $_POST['otherlanguage'];
        $workknowledge = $_POST['workknowledge'];
        $itskills = $_POST['itskills'];
        $programarea = $_POST['programarea'];
        if($programarea == "Mission Education"){
            $workarea = $_POST['workarea1'];
        }elseif($programarea == "MMK (livelihood)"){
             $workarea = $_POST['workarea2'];
        }elseif($programarea == "MMK On wheel"){
             $workarea = $_POST['workarea3'];
        }elseif($programarea == "Corporate Partnership"){
             $workarea = $_POST['workarea4'];
        }elseif($programarea == "Alliances"){
             $workarea = $_POST['workarea5'];
        }elseif($programarea == "Individual Partnership"){
             $workarea = $_POST['workarea6'];
        }elseif($programarea == "Communication"){
             $workarea = $_POST['workarea7'];
        }elseif($programarea == "Information Technology"){
             $workarea = $_POST['workarea8'];
        }elseif($programarea == "Finance"){
             $workarea = $_POST['workarea9'];
        }elseif($programarea == "Human Resource"){
             $workarea = $_POST['workarea10'];     
        }
        $relocation = $_POST['relocation'];
        $months = $_POST['months'];
        $days = $_POST['days'];
        $hours = $_POST['hours'];
        $modDate = date("d/m/y");
        $old_img = $_POST['old_img'];

      //-----------------------------------------//

            $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
            if ($volunteerimg_1 != '') {
                   $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
                   $volunteerimg_tmp = $_FILES['volunteerimg'] ['tmp_name'];
                   $volunteerimg = $firstname."_".$volunteerimg_1;
             }
             else {
                $volunteerimg = $old_img;
             }     
     //-----------------------------------------//

        if ($volunteerimg_1 != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../volunteerimg/$old_img");
                move_uploaded_file($volunteerimg_tmp, "../volunteerimg/$volunteerimg");
             }
    
      $volunteerquery = "update volunteers set firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', dob = '$dob', gender = '$gender', nationality = '$nationality', address = '$address', city = '$city', othercity = '$othercity', state = '$state', otherstate = '$otherstate', country = '$country', pincode = '$pincode', localguardian = '$localguardian', localcity = '$localcity', localothercity = '$localothercity', localstate='$localstate', localotherstate='$localotherstate', localcountry='$localcountry', localpincode='$localpincode', phoneresid='$phoneresid', mobileno='$mobileno', email='$email', facebook='$facebook', degree='$degree', university='$university', workyears='$workyears', industry='$industry', profession='$profession', english='$english', otherlanguage='$otherlanguage', workknowledge='$workknowledge', itskills='$itskills', programarea='$programarea', workarea='$workarea', relocation='$relocation' , months='$months' , days='$days' , hours='$hours' , password='$password' , volunteerimg='$volunteerimg'where volunteersid = '$volunteersid'";
       
       if ($firstname == '') {
        echo "<script>alert('please enter amount_proof')</script>";
       }else
          {
          mysqli_query($con, $volunteerquery);
          echo "<script>alert('Your volunteer Details Updated')</script>";
          echo "<script>window.open('volunteers.php','_self')</script>";
          
         }
     
     }

 ?>