        <style>
            /* * {
                padding: 0;
                margin: 0;
            } */

            .float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 85px;
                right: 10px;
                background-color: #c5c6cc;
                color: #FFF;
                border-radius: 50px;
                text-align: center;
                box-shadow: 2px 2px 3px #999;
            }

            .my-float {
                margin-top: 18px;
                font-size: 25px;
            }
        </style>
        <footer class="sticky-footer bg-custom1 text-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>COPYRIGHTS &copy; PNS KARSAZ WEBSITE 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Code begins here -->

        <!-- <a href="<?= base_url(); ?>ChatController?sender_id=" class="float"> -->
        <a class="float" href="<?= base_url(); ?>ChatController?sender_id=">
            <i class="fas fa-comment-dots my-float"></i>

            <a class="float">
                <a href="<?= base_url(); ?>ChatController?sender_id=" class="float"><i class="fas fa-comment-dots my-float"></i></a>
            </a>



            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">READY TO LEAVE?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">SELECT "LOGOUT" BELOW IF YOU ARE READY TO END YOUR CURRENT SESSION.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                            <a class="btn btn-primary" href="<?= base_url(); ?>User_Login/logout">LOGOUT</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- canvasjs links-->
            <script src="<?php echo base_url(); ?>assets/js/canvasjs.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/canvasjs.react.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/jquery.canvasjs.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/canvasjs.min.js"></script>

            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <!-- JS link for calender -->
            <!-- <script src="<?php echo base_url(); ?>assets/fullcalendar/lib/jquery.min.js"></script> -->
            <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

            <!-- Links for Canlender -->
            <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.css" /> -->

            <!-- <script src="<?php echo base_url(); ?>assets/fullcalendar/lib/moment.min.js"></script> -->
            <!-- <script src="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.js"></script> -->

            <!-- <script src='<?php echo base_url(); ?>assets/fullcalendar/packages/core/main.js'></script> -->
            <!-- <script src='<?php echo base_url(); ?>assets/fullcalendar/packages/interaction/main.js'></script> -->
            <!-- <script src='<?php echo base_url(); ?>assets/fullcalendar/packages/daygrid/main.js'></script> -->
            <script src='<?php echo base_url(); ?>assets/js/chat/chat.js'></script>

            <script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>
            <?php if ($this->session->flashdata('success')) : ?>
                <script>
                    Swal.fire(
                        '<?php echo $this->session->flashdata('success'); ?>',
                        '',
                        'success'
                    );
                    <?php unset($_SESSION['success']); ?>
                </script>
            <?php endif; ?>

            <?php if ($this->session->flashdata('failure')) : ?>
                <script>
                    Swal.fire(
                        '<?php echo $this->session->flashdata('failure'); ?>',
                        '',
                        'error'
                    );
                    <?php unset($_SESSION['failure']); ?>
                </script>
            <?php endif; ?>



            </body>

            </html>