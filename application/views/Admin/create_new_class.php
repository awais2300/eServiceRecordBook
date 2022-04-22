<?php $this->load->view('Admin/common/header'); ?>
<style>
    .red-border {
        border: 1px solid red !important;
    }
</style>

<div class="container-fluid my-2">
    <div class="form-group row justify-content-center">
        <!-- <div class="col-lg-12">
            <h1 style="text-align:center; padding:40px"><strong>ADD NEW CLASS</strong></h1>
        </div> -->
    </div>

    <div class="card o-hidden my-4 border-0 shadow-lg">
        <div class="modal fade" id="new_contractor">
            <!-- <div class="row"> -->
            <div class="modal-dialog modal-dialog-centered " style="margin-left: 300px;" role="document">
                <div class="modal-content bg-custom3" style="width:1000px;">
                    <div class="modal-header" style="width:1000px;">

                    </div>
                    <div class="card-body bg-custom3">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                    <div class="card-header bg-custom1">
                                        <h1 class="h4">ADD NEW CLASS</h1>
                                    </div>

                                    <div class="card-body bg-custom3">
                                        <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Admin/insert_new_class">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <h6>&nbsp;CLASS NAME:</h6>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-1">
                                                    <input type="text" class="form-control form-control-user" name="class_name" id="class_name" placeholder="Class Name">
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="form-group row justify-content-center">
                                                <div class="col-sm-4">
                                                    <button type="button" class="btn btn-primary btn-user btn-block" id="add_btn">
                                                        <!-- <i class="fab fa-google fa-fw"></i>  -->
                                                        ADD NEW CLASS
                                                    </button>
                                                    <span id="show_error_new" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;Please check errors*</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-primary rounded-pill" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>





        <div class="card-body bg-custom3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="card bg-custom3">
                        <div class="card-header bg-custom1">
                            <h1 class="h4">CLASS LIST</h1>
                        </div>

                        <div class="card-body">
                            <div id="table_div">
                                <?php if (count($class_list) > 0) { ?>
                                    <table id="datatable" class="table table-striped" style="color:black">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Class Name</th>
                                                <th scope="col">Edit Record</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_rows_cont">
                                            <?php $count = 0;
                                            foreach ($class_list as $data) { ?>
                                                <tr>
                                                    <td scope="row" id="cont<?= $count; ?>"><?= ++$count; ?></td>
                                                    <td scope="row"><?= $data['division_name']; ?></td>
                                                    <td type="button" id="edit<?= $data['id']; ?>" class="edit" scope="row" data-toggle="modal" data-target="#edit_material"><i style="margin-left: 40px;" class="fas fa-edit"></i></td>
                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
                                <?php } else { ?>
                                    <a> No Data Available yet </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <form class="user" role="form" method="post" id="add_form" action="">
                        <div class="form-group row my-2 justify-content-center">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-primary btn-user btn-block" id="add_btn" data-toggle="modal" data-target="#new_contractor">
                                    <i class="fas fa-plus"></i>
                                    ADD NEW CLASS
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php $this->load->view('common/footer'); ?>
<script>
    $('#status').on('focusout', function() {
        var status = $('#status').val();

        if (status != "do") {
            $("#div").prop("disabled", true);
        } else {
            $("#div").prop("disabled", false);
        }
    });

    $("#status").on('change', function() {
        var account = $(this).val();
        alert(account);

        if (account == 'do') {
            $('#div_list').show();
            $('#div_list_label').show();
        } else {
            $('#div_list').hide();
            $('#div_list_label').hide();
        }

        if (account == 'dean' || account == 'hougp') {
            $('#branch_list').show();
            $('#branch_list_label').show();
        } else {
            $('#branch_list').hide();
            $('#branch_list_label').hide();
        }

    });

    $('#add_btni').on('click', function() {
        //alert('javascript working');
        $('#add_btn').attr('disabled', true);
        var validate = 0;

        var username = $('#username').val();
        var password = $('#password').val();
        var status = $('#status').val();
        var div = $('#div').val();
        var branch = $('#branch').val();
        var unit = $('#unit').val();

        if (username == '') {
            validate = 1;
            $('#username').addClass('red-border');
        }
        if (password == '') {
            validate = 1;
            $('#password').addClass('red-border');
        }
        if (status == '') {
            validate = 1;
            $('#status').addClass('red-border');
        }
          if (unit == '') {
            validate = 1;
            $('#unit').addClass('red-border');
        }
        if (div == '' && status == 'do') {
            validate = 1;
            $('#div').addClass('red-border');
        }
        if (branch == '' && status == 'hougp') {
            validate = 1;
            $('#branch').addClass('red-border');
        }
       if (branch == '' && status == 'dean') {
            validate = 1;
            $('#branch').addClass('red-border');
        }

        if (validate == 0) {
            $('#add_form')[0].submit();
        } else {
            $('#add_btni').removeAttr('disabled');
        }
    });

    $('#add_btn').on('click', function() {
        $('#add_btn').attr('disabled', true);
        var validate = 0;
        var class_name = $('#class_name').val();

        if (class_name == '') {
            validate = 1;
            $('#class_name').addClass('red-border');
        }
    
        if (validate == 0) {
            $('#add_form')[0].submit();
        } else {
            $('#add_btn').removeAttr('disabled');
        }
    });


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
</script>