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
                            <h4 class="header-title">Volunteers</h4>
                            <div class="table-responsive datatable-primary">
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Date of Birth</th>
                                        <th>Gender</th>
                                        <th>Nationality</th>
                                        <th>Your address</th>
                                        <th>City</th>
                                        <th>Other City</th>
                                        <th>State</th>
                                        <th>Other State</th>
                                        <th>Country</th>
                                        <th>Pincode</th>
                                        <th>Local Guardian Address (If different):</th>
                                        <th>City</th>
                                        <th>Other City</th>
                                        <th>State</th>
                                        <th>Other State</th>
                                        <th>Country</th>
                                        <th>Pincode</th>
                                        <th>Phone No (Residence)</th>
                                        <th>Mobile No</th>
                                        <th>Email</th>
                                        <th>Facebook ID</th>
                                        <th>Degree</th>
                                        <th>University</th>
                                        <th>No. of Years Work Experience</th>
                                        <th>Main Industry</th>
                                        <th>Main Profession</th>
                                        <th>English</th>
                                        <th>Other Language</th>
                                        <th>Work knowledge</th>
                                        <th>IT Skills</th>
                                        <th>Programme Area</th>
                                        <th>Work Area</th>
                                        <th>Location</th>
                                        <th>No. of Months</th>
                                        <th>No. of Days in a Week</th>
                                        <th>No. of hours in a day</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Volunteer Img</th>
                                        <th>Date</th>
                                        <th>Modify Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selectvolunteerquery = "select * from volunteers";
                                              $runvolunteerQuery = mysqli_query($con,$selectvolunteerquery);
                                               $serialNum = 1;
                                               while ($rowvolunteerquery = mysqli_fetch_array($runvolunteerQuery)) {
                                                $serialNumber = $serialNum++;
                                                $volunteersid = $rowvolunteerquery['volunteersid'];
                                                
                                                $volunteersno = $rowvolunteerquery['volunteersno'];
                                               
                                                $firstname = $rowvolunteerquery['firstname'];
                                                $middlename = $rowvolunteerquery['middlename'];
                                                $lastname = $rowvolunteerquery['lastname'];
                                                $dob = $rowvolunteerquery['dob'];
                                                $gender = $rowvolunteerquery['gender'];
                                                $nationality = $rowvolunteerquery['nationality'];
                                                $address= $rowvolunteerquery['address'];
                                                $city = $rowvolunteerquery['city'];
                                                $othercity = $rowvolunteerquery['othercity'];
                                                $state = $rowvolunteerquery['state'];
                                                $otherstate = $rowvolunteerquery['otherstate'];
                                                $country = $rowvolunteerquery['country'];
                                                $pincode = $rowvolunteerquery['pincode'];
                                                $localguardian = $rowvolunteerquery['localguardian'];
                                                $localcity = $rowvolunteerquery['localcity'];
                                                $localothercity = $rowvolunteerquery['localothercity'];
                                                $localstate = $rowvolunteerquery['localstate'];
                                                $localotherstate = $rowvolunteerquery['localotherstate'];
                                                $localcountry = $rowvolunteerquery['localcountry'];
                                                $localpincode = $rowvolunteerquery['localpincode'];
                                                $phoneresid = $rowvolunteerquery['phoneresid'];
                                                $mobileno = $rowvolunteerquery['mobileno'];
                                                $email = $rowvolunteerquery['email'];
                                                $facebook = $rowvolunteerquery['facebook'];
                                                $degree = $rowvolunteerquery['degree'];
                                                $university = $rowvolunteerquery['university'];
                                                $workyears = $rowvolunteerquery['workyears'];
                                                $industry = $rowvolunteerquery['industry'];
                                                $profession = $rowvolunteerquery['profession'];
                                                $english = $rowvolunteerquery['english'];
                                                $otherlanguage = $rowvolunteerquery['otherlanguage'];
                                                $workknowledge = $rowvolunteerquery['workknowledge'];
                                                $itskills = $rowvolunteerquery['itskills'];
                                                $programarea = $rowvolunteerquery['programarea'];
                                                $workarea = $rowvolunteerquery['workarea'];
                                                $relocation = $rowvolunteerquery['relocation'];
                                                $months = $rowvolunteerquery['months'];
                                                $days = $rowvolunteerquery['days'];
                                                $hours = $rowvolunteerquery['hours'];
                                                $password = $rowvolunteerquery['password'];
                                                $volunteerimg = $rowvolunteerquery['volunteerimg'];
                                                $creatdate = $rowvolunteerquery['creatdate'];
                                                $modifydate = $rowvolunteerquery['modifydate'];
                                                $status = $rowvolunteerquery['status'];
                                           ?>
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $firstname; ?></td>
                                        <td><?= $middlename; ?></td>
                                        <td><?= $lastname; ?></td>
                                        <td><?= $dob; ?></td>
                                        <td><?= $gender; ?></td>
                                        <td><?= $nationality; ?></td>
                                        <td><?= $address; ?></td>
                                        <td><?= $city; ?></td>
                                        <td><?= $othercity; ?></td>
                                        <td><?= $state; ?></td>
                                        <td><?= $otherstate; ?></td>
                                        <td><?= $country; ?></td>
                                        <td><?= $pincode; ?></td>
                                        <td><?= $localguardian; ?></td>
                                        <td><?= $localcity; ?></td>
                                        <td><?= $localothercity; ?></td>
                                        <td><?= $localstate; ?></td>
                                        <td><?= $localotherstate; ?></td>
                                        <td><?= $localcountry; ?></td>
                                        <td><?= $localpincode; ?></td>
                                        <td><?= $phoneresid; ?></td>
                                        <td><?= $mobileno; ?></td>
                                        <td><?= $email; ?></td>
                                        <td><?= $facebook; ?></td>
                                        <td><?= $degree; ?></td>
                                        <td><?= $university; ?></td>
                                        <td><?= $workyears; ?></td>
                                        <td><?= $industry; ?></td>
                                        <td><?= $profession; ?></td>
                                        <td><?= $english; ?></td>
                                        <td><?= $otherlanguage; ?></td>
                                        <td><?= $workknowledge; ?></td>
                                        <td><?= $itskills; ?></td>
                                        <td><?= $programarea; ?></td>
                                        <td><?= $workarea; ?></td>
                                        <td><?= $relocation; ?></td>
                                        <td><?= $months; ?></td>
                                        <td><?= $days; ?></td>
                                        <td><?= $hours; ?></td>
                                        <td><?= $volunteersno; ?></td>
                                        <td><?= $password; ?></td>
                                        <td>
                                          <img src="../volunteerimg/<?= $volunteerimg; ?>" width="100" height="100">
                                        </td>
                                        <td><?= $creatdate; ?></td>
                                        <td><?= $modifydate; ?></td>
                                        <td><?= $status; ?></td>
                                        
                                        <td>
                                            <a href="volunteersedit.php?volunteersid=<?= $volunteersid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                           <a href="edit/delete.php?volunteersid=<?= $volunteersid; ?>" class="label label-sm label-danger">Delete</a>
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