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
                            <h4 class="header-title">Event Add Details</h4>
                            <div class="table-responsive datatable-primary">
                                <div class="col-md-12">
                                <div class="card-box">
                                  
                                    <form method="post" action="#" enctype="multipart/form-data">
                                         <div class="row">   
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventtitle">Event Title</label>
                                                            <input type="text" class="form-control" id="eventtitle"  name="eventtitle">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventdate">Event Date</label>
                                                            <input type="date" class="form-control" id="eventdate" name="eventdate">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="eventsdescription">Events Description</label>
                                                            
                                                            <textarea class="form-control" id="eventsdescription" name="eventsdescription"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventsphoto">Events Photo</label>
                                                            <input type="file" class="form-control" id="eventsphoto" name="eventsphoto">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventsbudget">Events Budget</label>
                                                            <input type="text" class="form-control" id="eventsbudget" name="eventsbudget">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventpartnername">Event Partner Name</label>
                                                            <input type="text" class="form-control" id="eventpartnername" name="eventpartnername">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventpartnerdescription">Event partner Description</label>
                                                            <textarea class="form-control" id="eventpartnerdescription" name="eventpartnerdescription"></textarea>
                                                            
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventpartnerlogo">Event Partner Logo</label>
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

<?php }  ?>
<?php 
      
     if (isset($_POST['submit'])) {
        $eventsno = "MMKEV".rand(10000, 100000000);
        $eventtitle = $_POST['eventtitle'];
        $eventdate = $_POST['eventdate'];
        $eventsdescription = $_POST['eventsdescription'];

        $eventsbudget = $_POST['eventsbudget'];
        $eventpartnername = $_POST['eventpartnername'];
        $eventpartnerdescription = $_POST['eventpartnerdescription'];
       
        //-----------------------------------------//
        
       $selecteventsquerycount = "select * from events";
       $runcount = mysqli_query($con,$selecteventsquerycount);

       $eventsnumber = mysqli_num_rows($runcount) + 1;

       $eventsphoto_events = $_FILES['eventsphoto'] ['name'];
       $eventsphoto_tmp = $_FILES['eventsphoto'] ['tmp_name'];

       $eventsphoto = $eventsnumber."_".$eventsphoto_events;

        //-----------------------------------------//

       $eventpartnerlogo_events = $_FILES['eventpartnerlogo'] ['name'];
       $eventpartnerlogo_tmp = $_FILES['eventpartnerlogo'] ['tmp_name'];

       $eventpartnerlogo = $eventsnumber."_".$eventpartnerlogo_events;

        //-----------------------------------------//
        
      move_uploaded_file($eventsphoto_tmp, "../eventsphoto/$eventsphoto");
      move_uploaded_file($eventpartnerlogo_tmp, "../eventpartnerlogo/$eventpartnerlogo");
      

       //-----------------------------------------//

      $eventsquery = "insert into events(eventsno, eventtitle, eventdate, eventsdescription, eventsphoto, eventsbudget, eventpartnername, eventpartnerdescription, eventpartnerlogo)values('$eventsno', '$eventtitle', '$eventdate', '$eventsdescription', '$eventsphoto', '$eventsbudget', '$eventpartnername', '$eventpartnerdescription', '$eventpartnerlogo')";
       if ($eventtitle == '') {
        echo "<script>alert('please enter Event Title')</script>";
       }else
          {
          mysqli_query($con, $eventsquery);
          echo "<script>alert('Your Events Details Added')</script>";
          echo "<script>window.open('events.php','_self')</script>";
          
         }
     
     }

 ?>