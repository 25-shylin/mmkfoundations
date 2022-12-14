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
       
        $donatecategory = $rowdonaterquery['donatecategory'];
        $donateamount = $rowdonaterquery['donateamount'];
        $name = $rowdonaterquery['name'];
        $email = $rowdonaterquery['email'];
        $phone = $rowdonaterquery['phone'];
        $address = $rowdonaterquery['address'];
        $country= $rowdonaterquery['country'];
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
                                                        <label for="employeeno">Donate Category</label>
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
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name"  name="name" value="<?= $name ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control" id="email"  name="email" value="<?= $email ?>" >
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
                                                        <label for="country">Country</label>
                                                        <select name="country" class="form-control">
                                                          <option value="<?= $country ?>" title="<?= $country ?>"><?= $country ?></option>
                                                          <option value="India" title="India">India</option>
                                                          <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                                          <option value="??land Islands" title="??land Islands">??land Islands</option>
                                                          <option value="Albania" title="Albania">Albania</option>
                                                          <option value="Algeria" title="Algeria">Algeria</option>
                                                          <option value="American Samoa" title="American Samoa">American Samoa</option>
                                                          <option value="Andorra" title="Andorra">Andorra</option>
                                                          <option value="Angola" title="Angola">Angola</option>
                                                          <option value="Anguilla" title="Anguilla">Anguilla</option>
                                                          <option value="Antarctica" title="Antarctica">Antarctica</option>
                                                          <option value="Argentina" title="Argentina">Argentina</option>
                                                          <option value="Armenia" title="Armenia">Armenia</option>
                                                          <option value="Aruba" title="Aruba">Aruba</option>
                                                          <option value="Australia" title="Australia">Australia</option>
                                                          <option value="Austria" title="Austria">Austria</option>
                                                          <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                                          <option value="Bahamas" title="Bahamas">Bahamas</option>
                                                          <option value="Bahrain" title="Bahrain">Bahrain</option>
                                                          <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                                          <option value="Barbados" title="Barbados">Barbados</option>
                                                          <option value="Belarus" title="Belarus">Belarus</option>
                                                          <option value="Belgium" title="Belgium">Belgium</option>
                                                          <option value="Belize" title="Belize">Belize</option>
                                                          <option value="Benin" title="Benin">Benin</option>
                                                          <option value="Bermuda" title="Bermuda">Bermuda</option>
                                                          <option value="Bhutan" title="Bhutan">Bhutan</option>
                                                          <option value="Botswana" title="Botswana">Botswana</option>
                                                          <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                                                          <option value="Brazil" title="Brazil">Brazil</option>
                                                          <option value="Brunei" title="Brunei">Brunei</option>
                                                          <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                                          <option value="Burundi" title="Burundi">Burundi</option>
                                                          <option value="Cambodia" title="Cambodia">Cambodia</option>
                                                          <option value="Cameroon" title="Cameroon">Cameroon</option>
                                                          <option value="Canada" title="Canada">Canada</option>
                                                          <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                                          <option value="Chad" title="Chad">Chad</option>
                                                          <option value="Chile" title="Chile">Chile</option>
                                                          <option value="China" title="China">China</option>
                                                          <option value="Colombia" title="Colombia">Colombia</option>
                                                          <option value="Comoros" title="Comoros">Comoros</option>
                                                          <option value="Congo" title="Congo">Congo</option>
                                                          <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                                                          <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                                          <option value="C??te d'Ivoire" title="C??te d'Ivoire">C??te d'Ivoire</option>
                                                          <option value="Croatia" title="Croatia">Croatia</option>
                                                          <option value="Cuba" title="Cuba">Cuba</option>
                                                          <option value="Cura??ao" title="Cura??ao">Cura??ao</option>
                                                          <option value="Cyprus" title="Cyprus">Cyprus</option>
                                                          <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                                                          <option value="Denmark" title="Denmark">Denmark</option>
                                                          <option value="Djibouti" title="Djibouti">Djibouti</option>
                                                          <option value="Dominica" title="Dominica">Dominica</option>
                                                          <option value="Ecuador" title="Ecuador">Ecuador</option>
                                                          <option value="Egypt" title="Egypt">Egypt</option>
                                                          <option value="Eritrea" title="Eritrea">Eritrea</option>
                                                          <option value="Estonia" title="Estonia">Estonia</option>
                                                          <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                                          <option value="Fiji" title="Fiji">Fiji</option>
                                                          <option value="Finland" title="Finland">Finland</option>
                                                          <option value="France" title="France">France</option>
                                                          <option value="Gabon" title="Gabon">Gabon</option>
                                                          <option value="Gambia" title="Gambia">Gambia</option>
                                                          <option value="Georgia" title="Georgia">Georgia</option>
                                                          <option value="Germany" title="Germany">Germany</option>
                                                          <option value="Ghana" title="Ghana">Ghana</option>
                                                          <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                                          <option value="Greece" title="Greece">Greece</option>
                                                          <option value="Greenland" title="Greenland">Greenland</option>
                                                          <option value="Grenada" title="Grenada">Grenada</option>
                                                          <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                                                          <option value="Guam" title="Guam">Guam</option>
                                                          <option value="Guatemala" title="Guatemala">Guatemala</option>

                                                          <option value="Guernsey" title="Guernsey">Guernsey</option>
                                                          <option value="Guinea" title="Guinea">Guinea</option>
                                                          <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                                                          <option value="Guyana" title="Guyana">Guyana</option>
                                                          <option value="Haiti" title="Haiti">Haiti</option>
                                                          <option value="Honduras" title="Honduras">Honduras</option>
                                                          <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                                          <option value="Hungary" title="Hungary">Hungary</option>
                                                          <option value="Iceland" title="Iceland">Iceland</option>
                                                          <option value="Indonesia" title="Indonesia">Indonesia</option>
                                                          <option value="Iran" title="Iran">Iran</option>
                                                          <option value="Iraq" title="Iraq">Iraq</option>
                                                          <option value="Ireland" title="Ireland">Ireland</option>
                                                          <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                                          <option value="Israel" title="Israel">Israel</option>
                                                          <option value="Italy" title="Italy">Italy</option>
                                                          <option value="Jamaica" title="Jamaica">Jamaica</option>
                                                          <option value="Japan" title="Japan">Japan</option>
                                                          <option value="Jersey" title="Jersey">Jersey</option>
                                                          <option value="Jordan" title="Jordan">Jordan</option>
                                                          <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                                          <option value="Kenya" title="Kenya">Kenya</option>
                                                          <option value="Kiribati" title="Kiribati">Kiribati</option>
                                                          <option value="Korea" title="Korea">Korea</option>
                                                          <option value="Kuwait" title="Kuwait">Kuwait</option>
                                                          <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                                          <option value="Latvia" title="Latvia">Latvia</option>
                                                          <option value="Lebanon" title="Lebanon">Lebanon</option>
                                                          <option value="Lesotho" title="Lesotho">Lesotho</option>
                                                          <option value="Liberia" title="Liberia">Liberia</option>
                                                          <option value="Libya" title="Libya">Libya</option>
                                                          <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                                                          <option value="Lithuania" title="Lithuania">Lithuania</option>
                                                          <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                                          <option value="Macao" title="Macao">Macao</option>
                                                          <option value="Madagascar" title="Madagascar">Madagascar</option>
                                                          <option value="Malawi" title="Malawi">Malawi</option>
                                                          <option value="Malaysia" title="Malaysia">Malaysia</option>
                                                          <option value="Maldives" title="Maldives">Maldives</option>
                                                          <option value="Mali" title="Mali">Mali</option>
                                                          <option value="Malta" title="Malta">Malta</option>
                                                          <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                                                          <option value="Martinique" title="Martinique">Martinique</option>
                                                          <option value="Mauritania" title="Mauritania">Mauritania</option>
                                                          <option value="Mauritius" title="Mauritius">Mauritius</option>
                                                          <option value="Mayotte" title="Mayotte">Mayotte</option>
                                                          <option value="Mexico" title="Mexico">Mexico</option>
                                                          <option value="Monaco" title="Monaco">Monaco</option>
                                                          <option value="Mongolia" title="Mongolia">Mongolia</option>
                                                          <option value="Montenegro" title="Montenegro">Montenegro</option>
                                                          <option value="Montserrat" title="Montserrat">Montserrat</option>
                                                          <option value="Morocco" title="Morocco">Morocco</option>
                                                          <option value="Mozambique" title="Mozambique">Mozambique</option>
                                                          <option value="Myanmar" title="Myanmar">Myanmar</option>
                                                          <option value="Namibia" title="Namibia">Namibia</option>
                                                          <option value="Nauru" title="Nauru">Nauru</option>
                                                          <option value="Nepal" title="Nepal">Nepal</option>
                                                          <option value="Netherlands" title="Netherlands">Netherlands</option>
                                                          <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                                                          <option value="New Zealand" title="New Zealand">New Zealand</option>
                                                          <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                                          <option value="Niger" title="Niger">Niger</option>
                                                          <option value="Nigeria" title="Nigeria">Nigeria</option>
                                                          <option value="Niue" title="Niue">Niue</option>
                                                          <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
                                                          <option value="Norway" title="Norway">Norway</option>
                                                          <option value="Oman" title="Oman">Oman</option>
                                                          <option value="Pakistan" title="Pakistan">Pakistan</option>
                                                          <option value="Palau" title="Palau">Palau</option>
                                                          <option value="Panama" title="Panama">Panama</option>
                                                          <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                                                          <option value="Paraguay" title="Paraguay">Paraguay</option>
                                                          <option value="Peru" title="Peru">Peru</option>
                                                          <option value="Philippines" title="Philippines">Philippines</option>
                                                          <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                                                          <option value="Poland" title="Poland">Poland</option>
                                                          <option value="Portugal" title="Portugal">Portugal</option>
                                                          <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                                                          <option value="Qatar" title="Qatar">Qatar</option>
                                                          <option value="R??union" title="R??union">R??union</option>
                                                          <option value="Romania" title="Romania">Romania</option>
                                                          <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
                                                          <option value="Rwanda" title="Rwanda">Rwanda</option>
                                                          <option value="Saint Barth??lemy" title="Saint Barth??lemy">Saint Barth??lemy</option>
                                                          <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                                          <option value="Samoa" title="Samoa">Samoa</option>
                                                          <option value="San Marino" title="San Marino">San Marino</option>
                                                          <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                                          <option value="Senegal" title="Senegal">Senegal</option>
                                                          <option value="Serbia" title="Serbia">Serbia</option>
                                                          <option value="Seychelles" title="Seychelles">Seychelles</option>
                                                          <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                                          <option value="Singapore" title="Singapore">Singapore</option>
                                                          <option value="Slovakia" title="Slovakia">Slovakia</option>
                                                          <option value="Slovenia" title="Slovenia">Slovenia</option>
                                                          <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                                          <option value="Somalia" title="Somalia">Somalia</option>
                                                          <option value="South Africa" title="South Africa">South Africa</option>
                                                          <option value="South Georgia" title="South Georgia">South Georgia</option>
                                                          <option value="South Sudan" title="South Sudan">South Sudan</option>
                                                          <option value="Spain" title="Spain">Spain</option>
                                                          <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                                          <option value="Sudan" title="Sudan">Sudan</option>
                                                          <option value="Suriname" title="Suriname">Suriname</option>
                                                          <option value="Swaziland" title="Swaziland">Swaziland</option>
                                                          <option value="Sweden" title="Sweden">Sweden</option>
                                                          <option value="Switzerland" title="Switzerland">Switzerland</option>
                                                          <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
                                                          <option value="Taiwan" title="Taiwan">Taiwan</option>
                                                          <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                                          <option value="Tanzania" title="Tanzania">Tanzania</option>
                                                          <option value="Thailand" title="Thailand">Thailand</option>
                                                          <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                                          <option value="Togo" title="Togo">Togo</option>
                                                          <option value="Tokelau" title="Tokelau">Tokelau</option>
                                                          <option value="Tonga" title="Tonga">Tonga</option>
                                                          <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                          <option value="Tunisia" title="Tunisia">Tunisia</option>
                                                          <option value="Turkey" title="Turkey">Turkey</option>
                                                          <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                                          <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                                          <option value="Uganda" title="Uganda">Uganda</option>
                                                          <option value="Ukraine" title="Ukraine">Ukraine</option>
                                                          <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
                                                          <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                                          <option value="United States" title="United States">United States</option>
                                                          <option value="Uruguay" title="Uruguay">Uruguay</option>
                                                          <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                                          <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                                          <option value="Venezuela" title="Venezuela">Venezuela</option>
                                                          <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                                          <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                          <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                                          <option value="Yemen" title="Yemen">Yemen</option>
                                                          <option value="Zambia" title="Zambia">Zambia</option>
                                                          <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                                    </select>
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $pan = $_POST['pan'];
        $modifydate = date("d/m/y");
        
      $donaterquery = "update donater set donatecategory = '$donatecategory', donateamount = '$donateamount', name = '$name', email = '$email', phone = '$phone', address = '$address', country = '$country', dob = '$dob', gender = '$gender', pan = '$pan', modifydate = '$modifydate' where donaterid = '$donaterid'";
      
       if ($donatecategory == '') {
        echo "<script>alert('Please Enter Donater Category')</script>";
       }else
          {
          mysqli_query($con, $donaterquery);
          echo "<script>alert('Your Donater Details Updated')</script>";
          echo "<script>window.open('donater.php','_self')</script>";
          
         }
     
     }

 ?>