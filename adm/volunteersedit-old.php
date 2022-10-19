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
    if (isset($_GET['volunteersid'])) {
    $page_id = $_GET['volunteersid'];
      $selectMemberQuery = "select * from volunteers where volunteersid='$page_id'";
      $runMemberQuery = mysqli_query($con,$selectMemberQuery);
      $serialNum = 1;
      while ($rowvolunteerquery = mysqli_fetch_array($runMemberQuery)) {
            $serialNumber = $serialNum++;
            $volunteersid = $rowvolunteerquery['volunteersid'];
            $volunteersno = $rowvolunteerquery['volunteersno'];
            $firstname = $rowvolunteerquery['firstname'];
            $middlename = $rowvolunteerquery['middlename'];
            $lastname = $rowvolunteerquery['lastname'];
            $dob = $rowvolunteerquery['dob'];
            $gender = $rowvolunteerquery['gender'];
            $nationality = $rowvolunteerquery['nationality'];
            $address= $rowvolunteerquery['address'];
            $city = $rowvolunteerquery['city'];
            $othercity = $rowvolunteerquery['othercity'];
            $state = $rowvolunteerquery['state'];
            $otherstate = $rowvolunteerquery['otherstate'];
            $country = $rowvolunteerquery['country'];
            $pincode = $rowvolunteerquery['pincode'];
            $localguardian = $rowvolunteerquery['localguardian'];
            $localcity = $rowvolunteerquery['localcity'];
            $localothercity = $rowvolunteerquery['localothercity'];
            $localstate = $rowvolunteerquery['localstate'];
            $localotherstate = $rowvolunteerquery['localotherstate'];
            $localcountry = $rowvolunteerquery['localcountry'];
            $localpincode = $rowvolunteerquery['localpincode'];
            $phoneresid = $rowvolunteerquery['phoneresid'];
            $mobileno = $rowvolunteerquery['mobileno'];
            $email = $rowvolunteerquery['email'];
            $facebook = $rowvolunteerquery['facebook'];
            $degree = $rowvolunteerquery['degree'];
            $university = $rowvolunteerquery['university'];
            $workyears = $rowvolunteerquery['workyears'];
            $industry = $rowvolunteerquery['industry'];
            $profession = $rowvolunteerquery['profession'];
            $english = $rowvolunteerquery['english'];
            $otherlanguage = $rowvolunteerquery['otherlanguage'];
            $workknowledge = $rowvolunteerquery['workknowledge'];
            $itskills = $rowvolunteerquery['itskills'];
            $programarea = $rowvolunteerquery['programarea'];
            $workarea = $rowvolunteerquery['workarea'];
            $relocation = $rowvolunteerquery['relocation'];
            $months = $rowvolunteerquery['months'];
            $days = $rowvolunteerquery['days'];
            $hours = $rowvolunteerquery['hours'];
            $password = $rowvolunteerquery['password'];
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
                                    <form method="post" action="volunteersedit.php?volunteersid=<?= $volunteersid; ?>" enctype="multipart/form-data">
                                       
                                                <div class="form-group">
                                                    <label for="firstname">firstname</label>
                                                    <input type="text" class="form-control" id="firstname" value="<?= $firstname; ?>" name="firstname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="middlename">middlename</label>
                                                    <input type="text" class="form-control" id="middlename" value="<?= $middlename; ?>" name="middlename">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastname">lastname</label>
                                                    <input type="text" class="form-control" id="lastname" value="<?= $lastname; ?>" name="lastname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="dob">dob</label>
                                                    <input type="date" class="form-control" id="dob" value="<?= $dob; ?>" name="dob">
                                                </div>
                                                 <div class="form-group">
                                                  <label for="gender">Gender</label>
                                                  <select name="gender" class="form-control">
                                                    <option><?= $gender; ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                  </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nationality">nationality</label>
                                                    <input type="text" class="form-control" id="nationality" value="<?= $nationality; ?>" name="nationality">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">address</label>
                                                    <input type="text" class="form-control" id="address" value="<?= $address; ?>" name="address">
                                                </div>
                                                <div class="form-group">
                                                      <label for="city">city</label>
                                                      <select name="city" class="form-control">
                                                            <option><?= $city; ?></option>
                                                        
                                                            <option value="Adilabad">Adilabad</option>
                                                            <option value="Agra">Agra</option>
                                                            <option value="Ahmedabad">  Ahmedabad</option>
                                                            <option value="Ahmednagar"> Ahmednagar </option>
                                                            <option value="Aizawl"> Aizawl </option>
                                                            <option value="Ajmer">  Ajmer</option>
                                                            <option value="Akola">  Akola</option>
                                                            <option value="Alappuzha">  Alappuzha</option>
                                                            <option value="Aligarh"> Aligarh</option>
                                                            <option value="Alirajpur">  Alirajpur</option>
                                                            <option value="Allahabad">  Allahabad</option>
                                                            <option value="Almora"> Almora </option>
                                                            <option value="Alwar">  Alwar</option>
                                                            <option value="Ambala"> Ambala </option>
                                                            <option value="Ambedkar Nagar"> Ambedkar Nagar </option>
                                                            <option value="Amrawati">Amrawati</option>
                                                            <option value="Amreli District"> Amreli District</option>
                                                            <option value="Amritsar">Amritsar</option>
                                                            <option value="Anand">  Anand</option>
                                                            <option value="Anantapur">  Anantapur</option>
                                                            <option value="Anantnag">Anantnag</option>
                                                            <option value="Angul">  Angul</option>
                                                            <option value="Anjaw">  Anjaw</option>
                                                            <option value="Anuppur"> Anuppur</option>
                                                            <option value="Araria"> Araria </option>
                                                            <option value="Ariyalur">Ariyalur</option>
                                                            <option value="Ashok Nagar"> Ashok Nagar</option>
                                                            <option value="Auraiya"> Auraiya</option>
                                                            <option value="Aurangabad"> Aurangabad </option>
                                                            <option value="Aurangabad"> Aurangabad </option>
                                                            <option value="Azamgarh">Azamgarh</option>
                                                            <option value="Badaun"> Badaun </option>
                                                            <option value="Badgam"> Badgam </option>
                                                            <option value="Bagalkot">Bagalkot</option>
                                                            <option value="Bageshwar">  Bageshwar</option>
                                                            <option value="Bagpat"> Bagpat </option>
                                                            <option value="Bahraich">Bahraich</option>
                                                            <option value="Balaghat">Balaghat</option>
                                                            <option value="Baleswar">Baleswar</option>
                                                            <option value="Ballia"> Ballia </option>
                                                            <option value="Balrampur">  Balrampur</option>
                                                            <option value="Banaskantha"> Banaskantha</option>
                                                            <option value="Banda">  Banda</option>
                                                            <option value="Bandipore">  Bandipore</option>
                                                            <option value="Bangalore Rural District">Bangalore Rural District</option>
                                                            <option value="Bangalore Urban District">Bangalore Urban District</option>
                                                            <option value="Banka">  Banka</option>
                                                            <option value="Bankura"> Bankura</option>
                                                            <option value="Banswara">Banswara</option>
                                                            <option value="Barabanki">  Barabanki</option>
                                                            <option value="Baramula">Baramula</option>
                                                            <option value="Baran">  Baran</option>
                                                            <option value="Bardhaman">  Bardhaman</option>
                                                            <option value="Bareilly">Bareilly</option>
                                                            <option value="Bargarh"> Bargarh</option>
                                                            <option value="Barmer"> Barmer </option>
                                                            <option value="Barpeta"> Barpeta</option>
                                                            <option value="Barwani"> Barwani</option>
                                                            <option value="Bastar"> Bastar </option>
                                                            <option value="Basti">  Basti</option>
                                                            <option value="Bathinda">Bathinda</option>
                                                            <option value="Beed">Beed</option>
                                                            <option value="Begusarai">  Begusarai</option>
                                                            <option value="Belgaum"> Belgaum</option>
                                                            <option value="Bellary"> Bellary</option>
                                                            <option value="Betul">  Betul</option>
                                                            <option value="Bhadrak"> Bhadrak</option>
                                                            <option value="Bhagalpur">  Bhagalpur</option>
                                                            <option value="Bhandara">Bhandara</option>
                                                            <option value="Bharatpur">  Bharatpur</option>
                                                            <option value="Bharuch"> Bharuch</option>
                                                            <option value="Bhavnagar">  Bhavnagar</option>
                                                            <option value="Bhilwara">Bhilwara</option>
                                                            <option value="Bhind">  Bhind</option>
                                                            <option value="Bhiwani"> Bhiwani</option>
                                                            <option value="Bhojpur"> Bhojpur</option>
                                                            <option value="Bhopal"> Bhopal </option>
                                                            <option value="Bidar">  Bidar</option>
                                                            <option value="Bijapur"> Bijapur</option>
                                                            <option value="Bijnor"> Bijnor </option>
                                                            <option value="Bikaner"> Bikaner</option>
                                                            <option value="Bilaspur">Bilaspur</option>
                                                            <option value="Bilaspur">Bilaspur</option>
                                                            <option value="Birbhum"> Birbhum</option>
                                                            <option value="Bishnupur">  Bishnupur</option>
                                                            <option value="Bokaro"> Bokaro </option>
                                                            <option value="Bolangir">Bolangir</option>
                                                            <option value="Bongaigaon"> Bongaigaon </option>
                                                            <option value="Boudh">  Boudh</option>
                                                            <option value="Bulandshahr"> Bulandshahr</option>
                                                            <option value="Buldhana">Buldhana</option>
                                                            <option value="Bundi">  Bundi</option>
                                                            <option value="Burhanpur">  Burhanpur</option>
                                                            <option value="Buxar">  Buxar</option>
                                                            <option value="Cachar"> Cachar </option>
                                                            <option value="Central Delhi">  Central Delhi</option>
                                                            <option value="Chamarajnagar">  Chamarajnagar</option>
                                                            <option value="Chamba"> Chamba </option>
                                                            <option value="Chamoli"> Chamoli</option>
                                                            <option value="Champawat">  Champawat</option>
                                                            <option value="Champhai">Champhai</option>
                                                            <option value="Chandauli">  Chandauli</option>
                                                            <option value="Chandel"> Chandel</option>
                                                            <option value="Chandrapur"> Chandrapur </option>
                                                            <option value="Changlang">  Changlang</option>
                                                            <option value="Chatra"> Chatra </option>
                                                            <option value="Chennai"> Chennai</option>
                                                            <option value="Chhatarpur"> Chhatarpur </option>
                                                            <option value="Chhindwara"> Chhindwara </option>
                                                            <option value="Chikballapur">Chikballapur</option>
                                                            <option value="Chikmagalur"> Chikmagalur</option>
                                                            <option value="Chitradurga"> Chitradurga</option>
                                                            <option value="Chitrakoot"> Chitrakoot </option>
                                                            <option value="Chittoor">Chittoor</option>
                                                            <option value="Chittorgarh"> Chittorgarh</option>
                                                            <option value="Churachandpur">  Churachandpur</option>
                                                            <option value="Churu">  Churu</option>
                                                            <option value="Coimbatore"> Coimbatore </option>
                                                            <option value="Cooch Behar"> Cooch Behar</option>
                                                            <option value="Cuddalore">  Cuddalore</option>
                                                            <option value="Cuttack"> Cuttack</option>
                                                            <option value="Dahod">  Dahod</option>
                                                            <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
                                                            <option value="Dakshina Kannada">Dakshina Kannada</option>
                                                            <option value="Daman">  Daman</option>
                                                            <option value="Damoh">  Damoh</option>
                                                            <option value="Dantewada">  Dantewada</option>
                                                            <option value="Darbhanga">  Darbhanga</option>
                                                            <option value="Darjeeling"> Darjeeling </option>
                                                            <option value="Darrang"> Darrang</option>
                                                            <option value="Datia">  Datia</option>
                                                            <option value="Dausa">  Dausa</option>
                                                            <option value="Davanagere"> Davanagere </option>
                                                            <option value="Debagarh">Debagarh</option>
                                                            <option value="Dehradun">Dehradun</option>
                                                            <option value="Deoghar"> Deoghar</option>
                                                            <option value="Deoria"> Deoria </option>
                                                            <option value="Dewas">  Dewas</option>
                                                            <option value="Dhalai"> Dhalai </option>
                                                            <option value="Dhamtari">Dhamtari</option>
                                                            <option value="Dhanbad"> Dhanbad</option>
                                                            <option value="Dhar">Dhar</option>
                                                            <option value="Dharmapuri"> Dharmapuri </option>
                                                            <option value="Dharwad"> Dharwad</option>
                                                            <option value="Dhemaji"> Dhemaji</option>
                                                            <option value="Dhenkanal">  Dhenkanal</option>
                                                            <option value="Dholpur"> Dholpur</option>
                                                            <option value="Dhubri"> Dhubri </option>
                                                            <option value="Dhule">  Dhule</option>
                                                            <option value="Dibang Valley">  Dibang Valley</option>
                                                            <option value="Dibrugarh">  Dibrugarh</option>
                                                            <option value="Dimapur"> Dimapur</option>
                                                            <option value="Dindigul">Dindigul</option>
                                                            <option value="Dindori"> Dindori</option>
                                                            <option value="Diu"> Diu</option>
                                                            <option value="Doda">Doda</option>
                                                            <option value="Dumka">  Dumka</option>
                                                            <option value="Dungapur">Dungapur</option>
                                                            <option value="Durg">Durg</option>
                                                            <option value="East Delhi"> East Delhi </option>
                                                            <option value="East Garo Hills"> East Garo Hills</option>
                                                            <option value="East Godavari">  East Godavari</option>
                                                            <option value="East Kameng"> East Kameng</option>
                                                            <option value="East Khasi Hills">East Khasi Hills</option>
                                                            <option value="East Sikkim"> East Sikkim</option>
                                                            <option value="Ernakulam">  Ernakulam</option>
                                                            <option value="Erode">  Erode</option>
                                                            <option value="Etah">Etah</option>
                                                            <option value="Etawah"> Etawah </option>
                                                            <option value="Faizabad">Faizabad</option>
                                                            <option value="Faridabad">  Faridabad</option>
                                                            <option value="Faridkot">Faridkot</option>
                                                            <option value="Farrukhabad"> Farrukhabad</option>
                                                            <option value="Fatehabad">  Fatehabad</option>
                                                            <option value="Fatehgarh Sahib"> Fatehgarh Sahib</option>
                                                            <option value="Fatehpur">Fatehpur</option>
                                                            <option value="Firozabad">  Firozabad</option>
                                                            <option value="Firozpur">Firozpur</option>
                                                            <option value="Gadag">  Gadag</option>
                                                            <option value="Gadchiroli"> Gadchiroli </option>
                                                            <option value="Gajapati">Gajapati</option>
                                                            <option value="Gandhinagar"> Gandhinagar</option>
                                                            <option value="Ganganagar"> Ganganagar </option>
                                                            <option value="Ganjam"> Ganjam </option>
                                                            <option value="Garhwa"> Garhwa </option>
                                                            <option value="Gautam Buddha Nagar"> Gautam Buddha Nagar</option>
                                                            <option value="Gaya">Gaya</option>
                                                            <option value="Ghaziabad">  Ghaziabad</option>
                                                            <option value="Ghazipur">Ghazipur</option>
                                                            <option value="Giridih"> Giridih</option>
                                                            <option value="Goalpara">Goalpara</option>
                                                            <option value="Godda">  Godda</option>
                                                            <option value="Golaghat">Golaghat</option>
                                                            <option value="Gonda">  Gonda</option>
                                                            <option value="Gondiya"> Gondiya</option>
                                                            <option value="Gopalganj">  Gopalganj</option>
                                                            <option value="Gorkakhpur"> Gorkakhpur </option>
                                                            <option value="Gulbarga">Gulbarga</option>
                                                            <option value="Gumla">  Gumla</option>
                                                            <option value="Guna">Guna</option>
                                                            <option value="Guntur"> Guntur </option>
                                                            <option value="Gurdaspur">  Gurdaspur</option>
                                                            <option value="Gurgaon"> Gurgaon</option>
                                                            <option value="Gwalior"> Gwalior</option>
                                                            <option value="Hailakandi"> Hailakandi </option>
                                                            <option value="Hamirpur">Hamirpur</option>
                                                            <option value="Hamirpur">Hamirpur</option>
                                                            <option value="Hanumangarh"> Hanumangarh</option>
                                                            <option value="Harda">  Harda</option>
                                                            <option value="Hardoi"> Hardoi </option>
                                                            <option value="Haridwar">Haridwar</option>
                                                            <option value="Hassan"> Hassan </option>
                                                            <option value="Haveri District"> Haveri District</option>
                                                            <option value="Hazaribagh"> Hazaribagh </option>
                                                            <option value="Hingoli"> Hingoli</option>
                                                            <option value="Hissar"> Hissar </option>
                                                            <option value="Hooghly"> Hooghly</option>
                                                            <option value="Hoshangabad"> Hoshangabad</option>
                                                            <option value="Hoshiarpur"> Hoshiarpur </option>
                                                            <option value="Howrah"> Howrah </option>
                                                            <option value="Hyderabad">  Hyderabad</option>
                                                            <option value="Idukki"> Idukki </option>
                                                            <option value="Imphal East"> Imphal East</option>
                                                            <option value="Imphal West"> Imphal West</option>
                                                            <option value="Indore"> Indore </option>
                                                            <option value="Jabalpur">Jabalpur</option>
                                                            <option value="Jagatsinghpur">  Jagatsinghpur</option>
                                                            <option value="Jaintia Hills">  Jaintia Hills</option>
                                                            <option value="Jaipur"> Jaipur </option>
                                                            <option value="Jaisalmer">  Jaisalmer</option>
                                                            <option value="Jajapur"> Jajapur</option>
                                                            <option value="Jalandhar">  Jalandhar</option>
                                                            <option value="Jalaun"> Jalaun </option>
                                                            <option value="Jalgaon"> Jalgaon</option>
                                                            <option value="Jalna">  Jalna</option>
                                                            <option value="Jalore"> Jalore </option>
                                                            <option value="Jalpaiguri"> Jalpaiguri </option>
                                                            <option value="Jammu">  Jammu</option>
                                                            <option value="Jamnagar">Jamnagar</option>
                                                            <option value="Jamui">  Jamui</option>
                                                            <option value="Janjgir-Champa"> Janjgir-Champa </option>
                                                            <option value="Jashpur"> Jashpur</option>
                                                            <option value="Jaunpur District">Jaunpur District</option>
                                                            <option value="Jehanabad">  Jehanabad</option>
                                                            <option value="Jhabua"> Jhabua </option>
                                                            <option value="Jhajjar"> Jhajjar</option>
                                                            <option value="Jhalawar">Jhalawar</option>
                                                            <option value="Jhansi"> Jhansi </option>
                                                            <option value="Jharsuguda"> Jharsuguda </option>
                                                            <option value="Jind">Jind</option>
                                                            <option value="Jodhpur"> Jodhpur</option>
                                                            <option value="Jorhat"> Jorhat </option>
                                                            <option value="Juhnjhunun"> Juhnjhunun </option>
                                                            <option value="Junagadh">Junagadh</option>
                                                            <option value="Jyotiba Phule Nagar"> Jyotiba Phule Nagar</option>
                                                            <option value="Kadapa"> Kadapa </option>
                                                            <option value="Kaimur"> Kaimur </option>
                                                            <option value="Kaithal"> Kaithal</option>
                                                            <option value="Kalahandi">  Kalahandi</option>
                                                            <option value="Kanchipuram"> Kanchipuram</option>
                                                            <option value="Kandhamal">  Kandhamal</option>
                                                            <option value="Kangra"> Kangra </option>
                                                            <option value="Kanker"> Kanker </option>
                                                            <option value="Kannauj"> Kannauj</option>
                                                            <option value="Kannur"> Kannur </option>
                                                            <option value="Kanpur Dehat">Kanpur Dehat</option>
                                                            <option value="Kanpur Nagar">Kanpur Nagar</option>
                                                            <option value="Kanshiram Nagar"> Kanshiram Nagar</option>
                                                            <option value="Kanyakumari"> Kanyakumari</option>
                                                            <option value="Kapurthala"> Kapurthala </option>
                                                            <option value="Karaikal">Karaikal</option>
                                                            <option value="Karauli"> Karauli</option>
                                                            <option value="Karbi Anglong">  Karbi Anglong</option>
                                                            <option value="Kargil"> Kargil </option>
                                                            <option value="Karimganj">  Karimganj</option>
                                                            <option value="Karimnagar"> Karimnagar </option>
                                                            <option value="Karnal"> Karnal </option>
                                                            <option value="Karur">  Karur</option>
                                                            <option value="Kasaragod">  Kasaragod</option>
                                                            <option value="Kathua"> Kathua </option>
                                                            <option value="Katihar"> Katihar</option>
                                                            <option value="Katni">  Katni</option>
                                                            <option value="Kaushambi">  Kaushambi</option>
                                                            <option value="Kawardha">Kawardha</option>
                                                            <option value="Kendrapara"> Kendrapara </option>
                                                            <option value="Kendujhar">  Kendujhar</option>
                                                            <option value="Khagaria">Khagaria</option>
                                                            <option value="Khammam"> Khammam</option>
                                                            <option value="Khandwa"> Khandwa</option>
                                                            <option value="Khargone">Khargone</option>
                                                            <option value="Kheda">  Kheda</option>
                                                            <option value="Khordha"> Khordha</option>
                                                            <option value="Kinnaur"> Kinnaur</option>
                                                            <option value="Kishanganj"> Kishanganj </option>
                                                            <option value="Kodagu"> Kodagu </option>
                                                            <option value="Koderma"> Koderma</option>
                                                            <option value="Kohima"> Kohima </option>
                                                            <option value="Kokrajhar">  Kokrajhar</option>
                                                            <option value="Kolar">  Kolar</option>
                                                            <option value="Kolasib"> Kolasib</option>
                                                            <option value="Kolhapur">Kolhapur</option>
                                                            <option value="Kolkata"> Kolkata</option>
                                                            <option value="Kollam"> Kollam </option>
                                                            <option value="Koppal"> Koppal </option>
                                                            <option value="Koraput"> Koraput</option>
                                                            <option value="Korba">  Korba</option>
                                                            <option value="Koriya"> Koriya </option>
                                                            <option value="Kota">Kota</option>
                                                            <option value="Kottayam">Kottayam</option>
                                                            <option value="Kozhikode">  Kozhikode</option>
                                                            <option value="Krishna"> Krishna</option>
                                                            <option value="Kulu">Kulu</option>
                                                            <option value="Kupwara"> Kupwara</option>
                                                            <option value="Kurnool"> Kurnool</option>
                                                            <option value="Kurukshetra"> Kurukshetra</option>
                                                            <option value="Kushinagar"> Kushinagar </option>
                                                            <option value="Kutch">  Kutch</option>
                                                            <option value="Lahaul and Spiti">Lahaul and Spiti</option>
                                                            <option value="Lakhimpur">  Lakhimpur</option>
                                                            <option value="Lakhimpur Kheri"> Lakhimpur Kheri</option>
                                                            <option value="Lakhisarai"> Lakhisarai </option>
                                                            <option value="Lalitpur">Lalitpur</option>
                                                            <option value="Latur">  Latur</option>
                                                            <option value="Lawngtlai">  Lawngtlai</option>
                                                            <option value="Leh"> Leh</option>
                                                            <option value="Lohardaga">  Lohardaga</option>
                                                            <option value="Lohit">  Lohit</option>
                                                            <option value="Lower Subansiri"> Lower Subansiri</option>
                                                            <option value="Lucknow"> Lucknow</option>
                                                            <option value="Ludhiana">Ludhiana</option>
                                                            <option value="Lunglei"> Lunglei</option>
                                                            <option value="Madhepura">  Madhepura</option>
                                                            <option value="Madhubani">  Madhubani</option>
                                                            <option value="Madurai"> Madurai</option>
                                                            <option value="Mahamaya Nagar"> Mahamaya Nagar </option>
                                                            <option value="Maharajganj"> Maharajganj</option>
                                                            <option value="Mahasamund"> Mahasamund </option>
                                                            <option value="Mahbubnagar"> Mahbubnagar</option>
                                                            <option value="Mahe">Mahe</option>
                                                            <option value="Mahendragarh">Mahendragarh</option>
                                                            <option value="Mahoba"> Mahoba </option>
                                                            <option value="Mainpuri">Mainpuri</option>
                                                            <option value="Malappuram"> Malappuram </option>
                                                            <option value="Malda">  Malda</option>
                                                            <option value="Malkangiri"> Malkangiri </option>
                                                            <option value="Mamit">  Mamit</option>
                                                            <option value="Mandi">  Mandi</option>
                                                            <option value="Mandla"> Mandla </option>
                                                            <option value="Mandsaur">Mandsaur</option>
                                                            <option value="Mandya"> Mandya </option>
                                                            <option value="Mansa">  Mansa</option>
                                                            <option value="Marigaon">Marigaon</option>
                                                            <option value="Mathura"> Mathura</option>
                                                            <option value="Mau"> Mau</option>
                                                            <option value="Mayurbhanj"> Mayurbhanj </option>
                                                            <option value="Medak">  Medak</option>
                                                            <option value="Meerut"> Meerut </option>
                                                            <option value="Mehsana"> Mehsana</option>
                                                            <option value="Mewat">  Mewat</option>
                                                            <option value="Midnapore">  Midnapore</option>
                                                            <option value="Mirzapur">Mirzapur</option>
                                                            <option value="Moga">Moga</option>
                                                            <option value="Mokokchung"> Mokokchung </option>
                                                            <option value="Mon"> Mon</option>
                                                            <option value="Moradabad">  Moradabad</option>
                                                            <option value="Morena"> Morena </option>
                                                            <option value="Mukatsar">Mukatsar</option>
                                                            <option value="Mumbai City"> Mumbai City</option>
                                                            <option value="Mumbai suburban"> Mumbai suburban</option>
                                                            <option value="Munger"> Munger </option>
                                                            <option value="Murshidabad"> Murshidabad</option>
                                                            <option value="Muzaffarnagar">  Muzaffarnagar</option>
                                                            <option value="Muzaffarpur"> Muzaffarpur</option>
                                                            <option value="Mysore"> Mysore </option>
                                                            <option value="Nabarangpur"> Nabarangpur</option>
                                                            <option value="Nadia">  Nadia</option>
                                                            <option value="Nagaon"> Nagaon </option>
                                                            <option value="Nagapattinam">Nagapattinam</option>
                                                            <option value="Nagaur"> Nagaur </option>
                                                            <option value="Nagpur"> Nagpur </option>
                                                            <option value="Nainital">Nainital</option>
                                                            <option value="Nalanda"> Nalanda</option>
                                                            <option value="Nalbari"> Nalbari</option>
                                                            <option value="Nalgonda">Nalgonda</option>
                                                            <option value="Namakkal">Namakkal</option>
                                                            <option value="Nanded"> Nanded </option>
                                                            <option value="Nandurbar">  Nandurbar</option>
                                                            <option value="Narmada"> Narmada</option>
                                                            <option value="Narsinghpur"> Narsinghpur</option>
                                                            <option value="Nashik"> Nashik </option>
                                                            <option value="Navsari"> Navsari</option>
                                                            <option value="Nawada"> Nawada </option>
                                                            <option value="Nawan Shehar">Nawan Shehar</option>
                                                            <option value="Nayagarh">Nayagarh</option>
                                                            <option value="Neemuch"> Neemuch</option>
                                                            <option value="Nellore"> Nellore</option>
                                                            <option value="New Delhi">  New Delhi</option>
                                                            <option value="Nicobar"> Nicobar</option>
                                                            <option value="Nizamabad">  Nizamabad</option>
                                                            <option value="North 24 Parganas">  North 24 Parganas</option>
                                                            <option value="North and Middle Andaman">North and Middle Andaman</option>
                                                            <option value="North Cachar Hills"> North Cachar Hills </option>
                                                            <option value="North Delhi"> North Delhi</option>
                                                            <option value="North East Delhi">North East Delhi</option>
                                                            <option value="North Goa">  North Goa</option>
                                                            <option value="North Sikkim">North Sikkim</option>
                                                            <option value="North Tripura">  North Tripura</option>
                                                            <option value="North West Delhi">North West Delhi</option>
                                                            <option value="Nuapada"> Nuapada</option>
                                                            <option value="Osmanabad">  Osmanabad</option>
                                                            <option value="Pakur">  Pakur</option>
                                                            <option value="Palakkad">Palakkad</option>
                                                            <option value="Palamu"> Palamu </option>
                                                            <option value="Pali">Pali</option>
                                                            <option value="Palwal"> Palwal </option>
                                                            <option value="Panchkula">  Panchkula</option>
                                                            <option value="Panchmahal"> Panchmahal </option>
                                                            <option value="Panipat"> Panipat</option>
                                                            <option value="Panna">  Panna</option>
                                                            <option value="Papum Pare"> Papum Pare </option>
                                                            <option value="Parbhani">Parbhani</option>
                                                            <option value="Pashchim Champaran"> Pashchim Champaran </option>
                                                            <option value="Pashchim Singhbhum"> Pashchim Singhbhum </option>
                                                            <option value="Patan">  Patan</option>
                                                            <option value="Pathanamthitta"> Pathanamthitta </option>
                                                            <option value="Patiala"> Patiala</option>
                                                            <option value="Patna">  Patna</option>
                                                            <option value="Pauri Garhwal">  Pauri Garhwal</option>
                                                            <option value="Perambalur"> Perambalur </option>
                                                            <option value="Phek">Phek</option>
                                                            <option value="Pilibhit">Pilibhit</option>
                                                            <option value="Pithoragharh">Pithoragharh</option>
                                                            <option value="Poonch"> Poonch </option>
                                                            <option value="Porbandar">  Porbandar</option>
                                                            <option value="Prakasam">Prakasam</option>
                                                            <option value="Pratapgarh"> Pratapgarh </option>
                                                            <option value="Pratapgarh"> Pratapgarh </option>
                                                            <option value="Puducherry"> Puducherry </option>
                                                            <option value="Pudukkottai"> Pudukkottai</option>
                                                            <option value="Pulwama"> Pulwama</option>
                                                            <option value="Pune">Pune</option>
                                                            <option value="Purba Champaran"> Purba Champaran</option>
                                                            <option value="Purba Singhbhum"> Purba Singhbhum</option>
                                                            <option value="Puri">Puri</option>
                                                            <option value="Purnia"> Purnia </option>
                                                            <option value="Purulia"> Purulia</option>
                                                            <option value="Rae Bareli"> Rae Bareli </option>
                                                            <option value="Raichur"> Raichur</option>
                                                            <option value="Raigad"> Raigad </option>
                                                            <option value="Raigarh"> Raigarh</option>
                                                            <option value="Raipur"> Raipur </option>
                                                            <option value="Raisen"> Raisen </option>
                                                            <option value="Rajauri"> Rajauri</option>
                                                            <option value="Rajgarh"> Rajgarh</option>
                                                            <option value="Rajkot"> Rajkot </option>
                                                            <option value="Rajnandgaon"> Rajnandgaon</option>
                                                            <option value="Rajsamand">  Rajsamand</option>
                                                            <option value="Ramanagara"> Ramanagara </option>
                                                            <option value="Ramanathapuram"> Ramanathapuram </option>
                                                            <option value="Ramgarh"> Ramgarh</option>
                                                            <option value="Rampur"> Rampur </option>
                                                            <option value="Ranchi"> Ranchi </option>
                                                            <option value="Rangareddi"> Rangareddi </option>
                                                            <option value="Ratlam"> Ratlam </option>
                                                            <option value="Ratnagiri">  Ratnagiri</option>
                                                            <option value="Rayagada">Rayagada</option>
                                                            <option value="Rewa">Rewa</option>
                                                            <option value="Rewari"> Rewari </option>
                                                            <option value="Ri-Bhoi"> Ri-Bhoi</option>
                                                            <option value="Rohtak"> Rohtak </option>
                                                            <option value="Rohtas"> Rohtas </option>
                                                            <option value="Rudraprayag"> Rudraprayag</option>
                                                            <option value="Rupnagar">Rupnagar</option>
                                                            <option value="Sabarkantha"> Sabarkantha</option>
                                                            <option value="Sagar">  Sagar</option>
                                                            <option value="Saharanpur"> Saharanpur </option>
                                                            <option value="Saharsa"> Saharsa</option>
                                                            <option value="Sahibganj">  Sahibganj</option>
                                                            <option value="Saiha">  Saiha</option>
                                                            <option value="Salem">  Salem</option>
                                                            <option value="Samastipur"> Samastipur </option>
                                                            <option value="Samba">  Samba</option>
                                                            <option value="Sambalpur">  Sambalpur</option>
                                                            <option value="Sangli"> Sangli </option>
                                                            <option value="Sangrur"> Sangrur</option>
                                                            <option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
                                                            <option value="Sant Ravidas Nagar"> Sant Ravidas Nagar </option>
                                                            <option value="Saran">  Saran</option>
                                                            <option value="Satara"> Satara </option>
                                                            <option value="Satna">  Satna</option>
                                                            <option value="Sawai Madhopur"> Sawai Madhopur </option>
                                                            <option value="Sehore"> Sehore </option>
                                                            <option value="Senapati">Senapati</option>
                                                            <option value="Seoni">  Seoni</option>
                                                            <option value="Seraikela and Kharsawan"> Seraikela and Kharsawan</option>
                                                            <option value="Serchhip">Serchhip</option>
                                                            <option value="Shahdol"> Shahdol</option>
                                                            <option value="Shahjahanpur">Shahjahanpur</option>
                                                            <option value="Shajapur">Shajapur</option>
                                                            <option value="Sheikhpura"> Sheikhpura </option>
                                                            <option value="Sheohar"> Sheohar</option>
                                                            <option value="Sheopur"> Sheopur</option>
                                                            <option value="Shimla"> Shimla </option>
                                                            <option value="Shimoga"> Shimoga</option>
                                                            <option value="Shivpuri">Shivpuri</option>
                                                            <option value="Shravasti">  Shravasti</option>
                                                            <option value="Sibsagar">Sibsagar</option>
                                                            <option value="Siddharthnagar"> Siddharthnagar </option>
                                                            <option value="Sidhi">  Sidhi</option>
                                                            <option value="Sikar">  Sikar</option>
                                                            <option value="Sindhudurg"> Sindhudurg </option>
                                                            <option value="Singrauli">  Singrauli</option>
                                                            <option value="Sirmaur"> Sirmaur</option>
                                                            <option value="Sirohi"> Sirohi </option>
                                                            <option value="Sirsa">  Sirsa</option>
                                                            <option value="Sitamarhi">  Sitamarhi</option>
                                                            <option value="Sitapur"> Sitapur</option>
                                                            <option value="Sivagangai"> Sivagangai </option>
                                                            <option value="Siwan">  Siwan</option>
                                                            <option value="Solan">  Solan</option>
                                                            <option value="Solapur"> Solapur</option>
                                                            <option value="Sonbhadra">  Sonbhadra</option>
                                                            <option value="Sonepat"> Sonepat</option>
                                                            <option value="Sonitpur">Sonitpur</option>
                                                            <option value="South 24 Parganas">  South 24 Parganas</option>
                                                            <option value="South Andaman">  South Andaman</option>
                                                            <option value="South Delhi"> South Delhi</option>
                                                            <option value="South Garo Hills">South Garo Hills</option>
                                                            <option value="South Goa">  South Goa</option>
                                                            <option value="South Sikkim">South Sikkim</option>
                                                            <option value="South Tripura">  South Tripura</option>
                                                            <option value="South West Delhi">South West Delhi</option>
                                                            <option value="Srikakulam"> Srikakulam </option>
                                                            <option value="Srinagar">Srinagar</option>
                                                            <option value="Subarnapur"> Subarnapur </option>
                                                            <option value="Sultanpur">  Sultanpur</option>
                                                            <option value="Sundargarh"> Sundargarh </option>
                                                            <option value="Supaul"> Supaul </option>
                                                            <option value="Surat">  Surat</option>
                                                            <option value="Surendranagar">  Surendranagar</option>
                                                            <option value="Surguja"> Surguja</option>
                                                            <option value="Tamenglong"> Tamenglong </option>
                                                            <option value="Tehri Garhwal">  Tehri Garhwal</option>
                                                            <option value="Thane">  Thane</option>
                                                            <option value="Thanjavur">  Thanjavur</option>
                                                            <option value="The Dangs">  The Dangs</option>
                                                            <option value="The Nilgiris">The Nilgiris</option>
                                                            <option value="Theni">  Theni</option>
                                                            <option value="Thiruvallur"> Thiruvallur</option>
                                                            <option value="Thiruvananthapuram"> Thiruvananthapuram </option>
                                                            <option value="Thiruvarur"> Thiruvarur </option>
                                                            <option value="Thoothukudi"> Thoothukudi</option>
                                                            <option value="Thoubal"> Thoubal</option>
                                                            <option value="Thrissur">Thrissur</option>
                                                            <option value="Tikamgarh">  Tikamgarh</option>
                                                            <option value="Tinsukia">Tinsukia</option>
                                                            <option value="Tirap">  Tirap</option>
                                                            <option value="Tiruchirappalli"> Tiruchirappalli</option>
                                                            <option value="Tirunelveli"> Tirunelveli</option>
                                                            <option value="Tiruppur">Tiruppur</option>
                                                            <option value="Tiruvannamalai"> Tiruvannamalai </option>
                                                            <option value="Tonk">Tonk</option>
                                                            <option value="Tuensang">Tuensang</option>
                                                            <option value="Tumkur"> Tumkur </option>
                                                            <option value="Udaipur"> Udaipur</option>
                                                            <option value="Udham Singh Nagar">  Udham Singh Nagar</option>
                                                            <option value="Udhampur">Udhampur</option>
                                                            <option value="Udupi">  Udupi</option>
                                                            <option value="Ujjain"> Ujjain </option>
                                                            <option value="Ukhrul"> Ukhrul </option>
                                                            <option value="Umaria"> Umaria </option>
                                                            <option value="Una"> Una</option>
                                                            <option value="Unnao">  Unnao</option>
                                                            <option value="Upper Subansiri"> Upper Subansiri</option>
                                                            <option value="Uttar Dinajpur"> Uttar Dinajpur </option>
                                                            <option value="Uttara Kannada"> Uttara Kannada </option>
                                                            <option value="Uttarkashi"> Uttarkashi </option>
                                                            <option value="Vadodara">Vadodara</option>
                                                            <option value="Vaishali">Vaishali</option>
                                                            <option value="Valsad"> Valsad </option>
                                                            <option value="Varanasi">Varanasi</option>
                                                            <option value="Vellore"> Vellore</option>
                                                            <option value="Vidisha"> Vidisha</option>
                                                            <option value="Villupuram"> Villupuram </option>
                                                            <option value="Vishakhapatnam"> Vishakhapatnam </option>
                                                            <option value="Vizianagaram">Vizianagaram</option>
                                                            <option value="Warangal">Warangal</option>
                                                            <option value="Wardha"> Wardha </option>
                                                            <option value="Washim"> Washim </option>
                                                            <option value="Wayanad"> Wayanad</option>
                                                            <option value="West Delhi"> West Delhi </option>
                                                            <option value="West Garo Hills"> West Garo Hills</option>
                                                            <option value="West Godavari">  West Godavari</option>
                                                            <option value="West Kameng"> West Kameng</option>
                                                            <option value="West Khasi Hills">West Khasi Hills</option>
                                                            <option value="West Sikkim"> West Sikkim</option>
                                                            <option value="West Tripura">West Tripura</option>
                                                            <option value="Wokha">  Wokha</option>
                                                            <option value="Yadagiri">Yadagiri</option>
                                                            <option value="Yamuna Nagar">Yamuna Nagar</option>
                                                            <option value="Yanam">  Yanam</option>
                                                            <option value="Yavatmal">Yavatmal</option>
                                                            <option value="Zunheboto">Zunheboto</option>
                                                      </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="othercity">othercity</label>
                                                    <input type="text" class="form-control" id="othercity" value="<?= $othercity; ?>" name="othercity">
                                                </div>
                                                <div class="form-group">
                                                  <label for="state">state</label>
                                                  <select name="state" class="form-control">
                                                        <option><?= $state; ?></option>
                                                        <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chandigarh">Chandigarh</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Orissa">Orissa</option>
                                                        <option value="Puducherry">Puducherry</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label>Other State</label>
                                                    <input type="text"  name="otherstate" class="form-control main" required autocomplete="off" value="<?= $othercity; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text"  name="country" class="form-control main" required autocomplete="off" value="<?= $country; ?>">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Pincode</label>
                                                    <input type="text" name="pincode" class="form-control main" required autocomplete="off" value="<?= $pincode; ?>">
                                                </div>

                                                 <div class="form-group">
                                                    <label>Local Guardian Address (If different):</label>
                                                    <textarea name="localguardian" rows="5" class="form-control main"><?= $localguardian; ?></textarea>
                                                </div>

                                                <div class="form-group">
                                                  <label for="localcity">city</label>
                                                  <select name="localcity" class="form-control">
                                                        <option><?= $localcity; ?></option>
                                                    
                                                        <option value="Adilabad">Adilabad</option>
                                                        <option value="Agra">Agra</option>
                                                        <option value="Ahmedabad">  Ahmedabad</option>
                                                        <option value="Ahmednagar"> Ahmednagar </option>
                                                        <option value="Aizawl"> Aizawl </option>
                                                        <option value="Ajmer">  Ajmer</option>
                                                        <option value="Akola">  Akola</option>
                                                        <option value="Alappuzha">  Alappuzha</option>
                                                        <option value="Aligarh"> Aligarh</option>
                                                        <option value="Alirajpur">  Alirajpur</option>
                                                        <option value="Allahabad">  Allahabad</option>
                                                        <option value="Almora"> Almora </option>
                                                        <option value="Alwar">  Alwar</option>
                                                        <option value="Ambala"> Ambala </option>
                                                        <option value="Ambedkar Nagar"> Ambedkar Nagar </option>
                                                        <option value="Amrawati">Amrawati</option>
                                                        <option value="Amreli District"> Amreli District</option>
                                                        <option value="Amritsar">Amritsar</option>
                                                        <option value="Anand">  Anand</option>
                                                        <option value="Anantapur">  Anantapur</option>
                                                        <option value="Anantnag">Anantnag</option>
                                                        <option value="Angul">  Angul</option>
                                                        <option value="Anjaw">  Anjaw</option>
                                                        <option value="Anuppur"> Anuppur</option>
                                                        <option value="Araria"> Araria </option>
                                                        <option value="Ariyalur">Ariyalur</option>
                                                        <option value="Ashok Nagar"> Ashok Nagar</option>
                                                        <option value="Auraiya"> Auraiya</option>
                                                        <option value="Aurangabad"> Aurangabad </option>
                                                        <option value="Aurangabad"> Aurangabad </option>
                                                        <option value="Azamgarh">Azamgarh</option>
                                                        <option value="Badaun"> Badaun </option>
                                                        <option value="Badgam"> Badgam </option>
                                                        <option value="Bagalkot">Bagalkot</option>
                                                        <option value="Bageshwar">  Bageshwar</option>
                                                        <option value="Bagpat"> Bagpat </option>
                                                        <option value="Bahraich">Bahraich</option>
                                                        <option value="Balaghat">Balaghat</option>
                                                        <option value="Baleswar">Baleswar</option>
                                                        <option value="Ballia"> Ballia </option>
                                                        <option value="Balrampur">  Balrampur</option>
                                                        <option value="Banaskantha"> Banaskantha</option>
                                                        <option value="Banda">  Banda</option>
                                                        <option value="Bandipore">  Bandipore</option>
                                                        <option value="Bangalore Rural District">Bangalore Rural District</option>
                                                        <option value="Bangalore Urban District">Bangalore Urban District</option>
                                                        <option value="Banka">  Banka</option>
                                                        <option value="Bankura"> Bankura</option>
                                                        <option value="Banswara">Banswara</option>
                                                        <option value="Barabanki">  Barabanki</option>
                                                        <option value="Baramula">Baramula</option>
                                                        <option value="Baran">  Baran</option>
                                                        <option value="Bardhaman">  Bardhaman</option>
                                                        <option value="Bareilly">Bareilly</option>
                                                        <option value="Bargarh"> Bargarh</option>
                                                        <option value="Barmer"> Barmer </option>
                                                        <option value="Barpeta"> Barpeta</option>
                                                        <option value="Barwani"> Barwani</option>
                                                        <option value="Bastar"> Bastar </option>
                                                        <option value="Basti">  Basti</option>
                                                        <option value="Bathinda">Bathinda</option>
                                                        <option value="Beed">Beed</option>
                                                        <option value="Begusarai">  Begusarai</option>
                                                        <option value="Belgaum"> Belgaum</option>
                                                        <option value="Bellary"> Bellary</option>
                                                        <option value="Betul">  Betul</option>
                                                        <option value="Bhadrak"> Bhadrak</option>
                                                        <option value="Bhagalpur">  Bhagalpur</option>
                                                        <option value="Bhandara">Bhandara</option>
                                                        <option value="Bharatpur">  Bharatpur</option>
                                                        <option value="Bharuch"> Bharuch</option>
                                                        <option value="Bhavnagar">  Bhavnagar</option>
                                                        <option value="Bhilwara">Bhilwara</option>
                                                        <option value="Bhind">  Bhind</option>
                                                        <option value="Bhiwani"> Bhiwani</option>
                                                        <option value="Bhojpur"> Bhojpur</option>
                                                        <option value="Bhopal"> Bhopal </option>
                                                        <option value="Bidar">  Bidar</option>
                                                        <option value="Bijapur"> Bijapur</option>
                                                        <option value="Bijnor"> Bijnor </option>
                                                        <option value="Bikaner"> Bikaner</option>
                                                        <option value="Bilaspur">Bilaspur</option>
                                                        <option value="Bilaspur">Bilaspur</option>
                                                        <option value="Birbhum"> Birbhum</option>
                                                        <option value="Bishnupur">  Bishnupur</option>
                                                        <option value="Bokaro"> Bokaro </option>
                                                        <option value="Bolangir">Bolangir</option>
                                                        <option value="Bongaigaon"> Bongaigaon </option>
                                                        <option value="Boudh">  Boudh</option>
                                                        <option value="Bulandshahr"> Bulandshahr</option>
                                                        <option value="Buldhana">Buldhana</option>
                                                        <option value="Bundi">  Bundi</option>
                                                        <option value="Burhanpur">  Burhanpur</option>
                                                        <option value="Buxar">  Buxar</option>
                                                        <option value="Cachar"> Cachar </option>
                                                        <option value="Central Delhi">  Central Delhi</option>
                                                        <option value="Chamarajnagar">  Chamarajnagar</option>
                                                        <option value="Chamba"> Chamba </option>
                                                        <option value="Chamoli"> Chamoli</option>
                                                        <option value="Champawat">  Champawat</option>
                                                        <option value="Champhai">Champhai</option>
                                                        <option value="Chandauli">  Chandauli</option>
                                                        <option value="Chandel"> Chandel</option>
                                                        <option value="Chandrapur"> Chandrapur </option>
                                                        <option value="Changlang">  Changlang</option>
                                                        <option value="Chatra"> Chatra </option>
                                                        <option value="Chennai"> Chennai</option>
                                                        <option value="Chhatarpur"> Chhatarpur </option>
                                                        <option value="Chhindwara"> Chhindwara </option>
                                                        <option value="Chikballapur">Chikballapur</option>
                                                        <option value="Chikmagalur"> Chikmagalur</option>
                                                        <option value="Chitradurga"> Chitradurga</option>
                                                        <option value="Chitrakoot"> Chitrakoot </option>
                                                        <option value="Chittoor">Chittoor</option>
                                                        <option value="Chittorgarh"> Chittorgarh</option>
                                                        <option value="Churachandpur">  Churachandpur</option>
                                                        <option value="Churu">  Churu</option>
                                                        <option value="Coimbatore"> Coimbatore </option>
                                                        <option value="Cooch Behar"> Cooch Behar</option>
                                                        <option value="Cuddalore">  Cuddalore</option>
                                                        <option value="Cuttack"> Cuttack</option>
                                                        <option value="Dahod">  Dahod</option>
                                                        <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
                                                        <option value="Dakshina Kannada">Dakshina Kannada</option>
                                                        <option value="Daman">  Daman</option>
                                                        <option value="Damoh">  Damoh</option>
                                                        <option value="Dantewada">  Dantewada</option>
                                                        <option value="Darbhanga">  Darbhanga</option>
                                                        <option value="Darjeeling"> Darjeeling </option>
                                                        <option value="Darrang"> Darrang</option>
                                                        <option value="Datia">  Datia</option>
                                                        <option value="Dausa">  Dausa</option>
                                                        <option value="Davanagere"> Davanagere </option>
                                                        <option value="Debagarh">Debagarh</option>
                                                        <option value="Dehradun">Dehradun</option>
                                                        <option value="Deoghar"> Deoghar</option>
                                                        <option value="Deoria"> Deoria </option>
                                                        <option value="Dewas">  Dewas</option>
                                                        <option value="Dhalai"> Dhalai </option>
                                                        <option value="Dhamtari">Dhamtari</option>
                                                        <option value="Dhanbad"> Dhanbad</option>
                                                        <option value="Dhar">Dhar</option>
                                                        <option value="Dharmapuri"> Dharmapuri </option>
                                                        <option value="Dharwad"> Dharwad</option>
                                                        <option value="Dhemaji"> Dhemaji</option>
                                                        <option value="Dhenkanal">  Dhenkanal</option>
                                                        <option value="Dholpur"> Dholpur</option>
                                                        <option value="Dhubri"> Dhubri </option>
                                                        <option value="Dhule">  Dhule</option>
                                                        <option value="Dibang Valley">  Dibang Valley</option>
                                                        <option value="Dibrugarh">  Dibrugarh</option>
                                                        <option value="Dimapur"> Dimapur</option>
                                                        <option value="Dindigul">Dindigul</option>
                                                        <option value="Dindori"> Dindori</option>
                                                        <option value="Diu"> Diu</option>
                                                        <option value="Doda">Doda</option>
                                                        <option value="Dumka">  Dumka</option>
                                                        <option value="Dungapur">Dungapur</option>
                                                        <option value="Durg">Durg</option>
                                                        <option value="East Delhi"> East Delhi </option>
                                                        <option value="East Garo Hills"> East Garo Hills</option>
                                                        <option value="East Godavari">  East Godavari</option>
                                                        <option value="East Kameng"> East Kameng</option>
                                                        <option value="East Khasi Hills">East Khasi Hills</option>
                                                        <option value="East Sikkim"> East Sikkim</option>
                                                        <option value="Ernakulam">  Ernakulam</option>
                                                        <option value="Erode">  Erode</option>
                                                        <option value="Etah">Etah</option>
                                                        <option value="Etawah"> Etawah </option>
                                                        <option value="Faizabad">Faizabad</option>
                                                        <option value="Faridabad">  Faridabad</option>
                                                        <option value="Faridkot">Faridkot</option>
                                                        <option value="Farrukhabad"> Farrukhabad</option>
                                                        <option value="Fatehabad">  Fatehabad</option>
                                                        <option value="Fatehgarh Sahib"> Fatehgarh Sahib</option>
                                                        <option value="Fatehpur">Fatehpur</option>
                                                        <option value="Firozabad">  Firozabad</option>
                                                        <option value="Firozpur">Firozpur</option>
                                                        <option value="Gadag">  Gadag</option>
                                                        <option value="Gadchiroli"> Gadchiroli </option>
                                                        <option value="Gajapati">Gajapati</option>
                                                        <option value="Gandhinagar"> Gandhinagar</option>
                                                        <option value="Ganganagar"> Ganganagar </option>
                                                        <option value="Ganjam"> Ganjam </option>
                                                        <option value="Garhwa"> Garhwa </option>
                                                        <option value="Gautam Buddha Nagar"> Gautam Buddha Nagar</option>
                                                        <option value="Gaya">Gaya</option>
                                                        <option value="Ghaziabad">  Ghaziabad</option>
                                                        <option value="Ghazipur">Ghazipur</option>
                                                        <option value="Giridih"> Giridih</option>
                                                        <option value="Goalpara">Goalpara</option>
                                                        <option value="Godda">  Godda</option>
                                                        <option value="Golaghat">Golaghat</option>
                                                        <option value="Gonda">  Gonda</option>
                                                        <option value="Gondiya"> Gondiya</option>
                                                        <option value="Gopalganj">  Gopalganj</option>
                                                        <option value="Gorkakhpur"> Gorkakhpur </option>
                                                        <option value="Gulbarga">Gulbarga</option>
                                                        <option value="Gumla">  Gumla</option>
                                                        <option value="Guna">Guna</option>
                                                        <option value="Guntur"> Guntur </option>
                                                        <option value="Gurdaspur">  Gurdaspur</option>
                                                        <option value="Gurgaon"> Gurgaon</option>
                                                        <option value="Gwalior"> Gwalior</option>
                                                        <option value="Hailakandi"> Hailakandi </option>
                                                        <option value="Hamirpur">Hamirpur</option>
                                                        <option value="Hamirpur">Hamirpur</option>
                                                        <option value="Hanumangarh"> Hanumangarh</option>
                                                        <option value="Harda">  Harda</option>
                                                        <option value="Hardoi"> Hardoi </option>
                                                        <option value="Haridwar">Haridwar</option>
                                                        <option value="Hassan"> Hassan </option>
                                                        <option value="Haveri District"> Haveri District</option>
                                                        <option value="Hazaribagh"> Hazaribagh </option>
                                                        <option value="Hingoli"> Hingoli</option>
                                                        <option value="Hissar"> Hissar </option>
                                                        <option value="Hooghly"> Hooghly</option>
                                                        <option value="Hoshangabad"> Hoshangabad</option>
                                                        <option value="Hoshiarpur"> Hoshiarpur </option>
                                                        <option value="Howrah"> Howrah </option>
                                                        <option value="Hyderabad">  Hyderabad</option>
                                                        <option value="Idukki"> Idukki </option>
                                                        <option value="Imphal East"> Imphal East</option>
                                                        <option value="Imphal West"> Imphal West</option>
                                                        <option value="Indore"> Indore </option>
                                                        <option value="Jabalpur">Jabalpur</option>
                                                        <option value="Jagatsinghpur">  Jagatsinghpur</option>
                                                        <option value="Jaintia Hills">  Jaintia Hills</option>
                                                        <option value="Jaipur"> Jaipur </option>
                                                        <option value="Jaisalmer">  Jaisalmer</option>
                                                        <option value="Jajapur"> Jajapur</option>
                                                        <option value="Jalandhar">  Jalandhar</option>
                                                        <option value="Jalaun"> Jalaun </option>
                                                        <option value="Jalgaon"> Jalgaon</option>
                                                        <option value="Jalna">  Jalna</option>
                                                        <option value="Jalore"> Jalore </option>
                                                        <option value="Jalpaiguri"> Jalpaiguri </option>
                                                        <option value="Jammu">  Jammu</option>
                                                        <option value="Jamnagar">Jamnagar</option>
                                                        <option value="Jamui">  Jamui</option>
                                                        <option value="Janjgir-Champa"> Janjgir-Champa </option>
                                                        <option value="Jashpur"> Jashpur</option>
                                                        <option value="Jaunpur District">Jaunpur District</option>
                                                        <option value="Jehanabad">  Jehanabad</option>
                                                        <option value="Jhabua"> Jhabua </option>
                                                        <option value="Jhajjar"> Jhajjar</option>
                                                        <option value="Jhalawar">Jhalawar</option>
                                                        <option value="Jhansi"> Jhansi </option>
                                                        <option value="Jharsuguda"> Jharsuguda </option>
                                                        <option value="Jind">Jind</option>
                                                        <option value="Jodhpur"> Jodhpur</option>
                                                        <option value="Jorhat"> Jorhat </option>
                                                        <option value="Juhnjhunun"> Juhnjhunun </option>
                                                        <option value="Junagadh">Junagadh</option>
                                                        <option value="Jyotiba Phule Nagar"> Jyotiba Phule Nagar</option>
                                                        <option value="Kadapa"> Kadapa </option>
                                                        <option value="Kaimur"> Kaimur </option>
                                                        <option value="Kaithal"> Kaithal</option>
                                                        <option value="Kalahandi">  Kalahandi</option>
                                                        <option value="Kanchipuram"> Kanchipuram</option>
                                                        <option value="Kandhamal">  Kandhamal</option>
                                                        <option value="Kangra"> Kangra </option>
                                                        <option value="Kanker"> Kanker </option>
                                                        <option value="Kannauj"> Kannauj</option>
                                                        <option value="Kannur"> Kannur </option>
                                                        <option value="Kanpur Dehat">Kanpur Dehat</option>
                                                        <option value="Kanpur Nagar">Kanpur Nagar</option>
                                                        <option value="Kanshiram Nagar"> Kanshiram Nagar</option>
                                                        <option value="Kanyakumari"> Kanyakumari</option>
                                                        <option value="Kapurthala"> Kapurthala </option>
                                                        <option value="Karaikal">Karaikal</option>
                                                        <option value="Karauli"> Karauli</option>
                                                        <option value="Karbi Anglong">  Karbi Anglong</option>
                                                        <option value="Kargil"> Kargil </option>
                                                        <option value="Karimganj">  Karimganj</option>
                                                        <option value="Karimnagar"> Karimnagar </option>
                                                        <option value="Karnal"> Karnal </option>
                                                        <option value="Karur">  Karur</option>
                                                        <option value="Kasaragod">  Kasaragod</option>
                                                        <option value="Kathua"> Kathua </option>
                                                        <option value="Katihar"> Katihar</option>
                                                        <option value="Katni">  Katni</option>
                                                        <option value="Kaushambi">  Kaushambi</option>
                                                        <option value="Kawardha">Kawardha</option>
                                                        <option value="Kendrapara"> Kendrapara </option>
                                                        <option value="Kendujhar">  Kendujhar</option>
                                                        <option value="Khagaria">Khagaria</option>
                                                        <option value="Khammam"> Khammam</option>
                                                        <option value="Khandwa"> Khandwa</option>
                                                        <option value="Khargone">Khargone</option>
                                                        <option value="Kheda">  Kheda</option>
                                                        <option value="Khordha"> Khordha</option>
                                                        <option value="Kinnaur"> Kinnaur</option>
                                                        <option value="Kishanganj"> Kishanganj </option>
                                                        <option value="Kodagu"> Kodagu </option>
                                                        <option value="Koderma"> Koderma</option>
                                                        <option value="Kohima"> Kohima </option>
                                                        <option value="Kokrajhar">  Kokrajhar</option>
                                                        <option value="Kolar">  Kolar</option>
                                                        <option value="Kolasib"> Kolasib</option>
                                                        <option value="Kolhapur">Kolhapur</option>
                                                        <option value="Kolkata"> Kolkata</option>
                                                        <option value="Kollam"> Kollam </option>
                                                        <option value="Koppal"> Koppal </option>
                                                        <option value="Koraput"> Koraput</option>
                                                        <option value="Korba">  Korba</option>
                                                        <option value="Koriya"> Koriya </option>
                                                        <option value="Kota">Kota</option>
                                                        <option value="Kottayam">Kottayam</option>
                                                        <option value="Kozhikode">  Kozhikode</option>
                                                        <option value="Krishna"> Krishna</option>
                                                        <option value="Kulu">Kulu</option>
                                                        <option value="Kupwara"> Kupwara</option>
                                                        <option value="Kurnool"> Kurnool</option>
                                                        <option value="Kurukshetra"> Kurukshetra</option>
                                                        <option value="Kushinagar"> Kushinagar </option>
                                                        <option value="Kutch">  Kutch</option>
                                                        <option value="Lahaul and Spiti">Lahaul and Spiti</option>
                                                        <option value="Lakhimpur">  Lakhimpur</option>
                                                        <option value="Lakhimpur Kheri"> Lakhimpur Kheri</option>
                                                        <option value="Lakhisarai"> Lakhisarai </option>
                                                        <option value="Lalitpur">Lalitpur</option>
                                                        <option value="Latur">  Latur</option>
                                                        <option value="Lawngtlai">  Lawngtlai</option>
                                                        <option value="Leh"> Leh</option>
                                                        <option value="Lohardaga">  Lohardaga</option>
                                                        <option value="Lohit">  Lohit</option>
                                                        <option value="Lower Subansiri"> Lower Subansiri</option>
                                                        <option value="Lucknow"> Lucknow</option>
                                                        <option value="Ludhiana">Ludhiana</option>
                                                        <option value="Lunglei"> Lunglei</option>
                                                        <option value="Madhepura">  Madhepura</option>
                                                        <option value="Madhubani">  Madhubani</option>
                                                        <option value="Madurai"> Madurai</option>
                                                        <option value="Mahamaya Nagar"> Mahamaya Nagar </option>
                                                        <option value="Maharajganj"> Maharajganj</option>
                                                        <option value="Mahasamund"> Mahasamund </option>
                                                        <option value="Mahbubnagar"> Mahbubnagar</option>
                                                        <option value="Mahe">Mahe</option>
                                                        <option value="Mahendragarh">Mahendragarh</option>
                                                        <option value="Mahoba"> Mahoba </option>
                                                        <option value="Mainpuri">Mainpuri</option>
                                                        <option value="Malappuram"> Malappuram </option>
                                                        <option value="Malda">  Malda</option>
                                                        <option value="Malkangiri"> Malkangiri </option>
                                                        <option value="Mamit">  Mamit</option>
                                                        <option value="Mandi">  Mandi</option>
                                                        <option value="Mandla"> Mandla </option>
                                                        <option value="Mandsaur">Mandsaur</option>
                                                        <option value="Mandya"> Mandya </option>
                                                        <option value="Mansa">  Mansa</option>
                                                        <option value="Marigaon">Marigaon</option>
                                                        <option value="Mathura"> Mathura</option>
                                                        <option value="Mau"> Mau</option>
                                                        <option value="Mayurbhanj"> Mayurbhanj </option>
                                                        <option value="Medak">  Medak</option>
                                                        <option value="Meerut"> Meerut </option>
                                                        <option value="Mehsana"> Mehsana</option>
                                                        <option value="Mewat">  Mewat</option>
                                                        <option value="Midnapore">  Midnapore</option>
                                                        <option value="Mirzapur">Mirzapur</option>
                                                        <option value="Moga">Moga</option>
                                                        <option value="Mokokchung"> Mokokchung </option>
                                                        <option value="Mon"> Mon</option>
                                                        <option value="Moradabad">  Moradabad</option>
                                                        <option value="Morena"> Morena </option>
                                                        <option value="Mukatsar">Mukatsar</option>
                                                        <option value="Mumbai City"> Mumbai City</option>
                                                        <option value="Mumbai suburban"> Mumbai suburban</option>
                                                        <option value="Munger"> Munger </option>
                                                        <option value="Murshidabad"> Murshidabad</option>
                                                        <option value="Muzaffarnagar">  Muzaffarnagar</option>
                                                        <option value="Muzaffarpur"> Muzaffarpur</option>
                                                        <option value="Mysore"> Mysore </option>
                                                        <option value="Nabarangpur"> Nabarangpur</option>
                                                        <option value="Nadia">  Nadia</option>
                                                        <option value="Nagaon"> Nagaon </option>
                                                        <option value="Nagapattinam">Nagapattinam</option>
                                                        <option value="Nagaur"> Nagaur </option>
                                                        <option value="Nagpur"> Nagpur </option>
                                                        <option value="Nainital">Nainital</option>
                                                        <option value="Nalanda"> Nalanda</option>
                                                        <option value="Nalbari"> Nalbari</option>
                                                        <option value="Nalgonda">Nalgonda</option>
                                                        <option value="Namakkal">Namakkal</option>
                                                        <option value="Nanded"> Nanded </option>
                                                        <option value="Nandurbar">  Nandurbar</option>
                                                        <option value="Narmada"> Narmada</option>
                                                        <option value="Narsinghpur"> Narsinghpur</option>
                                                        <option value="Nashik"> Nashik </option>
                                                        <option value="Navsari"> Navsari</option>
                                                        <option value="Nawada"> Nawada </option>
                                                        <option value="Nawan Shehar">Nawan Shehar</option>
                                                        <option value="Nayagarh">Nayagarh</option>
                                                        <option value="Neemuch"> Neemuch</option>
                                                        <option value="Nellore"> Nellore</option>
                                                        <option value="New Delhi">  New Delhi</option>
                                                        <option value="Nicobar"> Nicobar</option>
                                                        <option value="Nizamabad">  Nizamabad</option>
                                                        <option value="North 24 Parganas">  North 24 Parganas</option>
                                                        <option value="North and Middle Andaman">North and Middle Andaman</option>
                                                        <option value="North Cachar Hills"> North Cachar Hills </option>
                                                        <option value="North Delhi"> North Delhi</option>
                                                        <option value="North East Delhi">North East Delhi</option>
                                                        <option value="North Goa">  North Goa</option>
                                                        <option value="North Sikkim">North Sikkim</option>
                                                        <option value="North Tripura">  North Tripura</option>
                                                        <option value="North West Delhi">North West Delhi</option>
                                                        <option value="Nuapada"> Nuapada</option>
                                                        <option value="Osmanabad">  Osmanabad</option>
                                                        <option value="Pakur">  Pakur</option>
                                                        <option value="Palakkad">Palakkad</option>
                                                        <option value="Palamu"> Palamu </option>
                                                        <option value="Pali">Pali</option>
                                                        <option value="Palwal"> Palwal </option>
                                                        <option value="Panchkula">  Panchkula</option>
                                                        <option value="Panchmahal"> Panchmahal </option>
                                                        <option value="Panipat"> Panipat</option>
                                                        <option value="Panna">  Panna</option>
                                                        <option value="Papum Pare"> Papum Pare </option>
                                                        <option value="Parbhani">Parbhani</option>
                                                        <option value="Pashchim Champaran"> Pashchim Champaran </option>
                                                        <option value="Pashchim Singhbhum"> Pashchim Singhbhum </option>
                                                        <option value="Patan">  Patan</option>
                                                        <option value="Pathanamthitta"> Pathanamthitta </option>
                                                        <option value="Patiala"> Patiala</option>
                                                        <option value="Patna">  Patna</option>
                                                        <option value="Pauri Garhwal">  Pauri Garhwal</option>
                                                        <option value="Perambalur"> Perambalur </option>
                                                        <option value="Phek">Phek</option>
                                                        <option value="Pilibhit">Pilibhit</option>
                                                        <option value="Pithoragharh">Pithoragharh</option>
                                                        <option value="Poonch"> Poonch </option>
                                                        <option value="Porbandar">  Porbandar</option>
                                                        <option value="Prakasam">Prakasam</option>
                                                        <option value="Pratapgarh"> Pratapgarh </option>
                                                        <option value="Pratapgarh"> Pratapgarh </option>
                                                        <option value="Puducherry"> Puducherry </option>
                                                        <option value="Pudukkottai"> Pudukkottai</option>
                                                        <option value="Pulwama"> Pulwama</option>
                                                        <option value="Pune">Pune</option>
                                                        <option value="Purba Champaran"> Purba Champaran</option>
                                                        <option value="Purba Singhbhum"> Purba Singhbhum</option>
                                                        <option value="Puri">Puri</option>
                                                        <option value="Purnia"> Purnia </option>
                                                        <option value="Purulia"> Purulia</option>
                                                        <option value="Rae Bareli"> Rae Bareli </option>
                                                        <option value="Raichur"> Raichur</option>
                                                        <option value="Raigad"> Raigad </option>
                                                        <option value="Raigarh"> Raigarh</option>
                                                        <option value="Raipur"> Raipur </option>
                                                        <option value="Raisen"> Raisen </option>
                                                        <option value="Rajauri"> Rajauri</option>
                                                        <option value="Rajgarh"> Rajgarh</option>
                                                        <option value="Rajkot"> Rajkot </option>
                                                        <option value="Rajnandgaon"> Rajnandgaon</option>
                                                        <option value="Rajsamand">  Rajsamand</option>
                                                        <option value="Ramanagara"> Ramanagara </option>
                                                        <option value="Ramanathapuram"> Ramanathapuram </option>
                                                        <option value="Ramgarh"> Ramgarh</option>
                                                        <option value="Rampur"> Rampur </option>
                                                        <option value="Ranchi"> Ranchi </option>
                                                        <option value="Rangareddi"> Rangareddi </option>
                                                        <option value="Ratlam"> Ratlam </option>
                                                        <option value="Ratnagiri">  Ratnagiri</option>
                                                        <option value="Rayagada">Rayagada</option>
                                                        <option value="Rewa">Rewa</option>
                                                        <option value="Rewari"> Rewari </option>
                                                        <option value="Ri-Bhoi"> Ri-Bhoi</option>
                                                        <option value="Rohtak"> Rohtak </option>
                                                        <option value="Rohtas"> Rohtas </option>
                                                        <option value="Rudraprayag"> Rudraprayag</option>
                                                        <option value="Rupnagar">Rupnagar</option>
                                                        <option value="Sabarkantha"> Sabarkantha</option>
                                                        <option value="Sagar">  Sagar</option>
                                                        <option value="Saharanpur"> Saharanpur </option>
                                                        <option value="Saharsa"> Saharsa</option>
                                                        <option value="Sahibganj">  Sahibganj</option>
                                                        <option value="Saiha">  Saiha</option>
                                                        <option value="Salem">  Salem</option>
                                                        <option value="Samastipur"> Samastipur </option>
                                                        <option value="Samba">  Samba</option>
                                                        <option value="Sambalpur">  Sambalpur</option>
                                                        <option value="Sangli"> Sangli </option>
                                                        <option value="Sangrur"> Sangrur</option>
                                                        <option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
                                                        <option value="Sant Ravidas Nagar"> Sant Ravidas Nagar </option>
                                                        <option value="Saran">  Saran</option>
                                                        <option value="Satara"> Satara </option>
                                                        <option value="Satna">  Satna</option>
                                                        <option value="Sawai Madhopur"> Sawai Madhopur </option>
                                                        <option value="Sehore"> Sehore </option>
                                                        <option value="Senapati">Senapati</option>
                                                        <option value="Seoni">  Seoni</option>
                                                        <option value="Seraikela and Kharsawan"> Seraikela and Kharsawan</option>
                                                        <option value="Serchhip">Serchhip</option>
                                                        <option value="Shahdol"> Shahdol</option>
                                                        <option value="Shahjahanpur">Shahjahanpur</option>
                                                        <option value="Shajapur">Shajapur</option>
                                                        <option value="Sheikhpura"> Sheikhpura </option>
                                                        <option value="Sheohar"> Sheohar</option>
                                                        <option value="Sheopur"> Sheopur</option>
                                                        <option value="Shimla"> Shimla </option>
                                                        <option value="Shimoga"> Shimoga</option>
                                                        <option value="Shivpuri">Shivpuri</option>
                                                        <option value="Shravasti">  Shravasti</option>
                                                        <option value="Sibsagar">Sibsagar</option>
                                                        <option value="Siddharthnagar"> Siddharthnagar </option>
                                                        <option value="Sidhi">  Sidhi</option>
                                                        <option value="Sikar">  Sikar</option>
                                                        <option value="Sindhudurg"> Sindhudurg </option>
                                                        <option value="Singrauli">  Singrauli</option>
                                                        <option value="Sirmaur"> Sirmaur</option>
                                                        <option value="Sirohi"> Sirohi </option>
                                                        <option value="Sirsa">  Sirsa</option>
                                                        <option value="Sitamarhi">  Sitamarhi</option>
                                                        <option value="Sitapur"> Sitapur</option>
                                                        <option value="Sivagangai"> Sivagangai </option>
                                                        <option value="Siwan">  Siwan</option>
                                                        <option value="Solan">  Solan</option>
                                                        <option value="Solapur"> Solapur</option>
                                                        <option value="Sonbhadra">  Sonbhadra</option>
                                                        <option value="Sonepat"> Sonepat</option>
                                                        <option value="Sonitpur">Sonitpur</option>
                                                        <option value="South 24 Parganas">  South 24 Parganas</option>
                                                        <option value="South Andaman">  South Andaman</option>
                                                        <option value="South Delhi"> South Delhi</option>
                                                        <option value="South Garo Hills">South Garo Hills</option>
                                                        <option value="South Goa">  South Goa</option>
                                                        <option value="South Sikkim">South Sikkim</option>
                                                        <option value="South Tripura">  South Tripura</option>
                                                        <option value="South West Delhi">South West Delhi</option>
                                                        <option value="Srikakulam"> Srikakulam </option>
                                                        <option value="Srinagar">Srinagar</option>
                                                        <option value="Subarnapur"> Subarnapur </option>
                                                        <option value="Sultanpur">  Sultanpur</option>
                                                        <option value="Sundargarh"> Sundargarh </option>
                                                        <option value="Supaul"> Supaul </option>
                                                        <option value="Surat">  Surat</option>
                                                        <option value="Surendranagar">  Surendranagar</option>
                                                        <option value="Surguja"> Surguja</option>
                                                        <option value="Tamenglong"> Tamenglong </option>
                                                        <option value="Tehri Garhwal">  Tehri Garhwal</option>
                                                        <option value="Thane">  Thane</option>
                                                        <option value="Thanjavur">  Thanjavur</option>
                                                        <option value="The Dangs">  The Dangs</option>
                                                        <option value="The Nilgiris">The Nilgiris</option>
                                                        <option value="Theni">  Theni</option>
                                                        <option value="Thiruvallur"> Thiruvallur</option>
                                                        <option value="Thiruvananthapuram"> Thiruvananthapuram </option>
                                                        <option value="Thiruvarur"> Thiruvarur </option>
                                                        <option value="Thoothukudi"> Thoothukudi</option>
                                                        <option value="Thoubal"> Thoubal</option>
                                                        <option value="Thrissur">Thrissur</option>
                                                        <option value="Tikamgarh">  Tikamgarh</option>
                                                        <option value="Tinsukia">Tinsukia</option>
                                                        <option value="Tirap">  Tirap</option>
                                                        <option value="Tiruchirappalli"> Tiruchirappalli</option>
                                                        <option value="Tirunelveli"> Tirunelveli</option>
                                                        <option value="Tiruppur">Tiruppur</option>
                                                        <option value="Tiruvannamalai"> Tiruvannamalai </option>
                                                        <option value="Tonk">Tonk</option>
                                                        <option value="Tuensang">Tuensang</option>
                                                        <option value="Tumkur"> Tumkur </option>
                                                        <option value="Udaipur"> Udaipur</option>
                                                        <option value="Udham Singh Nagar">  Udham Singh Nagar</option>
                                                        <option value="Udhampur">Udhampur</option>
                                                        <option value="Udupi">  Udupi</option>
                                                        <option value="Ujjain"> Ujjain </option>
                                                        <option value="Ukhrul"> Ukhrul </option>
                                                        <option value="Umaria"> Umaria </option>
                                                        <option value="Una"> Una</option>
                                                        <option value="Unnao">  Unnao</option>
                                                        <option value="Upper Subansiri"> Upper Subansiri</option>
                                                        <option value="Uttar Dinajpur"> Uttar Dinajpur </option>
                                                        <option value="Uttara Kannada"> Uttara Kannada </option>
                                                        <option value="Uttarkashi"> Uttarkashi </option>
                                                        <option value="Vadodara">Vadodara</option>
                                                        <option value="Vaishali">Vaishali</option>
                                                        <option value="Valsad"> Valsad </option>
                                                        <option value="Varanasi">Varanasi</option>
                                                        <option value="Vellore"> Vellore</option>
                                                        <option value="Vidisha"> Vidisha</option>
                                                        <option value="Villupuram"> Villupuram </option>
                                                        <option value="Vishakhapatnam"> Vishakhapatnam </option>
                                                        <option value="Vizianagaram">Vizianagaram</option>
                                                        <option value="Warangal">Warangal</option>
                                                        <option value="Wardha"> Wardha </option>
                                                        <option value="Washim"> Washim </option>
                                                        <option value="Wayanad"> Wayanad</option>
                                                        <option value="West Delhi"> West Delhi </option>
                                                        <option value="West Garo Hills"> West Garo Hills</option>
                                                        <option value="West Godavari">  West Godavari</option>
                                                        <option value="West Kameng"> West Kameng</option>
                                                        <option value="West Khasi Hills">West Khasi Hills</option>
                                                        <option value="West Sikkim"> West Sikkim</option>
                                                        <option value="West Tripura">West Tripura</option>
                                                        <option value="Wokha">  Wokha</option>
                                                        <option value="Yadagiri">Yadagiri</option>
                                                        <option value="Yamuna Nagar">Yamuna Nagar</option>
                                                        <option value="Yanam">  Yanam</option>
                                                        <option value="Yavatmal">Yavatmal</option>
                                                        <option value="Zunheboto">Zunheboto</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="localothercity">Other city</label>
                                                    <input type="text" class="form-control" id="localothercity" value="<?= $localothercity; ?>" name="localothercity">
                                                </div>
                                                <div class="form-group">
                                                  <label for="localstate">Other State</label>
                                                  <select name="localstate" class="form-control">
                                                        <option><?= $localstate; ?></option>
                                                        <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chandigarh">Chandigarh</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Orissa">Orissa</option>
                                                        <option value="Puducherry">Puducherry</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="localotherstate">otherstate</label>
                                                    <input type="text" class="form-control" id="localotherstate" value="<?= $localotherstate; ?>" name="localotherstate">
                                                </div>
                                        
                                                <div class="form-group">
                                                    <label for="localcountry">localcountry</label>
                                                    <input type="text" class="form-control" id="localcountry" value="<?= $localcountry; ?>" name="localcountry">
                                                </div>
                                                <div class="form-group">
                                                    <label for="localpincode">localpincode</label>
                                                    <input type="text" class="form-control" id="localpincode" value="<?= $localpincode; ?>" name="localpincode">
                                                </div>

                                                <div class="form-group">
                                                    <label for="phoneresid">phoneresid</label>
                                                    <input type="text" class="form-control" id="phoneresid" value="<?= $phoneresid; ?>" name="phoneresid">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobileno">mobileno</label>
                                                    <input type="text" class="form-control" id="mobileno" value="<?= $mobileno; ?>" name="mobileno">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">email</label>
                                                    <input type="text" class="form-control" id="email" value="<?= $email; ?>" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="facebook">facebook</label>
                                                    <input type="text" class="form-control" id="facebook" value="<?= $facebook; ?>" name="facebook">
                                                </div>
                                                <div class="form-group">
                                                    <label for="degree">degree</label>
                                                    <input type="text" class="form-control" id="degree" value="<?= $degree; ?>" name="degree">
                                                </div>
                                                <div class="form-group">
                                                    <label for="university">university</label>
                                                    <input type="text" class="form-control" id="university" value="<?= $university; ?>" name="university">
                                                </div>
                                                <div class="form-group">
                                                    <label for="workyears">workyears</label>
                                                    <input type="text" class="form-control" id="workyears" value="<?= $workyears; ?>" name="workyears">
                                                </div>
                                                <div class="form-group">
                                                    <label for="industry">industry</label>
                                                    <input type="text" class="form-control" id="industry" value="<?= $industry; ?>" name="industry">
                                                </div>
                                                <div class="form-group">
                                                    <label for="profession">profession</label>
                                                    <input type="text" class="form-control" id="profession" value="<?= $profession; ?>" name="profession">
                                                </div>
                                                <div class="form-group">
                                                    <label for="english">English</label>
                                                    <select name="english" class="form-control">
                                                        <option value="<?= $english; ?>"><?= $english; ?></option>
                                                        <option value="Excellent">Excellent</option>
                                                        <option value="Good">Good</option>
                                                        <option value="Working">Working</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="otherlanguage">Other Language</label>
                                                    <select name="otherlanguage" class="form-control">
                                                        <option value="<?= $otherlanguage; ?>"><?= $otherlanguage; ?></option>
                                                        <option value="Hindi">Hindi</option>
                                                            <option value="Bengali">Bengali</option>
                                                            <option value="Telugu">Telugu</option>
                                                            <option value="Marathi">Marathi</option>
                                                            <option value="Tamil">Tamil</option>
                                                            <option value="Urdu">Urdu</option>
                                                            <option value="Gujrati">Gujarati</option>
                                                            <option value="Kannada">Kannada</option>
                                                            <option value="Malayalam">Malayalam</option>
                                                            <option value="Oriya">Oriya</option>
                                                            <option value="Punjabi">Punjabi</option>
                                                            <option value="Assamese">Assamese</option>
                                                            <option value="Maithili">Maithili</option>
                                                            <option value="Bhili/Bhilodi">Bhili/Bhilodi</option>
                                                            <option value="Santali">Santali</option>
                                                            <option value="Kashmiri">Kashmiri</option>
                                                            <option value="Nepali">Nepali</option>
                                                            <option value="Gondi">Gondi</option>
                                                            <option value="Sondhi">Sindhi</option>
                                                            <option value="Konkani">Konkani</option>
                                                            <option value="Dogri">Dogri</option>
                                                            <option value="Khandeshi">Khandeshi</option>
                                                            <option value="Kurukh">Kurukh</option>
                                                            <option value="Tulu">Tulu</option>
                                                            <option value="Meitei/Manipuri">Meitei/Manipuri</option>
                                                            <option value="Bodo">Bodo</option>
                                                            <option value="Khasi">Khasi</option>
                                                            <option value="Mundari">Mundari</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="workknowledge">workknowledge</label>
                                                    <input type="text" class="form-control" id="workknowledge" value="<?= $workknowledge; ?>" name="workknowledge">
                                                </div>
                                                <div class="form-group">
                                                    <label for="itskills">itskills</label>
                                                    <input type="text" class="form-control" id="itskills" value="<?= $itskills; ?>" name="itskills">
                                                </div>
                                                <div class="form-group">
                                                    <label>Programme Area:</label>
                                                    <select id="slct" onchange="showOnChange(event)" name="programarea" class="form-control">
                                                        <option value="<?= $programarea; ?>"><?= $programarea; ?></option>
                                                        <option value="Mission Education">Mission Education</option>
                                                        <option value="MMK (livelihood)">MMK (livelihood)</option>
                                                        <option value="MMK On wheel">MMK On wheel</option>
                                                        
                                                        <option value="Corporate Partnership">Corporate Partnership</option>
                                                        <option value="Alliances">Alliances</option>
                                                        <option value="Individual Partnership">Individual Partnership</option>
                                                        <option value="Communication">Communication</option>
                                                        <option value="Information Technology">Information Technology</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="Human Resource">Human Resource</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Mission Education">
                                                    <label>Work Area:</label>
                                                    <select name="workarea1" class="form-control">
                                                        <option value="<?= $workarea; ?>"><?= $workarea; ?></option>
                                                        <option value="Special Assignments">Special Assignments</option>
                                                        <option value="Documentation">Documentation</option>
                                                        <option value="Reporting">Reporting</option>
                                                        <option value="Programme Management">Programme Management</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="MMK (livelihood)" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea2" class="form-control">
                                                        <option value="Reporting">Reporting</option>
                                                        <option value="Documentation">Documentation</option>
                                                        <option value="Career Counselling">Career Counselling</option>
                                                        <option value="Student Evaluation">Student Evaluation</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="MMK On wheel" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea3" class="form-control">
                                                        <option value="Medical Paramedical Professionals">Medical Paramedical Professionals</option>
                                                        <option value="Documentation">Documentation</option>
                                                        <option value="Reporting">Reporting</option>
                                                        <option value="Student Evaluation">Student Evaluation</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Corporate Partnership" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea4" class="form-control">
                                                        <option value="Strategies and Activities">Strategies and Activities</option>
                                                        <option value="Research">Research</option>
                                                        <option value="Documentation">Documentation</option>
                                                        <option value="Field Monitoring">Field Monitoring</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Alliances" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea5" class="form-control" >
                                                        <option value="Research">Research</option>
                                                        <option value="Documentation">Documentation</option>
                                                        <option value="Field Monitoring">Field Monitoring</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Individual Partnership" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea6" class="form-control">
                                                        <option value="Strategies and Activities">Strategies and Activities</option>
                                                        <option value="Nurturing">Nurturing</option>
                                                        <option value="Retention">Retention</option>
                                                        <option value="Research &amp; Analysis">Research &amp; Analysis</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Communication" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea7" class="form-control">
                                                        <option value="Designer">Designer</option>
                                                        <option value="Photoigrapher">Photoigrapher</option>
                                                        <option value="Copywriter">Copywriter</option>
                                                        <option value="Film Maker">Film Maker</option>
                                                        <option value="Visualizer">Visualizer</option>
                                                        <option value="PR Strategist">PR Strategist</option>
                                                        <option value="Advocacy">Advocacy</option>
                                                        <option value="Event Management">Event Management</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Information Technology" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea8" class="form-control">
                                                        <option value="Web Designer">Web Designer</option>
                                                        <option value="Programming">Programming</option>
                                                        <option value="Video Making">Video Making</option>
                                                        <option value="Content Writer">Content Writer</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Finance" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea9" class="form-control">
                                                        <option value="Auditing">Auditing</option>
                                                        <option value="Acounting">Acounting</option>
                                                        <option value="Imprest Settlement">Imprest Settlement</option>
                                                        <option value="Bank Reconciliation Statement">Bank Reconciliation Statement</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="Human Resource" style="display: none;">
                                                    <label>Work Area:</label>
                                                    <select name="workarea10" class="form-control">
                                                        <option value="Recruitment">Recruitment</option>
                                                        <option value="Employee Engagement">Employee Engagement</option>
                                                        <option value="Training">Training</option>
                                                        <option value="Performance Appraisal">Performance Appraisal</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="relocation">relocation</label>
                                                    <input type="text" class="form-control" id="relocation" value="<?= $relocation; ?>" name="relocation">
                                                </div>
                                                <div class="form-group">
                                                    <label for="months">months</label>
                                                    <input type="text" class="form-control" id="months" value="<?= $months; ?>" name="months">
                                                </div>
                                                <div class="form-group">
                                                    <label for="days">days</label>
                                                    <input type="text" class="form-control" id="days" value="<?= $days; ?>" name="days">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hours">hours</label>
                                                    <input type="text" class="form-control" id="hours" value="<?= $hours; ?>" name="hours">
                                                </div>
                                                <div class="form-group">
                                                    <label for="volunteersno">volunteersno</label>
                                                    <input type="text" class="form-control" id="volunteersno" value="<?= $volunteersno; ?>" name="volunteersno">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">password</label>
                                                    <input type="text" class="form-control" id="password" value="<?= $password; ?>" name="password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="creatdate">creatdate</label>
                                                    <input type="text" class="form-control" id="creatdate" value="<?= $creatdate; ?>" name="creatdate">
                                                </div>
                                                <div class="form-group">
                                                    <label for="modifydate">modifydate</label>
                                                    <input type="text" class="form-control" id="modifydate" value="<?= $modifydate; ?>" name="modifydate">
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">status</label>
                                                    <input type="text" class="form-control" id="status" value="<?= $status; ?>" name="status">
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

        $firstname = $_POST['firstname'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $othercity = $_POST['othercity'];
        $state = $_POST['state'];
        $otherstate = $_POST['otherstate'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $localguardian = $_POST['localguardian'];
        $localcity = $_POST['localcity'];
        $localothercity = $_POST['localothercity'];
        $localstate = $_POST['localstate'];
        $localotherstate = $_POST['localotherstate'];
        $localcountry = $_POST['localcountry'];
        $localpincode = $_POST['localpincode'];
        $phoneresid = $_POST['phoneresid'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        $facebook = $_POST['facebook'];
        $degree = $_POST['degree'];
        $university = $_POST['university'];
        $workyears = $_POST['workyears'];
        $industry = $_POST['industry'];
        $profession = $_POST['profession'];
        $english = $_POST['english'];
        $otherlanguage = $_POST['otherlanguage'];
        $workknowledge = $_POST['workknowledge'];
        $itskills = $_POST['itskills'];
        $programarea = $_POST['programarea'];
        if($programarea == "Mission Education"){
            $workarea = $_POST['workarea1'];
        }elseif($programarea == "MMK (livelihood)"){
             $workarea = $_POST['workarea2'];
        }elseif($programarea == "MMK On wheel"){
             $workarea = $_POST['workarea3'];
        }elseif($programarea == "Corporate Partnership"){
             $workarea = $_POST['workarea4'];
        }elseif($programarea == "Alliances"){
             $workarea = $_POST['workarea5'];
        }elseif($programarea == "Individual Partnership"){
             $workarea = $_POST['workarea6'];
        }elseif($programarea == "Communication"){
             $workarea = $_POST['workarea7'];
        }elseif($programarea == "Information Technology"){
             $workarea = $_POST['workarea8'];
        }elseif($programarea == "Finance"){
             $workarea = $_POST['workarea9'];
        }elseif($programarea == "Human Resource"){
             $workarea = $_POST['workarea10'];     
        }
        $relocation = $_POST['relocation'];
        $months = $_POST['months'];
        $days = $_POST['days'];
        $hours = $_POST['hours'];
        $modDate = date("d/m/y");
        $old_img = $_POST['old_img'];

      //-----------------------------------------//

            $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
            if ($volunteerimg_1 != '') {
                   $volunteerimg_1 = $_FILES['volunteerimg'] ['name'];
                   $volunteerimg_tmp = $_FILES['volunteerimg'] ['tmp_name'];
                   $volunteerimg = $firstname."_".$volunteerimg_1;
             }
             else {
                $volunteerimg = $old_img;
             }     
     //-----------------------------------------//

        if ($volunteerimg_1 != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../volunteerimg/$old_img");
                move_uploaded_file($volunteerimg_tmp, "../volunteerimg/$volunteerimg");
             }
    
      $volunteerquery = "update volunteers set firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', dob = '$dob', gender = '$gender', nationality = '$nationality', address = '$address', city = '$city', othercity = '$othercity', state = '$state', otherstate = '$otherstate', country = '$country', pincode = '$pincode', localguardian = '$localguardian', localcity = '$localcity', localothercity = '$localothercity', localstate='$localstate', localotherstate='$localotherstate', localcountry='$localcountry', localpincode='$localpincode', phoneresid='$phoneresid', mobileno='$mobileno', email='$email', facebook='$facebook', degree='$degree', university='$university', workyears='$workyears', industry='$industry', profession='$profession', english='$english', otherlanguage='$otherlanguage', workknowledge='$workknowledge', itskills='$itskills', programarea='$programarea', workarea='$workarea', relocation='$relocation' , months='$months' , days='$days' , hours='$hours' , password='$password' , volunteerimg='$volunteerimg'where volunteersid = '$volunteersid'";
       
       if ($firstname == '') {
        echo "<script>alert('please enter amount_proof')</script>";
       }else
          {
          mysqli_query($con, $volunteerquery);
          echo "<script>alert('Your volunteer Details Updated')</script>";
          echo "<script>window.open('volunteers.php','_self')</script>";
          
         }
     
     }

 ?>