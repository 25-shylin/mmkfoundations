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
    if (isset($_GET['donateredit'])) {
    $page_id = $_GET['donateredit'];
      $selectdonaterquery = "select * from donater where donaterid = '$page_id'";
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
                            <h4 class="header-title">Donater Edit Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="donateredit.php?donateredit=<?= $donaterid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                        <label for="donaterno">User Name</label>
                                                        <input type="text" class="form-control" id="donaterno" name="donaterno" value="<?= $donaterno ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Donate Category">Donate Category</label>
                                                        <select name="donatecategory" class="form-control">
                                                            <option value="<?= $donatecategory ?>"><?= $donatecategory ?></option>
                                                              <option value="Education">Education</option>
                                                              <option value="Health">Health</option>
                                                              <option value="Livelihood">Livelihood</option>
                                                              <option value="Women Empowerment">Women Empowerment</option>
                                                              <option value="Disaster Response">Disaster Response</option>
                                                              <option value="Environmental Protection">Environmental Protection</option>
                                                              <option value=" Kid for Kid"> Kid for Kid</option>
                                                              
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="donateamount">Donate amount</label>
                                                        <input type="text" class="form-control" id="donateamount"  name="donateamount" value="<?= $donateamount ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="firstname">First Name</label>
                                                        <input type="text" class="form-control" id="firstname"  name="firstname" value="<?= $firstname ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lastname">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname"  name="lastname" value="<?= $lastname ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email"  name="email" value="<?= $email ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" id="phone"  name="phone" value="<?= $phone ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control" id="address"  name="address" value="<?= $address ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" class="form-control" id="city"  name="city" value="<?= $city ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="state">State</label>
                                                        <input type="text" class="form-control" id="state"  name="state" value="<?= $state ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pincode">Pincode</label>
                                                        <input type="text" class="form-control" id="pincode"  name="pincode" value="<?= $pincode ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" id="country"  name="country" value="<?= $country ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nationality">Nationality</label>
                                                        <input type="text" class="form-control" id="nationality"  name="nationality" value="<?= $nationality ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eightegtaxbenefit">Do you want 80g tax benefit?</label>
                                                        <input type="text" class="form-control" id="eightegtaxbenefit"  name="eightegtaxbenefit" value="<?= $eightegtaxbenefit ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dob">Date of Birth</label>
                                                        <input type="date" class="form-control" id="dob" name="dob" value="<?= $dob ?>">
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select name="gender" class="form-control">
                                                            <option value="<?= $gender ?>"><?= $gender ?></option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                          </select>
                                                        </div>
                                                    <div class="form-group">
                                                        <label for="pan">PAN(Only for India)</label>
                                                        <input type="text" class="form-control" id="pan" name="pan" value="<?= $pan ?>">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="text" class="form-control" id="password" name="password" value="<?= $password ?>">
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
<?php } } }?>
<?php 
 
      
     if (isset($_POST['submit'])) {
        $donatecategory = $_POST['donatecategory'];
        $donateamount = $_POST['donateamount'];
        $donaterno = $_POST['donaterno'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $country = $_POST['country'];
        $nationality = $_POST['nationality'];
        $eightegtaxbenefit = $_POST['eightegtaxbenefit'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $pan = $_POST['pan'];
        $modifydate = date("d/m/y");
        
      $donaterquery = "update donater set password = '$password', donatecategory = '$donatecategory', donateamount = '$donateamount', firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', address = '$address', city = '$city', state = '$state', pincode = '$pincode', country = '$country', nationality = '$nationality', eightegtaxbenefit = '$eightegtaxbenefit', dob = '$dob', gender = '$gender', pan = '$pan', modifydate = '$modifydate' where donaterid = '$donaterid'";
      
       if ($donatecategory == '') {
        echo "<script>alert('Please Enter Donater Category')</script>";
       }else
          {
          mysqli_query($con, $donaterquery);
          echo "<script>alert('Your Donater Details Updated')</script>";
          echo "<script>window.open('donner.php','_self')</script>";
          
         }
     
     }

 ?>