<?php 
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
                            <h4 class="header-title">Health Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        
                                                        <div class="form-group">
                                                            <label for="date">Date</label>
                                                            <input type="date" class="form-control" id="date"  name="date">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="Tag">Tag</label>
                                                        <select name="tag" class="form-control">
                                                              <option value="No of eye camps conducted">No of eye camps conducted</option>
                                                              
                                                              <option value="No Of Sanitary Napkins Distributed">No Of Sanitary Napkins Distributed</option>
                                                        </select>
                                                    </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="project">Project</label>
                                                            <input type="text" class="form-control" id="project" name="project">
                                                        </div>
                                                    <div class="form-group">
                                                            <label for="firstname">First Name</label>
                                                            <input type="text" class="form-control" id="firstname" name="firstname">
                                                        </div>
                                                        
                                                    
                                                        <div class="form-group">
                                                            <label for="lastname">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname" name="lastname">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="permanataddress">Permanat Address</label>
                                                            <textarea class="form-control" id="permanataddress" name="permanataddress"></textarea>
                                                        </div>
                                                    
                                                        
                                                        <div class="form-group">
                                                            <label for="currentaddress">Current Address</label>
                                                            <textarea class="form-control" id="currentaddress" name="currentaddress"></textarea>
                                                        </div>
                                                        
                                                    
                                                        <div class="form-group">
                                                            <label for="guardianparentscareofphonenumber">Guardian/ Parents/ Care of - Phone Number</label>
                                                            <input type="text" class="form-control" id="guardianparentscareofphonenumber" name="guardianparentscareofphonenumber">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="whatsappnumber">Whatsapp Number</label>
                                                            <input type="text" class="form-control" id="whatsappnumber" name="whatsappnumber">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="aadharnumber">Aadhar Number</label>
                                                            <input type="text" class="form-control" id="aadharnumber" name="aadharnumber">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="guardianparentscareofoccupation">Guardian/ Parents/ Care of - Occupation</label>
                                                            <input type="text" class="form-control" id="guardianparentscareofoccupation" name="guardianparentscareofoccupation">
                                                        </div>
                                                    
                                                        
                                                        <div class="form-group">
                                                            <label for="problemcasestudies">Problem / Case Studies</label>
                                                            <textarea class="form-control" id="problemcasestudies" name="problemcasestudies"></textarea>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="solution">Solution</label>
                                                            <textarea class="form-control" id="solution" name="solution"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="comments">Comments</label>
                                                            <textarea class="form-control" id="comments" name="comments"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="healthimg">health Img</label>
                                                            <input type="file" class="form-control" id="healthimg" name="healthimg">
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

<?php }  ?>
<?php 
      
     if (isset($_POST['submit'])) {
        $healthno = "MMKH".rand(10000, 100000000);
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
        
        


    $selecthealthquerycount = "select * from health";
        $runcount = mysqli_query($con,$selecthealthquerycount);

        $healthnumber = mysqli_num_rows($runcount) + 1;

       $healthimg = $_FILES['healthimg'] ['name'];
       $healthimg_tmp = $_FILES['healthimg'] ['tmp_name'];

       $healthimg = $healthnumber."_".$healthimg;

        //-----------------------------------------//

       
        
      move_uploaded_file($healthimg_tmp, "../health/$healthimg");
      

       //-----------------------------------------//

      $healthquery = "insert into health(healthno, date, tag, project, firstname, lastname, permanataddress, currentaddress, guardianparentscareofphonenumber, whatsappnumber, aadharnumber, guardianparentscareofoccupation, problemcasestudies, solution, comments, healthimg)values('$healthno', '$date', '$tag', '$project', '$firstname', '$lastname', '$permanataddress', '$currentaddress', '$guardianparentscareofphonenumber', '$whatsappnumber', '$aadharnumber', '$guardianparentscareofoccupation', '$problemcasestudies', '$solution', '$comments', '$healthimg')";

       if ($firstname == '') {
        echo "<script>alert('please enter firstname')</script>";
       }else
          {
          mysqli_query($con, $healthquery);
          echo "<script>alert('Your health Details Added')</script>";
          echo "<script>window.open('health.php','_self')</script>";
          
         }
     
     }

 ?>