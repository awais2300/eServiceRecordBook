<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-SERVICE RECORD BOOK</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    .img-cheif {
        background: url('<?= base_url() ?>assets/img/hafeez.jpg');
        background-position: center;
        /* background-position: top; */
        /* background-size: cover; */
        background-repeat: no-repeat;
        max-width: 100%;
        max-height: 100%;
        background-color: rgb(0, 1, 84);
        /* opacity: 0.9; */
        /* display: block; */
        /* remove extra space below image */
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">E-SERVICE RECORD BOOK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?><?php if ($this->session->userdata('acct_type') == 'do') {
                                                                        echo "D_O";
                                                                    } ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
          <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>SMO/view_dossier_folder" aria-expanded="true">
                    <i class="fas fa-th-list"></i>
                    <span> VIEW DOSSIER </span> -->
                    <!-- <span>Components</span> -->
                </a>

            </li>  
            <!-- 
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>/D_O/PN_Form" aria-expanded="true">
                    <i class="fab fa-wpforms"></i>
                    <span>PN Form I</span>
                   
                </a>

            </li> -->

            <!-- Divider -->
          <!--  <hr class="sidebar-divider"> -->

            <!-- Heading -->
           <!-- <div class="sidebar-heading">
                PHASE II (TECHNIQAL QUALIFICATION)
            </div>-->
            <li class="nav-item">
                <a id="general" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_general" aria-expanded="true">
                    <i class="fas fa-file-alt"></i>
                    <span> GENERAL</span>
                    <!-- <span>Components</span> -->
                </a>
                <div id="collapse_general" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                      <!--  <a class="collapse-item" href="<?php echo base_url(); ?>SMO/add_club">Add Club</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/Inspection_record">Inspection Record</a>
                        < !-- <a class="collapse-item" href="<?php echo base_url(); ?>SMO/personal_data">Personal Data</a> -- >
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/auto_biography">Cadet's Auto-biography</a>  -->

                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/psychologist_report">PSYCHOLOGIST's REPORT</a>

                   <!--     <a class="collapse-item" href="<?php echo base_url(); ?>SMO/view_record_div_officer">Divisional Officer Record</a>
                    </div>
                </div>
            </li>  -->
            <li class="nav-item">
                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_discipline" aria-expanded="true"> -->
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>SMO/daily_module" aria-expanded="true">
                    <i class="fas fa-running"></i>   
                    <span> DAILY MODULE</span>
                    <!-- <span>Components</span> -->
                </a>
                <!-- <div id="collapse_discipline" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/daily_module">Daily Module</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/add_observation">Observation Record</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/add_punishment">Punishment Record</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/add_observation_slip">Observation Slips</a> 
                    </div>
                </div> -->
            </li>
          <!--  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_warning" aria-expanded="true">
                    <i class="fas fa-exclamation-circle"></i>
                    <span> Warning</span>
                    < !-- <span>Components</span> -- >
                </a>
                <div id="collapse_warning" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/add_warning">Add Warning</a>
                        < !-- <a class="collapse-item" href="<?php echo base_url(); ?>SMO/view_warning_attachment">Add Warning Attachment</a> -->
                        <!-- <a class="collapse-item" href="#">Record Attachments</a> -- >
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_academic" aria-expanded="true">
                    <i class="fas fa-book"></i>
                    <span> Academic Record</span>
                    < !-- <span>Components</span> -- >
                </a>
                <div id="collapse_academic" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        < !-- <a class="collapse-item" href="<?= base_url(); ?>SMO/view_result">Results (Terms I - III)</a> -- >
                        <a class="collapse-item" href="<?= base_url(); ?>SMO/view_semester_result"><a class="collapse-item" href="<?= base_url(); ?>CAO/view_result"><?php if ($this->session->userdata('unit_id') != '1') { ?>Results (Terms VI - VIII)<?php } else { ?> Results (Terms I - III) <?php } ?></a>
                            <?php if ($this->session->userdata('unit_id') == '1') { ?>
                                <a class="collapse-item" href="<?= base_url(); ?>SMO/view_training_report">Sea Training Report Term II</a>
                            <?php } ?>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_assesment" aria-expanded="true">
                    <i class="fas fa-chart-bar"></i>
                    <span> Assesment</span>
                    < !-- <span>Components</span> -- >
                </a>
                <div id="collapse_assesment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url(); ?>SMO/view_general_remarks">General Remarks</a>
                        < !-- <a class="collapse-item" href="#">Performance Report</a> -- >
                        <a class="collapse-item" href="<?= base_url(); ?>SMO/view_progress_chart">Progress Chart</a>
                        <a class="collapse-item" href="<?= base_url(); ?>SMO/view_distinction_records">Distictions</a>
                        <a class="collapse-item" href="<?= base_url(); ?>SMO/view_seniority_records">Seniority</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>SMO/add_branch_allocation">Branch Allocation</a>
                        <a class="collapse-item" href="#">Degree Complete</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>SMO/add_officer_qualities" aria-expanded="true">
                    <i class="fas fa-medal"></i>
                    <span> Officer Like Qualities</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>SMO/view_promotion_screen" aria-expanded="true">
                    <i class="fas fa-award"></i>
                    <span> Promotion/Relegation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>SMO/view_activity_log" aria-expanded="true">
                    <i class="far fa-list-alt"></i>
                    <span> View Activity Log </span>
                </a>
            </li>  -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>User_Login/change_password" aria-expanded="true">
                    <i class="fas fa-unlock-alt"></i>
                    <span> CHANGE PASSWORD </span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <?php if ($this->uri->segment(2) != null) { ?>
            <div id="content-wrapper" class="d-flex flex-column bg-custom2">
            <?php } else { ?>
                <div id="content-wrapper" class="d-flex flex-column bg-custom2 img-cheif">
                <?php } ?>

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-custom1 topbar static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <!-- <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div> -->
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">


                            <li class="nav-item dropdown no-arrow mx-1" id="notifications">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter"></span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" id="xyz">
                                    <h6 class="dropdown-header">
                                        NOTIFICATIONS
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div style="padding:10px">
                                            <b>NO NEW NOTIFICATIONS</b>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">SHOW ALL NOTIFICATIONS </a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1" id="notification">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class=""></span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        CHATBOX
                                    </h6>

                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div>
                                            <div style="padding:10px"><b>NO NEW MESSAGES
                                                </b></div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">READ MORE</a>
                                </div>
                            </li>


                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $this->session->userdata('username'); ?></span>
                                    <span id="user_id" style="display:none"><?php echo $this->session->userdata('user_id'); ?></span>
                                    <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <!--     <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        LOGOUT
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->
                    <!-- 
                <script>
                    $('#general').click(function() {
                        $('.collapse_general').collapse();
                    });
                    
                </script> -->