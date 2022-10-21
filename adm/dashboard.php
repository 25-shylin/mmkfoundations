<?php 
session_start();
 if (!isset($_SESSION['admin_name'])) {
    header("location: index.php");
 }
 else {
    include("includes/database.php");
    include("includes/header.php");
    include("includes/sidebar.php");
 ?>

    <!--==================================*
               Main Content Section
    *====================================-->
    <div class="main-content page-content">

        <!--==================================*
                   Main Section
        *====================================-->
        <div class="main-content-inner">
            <div class="row mb-4">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-center dashboard-header flex-wrap mb-3 mb-sm-0">
                            <h5 class="mr-4 mb-0 font-weight-bold">Dashboard</h5>
                            <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                <!-- <p class="text-muted mb-0 mr-1 hover-cursor">App</p>
                                <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                <p class="text-muted mb-0 mr-1 hover-cursor">Dashboard</p>
                                <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                <p class="text-muted mb-0 hover-cursor">Analytics</p> -->
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-group mr-3">
                                <button type="button" class="btn btn-primary">02 Aug 2022</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1">
                                    <a class="dropdown-item" href="#">Sept 2022</a>
                                    <a class="dropdown-item" href="#">Oct 2022</a>
                                    <a class="dropdown-item" href="#">Nov 2022</a>
                                </div>
                            </div>
                            <button class="btn bg-white border d-none d-sm-block">Download Report</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card primary_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Number Of Volunteers</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <?php 
                                    $volunteers_count = "select * from volunteers";
                                    $volunteers_count_run = mysqli_query($con, $volunteers_count);
                                    $volunteers_count_row = mysqli_num_rows($volunteers_count_run);
                                     

                                     ?>
                                <h3 class="mb-0 text-white"><?php echo "No. ".$volunteers_count_row; ?></h3>
                                <div class="arrow_icon"><i class="ion-arrow-right-c text-primary"></i></div>
                            </div>
                            <p class="mb-0 text-white"><span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card success_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Number Of Employee </p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <?php 
                                    $employee_count = "select * from employee";
                                    $employee_count_run = mysqli_query($con, $employee_count);
                                    $employee_count_row = mysqli_num_rows($employee_count_run);
                                     

                                     ?>
                                <h3 class="mb-0 text-white"><?php echo "No. ".$employee_count_row; ?></h3>
                                <div class="arrow_icon"><i class="ion-arrow-right-c text-success"></i></div>
                            </div>
                            <p class="mb-0 text-white"><span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card warning_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Number Of Donner</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <?php 
                                    $donater_count = "select * from donater";
                                    $donater_count_run = mysqli_query($con, $donater_count);
                                    $donater_count_row = mysqli_num_rows($donater_count_run);
                                     

                                     ?>
                                <h3 class="mb-0 text-white"><?php echo "No. ".$donater_count_row; ?></h3>
                                <div class="arrow_icon"><i class="ion-arrow-right-c text-warning"></i></div>
                            </div>
                            <p class="mb-0 text-white"><span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card info_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Number Of Events</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <?php 
                                    $events_count = "select * from events";
                                    $events_count_run = mysqli_query($con, $events_count);
                                    $events_count_row = mysqli_num_rows($events_count_run);
                                     

                                     ?>
                                <h3 class="mb-0 text-white"><?php echo "No. ".$events_count_row; ?></h3>
                                <div class="arrow_icon"><i class="ion-arrow-right-c text-info"></i></div>
                            </div>
                            <p class="mb-0 text-white"><span class="text-white ml-1"><small>(Since last day)</small></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Progress Table start -->
                <div class="col-lg-12" style="margin-top:30px;">
                    <div class="card">
                        <div class="card-body">
                            <!-- THE CALENDAR -->
                            <div id="calendar" class="full_calendar"></div>
                        </div>
                    </div>
                </div>
                <!-- Progress Table end -->
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
<?php
    }
    ?>