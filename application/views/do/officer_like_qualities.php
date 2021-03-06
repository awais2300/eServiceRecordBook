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
            <h1 style="text-align:center; padding:40px"><strong>PERSONALITY TRAITS</strong></h1>
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
                        <h1 class="h4">FILL THE PERSONALIY TRAITS FORM </h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="save_form" action="<?= base_url(); ?>D_O/save_officer_qualities">
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
                                    <input type="text" class="" name="pid" id="pid">
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

                            <div class="card-body">
                                <div id="table_div">
                                    <?php if (count($quality_list) > 0) { ?>
                                        <table id="datatable" class="table table-striped" style="color:black">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S NO</th>
                                                    <th scope="col">PERSONALITY TRAITS</th>
                                                    <th scope="col">MAX MARKS</th>
                                                    <!--  <th scope="col">MID TERM</th> -->
                                                    <th scope="col">FINAL TERM</th>
                                                    <!-- <th scope="col">Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody id="table_rows">
                                                <?php $count = 0;
                                                foreach ($quality_list as $data) { ?>
                                                    <tr>
                                                        <td scope="row" style="padding:25px"><?= ++$count; ?></td>
                                                        <td scope="row" style="padding:25px"><?= $data['quality_name']; ?></td>
                                                        <td scope="row" style="padding:25px"><?= $data['max_marks']; ?></td>
                                                        <!--  <td scope="row"><input type="text" class="form-control form-control-user" name="mid_marks[]" id="mid_marks[]" placeholder="MARKS"></td> -->
                                                        <td scope="row"><input type="text" class="form-control form-control-user" name="final_marks[]" id="final_marks<?= $count; ?>" placeholder="MARKS"></td>

                                                    </tr>
                                                <?php
                                                } ?>
                                                <tr>
                                                    <td scope="row"><button type="button" class="btn btn-primary btn-user btn-block" id="calculate_btn">Auto Calculate</button></td>
                                                    <td scope="row" style="padding:25px; text-align:right"><strong>TOTAL MARKS</strong></td>
                                                    <td scope="row" style="padding:25px"><strong>200</strong></td>
                                                    <!--  <td scope="row"><input type="text" class="form-control form-control-user" name="total_mid_marks" id="total_mid_marks" placeholder="TOTAL MARKS"></td> -->
                                                    <td scope="row"><input type="text" class="form-control form-control-user" name="total_final_marks" id="total_final_marks" placeholder="TOTAL MARKS"></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    <?php } else { ?>
                                        <a> NO DATA FOUND</a>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                </div>
                                <div class="col-sm-3 mb-1 my-3">
                                </div>
                                <div class="col-sm-3 mb-1 my-3">
                                    <h6 style="text-align:right">&nbsp;PERCENTAGE OF MARKS:</h6>
                                </div>
                                <!-- <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" name="mid_percentage" id="mid_percentage" placeholder="MID MARKS %">
                                </div> -->
                                <div class="col-sm-3 mb-1">
                                    <input type="text" class="form-control form-control-user" name="final_percentage" id="final_percentage" placeholder="FINAL MARKS %">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3 mb-1">
                                </div>
                                <div class="col-sm-3 mb-1 my-3">
                                </div>
                                <div class="col-sm-3 mb-1 my-3">
                                    <h6 style="text-align:right">&nbsp;DATE OF ASSESSMENT:</h6>
                                </div>
                                <!-- <div class="col-sm-3 mb-1">
                                    <input type="date" class="form-control form-control-user" name="mid_exam_date" id="mid_exam_date" placeholder="MID MARKS %">
                                </div> -->
                                <div class="col-sm-3 mb-1">
                                    <input type="date" class="form-control form-control-user" name="final_exam_date" id="final_exam_date" placeholder="FINAL MARKS %">
                                </div>
                            </div>




                            <div class="form-group row justify-content-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-user btn-block" id="save_btn">
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
        //alert('javascript working');
        // $('#add_btn').attr('disabled', true);
        var validate = 0;

        var oc_no = $('#oc_no').val();


        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }

        if (validate == 0) {
            // $('#add_form')[0].submit();
            $('#show_error_new').hide();

            $.ajax({
                url: '<?= base_url(); ?>D_O/search_cadet_OLQs',
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
                        $('#term').val(result['pn_term']);
                        $('#division').val(result['divison_name']);
                        $('#oc_num').val(result['oc_no']);
                        $('#pid').val(result['pn_p_id']);

                        // $('#mid_marks1').val(result['truthfulness_mid']);
                        $('#final_marks1').val(result['truthfulness_terminal']);
                        // $('#mid_marks2').val(result['integrity_mid']);
                        $('#final_marks2').val(result['integrity_terminal']);
                        // $('#mid_marks3').val(result['pride_mid']);
                        $('#final_marks3').val(result['pride_terminal']);
                        // $('#mid_marks4').val(result['courage_mid']);
                        $('#final_marks4').val(result['courage_terminal']);
                        // $('#mid_marks5').val(result['confidence_mid']);
                        $('#final_marks5').val(result['confidence_terminal']);
                        // $('#mid_marks6').val(result['initiative_mid']);
                        $('#final_marks6').val(result['inititative_terminal']);
                        // $('#mid_marks7').val(result['command_mid']);
                        $('#final_marks7').val(result['command_terminal']);
                        // $('#mid_marks8').val(result['discipline_mid']);
                        $('#final_marks8').val(result['discipline_terminal']);
                        // $('#mid_marks9').val(result['duty_mid']);
                        $('#final_marks9').val(result['duty_terminal']);
                        // $('#mid_marks10').val(result['reliability_mid']);
                        $('#final_marks10').val(result['reliability_terminal']);
                        // $('#mid_marks11').val(result['appearance_mid']);
                        $('#final_marks11').val(result['appearance_terminal']);
                        // $('#mid_marks12').val(result['fitness_mid']);
                        $('#final_marks12').val(result['fitness_terminal']);
                        // $('#mid_marks13').val(result['conduct_mid']);
                        $('#final_marks13').val(result['conduct_terminal']);
                        // $('#mid_marks14').val(result['cs_mid']);
                        $('#final_marks14').val(result['cs_terminal']);
                        // $('#mid_marks15').val(result['teamwork_mid']);
                        $('#final_marks15').val(result['teamwork_terminal']);
                        // $('#mid_marks16').val(result['expression_mid']);
                        $('#final_marks16').val(result['expression_terminal']);
                        // 
                        // $('#total_mid_marks').val(result['total_mid']);
                        $('#total_final_marks').val(result['total_terminal']);
                        // $('#mid_percentage').val(result['mid_marks']);
                        $('#final_percentage').val(result['terminal_marks']);
                        // $('#mid_exam_date').val(result['mid_marks_date']);
                        $('#final_exam_date').val(result['terminal_marks_date']);


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

    $('#calculate_btn').on('click', function() {
        var mid_sum = 0;
        var final_sum = 0;

        var mid_marks = document.getElementsByName('mid_marks[]');
        var final_marks = document.getElementsByName('final_marks[]');

        for (var i = 0; i < mid_marks.length; i++) {
            if (mid_marks[i].value != '') {
                mid_sum = mid_sum + parseInt(mid_marks[i].value);
            }
        }

        for (var i = 0; i < final_marks.length; i++) {
            if (final_marks[i].value != '') {
                final_sum = final_sum + parseInt(final_marks[i].value);
            }
        }
        $('#total_mid_marks').val(mid_sum);
        $('#total_final_marks').val(final_sum);

        $('#mid_percentage').val((mid_sum / 200) * 100);
        $('#final_percentage').val((final_sum / 200) * 100);

    });
</script>