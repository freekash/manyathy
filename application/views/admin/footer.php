
	
	<!-- START FOOTER TOP -->
    <footer class="footer-top">
        <div class="container-fluid">
            <div class="row ml-auto">
               
                <!-- end col -->
               
                <!-- end col -->
                <div class="col-lg-7 col-md-4 col-sm-6 col-12 footer-widget">
                    <div class="copyright text-right">
                        <p>&copy; 2018 MBS | All Rights Reserved</p>
                        <p>Best By <a href="#">Sanath L S @MBS</a>
                        </p>
                    </div>
                    <!--- END FOOTER COPYRIGHT -->
                </div>
                <!-- end col -->
			</div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
        
        
         <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url() ?>admin/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
        
        
        
    </footer>
     <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- END FOOTER TOP -->
 <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url();?>dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>dashboard/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>dashboard/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>dashboard/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url();?>dashboard/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url();?>dashboard/js/demo/chart-area-demo.js"></script>

  </body>

</html>
