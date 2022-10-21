<?php

session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
} else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
?>

    <div class="main-content page-content" style="background-color: #fff;">

        <!--==================================*
           Main Section
*====================================-->

        <div class="main-content-inner">
            <div class="row">
                <!-- Primary table -->
                <div class="col-12 mt-4">

                    <div class="card" style="box-shadow: none;">
                        <div class="card-body">
                            <h5 style="color: #00807c;">Donner - details</h5>
                         <a href="http://localhost/mmkfoundation/adm/donner.php" >  <button type="button" class="btn btn-outline-primary" style="border: 1px  solid #00807c;margin-left: 87%;width:100px;">Back</button></a>
                       
                            <div class="row">

                                <div class="col-sm-5" style="background-color:#f2f8f8;margin:10px;">
                                    <div class="row" style="padding: 35px;">
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <label>User name</label>
                                            </div>
                                            <div class="row">
                                                <label>Donate category</label>
                                            </div>
                                            <div class="row">
                                                <label>Donate amount</label>
                                            </div>
                                            <div class="row">
                                                <label>First name</label>
                                            </div>
                                            <div class="row">
                                                <label>Last name</label>
                                            </div>
                                            <div class="row">
                                                <label>Email</label>
                                            </div>
                                            <div class="row">
                                                <label>Phone</label>
                                            </div>
                                            <div class="row">
                                                <label>Address</label>
                                            </div>
                                            <div class="row">
                                                <label>City</label>
                                            </div>
                                           
                                           


                                        </div>
                                        <div class="col-sm-2">
                                            
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                          




                                        </div>
                                        <div class="col-sm-5">
                                            <?php
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
                                                    <div class="row">
                                                        <label><?= $donaterno; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $donatecategory; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $donateamount; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $firstname; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $lastname; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $email; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $phone; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $address; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $city; ?></label>
                                                    </div>

                                                  
                                                   
                                                    

                                            <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6" style="background-color:#f2f8f8;margin:10px;">
                                    <div class="row" style="padding: 35px;">
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <label>State</label>
                                            </div>
                                            <div class="row">
                                                <label>Pincode</label>
                                            </div>
                                            <div class="row">
                                                <label>Country</label>
                                            </div>
                                            <div class="row">
                                                <label>Nationality</label>
                                            </div>
                                            <div class="row">
                                                <label>Do you want 80g tax benefit?</label>
                                            </div>
                                            <div class="row">
                                                <label>DOB</label>
                                            </div>
                                            <div class="row">
                                                <label>Gender</label>
                                            </div>
                                            <div class="row">
                                                <label>PAN (Only for india)</label>
                                            </div>
                                            <div class="row">
                                                <label>Password</label>
                                            </div>
                                          
                                           


                                        </div>
                                        <div class="col-sm-2">
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>
                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                            <div class="row">
                                                <label>:</label>
                                            </div>

                                           

                                          




                                        </div>
                                        <div class="col-sm-5">
                                            <?php
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
                                                    <div class="row">
                                                        <label><?= $state; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $pincode; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $country; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $nationality; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $eightegtaxbenefit; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $gender; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $pan; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $password; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $password; ?></label>
                                                    </div>
                                                 
                                                    

                                            <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
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


    <?php } ?>