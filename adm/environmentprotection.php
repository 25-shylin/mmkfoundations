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
                            <h4 class="header-title">Environment Protection</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="environmentprotectionadd.php" class="btn btn-primary mb-3">Add Environment Protection</a>
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                        <tr>
                                            
                                            <th>SNo</th>
                                            <th>Environment Protection No</th>
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
                                            <th>Environment Protection Img</th>
                                            <th>Creat Date</th>
                                            <th>Modify Date</th>
                                            <th>Action</th>
                                            <th>Environment Protection Eligible</th> -->
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $selectenvironmentprotectionquery = "select * from environmentprotection";
                                                  $runenvironmentprotectionQuery = mysqli_query($con,$selectenvironmentprotectionquery);
                                                   $serialNum = 1;
                                                   while ($rowenvironmentprotectionquery = mysqli_fetch_array($runenvironmentprotectionQuery)) {
                                                    $serialNumber = $serialNum++;
                                                    $environmentprotectionid = $rowenvironmentprotectionquery['environmentprotectionid'];
                                                    
                                                    $environmentprotectionno = $rowenvironmentprotectionquery['environmentprotectionno'];
                                                    $date = $rowenvironmentprotectionquery['date'];
                                                    $tag = $rowenvironmentprotectionquery['tag'];
                                                    $project = $rowenvironmentprotectionquery['project'];
                                                    $firstname = $rowenvironmentprotectionquery['firstname'];
                                                    $lastname = $rowenvironmentprotectionquery['lastname'];
                                                    $permanataddress = $rowenvironmentprotectionquery['permanataddress'];
                                                    $currentaddress = $rowenvironmentprotectionquery['currentaddress'];
                                                    $guardianparentscareofphonenumber = $rowenvironmentprotectionquery['guardianparentscareofphonenumber'];
                                                    $whatsappnumber = $rowenvironmentprotectionquery['whatsappnumber'];
                                                    $aadharnumber = $rowenvironmentprotectionquery['aadharnumber'];
                                                    $guardianparentscareofoccupation = $rowenvironmentprotectionquery['guardianparentscareofoccupation'];
                                                    $problemcasestudies = $rowenvironmentprotectionquery['problemcasestudies'];
                                                    $solution = $rowenvironmentprotectionquery['solution'];
                                                    $comments = $rowenvironmentprotectionquery['comments'];
                                                    $environmentprotectionimg = $rowenvironmentprotectionquery['environmentprotectionimg'];
                                                    $creatdate = $rowenvironmentprotectionquery['creatdate'];
                                                    $modifydate = $rowenvironmentprotectionquery['modifydate'];

                                                    $eligible = $rowenvironmentprotectionquery['eligible'];
                                               ?>
                                        <tr>
                                            
                                            <td><?= $serialNumber; ?></td>
                                            <td><?= $environmentprotectionno; ?></td>
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
                                              <img src="../environmentprotection/<?= $environmentprotectionimg; ?>" width="100" height="100">
                                            </td>
                                            
                                            <td><?= $creatdate; ?></td>
                                            <td><?= $modifydate; ?></td>
                                            <td>
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input id="<?= $environmentprotectionid; ?>" value="<?= $environmentprotectionid; ?>" type="checkbox" name="environmentprotectioncheck[]" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            
                                            <td>
                                                <input type="submit" name="Beneficiaries" value="Beneficiaries" class="label-sm label-success">
                                                <input type="submit" name="cancel" value="cancel" class="label-sm label-danger">
                                            </td> -->
                                            <td>
                                                <a href="environmentprotectionedit.php?environmentprotectionedit=<?= $environmentprotectionid; ?>" <i class="fa fa-pencil" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
                                                
                                               <a href="edit/delete.php?environmentprotectionedit=<?= $environmentprotectionid; ?>"<i class="fa fa-trash" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i> </a>
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
        foreach($_POST['environmentprotectioncheck'] as $environmentprotectionid)
        {

        mysqli_query($con,"UPDATE environmentprotection SET eligible='1' WHERE environmentprotectionid='$environmentprotectionid'");
        }
        echo "<script>alert(' Eligible has been save successfully ...')</script>";
        echo "<script>window.open('environmentprotection.php','_self')</script>";
        }

        if(isset($_POST['cancel'])) 
        {
        foreach($_POST['environmentprotectioncheck'] as $environmentprotectionid)
        {
        
            mysqli_query($con,"UPDATE environmentprotection SET eligible='0' WHERE environmentprotectionid='$environmentprotectionid'");
            
                echo "<script>alert('Eligible has been save successfully Cancel...')</script>";
                echo "<script>window.open('environmentprotection.php','_self')</script>";
            
        }
    }

 ?>
 