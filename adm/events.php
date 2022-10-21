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
                            <h4 class="header-title">Events</h4>
                            <div class="table-responsive datatable-primary">
                                <a href="eventsadd.php" class="btn btn-primary mb-3">Add Events</a>
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Events No</th>
                                        <th>Event Title</th>
                                        <th>Event Date</th>
                                        <!-- <th>Events Description</th> -->
                                        <!-- <th>Events Photo</th>
                                        <th>Events Budget</th> -->
                                        <!-- <th>Event Partner Name</th> -->
                                        <!-- <th>Event partner Description</th> -->
                                        <!-- <th>Event Partner Logo</th> -->
                                        <!-- <th>Creat Date</th> -->
                                        <!-- <th>Modify Date</th> -->
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selecteventsquery = "select * from events";
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
                                    <tr>
                                        <td><?= $serialNumber; ?></td>
                                        <td><?= $eventsno; ?></td>
                                        <td><?= $eventtitle; ?></td>
                                        <td><?= $eventdate; ?></td>
                                        <!-- <td><?= $eventsdescription; ?></td> -->
                                        <!-- <td>
                                          <img src="../eventsphoto/<?= $eventsphoto; ?>" width="100" height="100">
                                        </td>
                                        
                                        <td><?= $eventsbudget; ?></td>
                                        <td><?= $eventpartnername; ?></td>
                                        <td><?= $eventpartnerdescription; ?></td>
                                         <td>
                                          <img src="../eventpartnerlogo/<?= $eventpartnerlogo; ?>" width="100" height="100">
                                        </td>
                                        
                                        <td><?= $creatdate; ?></td>
                                        <td><?= $modifydate; ?></td>
                                         -->
                                       
                                        <td>
                                            <a href="eventsedit.php?eventsedit=<?= $eventsid; ?>" <i class="fa fa-pencil" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i> </a>
                                           <a href="edit/delete.php?eventsedit=<?= $eventsid; ?>" <i class="fa fa-trash" aria-hidden="true" style="color: #00807c;width:50px;font-size:20px;"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
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
<?php } ?>