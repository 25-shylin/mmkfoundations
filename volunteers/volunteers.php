<?php 
session_start();
 if (!isset($_SESSION['username'])) {
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
                            
                                
                                
                            <div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card_title mb-0">About Me</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="general-info">
                                                <?php 
                                        $selectvolunteerquery = "select * from volunteersindividuals";
                                              $runvolunteerQuery = mysqli_query($con,$selectvolunteerquery);
                                               $serialNum = 1;
                                               while ($rowvolunteerquery = mysqli_fetch_array($runvolunteerQuery)) {
                                                $serialNumber = $serialNum++;
                                                $volunteersindividualsid = $rowvolunteerquery['volunteersindividualsid'];
                                                
                                                $volunteersindividualsno = $rowvolunteerquery['volunteersindividualsno'];
                                               
                                                $password = $rowvolunteerquery['password'];
                                                $name = $rowvolunteerquery['name'];
                                                $mobileno = $rowvolunteerquery['mobileno'];
                                                $email = $rowvolunteerquery['email'];
                                                $dob = $rowvolunteerquery['dob'];
                                                $location = $rowvolunteerquery['location'];
                                                $whatsapp= $rowvolunteerquery['whatsapp'];
                                                $newsletter = $rowvolunteerquery['newsletter'];
                                                $pincode = $rowvolunteerquery['pincode'];
                                                $organization = $rowvolunteerquery['organization'];
                                                $volunteerimg = $rowvolunteerquery['volunteerimg'];
                                                $creatdate = $rowvolunteerquery['creatdate'];
                                                $modifydate = $rowvolunteerquery['modifydate'];
                                                $status = $rowvolunteerquery['status'];
                                                
                                           ?>
                                           
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="table-responsive">

                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Full Name</th>
                                                                    <td><?= $name; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mobile No</th>
                                                                    <td><?= $mobileno; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td><?= $email; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">DOB</th>
                                                                    <td><?= $dob; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Location</th>
                                                                    <td><?= $location; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Permission to contact over whats-app *</th>
                                                                    <td><a href="#!"><?= $whatsapp; ?></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">I would like to receive MMK’s newsletter and emails with updates on MMK’s upcoming events *</th>
                                                                    <td><?= $newsletter; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">pincode</th>
                                                                    <td><?= $pincode; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">organization</th>
                                                                    <td><?= $organization; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Username</th>
                                                                    <td><?= $volunteersindividualsno; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Password</th>
                                                                    <td><?= $password; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Volunteer Img</th>
                                                                   <td>
                                                                    <img src="../volunteerimg/<?= $volunteerimg; ?>" width="100" height="100">
                                                                   
                                                                </td>
                                                                <tr>
                                                                    <th scope="row">Action</th>
                                                                   <td>
                                                                        <a href="volunteersedit.php?volunteersedit=<?= $volunteersindividualsid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                                                       
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