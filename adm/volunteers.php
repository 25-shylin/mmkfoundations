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
                            <h4 class="header-title sss">Volunteers</h4>
                            <div class="table-responsive datatable-primary">
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>First Name</th>
                                        <th>Mobile No</th>
                                        <th>Email</th>
                                        <!-- <th>DOB</th>
                                        <th>Location</th>
                                        <th>Permission to contact over whats-app *</th>
                                        <th>I would like to receive MMK’s newsletter and emails with updates on MMK’s upcoming events *</th>
                                        <th>pincode</th>
                                        <th>organization</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Volunteer Img</th>
                                        <th>Date</th>
                                        <th>Modify Date</th> -->
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
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
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $name; ?></td>
                                        <td><?= $mobileno; ?></td>
                                        <td><?= $email; ?></td>
                                        <!-- <td><?= $dob; ?></td>
                                        <td><?= $location; ?></td>
                                        <td><?= $whatsapp; ?></td>
                                        <td><?= $newsletter; ?></td>
                                        <td><?= $pincode; ?></td>
                                        <td><?= $organization; ?></td>
                                        <td><?= $volunteersindividualsno; ?></td>
                                        <td><?= $password; ?></td>
                                        <td>
                                          <img src="../volunteerimg/<?= $volunteerimg; ?>" width="100" height="100">
                                        </td>
                                        <td><?= $creatdate; ?></td>
                                        <td><?= $modifydate; ?></td> -->
                                         <td><?= $status; ?></td> 
                                        
                                        <td>
                                        <a href="volunteers-details.php?volunteersedit=<?= $volunteersindividualsid; ?>"<i class="fa fa-eye" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
                                        <a href="volunteersedit.php?volunteersedit=<?= $volunteersindividualsid; ?>" <i class="fa fa-pencil" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
                                            <!-- <a href="volunteersedit.php?volunteersedit=<?= $volunteersindividualsid; ?>" class="label label-sm label-warning">Edit</a><br><br> -->
                                           <a href="edit/delete.php?volunteersindividualsid=<?= $volunteersindividualsid; ?>" <i class="fa fa-trash" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
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