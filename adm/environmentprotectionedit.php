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
    if (isset($_GET['environmentprotectionedit'])) {
    $page_id = $_GET['environmentprotectionedit'];
      $selectenvironmentprotectionquery = "select * from environmentprotection where environmentprotectionid = '$page_id'";
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
                            <h4 class="header-title">Environment Protection Edit Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="environmentprotectionedit.php?environmentprotectionedit=<?= $environmentprotectionid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group" hidden>
                                                            <label for="environmentprotectionno">environmentprotectionno</label>
                                                            <input type="text" class="form-control" id="environmentprotectionno"  name="environmentprotectionno" value="<?= $environmentprotectionno ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">Date</label>
                                                            <input type="date" class="form-control" id="date"  name="date" value="<?= $date ?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="Tag">Tag</label>
                                                        <select name="tag" class="form-control">
                                                            <option value="<?= $tag ?>"><?= $tag ?></option>
                                                           
                                                              <option value="Trees planted">Trees planted</option>
                                                              <option value="Trees Planned">Trees Planned</option>
                                                              
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
                                                            <label for="environmentprotectionimg">Environment Protection Img</label>
                                                            <img src="../environmentprotection/<?= $environmentprotectionimg; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img" value="<?= $environmentprotectionimg; ?>">
                                                            <input type="hidden" name="environmentprotectionimg" value="<?= $environmentprotectionimg; ?>">
                                                            <input type="file" class="form-control" id="environmentprotectionimg" name="environmentprotectionimg">
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
        $environmentprotectionno = $_POST['environmentprotectionno'];
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

            $environmentprotection_img = $_FILES['environmentprotectionimg'] ['name'];
            if ($environmentprotection_img != '') {
                   $environmentprotection_img = $_FILES['environmentprotectionimg'] ['name'];
                   $environmentprotectionimg_tmp = $_FILES['environmentprotectionimg'] ['tmp_name'];
                   $environmentprotectionimg = $environmentprotectionno."_".$environmentprotection_img;
             }
             else {
                $environmentprotectionimg = $old_img;
             }     
     //-----------------------------------------//


        if ($environmentprotection_img != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../environmentprotection/$old_img");
                move_uploaded_file($environmentprotectionimg_tmp, "../environmentprotection/$environmentprotectionimg");
             }

       
    
      $environmentprotectionquery = "update environmentprotection set date = '$date', tag = '$tag', project = '$project', firstname = '$firstname', lastname = '$lastname', permanataddress = '$permanataddress', currentaddress = '$currentaddress', guardianparentscareofphonenumber = '$guardianparentscareofphonenumber', whatsappnumber = '$whatsappnumber', aadharnumber = '$aadharnumber', guardianparentscareofoccupation = '$guardianparentscareofoccupation', problemcasestudies = '$problemcasestudies', solution = '$solution', comments = '$comments', environmentprotectionimg = '$environmentprotectionimg', modifydate = '$modifydate' where environmentprotectionid = '$environmentprotectionid'";
      
       if ($firstname == '') {
        echo "<script>alert('Please Enter First Name')</script>";
       }else
          {
          mysqli_query($con, $environmentprotectionquery);
          echo "<script>alert('Your environmentprotection Details Updated')</script>";
          echo "<script>window.open('environmentprotection.php','_self')</script>";
          
         }
     
     }

 ?>