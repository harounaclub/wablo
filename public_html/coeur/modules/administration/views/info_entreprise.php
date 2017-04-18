<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:59 GMT -->
<?php 
            require('_header.php');
        ?> 
    <body class="layout-fixed-left-menu left-sidebar-toggled show-welcome-message">
        <?php 
            require('_header_left_sidebar.php');
        ?> 
        
        <!-- Right Side Bar -->
        <?php 
            require('_aside_right_sidebar.php');
        ?> 

        <section id="main">
            <!-- Main Nav Bar -->
            <?php 
            require('_menu_sidebar_left.php');
        ?> 
        
            <!-- Content Section START -->
            <section id="content">
                <div class="container">
                    <div class="block-header clearfix">
                        <h2 class="pull-left">Informations sur l entreprise</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Basic Elements</a></li>
                        </ul>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="card" style="min-height: 500px">
                                <div class="card-header">
                                    <h2>Informations generale
                                        
                                    </h2>
                                </div>
        
                                 <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-home"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Raison sociale</label>
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Adresse</label>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Email</label>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Telephone</label>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                               
                              
                  
                                
                            </div>
                            
                             <div class="row">
                                 <div class="col-sm-4">
                                  
                                  <button class="btn btn-success waves-effect">Modifier</button>
                                  
                                 </div>
                                   
                             </div>
                            
                            
                            
                                
                        </div>
                    </div>
                </div>

            </section>
            <!-- Content Section END -->
        </section>

        <!-- Footer -->
        <footer id="footer">
            Copyright &copy; 2016 Admin Dashboard


        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <!-- Javascript Libraries -->
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/Waves/dist/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/autosize/dist/autosize.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
	</body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:59 GMT -->
</html>