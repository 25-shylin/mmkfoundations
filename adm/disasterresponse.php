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
                            <h4 class="header-title">Disaster Response</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="disasterresponseadd.php" class="btn btn-primary mb-3">Add Disaster Response</a>
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                        <tr>
                                            
                                            <th>SNo</th>
                                            <th>Disasterresponse No</th>
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
                                            <th>disasterresponse Img</th>
                                            <th>Creat Date</th>
                                            <th>Modify Date</th>
                                            <th>Action</th>
                                            <th>disasterresponse Eligible</th> -->
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $selectdisasterresponsequery = "select * from disasterresponse";
                                                  $rundisasterresponseQuery = mysqli_query($con,$selectdisasterresponsequery);
                                                   $serialNum = 1;
                                                   while ($rowdisasterresponsequery = mysqli_fetch_array($rundisasterresponseQuery)) {
                                                    $serialNumber = $serialNum++;
                                                    $disasterresponseid = $rowdisasterresponsequery['disasterresponseid'];
                                                    
                                                    $disasterresponseno = $rowdisasterresponsequery['disasterresponseno'];
                                                    $date = $rowdisasterresponsequery['date'];
                                                    $tag = $rowdisasterresponsequery['tag'];
                                                    $project = $rowdisasterresponsequery['project'];
                                                    $firstname = $rowdisasterresponsequery['firstname'];
                                                    $lastname = $rowdisasterresponsequery['lastname'];
                                                    $permanataddress = $rowdisasterresponsequery['permanataddress'];
                                                    $currentaddress = $rowdisasterresponsequery['currentaddress'];
                                                    $guardianparentscareofphonenumber = $rowdisasterresponsequery['guardianparentscareofphonenumber'];
                                                    $whatsappnumber = $rowdisasterresponsequery['whatsappnumber'];
                                                    $aadharnumber = $rowdisasterresponsequery['aadharnumber'];
                                                    $guardianparentscareofoccupation = $rowdisasterresponsequery['guardianparentscareofoccupation'];
                                                    $problemcasestudies = $rowdisasterresponsequery['problemcasestudies'];
                                                    $solution = $rowdisasterresponsequery['solution'];
                                                    $comments = $rowdisasterresponsequery['comments'];
                                                    $disasterresponseimg = $rowdisasterresponsequery['disasterresponseimg'];
                                                    $creatdate = $rowdisasterresponsequery['creatdate'];
                                                    $modifydate = $rowdisasterresponsequery['modifydate'];

                                                    $eligible = $rowdisasterresponsequery['eligible'];
                                               ?>
                                        <tr>
                                            
                                            <td><?= $serialNumber; ?></td>
                                            <td><?= $disasterresponseno; ?></td>
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
                                              <img src="../disasterresponse/<?= $disasterresponseimg; ?>" width="100" height="100">
                                            </td>
                                            
                                            <td><?= $creatdate; ?></td>
                                            <td><?= $modifydate; ?></td>
                                            <td>
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input id="<?= $disasterresponseid; ?>" value="<?= $disasterresponseid; ?>" type="checkbox" name="disasterresponsecheck[]" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <input type="submit" name="Beneficiaries" value="Beneficiaries" class="label-sm label-success">
                                                <input type="submit" name="cancel" value="Cancel" class="label-sm label-danger">
                                            </td> -->
                                            
                                            <td>
                                                <a href="disasterresponseedit.php?disasterresponseedit=<?= $disasterresponseid; ?>"<i class="fa fa-pencil" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
                                                
                                               <a href="edit/delete.php?disasterresponseedit=<?= $disasterresponseid; ?>"<i class="fa fa-trash" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
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
        foreach($_POST['disasterresponsecheck'] as $disasterresponseid)
        {

        mysqli_query($con,"UPDATE disasterresponse SET eligible='1' WHERE disasterresponseid='$disasterresponseid'");
        }
        echo "<script>alert(' Eligible has been save successfully ...')</script>";
        echo "<script>window.open('disasterresponse.php','_self')</script>";
        }

        if(isset($_POST['cancel'])) 
        {
        foreach($_POST['disasterresponsecheck'] as $disasterresponseid)
        {
        
         mysqli_query($con,"UPDATE disasterresponse SET eligible='0' WHERE disasterresponseid='$disasterresponseid'");
            
                echo "<script>alert('Eligible has been save successfully Cancel...')</script>";
                echo "<script>window.open('disasterresponse.php','_self')</script>";   
            
        }
    }

 ?>
 