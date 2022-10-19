<?php 
session_start();
 if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    $page_user = $_SESSION['admin_name'];
    if (isset($_GET['beneficiaryedit'])) {
    $page_id = $_GET['beneficiaryedit'];
      $selectbeneficiaryquery = "select * from beneficiary where beneficiaryid = '$page_id'";
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
                            <h4 class="header-title">Employee Edit Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="beneficiaryedit.php?beneficiaryedit=<?= $beneficiaryid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group" hidden>
                                                            <label for="beneficiaryno">beneficiaryno</label>
                                                            <input type="text" class="form-control" id="beneficiaryno"  name="beneficiaryno" value="<?= $beneficiaryno ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">Date</label>
                                                            <input type="date" class="form-control" id="date"  name="date" value="<?= $date ?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="Tag">Tag</label>
                                                        <select name="tag" class="form-control">
                                                            <option value="<?= $tag ?>"><?= $tag ?></option>
                                                            <!-- <option value="Health">Health</option> -->
                                                              <option value="Education">Education</option>
                                                              <!-- <option value="Health">Health</option> -->
                                                              <option value="Livelihood">Livelihood</option>
                                                              <option value="Women Empowerment">Women Empowerment</option>
                                                             <!--  <option value="Disaster Response">Disaster Response</option>
                                                              <option value="Environmental Protection">Environmental Protection</option> -->
                                                              <option value="Kid for Kid">Kid for Kid</option>
                                                              
                                                        </select>
                                                    </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="project">Project</label>
                                                            <input type="text" class="form-control" id="project" name="project" value="<?= $project ?>">
                                                        </div>
                                                    <div class="form-group">
                                                            <label for="firstname">First Name</label>
                                                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $firstname ?>">
                                                        </div>
                                                        
                                                    
                                                        <div class="form-group">
                                                            <label for="lastname">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $lastname ?>">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="permanataddress">Permanat Address</label>
                                                            <textarea class="form-control" id="permanataddress" name="permanataddress"><?= $permanataddress ?></textarea>
                                                        </div>
                                                    
                                                        
                                                        <div class="form-group">
                                                            <label for="currentaddress">Current Address</label>
                                                            <textarea class="form-control" id="currentaddress" name="currentaddress"><?= $currentaddress ?></textarea>
                                                        </div>
                                                        
                                                    
                                                        <div class="form-group">
                                                            <label for="guardianparentscareofphonenumber">Guardian/ Parents/ Care of - Phone Number</label>
                                                            <input type="text" class="form-control" id="guardianparentscareofphonenumber" name="guardianparentscareofphonenumber" value="<?= $guardianparentscareofphonenumber ?>">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="whatsappnumber">Whatsapp Number</label>
                                                            <input type="text" class="form-control" id="whatsappnumber" name="whatsappnumber" value="<?= $whatsappnumber ?>">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="aadharnumber">Aadhar Number</label>
                                                            <input type="text" class="form-control" id="aadharnumber" name="aadharnumber" value="<?= $aadharnumber ?>">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="guardianparentscareofoccupation">Guardian/ Parents/ Care of - Occupation</label>
                                                            <input type="text" class="form-control" id="guardianparentscareofoccupation" name="guardianparentscareofoccupation" value="<?= $guardianparentscareofoccupation ?>">
                                                        </div>
                                                    
                                                        
                                                        <div class="form-group">
                                                            <label for="problemcasestudies">Problem / Case Studies</label>
                                                            <textarea class="form-control" id="problemcasestudies" name="problemcasestudies"><?= $problemcasestudies ?></textarea>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="solution">Solution</label>
                                                            <textarea class="form-control" id="solution" name="solution"><?= $solution ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="comments">Comments</label>
                                                            <textarea class="form-control" id="comments" name="comments"><?= $comments ?></textarea>
                                                        </div>

                                                        
                                                        
                                                        <div class="form-group">
                                                            <label for="beneficiaryimg">Beneficiary Img</label>
                                                            <img src="../beneficiary/<?= $beneficiaryimg; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img" value="<?= $beneficiaryimg; ?>">
                                                            <input type="hidden" name="beneficiaryimg" value="<?= $beneficiaryimg; ?>">
                                                            <input type="file" class="form-control" id="beneficiaryimg" name="beneficiaryimg">
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
<?php } }}?>

<?php 
 
      
     if (isset($_POST['submit'])) {
        $beneficiaryno = $_POST['beneficiaryno'];
        $date = $_POST['date'];
        $tag = $_POST['tag'];
        $project = $_POST['project'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $permanataddress = $_POST['permanataddress'];
        $currentaddress = $_POST['currentaddress'];
        $guardianparentscareofphonenumber = $_POST['guardianparentscareofphonenumber'];
        $whatsappnumber = $_POST['whatsappnumber'];
        $aadharnumber = $_POST['aadharnumber'];
        $guardianparentscareofoccupation = $_POST['guardianparentscareofoccupation'];
        $problemcasestudies = $_POST['problemcasestudies'];
        $solution = $_POST['solution'];
        $comments = $_POST['comments'];
        $modifydate = date("d/m/y");

        $old_img = $_POST['old_img'];
       

      //-----------------------------------------//

            $beneficiary_img = $_FILES['beneficiaryimg'] ['name'];
            if ($beneficiary_img != '') {
                   $beneficiary_img = $_FILES['beneficiaryimg'] ['name'];
                   $beneficiaryimg_tmp = $_FILES['beneficiaryimg'] ['tmp_name'];
                   $beneficiaryimg = $beneficiaryno."_".$beneficiary_img;
             }
             else {
                $beneficiaryimg = $old_img;
             }     
     //-----------------------------------------//


        if ($beneficiary_img != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../beneficiary/$old_img");
                move_uploaded_file($beneficiaryimg_tmp, "../beneficiary/$beneficiaryimg");
             }

       
    
      $employeequery = "update beneficiary set date = '$date', tag = '$tag', project = '$project', firstname = '$firstname', lastname = '$lastname', permanataddress = '$permanataddress', currentaddress = '$currentaddress', guardianparentscareofphonenumber = '$guardianparentscareofphonenumber', whatsappnumber = '$whatsappnumber', aadharnumber = '$aadharnumber', guardianparentscareofoccupation = '$guardianparentscareofoccupation', problemcasestudies = '$problemcasestudies', solution = '$solution', comments = '$comments', beneficiaryimg = '$beneficiaryimg', modifydate = '$modifydate' where beneficiaryid = '$beneficiaryid'";
      
       if ($firstname == '') {
        echo "<script>alert('Please Enter First Name')</script>";
       }else
          {
          mysqli_query($con, $employeequery);
          echo "<script>alert('Your Beneficiary Details Updated')</script>";
          echo "<script>window.open('beneficiary.php','_self')</script>";
          
         }
     
     }

 ?>