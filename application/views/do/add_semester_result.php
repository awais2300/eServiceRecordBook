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
            <h1 style="text-align:center; padding:40px"><strong>ADD TERM RESULT</strong></h1>
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
                        <h1 class="h4">ADD RESULT</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" enctype="multipart/form-data" id="save_form" action="<?= base_url(); ?>D_O/save_cadet_semester_result">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>&nbsp;NAME:</h6>
                                </div>

                                <div class="col-sm-4">
                                    <h6>&nbsp;CURRENT TERM:</h6>
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
                                <div class="col-sm-4 mb-1" style="display:none">
                                    <input type="text" class="" name="unit_id" id="unit_id">
                                </div>

                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="name" id="name" style="font-weight: bold; font-size:large" placeholder="NAME" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="term" id="term" style="font-weight: bold; font-size:large" placeholder="TERM" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="division" id="division" style="font-weight: bold; font-size:large" placeholder="CLASS" readonly>
                                </div>

                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h6>&nbsp;<strong>ADD RESULT SHEET:</strong></h6>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-1">
                                    <input type="file" style="height: 50px; padding:10px !important;" multiple="multiple" class="form-control form-control-user" placeholder="UPLOAD DOCS" name="file[]" id="result_file" x-model="fileName">

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <h6>&nbsp;<strong>UPLOAD DOCS:</strong></h6>
                                </div>
                                <div class="col-sm-8">
                                    <a id="uploaded_filename">
                                        <input type="text" style="display:none" id="set_file_name">
                                </div>
                            </div>

                            <span id="message"></span>
                            <table id="table">
                                <div id="excel_area"></div>
                            </table>

                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>TERM:</strong></h6>
                                </div>
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>PERCENTAGE:</strong></h6>
                                </div>
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>TERM:</strong></h6>
                                </div>
                                <div class="col-sm-3">
                                    <h6>&nbsp;<strong>PERCENTAGE:</strong></h6>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t1" id="term_t1" value="Term-I" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t1" id="gpa_t1" placeholder="ENTER PERCENTAGE">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t5" id="term_t5" value="Term-V" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t5" id="gpa_t5" placeholder="ENTER PERCENTAGE">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t2" id="term_t2" value="Term-II" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t2" id="gpa_t2" placeholder="ENTER PERCENTAGE">
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t6" id="term_t6" value="Term-VI" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t6" id="gpa_t6" placeholder="ENTER PERCENTAGE">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t3" id="term_t3" value="Term-III" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t3" id="gpa_t3" placeholder="ENTER PERCENTAGE">
                                </div>
                                <!--   <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t7" id="term_t7" value="Term-VII" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t7" id="gpa_t7" placeholder="ENTER PERCENTAGE">
                                </div> -->
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t4" id="term_t4" value="Term-IV" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t4" id="gpa_t4" placeholder="ENTER PERCENTAGE">
                                </div>
                                <!-- <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" style="color:black;font-size:large" name="term_t8" id="term_t8" value="Term-VIII" readonly>
                                </div>
                                <div class="col-sm-3 mb-1">
                                    <input type="number" class="form-control form-control-user" name="gpa_t8" id="gpa_t8" placeholder="ENTER PERCENTAGE">
                                </div> -->
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

                <h4 style="color:red">NO UT FOUND.PLEASE CHECK THE O NO ENTERED.</h4>

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
                        $('#unit_id').val(result['unit_id']);
                    } else {
                        $('#no_data').show();
                        $('#search_cadet').hide();

                    }

                },
                async: false
            });

            if ($('#name').val() != null) {
                $.ajax({
                    url: '<?= base_url(); ?>D_O/get_semester_results_values',
                    method: 'POST',
                    data: {
                        'p_id': $('#id').val()
                    },
                    success: function(data) {
                        var result = jQuery.parseJSON(data);

                        if (result != undefined) {

                            if (result['gpa_t1'] == 0) {
                                result['gpa_t1'] = null
                            }
                            if (result['gpa_t2'] == 0) {
                                result['gpa_t2'] = null
                            }
                            if (result['gpa_t3'] == 0) {
                                result['gpa_t3'] = null
                            }
                            if (result['gpa_t4'] == 0) {
                                result['gpa_t4'] = null
                            }
                            if (result['gpa_t5'] == 0) {
                                result['gpa_t5'] = null
                            }
                            if (result['gpa_t6'] == 0) {
                                result['gpa_t6'] = null
                            }
                            if (result['gpa_t7'] == 0) {
                                result['gpa_t7'] = null
                            }
                            if (result['gpa_t8'] == 0) {
                                result['gpa_t8'] = null
                            }
                            if (result['cpga'] == 0) {
                                result['cgpa'] = null
                            }

                            $('#gpa_t1').val(result['gpa_t1']);
                            $('#gpa_t2').val(result['gpa_t2']);
                            $('#gpa_t3').val(result['gpa_t3']);
                            $('#gpa_t4').val(result['gpa_t4']);
                            $('#gpa_t5').val(result['gpa_t5']);
                            $('#gpa_t6').val(result['gpa_t6']);
                            $('#gpa_t7').val(result['gpa_t7']);
                            $('#gpa_t8').val(result['gpa_t8']);

                        } else {
                            $('#gpa_t1').val(null);
                            $('#gpa_t2').val(null);
                            $('#gpa_t3').val(null);
                            $('#gpa_t4').val(null);
                            $('#gpa_t5').val(null);
                            $('#gpa_t6').val(null);
                            $('#gpa_t7').val(null);
                            $('#gpa_t8').val(null);
                        }

                    },
                    async: false
                });
            }

            if ($('#name').val() != null) {
                $.ajax({
                    url: '<?= base_url(); ?>D_O/get_manual_result_files',
                    method: 'POST',
                    data: {
                        'p_id': $('#id').val()
                    },
                    success: function(data) {
                        var result = jQuery.parseJSON(data);

                        if (result != undefined) {
                            var len = result.length;
                            if (len > 0) {

                                for (i = 0; i < len; i++) {
                                    $('#uploaded_filename').append(`<h6><a href="<?= base_url(); ?>uploads/documents/${result[i]['file_name']}" target="_blank"><strong>${result[i]['file_name']}</strong></h6>`);
                                    // $('#uploaded_filename').append(`<h6><a href="#"><strong>${result[i]['file_name']}</strong></h6>`);
                                    $('#set_file_name').val(result[i]['file_name']);
                                    // <iframe src="https://docs.google.com/viewer?url=uploads/documents/Test-html.docx&embedded=true" frameborder='0'></iframe>
                                }
                            } else {
                                $('#uploaded_filename').html(`<h6>No Files Uploaded</h6>`);
                            }
                        } else {
                            $('#uploaded_filename').html(`<h6>No Files Uploaded</h6>`);
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
        var current_term = $('#term').val();

        if (validate == 0) {
            $('#save_form')[0].submit();
            $('#show_error_save').hide();

        } else {
            $('#save_btn_progress').removeAttr('disabled');
            $('#show_error_save').show();
        }
    });

    $('#uploaded_filename').on('click', function() {
        // alert($('#set_file_name').val());
        var file_name = $('#set_file_name').val();
        $.ajax({
            url: '<?= base_url(); ?>D_O/get_excel_file_result',
            method: 'POST',
            data: {
                'filename': file_name
            },
            // contentType: false,
            // cache: false,
            // processData: false,
            success: function(data) {
                $('#excel_area').html(data);
                $('table').css('width', '100%');
            }
        })
    });
</script>