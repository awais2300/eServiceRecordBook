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

    /* .ui-datepicker-calendar {
        display: none;
    } */

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
        <div class="card-body" style="margin-bottom:20px;float:right; padding:30px; margin-right:300px">
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
                                    </div>

                                    <div class="form-group row custom-file-upload">
                                        <div class="col-sm-12 mb-1">
                                            <input type="file" id="upload_pic" style="height: 50px; padding:10px !important;" multiple="multiple" class="form-control form-control-user" placeholder="UPLOAD DOCUMNENT" name="report[]" x-model="fileName">
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
                                        <div class="col-sm-6">
                                            <h6>&nbsp;FATHER's NAME:</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;FATHER'S OCCUPATION:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="father_name" id="father_name" placeholder="FATHER'S NAME">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="occupation" id="occupation" placeholder="FATHER'S OCCUPATION">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;NEXT OF KIN & ADDRESS:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <input type="text" class="form-control form-control-user" name="next_of_kin" id="next_of_kin" placeholder="NEXT OF KIN & ADDRESS">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;DETAILS OF FAMILY:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <textarea type="text" style="border-radius:10px" class="form-control form-control-user" name="family_detail" id="family_detail" placeholder="DATE OF MARRIAGE/NAME OF WIFE/CNIC NO/CHILDREN(NAME/GENDER/DOB/AGE)"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;NAMES OF BROTHERS AND SISTERS:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <textarea type="text" style="border-radius:10px" class="form-control form-control-user" name="siblings" id="siblings" placeholder="SIBLING NAME/CNIC/OCCUPATIPN/DOB"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;RELATIVES IN DEFENCE SERVICES (PARENTS/BROTHERS/SISTERS/REAL UNCLES):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="border:solid 1px lightgrey; padding:5px; border-radius:5px;" >
                                        <div class="col-sm-2 mb-1">
                                            <input type="text" style="border-radius:10px" class="form-control form-control-user" name="relative_pno" id="relative_pno" placeholder="S NO"></input>
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
                                            <h6>&nbsp;CNIC:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="service_no" id="service_no" placeholder="SERVICE NO">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <!-- <input type="text" class="form-control form-control-user" name="cnic" id="cnic" placeholder="CNIC"> -->
                                            <input type="text"  class="form-control form-control-user" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" >

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;BLOOD GROUP:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="blood" id="blood" placeholder="BLOOD GROUP">
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
                                </div>

                                <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h2 style="text-align:center; margin-top:15px;margin-bottom:10px">PART III</h2>
                                    <h4>EDUCATIONAL QUALIFICATIONS</h4>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;MATRIC SCHOOL:</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;DIVISION/GRADE</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="matric" id="matric" placeholder="MATRIC SCHOOL">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="grade_matric" id="grade_matric" placeholder="MATRIC GRADE">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h6>&nbsp;INTERMEDIATE COLLEGE</h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6>&nbsp;DIVISION/GRADE:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="college" id="college" placeholder="INTERMEDIATE COLLGE">
                                        </div>
                                        <div class="col-sm-6 mb-1">
                                            <input type="text" class="form-control form-control-user" name="grade_intermediate" id="grade_intermediate" placeholder="INTERMEDIATE GRADE">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;DIPLOMA (IF ANY):</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <input type="text" class="form-control form-control-user" name="diploma" id="diploma" placeholder="DIPLOMA">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <h6>&nbsp;OTHERS:</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-1">
                                            <input type="text" class="form-control form-control-user" name="other" id="other" placeholder=" Any Other">
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