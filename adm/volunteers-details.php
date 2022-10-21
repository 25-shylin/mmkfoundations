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
                            <h5 style="color: #00807c;">Volunteers-details</h5>
                         <a href="http://localhost/mmkfoundation/adm/volunteers.php" >  <button type="button" class="btn btn-outline-primary" style="border: 1px  solid #00807c;margin-left: 85%;width:100px;">Back</button></a>
                       
                            <div class="row">

                                <div class="col-sm-11" style="background-color:#f2f8f8;margin:10px;">
                                    <div class="row" style="padding: 35px;">
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <label>Name</label>
                                            </div>
                                            <div class="row">
                                                <label>Mobile number</label>
                                            </div>
                                            <div class="row">
                                                <label>Email ID</label>
                                            </div>
                                            <div class="row">
                                                <label>DOB</label>
                                            </div>
                                            <div class="row">
                                                <label>Location</label>
                                            </div>
                                            <div class="row">
                                                <label>Whatsapp</label>
                                            </div>
                                            <div class="row">
                                                <label>Newsletter</label>
                                            </div>
                                            <div class="row">
                                                <label>Pincode</label>
                                            </div>
                                            <div class="row">
                                                <label>Organization</label>
                                            </div>
                                            <div class="row">
                                                <label>Volunteerimg</label>
                                            </div>
                                            <div class="row">
                                                <label>Creatdate</label>
                                            </div>
                                            <div class="row">
                                                <label>Modifydate</label>
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
                                            if (isset($_GET['volunteersedit'])) {
                                                $page_id = $_GET['volunteersedit'];
                                                $selectMemberQuery = "select * from volunteersindividuals where volunteersindividualsid='$page_id'";
                                                $runvolunteersQuery = mysqli_query($con, $selectMemberQuery);
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
                                                    $whatsapp = $rowvolunteerquery['whatsapp'];
                                                    $newsletter = $rowvolunteerquery['newsletter'];
                                                    $pincode = $rowvolunteerquery['pincode'];
                                                    $organization = $rowvolunteerquery['organization'];
                                                    $volunteerimg = $rowvolunteerquery['volunteerimg'];
                                                    $creatdate = $rowvolunteerquery['creatdate'];
                                                    $modifydate = $rowvolunteerquery['modifydate'];
                                                    $status = $rowvolunteerquery['status'];

                                            ?>
                                                    <div class="row">
                                                        <label><?= $name; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $mobileno; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $email; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $dob; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $location; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $whatsapp; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $newsletter; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $pincode; ?></label>
                                                    </div>

                                                    <div class="row">
                                                        <label><?= $organization; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $volunteerimg; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $creatdate; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label><?= $modifydate; ?></label>
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