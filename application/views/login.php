<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-DOSSIER </title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
  .red-border {
    border: 1px solid red !important;
  }

  /* .img-main-login { */
  /* background: url('<?= base_url() ?>assets/img/123.jpg'); */
  /* background-position: center; */
  /* background-position: top; //*/
  /* background-size: cover; //*/
  /* background-repeat: no-repeat; */
  /* max-width: 100%; */
  /* max-height: 100%; */
  /* background-color: rgb(0, 1, 84); */
  /* opacity: 0.9; */
  /* display: block; //*/
  /* remove extra space below image //*/
  /* } */

  /* .img-logo { */
  /* background: url('<?= base_url() ?>assets/img/8.png'); */
  /* background-position: center; //*/
  /* background-size: cover; */
  /* height: 170px; */
  /* width: 133px; */
  /* filter: blur(1px); //*/
  /* border-radius: 25px; //*/
  /* } */

  .img-bg {
    background-image: url('<?= base_url() ?>assets/img/bg-image.jpg');
    background-position: center;
    background-color: #303030 !important;
    background-size: cover;
    width: 100%;
  }
</style>

<body class="row bg-custom1 img-bg" style="overflow: hidden;">
  <div></div>
  <div class="container">

    <!--  </div>
 -->
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <h1 class="h1 text-grey-900 " style="margin-top:35px; padding:0%; margin-bottom:0px;color:black; text-align:center;text-decoration:underline;font-family:'Apple Chancery';color:navy;font-size:50px"><strong> E-SERVICE RECORD BOOK </strong></h1>
      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card bg-custom3 o-hidden border-0 shadow-lg my-5" style="background: transparent !important;">
          <!-- <div class="card-body p-0" style=""> -->
          <!-- Nested Row within Card Body -->
          <div class="row justify-content-center">
            <div class="img-logo"></div>
          </div>
          <div class="row">
            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
            <div class="col-lg-2"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h2 mb-4" style="color:black"><strong> </strong></h1>
                </div>
                <form class="user" role="form" id="login_form" method="post" action="<?php echo base_url(); ?>User_Login/login_process">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="ENTER USERNAME">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="PASSWORD">
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-user" name="role" id="role" style="height:50px;padding:10px">
                      <option value="">APPOINTMENT</option>
                      <option value="co">COMMANDANT</option>
                      <option value="exo">EXECUTIVE OFFICER</option>
                      <option value="ct">DIRECTOR OF STUDIES</option>
                      <option value="cao">OFFICER INCHARGE</option>
                      <option value="sqc">SENIOR DIVISIONAL OFFICER</option>
                      <option value="do">DIVISIONAL OFFICER</option>
                      <option value="smo">SENIOR MEDICAL OFFICER</option>

                      <!-- <option value="joto">JOTO</option>
                      <option value="cao_sec">CAO SEC - CAO Secretary</option>
                      <option value="dean">DEAN</option>
                      <option value="ctmwt">Captain MWT</option>
                      <option value="hougp">HOUGP</option> -->

                    </select>
                  </div>
                  <!-- <div class="form-group row">

                    <label class="custom-control radio-inline small">
                      <input type="radio" value="PO" name="optradio">
                      <div style="float:right; margin-left:5px;">DO</div>
                    </label>

                    <label class="custom-control radio-inline small">
                      <input type="radio" value="SO_STORE" name="optradio">
                      <div style="float:right; margin-left:5px;">JOTO</div>
                    </label>

                    <label class="custom-control radio-inline small">
                      <input type="radio" value="SO_CW" name="optradio">
                      <div style="float:right; margin-left:5px;">Captain Training</div>
                    </label>

                    <label class="custom-control radio-inline small">
                      <input type="radio" value="SO_RECORD" name="optradio">
                      <div style="float:right; margin-left:5px;">Commanding Officer</div>
                    </label>
                    <div style="float:right; margin-left:20px;"></div>
                    <label class="custom-control radio-inline small">
                      <input type="radio" value="admin" name="optradio">
                      <div style="float:right; margin-left:5px;">EXO</div>
                    </label>
                    <label class="custom-control radio-inline small">
                      <input type="radio" value="admin" name="optradio">
                      <div style="float:right; margin-left:5px;">Squarden Commander</div>
                    </label>

                  </div> -->
                  <span style="color: red; display: none;font-size: 12px" id="Account_error">
                    *PLEASE SELECT ACCOUNT TYPE
                  </span>

                  <hr>
                  <button type="button" class="btn btn-primary btn-user btn-block" id="login_btn">
                    <!--   <i class="fab fa-google fa-fw"></i>  -->
                    LOGIN
                  </button>

                </form>
                <hr>
                <br><br><br>

              </div>
            </div>
            <div class="col-lg-2"></div>
          </div>

          <!-- till here -->
        </div>
        <!-- DIv 2 -->



      </div>

    </div>

  </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <script>
    $('#login_btn').on('click', function() {
      // alert('javascript working');
      $('#login_btn').attr('disabled', true);
      var validate = 0;

      var user_type = document.getElementsByName("optradio");

      var username = $('#username').val();
      var password = $('#password').val();
      var role = $('#role').val();

      if (username == '') {
        validate = 1;
        $('#username').addClass('red-border');
      }
      if (password == '') {
        validate = 1;
        $('#password').addClass('red-border');
      }
      if (role == 'select role') {
        validate = 1;
        $('#password').addClass('red-border');
      }
      // if (user_type[0].checked != true && user_type[1].checked != true && user_type[2].checked != true && user_type[3].checked != true && user_type[4].checked != true && user_type[5].checked != true) {
      //   validate = 1;
      //   $('#Account_error').show();
      // }

      if (validate == 0) {
        $('#login_form')[0].submit();
      } else {
        $('#login_btn').removeAttr('disabled');
      }
    });
  </script>

  <script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>
  <?php if ($this->session->flashdata('success')) : ?>
    <script>
      Swal.fire(
        '<?php echo $this->session->flashdata('success'); ?>',
        '',
        'success'
      );
    </script>
    <?php unset($_SESSION['success']); ?>
  <?php endif; ?>

  <?php if ($this->session->flashdata('failure')) : ?>
    <script>
      Swal.fire(
        '<?php echo $this->session->flashdata('failure'); ?>',
        'Invalid username or password',
        'error'
      );
    </script>
    <?php unset($_SESSION['failure']); ?>
  <?php endif; ?>
</body>

</html>