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
    if (isset($_GET['disasterresponseedit'])) {
    $page_id = $_GET['disasterresponseedit'];
      $selectdisasterresponsequery = "select * from disasterresponse where disasterresponseid = '$page_id'";
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
                            <h4 class="header-title">disasterresponse Edit Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="disasterresponseedit.php?disasterresponseedit=<?= $disasterresponseid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group" hidden>
                                                            <label for="disasterresponseno">disasterresponseno</label>
                                                            <input type="text" class="form-control" id="disasterresponseno"  name="disasterresponseno" value="<?= $disasterresponseno ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">Date</label>
                                                            <input type="date" class="form-control" id="date"  name="date" value="<?= $date ?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="Tag">Tag</label>
                                                        <select name="tag" class="form-control">
                                                            <option value="<?= $tag ?>"><?= $tag ?></option>
                                                           
                                                              <option value="Dry Ration Kits">Dry Ration Kits</option>
                                                              <option value="Meals Served">Meals Served</option>
                                                              <option value="Clothes and Blankets">Clothes and Blankets</option>
                                                              
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
                                                            <label for="disasterresponseimg">disasterresponse Img</label>
                                                            <img src="../disasterresponse/<?= $disasterresponseimg; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img" value="<?= $disasterresponseimg; ?>">
                                                            <input type="hidden" name="disasterresponseimg" value="<?= $disasterresponseimg; ?>">
                                                            <input type="file" class="form-control" id="disasterresponseimg" name="disasterresponseimg">
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
        $disasterresponseno = $_POST['disasterresponseno'];
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

            $disasterresponse_img = $_FILES['disasterresponseimg'] ['name'];
            if ($disasterresponse_img != '') {
                   $disasterresponse_img = $_FILES['disasterresponseimg'] ['name'];
                   $disasterresponseimg_tmp = $_FILES['disasterresponseimg'] ['tmp_name'];
                   $disasterresponseimg = $disasterresponseno."_".$disasterresponse_img;
             }
             else {
                $disasterresponseimg = $old_img;
             }     
     //-----------------------------------------//


        if ($disasterresponse_img != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../disasterresponse/$old_img");
                move_uploaded_file($disasterresponseimg_tmp, "../disasterresponse/$disasterresponseimg");
             }

       
    
      $disasterresponsequery = "update disasterresponse set date = '$date', tag = '$tag', project = '$project', firstname = '$firstname', lastname = '$lastname', permanataddress = '$permanataddress', currentaddress = '$currentaddress', guardianparentscareofphonenumber = '$guardianparentscareofphonenumber', whatsappnumber = '$whatsappnumber', aadharnumber = '$aadharnumber', guardianparentscareofoccupation = '$guardianparentscareofoccupation', problemcasestudies = '$problemcasestudies', solution = '$solution', comments = '$comments', disasterresponseimg = '$disasterresponseimg', modifydate = '$modifydate' where disasterresponseid = '$disasterresponseid'";
      
       if ($firstname == '') {
        echo "<script>alert('Please Enter First Name')</script>";
       }else
          {
          mysqli_query($con, $disasterresponsequery);
          echo "<script>alert('Your disasterresponse Details Updated')</script>";
          echo "<script>window.open('disasterresponse.php','_self')</script>";
          
         }
     
     }

 ?>