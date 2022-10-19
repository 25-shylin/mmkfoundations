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
    if (isset($_GET['volunteersedit'])) {
    $page_id = $_GET['volunteersedit'];
      $selectMemberQuery = "select * from volunteersindividuals where volunteersindividualsid='$page_id'";
      $runvolunteersQuery = mysqli_query($con,$selectMemberQuery);
      $serialNum = 1;
      while ($rowvolunteerquery = mysqli_fetch_array($runvolunteersQuery)) {
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
                                <div class="col-xs-12">
                                <div class="card-box">
                                  <h4 class="header-title m-t-0 m-b-30">Member Details</h4>
                                    <form method="post" action="volunteersedit.php?volunteersindividualsid=<?= $volunteersindividualsid; ?>" enctype="multipart/form-data">
                                                <div class="form-group" hidden>
                                                    <label for="volunteersindividualsid">volunteersindividualsid</label>
                                                    <input type="text" class="form-control" id="volunteersindividualsid" value="<?= $volunteersindividualsid; ?>" name="volunteersindividualsid">
                                                </div>
                                                <div class="form-group" hidden>
                                                    <label for="volunteersindividualsno">volunteersindividualsno</label>
                                                    <input type="text" class="form-control" id="volunteersindividualsno" value="<?= $volunteersindividualsno; ?>" name="volunteersindividualsno">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Full Name *</label>
                                                    <input type="text" class="form-control" id="name" value="<?= $name; ?>" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobileno">Mobile *</label>
                                                    <input type="text" class="form-control" id="mobileno" value="<?= $mobileno; ?>" name="mobileno">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">E-mail *</label>
                                                    <input type="email" class="form-control" id="email" value="<?= $email; ?>" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="dob">Date of Birth *</label>
                                                    <input type="date" class="form-control" id="dob" value="<?= $dob; ?>" name="dob">
                                                </div>
                                                <div class="form-group">
                                                    <label for="location">Location *</label>
                                                    <input type="text" class="form-control" id="location" value="<?= $location; ?>" name="location">
                                                </div>
                                                <div class="form-group">
                                                    <label for="whatsapp">Permission to contact over whats-app *</label>
                                                    
                                                    <select class="form-control" name="whatsapp">
                                                        <option value="<?= $whatsapp; ?>"><?= $whatsapp; ?></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="newsletter">I would like to receive MMK’s newsletter and emails with updates on MMK’s upcoming events *</label>
                                                    
                                                    <select class="form-control" name="newsletter">
                                                        <option value="<?= $newsletter; ?>"><?= $newsletter; ?></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pincode">Pin code (For Local Volunteer Opportunities)</label>
                                                    <input type="text" class="form-control" id="pincode" value="<?= $pincode; ?>" name="pincode">
                                                </div>
                                                <div class="form-group">
                                                    <label for="organization">Organization (Company/College)</label>
                                                    <input type="text" class="form-control" id="organization" value="<?= $organization; ?>" name="organization">
                                                </div>
                                                <div class="form-group">
                                                    <label for="volunteersindividualsno">volunteersindividualsno</label>
                                                    <input type="text" class="form-control" id="volunteersindividualsno" value="<?= $volunteersindividualsno; ?>" name="volunteersindividualsno" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">password</label>
                                                    <input type="text" class="form-control" id="password" value="<?= $password; ?>" name="password">
                                                </div>
                                                
                                                
                                                <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                                                    <label>volunteerimg</label>
                                                
                                                    <img src="../volunteerimg/<?= $volunteerimg; ?>" width="100" height="100">
                                                    <input type="hidden" name="old_img" value="<?= $volunteerimg; ?>">
                                                    <input type="hidden" name="volunteerimg" value="<?= $volunteerimg; ?>">
                                                    <input type="file" class="form-control" id="volunteerimg" name="volunteerimg">
                                                </div>
                                                    <div class="col-xs-12">
                                                        <br>
                                                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
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
<?php } } } ?>
<?php 
 
      
     if (isset($_POST['submit'])) {
        $volunteersindividualsid = $_POST['volunteersindividualsid'];
        $volunteersindividualsno = $_POST['volunteersindividualsno'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $location = $_POST['location'];
        $whatsapp = $_POST['whatsapp'];
        $newsletter = $_POST['newsletter'];
        $pincode = $_POST['pincode'];
        $organization = $_POST['organization'];
        $modifydate = date("d/m/y");
        $old_img = $_POST['old_img'];

      //-----------------------------------------//

            $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
            if ($volunteerimg_1 != '') {
                   $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
                   $volunteerimg_tmp = $_FILES['volunteerimg'] ['tmp_name'];
                   $volunteerimg = $volunteersindividualsno."_".$volunteerimg_1;
             }
             else {
                $volunteerimg = $old_img;
             }     
     //-----------------------------------------//

        if ($volunteerimg_1 != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../volunteerimg/$old_img");
                move_uploaded_file($volunteerimg_tmp, "../volunteerimg/$volunteerimg");
             }
    
      $volunteerquery = "update volunteersindividuals set name = '$name', mobileno = '$mobileno', email = '$email', dob = '$dob', location = '$location', whatsapp = '$whatsapp', newsletter = '$newsletter', pincode = '$pincode', organization = '$organization', password = '$password', volunteerimg='$volunteerimg', modifydate= '$modifydate' where volunteersindividualsid = '$volunteersindividualsid'";
      
       if ($name == '') {
        echo "<script>alert('Please Enter Name')</script>";
       }else
          {
          mysqli_query($con, $volunteerquery);
          echo "<script>alert('Your volunteer Details Updated')</script>";
          echo "<script>window.open('volunteers.php','_self')</script>";
          
         }
     
     }

 ?>