
        <!-- START FOOTER -->
        <div class="container-fluid container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright © 2018</span>
              <span class="font-montserrat">Qola</span>.
              <span class="hint-text">All rights reserved.</span>
              <!-- <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a> -->
                        </span>
            </p>
            <div class="small no-margin pull-right sm-pull-reset">
                <!-- <img alt="" class="m-t-5" data-src="assets/img/qola_logo.png" data-src-retina="assets/img/qola_logo_2x.png" height="30" src="assets/img/qola_logo.png" width="30"> -->
              <!-- <a href="#">Hand-crafted</a>
              <span class="hint-text">&amp; Made with Love ®</span> -->
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END FOOTER -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    
    <!-- BEGIN VENDOR JS -->
        <!-- BEGIN VENDOR JS -->
    <script src="<?php echo url('assets/plugins/pace/pace.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/jquery/jquery-1.11.1.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/modernizr.custom.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/tether/js/tether.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/jquery/jquery-easy.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/jquery-unveil/jquery.unveil.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/jquery-bez/jquery.bez.min.js'); ?>"></script>
    <script src="<?php echo url('assets/plugins/jquery-ios-list/jquery.ioslist.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
    <script src="<?php echo url('assets/plugins/jquery-actual/jquery.actual.min.js'); ?>"></script>
    <script src="<?php echo url('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js'); ?>"></script>
    <script src="<?php echo url('assets/js/tableExport.js'); ?>"></script>
    <script src="<?php echo url('assets/js/jquery.base64.js'); ?>"></script>
    <script src="<?php echo url('assets/js/html2canvas.js'); ?>"></script>
    <script src="<?php echo url('assets/js/sprintf.js'); ?>"></script>
    <script src="<?php echo url('assets/js/jspdf.js'); ?>"></script>
    <script src="<?php echo url('assets/js/base64.js'); ?>"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo url('pages/js/pages.js'); ?>" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo url('assets/js/scripts.js'); ?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script type="text/javascript">
      
      onClick ="$('#tableID').tableExport({type:'pdf',escape:'false'});"
      $("a.filter").click(function(){
          $(".showfilter").toggle();
      });
    </script>
  </body>
</html>