<?php if ($this->session->userdata('acct_type') == 'Admin') {
    $this->load->view('Admin/common/header');
} else if ($this->session->userdata('acct_type') == 'do') {
    $this->load->view('do/common/header');
} else if ($this->session->userdata('acct_type') == 'cao') {
    $this->load->view('cao/common/header');
} else if ($this->session->userdata('acct_type') == 'cao_sec') {
    $this->load->view('cao_sec/common/header');
} else if ($this->session->userdata('acct_type') == 'joto') {
    $this->load->view('joto/common/header');
} else if ($this->session->userdata('acct_type') == 'smo') {
    $this->load->view('smo/common/header');
} else if ($this->session->userdata('acct_type') == 'ct') {
    $this->load->view('ct/common/header');
} else if ($this->session->userdata('acct_type') == 'co') {
    $this->load->view('co/common/header');
}  else if ($this->session->userdata('acct_type') == 'ct') {
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
}?>
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

                    <div class="card">
                        <div class="card-header bg-custom1">
                            <h1 class="h4 text-white">CHANGE PASSWORD</h1>
                        </div>

                        <div class="card-body bg-custom3">
                            <form class="user" role="form" style="" method="post" id="add_form" action="<?= base_url(); ?>User_Login/change_password_process">
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6 mb-1">
                                        <input type="password" class="form-control form-control-user" id="new_password" name="new_password" placeholder="NEW PASSWORD*">
                                    </div>

                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6 mb-1">
                                        <input type="password" class="form-control form-control-user" id="confirm_password" name="confirm_password" placeholder="CONFIRM PASSWORD*">
                                    </div>

                                </div>
                                <div id="error" class="" style="color: red;margin-left: 400px;display: none;">PASSWORDS DONOT MATCH!</div>
                                <br>
                                <div class="form-group row justify-content-center">

                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary btn-user btn-block" id="add_btni">
                                            <!-- <i class="fab fa-google fa-fw"></i>  -->
                                            UPDATE
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
</div>

</div>
<?php $this->load->view('common/footer'); ?>
<script>
    $('#add_btni').on('click', function() {
        //alert('javascript working');
        $('#add_btn').attr('disabled', true);
        var validate = 0;

        var new_password = $('#new_password').val();
        var confirm_password = $('#confirm_password').val();


        if (new_password == '') {
            validate = 1;
            $('#new_password').addClass('red-border');
        }
        if (confirm_password == '') {
            validate = 1;
            $('#confirm_password').addClass('red-border');
        }
        if (confirm_password != new_password) {
            validate = 1;
            $('#new_password').addClass('red-border');
            $('#confirm_password').addClass('red-border');
            $('#error').show();
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