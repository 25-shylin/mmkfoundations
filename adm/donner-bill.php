<?php 
session_start();
 if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include('includes/header.php');
    include('includes/sidebar.php');
    if (isset($_GET['donaterprint'])) {
    $page_id = $_GET['donaterprint'];
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" id="printThisDiv">
                            <div class="invoice-area">
                                <div class="invoice-head">
                                    <div class="row">
                                        <div class="iv-left col-lg-6">
                                            <span><img src="logo/logo.png"></span>
                                        </div>

                                        <div class="iv-right col-lg-6 text-md-right">
                                            <span>Receipt No: #<?= $donaterno ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="invoice-address">
                                           <h3>Donation Certificate Receipt Under Section 80-G of the Income Tax Act, 1961</h3>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="invoice-address">
                                            <h3>Bill to</h3>
                                            <h5>Mr. <?= $firstname ?>. <?= $lastname ?></h5>
                                            <p>
                                               <?= $address ?>, <?= $city ?>, <br>
                                               <?= $state ?>, <?= $country ?>, <?= $pincode ?>  
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <ul class="invoice-date">
                                            <li>Invoice Date : <?= $creatdate ?></li>
                                            <li>Pan Number : <?= $pan ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                            <div class="invoice-address">
                                               <h5>Thank you very much for contributing to MMK Foundation!</h5>
                                                
                                            </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    
                                    <div class="col-md-6">
                                        <div class="invoice-address">
                                            <h3>The Sum of INR <?= $donateamount ?></h3>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <div class="invoice-date">
                                            <h3>Details of the Payment: </h3>
                                           
                                            <p>
                                               Transaction Number / Cheque/ cash Payment Id: XXXXXXXXXXXXXXXXXXXXXXXXXX. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    
                                    <div class="col-md-6">
                                        <div class="invoice-address">
                                            <h5>(Digital Signature)<br><br><br><br>
                                            APS<br>
                                            Founder- MMK Foundation</h5>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <div class="invoice-date">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    
                                    <div class="col-md-12">
                                        <div class="invoice-address">
                                            <p></p>
                                            <p>All donations made to MMK Foundation, Registration No.: BK4/2/2020 are exempt From Income tax under section 80-G of IT Act 1961 Vide Principal Commissioner of Income Tax/ Commissioner of Income Tax (Exemptions), Unique Registration Number -AAGTM7932DF20221 dated From 06-04-2022 to AY 2024-2025, subject to following conditions refer 80G.</p>
                                            <p>This Certificate is valid for Tax exemption in India only.</p>

                                            <p>To support us & find out more please visit: www.mmkfoundation.org</p>

                                             <p>Address: 235.A., Gandhi nagar, Opp to bsnl office, Attur (tk), Salem (dt), Tamilnadu (st), India  636102 Email Id- info@mmkfoundation.org Mobile Number - 9344020174</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <div class="invoice-date">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-buttons text-right">
                                
                                <input type="button" onclick="printDiv('printThisDiv')" value="Print" class="btn btn-primary d-block-mob" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================================*
                   End Main Section
        *====================================-->
    </div>
    <!--=================================*
           End Main Content Section
    *===================================-->
<script>
  function printDiv(elem)
  {
      var mywindow = window.open();
      var content = document.getElementById(elem).innerHTML;
      var realContent = document.body.innerHTML;
      mywindow.document.write(content);
      mywindow.document.close(); // necessary for IE >= 10
      mywindow.focus(); // necessary for IE >= 10*/
      mywindow.print();
      document.body.innerHTML = realContent;
      mywindow.close();
      return true;
  }
  </script>
<?php include('includes/footer.php') ?>
<?php } } } ?>