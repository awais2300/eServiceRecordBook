<?php $this->load->view('Admin/common/header'); ?>
<style>
    .red-border {
        border: 1px solid red !important;
    }
</style>

<div class="container">

    <div class="card o-hidden my-4 sborder-0 shadow-lg">
        <div class="card-body bg-custom3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Admin/update_user/<?= $users_data['id'];?>">
                        <div class="card">
                            <div class="card-header bg-custom1">
                                <h1 class="h4 text-white">EDIT USER</h1>
                            </div>

                            <div class="card-body bg-custom3">

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;EDIT USERNAME:</h6>
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;EDIT PASSWAORD:</h6>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="USERNAME*" value="<?= $users_data['username']; ?>">
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="PASSWORD*" value="<?= $users_data['password']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;ACCOUNT TYPE:</h6>
                                    </div>
                                     <?php if($users_data['acct_type'] == 'do'){?>
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;DIVISION:</h6>
                                    </div>
                                <?php }elseif($users_data['acct_type'] == 'dean' || $users_data['acct_type'] == 'hougp'){ ?>
                                <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;BRANCH:</h6>
                                    </div>
                                <?php } ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <select class="form-control rounded-pill" name="status" id="status" data-placeholder="Select Controller" style="font-size: 0.8rem; height:50px;" readonly>
                                            <option class="form-control form-control-user" value="<?= $users_data['acct_type']; ?>"><?= $users_data['acct_type']; ?></option>
                                        </select>
                                    </div>
                                    <?php if($users_data['acct_type'] == 'do'){?>
                                    <div class="col-sm-6 mb-1">
                                        <select class="form-control rounded-pill" name="div" id="div" style="font-size: 0.8rem; height:50px;" readonly>
                                            <option class="form-control form-control-user" value="<?= $users_data['division']; ?>"><?= $users_data['division']; ?></option>
                                        </select>
                                    </div>
                                    <?php }elseif ($users_data['acct_type'] == 'dean' || $users_data['acct_type'] == 'hougp') {?>
                                         <div class="col-sm-6 mb-1">
                                        <select class="form-control rounded-pill" name="branch" id="branch" data-placeholder="Select Controller" style="font-size: 0.8rem; height:50px;">
                                             <option class="form-control form-control-user" value="">SELECT BRANCH</option>
                                    <?php foreach ($branches as $data) { ?>
                                                <option class="form-control form-control-user" value="<?= $data['branch_name'] ?>" <?= ($data['branch_name'] == $users_data['branch'])?'selected':'' ?>> <?= $data['branch_name'] ?> </option>
                                            <?php } ?>

                                        </select>
                                    </div>

                                <?php } ?>

                                </div>

                                   <div class="form-group row">
                                   
                                    <div class="col-sm-12 mb-1">
                                        <h6>&nbsp;SCHOOL:</h6>
                                    </div>
                                </div>
                                           <div class="form-group row">
                                   
                                    <div class="col-sm-12 mb-1">
                                        <select class="form-control rounded-pill" name="unit" id="unit" data-placeholder="Select ship" style="font-size: 0.8rem; height:50px;">
                                            <option class="form-control form-control-user" value="">SELECT SCHOOL</option>
                                            <?php foreach ($units as $data) { ?>
                                                <option class="form-control form-control-user" value="<?= $data['unit_name'] ?>" <?=($data['unit_name']== $users_data['unit'])?'selected':'' ?>> <?= $data['unit_name'] ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-custom1">
                                <h1 class="h4 text-white">UPDATE PERSONAL DATA(OPTIONAL)</h1>
                            </div>

                            <div class="card-body bg-custom3">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;FULL NAME:</h6>
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;MOBILE NO :</h6>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="FULL  NAME" value="<?= $users_data['full_name']; ?>">
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="MOBILE NO" value="<?= $users_data['phone']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;EMAIL:</h6>
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;ADDRESS:</h6>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="EMAIL ID" value="<?= $users_data['email']; ?>">
                                    </div>

                                    <div class="col-sm-6 mb-1">
                                        <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="ADDRESS" value="<?= $users_data['address']; ?>">
                                    </div>


                                </div>

                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary btn-user btn-block" id="add_btni">
                                            SAVE
                                        </button>
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
        if (div == '' && status == 'do') {
            validate = 1;
            $('#div').addClass('red-border');
        }
       if (unit == '') {
            validate = 1;
            $('#unit').addClass('red-border');
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