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

<div class="container-fluid my-2">

    <div class="form-group row justify-content-center">
        <div class="col-lg-1">
            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
        </div>
        <div class="col-lg-11">
            <h1 style="text-align:center; padding:40px"><strong>ADD PROGRESS CHART</strong></h1>
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
                        <h1 class="h4">ADD PROGRESS CHART</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" enctype="multipart/form-data" id="save_form" action="<?= base_url(); ?>D_O/save_cadet_progress">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>&nbsp;NAME:</h6>
                                </div>

                                <div class="col-sm-4">
                                    <h6>&nbsp;CURRENT TERM:</h6>
                                </div>

                                <div class="col-sm-4">
                                    <h6>&nbsp;DIVISION:</h6>
                                </div>

                            </div>
                            <div class="form-group row">

                                <div class="col-sm-4 mb-1" style="display:none">
                                    <input type="text" class="" name="oc_num" id="oc_num">
                                </div>
                                <div class="col-sm-4 mb-1" style="display:none">
                                    <input type="text" class="" name="id" id="id">
                                </div>

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

                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>TERM:</strong></h6>
                                </div>
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>ACADEMICS(WITH PERSONALITY TRAITS):</strong></h6>
                                </div>
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>PERSONALITY TRAITS:</strong></h6>
                                </div>
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>AGGREGATE(WITH PERSONALITY TRAITS):</strong></h6>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" name="term_t1" id="term_t1" value="Term-I" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="academic_t1" id="academic_t1" placeholder="Enter Academic Marks">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="olqs_t1" id="olqs_t1" placeholder="Enter OLQs Marks">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="aggregate_t1" id="aggregate_t1" placeholder="Enter Aggregate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" name="term_t2" id="term_t2" value="Term-II" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="academic_t2" id="academic_t2" placeholder="Enter Academic Marks">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="olqs_t2" id="olqs_t2" placeholder="Enter OLQs Marks">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="aggregate_t2" id="aggregate_t2" placeholder="Enter Aggregate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" name="term_t3" id="term_t3" value="Term-III" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="academic_t3" id="academic_t3" placeholder="Enter Academic Marks">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="olqs_t3" id="olqs_t3" placeholder="Enter OLQs Marks">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="aggregate_t3" id="aggregate_t3" placeholder="Enter Aggregate">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="save_btn_progress">
                                        <!-- <i class="fab fa-google fa-fw"></i>   -->
                                        SAVE
                                    </button>
                                    <span id="show_error_save" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;PLEASE CHECK ERRORS*</span>
                                </div>
                            </div>

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


    $('#add_btn').on('click', function() {
        var validate = 0;
        var oc_no = $('#oc_no').val();

        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }

        if (validate == 0) {
            $('#show_error_new').hide();

            $.ajax({
                url: '<?= base_url(); ?>D_O/search_cadet',
                method: 'POST',
                data: {
                    'oc_no': oc_no
                },
                success: function(data) {
                    var result = jQuery.parseJSON(data);

                    if (result != undefined) {
                        $('#search_cadet').show();
                        $('#no_data').hide();

                        $('#name').val(result['name']);
                        $('#term').val(result['term']);
                        $('#division').val(result['divison_name']);
                        $('#oc_num').val(result['oc_no']);
                        $('#id').val(result['p_id']);
                    } else {
                        $('#no_data').show();
                        $('#search_cadet').hide();

                    }

                },
                async: false
            });

            if ($('#name').val() != null) {
                $.ajax({
                    url: '<?= base_url(); ?>D_O/get_progress_chart_values',
                    method: 'POST',
                    data: {
                        'p_id': $('#id').val()
                    },
                    success: function(data) {
                        var result = jQuery.parseJSON(data);

                        if (result != undefined) {

                            if (result['term3_academics'] == 0) {
                                result['term3_academics'] = null
                            }
                            if (result['term3_olqs'] == 0) {
                                result['term3_olqs'] = null
                            }
                            if (result['term3_aggregate'] == 0) {
                                result['term3_aggregate'] = null
                            }

                            if (result['term1_academics'] == 0) {
                                result['term1_academics'] = null
                            }
                            if (result['term1_olqs'] == 0) {
                                result['term1_olqs'] = null
                            }
                            if (result['term1_aggregate'] == 0) {
                                result['term1_aggregate'] = null
                            }

                            if (result['term2_academics'] == 0) {
                                result['term2_academics'] = null
                            }
                            if (result['term2_olqs'] == 0) {
                                result['term2_olqs'] = null
                            }
                            if (result['term2_aggregate'] == 0) {
                                result['term2_aggregate'] = null
                            }


                            $('#academic_t1').val(result['term1_academics']);
                            $('#olqs_t1').val(result['term1_olqs']);
                            $('#aggregate_t1').val(result['term1_aggregate']);
                            $('#academic_t2').val(result['term2_academics']);
                            $('#olqs_t2').val(result['term2_olqs']);
                            $('#aggregate_t2').val(result['term2_aggregate']);
                            $('#academic_t3').val(result['term3_academics']);
                            $('#olqs_t3').val(result['term3_olqs']);
                            $('#aggregate_t3').val(result['term3_aggregate']);
                        }

                    },
                    async: false
                });
            }

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


    $('#save_btn_progress').on('click', function() {
        $('#save_btn_progress').attr('disabled', true);
        var validate = 0;
        var academic_t1 = $('#academic_t1').val();
        var olqs_t1 = $('#olqs_t1').val();
        var aggregate_t1 = $('#aggregate_t1').val();
        var academic_t2 = $('#academic_t2').val();
        var olqs_t2 = $('#olqs_t2').val();
        var aggregate_t2 = $('#aggregate_t2').val();
        var academic_t3 = $('#academic_t3').val();
        var olqs_t3 = $('#olqs_t3').val();
        var aggregate_t3 = $('#aggregate_t3').val();
        var current_term = $('#term').val();

        
        if (current_term == 'Term-I') {
            if (academic_t1 == '') {
                validate = 1;
                $('#academic_t1').addClass('red-border');
            }
            if (olqs_t1 == '') {
                validate = 1;
                $('#olqs_t1').addClass('red-border');
            }
            if (aggregate_t1 == '') {
                validate = 1;
                $('#aggregate_t1').addClass('red-border');
            }
        } else if (current_term == 'Term-II') {
            if (academic_t2 == '') {
                validate = 1;
                $('#academic_t2').addClass('red-border');
            }
            if (olqs_t2 == '') {
                validate = 1;
                $('#olqs_t2').addClass('red-border');
            }
            if (aggregate_t2 == '') {
                validate = 1;
                $('#aggregate_t2').addClass('red-border');
            }
        } else if (current_term == 'Term-III') {
            if (academic_t3 == '') {
                validate = 1;
                $('#academic_t3').addClass('red-border');
            }
            if (olqs_t3 == '') {
                validate = 1;
                $('#olqs_t3').addClass('red-border');
            }
            if (aggregate_t3 == '') {
                validate = 1;
                $('#aggregate_t3').addClass('red-border');
            }
        }

        if (validate == 0) {
            $('#save_form')[0].submit();
            $('#show_error_save').hide();

        } else {
            $('#save_btn_progress').removeAttr('disabled');
            $('#show_error_save').show();
        }
    });
</script>