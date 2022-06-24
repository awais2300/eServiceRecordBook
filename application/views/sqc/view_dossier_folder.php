<?php if ($this->session->userdata('acct_type') == 'do') {
    $this->load->view('do/common/header');
} else if ($this->session->userdata('acct_type') == 'joto') {
    $this->load->view('joto/common/header');
} else if ($this->session->userdata('acct_type') == 'exo') {
    $this->load->view('exo/common/header');
} else if ($this->session->userdata('acct_type') == 'co') {
    $this->load->view('co/common/header');
} else if ($this->session->userdata('acct_type') == 'ct') {
    $this->load->view('ct/common/header');
} else if ($this->session->userdata('acct_type') == 'sqc') {
    $this->load->view('sqc/common/header');
} else if ($this->session->userdata('acct_type') == 'cao') {
    $this->load->view('cao/common/header');
} else if ($this->session->userdata('acct_type') == 'cao_sec') {
    $this->load->view('cao_sec/common/header');
} else if ($this->session->userdata('acct_type') == 'smo') {
    $this->load->view('smo/common/header');
} else if ($this->session->userdata('acct_type') == 'ctmwt') {
    $this->load->view('ctmwt/common/header');
} else if ($this->session->userdata('acct_type') == 'dean') {
    $this->load->view('dean/common/header');
} else if ($this->session->userdata('acct_type') == 'hougp') {
    $this->load->view('hougp/common/header');
} ?>
<?php !isset($oc_no_entered) ? $oc_no_entered = '' : $oc_no_entered; ?>
<?php !isset($pn_data) ? $pn_data = '' : $pn_data; ?>
<style>
    .red-border {
        border: 1px solid red !important;
    }

    /* a:hover {
        color: white !important;
        background-color: #000154 !important;
        border-radius: 50px;
    } */

    .list-group-item:hover {
        color: white !important;
        background-color: #486285 !important;
        border-radius: 20px;
    }

    .custom_list {
        /* height: 45px; */
        /* padding: 8px; */
        /* border: none !important; */
        border-radius: 10rem !important;
    }

    th,
    td {
        border-left: 0.5px solid black;
    }

    .box {
        border: 1px solid black;
        height: 200px;
        width: 20px;
        text-align: center;
    }
</style>

