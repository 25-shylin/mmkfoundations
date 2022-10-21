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
                            <h4 class="header-title">Beneficiary</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="beneficiaryadd.php" class="btn btn-primary mb-3">Add Beneficiary</a>
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                        <tr>
                                            
                                            <th>SNo</th>
                                            <th>Beneficiary No</th>
                                            <th>Date</th>
                                            <th>Tag</th>
                                            <th>Project</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Beneficiary Eligible</th>
                                            <!-- <th>Permanat Address</th>
                                            <th>Current Address</th>
                                            <th>Guardian/ Parents/ Care of -Phone Number</th>
                                            <th>Whatsapp Number</th>
                                            <th>Aadhar Number</th>
                                            <th>Guardian/ Parents/ Care of - Occupation</th>
                                            <th>Problem / Case Studies</th>
                                            <th>Solution</th>
                                            <th>Comments</th>
                                            <th>Beneficiary Img</th>
                                            <th>Creat Date</th>
                                            <th>Modify Date</th>
                                            <th>Action</th>
                                            <th>Beneficiary Eligible</th>
                                            <th>Action</th>
                                            <th>Beneficiary</th> -->
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $selectbeneficiaryquery = "select * from beneficiary";
                                                  $runbeneficiaryQuery = mysqli_query($con,$selectbeneficiaryquery);
                                                   $serialNum = 1;
                                                   while ($rowbeneficiaryquery = mysqli_fetch_array($runbeneficiaryQuery)) {
                                                    $serialNumber = $serialNum++;
                                                    $beneficiaryid = $rowbeneficiaryquery['beneficiaryid'];
                                                    
                                                    $beneficiaryno = $rowbeneficiaryquery['beneficiaryno'];
                                                    $date = $rowbeneficiaryquery['date'];
                                                    $tag = $rowbeneficiaryquery['tag'];
                                                    $project = $rowbeneficiaryquery['project'];
                                                    $firstname = $rowbeneficiaryquery['firstname'];
                                                    $lastname = $rowbeneficiaryquery['lastname'];
                                                    $permanataddress = $rowbeneficiaryquery['permanataddress'];
                                                    $currentaddress = $rowbeneficiaryquery['currentaddress'];
                                                    $guardianparentscareofphonenumber = $rowbeneficiaryquery['guardianparentscareofphonenumber'];
                                                    $whatsappnumber = $rowbeneficiaryquery['whatsappnumber'];
                                                    $aadharnumber = $rowbeneficiaryquery['aadharnumber'];
                                                    $guardianparentscareofoccupation = $rowbeneficiaryquery['guardianparentscareofoccupation'];
                                                    $problemcasestudies = $rowbeneficiaryquery['problemcasestudies'];
                                                    $solution = $rowbeneficiaryquery['solution'];
                                                    $comments = $rowbeneficiaryquery['comments'];
                                                    $beneficiaryimg = $rowbeneficiaryquery['beneficiaryimg'];
                                                    $creatdate = $rowbeneficiaryquery['creatdate'];
                                                    $modifydate = $rowbeneficiaryquery['modifydate'];

                                                    $eligible = $rowbeneficiaryquery['eligible'];
                                               ?>
                                        <tr>
                                            
                                            <td><?= $serialNumber; ?></td>
                                            <td><?= $beneficiaryno; ?></td>
                                            <td><?= $date; ?></td>
                                            <td><?= $tag; ?></td>
                                            <td><?= $project; ?></td>
                                            <td><?= $firstname; ?></td>
                                            <td><?= $lastname; ?></td>
                                            <td><?= $eligible; ?></td>
                                            <!-- <td><?php if(['$eligible']=='1'){
                                                echo "true";
                                             } else {
                                                    echo "false";
                                                }
                                            ?></td> -->
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
                                              <img src="../beneficiary/<?= $beneficiaryimg; ?>" width="100" height="100">
                                            </td>
                                            
                                            <td><?= $creatdate; ?></td>
                                            <td><?= $modifydate; ?></td>
                                            <td>
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input id="<?= $beneficiaryid; ?>" value="<?= $beneficiaryid; ?>" type="checkbox" name="beneficiarycheck[]" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <input type="submit" name="Eligible" value="Eligible" class="label-sm label-success">
                                                <input type="submit" name="cancel" value="Cancel" class="label-sm label-danger">
                                            </td>
                                            <td>
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input id="<?= $beneficiaryid; ?>" value="<?= $beneficiaryid; ?>" type="checkbox" name="beneficiaryselect[]" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <input type="submit" name="Beneficiaries" value="Beneficiaries" class="label-sm label-success">
                                                <input type="submit" name="beneficiariescancel" value="cancel" class="label-sm label-danger">
                                            </td> -->
                                            <td>
                                                <a href="beneficiaryedit.php?beneficiaryedit=<?= $beneficiaryid; ?>" class="label label-sm label-warning">Edit</a><br><br>
                                                
                                               <a href="edit/delete.php?beneficiaryedit=<?= $beneficiaryid; ?>" class="label label-sm label-danger">Delete</a>
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
        if(isset($_POST['Eligible'])) 
        {
        foreach($_POST['beneficiarycheck'] as $beneficiaryid)
        {

        mysqli_query($con,"UPDATE beneficiary SET eligible='1' WHERE beneficiaryid='$beneficiaryid'");
        }
        echo "<script>alert(' Eligible has been save successfully ...')</script>";
        echo "<script>window.open('beneficiary.php','_self')</script>";
        }

        if(isset($_POST['cancel'])) 
        {
        foreach($_POST['beneficiarycheck'] as $beneficiaryid)
        {
        $selectbeneficiaryquery = "select * from beneficiary";
        $runbeneficiaryQuery = mysqli_query($con,$selectbeneficiaryquery);
        $serialNum = 1;
        while ($rowbeneficiaryquery = mysqli_fetch_array($runbeneficiaryQuery)) {
        $serialNumber = $serialNum++;
        $beneficiaryid = $rowbeneficiaryquery['beneficiaryid'];
        
        $beneficiaryno = $rowbeneficiaryquery['beneficiaryno'];
        $date = $rowbeneficiaryquery['date'];
        $tag = $rowbeneficiaryquery['tag'];
        $project = $rowbeneficiaryquery['project'];
        $firstname = $rowbeneficiaryquery['firstname'];
        $lastname = $rowbeneficiaryquery['lastname'];
        $permanataddress = $rowbeneficiaryquery['permanataddress'];
        $currentaddress = $rowbeneficiaryquery['currentaddress'];
        $guardianparentscareofphonenumber = $rowbeneficiaryquery['guardianparentscareofphonenumber'];
        $whatsappnumber = $rowbeneficiaryquery['whatsappnumber'];
        $aadharnumber = $rowbeneficiaryquery['aadharnumber'];
        $guardianparentscareofoccupation = $rowbeneficiaryquery['guardianparentscareofoccupation'];
        $problemcasestudies = $rowbeneficiaryquery['problemcasestudies'];
        $solution = $rowbeneficiaryquery['solution'];
        $comments = $rowbeneficiaryquery['comments'];
        $beneficiaryimg = $rowbeneficiaryquery['beneficiaryimg'];
        $creatdate = $rowbeneficiaryquery['creatdate'];
        $modifydate = $rowbeneficiaryquery['modifydate'];
        $eligible = $rowbeneficiaryquery['eligible'];
        $beneficiarystatus = $rowbeneficiaryquery['beneficiarystatus'];
            if($beneficiarystatus==0){
                 mysqli_query($con,"UPDATE beneficiary SET eligible='0' WHERE beneficiaryid='$beneficiaryid'");
            
                echo "<script>alert('Eligible has been save successfully Cancel...')</script>";
                echo "<script>window.open('beneficiary.php','_self')</script>";
            }else{
                echo "<script>alert('Kindly Click beneficiary Cancel Button...')</script>";
                echo "<script>window.open('beneficiary.php','_self')</script>";
            }
            
        }
    }
}
 ?>
 <?php 
        if(isset($_POST['Beneficiaries'])) 
        {
        $selectbeneficiaryquery = "select * from beneficiary";
        $runbeneficiaryQuery = mysqli_query($con,$selectbeneficiaryquery);
        $serialNum = 1;
        while ($rowbeneficiaryquery = mysqli_fetch_array($runbeneficiaryQuery)) {
        $serialNumber = $serialNum++;
        $beneficiaryid = $rowbeneficiaryquery['beneficiaryid'];
        
        $beneficiaryno = $rowbeneficiaryquery['beneficiaryno'];
        $date = $rowbeneficiaryquery['date'];
        $tag = $rowbeneficiaryquery['tag'];
        $project = $rowbeneficiaryquery['project'];
        $firstname = $rowbeneficiaryquery['firstname'];
        $lastname = $rowbeneficiaryquery['lastname'];
        $permanataddress = $rowbeneficiaryquery['permanataddress'];
        $currentaddress = $rowbeneficiaryquery['currentaddress'];
        $guardianparentscareofphonenumber = $rowbeneficiaryquery['guardianparentscareofphonenumber'];
        $whatsappnumber = $rowbeneficiaryquery['whatsappnumber'];
        $aadharnumber = $rowbeneficiaryquery['aadharnumber'];
        $guardianparentscareofoccupation = $rowbeneficiaryquery['guardianparentscareofoccupation'];
        $problemcasestudies = $rowbeneficiaryquery['problemcasestudies'];
        $solution = $rowbeneficiaryquery['solution'];
        $comments = $rowbeneficiaryquery['comments'];
        $beneficiaryimg = $rowbeneficiaryquery['beneficiaryimg'];
        $creatdate = $rowbeneficiaryquery['creatdate'];
        $modifydate = $rowbeneficiaryquery['modifydate'];
        $eligible = $rowbeneficiaryquery['eligible'];
        $beneficiarystatus = $rowbeneficiaryquery['beneficiarystatus'];
            foreach($_POST['beneficiaryselect'] as $beneficiaryid)
            {
                
               if($eligible == 1){
                    mysqli_query($con,"UPDATE beneficiary SET beneficiarystatus='1' WHERE beneficiaryid='$beneficiaryid'");

                    echo "<script>alert(' beneficiary has been save successfully Eligible...')</script>";
                    echo "<script>window.open('beneficiary.php','_self')</script>";
                }                                       
                else{
                    echo "<script>alert('Kindly Select Eligible Button')</script>";
                    echo "<script>window.open('beneficiary.php','_self')</script>";
                }
            }
        }
    }
        if(isset($_POST['beneficiariescancel'])) 
        {
            
        foreach($_POST['beneficiaryselect'] as $beneficiaryid)
        {
        mysqli_query($con,"UPDATE beneficiary SET beneficiarystatus='0' WHERE beneficiaryid='$beneficiaryid'");
        
        echo "<script>alert('beneficiary has been save successfully Cancel...')</script>";
        echo "<script>window.open('beneficiary.php','_self')</script>";
        }
    }

 ?>