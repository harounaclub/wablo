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
                        <h2 class="pull-left">Configuration package w@blo culture</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Basic Elements</a></li>
                        </ul>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card" style="min-height: 500px">
                                <div class="card-header">
                                    <h2>Information generale sur le package
                                    
                                    </h2>
                                </div>
        
                                <div class="card-body card-padding">
                                    <p class="c-black f-500">Nom du package</p>
                                    <div class="form-group">
                                        <div class="fg-line">

                                            <input type="text" class="form-control input-sm" id="nom_package_id" placeholder="Nom du package">

                                        </div>
                                    </div>

                                    <p class="c-black f-500">Description</p>
                                    <div class="form-group">
                                        <div class="fg-line">

                                            <input type="text" class="form-control input-sm" id="description_id" placeholder="Description du package">

                                        </div>
                                    </div>
        
                                    <p class="c-black f-500">Liste des packages utilises</p>
                                   
                                   <div class="checkbox m-b-15">
                                        <label>
                                            <input type="checkbox" id="module1" value="1">
                                            <i class="input-helper"></i>
                                            Test utilite des valeurs d'entreprises
                                        </label>
                                    </div>
                                    
                                    <div class="checkbox m-b-15">
                                        <label>
                                            <input type="checkbox" id="module2" value="1">
                                            <i class="input-helper"></i>
                                            Evaluation Respect des valeurs d'entreprises
                                        </label>
                                    </div>
                                    
                                    <div class="checkbox m-b-15">
                                        <label>
                                            <input type="checkbox" id="module3" value="1">
                                            <i class="input-helper"></i>
                                            Evaluation Respect des valeurs d'entreprises
                                        </label>
                                    </div>
                                    
                                      <div class="checkbox m-b-15">
                                        <label>
                                            <input type="checkbox" id="module4" value="1">
                                            <i class="input-helper"></i>
                                            Evaluation du potentiel de l'employe
                                        </label>
                                    </div>
                                    
                                    <p class="c-black f-500">Montant package</p>
                                    <div class="form-group">
                                        <div class="fg-line">

                                            <input type="text" class="form-control input-sm" id="montant_package_id" placeholder="Description du package">

                                        </div>
                                    </div>
                                  
        
                                   
                                </div>
                            </div>
                                
                        </div>
                        <div class="col-sm-2"></div>
                        
                
                    </div>
                    <div class="row">
						<div class="col-sm-4"></div>
                        <button class="btn btn-success waves-effect col-sm-4" id="ajouter_id">Ajouter</button>
                        <div class="col-sm-4"></div>
                    </div>
                    
                    <div class="row">
						</br>
                    </div>
                     
                    <div class="row">
						 <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Liste des packages
                                        <small>
                                        </small>
                                    </h2>
                                </div>
                               
                                <div class="bloc_package">
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th data-column-id="sender">Package</th>
                                                
                                                <th data-column-id="sender">Module 1</th>
                                                <th data-column-id="sender">Module 2</th> 
                                                <th data-column-id="sender">Module 3</th>
                                                <th data-column-id="sender">Module 4</th>
                                                <th data-column-id="sender">montant</th>
                                                
                                                <th data-column-id="sender">Actions</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           <?php 
											  if(isset($package_list)){
												  foreach($package_list as $package_user){ ?>
												  
												  <tr>
													<td><?php echo $package_user->libelle_pkg; ?></td>
													
													<td><?php
														    if($package_user->module_1 == 1){?>
														    
														    <button class="btn btn-success waves-effect">
                                                            <i class="zmdi zmdi-check"></i>
                                                            </button>
																
												     <?php  }else{ ?>
                                                        
												            <button class="btn btn-danger waves-effect">
                                                            <i class="zmdi zmdi-close"></i>
                                                            </button>
                                                            
												   <?php    }
																					
												     ?></td>
												     
												     <td><?php
														    if($package_user->module_2 == 1){?>
														    
														    <button class="btn btn-success waves-effect">
                                                            <i class="zmdi zmdi-check"></i>
                                                            </button>
																
												     <?php  }else{ ?>
                                                        
												            <button class="btn btn-danger waves-effect">
                                                            <i class="zmdi zmdi-close"></i>
                                                            </button>
                                                            
												   <?php    }
																					
												     ?></td>
												     
												     <td><?php
														    if($package_user->module_3 == 1){?>
														    
														    <button class="btn btn-success waves-effect">
                                                            <i class="zmdi zmdi-check"></i>
                                                            </button>
																
												     <?php  }else{ ?>
                                                        
												            <button class="btn btn-danger waves-effect">
                                                            <i class="zmdi zmdi-close"></i>
                                                            </button>
                                                            
												   <?php    }
																					
												     ?></td>
												     
												     <td><?php
														    if($package_user->module_4 == 1){ ?>
														    
														    <button class="btn btn-success waves-effect">
                                                            <i class="zmdi zmdi-check"></i>
                                                            </button>
																
												     <?php  }else{ ?>
                                                        
												            <button class="btn btn-danger waves-effect">
                                                            <i class="zmdi zmdi-close"></i>
                                                            </button>
                                                            
												   <?php    }
																					
												     ?></td>
													<td><?php echo $package_user->montant_totale; ?></td>
													
													<td>
													
													<button class="btn btn-danger btn-icon waves-effect waves-circle waves-float supprim" data-id="<?php echo $package_user->id_pkg; ?>"><i class="zmdi zmdi-close"></i></button>
													</td>


												</tr>
													  
													  
										   <?php  }
											  }
											?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                             </div>
                             
                            </div>
                        </div>
                    </div>
                    
                     <div class="row">
						<div class="col-sm-12"><br></div>
                        
                     
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