<div class="container-fluid my-2">

    <!-- Page Heading -->
    <div class="card-body" style="padding:10px">
        <div class="row my-2">
            <div class="card-body" style="margin-left:30px; <?php if (!isset($pn_data['name'])) { ?> padding: 0px; height: 40px; <?php } ?>">
                <h2 style="text-align:center; text-decoration:underline; margin-bottom:20px"><strong>VIEW UT's DOSSIER FOLDER</strong></h2>

                <div class="row">
                    <div class="col-lg-1">
                        <?php if (isset($pn_data['name'])) { ?>
                            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height:130px;">
                        <?php } ?>
                    </div>
                    <div class="col-lg-9 my-2">
                        <div class="col-lg-6 ">
                            <h4><strong><?php if (isset($pn_data['name'])) {
                                            echo $pn_data['name'];
                                        } ?></strong></h4>
                        </div>

                        <div class="col-lg-6 mx-2">
                            <h4><?php if (isset($pn_data['term'])) {
                                    echo $pn_data['term'];
                                } ?></h4>
                        </div>

                        <div class="col-lg-6 mx-2">
                            <h4><?php if (isset($pn_data['oc_no'])) {
                                    echo $pn_data['oc_no'];
                                } ?></h4>
                        </div>

                        <div class="col-lg-6 mx-2">
                            <h4><?php if (isset($pn_data['divison_name'])) {
                                    echo $pn_data['divison_name'];
                                } ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <?php if (isset($pn_data['name'])) { ?>
                            <img src='<?= base_url() ?>uploads/documents/<?php echo $pn_personal_data['upload_file'] ?>' style="height:130px; width:100px; border:1px solid black;">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body bg-custom3" id="main-container">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-custom1" id="header_title">
                        <?php if (isset($pn_data['name'])) { ?>
                            <h1 class="h4">CONTENTS</h1>
                        <?php } else { ?>
                            <h1 class="h4">SEARCH UT</h1>
                        <?php } ?>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="add_form" action="">
                            <?php if (!isset($pn_data['name'])) { ?>
                                <div class="form-group row">
                                    <div class="col-sm-1" style="margin-top:15px">
                                        <h6>&nbsp;O NO:</h6>
                                    </div>

                                    <div class="col-sm-3 mb-1">
                                        <input type="text" class="form-control form-control-user" name="oc_no" id="oc_no" placeholder="ENTER O NO" value="<?= $oc_no_entered ?>">
                                        <span id="error_search" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;PLEASE ENTER O NO</span>
                                    </div>

                                    <div class="col-sm-2 mb-1">
                                        <button type="button" class="btn btn-primary btn-user btn-block" id="search_btn">
                                            SEARCH
                                        </button>
                                    </div>
                                </div>

                            <?php } ?>


                            <?php if ($pn_data != null) { ?>
                                <div id="cadet_dossier" class="row">
                                    <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                        <ul class="list-group">
                                            <a href="#" style="color:black" id="gen">
                                                <li class="list-group-item bg-custom3 custom_list">GENERAL</li>
                                            </a>
                                            <a href="#" style="color:black" id="disp">
                                                <li class="list-group-item bg-custom3 custom_list">DISCIPLINE</li>
                                            </a>
                                            <a href="#" style="color:black" id="warn">
                                                <li class="list-group-item bg-custom3 custom_list">WARNINGS</li>
                                            </a>
                                            <a href="#" style="color:black" id="phy">
                                                <li class="list-group-item bg-custom3 custom_list">PHYSICAL EFFICIENCY</li>
                                            </a>
                                            <a href="#" style="color:black" id="acad">
                                                <li class="list-group-item bg-custom3 custom_list">ACADEMIC RECORD</li>
                                            </a>
                                            <a href="#" style="color:black" id="olq">
                                                <li class="list-group-item bg-custom3 custom_list">PERSONALITY TRAITS</li>
                                            </a>
                                            <a href="#" style="color:black" id="assess">
                                                <li class="list-group-item bg-custom3 custom_list">ASSESSMENT</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block my-3" id="back_btn_main" style="">
                                        BACK
                                    </button>
                                </div>

                            <?php } ?>

                            <div id="gen_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">

                                        <a href="#" style="color:black" id="btn_autobiography">
                                            <li class="list-group-item bg-custom3 custom_list">DIVISIONAL RECORD</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_psychology">
                                            <li class="list-group-item bg-custom3 custom_list">NOK RECORD</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_personal_record">
                                            <li class="list-group-item bg-custom3 custom_list">PERSONAL INFORMATION</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_divisional_officer_record">
                                            <li class="list-group-item bg-custom3 custom_list">SDO/DO/ADO RECORDS</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_inspection_record">
                                            <li class="list-group-item bg-custom3 custom_list">INSPECTION RECORD</li>
                                        </a>


                                    </ul>
                                </div>
                            </div>

                            <div id="disp_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="obs_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF OBSERVATIONS</li>
                                        </a>
                                        <a href="#" style="color:black" id="punish_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF PUNISHMENT</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="terms_list_punish" class="col-lg-2" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_punish_term1">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-I</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_punish_term2">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-II</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_punish_term3">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-III</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="terms_list_obs" class="col-lg-2" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_obs_term1">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-I</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_obs_term2">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-II</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_obs_term3">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-III</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="warn_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_warning">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF WARNINGS</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_warning_attach">
                                            <li class="list-group-item bg-custom3 custom_list">WARNINGS (INSERTED)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="phy_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_saluting_swimming_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF PARADE TRAINING AND SWIMMING</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_physical_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD PHYSICAL EFFICIENCY</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PROFICIENCY IN GAMES</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_medical_record">
                                            <li class="list-group-item bg-custom3 custom_list">MEDICAL RECORD</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="acad_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_result_t1">
                                            <li class="list-group-item bg-custom3 custom_list">RESULT (TERM-I)</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_result_t2">
                                            <li class="list-group-item bg-custom3 custom_list">RESULT (TERM-II)</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_result_t3">
                                            <li class="list-group-item bg-custom3 custom_list">RESULT (TERM III)</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_sea_training_report">
                                            <li class="list-group-item bg-custom3 custom_list">BCT/ELC/NBCD/WHT</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="olq_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" ID="btn_olq_record">
                                            <li class="list-group-item bg-custom3 custom_list"></li>
                                        </a>

                                    </ul>
                                </div>
                                <div id="terms_olq_record" class="col-lg-2" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_olq_term1">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-I</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_olq_term2">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-II</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_olq_term3">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-III</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="assess_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_general_remarks">
                                            <li class="list-group-item bg-custom3 custom_list">GENERAL REMARKS</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_progress_chart">
                                            <li class="list-group-item bg-custom3 custom_list">PROGRESS CHART</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_distinction_achieved">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF HONOURS & AWARDS ACHIEVED</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_seniority_record">
                                            <li class="list-group-item bg-custom3 custom_list">SENIORITY RECORD</li>
                                        </a>
                                        <!--    <a href="#" style="color:black" id="btn_branch_allocation">
                                            <li class="list-group-item bg-custom3 custom_list">ALLOCAITON OF BRANCH/SPECIALISATION </li>
                                        </a> -->

                                    </ul>
                                </div>
                            </div>

                            <div id="general_remarks_list" class="row" style="display:none;">
                                <div class="col-lg-4" style="text-align:left;font-weight:bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">GENERAL REMARKS</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="terms_general_remarks_record" class="col-lg-2" style="text-align:left;font-weight: bold">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_general_remarks_term1">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-I</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_general_remarks_term2">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-II</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_general_remarks_term3">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-III</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="general_remarks_mid_final_term1" class="col-lg-3" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_general_remarks_term1_mid">
                                            <li class="list-group-item bg-custom3 custom_list">MID TERM ASSESSMENT</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_general_remarks_term1_final">
                                            <li class="list-group-item bg-custom3 custom_list">FINAL TERM ASSESSMENT</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="general_remarks_mid_final_term2" class="col-lg-3" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_general_remarks_term2_mid">
                                            <li class="list-group-item bg-custom3 custom_list">MID TERM ASSESSMENT</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_general_remarks_term2_final">
                                            <li class="list-group-item bg-custom3 custom_list">FINAL TERM ASSESSMENT</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="general_remarks_mid_final_term3" class="col-lg-3" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_general_remarks_term3_mid">
                                            <li class="list-group-item bg-custom3 custom_list">MID TERM ASSESSMENT</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_general_remarks_term3_final">
                                            <li class="list-group-item bg-custom3 custom_list">FINAL TERM ASSESSMENT</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary btn-user btn-block my-3" id="back_btn" style="display:none">
                                    BACK
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


        <div id="no_data" class="row my-2" style="display:none">
            <div class="col-lg-12 my-5">
                <h4 style="color:red">NO UT FOUND.PLEASE CHECK THE O NO ENTERED.</h4>
            </div>
        </div>



    </div>


    <div class="card-body bg-custom3" id="container-2">
        <?php if (!isset($pn_data['name'])) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <!--  <div class="card-header bg-custom1">
                            <h1 class="h4"></h1>
                        
                        <div class="card-body bg-custom1" style="font-size:small;text-align: justify;">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                </div>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        
                                </div>
                                <div class="col-sm-6">
                             
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
                    <?php } ?>

                    <div id="no_data" class="row my-2" style="display:none;">
                        <div class="col-lg-12">
                            <h4 style="color:red;">NO UT FOUND. PLEASE CHECK THE O NO ENTERED.</h4>
                        </div>
                    </div>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="punish_term1">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!--   <a onclick="location.href='#'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:60%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/punishment_records_report/<?= $pn_data['oc_no'] ?>/Term-I'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF PUNISHMENT</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_punish_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="">DATE</th>
                                                            <td scope="" style="width:350px">OFFENCE</th>
                                                            <td scope="">PUNISHMENT AWARDED</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">AWARDED BY</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_punish_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px;text-align: center;"><?= $data['offence']; ?></td>
                                                                <td scope="" style="text-align: center;"><?= $data['punishment_awarded']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><?= $data['awarded_by']; ?></td>

                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_punish_term1">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div id="no_data" class="row my-2" style="display:none;">
                            <div class="col-lg-12">
                                <h4 style="color:red;">NO UT FOUND.PLEASE CHECK THE O NO ENTERED.</h4>
                            </div>
                        </div>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="punish_term2">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!--  <a onclick="location.href='<?= base_url() ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:60%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/punishment_records_report/<?= $pn_data['oc_no'] ?>/Term-II'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF PUNISHMENT</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_punish_data_term2) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="">DATE</th>
                                                            <td scope="" style="width:350px">OFFENCE</th>
                                                            <td scope="">PUNISHMENT AWARDED</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">AWARDED BY</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_punish_data_term2 as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px"><?= $data['offence']; ?></td>
                                                                <td scope=""><?= $data['punishment_awarded']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?= $data['awarded_by']; ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_punish_term2">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div id="no_data" class="row my-2" style="display:none;">
                            <div class="col-lg-12">
                                <h4 style="color:red;">NO UT FOUND.PLEASE CHECK THE O NO ENTERED.</h4>
                            </div>
                        </div>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="punish_term3">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!--     <a onclick="location.href='#'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/punishment_records_report/<?= $pn_data['oc_no'] ?>/Term-III'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF PUNISHMENT</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_punish_data_term3) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="">DATE</th>
                                                            <td scope="" style="width:350px">OFFENCE</th>
                                                            <td scope="">PUNISHMENT AWARDED</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">AWARDED BY</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">EDIT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_punish_data_term3 as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px"><?= $data['offence']; ?></td>
                                                                <td scope=""><?= $data['punishment_awarded']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?= $data['awarded_by']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><a href="<?= base_url() ?>CAO/view_edit_punishment/<?= $data['id'] ?>" style="color: black"><i class="fa fa-edit"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_punish_term3">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>


                        <div id="no_data" class="row my-2" style="display:none;">
                            <div class="col-lg-12">
                                <h4 style="color:red;">NO UT FOUND.PLEASE CHECK THE O NO.</h4>
                            </div>
                        </div>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="obs_term1">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!--  <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_observation/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:60%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/observation_records_report/<?= $pn_data['oc_no'] ?>/Term-I'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF OBSERVATION</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_obs_data_term1) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="">DATE</th>
                                                            <td scope="" style="width:350px">OBSERVATION</th>
                                                            <td scope="">OBSERVED/CHECKED BY</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">REMARKS/ ACTION BY</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">EDIT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_obs_data_term1 as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="white-space:nowrap;text-align: center;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px;text-align: center;"><?= $data['observation']; ?></td>
                                                                <td scope="" style="text-align: center;"><?= $data['observed_by']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><?= $data['action_taken']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><a href="<?= base_url() ?>CAO/view_edit_observation/<?= $data['id'] ?>" style="color: black"><i class="fa fa-edit"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_obs_term1">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="obs_term2">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!--  <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_observation/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:60%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/observation_records_report/<?= $pn_data['oc_no'] ?>/Term-II'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF OBSERVATION</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_obs_data_term2) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="">DATE</th>
                                                            <td scope="" style="width:350px">OBSERVATION</th>
                                                            <td scope="">OBSERVED/CHECKED BY</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">REMARKS/ ACTION BY</th>
                                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">EDIT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_obs_data_term2 as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="white-space:nowrap; text-align: center;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px;text-align: center;"><?= $data['observation']; ?></td>
                                                                <td scope="" style="text-align: center;"><?= $data['observed_by']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><?= $data['action_taken']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><a href="<?= base_url() ?>CAO/view_edit_observation/<?= $data['id'] ?>" style="color: black"><i class="fa fa-edit"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET.</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_obs_term2">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="obs_term3">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!--  <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_observation/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:60%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/observation_records_report/<?= $pn_data['oc_no'] ?>/Term-III'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF OBSERVATION</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_obs_data_term3) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:70px">DATE</th>
                                                            <td scope="" style="width:300px">OBSERVATION</th>
                                                            <td scope="" style="width:70px !important">OBSERVED/ CHECKED BY</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">REMARKS/ ACTION TAKEN</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">EDIT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_obs_data_term1 as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="text-align: center;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px;text-align: center;"><?= $data['observation']; ?></td>
                                                                <td scope="" style="text-align: center;"><?= $data['observed_by']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><?= $data['action_taken']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><a href="<?= base_url() ?>CAO/view_edit_observation/<?= $data['id'] ?>" style="color: black"><i class="fa fa-edit"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO UT FOUND. PLEASE CHECK THE O NO ENTERED. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_obs_term3">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="warning_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!-- <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_warning/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/warning_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF WARNING</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_warning_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:70px">S NO</th>
                                                            <td scope="" style="width:70px">DATE</th>
                                                            <td scope="" style="width:70px">ISSUED BY</th>
                                                            <td scope="" style="width:70px !important">REASONS</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">DO'S SIGNATURE</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">EDIT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_warning_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="text-align: center;"><?= ++$count; ?></td>
                                                                <td scope="" style="text-align: center;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px;text-align: center;"><?= $data['issued_by']; ?></td>
                                                                <td scope=""><?= $data['reasons']; ?></td>

                                                                <td scope="" style="border-right:1px solid black;"></td>
                                                                <td scope="" style="border-right:1px solid black;text-align: center;"><a href="<?= base_url() ?>CAO/view_edit_warning/<?= $data['id'] ?>" style="color: black"><i class="fa fa-edit"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATE AVILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_warning">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="warning_record_insert">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!-- <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_warning/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a> -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/warning_record_insert_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>WARNINGS</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h6>(TO BE INSERTED UNDER THIS PAGE)</h6>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_warning_records) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:20%">S NO.</th>
                                                            <td scope="" style="width:40%">WARNING LETTER</th>
                                                            <td scope="" style="border-right:1px solid black;width:40%">DOWNLOAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_warning_records as $data) { ?>
                                                            <tr>
                                                                <td scope=""><?= ++$count; ?></td>
                                                                <td scope=""><?= $data['file'] ?></td>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><a style="color:black;width:100%;text-align:center;hover:black;" href="<?= base_url(); ?>uploads/warning/<?= $data['file']; ?>"><i class="fas fa-download"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>

                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_warning_insert">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="inspection_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/inspection_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>INSPECTION RECORD</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_inspection_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:70px">DATE</th>
                                                            <td scope="" style="width:70px">REMARKS</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">INSPECTION OFFICER'S SIGNATURE</th>
                                                            <td scope="" style="width:70px;border-right:1px solid black;">EDIT</td>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_inspection_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="text-align: center;"><?= $data['date']; ?></td>
                                                                <td scope="" style="height:80px;text-align: center;"><?= $data['remarks']; ?></td>
                                                                <td scope="" style="border-right:1px solid black; text-align: center;"><?= $data['inspecting_officer_name']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;width:100px !important;text-align: center;"><a style="color: black;" href="<?php echo base_url() ?>CAO/view_edit_inspection/<?= $data['id']; ?>"><i class="fa fa-edit"></i></a></td>>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_inspection">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="medical_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/medical_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>MEDICAL RECORD</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_medical_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:70px">DATE</td>
                                                            <td scope="" style="width:70px">TERM</td>
                                                            <td scope="" style="width:70px">DISEASE</td>
                                                            <td scope="" style="width:70px">ADMITTED NAME OF SICK BAY/HOSPITALS</td>
                                                            <td scope="" style="width:70px">MO'S/SMO'S REMARKS</td>
                                                            <td scope="" style="width:70px">SPECIALISTS OPINION</td>
                                                            <td scope="" style="width:70px">INSTRUCTIONAL LOSS (PERIODS/DAYS)</td>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">REMARKS BY DIVISIONAL OFFICER</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_medical_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date'])); ?></td>
                                                                <td scope="" style="height:80px"><?= $data['term']; ?></td>
                                                                <td scope=""><?= $data['disease']; ?></td>
                                                                <td scope=""><?= $data['admitted']; ?></td>
                                                                <td scope=""><?= $data['mo_remarks']; ?></td>
                                                                <td scope=""><?= $data['specialist_opinion']; ?></td>
                                                                <td scope=""><?= $data['instructional_loss']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?= $data['do_remarks']; ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_medical">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="saluting_swimming_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/saluting_swimming_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF PARADE TRAINING AND SWIMMING</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_physical_tests_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:10px">S NO</td>
                                                            <td scope="" style="width:70px">TESTS</td>
                                                            <td scope="" style="width:70px">DATE</td>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">RESULT & REMARKS</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_physical_tests_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">PARADE TRAINING</td>
                                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date_added'])); ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?= $data['saluting_result']; ?> - ATTEMPT: <?= $data['saluting_attempt']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">PRELIMINARY SWIMMING TEST</td>
                                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date_added'])); ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?= $data['PST_result']; ?> - ATTEMPT: <?= $data['PST_attempt']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">STANDARD SWIMMING TEST</td>
                                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date_added'])); ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?= $data['SST_result']; ?> - ATTEMPT: <?= $data['SST_attempt']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_saluting_swimming">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="physical_efficiency_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>

                                <a onclick="location.href='<?= base_url(); ?>CAO/add_physical_milestone/<?php echo "view_dossier_folder" ?>'" style="margin-left: 65%" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit text-white-50"></i> Edit Record</a>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/physical_efficiency_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF PHYSICAL EFFICIENCY</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_physical_tests_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">

                                                    <?php $count = 0;
                                                    foreach ($pn_physical_tests_data as $data) { ?>
                                                        <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                            <tr>
                                                                <td scope="" Style="width:50px">S NO</td>
                                                                <td scope="" Style="width:180px">EVENT</td>
                                                                <td scope="" colspan="4">TERM-I</td>
                                                                <td scope="" colspan="4">TERM-II</td>
                                                                <td scope="" colspan="4">TERM-III</td>
                                                                <td scope="" style="border-right:1px solid black;" colspan="4">TERM-IV</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">MILE TIME</td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                                    echo $pn_pet1_data_tp['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                                    echo $pn_pet1_data_tp['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                                    echo $pn_pet2_data_tp['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                                    echo $pn_pet2_data_tp['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                                    echo $pn_pet1_data_t1['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                                    echo $pn_pet1_data_t1['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                                    echo $pn_pet1_data_t1['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                                    echo $pn_pet2_data_t1['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                                    echo $pn_pet1_data_t2['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                                    echo $pn_pet1_data_t2['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                                    echo $pn_pet2_data_t2['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                                    echo $pn_pet2_data_t2['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                                    echo $pn_pet1_data_t4['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                                    echo $pn_pet1_data_t4['mile_time'];
                                                                                } ?></td>
                                                                <td scope=""><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                                    echo $pn_pet2_data_t4['mile_time'];
                                                                                } ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                                                                        echo $pn_pet2_data_t3['mile_time'];
                                                                                                                    } ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                                        </tr>
                                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                                            <thead style="font-weight:bold;padding:5px; text-align:center">
                                                                <tr>
                                                                    <th scope=""></th>
                                                                    <th scope=""></th>
                                                                    <th scope="" colspan="2"></th>
                                                                    <th scope="" colspan="2"></th>
                                                                    <th scope="" colspan="2"></th>
                                                                    <th scope="" colspan="2"></th>
                                                                    <th scope="" colspan="2"></th>
                                                                    <th scope="" colspan="2"></th>
                                                                    <th scope="" style="border-right:1px solid black;" colspan="2"></th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">ROPE CLASS</td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_tp['rope'])) {
                                                                                                echo $pn_pet1_data_tp['rope'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_tp['rope'])) {
                                                                                                echo $pn_pet2_data_tp['rope'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t1['rope'])) {
                                                                                                echo $pn_pet1_data_t1['rope'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t1['rope'])) {
                                                                                                echo $pn_pet2_data_t1['rope'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t2['rope'])) {
                                                                                                echo $pn_pet1_data_t2['rope'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t2['rope'])) {
                                                                                                echo $pn_pet2_data_t2['rope'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t3['rope'])) {
                                                                                                echo $pn_pet1_data_t3['rope'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_pet2_data_t3['rope'])) {
                                                                                                                                    echo $pn_pet2_data_t3['rope'];
                                                                                                                                } ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                                        </tr>
                                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">BEAM WORK</td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_tp['chinups'])) {
                                                                                                echo $pn_pet1_data_tp['chinups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_tp['chinups'])) {
                                                                                                echo $pn_pet2_data_tp['chinups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t1['chinups'])) {
                                                                                                echo $pn_pet1_data_t1['chinups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t1['chinups'])) {
                                                                                                echo $pn_pet2_data_t1['chinups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t2['chinups'])) {
                                                                                                echo $pn_pet1_data_t2['chinups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t2['chinups'])) {
                                                                                                echo $pn_pet2_data_t2['chinups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t3['chinups'])) {
                                                                                                echo $pn_pet1_data_t3['chinups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_pet2_data_t3['chinups'])) {
                                                                                                                                    echo $pn_pet2_data_t3['chinups'];
                                                                                                                                } ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                                        </tr>
                                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">PUSH UPS</td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_tp['pushups'])) {
                                                                                                echo $pn_pet1_data_tp['pushups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_tp['pushups'])) {
                                                                                                echo $pn_pet2_data_tp['pushups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t1['pushups'])) {
                                                                                                echo $pn_pet1_data_t1['pushups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t1['pushups'])) {
                                                                                                echo $pn_pet2_data_t1['pushups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t2['pushups'])) {
                                                                                                echo $pn_pet1_data_t2['pushups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t2['pushups'])) {
                                                                                                echo $pn_pet2_data_t2['pushups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t3['pushups'])) {
                                                                                                echo $pn_pet1_data_t3['pushups'];
                                                                                            } ?></td>
                                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_pet2_data_t3['pushups'])) {
                                                                                                                                    echo $pn_pet2_data_t3['pushups'];
                                                                                                                                } ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                                        </tr>
                                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">100M SPRINT TIME</td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2" style="border-right:1px solid black;"></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                                        </tr>
                                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                                <td scope="">TOTAL PET SCORE</td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2"></td>
                                                                <td scope="" colspan="2" style="border-right:1px solid black;"></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                                        </tr>
                                                        <!--       <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">MINI CROSS COUNTRY ____ KM</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_tp['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['mini_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_tp['mini_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t1['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['mini_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t1['mini_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t2['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['mini_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t2['mini_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t3['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t3['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_physical_tests_data_t3['mini_cross_card_number'])) {
                                                                                                                    echo $pn_physical_tests_data_t3['mini_cross_card_number'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">CROSS COUNTRY _______KM</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_tp['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['long_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_tp['long_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t1['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['long_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t1['long_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t2['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['long_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t2['long_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t3['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t3['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_physical_tests_data_t3['long_cross_card_number'])) {
                                                                                                                    echo $pn_physical_tests_data_t3['long_cross_card_number'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">ASSAULT COURSES TIME</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['assault_result'])) {
                                                                                echo $pn_physical_tests_data_tp['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['assault_attempt'])) {
                                                                                echo $pn_physical_tests_data_tp['assault_attempt'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['assault_result'])) {
                                                                                echo $pn_physical_tests_data_t1['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['assault_attempt'])) {
                                                                                echo $pn_physical_tests_data_t1['assault_attempt'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['assault_result'])) {
                                                                                echo $pn_physical_tests_data_t2['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['assault_attempt'])) {
                                                                                echo $pn_physical_tests_data_t2['assault_attempt'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t3['assault_result'])) {
                                                                                echo $pn_physical_tests_data_t3['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_physical_tests_data_t3['assault_attempt'])) {
                                                                                                                    echo $pn_physical_tests_data_t3['assault_attempt'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>  -->
                                                        </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_physical_efficiency">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="officer_qualities_record_term1">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_qualities/<?= $pn_data['p_id'] ?>/Term-I'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 65%"><i class="fas fa-edit text-white-50"></i> Edit Record</a>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/officer_qualities_records_report/<?= $pn_data['oc_no'] ?>/Term-I'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>PERSONALITY TRAITS</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (isset($pn_officer_qualities_data_t1['term'])) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:10px;border-top:none !important;border-left:none !important"></td>
                                                            <td scope="" style="width:70px;border-top:none !important;border-left:none !important"></td>
                                                            <td scope="" style="width:70px;border-top:1px solid black;">MAX MARKS</td>
                                                            <td scope="" style="width:70px;border-top:1px solid black;">MID TERM</td>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important;border-top:1px solid black;">TERMINAL</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0; ?>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFESSIONAL COMPETENCE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['truthfulness_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['truthfulness_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">DISCIPLINE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['integrity_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['integrity_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INITIATIVE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['pride_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['pride_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">RESOURCEFULNESS</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['courage_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['courage_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">RELIABILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['confidence_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['confidence_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFESSIONAL AND PRACTICAL KNOWLEDGE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['initiative_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['inititative_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFICIENCY IN DUTIES DEPLOYED</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['command_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['command_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">BOLDNESS,COURAGE & STAMINA</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['discipline_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['discipline_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">ATTITUDE TOWARDS SERVICE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['duty_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['duty_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INTEGRITY & MORL VALUES</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['reliability_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['reliability_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">SENSE OF DUTY & READINESS TO ACCEPT RESPONSIBILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['appearance_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['appearance_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PHYSICAL FITNESS & MILITARY BEARING</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['fitness_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['fitness_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INTELLIGENCE & MENTAL ALERTNESS</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['conduct_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['conduct_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">ADAPTABILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['cs_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['cs_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <!--  <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">ADAPTABILITY</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['teamwork_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['teamwork_terminal']; ?></td>
                                        </tr>
                                         <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Power of Expression (Oral & Written)</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['expression_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['expression_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>  -->
                                                        <tr>
                                                            <td scope="" style="height:80px"></td>
                                                            <td scope=""> <strong>TOTAL MARKS: </strong> </td>
                                                            <td scope="" style="text-align:center">140</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['total_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['total_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="" style="border-right:1px solid black;"> MARKS FOR TERM </td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['mid_marks']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['terminal_marks']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="" style="border-right:1px solid black;"> DATE OF ASSESSMENT</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['mid_marks_date']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['terminal_marks_date']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> DO's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> SDO's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> OIC's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> COMMANDANT's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_olq_term1">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="officer_qualities_record_term2">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_qualities/<?= $pn_data['p_id'] ?>/Term-II'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 65%"><i class="fas fa-edit text-white-50"></i> Edit Record</a>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/officer_qualities_records_report/<?= $pn_data['oc_no'] ?>/Term-II'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>PERSONALITY TRAITS</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (isset($pn_officer_qualities_data_t2['term'])) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:10px;border-top:none !important;border-left:none !important"></td>
                                                            <td scope="" style="width:70px;border-top:none !important;border-left:none !important"></td>
                                                            <td scope="" style="width:70px;border-top:1px solid black;">MAX MARKS</td>
                                                            <td scope="" style="width:70px;border-top:1px solid black;">MID TERM</td>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important;border-top:1px solid black;">TERMINAL</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0; ?>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFESSIONAL COMPETENCE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['truthfulness_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['truthfulness_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">DISCIPLIN</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['integrity_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['integrity_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INITIATIVE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['pride_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['pride_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">RESOURCEFULNESS</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['courage_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['courage_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">RELIABILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['confidence_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['confidence_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFESSIONAL AND PRACTICAL KNOWLEDGE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['initiative_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['inititative_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFICIENCY IN DUTIES DEPLOYED</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['command_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['command_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">BOLDNESS,COURAGE & STAMINA</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['discipline_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['discipline_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">ATTITUDE TOWARDS SERVICE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['duty_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['duty_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INTEGRITY & MORAL VALUES</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['reliability_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['reliability_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">SENSE OF DUTY & REDINESS TO ACCEPT RESPONSIBILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['appearance_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['appearance_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PHYSICAL FITNESS & MILITARY BEARING</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['fitness_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['fitness_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INTELLIGENCE , MENTAL ALERTNESS</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['conduct_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['conduct_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">ADAPABILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['cs_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['cs_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <!--  <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">ADAPABILITY</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['teamwork_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['teamwork_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Power of Expression (Oral & Written)</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['expression_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['expression_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>  -->
                                                        <tr>
                                                            <td scope="" style="height:80px"></td>
                                                            <td scope=""> <strong>TOTAL MARKS: </strong> </td>
                                                            <td scope="" style="text-align:center">140</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['total_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['total_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="" style="border-right:1px solid black;"> MARKS FOR TERM </td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['mid_marks']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['terminal_marks']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="" style="border-right:1px solid black;"> DATE OF ASSESSMENT</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['mid_marks_date']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['terminal_marks_date']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> DO's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> SDO's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> OIC's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr style="border-left: none;">
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" style="height:80px; border-left:none"></td>
                                                            <td scope="" colspan="3" style="border-right:1px solid black;"> COMMANDANT's SIGN </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-left:none"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_olq_term2">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="officer_qualities_record_term3">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_qualities/<?= $pn_data['p_id'] ?>/Term-III'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 65%"><i class="fas fa-edit text-white-50"></i> Edit Record</a>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/officer_qualities_records_report/<?= $pn_data['oc_no'] ?>/Term-III'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>PERSONALITY TRAITS</strong></h4>
                                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (isset($pn_officer_qualities_data_t3['term'])) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:10px;border-top:none !important;border-left:none !important"></td>
                                                            <td scope="" style="width:70px;border-top:none !important;border-left:none !important"></td>
                                                            <td scope="" style="width:70px;border-top:1px solid black;">MAX MARKS</td>
                                                            <td scope="" style="width:70px;border-top:1px solid black;">MID TERM</td>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important;border-top:1px solid black;">TERMINAL</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0; ?>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFESSIONAL COMPETNCE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['truthfulness_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['truthfulness_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">DISCIPLINE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['integrity_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['integrity_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INITIATIVE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['pride_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['pride_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">RESOURCEFULNESS</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['courage_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['courage_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">RELIABILTY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['confidence_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['confidence_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFESSIONAL AND PRACTICAL KNOWLEDGE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['initiative_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['inititative_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PROFICIENCY IN DUTIES DEPLOYED</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['command_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['command_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">BOLDNESS, COURAGE & STAMINA</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['discipline_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['discipline_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">ATTITUDE TOWARDS SERVICE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['duty_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['duty_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INTEGRITY & MORAL VALUES</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['reliability_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['reliability_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">SENSE OF DUTY & READINESS TO ACCEPT RESPONSIBILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['appearance_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['appearance_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">DISCIPLINE</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['fitness_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['fitness_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">PHYSICAL FITNESS & MILITARY BEARING</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['conduct_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['conduct_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">INTELLIGENCE ,MENTAL ALERTNESS</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['cs_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['cs_terminal']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                        <!- <tr>
                                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                            <td scope="">ADAPTABILITY</td>
                                                            <td scope="" style="text-align:center">10</td>
                                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['teamwork_mid']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['teamwork_terminal']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                            <!-- <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Power of Expression (Oral & Written)</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['expression_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['expression_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>  -->
                                                            <tr>
                                                                <td scope="" style="height:80px"></td>
                                                                <td scope=""> <strong>TOTAL MARKS: </strong> </td>
                                                                <td scope="" style="text-align:center">140</td>
                                                                <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['total_mid']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['total_terminal']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                            <tr style="border-left: none;">
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" colspan="" style="border-right:1px solid black;"> MARKS FOR TERM </td>
                                                                <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['mid_marks']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['terminal_marks']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                            <tr style="border-left: none;">
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" colspan="" style="border-right:1px solid black;"> DATE OF ASSESSMENT</td>
                                                                <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['mid_marks_date']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['terminal_marks_date']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                            <tr style="border-left: none;">
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" colspan="3" style="border-right:1px solid black;"> DO's SIGN </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                            </tr>
                                                            <tr style="border-left: none;">
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" colspan="3" style="border-right:1px solid black;"> SDO's SIGN </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                            <tr style="border-left: none;">
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" colspan="3" style="border-right:1px solid black;"> OIC's SIGN </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                            <tr style="border-left: none;">
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" style="height:80px; border-left:none"></td>
                                                                <td scope="" colspan="3" style="border-right:1px solid black;"> COMMANDANT's SIGN </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-left:none"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;"></td>
                                                                <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_olq_term3">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="personal_data_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>SQC/view_edit_personal_record/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a>
                <a onclick="location.href='<?php echo base_url() ?>/SQC/personal_data_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <?php if (isset($pn_personal_data['p_no'])) { ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!--   <div class="form-group row my-5">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2 box">
                                    <h6 style="margin-top:90px; text-decoration:underline"><strong>&nbsp;TERM-III</strong></h6>
                                </div>
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-2 box">
                                    <h6 style="margin-top:90px; text-decoration:underline"><strong>&nbsp;TERM-II</strong></h6>
                                </div>
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-2 box">
                                    <h6 style="margin-top:90px; text-decoration:underline"><strong>&nbsp;TERM-I</strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->

                            <div class="container my-3">
                                <div style="text-align:center">
                                    <h4 style="text-decoration:underline"><strong>PERSONAL INFORMATION</strong></h4>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>1.&nbsp;&nbsp;&nbsp;O NO:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['p_no'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>2.&nbsp;&nbsp;CLASS</strong></h6>
                                </div>
                                <div class="col-sm-5" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['class'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>3.&nbsp;&nbsp;&nbsp;NAME IN FULL:</strong></h6>
                                </div>
                                <div class="col-sm-4" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['name'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>4.&nbsp;&nbsp;&nbsp;CNIC:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['nic'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>5.&nbsp;&nbsp;&nbsp;RELIGION:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['religion'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>6.&nbsp;&nbsp;&nbsp;MARITIAL STATUS:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['maritial_status'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>7.&nbsp;&nbsp;&nbsp;VACCINATION:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['vaccination'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>8.&nbsp;&nbsp;&nbsp;LIVING STATUS:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['living_status'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>9.&nbsp;&nbsp;&nbsp;COUNTRY:</strong></h6>
                                </div>
                                <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['bahadur'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>10.&nbsp;&nbsp;&nbsp;EMERGENCY CONTACT:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['emergency_contact'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>11.&nbsp;&nbsp;&nbsp;PHONE (LANDLINE):</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['telephone_no'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>12.&nbsp;&nbsp;&nbsp;PHONE (MOBILE):</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['mobile_no'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>13.&nbsp;&nbsp;&nbsp;MOBILE MAKE:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['mobile_make'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>14.&nbsp;&nbsp;&nbsp;MOBILE MODEL:</strong></h6>
                                </div>
                                <div class="col-sm-1" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['mobile_model'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>15.&nbsp;&nbsp;&nbsp;IMEI NO:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['mobile_imei'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>16.&nbsp;&nbsp;&nbsp;SIM CARRIER:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['sim_carrier'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>17.&nbsp;&nbsp;&nbsp;SIM LOCATION:</strong></h6>
                                </div>
                                <div class="col-sm-1" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['sim_location'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>18.&nbsp;&nbsp;&nbsp;USE BY:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['sim_in_use_by'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>19.&nbsp;&nbsp;&nbsp;EX-ARMY NAVY OR PAF:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['ex_army'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>20.&nbsp;&nbsp;&nbsp;&nbsp;SERVED FROM:</strong></h6>
                                </div>
                                <div class="col-sm-4" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['ex_army_from'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>&nbsp;&nbsp;&nbsp;&nbsp;TO:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['ex_army_to'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-1">
                                    <h6 style="font-size:small"><strong>21.&nbsp;&nbsp;WIFE NAME</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['wife_name'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                    <h6 style="font-size:small"><strong>22.&nbsp;&nbsp;&nbsp;WIFE CNIC:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['wife_cnic'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6 style="font-size:small"><strong>23.&nbsp;&nbsp;&nbsp;DATE OF MARRIAGE/DIVORCE:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['date_of_marriage'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>9.&nbsp;&nbsp;&nbsp;FATHER'S NAME:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['father_name'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>10.&nbsp;&nbsp;&nbsp;FATHER'S OCCUPATION:</strong></h6>
                                </div>
                                <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['father_occupation'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:15px;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>24.&nbsp;&nbsp;&nbsp;FATHER'S INFORMATION:</strong></h6>
                                    <div class="form-group row">
                                        <div class="col-sm-1" style="margin-bottom:10px;">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;NAME:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['father_name'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;CNIC:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['father_cnic'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;OCCUPATION:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['father_occupation'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;STATUS:</strong></h6>
                                        </div>
                                        <div class="col-sm-1" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['father_status'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:small"><strong>&nbsp;&nbsp;ADDRESS:</strong></h6>
                                        </div>
                                        <div class="col-sm-11" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['father_permanent_address'] ?></strong></h6>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="col-sm-1">
                                </div> -->
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:15px;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>25.&nbsp;&nbsp;&nbsp;MOTHER'S INFORMATION:</strong></h6>
                                    <div class="form-group row">
                                        <div class="col-sm-1" style="margin-bottom:10px;">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;NAME:</strong></h6>
                                        </div>
                                        <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['mother_name'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;CNIC:</strong></h6>
                                        </div>
                                        <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['mother_cnic'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;STATUS:</strong></h6>
                                        </div>
                                        <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['mother_status'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:small"><strong>&nbsp;&nbsp;&nbsp;ADDRESS:</strong></h6>
                                        </div>
                                        <div class="col-sm-11" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['mother_permanent_address'] ?></strong></h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-1">
                                </div> -->
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>10.&nbsp;&nbsp;&nbsp;FATHER'S OCCUPATION:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['father_occupation'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:5px;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>26.&nbsp;&nbsp;&nbsp;CHILDERN RECORDS:</strong></h6>
                                    <div class="form-group row">
                                        <div class="col-sm-1">
                                            <h6 style="font-size:medium"><strong>S. NO.</strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6 style="font-size:medium"><strong>NAME:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:medium"><strong>GENDER:</strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6 style="font-size:medium"><strong>DOB:</strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6 style="font-size:medium"><strong>PROFESSION:</strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6 style="font-size:medium"><strong>ADDRESS:</strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6 style="font-size:medium"><strong>AFFILIATION:</strong></h6>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <?php
                                        if (count($pn_personal_data_childern_record) > 0) {
                                            $count = 0;
                                            foreach ($pn_personal_data_childern_record as $data) { ?>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:medium"><strong><?= ++$count; ?></strong></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6 style="font-size:medium"><strong><?= $data['name'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:medium"><strong><?= $data['gender'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6 style="font-size:medium"><strong><?= $data['dob'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6 style="font-size:medium"><strong><?= $data['profession'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6 style="font-size:medium"><strong><?= $data['address'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6 style="font-size:medium"><strong><?= $data['affiliation'] ?></strong></h6>
                                                </div>
                                            <?php }
                                        } else { ?>
                                            <h6> NO CHILDERN RECORD ENTERD </h6>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-1">
                                </div> -->
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:15px;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>27.&nbsp;&nbsp;&nbsp;NEXT OF KIN INFORMATION:</strong></h6>
                                    <div class="form-group row">
                                        <div class="col-sm-1" style="margin-bottom:10px;">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;NAME:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['next_of_kin_name'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;CNIC:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['next_of_kin_cnic'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;RELATION:</strong></h6>
                                        </div>
                                        <div class="col-sm-4" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['next_of_kin_relation'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;CONTACT:</strong></h6>
                                        </div>
                                        <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['next_of_kin_contact_no'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;ADDRESS:</strong></h6>
                                        </div>
                                        <div class="col-sm-5" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['next_of_kin_address'] ?></strong></h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-1">
                                </div> -->
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>11.&nbsp;&nbsp;&nbsp;NAME:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['next_of_kin_name'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>12.&nbsp;&nbsp;&nbsp;CNIC:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['next_of_kin_cnic'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->

                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-4">
                                    <h6><strong>12.&nbsp;&nbsp;&nbsp;NAMES OF BROTHERS AND SISTERS:</strong></h6>
                                </div>
                                <div class="col-sm-6" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['siblings'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:5px;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>28.&nbsp;&nbsp;&nbsp;SIBLINGS RECORD:</strong></h6>
                                    <div class="form-group row">
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>S. NO.</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>NAME:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>GENDER:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>NATIONALITY:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>RELIGION:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>SECT:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>AGE:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>DEPENDENT:</strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6 style="font-size:x-small"><strong>ADDRESS:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>CONTACT NO:</strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 style="font-size:x-small"><strong>AFFILIATION:</strong></h6>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <?php
                                        if (count($pn_personal_data_sibling_record) > 0) {
                                            $count = 0;
                                            foreach ($pn_personal_data_sibling_record as $data) { ?>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= ++$count; ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['name'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['gender'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['nationality'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['religion'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['sect'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['age'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['dependant'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6 style="font-size:small"><strong><?= $data['address'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['contact_no'] ?></strong></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <h6 style="font-size:small"><strong><?= $data['affiliation'] ?></strong></h6>
                                                </div>
                                            <?php }
                                        } else { ?>
                                            <h6> NO SIBLING RECORD ENTERD </h6>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-1">
                                </div> -->
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <h6><strong>13.&nbsp;&nbsp;&nbsp;NEAR RELATIVES IN DEFENCE SERVICES (TO INCLUDE ONLY PARENTS/BROTHERS/SISTERS/REAL UNCLES):</strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:15px;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>29.&nbsp;&nbsp;&nbsp;NEAR RELATIVES IN DEFENCE INFORMATION:</strong></h6>
                                    <div class="form-group row">
                                        <div class="col-sm-1" style="margin-bottom:10px;">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;NAME:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['relative_pno'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;RANK:</strong></h6>
                                        </div>
                                        <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['relative_rank'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;REALTION:</strong></h6>
                                        </div>
                                        <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['relative_relationship'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;UNIT:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['relative_unit'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;ADDRESS:</strong></h6>
                                        </div>
                                        <div class="col-sm-2" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['relative_address'] ?></strong></h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6><strong>&nbsp;&nbsp;&nbsp;CONTACT:</strong></h6>
                                        </div>
                                        <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                            <h6><strong><?= $pn_personal_data['relative_contact'] ?></strong></h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-1">
                                </div> -->
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6 style="text-decoration:underline"><strong>RANK:</strong></h6>
                                </div>
                                <div class="col-sm-4">
                                    <h6 style="text-decoration:underline"><strong>NAME</strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6 style="text-decoration:underline"><strong>RELATIONSHIP</strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6 style="text-decoration:underline"><strong>UNIT</strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border-bottom: 2px solid black; text-align:center;height: 20px;margin-left:10px">
                                    <h6><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?= $pn_personal_data['near_relatives']; ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>30.&nbsp;&nbsp;&nbsp;IDENTIFICATION MARK:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['identification_marks']; ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>31.&nbsp;&nbsp;&nbsp;HEIGHT:</strong></h6>
                                </div>
                                <div class="col-sm-4" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['height'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>32.&nbsp;&nbsp;&nbsp;WEIGHT:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['weight'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>


                            <div class="container my-3">
                                <div style="text-align:center">
                                    <h4 style="text-decoration:underline"><strong>PART-II</strong></h4>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>33.&nbsp;&nbsp;&nbsp;DATE OF JOINING NAVY:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['navy_joining_date'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>34.&nbsp;&nbsp;&nbsp;MODE OF ENTRY:</strong></h6>
                                </div>
                                <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['entry_mode'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>35.&nbsp;&nbsp;&nbsp;SERVICE IDENTITY CARD NO:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['service_id'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>36.&nbsp;&nbsp;&nbsp;NATIONAL IDENTITY CARD NO:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['nic'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>37.&nbsp;&nbsp;&nbsp;BLOOD GROUP:</strong></h6>
                                </div>
                                <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['blood_group'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>38.&nbsp;&nbsp;&nbsp;MEMBERSHIP:</strong></h6>
                                </div>
                                <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['membership'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>39.&nbsp;&nbsp;&nbsp;PROFESSIONAL COURSES:</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['professional_courses'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>22.&nbsp;&nbsp;&nbsp;ADDRESS:</strong></h6>
                                </div>
                                <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['address'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:5px; height: 135px !important;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>40.&nbsp;&nbsp;&nbsp;CURRENT ADDRESS:</strong></h6>
                                    <table id="datatable" class="table">
                                        <tbody id="table_rows">
                                            <tr>
                                                <td scope="row" style="border:none; font-weight:bold">HOUSE NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_house_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">BLOCK NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_block_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">STREET NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_street_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">TEHSIL:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_tehsil'] ?></td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border:none; font-weight:bold">DISTRICT:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_district'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">CITY:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_city'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">POLICE STATION:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_police_station'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">PROVINCE:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['current_province'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:5px; height: 135px !important;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>41.&nbsp;&nbsp;&nbsp;PERMAMENT ADDRESS:</strong></h6>
                                    <table id="datatable" class="table">
                                        <tbody id="table_rows">
                                            <tr>
                                                <td scope="row" style="border:none; font-weight:bold">HOUSE NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_house_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">BLOCK NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_block_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">STREET NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_street_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">TEHSIL:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_tehsil'] ?></td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border:none; font-weight:bold">DISTRICT:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_district'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">CITY:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_city'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">POLICE STATION:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_police_station'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">PROVINCE:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['permanent_province'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10" style="border:solid 1px black; padding:5px; height: 135px !important;">
                                    <h6 style="text-decoration:underline; margin-bottom:10px;"><strong>42.&nbsp;&nbsp;&nbsp;KARACHI ADDRESS (IF ANY):</strong></h6>
                                    <table id="datatable" class="table">
                                        <tbody id="table_rows">
                                            <tr>
                                                <td scope="row" style="border:none; font-weight:bold">HOUSE NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_house_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">BLOCK NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_block_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">STREET NO:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_street_no'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">TEHSIL:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_tehsil'] ?></td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border:none; font-weight:bold">DISTRICT:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_district'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">CITY:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_city'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">POLICE STATION:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_police_station'] ?></td>
                                                <td scope="row" style="border:none; font-weight:bold">PROVINCE:</td>
                                                <td scope="row" style="border:none; text-decoration:underline"><?= $pn_personal_data['karachi_province'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-4">
                                    <h6><strong>23.&nbsp;&nbsp;&nbsp;KARACHI ADDRESS IF ANY WITH TELE NO:</strong></h6>
                                </div>
                                <div class="col-sm-6" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['karachi_address'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->

                            <div class="container my-3">
                                <div style="text-align:center">
                                    <h4 style="text-decoration:underline"><strong>PART-III</strong></h4>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>43.&nbsp;&nbsp;&nbsp;MATRIC SCHOOL:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['matric_school'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>44.&nbsp;&nbsp;&nbsp;BOARD OF EDUCATION</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['matric_board_of_edu'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>45.&nbsp;&nbsp;&nbsp;DIVISION/GRADE:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['matric_division'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>46.&nbsp;&nbsp;&nbsp;MATRIC SUBJECTS:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['matric_subjects'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>26.&nbsp;&nbsp;&nbsp;SUBJECTS:</strong></h6>
                                </div>
                                <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['matric_subjects'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>47.&nbsp;&nbsp;&nbsp;INTER COLLEGE:</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['intermediate_college'] ?></strong></h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>48.&nbsp;&nbsp;&nbsp;BOARD OF EDUCATION</strong></h6>
                                </div>
                                <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['inter_board_of_edu'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-2">
                                    <h6><strong>49.&nbsp;&nbsp;&nbsp;DIVISION/GRADE:</strong></h6>
                                </div>
                                <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['intermediate_division'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-3">
                                    <h6><strong>50.&nbsp;&nbsp;&nbsp;HET/DIPLOMA (IF APPLICABLE):</strong></h6>
                                </div>
                                <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['diploma'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-1">
                                    <h6><strong>51.&nbsp;&nbsp;&nbsp;OTHERS</strong></h6>
                                </div>
                                <div class="col-sm-9" style="border-bottom: 2px solid black; text-align:center;height: 20px;">
                                    <h6><strong><?= $pn_personal_data['other'] ?></strong></h6>
                                </div>
                                <div class="col-sm-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <p>NO DATA FOUND</p>
            <?php } ?>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_personal_record">
                        BACK
                    </button>
                </div>
            </div>
        </form>

    </div>

                    <div class="card-body bg-custom3" style="display:none" id="divisional_officer_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/divisional_officer_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>SDO/DO/ADO RECORDS</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_divisional_officer_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:230px">RANK/NAME/APPOINTMENT</th>
                                                            <td scope="" colspan="2" style="width:100px;border-bottom:1px solid black;">PERIOD</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">SIGNATURES</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">EDIT</th>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="width:230px">
                                                                </th>
                                                            <td scope="" style="width:70px"> DATE FROM</th>
                                                            <td scope="" style="width:70px">DATE TILL</th>
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">
                                                            <td scope="" style="border-right:1px solid black;width:100px !important">
                                                                </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_divisional_officer_data as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:50px;text-align: center;"><?= $data['rank']; ?> <?= $data['officer_name']; ?></td>
                                                                <td scope="" style="height:50px;text-align: center;"><?= $data['date_from']; ?></td>
                                                                <td scope="" style="height:50px;text-align: center;"><?= $data['date_to']; ?></td>

                                                                <td scope="" style="border-right:1px solid black;"></td>
                                                                <td scope="" style="height:50px;text-align: center;border-right:1px solid black"><a href="<?= base_url(); ?>CAO/view_edit_officer_record/<?= $data['id'] ?>" style="color: black"><i class="fa fa-edit"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_divisional_officer">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="autobiography_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_biography/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a>

                                <a onclick="location.href='<?php echo base_url() ?>/CAO/autobiography_record_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>DIVISIONAL RECORD</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h5>(TO BE INSERTED UNDER THIS PAGE</h5>
                                            </div>
                                        </div>
                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_autobiography_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:20%">S NO.</th>
                                                            <td scope="" style="width:40%">FILENAME</th>
                                                            <td scope="" style="border-right:1px solid black;width:40%">DOWNLOAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_autobiography_data as $data) { ?>
                                                            <tr>
                                                                <td scope=""><?= ++$count; ?></td>
                                                                <td scope=""><?= $data['file_name'] ?></td>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center;width:40%"><a style="color:black;width:100%;text-align:center;hover:black;" href="<?= base_url(); ?>uploads/documents/<?= $data['file_name']; ?>"><i class="fas fa-download"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_autobiography">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="psychology_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_psychologist_report/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/psychology_record_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>NOK RECORD</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h5>(TO BE PASTED HERE)</h5>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_psychologist_data) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:20%">S NO.</th>
                                                            <td scope="" style="width:40%">FILENAME</th>
                                                            <td scope="" style="border-right:1px solid black;width:40%">DOWNLOAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_psychologist_data as $data) { ?>
                                                            <tr>
                                                                <td scope=""><?= ++$count; ?></td>
                                                                <td scope=""><?= $data['file_name'] ?></td>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><a style="color:black;width:100%;text-align:center;hover:black;" href="<?= base_url(); ?>uploads/documents/<?= $data['file_name']; ?>"><i class="fas fa-download"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILBLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_psychologhy">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="result_record_t1">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!-- <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_result_report/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a>  -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/result_record_report/<?= $pn_data['oc_no'] ?>/Term-I/Result'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RESULT REPORT (TERM-I)</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h5>(TO BE PASTED HERE)</h5>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_result_record_t1) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:20%">S NO.</th>
                                                            <td scope="" style="width:40%">FILENAME</th>
                                                            <td scope="" style="border-right:1px solid black;width:40%">DOWNLOAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_result_record_t1 as $data) { ?>
                                                            <tr>
                                                                <td scope=""><?= ++$count; ?></td>
                                                                <td scope=""><?= $data['file_name'] ?></td>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><a style="color:black;width:100%;text-align:center;hover:black;" href="<?= base_url(); ?>uploads/documents/<?= $data['file_name']; ?>"><i class="fas fa-download"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_result_t1">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="result_record_t2">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!-- <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_result_report/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a>  -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/result_record_report/<?= $pn_data['oc_no'] ?>/Term-II/Result'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RESULT REPORT (TERM-II)</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h5>(TO BE PASTED HERE)</h5>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_result_record_t2) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:20%">S NO.</th>
                                                            <td scope="" style="width:40%">FILENAME</th>
                                                            <td scope="" style="border-right:1px solid black;width:40%">DOWNLOAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_result_record_t2 as $data) { ?>
                                                            <tr>
                                                                <td scope=""><?= ++$count; ?></td>
                                                                <td scope=""><?= $data['file_name'] ?></td>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><a style="color:black;width:100%;text-align:center;hover:black;" href="<?= base_url(); ?>uploads/documents/<?= $data['file_name']; ?>"><i class="fas fa-download"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_result_t2">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="result_record_t3">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!-- <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_ressult_report/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a>  -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/result_record_report/<?= $pn_data['oc_no'] ?>/Term-III/Result'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RESULT REPORT (TERM-III)</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h5>(TO BE PASTED HERE)</h5>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_result_record_t3) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:20%">S NO.</th>
                                                            <td scope="" style="width:40%">FILENAME</th>
                                                            <td scope="" style="border-right:1px solid black;width:40%">DOWNLOAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_result_record_t3 as $data) { ?>
                                                            <tr>
                                                                <td scope=""><?= ++$count; ?></td>
                                                                <td scope=""><?= $data['file_name'] ?></td>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><a style="color:black;width:100%;text-align:center;hover:black;" href="<?= base_url(); ?>uploads/documents/<?= $data['file_name']; ?>"><i class="fas fa-download"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_result_t3">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="sea_training_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <!-- <a onclick="location.href='<?php echo base_url() ?>CAO/view_edit_sea_training_report/<?= $pn_data['p_id']; ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left:65%; margin-right:1%;"><i class="far fa-edit"></i> Edit Record</a>  -->
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/result_record_report/<?= $pn_data['oc_no'] ?>/Term-II/SeaTraining'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>BCT/ELC/NBCD/WHT</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h5>(TO BE PASTED HERE)</h5>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px">
                                            <?php if (count($pn_sea_training_record) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:20%">S NO.</th>
                                                            <td scope="" style="width:40%">FILENAME</th>
                                                            <td scope="" style="border-right:1px solid black;width:40%">DOWNLOAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_sea_training_record as $data) { ?>
                                                            <tr>
                                                                <td scope=""><?= ++$count; ?></td>
                                                                <td scope=""><?= $data['file_name'] ?></td>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><a style="color:black;width:100%;text-align:center;hover:black;" href="<?= base_url(); ?>uploads/documents/<?= $data['file_name']; ?>"><i class="fas fa-download"></i></a></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_sea_training">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="general_remarks_term1_mid">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/general_remarks_report/<?= $pn_data['oc_no'] ?>/Term-I/Mid'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>GENERAL REMARKS</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px;">
                                            <?php if (count($pn_general_remarks_term1_mid) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;width:40%">MID TERM ASSESSMENT </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important;">
                                                        <?php $count = 0;
                                                        foreach ($pn_general_remarks_term1_mid as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><?= $data['remarks'] ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;height:500px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:60px"><strong>DIVISIONAL OFFICER</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DAT AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_general_remarks_term1_mid">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="general_remarks_term1_final">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/general_remarks_report/<?= $pn_data['oc_no'] ?>/Term-I/final'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>GENERAL REMARKS</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px;">
                                            <?php if (count($pn_general_remarks_term1_final) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;width:40%">TERMINAL ASSESSMENT </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important;">
                                                        <?php $count = 0;
                                                        foreach ($pn_general_remarks_term1_final as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><?= $data['remarks'] ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;height:500px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;text-align:right;padding:40px"><strong>DIVISIONAL OFFICER</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:40px"><strong>CAPTAIN TRAINING</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABL YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_general_remarks_term1_final">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body bg-custom3" style="display:none" id="general_remarks_term2_mid">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/general_remarks_report/<?= $pn_data['oc_no'] ?>/Term-II/Mid'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>GENERAL REMARKS</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px;">
                                            <?php if (count($pn_general_remarks_term2_mid) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;width:40%">MID TERM ASSESSMENT </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important;">
                                                        <?php $count = 0;
                                                        foreach ($pn_general_remarks_term2_mid as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><?= $data['remarks'] ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;height:500px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:60px"><strong>DIVISIONAL OFFICER</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_general_remarks_term2_mid">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="general_remarks_term2_final">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/general_remarks_report/<?= $pn_data['oc_no'] ?>/Term-II/final'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>GENERAL REMARKS</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px;">
                                            <?php if (count($pn_general_remarks_term2_final) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;width:40%">TERMINAL ASSESSMENT </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important;">
                                                        <?php $count = 0;
                                                        foreach ($pn_general_remarks_term2_final as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><?= $data['remarks'] ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;height:500px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;text-align:right;padding:40px"><strong>DIVISIONAL OFFICER</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:40px"><strong>CAPTAIN TRAINING</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILALE YET</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_general_remarks_term2_final">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="general_remarks_term3_mid">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/general_remarks_report/<?= $pn_data['oc_no'] ?>/Term-III/Mid'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>GENERAL REMARKS</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px;">
                                            <?php if (count($pn_general_remarks_term3_mid) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;width:40%">MID TERM ASSESSMENT </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important;">
                                                        <?php $count = 0;
                                                        foreach ($pn_general_remarks_term3_mid as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><?= $data['remarks'] ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;height:500px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:60px"><strong>DIVISIONAL OFFICER</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_general_remarks_term3_mid">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="general_remarks_term3_final">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/general_remarks_report/<?= $pn_data['oc_no'] ?>/Term-III/final'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>GENERAL REMARKS</strong></h4>
                                            </div>
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px;">
                                            <?php if (count($pn_general_remarks_term3_final) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;width:40%">TERMINAL ASSESSMENT </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important;">
                                                        <?php $count = 0;
                                                        foreach ($pn_general_remarks_term3_final as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="border-right:black 1px solid;text-align:center"><?= $data['remarks'] ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;height:500px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-right:1px solid black;text-align:right;padding:40px"><strong>DIVISIONAL OFFICER</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:40px"><strong>SENIOR DIVISIONAL OFFICER</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:40px"><strong>OFFICER INCHARGE</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;text-align:right;padding:40px"><strong>COMMANDANT</strong></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_general_remarks_term3_final">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="progress_chart_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/progress_chart_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> PRINT PAGE</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>PROGRESS CHART</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style="padding:20px;">
                                            <?php if (isset($pn_progress_chart)) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <th scope="" style="border-right:1px solid black;">S. NO </th>
                                                            <th scope="" style="border-right:1px solid black;">TERM </th>
                                                            <th scope="" style="border-right:1px solid black;">ACADEMIC </th>
                                                            <th scope="" style="border-right:1px solid black;">PERSONALITY TRAITS </th>
                                                            <th scope="" style="border-right:1px solid black;">AGGREGATE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important;">
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center">1</td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center">TERM-I</td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term1_academics'] ?></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term1_olqs'] ?></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term1_aggregate'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center">2</td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center">TERM-II</td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term2_academics'] ?></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term2_olqs'] ?></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term2_aggregate'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-right:black 1px solid;text-align:center">3</td>
                                                            <td scope="" style="border-right:black 1px solid;text-align:center">TERM-III</td>
                                                            <td scope="" style="border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term3_academics'] ?></td>
                                                            <td scope="" style="border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term3_olqs'] ?></td>
                                                            <td scope="" style="border-right:black 1px solid;text-align:center"><?= $pn_progress_chart['term3_aggregate'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILBLE YET. </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_progress_chart">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="distinction_achieved_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/distinction_achieved_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> PRINT PAGE</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF HONOURS & AWARDS ACHIEVED</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (count($pn_distinctions_records) > 0) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:30%">ACADEMIC</th>
                                                            <td scope="" style="width:30%">SPORTS</th>
                                                            <td scope="" style="border-right:1px solid black;width:30%">EXTRA CURRICULAR ACTIVITIES</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <?php $count = 0;
                                                        foreach ($pn_distinctions_records as $data) { ?>
                                                            <tr>
                                                                <td scope="" style="height:80px"><?= $data['academic']; ?></td>
                                                                <td scope=""><?= $data['sports']; ?></td>
                                                                <td scope="" style="border-right:1px solid black;"><?= $data['extra_curricular_activities']; ?></td>
                                                            </tr>
                                                        <?php
                                                            $count++;
                                                        } ?>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET.</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_distinction_achieved">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-custom3" style="display:none" id="seniority_record">
                        <?php if (isset($pn_data['name'])) { ?>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                                <a onclick="location.href='<?php echo base_url() ?>/CAO/seniority_record_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> PRINT PAGE</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="container my-3">
                                            <div style="text-align:center">
                                                <h4 style="text-decoration:underline"><strong>RECORD OF SENIORITY</strong></h4>
                                            </div>
                                        </div>

                                        <div id="table_div" style=" padding:20px !important">
                                            <?php if (isset($pn_seniority_records)) { ?>
                                                <table style="color:black; width:100% !important;">
                                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                                        <tr>
                                                            <td scope="" style="width:10%">TERM</th>
                                                            <td scope="" style="width:18%">MARKS OBTAINED</th>
                                                            <td scope="" style="width:18%">AGGREGATE PERCENTAGE</th>
                                                            <td scope="" style="width:18%">RELEGATED YES/NO</th>
                                                            <td scope="" style="width:18%">NO. OF SUBJECTS FAILED</th>
                                                            <td scope="" style="border-right:1px solid black;width:18%">SENIORITY GAINED/LOST</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                                        <tr>
                                                            <td scope="" style="height:40px">TERM-I</td>
                                                            <td scope=""><?= $pn_seniority_records['term1_marks']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term1_percentage']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term1_relegated']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term1_subjects_failed']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;"><?= $pn_seniority_records['term1_seniority']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:40px">TERM-II</td>
                                                            <td scope=""><?= $pn_seniority_records['term2_marks']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term2_percentage']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term2_relegated']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term2_subjects_failed']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;"><?= $pn_seniority_records['term2_seniority']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="height:40px">TERM-III</td>
                                                            <td scope=""><?= $pn_seniority_records['term3_marks']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term3_percentage']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term3_relegated']; ?></td>
                                                            <td scope=""><?= $pn_seniority_records['term3_subjects_failed']; ?></td>
                                                            <td scope="" style="border-right:1px solid black;"><?= $pn_seniority_records['term3_seniority']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <br><br>
                                                <h6 style="padding:5px; display:flex"><strong>NET PERCENTAGE AT PNS KARSAZ:</strong>
                                                    <p style="width: 270px;border-bottom: 1px solid;margin-left:50px;text-align: center;"><?= $pn_seniority_records['net_percentage']; ?></p>
                                                </h6>
                                                <h6 style="padding:5px; display:flex"><strong>SENIORITY GAINED:</strong>
                                                    <p style="width: 270px;border-bottom: 1px solid;margin-left:50px;text-align: center;"><?= $pn_seniority_records['seniority_gained']; ?></p>
                                                </h6>
                                                <h6 style="padding:5px; display:flex"><strong>SENIORITY LOST:</strong>
                                                    <p style="width: 270px;border-bottom: 1px solid;margin-left:50px;text-align: center;"><?= $pn_seniority_records['seniority_lost']; ?></p>
                                                </h6>
                                                <h6 style="padding:5px; display:flex"><strong>NET SENIORITY:</strong>
                                                    <p style="width: 270px;border-bottom: 1px solid;margin-left:50px;text-align: center;"><?= $pn_seniority_records['net_seniority']; ?></p>
                                                </h6>

                                                <table style="color:black; width:100% !important;border: none;padding:5px;column-gap: 40px;">
                                                    <thead>
                                                        <tr style="column-gap: 40px;">
                                                            <td scope="" style="border-left:none;width:30%;height:180px;padding: 20px;">
                                                                <div style="width:100%;border-bottom:1px black solid;height: 100%"></div>
                                                                </th>
                                                            <td scope="" style="border-left:none;width:30%;height:180px;padding: 20px;">
                                                                <div style="width:100%;border-bottom:1px black solid;height: 100%"></div>
                                                                </th>
                                                            <td scope="" style="border-left:none;width:30%;height:180px;padding: 20px;">
                                                                <div style="width:100%;border-bottom:1px black solid;height: 100%"></div>
                                                                </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_cont" style="text-align:center;;padding:5px">
                                                        <tr>
                                                            <td scope="" style="border-left:none">DIVISIONAL OFFICER</td>
                                                            <td scope="" style="border-left:none">SENIOR DIVISIONAL OFFICER</td>
                                                            <td scope="" style="border-left:none">OFFICER INCHARGE</td>
                                                            <td scope="" style="border-left:none">COMMANDANT</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } else { ?>
                                                <a> NO DATA AVAILABLE YET </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <form class="user" role="form" method="" id="" action="">
                            <div class="form-group row justify-content-center my-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_seniority_record">
                                        BACK
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <!-- <div class="card-body bg-custom3" style="display:none" id="branch_allocation_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/CAO/branch_allocation_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>ALLOCATION OF BRANCH/SPECIALISATION</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (isset($pn_branch_allocations)) { ?>
                                <table style="color:black; width:100% !important;">
                                    <tbody id="table_rows_cont" style="border:none; padding:5px;width:100% !important">
                                        <tr style="border:none">
                                            <td scope="" style="border:none;width:60%"><strong>OPTION OF CADET IN ORDER OF PREFERENCE</strong></td>
                                            <td scope="" style="border:none;width:40%">

                                                <table style="color:black; width:100% !important;border:none">

                                                    <tbody id="table_rows_inner" style="border:0.5px solid black; height:100px;width:100% !important;padding:40px">
                                                        <tr>
                                                            <td scope="" style="width:20%">1.</td>
                                                            <td scope="" style="width:80%"><?= $pn_branch_allocations['option1']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:0.5px solid black;"></td>
                                                            <td scope="" style="border-bottom:0.5px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="width:20%">2.</td>
                                                            <td scope="" style="width:80%"><?= $pn_branch_allocations['option2']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:0.5px solid black;"></td>
                                                            <td scope="" style="border-bottom:0.5px solid black;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="width:20%">3.</td>
                                                            <td scope="" style="width:80%"><?= $pn_branch_allocations['option3']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="" style="border-bottom:0.5px solid black;border-left:none;border-right:none"></td>
                                                            <td scope="" style="border-bottom:0.5px solid black;border-left:none;border-right:none"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td scope="" style="border:none;width:60%"></td>
                                            <td scope="" style="border: none;width: 40%;height: 200px;text-align: center;font-weight: bold;">SIGN OF THE CADET</td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td scope="" style="border:none;width:60%"><strong>BRANCH/SPECIALISATION RECOMMENDED</strong></td>
                                            <td scope="" style="border: none;width: 40%;">
                                                <table style="color:black; width:100% !important;border:none">

                                                    <tbody id="table_rows_inner2" style="border:0.5px solid black; height:50px;width:100% !important;padding:40px">
                                                        <tr>
                                                            <td scope="" style="width:100%"><?= $pn_branch_allocations['branch_recommended']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td scope="" style="border:none;width:60%"></td>
                                            <td scope="" style="border: none;width: 40%;height: 200px;text-align: center;font-weight: bold;">SIGN OF PRESIDENT CATEGORISATION BOARD</td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td scope="" style="border:none;width:50%"><strong>BRANCH/SPECIALISATION ALLOCATED BY NHQ</strong></td>
                                            <td scope="" style="border: none;width: 50%;">
                                                <table style="color:black; width:100% !important;border:none">

                                                    <tbody id="table_rows_inner2" style="border:0.5px solid black; height:50px;width:100% !important;padding:40px">
                                                        <tr>
                                                            <td scope="" style="width:100%"><?= $pn_branch_allocations['branch_allocated']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td scope="" style="border:none;width:60%"></td>
                                            <td scope="" style="border: none;width: 40%;height: 400px;text-align: center;font-weight: bold;">
                                                <p><strong>NAVAL HEADQUARTERS</strong></p>
                                                <p><strong>LETTER NO…………………………</strong></p>
                                                <p><strong>DATED………………………………</strong></p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_branch_allocation">
                        Back
                    </button>
                </div>
            </div>
        </form> -->

                    <!-- </div>  -->

                    <!-- </div>  -->

                </div>

            </div>

    </div>

</div>
</div>

<?php $this->load->view('common/footer'); ?>
<script>
    $('#search_btn').on('click', function() {
        var validate = 0;
        var oc_no = $('#oc_no').val();

        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }

        if (validate == 0) {
            $('#error_search').hide();

            $.ajax({
                url: '<?= base_url(); ?>CAO/search_cadet_for_dossier_folder',
                method: 'POST',
                data: {
                    'oc_no': oc_no
                },
                success: function(data) {
                    if (data != '0') {
                        var newDoc = document.open("text/html", "replace");
                        newDoc.write(data);
                        newDoc.close();
                        $('#cadet_dossier').show();
                    } else {
                        $('#no_data').show();
                        $('#cadet_dossier').hide();
                    }
                },
                async: true
            });

        } else {
            $('#error_search').show();
        }

    });

    function seen(data) {
        $.ajax({
            url: '<?= base_url(); ?>ChatController/seen',
            method: 'POST',
            data: {
                'id': data
            },
            success: function(data) {
                $('#notification').html(data);
            },
            async: true
        });
    }

    $('#notifications').focusout(function() {
        $.ajax({
            url: '<?= base_url(); ?>ChatController/activity_seen',
            success: function(data) {
                $('#notifications').html(data);
            },
            async: true
        });
    });

    $('#gen').on('click', function() {
        $('#cadet_dossier').hide();
        $('#gen_list').show();
        $('#back_btn').show();
        $('#back_btn_main').hide();
        $('#header_title').html('<h4>GENERAL</h4>');
    });

    $('#disp').on('click', function() {
        $('#cadet_dossier').hide();
        $('#disp_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>DISCIPLINE</h4>');
        $('#back_btn_main').hide();
    });

    $('#warn').on('click', function() {
        $('#cadet_dossier').hide();
        $('#warn_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>WARNING</h4>');
        $('#back_btn_main').hide();
    });

    $('#phy').on('click', function() {
        $('#cadet_dossier').hide();
        $('#phy_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>PHYSICAL EFFICIENCY</h4>');
        $('#back_btn_main').hide();
    });

    $('#acad').on('click', function() {
        $('#cadet_dossier').hide();
        $('#acad_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>ACADEMIC RECORDS</h4>');
        $('#back_btn_main').hide();
    });

    $('#olq').on('click', function() {
        $('#cadet_dossier').hide();
        $('#olq_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>OFFICER LIKE QUALITIES</h4>');
        $('#back_btn_main').hide();
    });

    $('#assess').on('click', function() {
        $('#cadet_dossier').hide();
        $('#assess_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>ASSESSMENT</h4>');
        $('#back_btn_main').hide();
    });

    $('#back_btn').on('click', function() {
        $('#cadet_dossier').show();
        $('#gen_list').hide();
        $('#phy_list').hide();
        $('#warn_list').hide();
        $('#acad_list').hide();
        $('#olq_list').hide();
        $('#disp_list').hide();
        $('#assess_list').hide();
        $('#general_remarks_list').hide();
        $('#back_btn').hide();
        $('#header_title').html('<h4>CONTENTS</h4>');
        $('#back_btn_main').show();
    });

    $('#btn_punish_term1').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#punish_term1').show();
        $('#punish_term2').hide();
        $('#punish_term3').hide();
        $('#back_btn_punish').show();
    });

    $('#btn_punish_term2').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#punish_term2').show();
        $('#punish_term1').hide();
        $('#punish_term3').hide();
        $('#back_btn_punish').show();
    });

    $('#btn_punish_term3').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#punish_term3').show();
        $('#punish_term1').hide();
        $('#punish_term2').hide();
        $('#back_btn_punish').show();
    });

    $('#btn_obs_term1').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#obs_term1').show();
        $('#obs_term2').hide();
        $('#obs_term3').hide();
        $('#back_btn_punish').show();
    });
    $('#btn_obs_term2').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#obs_term2').show();
        $('#obs_term1').hide();
        $('#obs_term3').hide();
        $('#back_btn_punish').show();
    });
    $('#btn_obs_term3').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#obs_term3').show();
        $('#obs_term1').hide();
        $('#obs_term2').hide();
        $('#back_btn_punish').show();
    });

    $('#back_btn_punish_term1, #back_btn_punish_term2, #back_btn_punish_term3').on('click', function() {
        $('#main-container').show();
        $('#punish_term1').hide();
        $('#punish_term2').hide();
        $('#punish_term3').hide();
        $('#terms_list_punish').hide();
        $('#terms_list_obs').hide();
    });

    $('#back_btn_obs_term1, #back_btn_obs_term2, #back_btn_obs_term3, #back_btn_warning, #back_btn_inspection, #back_btn_medical, #back_btn_saluting_swimming, #back_btn_physical_efficiency, #back_btn_olq_term1, #back_btn_olq_term2, #back_btn_olq_term3, #back_btn_personal_record, #back_btn_divisional_officer, #back_btn_autobiography, #back_btn_psychologhy, #back_btn_general_remarks_term1_mid, #back_btn_general_remarks_term1_final, #back_btn_general_remarks_term2_mid, #back_btn_general_remarks_term2_final, #back_btn_general_remarks_term3_mid, #back_btn_general_remarks_term3_final, #back_btn_distinction_achieved, #back_btn_progress_chart, #back_btn_seniority_record, #back_btn_branch_allocation, #back_btn_warning_insert, #back_btn_result_t1, #back_btn_result_t2, #back_btn_result_t3, #back_btn_sea_training').on('click', function() {
        $('#main-container').show();
        $('#obs_term1').hide();
        $('#obs_term2').hide();
        $('#obs_term3').hide();
        $('#terms_list_punish').hide();
        $('#terms_list_obs').hide();
        $('#warning_record').hide();
        $('#inspection_record').hide();
        $('#medical_record').hide();
        $('#saluting_swimming_record').hide();
        $('#officer_qualities_record_term1').hide();
        $('#officer_qualities_record_term2').hide();
        $('#officer_qualities_record_term3').hide();
        $('#personal_data_record').hide();
        $('#divisional_officer_record').hide();
        $('#autobiography_record').hide();
        $('#psychology_record').hide();
        $('#general_remarks_term1_mid').hide();
        $('#general_remarks_term1_final').hide();
        $('#general_remarks_term2_mid').hide();
        $('#general_remarks_term2_final').hide();
        $('#general_remarks_term3_mid').hide();
        $('#general_remarks_term3_final').hide();
        $('#general_remarks_mid_final_term1').hide();
        $('#general_remarks_mid_final_term2').hide();
        $('#general_remarks_mid_final_term3').hide();
        $('#distinction_achieved_record').hide();
        $('#progress_chart_record').hide();
        $('#seniority_record').hide();
        $('#branch_allocation_record').hide();
        $('#physical_efficiency_record').hide();
        $('#warning_record_insert').hide();
        $('#result_record_t1').hide();
        $('#result_record_t2').hide();
        $('#result_record_t3').hide();
        $('#sea_training_record').hide();

    });

    $('#obs_record').on('click', function() {
        $('#terms_list_punish').hide();
        $('#terms_list_obs').show();
    });

    $('#punish_record').on('click', function() {
        $('#terms_list_obs').hide();
        $('#terms_list_punish').show();
    });
    $('#btn_olq_record').on('click', function() {
        $('#terms_olq_record').show();
    });

    $('#btn_warning').on('click', function() {
        $('#warning_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_inspection_record').on('click', function() {
        $('#inspection_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_medical_record').on('click', function() {
        $('#medical_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_saluting_swimming_record').on('click', function() {
        $('#saluting_swimming_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_physical_record').on('click', function() {
        $('#physical_efficiency_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_olq_term1').on('click', function() {
        $('#officer_qualities_record_term1').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_olq_term2').on('click', function() {
        $('#officer_qualities_record_term2').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_olq_term3').on('click', function() {
        $('#officer_qualities_record_term3').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_personal_record').on('click', function() {
        $('#personal_data_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_divisional_officer_record').on('click', function() {
        $('#divisional_officer_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_autobiography').on('click', function() {
        $('#autobiography_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_psychology').on('click', function() {
        $('#psychology_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });


    $('#btn_general_remarks').on('click', function() {
        $('#general_remarks_list').show();
        $('#assess_list').hide();
    });

    $('#btn_general_remarks_term1').on('click', function() {
        $('#general_remarks_mid_final_term1').show();
        $('#general_remarks_mid_final_term2').hide();
        $('#general_remarks_mid_final_term3').hide();
        $('#assess_list').hide();
    });

    $('#btn_general_remarks_term2').on('click', function() {
        $('#general_remarks_mid_final_term2').show();
        $('#general_remarks_mid_final_term1').hide();
        $('#general_remarks_mid_final_term3').hide();
        $('#assess_list').hide();
    });
    $('#btn_general_remarks_term3').on('click', function() {
        $('#general_remarks_mid_final_term3').show();
        $('#general_remarks_mid_final_term1').hide();
        $('#general_remarks_mid_final_term2').hide();
        $('#assess_list').hide();
    });

    $('#btn_general_remarks_term1_mid').on('click', function() {
        $('#general_remarks_term1_mid').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_general_remarks_term1_final').on('click', function() {
        $('#general_remarks_term1_final').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });
    $('#btn_general_remarks_term2_mid').on('click', function() {
        $('#general_remarks_term2_mid').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_general_remarks_term2_final').on('click', function() {
        $('#general_remarks_term2_final').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });
    $('#btn_general_remarks_term3_mid').on('click', function() {
        $('#general_remarks_term3_mid').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_general_remarks_term3_final').on('click', function() {
        $('#general_remarks_term3_final').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_progress_chart').on('click', function() {
        $('#progress_chart_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_distinction_achieved').on('click', function() {
        $('#distinction_achieved_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_seniority_record').on('click', function() {
        $('#seniority_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_branch_allocation').on('click', function() {
        $('#branch_allocation_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_warning_attach').on('click', function() {
        $('#warning_record_insert').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_result_t1').on('click', function() {
        $('#result_record_t1').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_result_t2').on('click', function() {
        $('#result_record_t2').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_result_t3').on('click', function() {
        $('#result_record_t3').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });
    $('#btn_sea_training_report').on('click', function() {
        $('#sea_training_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#back_btn_main').on('click', function() {
        var oc_no = '0';
        $.ajax({
            url: '<?= base_url(); ?>CAO/search_cadet_for_dossier_folder',
            method: 'POST',
            data: {
                'oc_no': oc_no,
                'back_press': 'Yes'
            },
            success: function(data) {
                if (data != '0') {
                    var newDoc = document.open("text/html", "replace");
                    newDoc.write(data);
                    newDoc.close();
                } else {
                    $('#no_data').show();
                    $('#cadet_dossier').hide();
                }
            },
            async: true
        });
    });
</script>