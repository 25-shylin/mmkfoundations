<?php 
session_start();
 if (!isset($_SESSION['username'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    $page_user = $_SESSION['username'];
    $selectvolunteerquery = "select * from volunteersindividuals where volunteersindividualsno = '$page_user'";
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
                            <h4 class="header-title">Command Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group" hidden>
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name"  name="name">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label for="volunteersindividualsno">Volunteers No</label>
                                                            <input type="text" class="form-control" id="volunteersindividualsno"  name="volunteersindividualsno">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="commandtitle">Command Title</label>
                                                            <input type="text" class="form-control" id="commandtitle"  name="commandtitle">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="commanddate">Command Date</label>
                                                            <input type="date" class="form-control" id="commanddate"  name="commanddate">
                                                        </div>

                                                    
                                                        <div class="form-group">
                                                            <label for="newsdescription">Command Description</label>
                                                            
                                                            <textarea class="form-control" id="commanddescription" name="commanddescription"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="newsphoto">Command Photo</label>
                                                            <input type="file" class="form-control" id="commandphoto" name="commandphoto">
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

<?php } } ?>
<?php 
      
     if (isset($_POST['submit'])) {
        
      $selectvolunteerquery = "select * from volunteersindividuals where volunteersindividualsno = '$page_user'";
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

        $commandtitle = $_POST['commandtitle'];
        $commanddate = $_POST['commanddate'];
        $commanddescription = $_POST['commanddescription'];
       
        //-----------------------------------------//
        
       $selectcommandquerycount = "select * from volunteerscommand";
       $runcount = mysqli_query($con, $selectcommandquerycount);
       $commandnumber = mysqli_num_rows($runcount)+1;

       $commandphoto_command = $_FILES['commandphoto'] ['name'];
       $commandphoto_tmp = $_FILES['commandphoto'] ['tmp_name'];

       $commandphoto = $commandnumber."_".$commandphoto_command;

        
        
      move_uploaded_file($commandphoto_tmp, "../commandphoto/$commandphoto");
      
      

       //-----------------------------------------//

      $commandquery = "insert into volunteerscommand(firstname, volunteersno, commandtitle, commanddate, commanddescription, commandphoto)values('$name', '".$volunteersindividualsno."', '$commandtitle', '$commanddate', '$commanddescription', '$commandphoto')";
      
       if ($commandtitle == '') {
        echo "<script>alert('Please Enter Command Title')</script>";
       }else
          {
          mysqli_query($con, $commandquery);
          echo "<script>alert('Your Command Details Added')</script>";
          echo "<script>window.open('dashboard.php','_self')</script>";
          
         }
     
     }
}
 ?>