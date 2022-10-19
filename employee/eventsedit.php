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
    if (isset($_GET['eventsedit'])) {
    $page_id = $_GET['eventsedit'];
      $selecteventsquery = "select * from events where eventsid = '$page_id'";
        $runeventsquery = mysqli_query($con,$selecteventsquery);
        $serialNum = 1;
        while ($roweventsquery = mysqli_fetch_array($runeventsquery)) {
        $serialNumber = $serialNum++;
        $eventsid = $roweventsquery['eventsid'];
        $eventsno = $roweventsquery['eventsno'];
        $eventtitle = $roweventsquery['eventtitle'];
        $eventdate = $roweventsquery['eventdate'];
        $eventsdescription = $roweventsquery['eventsdescription'];
        $eventsphoto = $roweventsquery['eventsphoto'];
        $eventsbudget = $roweventsquery['eventsbudget'];
        $eventpartnername = $roweventsquery['eventpartnername'];
        $eventpartnerdescription = $roweventsquery['eventpartnerdescription'];
        $eventpartnerlogo = $roweventsquery['eventpartnerlogo'];
        $creatdate = $roweventsquery['creatdate'];
        $modifydate = $roweventsquery['modifydate'];
        $status = $roweventsquery['status'];
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
                            <h4 class="header-title">Events Edit Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="eventsedit.php?eventsedit=<?= $eventsid; ?>" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group" hidden>
                                                            <label for="eventsno">Event No</label>
                                                            <input type="text" class="form-control" id="eventsno"  name="eventsno" value="<?= $eventsno ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventtitle">Event Title</label>
                                                            <input type="text" class="form-control" id="eventtitle"  name="eventtitle" value="<?= $eventtitle ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventdate">Event Date</label>
                                                            <input type="date" class="form-control" id="eventdate" name="eventdate" value="<?= $eventdate ?>">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="eventsdescription">Events Description</label>
                                                            <input type="text" class="form-control" id="eventsdescription" name="eventsdescription" value="<?= $eventsdescription ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventsphoto">Events Photo</label>
                                                            <img src="../eventsphoto/<?= $eventsphoto; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img" value="<?= $eventsphoto; ?>">
                                                            <input type="hidden" name="eventsphoto" value="<?= $eventsphoto; ?>">
                                                            <input type="file" class="form-control" id="eventsphoto" name="eventsphoto" value="<?= $eventsphoto ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventsbudget">Events Budget</label>
                                                            <input type="text" class="form-control" id="eventsbudget" name="eventsbudget" value="<?= $eventsbudget ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventpartnername">Event Partner Name</label>
                                                            <input type="text" class="form-control" id="eventpartnername" name="eventpartnername" value="<?= $eventpartnername ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventpartnerdescription">Event partner Description</label>
                                                            <input type="text" class="form-control" id="eventpartnerdescription" name="eventpartnerdescription" value="<?= $eventpartnerdescription ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventpartnerlogo">Event Partner Logo</label>
                                                            <img src="../eventpartnerlogo/<?= $eventpartnerlogo; ?>" width="100" height="100">
                                                            <input type="hidden" name="old_img1" value="<?= $eventpartnerlogo; ?>">
                                                            <input type="hidden" name="eventpartnerlogo" value="<?= $eventpartnerlogo; ?>">
                                                            <input type="file" class="form-control" id="eventpartnerlogo" name="eventpartnerlogo">
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
        $eventsno = $_POST['eventsno'];
        $eventtitle = $_POST['eventtitle'];
        $eventdate = $_POST['eventdate'];
        $eventsdescription = $_POST['eventsdescription'];
        $eventsphoto = $_POST['eventsphoto'];
        $eventsbudget = $_POST['eventsbudget'];
        $eventpartnername = $_POST['eventpartnername'];
        $eventpartnerdescription = $_POST['eventpartnerdescription'];
        $eventpartnerlogo = $_POST['eventpartnerlogo'];
        $modifydate = date("d/m/y");

        $old_img = $_POST['old_img'];
        $old_img1 = $_POST['old_img1'];

      //-----------------------------------------//

            $eventsphoto_event = $_FILES['eventsphoto'] ['name'];
            if ($eventsphoto_event != '') {
                   $eventsphoto_event = $_FILES['eventsphoto'] ['name'];
                   $eventsphoto_tmp = $_FILES['eventsphoto'] ['tmp_name'];
                   $eventsphoto = $eventsno."_".$eventsphoto_event;
             }
             else {
                $eventsphoto = $old_img;
             }     
     //-----------------------------------------//

    //-----------------------------------------//

            $eventpartnerlogo_event = $_FILES['eventpartnerlogo'] ['name'];
            if ($eventpartnerlogo_event != '') {
                   $eventpartnerlogo_event = $_FILES['eventpartnerlogo'] ['name'];
                   $eventpartnerlogo_tmp = $_FILES['eventpartnerlogo'] ['tmp_name'];
                   $eventpartnerlogo = $eventsno."_".$eventpartnerlogo_event;
             }
             else {
                $eventpartnerlogo = $old_img1;
             }     

    //-----------------------------------------------------------------------------//

        if ($eventsphoto_event != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../eventsphoto/$old_img");
                move_uploaded_file($eventsphoto_tmp, "../eventsphoto/$eventsphoto");
             }

        if ($eventpartnerlogo_event != '') {
                unlink($_SERVER['DOCUMENT_ROOT'] . "../eventpartnerlogo/$old_img1");
                move_uploaded_file($eventpartnerlogo_tmp, "../eventpartnerlogo/$eventpartnerlogo");
             }

    //-----------------------------------------------------------------------------//
    
      $eventquery = "update events set eventtitle = '$eventtitle', eventdate = '$eventdate', eventsdescription = '$eventsdescription', eventsphoto = '$eventsphoto', eventsbudget = '$eventsbudget', eventpartnername = '$eventpartnername', eventpartnerdescription = '$eventpartnerdescription', eventpartnerlogo = '$eventpartnerlogo', modifydate = '$modifydate' where eventsid = '$eventsid'";
      
       if ($eventtitle == '') {
        echo "<script>alert('Please Enter Event Title')</script>";
       }else
          {
          mysqli_query($con, $eventquery);
          echo "<script>alert('Your Event Details Updated')</script>";
          echo "<script>window.open('events.php','_self')</script>";
          
         }
     
     }

 ?>