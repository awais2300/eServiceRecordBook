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
        background: url('<?= base_url() ?>assets/img/images.jpg');
       /* background-position: center; */
        /* background-position: absolute; */
         background-position: top; 
         background-size: cover; 
        background-repeat: no-repeat;
        max-width: 100%;
        max-height: 120%;
        background-color: #486285;
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
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>D_O/view_dossier_folder" aria-expanded="true">
                    <i class="far fa-newspaper"></i>
                    <span> VIEW DOSSIER</span>
                    <!-- <span>Components</span> -->
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>D_O/view_dossier" aria-expanded="true">
                    <i class="fas fa-th-list"></i>
                    <span> ANALYTICS</span>
                    <!-- <span>Components</span> -->
                </a>

            </li>

            <li class="nav-item">
                <!-- <a class="nav-link collapsed" href="<?php echo base_url(); ?>/D_O/PN_Form" aria-expanded="true"> -->
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>D_O/personal_data" aria-expanded="true">
                    <i class="fab fa-wpforms"></i>
                    <span>ADD UT</span>
                    <!-- <span>Components</span> -->
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PHASE II (TECHNICAL QUALIFICATION)
            </div>

            <li class="nav-item">
                <a id="general" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_general" aria-expanded="true">
                    <i class="fas fa-file-alt"></i>
                    <span> GENERAL </span>
                    <!-- <span>Components</span> -->
                </a>
                <div id="collapse_general" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>D_O/auto_biography">DIVISIONAL RECORD</a>
                       <a class="collapse-item" href="<?php echo base_url(); ?>D_O/psychologist_report">NOK RECORD</a> 
                        <a class="collapse-item" href="<?php echo base_url(); ?>D_O/Inspection_record">INSPECTION RECORD</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>D_O/view_record_div_officer">SDO/DO/ADO RECORD</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>D_O/add_club">ADD CLUB</a>
                        <!-- <a class="collapse-item" href="<?php echo base_url(); ?>D_O/personal_data">Personal Data</a> -->
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>D_O/daily_module" aria-expanded="true">
                    <i class="fas fa-running"></i>
                    <span> DAILY MODULE </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_warning" aria-expanded="true">
                    <i class="fas fa-exclamation-circle"></i>
                    <span> WARNINGS </span>
                </a>
                <div id="collapse_warning" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>D_O/add_warning">ADD WARNING</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_academic" aria-expanded="true">
                    <i class="fas fa-book"></i>
                    <span>ACADEMICS </span>
                </a>
                <div id="collapse_academic" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url(); ?>D_O/view_semester_result">RESULTS (Terms I - VI)</a>
                      <!--  <a class="collapse-item" href="<?= base_url(); ?>D_O/view_training_report">BCT/ELC/NBCD/WHT</a> -->
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_profesion" aria-expanded="true">
                    <i class="fas fa-ruler-combined"></i>
                    <span> PROFESSION </span>
                </a>
                <div id="collapse_profesion" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url(); ?>D_O/professional_course_page">BCT/ELC/NBCD/WHT</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>D_O/leave_page" aria-expanded="true">
                    <i class="fas fa-pen-fancy"></i>
                    <span> LEAVE </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>D_O/uniform_kit_page" aria-expanded="true">
                    <i class="fas fa-tshirt"></i>
                    <span> UNIFORM & KIT </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_assesment" aria-expanded="true">
                    <i class="fas fa-chart-bar"></i>
                    <span> ASSESSMENTS</span>
                    <!-- <span>Components</span> -->
                </a>
                <div id="collapse_assesment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url(); ?>D_O/view_general_remarks">GENERAL REMARKS</a>
                        <!-- <a class="collapse-item" href="#">Performance Report</a> -->
                        <a class="collapse-item" href="<?= base_url(); ?>D_O/view_progress_chart">PROGRESS CHART</a>
                        <a class="collapse-item" href="<?= base_url(); ?>D_O/view_distinction_records">HONOURS & AWARDS</a>
                        <a class="collapse-item" href="<?= base_url(); ?>D_O/view_seniority_records">SENIORITY RECORD</a> <!-- <a class="collapse-item" href="<?php echo base_url(); ?>D_O/add_branch_allocation">BRANCH ALLOCATION</a> -->
                        <!-- <a class="collapse-item" href="#">Degree Complete</a> -->

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>D_O/add_officer_qualities" aria-expanded="true">
                    <i class="fas fa-medal"></i>
                    <span> PERSONALITY TRAITS </span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>D_O/view_promotion_screen" aria-expanded="true">
                    <i class="fas fa-award"></i>
                    <span>PROMOTION/RELEGATION </span>
                </a>
            </li>
            <!--   <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>D_O/view_activity_log" aria-expanded="true">
                    <i class="far fa-list-alt"></i>
                    <span> ACTIVITY LOG </span>
                </a>
            </li> -->
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
                                            <b>NO NEW NOTIFICATIONS </b>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Notifications </a>
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

                    <!-- <script>
                    // $('#general').click(function() {
                    //    $('.collapse_general').collapse();
                    //});
                </script> -->