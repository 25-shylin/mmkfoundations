<?php include('include/database.php')?>
<?php include('include/header.php')?>
  <?php 
      $selectdonaterquery = "select * from donater ORDER BY donaterid DESC LIMIT 1";
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
        <!--Page Title-->
        <!-- <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Donate Now</h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="index-2.html">home &nbsp;/</a>
                        </li>
                        <li>Donate Now</li>
                    </ul>
                </div>
            </div>
        </section> -->
        <!--End Page Title-->

        <section class="section contact">
            <!-- container start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 ">
                       
                    </div>
                    
                    <div class="col-lg-6 col-md-7" id="printThisDiv">
                        <h2 style="color: #000; text-align: center;">Thank you for Donating to MMK Foundation!<br><br></h2>
                        <p style="text-align: center;">Transaction successful. Your Transaction ID is <strong><?= $donaterno ?></strong>
                        <br><br>
                        Thank you so much for your generous contribution. As permitted by law, your donations are tax deductible.  We will mail your e-receipt within 24 hours.
                        <br><br>
                        If you have any questions, please send an email to <strong>support@mmkfoundation.org</strong>  with the Transaction ID listed above.
                        <br><br></p>
                            <input type="button" onclick="printDiv('printThisDiv')" value="Print a Div" />

                    </div>
                  
                    <div class="col-lg-3 col-md-5 ">
                       
                    </div>
                </div>
            </div>
            <!-- container end -->
        </section>
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
<?php include('include/footer.php')?>

<?php 
   
    }
?>