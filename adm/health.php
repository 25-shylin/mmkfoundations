<?php 
error_reporting(0);
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
                            <h4 class="header-title">Health</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="healthadd.php" class="btn btn-primary mb-3">Add Health</a>
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                        <tr>
                                            
                                            <th>SNo</th>
                                            <th>health No</th>
                                            <th>Date</th>
                                            <th>Tag</th>
                                            <th>Project</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <!-- <th>Permanat Address</th>
                                            <th>Current Address</th>
                                            <th>Guardian/ Parents/ Care of -Phone Number</th>
                                            <th>Whatsapp Number</th>
                                            <th>Aadhar Number</th>
                                            <th>Guardian/ Parents/ Care of - Occupation</th>
                                            <th>Problem / Case Studies</th>
                                            <th>Solution</th>
                                            <th>Comments</th>
                                            <th>health Img</th>
                                            <th>Creat Date</th>
                                            <th>Modify Date</th>
                                            <th>Action</th>
                                            <th>Health Beneficiaries</th> -->
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $selecthealthquery = "select * from health";
                                                  $runhealthQuery = mysqli_query($con,$selecthealthquery);
                                                   $serialNum = 1;
                                                   while ($rowhealthquery = mysqli_fetch_array($runhealthQuery)) {
                                                    $serialNumber = $serialNum++;
                                                    $healthid = $rowhealthquery['healthid'];
                                                    
                                                    $healthno = $rowhealthquery['healthno'];
                                                    $date = $rowhealthquery['date'];
                                                    $tag = $rowhealthquery['tag'];
                                                    $project = $rowhealthquery['project'];
                                                    $firstname = $rowhealthquery['firstname'];
                                                    $lastname = $rowhealthquery['lastname'];
                                                    $permanataddress = $rowhealthquery['permanataddress'];
                                                    $currentaddress = $rowhealthquery['currentaddress'];
                                                    $guardianparentscareofphonenumber = $rowhealthquery['guardianparentscareofphonenumber'];
                                                    $whatsappnumber = $rowhealthquery['whatsappnumber'];
                                                    $aadharnumber = $rowhealthquery['aadharnumber'];
                                                    $guardianparentscareofoccupation = $rowhealthquery['guardianparentscareofoccupation'];
                                                    $problemcasestudies = $rowhealthquery['problemcasestudies'];
                                                    $solution = $rowhealthquery['solution'];
                                                    $comments = $rowhealthquery['comments'];
                                                    $healthimg = $rowhealthquery['healthimg'];
                                                    $creatdate = $rowhealthquery['creatdate'];
                                                    $modifydate = $rowhealthquery['modifydate'];

                                                    $eligible = $rowhealthquery['eligible'];
                                               ?>
                                        <tr>
                                            
                                            <td><?= $serialNumber; ?></td>
                                            <td><?= $healthno; ?></td>
                                            <td><?= $date; ?></td>
                                            <td><?= $tag; ?></td>
                                            <td><?= $project; ?></td>
                                            <td><?= $firstname; ?></td>
                                            <td><?= $lastname; ?></td>
                                            <!-- <td><?= $permanataddress; ?></td>
                                            <td><?= $currentaddress; ?></td>
                                            <td><?= $guardianparentscareofphonenumber; ?></td>
                                            <td><?= $whatsappnumber; ?></td>
                                            <td><?= $aadharnumber; ?></td>
                                            <td><?= $guardianparentscareofoccupation; ?></td>
                                            <td><?= $problemcasestudies; ?></td>
                                            <td><?= $solution; ?></td>
                                            <td><?= $comments; ?></td>
                                            <td>
                                              <img src="../health/<?= $healthimg; ?>" width="100" height="100">
                                            </td>
                                            
                                            <td><?= $creatdate; ?></td>
                                            <td><?= $modifydate; ?></td>
                                            <td>
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input id="<?= $healthid; ?>" value="<?= $healthid; ?>" type="checkbox" name="healthcheck[]" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <input type="submit" name="Beneficiaries" value="Beneficiaries" class="label-sm label-success">
                                                <input type="submit" name="cancel" value="Cancel" class="label-sm label-danger">
                                            </td> -->
                                            
                                            <td>
                                                <a href="healthedit.php?healthedit=<?= $healthid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                                
                                               <a href="edit/delete.php?healthedit=<?= $healthid; ?>" class="label label-sm label-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
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

<?php 
        if(isset($_POST['Beneficiaries'])) 
        {
        foreach($_POST['healthcheck'] as $healthid)
        {

        mysqli_query($con,"UPDATE health SET eligible='1' WHERE healthid='$healthid'");
        }
        echo "<script>alert('Eligible has been save successfully ...')</script>";
        echo "<script>window.open('health.php','_self')</script>";
        }

        if(isset($_POST['cancel'])) 
        {
        foreach($_POST['healthcheck'] as $healthid)
        {
        
            mysqli_query($con,"UPDATE health SET eligible='0' WHERE healthid='$healthid'");
            }
                echo "<script>alert('Eligible has been save successfully Cancel...')</script>";
                echo "<script>window.open('health.php','_self')</script>";
            
        }

 ?>
 