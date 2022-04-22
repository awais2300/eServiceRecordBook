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

<div class="container-fluid my-4">
    <!-- <div class="row" style="background:<?= base_url(); ?>assets/img/img3.jpg"> -->
    <div class="row">
        <div class="col-lg-6">
            <h1 class="h3 mb-0 text-black-800"><strong>WELCOME DIVISIONAL OFFICER</strong></h1>
        </div>
        
    </div>
    <hr>
    <h1 class="h3 mb-0 text-black-800"><strong>SCHOOL: <?= $this->session->userdata('unit_name');?> </strong></h1>
    <hr>
    <h1 class="h3 mb-0 text-black-800"><strong>CLASS: <?= $this->session->userdata('division') ?></strong></h1>
</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
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
</script>
<script src="<?= base_url('assets/js/chat/chat.js'); ?>"></script>