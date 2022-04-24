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

    .modal {
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
<!-- Term I Modal -->

<div class="container-fluid my-2">
    <div class="modal fade" id="term-I">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">PET-I DETAILS</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>D_O/add_termI_details">
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h5 id="">MILE TIME</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">CHINUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">PUSHUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">ROPE</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num1" id="oc_num1">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id1" id="id1">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="term_pet1" id="term_pet1">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_I" id="mile_time_I" style="" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_I" id="Chinups_I" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_I" id="Pushups_I" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control  " name="Rope_I" id="Rope_I" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
                                            </div>


                                        </div>
                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary btn-user   col-md-5" id="add_btn_termI" style="margin-left: 300px;">Save</button>
                                        </div>
                                        <div class="card-body">

                                        </div>

                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary  " data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Term II Modal -->

    <div class="modal fade" id="term-II">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">PET-II DETAILS</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form2" action="<?= base_url(); ?>D_O/add_termII_details">
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h5 id="">MILE TIME</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">CHINUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">PUSHUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">ROPE</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num2" id="oc_num2">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id2" id="id2">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="term_pet2" id="term_pet2">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_II" id="mile_time_II" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_II" id="Chinups_II" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_II" id="Pushups_II" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control  " name="Rope_II" id="Rope_II" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary btn-user   col-md-5" id="add_btn_termII" style="margin-left: 300px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary  " data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="term-III">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">PET-III DETAILS</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form3" action="<?= base_url(); ?>D_O/add_termIII_details">

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h5 id="">MILE TIME</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">CHINUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">PUSHUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">ROPE</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num3" id="oc_num3">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id3" id="id3">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="term_pet3" id="term_pet3">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_III" id="mile_time_III" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_III" id="Chinups_III" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_III" id="Pushups_III" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control  " name="Rope_III" id="Rope_III" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary btn-user   col-md-5" id="add_btn_termIII" style="margin-left: 300px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary  " data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="term-IV">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">PET-IV DETAILS</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form3" action="<?= base_url(); ?>D_O/add_termIV_details">

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h5 id="">MILE TIME</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">CHINUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">PUSHUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">ROPE</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num4" id="oc_num4">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id4" id="id4">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="term_pet4" id="term_pet4">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_IV" id="mile_time_IV" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_IV" id="Chinups_IV" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_IV" id="Pushups_IV" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control  " name="Rope_IV" id="Rope_IV" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary btn-user   col-md-5" id="add_btn_termIV" style="margin-left: 300px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary  " data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="term-V">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">PET-V DETAILS</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form3" action="<?= base_url(); ?>D_O/add_termV_details">

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h5 id="">MILE TIME</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">CHINUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">PUSHUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">ROPE</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num5" id="oc_num5">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id5" id="id5">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="term_pet5" id="term_pet5">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_V" id="mile_time_V" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_V" id="Chinups_V" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_V" id="Pushups_V" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control  " name="Rope_V" id="Rope_V" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary btn-user   col-md-5" id="add_btn_termV" style="margin-left: 300px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary  " data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="term-VI">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">PET-VI DETAILS</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form3" action="<?= base_url(); ?>D_O/add_termVI_details">

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h5 id="">MILE TIME</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">CHINUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">PUSHUPS</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5 id="">ROPE</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num6" id="oc_num6">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id6" id="id6">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="term_pet6" id="term_pet6">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_VI" id="mile_time_VI" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_VI" id="Chinups_VI" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_VI" id="Pushups_VI" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control  " name="Rope_VI" id="Rope_VI" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary btn-user   col-md-5" id="add_btn_termVI" style="margin-left: 300px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary  " data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row justify-content-center">
        <div class="col-lg-1">
            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
        </div>
        <div class="col-lg-11">
            <h1 style="text-align:center; padding:40px"><strong>ADD PHYSICAL MILESTONES</strong></h1>
        </div>

    </div>

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">SEARCH UT</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="add_form" action="">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>&nbsp;ENTER O NO:</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="oc_no" id="oc_no" placeholder="O NO">
                                </div>

                                <div class="col-sm-2 mb-1">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="add_btn">
                                        <!-- <i class="fab fa-google fa-fw"></i>   -->
                                        SEARCH
                                    </button>
                                    <span id="show_error_new" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;PLEASE CHECK ERRORS*</span>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="search_cadet" class="row my-2" style="display:none">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">UT's INFORMATION</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="save_form" action="<?= base_url(); ?>D_O/save_physical_milestone">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>&nbsp;NAME:</h6>
                                </div>

                                <div class="col-sm-4">
                                    <h6>&nbsp;TERM:</h6>
                                </div>

                                <div class="col-sm-4">
                                    <h6>&nbsp;CLASS:</h6>
                                </div>

                            </div>
                            <div class="form-group row">

                                <div class="col-sm-4 mb-1" style="display:none">
                                    <input type="text" class="" name="oc_num" id="oc_num">
                                </div>
                                <div class="col-sm-4 mb-1" style="display:none">
                                    <input type="text" class="" name="id" id="id">
                                </div>
                                <?php if (isset($page)) {
                                    //echo "sdfsdfds";
                                ?>
                                    <input type="hidden" name="pagee" id="pagee" value="<?= $page; ?>">
                                <?php } ?>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="name" id="name" style="font-weight: bold; font-size:large" placeholder="Name" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="term" id="term" style="font-weight: bold; font-size:large" placeholder="Term" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="division" id="division" style="font-weight: bold; font-size:large" placeholder="Division" readonly>
                                </div>

                            </div>


                            <div class="card-header bg-custom1">
                                <h1 class="h5">ENTER PYSICAL MILESTONES INFORMATION</h1>
                            </div>

                            <div class="form-group row my-3">
                                <div class="col-sm-3">
                                    <h5>&nbsp;<strong>TEST NAME</strong></h5>
                                </div>

                                <div class="col-sm-2">
                                    <h5 style="text-align:center">&nbsp;<strong>RESULT</strong></h5>
                                </div>

                                <div class="col-sm-2">
                                    <h5 style="text-align:center">&nbsp;<strong>ATTEMPT</strong></h5>
                                </div>

                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>1 - PST</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="pst" id="pst" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <input type="number" class="form-control  " name="pst_attempt" id="pst_attempt" placeholder="ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>2 - SST</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="sst" id="sst" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 mb-1">
                                     <input type="number" class="form-control  " name="sst_attempt" id="sst_attempt" placeholder="ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>3 - PET-I</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="pet_I" id="pet_I" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 mb-1">
                                     <input type="number" class="form-control  " name="pet_I_attempt" id="pet_I_attempt" placeholder="ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <button type="button" class="btn btn-primary btn-user  " data-toggle="modal" data-target="#term-I">ADD DETAILS</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>4 - PET-II</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="pet_II" id="pet_II" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                               <div class="col-sm-2 mb-1">
                                      <input type="number" class="form-control  " name="pet_II_attempt" id="pet_II_attempt" placeholder="ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >

                                </div> 
                                <div class="col-sm-3 mb-1">
                                    <button type="button" class="btn btn-primary btn-user  " data-toggle="modal" data-target="#term-II">ADD DETAILS</button>
                                </div>
                            </div>
                            <div class="form-group row">
                               <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>5 - PET-III</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="pet_III" id="pet_III" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                               <div class="col-sm-2 mb-1">
                                     <input type="number" class="form-control  " name="pet_III_attempt" id="pet_III_attempt" placeholder=" ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div> 
                                <div class="col-sm-3 mb-1">
                                    <button type="button" class="btn btn-primary btn-user  " data-toggle="modal" data-target="#term-III">ADD DETAILS</button>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>6 - PET-IV</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="pet_IV" id="pet_IV" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 mb-1">
                                     <input type="number" class="form-control  "name="pet_IV_attempt" id="pet_IV_attempt" placeholder="ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <button type="button" class="btn btn-primary btn-user  " data-toggle="modal" data-target="#term-IV">ADD DETAILS</button>
                                </div>
                            </div>
                       <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>7 - PET-V</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="pet_V" id="pet_V" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISUALIFIED</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 mb-1">
                                     <input type="number" class="form-control  " name="pet_V_attempt" id="pet_V_attempt" placeholder=" ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <button type="button" class="btn btn-primary btn-user  " data-toggle="modal" data-target="#term-V">ADD DETAILS</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>8 - PET-VI</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="pet_VI" id="pet_VI" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 mb-1">
                                  <input type="number" class="form-control  " name="pet_VI_attempt" id="pet_VI_attempt" placeholder=" ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <button type="button" class="btn btn-primary btn-user  " data-toggle="modal" data-target="#term-VI">ADD DETAILS</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 my-2">
                                    <h5>&nbsp;<strong>9 - PARADE TRAINING</strong></h5>
                                </div>
                                <div class="col-sm-2 mb-1">
                                    <select class="form-control  " name="prade_training" id="prade_training" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">SELECT RESULT</option>
                                        <option class="form-control form-control-user" value="qualified">QUALIFIED</option>
                                        <option class="form-control form-control-user" value="disqualified">DISQUALIFIED</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 mb-1">
                                      <input type="number" class="form-control  " name="prade_attempt" id="prade_attempt" placeholder="ATTEMPT NO" style="font-size: 0.8rem; height:50px;" >
                                </div>
                            </div>  

                            <div class="form-group row justify-content-center">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="save_btn">
                                        <!-- <i class="fab fa-google fa-fw"></i>   -->
                                        SAVE
                                    </button>
                                    <span id="show_error_save" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;PLEASE CHECK ERRORS*</span>
                                </div>
                            </div>
                            <input type="hidden" name="milestone_id" id="milestone_id">
                        </form>
                    </div>
                </div>


            </div>
        </div>

        <div id="no_data" class="row my-2" style="display:none">
            <div class="col-lg-12 my-5">

                <h4 style="color:red">NO UT FOUND. PLEASE CHECK THE O NO ENTERED.</h4>

            </div>
        </div>
    </div>

</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
    $('#add_btn_termI').on('click', function() {
        var p_id = $('#id1').val();
        var oc_no = $('#oc_num1').val();
        var mile_time = $('#mile_time_I').val();
        var Pushups = $('#Pushups_I').val();
        var Chinups = $('#Chinups_I').val();
        var rope = $('#Rope_I').val();
        var term = $('#term_pet1').val();

        $.ajax({
            url: '<?= base_url(); ?>D_O/add_termI_details',
            method: 'POST',
            //  type:'json',
            data: {
                'p_id': p_id,
                'oc_no': oc_no,
                'mile_time': mile_time,
                'Pushups': Pushups,
                'Chinups': Chinups,
                'rope': rope,
                'term': term
            },
            success: function(response) {
            },
            async: false
        });
        $('#term-I').modal('hide');
    });

    $('#add_btn_termII').on('click', function() {        
        var validate = 0;

        var p_id = $('#id2').val();
        var oc_no = $('#oc_num2').val();
        var mile_time = $('#mile_time_II').val();
        var Pushups = $('#Pushups_II').val();
        var Chinups = $('#Chinups_II').val();
        var rope = $('#Rope_II').val();
        var term = $('#term_pet2').val();

        $.ajax({
            url: '<?= base_url(); ?>D_O/add_termII_details',
            method: 'POST',
            //  type:'json',
            data: {
                'p_id': p_id,
                'oc_no': oc_no,
                'mile_time': mile_time,
                'Pushups': Pushups,
                'Chinups': Chinups,
                'rope': rope,
                'term' : term
            },
            success: function(response) {
            },
            async: false
        });

        $('#term-II').modal('hide');

    });

    $('#add_btn_termIII').on('click', function() {        
        var validate = 0;

        var p_id = $('#id3').val();
        var oc_no = $('#oc_num3').val();
        var mile_time = $('#mile_time_III').val();
        var Pushups = $('#Pushups_III').val();
        var Chinups = $('#Chinups_III').val();
        var rope = $('#Rope_III').val();
        var term = $('#term_pet3').val();

        $.ajax({
            url: '<?= base_url(); ?>D_O/add_termIII_details',
            method: 'POST',
            //  type:'json',
            data: {
                'p_id': p_id,
                'oc_no': oc_no,
                'mile_time': mile_time,
                'Pushups': Pushups,
                'Chinups': Chinups,
                'rope': rope,
                'term' : term
            },
            success: function(response) {
            },
            async: false
        });

        $('#term-III').modal('hide');

    });

    $('#add_btn_termIV').on('click', function() {        
        var validate = 0;

        var p_id = $('#id4').val();
        var oc_no = $('#oc_num4').val();
        var mile_time = $('#mile_time_IV').val();
        var Pushups = $('#Pushups_IV').val();
        var Chinups = $('#Chinups_IV').val();
        var rope = $('#Rope_IV').val();
        var term = $('#term_pet4').val();

        $.ajax({
            url: '<?= base_url(); ?>D_O/add_termIV_details',
            method: 'POST',
            //  type:'json',
            data: {
                'p_id': p_id,
                'oc_no': oc_no,
                'mile_time': mile_time,
                'Pushups': Pushups,
                'Chinups': Chinups,
                'rope': rope,
                'term' : term
            },
            success: function(response) {
            },
            async: false
        });

        $('#term-IV').modal('hide');

    });

    $('#add_btn_termV').on('click', function() {        
        var validate = 0;

        var p_id = $('#id5').val();
        var oc_no = $('#oc_num5').val();
        var mile_time = $('#mile_time_V').val();
        var Pushups = $('#Pushups_V').val();
        var Chinups = $('#Chinups_V').val();
        var rope = $('#Rope_V').val();
        var term = $('#term_pet5').val();

        $.ajax({
            url: '<?= base_url(); ?>D_O/add_termV_details',
            method: 'POST',
            //  type:'json',
            data: {
                'p_id': p_id,
                'oc_no': oc_no,
                'mile_time': mile_time,
                'Pushups': Pushups,
                'Chinups': Chinups,
                'rope': rope,
                'term' : term
            },
            success: function(response) {
            },
            async: false
        });

        $('#term-V').modal('hide');

    });

    $('#add_btn_termVI').on('click', function() {        
        var validate = 0;

        var p_id = $('#id6').val();
        var oc_no = $('#oc_num6').val();
        var mile_time = $('#mile_time_VI').val();
        var Pushups = $('#Pushups_VI').val();
        var Chinups = $('#Chinups_VI').val();
        var rope = $('#Rope_VI').val();
        var term = $('#term_pet6').val();

        $.ajax({
            url: '<?= base_url(); ?>D_O/add_termVI_details',
            method: 'POST',
            //  type:'json',
            data: {
                'p_id': p_id,
                'oc_no': oc_no,
                'mile_time': mile_time,
                'Pushups': Pushups,
                'Chinups': Chinups,
                'rope': rope,
                'term' : term
            },
            success: function(response) {
            },
            async: false
        });

        $('#term-VI').modal('hide');

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
        // alert('notification clicked');
        $.ajax({
            url: '<?= base_url(); ?>ChatController/activity_seen',
            success: function(data) {
                $('#notifications').html(data);
            },
            async: true
        });
    });


    $('#add_btn').on('click', function() {
        var validate = 0;
        var oc_no = $('#oc_no').val();

        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }

        if (validate == 0) {
            // $('#add_form')[0].submit();
            $('#show_error_new').hide();
            //alert('validate');
            $.ajax({
                url: '<?= base_url(); ?>D_O/search_cadet_physical_milestone',
                method: 'POST',
                data: {
                    'oc_no': oc_no
                },
                success: function(data) {
                    var result = jQuery.parseJSON(data);

                    if (result != undefined) {
                        $('#search_cadet').show();
                        $('#no_data').hide();

                        $('#name').val(result['f_name']);
                        $('#term').val(result['f_term']);
                        $('#division').val(result['f_divison_name']);
                        $('#oc_num').val(result['f_oc_no']);
                        $('#id').val(result['f_p_id']);
                        $('#oc_num1').val(result['f_oc_no']);
                        $('#id1').val(result['f_p_id']);
                        $('#oc_num2').val(result['f_oc_no']);
                        $('#id2').val(result['f_p_id']);
                        $('#oc_num3').val(result['f_oc_no']);
                        $('#id3').val(result['f_p_id']);
                        $('#oc_num4').val(result['f_oc_no']);
                        $('#id4').val(result['f_p_id']);
                        $('#oc_num5').val(result['f_oc_no']);
                        $('#id5').val(result['f_p_id']);
                        $('#oc_num6').val(result['f_oc_no']);
                        $('#id6').val(result['f_p_id']);

                        $('#pst').val(result['PST_result']);
                        $('#pst_attempt').val(result['PST_attempt']);
                        $('#sst').val(result['SST_result']);
                        $('#sst_attempt').val(result['SST_attempt']);
                        $('#pet_I').val(result['PET_I_result']);
                        $('#pet_I_attempt').val(result['PET_I_attempt']);
                        $('#pet_II').val(result['PET_II_result']);
                        $('#pet_II_attempt').val(result['PET_II_attempt']);
                        $('#pet_III').val(result['PET_III_result']);
                        $('#pet_III_attempt').val(result['PET_III_attempt']);
                        $('#pet_IV').val(result['PET_IV_result']);
                        $('#pet_IV_attempt').val(result['PET_IV_attempt']);
                        $('#pet_V').val(result['PET_V_result']);
                        $('#pet_V_attempt').val(result['PET_V_attempt']);
                        $('#pet_VI').val(result['PET_VI_result']);
                        $('#pet_VI_attempt').val(result['PET_VI_attempt']);
                        $('#prade_training').val(result['Prade_training']);
                        $('#prade_attempt').val(result['prade_training_attempt']);
                        

                        $('#milestone_id').val(result['id']);

                        $('#mile_time_I').val(result['mile_time']);
                        $('#Chinups_I').val(result['chinups']);
                        $('#Pushups_I').val(result['pushups']);
                        $('#Rope_I').val(result['rope']);
                        $('#term_pet1').val(result['f_term']);

                        $('#mile_time_II').val(result['mile_time_II']);
                        $('#Chinups_II').val(result['chinups_II']);
                        $('#Pushups_II').val(result['pushups_II']);
                        $('#Rope_II').val(result['rope_II']);
                        $('#term_pet2').val(result['f_term']);

                        $('#mile_time_III').val(result['mile_time_III']);
                        $('#Chinups_III').val(result['chinups_III']);
                        $('#Pushups_III').val(result['pushups_III']);
                        $('#Rope_III').val(result['rope_III']);
                        $('#term_pet3').val(result['f_term']);

                        $('#mile_time_IV').val(result['mile_time_IV']);
                        $('#Chinups_IV').val(result['chinups_IV']);
                        $('#Pushups_IV').val(result['pushups_IV']);
                        $('#Rope_IV').val(result['rope_IV']);
                        $('#term_pet4').val(result['f_term']);

                        $('#mile_time_V').val(result['mile_time_V']);
                        $('#Chinups_V').val(result['chinups_V']);
                        $('#Pushups_V').val(result['pushups_V']);
                        $('#Rope_V').val(result['rope_V']);
                        $('#term_pet5').val(result['f_term']);

                        $('#mile_time_VI').val(result['mile_time_VI']);
                        $('#Chinups_VI').val(result['chinups_VI']);
                        $('#Pushups_VI').val(result['pushups_VI']);
                        $('#Rope_VI').val(result['rope_VI']);
                        $('#term_pet6').val(result['f_term']);

                    } else {
                        $('#no_data').show();
                        $('#search_cadet').hide();

                    }

                },
                async: true
            });



        } else {
            $('#add_btn').removeAttr('disabled');
            $('#show_error_new').show();
        }


    });

    $('#end_date').on('focusout', function() {
        var start_date = new Date($('#start_date').val());
        var end_date = new Date($('#end_date').val());
        var validate = 0;

        if (end_date < start_date) {
            $('#error_end_date').show();
            $('#end_date').addClass('red-border');
            $('#end_date').focus();
            $('#save_btn').attr('disabled', true);
        } else {
            $('#error_end_date').hide();
            $('#save_btn').removeAttr('disabled');
            $('#end_date').removeClass('red-border');

        }

        $('#days').val(Math.abs(end_date - start_date) / 1000 / 60 / 60 / 24);
    });


    $('#save_btn').on('click', function() {
        $('#save_btn').attr('disabled', true);
        var validate = 0;
        var punish = $('#punish').val();
        var offense = $('#offense').val();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();

        if (punish == '') {
            validate = 1;
            $('#punish').addClass('red-border');
        }
        if (offense == '') {
            validate = 1;
            $('#offense').addClass('red-border');
        }
        if (start_date == '') {
            validate = 1;
            $('#start_date').addClass('red-border');
        }
        if (end_date == '') {
            validate = 1;
            $('#end_date').addClass('red-border');
        }

        if (validate == 0) {
            $('#save_form')[0].submit();
            $('#show_error_save').hide();

        } else {
            $('#save_btn').removeAttr('disabled');
            $('#show_error_save').show();
        }
    });
</script>