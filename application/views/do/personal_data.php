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
<style>
    .red-border {
        border: 1px solid red !important;
    }

    .custom_heading {
        font-size: small;
    }

    .custom_textbox {
        font-size: small !important;
        padding: 18px !important;
    }

    ​ .modal {
        display: none;
        position: fixed;
        padding-top: 100px;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: auto;
        z-index: 9999;
    }
</style>

<div class="container-fluid my-2">
    <!-- Page Heading -->
    <div class="card-body" style="padding:10px">
        <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
        <div class="card-body" style="margin-bottom:20px;float:right; padding:30px; margin-right:450px">
            <h1 style="text-align:center"><strong>PERSONAL INFORMATION</strong></h1>
        </div>
    </div>

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">PERSONAL INFORMATION</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="add_form" enctype="multipart/form-data" action="<?= base_url(); ?>D_O/add_personal_record">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#step1" role="tab" aria-controls="nav-home" aria-selected="true" style="width:300px;">Part 1</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#step2" role="tab" aria-controls="nav-profile" aria-selected="false" style="width:300px;">Part 2</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#step3" role="tab" aria-controls="nav-contact" aria-selected="false" style="width:300px;">Part 3</a>

                                </div>
                            </nav>

                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h2 style="text-align:center; margin-top:15px">PART I</h2>
                                    <hr>
                                    <div class="form-group row my-2">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;UT's NAME:</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>&nbsp;RANK/RATE:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="NAME">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control " name="rank_rate" id="rank_rate" data-placeholder="Select Rank" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">Select Rank</option>
                                                <option class="form-control form-control-user" value="sublietenant">Sub-Lieutenant</option>
                                                <option class="form-control form-control-user" value="midshipman">Midshipman</option>
                                                <option class="form-control form-control-user" value="ut">UT Officer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;UPLOAD PICTURE:</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>&nbsp;CNIC:</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>&nbsp;UPLOAD CNIC (SCANNED COPY):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row custom-file-upload">
                                        <div class="col-sm-6 mb-1">
                                            <input type="file" id="upload_pic" style="height: 50px; padding:10px !important;" multiple="multiple" class="form-control form-control-user" placeholder="UPLOAD DOCUMNENT" name="report[]" x-model="fileName">
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" class="form-control form-control-user" data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" name="cnic" required="">
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="file" id="cnic_scan" style="height: 50px; padding:10px !important;" class="form-control form-control-user" placeholder="SCAN CNIC" name="cnic_scan" x-model="fileName">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;O NO:</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;BRANCH:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="oc_no" id="oc_no" placeholder="O NO.">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control" name="course" id="course" data-placeholder="Select Branch" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">Select Branch</option>
                                                <?php foreach ($branches as $data) { ?>
                                                    <option class="form-control form-control-user" value="<?= $data['id']; ?>"><?= $data['branch_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;PJO.NO:</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>&nbsp;COURSE:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="pno" id="pno" placeholder="PJO.NO.">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control" name="class" id="class" data-placeholder="Select Branch" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">Select Course</option>
                                                <?php foreach ($courses as $data) { ?>
                                                    <option class="form-control form-control-user" value="<?= $data['id']; ?>"><?= $data['course_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;BATCH NO:</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>&nbsp;CATEGORY:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="row col-sm-3 mx-1">
                                            <div class="col-sm-6 my-3">
                                                <h6>BATCH YEAR:</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="yearPicker" id="yearPicker" placeholder="BATCH YEAR">
                                            </div>
                                        </div>
                                        <div class=" row col-sm-3">
                                            <input type="text" class="form-control form-control-user" name="batch_no" id="batch_no" onkeydown="return /[a-z]/i.test(event.key)" placeholder="BATCH NO">
                                        </div>

                                        <div class="col-sm-6 mb-1 mx-2">
                                            <select class="form-control" name="category" id="category" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT CATEGORY</option>
                                                <option class="form-control form-control-user" value="PN-Cadet">DAE</option>
                                                <option class="form-control form-control-user" value="SSC Cadet">DAE DIRECT</option>
                                                <option class="form-control form-control-user" value="Allied Cadet">PROFESSIONAL COUSRSE</option>
                                            </select>
                                        </div>


                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;CLASS NAME:</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>&nbsp;TERM:</h6>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control " name="div" id="div" data-placeholder="Select ship" style="font-size: 0.8rem; height:50px;" readonly>
                                                <?php foreach ($divisions as $data) { ?>
                                                    <option class="form-control form-control-user" value="<?= $data['division_name'] ?>"><?= $data['division_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control " name="term" id="term" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">Select Term</option>
                                                <option class="form-control form-control-user" value="Term-I">Term-I</option>
                                                <option class="form-control form-control-user" value="Term-II">Term-II</option>
                                                <option class="form-control form-control-user" value="Term-III">Term-III</option>
                                                <option class="form-control form-control-user" value="Term-IV">Term-IV</option>
                                                <option class="form-control form-control-user" value="Term-V">Term-V</option>
                                                <option class="form-control form-control-user" value="Term-VI">Term-VI</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="country_text" style="display:none">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;COUNTRY:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="country_val" style="display:none">
                                        <div class="col-sm-12 mb-1">
                                            <input type="text" class="form-control form-control-user" name="country" id="country" value="PAKISTAN">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;RELIGION:</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;EMERGENCY CONTACT:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="religion" id="religion" placeholder="RELIGION">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="e_contact" id="e_contact" placeholder="EMERGENCY CONTACT">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <h6>&nbsp;LANDLINE NO:</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>&nbsp;MOBILE NO:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;MOBILE MAKE:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;MOBILE MODEL:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;MOBILE IMEI:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" class="form-control form-control-user" name="telephone" id="telephone" placeholder="TELEPHONE">
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mobile_no" id="mobile_no" placeholder="MOBILE">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mobile_make" id="mobile_make" placeholder="MAKE">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mobile_model" id="mobile_model" placeholder="MODEL">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mobile_imei" id="mobile_imei" placeholder="IEMI">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;EX ARMY/NAVY/PAF:</h6>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <input type="text" class="form-control form-control-user" name="army" id="army" placeholder="EX-FORCES">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <h6>&nbsp;FATHER's NAME:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;FATHER's CNIC:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;FATHER'S OCCUPATION:</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>&nbsp;FATHER's PERMANENT ADDRESS:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;FATHER's STATUS:</h6>
                                        </div>

                                    </div>

                                    <div class="form-group row" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" class="form-control form-control-user" name="father_name" id="father_name" placeholder="FATHER'S NAME">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" class="form-control form-control-user" name="father_cnic" id="father_cnic" placeholder="FATHER'S CNIC">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" class="form-control form-control-user" name="occupation" id="occupation" placeholder="FATHER'S OCCUPATION">
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" class="form-control form-control-user" name="father_permanent_address" id="father_permanent_address" placeholder="FATHER'S ADDRESS">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <select class="form-control " name="father_status" id="father_status" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT STATUS</option>
                                                <option class="form-control form-control-user" value="alive">ALIVE</option>
                                                <option class="form-control form-control-user" value="deceased">DECEASED</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <h6>&nbsp;MOTHER's NAME:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;MOTHERS's CNIC:</h6>
                                        </div>
                                        <div class="col-sm-5">
                                            <h6>&nbsp;MOTHERS's PERMANENT ADDRESS:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;MOTHERS's STATUS:</h6>
                                        </div>

                                    </div>

                                    <div class="form-group row" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mother_name" id="mother_name" placeholder="MOTHERS'S NAME">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mother_cnic" id="mother_cnic" placeholder="MOTHERS'S CNIC">
                                        </div>
                                        <div class="col-sm-5 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mother_permanent_address" id="mother_permanent_address" placeholder="MOTHERS'S ADDRESS">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <select class="form-control " name="mother_status" id="mother_status" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT STATUS</option>
                                                <option class="form-control form-control-user" value="alive">ALIVE</option>
                                                <option class="form-control form-control-user" value="deceased">DECEASED</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;NEXT OF KIN (DETAILS):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="next_of_kin_name" id="next_of_kin_name" placeholder="NAME"></textarea>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="next_of_kin_cnic" id="next_of_kin_cnic" placeholder="CNIC"></textarea>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="next_of_kin_relation" id="next_of_kin_relation" placeholder="RELATION"></textarea>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="next_of_kin_contact_no" id="next_of_kin_contact_no" placeholder="CONTACT NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="next_of_kin_address" id="next_of_kin_address" placeholder="ADDRESS"></textarea>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <h6>&nbsp;NAME OF WIFE:</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>&nbsp;DATE OF MARRIGE/DIVORCE:</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>&nbsp;WIFE'S CNIC:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-4 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="wife_name" id="wife_name" placeholder="WIFE NAME">
                                        </div>
                                        <div class="col-sm-4 mb-1">
                                            <input type="date" style="border-radius:10px" class="form-control form-control-user" name="date_of_marriage" id="date_of_marriage" placeholder="CNIC">
                                        </div>
                                        <div class="col-sm-4 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="wife_cnic" id="wife_cnic " placeholder="WIFE CNIC">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10" style="text-decoration:underline">
                                            <strong>DETAILS OF CHILDERN</strong>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" id="btn_child_row" class="btn btn-primary btn-user btn-block"><i class="fas fa-plus"></i> ADD ROW</button>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">
                                            <h6>&nbsp;S NO.</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;NAME:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6>&nbsp;GENDER:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;DOB:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;PROFESSION:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;ADDRESS:</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>&nbsp;AFFILIATION:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="child_details" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-1 mb-1">
                                            <input type="number" style="border-radius:10px" class="form-control form-control-user" name="child_sno" id="child_sno" placeholder="S. NO." value=1 readonly>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_name1" id="child_name1" placeholder="CHILD NAME">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <select class="form-control " name="child_gender1" id="child_gender1" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT GENDER</option>
                                                <option class="form-control form-control-user" value="male">MALE</option>
                                                <option class="form-control form-control-user" value="female">FEMALE</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="date" style="border-radius:10px" class="form-control form-control-user" name="child_dob1" id="child_dob1" placeholder="CHILD GENDER">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_profession1" id="child_profession1" placeholder="CHILD PROFESSION">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_address1" id="child_address1" placeholder="CHILD ADDRESS">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_affiliation1" id="child_affiliation1" placeholder="CHILD AFFILIATION">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10" style="text-decoration:underline">
                                            <strong>DETAILS OF SIBLINGS</strong>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" id="btn_sibling_row" class="btn btn-primary btn-user btn-block"><i class="fas fa-plus"></i> ADD ROW</button>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;S NO.</h6>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6 class="custom_heading">&nbsp;NAME:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;GENDER:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;NATIONALITY:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;RELIGION:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;SECT:</h6>
                                        </div> 
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;AGE:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;DEPENDENT:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;ADDRESS:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;CONTACT NO:</h6>
                                        </div>
                                        <div class="col-sm-1">
                                            <h6 class="custom_heading">&nbsp;AFFILIATION:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="sibling_details" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-1 mb-1">
                                            <input type="number" class="form-control form-control-user custom_textbox" name="sibling_sno" id="sibling_sno" placeholder="S. NO." value=1 readonly>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_name1" id="sibling_name1" placeholder="NAME">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <select class="form-control " name="sibling_gender1" id="sibling_gender1" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:38px;">
                                                <option class="form-control form-control-user" value="">SELECT GENDER</option>
                                                <option class="form-control form-control-user" value="male">MALE</option>
                                                <option class="form-control form-control-user" value="female">FEMALE</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_nationality1" id="sibling_nationality1" placeholder="NATIONALITY">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_religion1" id="sibling_religion1" placeholder="RELIGION">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_sect1" id="sibling_sect1" placeholder="SECT">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_age1" id="sibling_age1" placeholder="AGE">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <select class="form-control " name="sibling_dependant1" id="sibling_dependant1" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:38px;">
                                                <option class="form-control form-control-user" value="">SELECT</option>
                                                <option class="form-control form-control-user" value="yes">YES</option>
                                                <option class="form-control form-control-user" value="no">NO</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_address1" id="sibling_address1" placeholder="ADDRESS">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_contact1" id="sibling_contact1" placeholder="CONTACT">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_affiliation1" id="sibling_affiliation1" placeholder="AFFILIATION">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;RELATIVES IN DEFENCE SERVICES (PARENTS/BROTHERS/SISTERS/REAL UNCLES):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="border:solid 1px lightgrey; padding:5px; border-radius:5px;">
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="relative_pno" id="relative_pno" placeholder="NAME"></input>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="relative_rank" id="relative_rank" placeholder="RANK"></input>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="relative_relationship" id="relative_relationship" placeholder="RELATION"></input>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="relative_unit" id="relative_unit" placeholder="UNIT"></input>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="relative_address" id="relative_address" placeholder="ADDRESS"></input>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="relative_contact" id="relative_contact" placeholder="CONTACT"></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;IDENTIFICATION MARK:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <input type="text" class="form-control form-control-user" name="mark" id="mark" placeholder="IDENTIFICATION MARK">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;HEIGHT :</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;WEIGHT :</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="height" id="height" placeholder="HEIGHT">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="weight" id="weight" placeholder="WEIGHT">
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h2 style="text-align:center; margin-top:15px;margin-bottom:10px">PART II</h2>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;DATE OF JOINING NAVY:</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;DATE OF JOINING PNS KARSAZ:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="date" class="form-control form-control-user" name="joining_date" id="joining_date" placeholder="JOINING DATE">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <input type="date" class="form-control form-control-user" name="joining_date" id="joining_date" placeholder="DATE OF JOINING">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;SERVICE IDENTITY CARD NO:</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;COVID-19 VACCINATION:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="service_no" id="service_no" placeholder="SERVICE NO">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control " name="vaccination" id="vaccination" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT ONE</option>
                                                <option class="form-control form-control-user" value="yes">YES</option>
                                                <option class="form-control form-control-user" value="no">NO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;BLOOD GROUP:</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>&nbsp;MEMBERSHIP (IF ANY):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control " name="blood" id="blood" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT BLOOD GROUP</option>
                                                <option class="form-control form-control-user" value="A+">A+</option>
                                                <option class="form-control form-control-user" value="A-">A-</option>
                                                <option class="form-control form-control-user" value="B+">B+</option>
                                                <option class="form-control form-control-user" value="B-">B-</option>
                                                <option class="form-control form-control-user" value="O+">O+</option>
                                                <option class="form-control form-control-user" value="O-">O-</option>
                                                <option class="form-control form-control-user" value="AB+">AB+</option>
                                                <option class="form-control form-control-user" value="AB-">AB-</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <!-- <input type="text" class="form-control form-control-user" name="blood" id="blood" placeholder="BLOOD GROUP"> -->
                                            <select class="form-control " name="membership" id="membership" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT MEMBERSHIP</option>
                                                <option class="form-control form-control-user" value="Housing">HOUSING SCHEME</option>
                                                <option class="form-control form-control-user" value="Insurance">INSURANCE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;PERMANENT ADDRESS:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_house_no" id="permanent_house_no" placeholder="HOUSE NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_block_no" id="permanent_block_no" placeholder="BLOCK NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_street_no" id="permanent_street_no" placeholder="STREET NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_tehsil" id="permanent_tehsil" placeholder="TEHSIL"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_district" id="permanent_district" placeholder="DISTRICT"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_city" id="permanent_city" placeholder="CITY"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_police_station" id="permanent_police_station" placeholder="POLICE STATION"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="permanent_province" id="permanent_province" placeholder="PROVINCE"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;CURRENT ADDRESS:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_house_no" id="current_house_no" placeholder="HOUSE NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_block_no" id="current_block_no" placeholder="BLOCK NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_street_no" id="current_street_no" placeholder="STREET NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_tehsil" id="current_tehsil" placeholder="TEHSIL"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_district" id="current_district" placeholder="DISTRICT"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_city" id="current_city" placeholder="CITY"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_police_station" id="current_police_station" placeholder="POLICE STATION"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="current_province" id="current_province" placeholder="PROVINCE"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;ADDRESS OF KARACHI (IF ANY):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="border:solid lightgrey 1px;border-radius:5px; padding:3px">
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_house_no" id="karachi_house_no" placeholder="HOUSE NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_block_no" id="karachi_block_no" placeholder="BLOCK NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_street_no" id="karachi_street_no" placeholder="STREET NO"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_tehsil" id="karachi_tehsil" placeholder="TEHSIL"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_district" id="karachi_district" placeholder="DISTRICT"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_city" id="karachi_city" placeholder="CITY"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_police_station" id="karachi_police_station" placeholder="POLICE STATION"></textarea>
                                        </div>
                                        <div class="col-sm-3 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="karachi_province" id="karachi_province" placeholder="PROVINCE"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;LIVING STATUS:</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>&nbsp;MARITIAL STATUS:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control " name="living_status" id="living_status" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT LIVING STATUS</option>
                                                <option class="form-control form-control-user" value="in-living">IN LIVING</option>
                                                <option class="form-control form-control-user" value="out-living">OUT LIVING</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <select class="form-control " name="living_status" id="living_status" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT MARITIAL STATUS</option>
                                                <option class="form-control form-control-user" value="married">MARRIED</option>
                                                <option class="form-control form-control-user" value="single">SINGLE</option>
                                                <option class="form-control form-control-user" value="divorsed">DIVORSED</option>
                                            </select>
                                        </div>
                                    </div>




                                </div>



                                <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h2 style="text-align:center; margin-top:15px;margin-bottom:10px">PART III</h2>
                                    <h4>EDUCATIONAL QUALIFICATIONS</h4>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <h6>&nbsp;MATRIC SCHOOL:</h6>
                                        </div>

                                        <div class="col-sm-4">
                                            <h6>&nbsp;BOARD OF EDUCATION</h6>
                                        </div>

                                        <div class="col-sm-4">
                                            <h6>&nbsp;MARKS (%)</h6>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-1">
                                            <input type="text" class="form-control form-control-user" name="matric" id="matric" placeholder="MATRIC SCHOOL">
                                        </div>
                                        <div class="col-sm-4 mb-1">
                                            <input type="text" class="form-control form-control-user" name="matric_board_of_edu" id="matric_board_of_edu" placeholder="MATRIC BOARD OF EDUCATION">
                                        </div>
                                        <div class="col-sm-4 mb-1">
                                            <input type="number" step="0.01" class="form-control form-control-user" name="grade_matric" id="grade_matric" placeholder="MATRIC GRADE">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <h6>&nbsp;INTERMEDIATE COLLEGE</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>&nbsp;BOARD OF EDUCATION</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>&nbsp;MARKS (%):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-1">
                                            <input type="text" class="form-control form-control-user" name="college" id="college" placeholder="INTERMEDIATE COLLGE">
                                        </div>
                                        <div class="col-sm-4 mb-1">
                                            <input type="text" class="form-control form-control-user" name="inter_board_of_edu" id="inter_board_of_edu" placeholder="INTER BOARD OF EDUCATION">
                                        </div>
                                        <div class="col-sm-4 mb-1">
                                            <input type="number" step="0.01" class="form-control form-control-user" name="grade_intermediate" id="grade_intermediate" placeholder="INTERMEDIATE GRADE">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;DIPLOMA (IF ANY):</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>&nbsp;PROFESSIONAL COURSES:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="diploma" id="diploma" placeholder="DIPLOMA">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="professional_courses" id="professional_courses" placeholder="PROFESSIONAL COURSES">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;OTHERS:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <input type="text" class="form-control form-control-user" name="other" id="other" placeholder="ANY OTHER">
                                        </div>
                                    </div>

                                    <div class="form-group row justify-content-center">
                                        <div class="col-sm-4">
                                            <button type="button" class="btn btn-primary btn-user btn-block" id="add_btn">
                                                <!-- <i class="fab fa-google fa-fw"></i>  -->
                                                SUBMIT
                                            </button>
                                            <span id="show_error_new" style="font-size:12px; color:red; display:none">&nbsp;&nbsp;FILL IN THE REQUIRED FIELDS*</span>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script type="text/javascript">
    function seen(data) {
        // alert('in');
        // alert(data);
        // var receiver_id=$(this).attr('id');
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
        // alert('notification clicked');
        $.ajax({
            url: '<?= base_url(); ?>ChatController/activity_seen',
            success: function(data) {
                $('#notifications').html(data);
            },
            async: true
        });
    });

    $(function() {
        $("#category").change(function() {
            var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
            if (selectedValue == 'Allied Cadet') {
                $('#country_text').show();
                $('#country_val').show();
            } else {
                $('#country_text').hide();
                $('#country_val').hide();
            }
        });
    });

    $('#btn_child_row').on('click', function() {

        var counter = $('#child_sno').val();
        var len = document.getElementById('child_details').childNodes.length;
        len_counter = parseInt(len / 14);
        $('#child_details').append(` <div class="col-sm-1 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_sno${len_counter}" id="child_sno${len_counter}" value=${++len_counter} placeholder="S. NO." readonly>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_name${len_counter}" id="child_name${len_counter}" placeholder="CHILD NAME">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <select class="form-control " name="child_gender${len_counter}" id="child_gender${len_counter}" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                                <option class="form-control form-control-user" value="">SELECT GENDER</option>
                                                <option class="form-control form-control-user" value="male">MALE</option>
                                                <option class="form-control form-control-user" value="female">FEMALE</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="date" style="border-radius:10px" class="form-control form-control-user" name="child_dob${len_counter}" id="child_dob${len_counter}" placeholder="CHILD GENDER">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_profession${len_counter}" id="child_profession${len_counter}" placeholder="CHILD PROFESSION">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_address${len_counter}" id="child_address${len_counter}" placeholder="CHILD ADDRESS">
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="child_affiliation${len_counter}" id="child_affiliation${len_counter}" placeholder="CHILD AFFILIATION">
                                        </div>`);

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "no_of_childs");
        input.setAttribute("value", len_counter);
        //append to form element that you want .
        document.getElementById("add_form").appendChild(input);
    });


    $('#btn_sibling_row').on('click', function() {

        var counter = $('#sibling_sno').val();
        var len = document.getElementById('sibling_details').childNodes.length;
        // alert(len);
        len_counter = parseInt(len - 21);
        $('#sibling_details').append(`<div class="form-group row" id="sibling_details">
                                        <div class="col-sm-1 mb-1">
                                            <input type="number" style="margin-left:10px !important;" class="form-control form-control-user custom_textbox" name="sibling_sno" id="sibling_sno" placeholder="S. NO." value=${len_counter} readonly>
                                        </div>
                                        <div class="col-sm-2 mb-1">
                                            <input type="text"   style="margin-left:8px !important;" class="form-control form-control-user custom_textbox" name="sibling_name${len_counter}" id="sibling_name${len_counter}" placeholder="NAME">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <select class="form-control " name="sibling_gender${len_counter}" id="sibling_gender${len_counter}" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:38px; margin-left:10px">
                                                <option class="form-control form-control-user" value="">SELECT GENDER</option>
                                                <option class="form-control form-control-user" value="male">MALE</option>
                                                <option class="form-control form-control-user" value="female">FEMALE</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" style="margin-left:5px !important;" class="form-control form-control-user custom_textbox" name="sibling_nationality${len_counter}" id="sibling_nationality${len_counter}" placeholder="NATIONALITY">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" style="margin-left:2px !important;" class="form-control form-control-user custom_textbox" name="sibling_religion${len_counter}" id="sibling_religion${len_counter}" placeholder="RELIGION">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_sect${len_counter}" id="sibling_sect${len_counter}" placeholder="SECT">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" class="form-control form-control-user custom_textbox" name="sibling_age${len_counter}" id="sibling_age${len_counter}" placeholder="AGE">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <select class="form-control" name="sibling_dependant${len_counter}" id="sibling_dependant${len_counter}" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:38px; margin-left:-2px !important">
                                                <option class="form-control form-control-user" value="">SELECT</option>
                                                <option class="form-control form-control-user" value="yes">YES</option>
                                                <option class="form-control form-control-user" value="no">NO</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" style="margin-left:-6px !important" class="form-control form-control-user custom_textbox" name="sibling_address${len_counter}" id="sibling_address${len_counter}" placeholder="ADDRESS">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" style="margin-left:-7px !important" class="form-control form-control-user custom_textbox" name="sibling_contact${len_counter}" id="sibling_contact${len_counter}" placeholder="CONTACT">
                                        </div>
                                        <div class="col-sm-1 mb-1">
                                            <input type="text" style="margin-left:-10px !important" class="form-control form-control-user custom_textbox" name="sibling_affiliation${len_counter}" id="sibling_affiliation${len_counter}" placeholder="AFFILIATION">
                                        </div>

                                    </div>`);

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "no_of_siblings");
        input.setAttribute("value", len_counter);
        //append to form element that you want .
        document.getElementById("add_form").appendChild(input);
    });


    $('#add_btn').on('click', function() {
        //alert('javascript working');
        $('#add_btn').attr('disabled', true);
        var validate = 0;

        var officer_name = $('#officer_name').val();
        var pno = $('#pno').val();
        var course = $('#course').val();
        var e_contact = $('#e_contact').val();
        var father_name = $('#father_name').val();
        var religion = $('#religion').val();
        var oc_no = $('#oc_no').val();
        var name = $('#name').val();
        var class_ = $('#class').val();
        var batch_no = $('#batch_no').val();
        var category = $('#category').val();
        var div_name = $('#div').val();
        var term = $('#term').val();


        if (officer_name == '') {
            validate = 1;
            $('#officer_name').addClass('red-border');
        }
        // if (pno == '') {
        //     validate = 1;
        //     $('#pno').addClass('red-border');
        // }
        if (course == '') {
            validate = 1;
            $('#course').addClass('red-border');
        }
        if (e_contact == '') {
            validate = 1;
            $('#e_contact').addClass('red-border');
        }
        if (father_name == '') {
            validate = 1;
            $('#father_name').addClass('red-border');
        }
        if (religion == '') {
            validate = 1;
            $('#religion').addClass('red-border');
        }

        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }

        if (name == '') {
            validate = 1;
            $('#name').addClass('red-border');
        }
        if (class_ == '') {
            validate = 1;
            $('#class').addClass('red-border');
        }

        if (batch_no == '') {
            validate = 1;
            $('#batch_no').addClass('red-border');
        }
        if (category == '') {
            validate = 1;
            $('#category').addClass('red-border');
        }
        if (term == '') {
            validate = 1;
            $('#term').addClass('red-border');
        }

        if (document.getElementById("upload_pic").value == "") {
            validate = 1;
            $('#upload_pic').addClass('red-border');
        }

        if (validate == 0) {
            $('#add_form')[0].submit();
            $('#show_error_new').hide();
        } else {
            $('#add_btn').removeAttr('disabled');
            $('#show_error_new').show();
        }
    });

    $(document).ready(function() {
        $("#yearPicker").datepicker({
            dateFormat: 'yy'
        });
    });
    $(".yearPicker").focus(function() {
        $(".ui-datepicker-month").hide();
    });

    $(":input").inputmask();
</script>