<script type="text/javascript">
    $(document).ready(function() {
		
      console.log("ready");
		        
     });
    
     $( "#ajouter_id" ).click(function() {
         

         
         var nom_package=$( "#nom_package_id" ).val();
         var description_package=$( "#description_id" ).val();
         var module1=$( "#module1" ).val();
         var module2=$( "#module2" ).val();
         var module3=$( "#module3" ).val();
         var module4=$( "#module4" ).val();
         var montant_package=$( "#montant_package_id" ).val();
         
      
//         console.log(nom_package);
//         console.log(description);
//         console.log(module1);
//         console.log(module2);
//         console.log(module3);
//         console.log(module4);
         
         	$.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>admin/ajout_package_souscription',
                        data: { 
							nom_package: nom_package,
                            description_package: description_package,
                            module1: module1,
                            module2: module2,
                            module3: module3,
                            module4: module4,
                            montant_package: montant_package,
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
							$(".bloc_package").empty();
							$(".bloc_package").load("<?php echo base_url('admin/package_list_ajax') ;?>"); 
							
							
							
							
							
							
	
                        },
                        complete: function(){
                            
                           // $("#loading_gif7").hide();
                           
                        },
                        beforeSend: function(){
							
							
							 //$("#loading_gif7").show();
							
                        },
                        
                         error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                          }

             });
         
         
         
       });
       
       $( ".supprim" ).on("click",function() {
			
			
			var id_ajax=$(this).data("id");
		  
			
			$.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>admin/delete_package_ajax',
                        data: { 
							id_ajax: id_ajax, 	
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
							$(".bloc_package").empty();
							 $(".bloc_package").load("<?php echo base_url('admin/package_list_ajax') ;?>"); 
							
							swal("Succes!", "Suppression effectue avec succes !", "success");
							
							
	
                        },
                        complete: function(){
                            
                           // $("#loading_gif7").hide();
                           
                        },
                        beforeSend: function(){
							
							
							 //$("#loading_gif7").show();
							
                        },
                        
                         error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                          }

             });
		});
</script>