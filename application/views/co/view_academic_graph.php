<?php $this->load->view('co/common/header'); ?>
<?php !isset($gpa['gpa_t1']) ? $gpa['gpa_t1'] = 0 : $gpa['gpa_t1']; ?>
<?php !isset($gpa['gpa_t2']) ? $gpa['gpa_t2'] = 0 : $gpa['gpa_t2']; ?>
<?php !isset($gpa['gpa_t3']) ? $gpa['gpa_t3'] = 0 : $gpa['gpa_t3']; ?>
<?php !isset($gpa['gpa_t4']) ? $gpa['gpa_t4'] = 0 : $gpa['gpa_t4']; ?>
<?php !isset($gpa['gpa_t5']) ? $gpa['gpa_t5'] = 0 : $gpa['gpa_t5']; ?>
<?php !isset($gpa['gpa_t6']) ? $gpa['gpa_t6'] = 0 : $gpa['gpa_t6']; ?>
<?php !isset($gpa['gpa_t7']) ? $gpa['gpa_t7'] = 0 : $gpa['gpa_t7']; ?>
<?php !isset($gpa['gpa_t8']) ? $gpa['gpa_t8'] = 0 : $gpa['gpa_t8']; ?>


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
            <h1 style="text-align:center; padding:40px"><strong>ACADEMIC GRAPH</strong></h1>
        </div>

        <div class="row" style="height:20px">
            <input type="text" class="form-control form-control-user" name="cadet_name" id="cadet_name" value="<?php if(isset($cadet_data['name'])) { echo $cadet_data['name']; }; ?>" style="display:none">
            <input type="text" class="form-control form-control-user" name="cadet_term" id="cadet_term" value="<?php if(isset($cadet_data['term'])) { echo $cadet_data['term']; }; ?>" style="display:none">
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
                                    <input type="text" class="form-control form-control-user" name="oc_no" id="oc_no" placeholder="O NO.">
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
                        <h1 class="h4">RESULT</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" enctype="multipart/form-data" id="save_form" action="<?= base_url(); ?>CO/save_cadet_result/Result">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>&nbsp;UT's NAME:</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h6>&nbsp;TERM:</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h6>&nbsp;DIVSION:</h6>
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
                                    <input type="text" class="form-control form-control-user" name="name" id="name" style="font-weight: bold; font-size:large; display:none" placeholder="NAME" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="officer_name" id="officer_name" style="font-weight: bold; font-size:large" placeholder="NAME" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="term" id="term" style="font-weight: bold; font-size:large" placeholder="TERM" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="division" id="division" style="font-weight: bold; font-size:large" placeholder="CLASS" readonly>
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

    <div class="card-body bg-custom3" id="overall_graph" style="display:none">
        <div class="form-group row" style="margin-top:50px;">
            <div class="col-sm-12">
                <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>

    <?php

    $dataPoints1 = array(
        array("label" => "Term-I", "y" => ($gpa['gpa_t1'])),
        array("label" => "Term-II", "y" => ($gpa['gpa_t2'])),
        array("label" => "Term-III", "y" => ($gpa['gpa_t3'])),
        array("label" => "Term-IV", "y" => ($gpa['gpa_t4'])),
        array("label" => "Term-V", "y" => ($gpa['gpa_t5'])),
        array("label" => "Term-VI", "y" => ($gpa['gpa_t6'])),
      
    );
    ?>

</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
    window.onload = function() {

        var cadet_name = $('#cadet_name').val();
        var cadet_term = $('#cadet_term').val();

        CanvasJS.addColorSet("blueShades",
                ["rgb(0, 1, 84)"]);

        var chart1 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            colorSet: "blueShades",
            title: {
                text: "UT Name: " + cadet_name + " Term: " + cadet_term,
                fontColor: 'rgb(0, 1, 84)',
                horizontalAlign: "center"

            },
            subtitles: [{
                text: "PERCENTAGE TERMWISE"
            }],
            axisY: {
                title: "GPA",
                maximum: 4.0,
                color:'blue'
            },
            data: [{
                type: "area",
                showInLegend: true,
                legendMarkerColor: "black",
                legendText: "Terms",
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart1.render();
        // $('#overall_graph').show();
    }


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
            // $('#add_form')[0].submit();
            $('#show_error_new').hide();

            $.ajax({
                url: '<?= base_url(); ?>CO/search_cadet',
                method: 'POST',
                data: {
                    'oc_no': oc_no
                },
                success: function(data) {
                    var result = jQuery.parseJSON(data);

                    if (result != undefined) {
                        $('#search_cadet').show();
                        $('#no_data').hide();

                        $('#officer_name').val(result['name']);
                        $('#term').val(result['term']);
                        $('#division').val(result['divison_name']);
                        $('#oc_num').val(result['oc_no']);
                        $('#id').val(result['p_id']);
                    } else {
                        $('#no_data').show();
                        $('#search_cadet').hide();
                        $('#overall_graph').hide();

                    }

                },
                async: false
            });


            if ($('#officer_name').val() != '') {
                // alert($('#id').val());
                $.ajax({
                    url: '<?= base_url(); ?>CO/get_academic_graph',
                    method: 'POST',
                    data: {
                        'p_id': $('#id').val()
                    },
                    success: function(data) {
                        var newDoc = document.open("text/html", "replace");
                        newDoc.write(data);
                        newDoc.close();
                    },
                    async: false
                });

                $('#overall_graph').show();
            }

        } else {
            $('#add_btn').removeAttr('disabled');
            $('#show_error_new').show();
        }
    });



    $('#save_btn').on('click', function() {
        $('#save_btn').attr('disabled', true);
        var validate = 0;
        var officer_name = $('#officer_name').val();
        var term = $('#term').val();
        var result_file = $('#result_file').val();

        if (officer_name == '') {
            validate = 1;
            $('#officer_name').addClass('red-border');
        }
        if (term == '') {
            validate = 1;
            $('#Term').addClass('red-border');
        }
        if (result_file == '') {
            validate = 1;
            $('#result_file').addClass('red-border');
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