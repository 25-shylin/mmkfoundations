<?php 
session_start();
 if (!isset($_SESSION['username'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    $pageuser = $_SESSION['username'];
    $selectdonaterquery = "select * from donater where donaterno = '$pageuser'";
      $rundonaterQuery = mysqli_query($con,$selectdonaterquery);
       $serialNum = 1;
       while ($rowdonaterquery = mysqli_fetch_array($rundonaterQuery)) {
        $serialNumber = $serialNum++;
        $donaterid = $rowdonaterquery['donaterid'];
        $donaterno = $rowdonaterquery['donaterno'];
        $password = $rowdonaterquery['password'];
        $donatecategory = $rowdonaterquery['donatecategory'];
        $donateamount = $rowdonaterquery['donateamount'];
        $firstname = $rowdonaterquery['firstname'];
        $lastname = $rowdonaterquery['lastname'];
        $email = $rowdonaterquery['email'];
        $phone = $rowdonaterquery['phone'];
        $address = $rowdonaterquery['address'];
        $city= $rowdonaterquery['city'];
        $state= $rowdonaterquery['state'];
        $pincode= $rowdonaterquery['pincode'];
        $country= $rowdonaterquery['country'];
        $nationality= $rowdonaterquery['nationality'];
        $eightegtaxbenefit= $rowdonaterquery['eightegtaxbenefit'];
        $dob = $rowdonaterquery['dob'];
        $gender = $rowdonaterquery['gender'];
        $pan = $rowdonaterquery['pan'];
        $creatdate = $rowdonaterquery['creatdate'];
        $modifydate = $rowdonaterquery['modifydate'];
        $status = $rowdonaterquery['status'];
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
                                                            <label for="donaterno">Donater No</label>
                                                            <input type="text" class="form-control" id="donaterno"  name="donaterno">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label for="firstname">First Name</label>
                                                            <input type="text" class="form-control" id="firstname"  name="firstname">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label for="donatecategory">Donate Category</label>
                                                            <input type="text" class="form-control" id="donatecategory"  name="donatecategory">
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
                                                        <!-- <div class="form-group">
                                                            <label for="newsphoto">Command Photo</label>
                                                            <input type="file" class="form-control" id="commandphoto" name="commandphoto">
                                                        </div> -->
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
        
      $selectdonaterquery = "select * from donater where donaterno = '$pageuser'";
      $rundonaterQuery = mysqli_query($con,$selectdonaterquery);
       $serialNum = 1;
       while ($rowdonaterquery = mysqli_fetch_array($rundonaterQuery)) {
        $serialNumber = $serialNum++;
        $donaterid = $rowdonaterquery['donaterid'];
        $donaterno = $rowdonaterquery['donaterno'];
        $password = $rowdonaterquery['password'];
        $donatecategory = $rowdonaterquery['donatecategory'];
        $donateamount = $rowdonaterquery['donateamount'];
        $firstname = $rowdonaterquery['firstname'];
        $lastname = $rowdonaterquery['lastname'];
        $email = $rowdonaterquery['email'];
        $phone = $rowdonaterquery['phone'];
        $address = $rowdonaterquery['address'];
        $city= $rowdonaterquery['city'];
        $state= $rowdonaterquery['state'];
        $pincode= $rowdonaterquery['pincode'];
        $country= $rowdonaterquery['country'];
        $nationality= $rowdonaterquery['nationality'];
        $eightegtaxbenefit= $rowdonaterquery['eightegtaxbenefit'];
        $dob = $rowdonaterquery['dob'];
        $gender = $rowdonaterquery['gender'];
        $pan = $rowdonaterquery['pan'];
        $creatdate = $rowdonaterquery['creatdate'];
        $modifydate = $rowdonaterquery['modifydate'];
        $status = $rowdonaterquery['status'];

        $commandtitle = $_POST['commandtitle'];
        $commanddate = $_POST['commanddate'];
        $commanddescription = $_POST['commanddescription'];
       
        //-----------------------------------------//
        
       /*$selectcommandquerycount = "select * from volunteerscommand";
       $runcount = mysqli_query($con, $selectcommandquerycount);
       $commandnumber = mysqli_num_rows($runcount)+1;

       $commandphoto_command = $_FILES['commandphoto'] ['name'];
       $commandphoto_tmp = $_FILES['commandphoto'] ['tmp_name'];

       $commandphoto = $commandnumber."_".$commandphoto_command;*/

        
        
      move_uploaded_file($commandphoto_tmp, "../commandphoto/$commandphoto");
      
      

       //-----------------------------------------//

      $commandquery = "insert into donatercommand(firstname, donaterno, donatecategory, commandtitle, commanddate, commanddescription)values('$firstname', '".$donaterno."', '$donatecategory', '$commandtitle', '$commanddate', '$commanddescription')";
      
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