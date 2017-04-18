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
                        <h2 class="pull-left">Configuration w@blo culture</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Basic Elements</a></li>
                        </ul>
                    </div>
                    
                    
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="min-height: 500px">
                                <div class="card-header">
                                    <h2>Ajouter une valeur
                                        <small>Vous pouvez ajouter une ou plusieurs valeurs.</small>
                                    </h2>
                                </div>
                                
                                <div class="zone-form">
                                
                                 
                                 
                                    <div class="card-body card-padding">
                                    <p class="c-black f-500"></p>
                                    <div class="form-group input_fields_wrap">
                                     <h4>cocher un ou plusieurs valeurs proposees</h4>
                                        
                                        <?php 
                                        
                                        if(isset($valeur_list_gen)){
                                          foreach($valeur_list_gen as $valeur_gen){ ?>
                                             
                                             <div class="checkbox m-b-15">
                                                <label>
                                                    <input type="checkbox" class="proposition" data-id="<?php echo $valeur_gen->libelle_va;  ?>">
                                                    <i class="input-helper"></i>
                                                    <?php echo $valeur_gen->libelle_va;  ?>
                                                </label>
                                             </div>
                                              
                                              
                                         <?php }
                                          }
                                        ?>
                                        <h4>Ou creer vos propre valeurs ...</h4>
                                            
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en1"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_1">+</button>
											</div>
                                        </div>
                                        
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en2"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_2">+</button>
											</div>
                                        </div>
                                        
                                        
                                         <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en3"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_3">+</button>
											</div>
                                        </div>
                                        
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en4"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_4">+</button>
											</div>
                                        </div>
                                        
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en5"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_5">+</button>
											</div>
                                        </div>
                                        
                                        
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en6"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_6">+</button>
											</div>
                                        </div>
                                        
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en7"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_7">+</button>
											</div>
                                        </div>
                                        
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en8"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_8">+</button>
											</div>
                                        </div>
                                        
                                        <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="Ajouter valeur" id="valeur_en9"></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-success waves-effect" id="btn_9">+</button>
											</div>
                                        </div>
                                      
                                        
                                    

                                        
                                        

      


                                    
                                </div>
                                
                                
                                </div>
                                
                                
                            </div>
                                
                        </div>
                    </div>
                    
                       <div class="col-sm-6">
                            <div class="card" style="min-height: 500px">
                                <div class="card-header">
                                    <h2>Listes des valeurs d entreprise
                                        <small>Cliquer sur la croix en rouge pour supprimer.</small>
                                    </h2>
                                </div>
                                
                                <div class="zone-form">
                                   
                                    
                                    <div class="card-body card-padding">
                                    <p class="c-black f-500"></p>
                                    <div class="form-group input_fields_wrap">
                                            
                                    <div id="zone_list_valeur">
                                    	
                                        
                                        <?php
										 if(isset($valeur_list)){
											 
										  foreach($valeur_list as $infos){ ?>
										  
										  <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="<?php echo $infos->libelle_vaen;  ?>" disabled></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-danger waves-effect supprim" data-id="<?php echo $infos->id_vaen; ?>">x</button>
											</div>
                                        </div>
											  
										  <?php }
											 
										 }
										  
										
										?>
                                        
                                       </div> 

      


                                    
                                </div>
                              
                                </div>
                                
                                
                            </div>
                                
                        </div>
                    </div>
                </div>
               
                <div class="row">
       
                	<button class="btn btn-success waves-effect col-sm-4" id="ajouter">Ajouter une ou plusieurs valeur(S)</button>
                </div>
                <div class="row">
                       <br>
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
		
		var val_en_item="";
		var list_val_en="";
		var compteur=0;
   
		for (var i = 2; i < 10; i++) {
		    $("#valeur_en"+i).hide();
			$("#btn_"+i).hide();
		}
		
		$( "#btn_1" ).click(function() {$("#valeur_en2").show();$("#btn_2").show();});
		$( "#btn_2" ).click(function() {$("#valeur_en3").show();$("#btn_3").show();});
		$( "#btn_3" ).click(function() {$("#valeur_en4").show();$("#btn_4").show();});
		$( "#btn_4" ).click(function() {$("#valeur_en5").show();$("#btn_5").show();});
		$( "#btn_5" ).click(function() {$("#valeur_en6").show();$("#btn_6").show();});
		$( "#btn_6" ).click(function() {$("#valeur_en7").show();$("#btn_7").show();});
		$( "#btn_7" ).click(function() {$("#valeur_en8").show();$("#btn_8").show();});
		$( "#btn_8" ).click(function() {$("#valeur_en9").show();});
		
		$( "#ajouter" ).click(function() {
			
			for (var i = 1; i < 10; i++) {
	
		       var val_en_item=$("#valeur_en"+i).val();
			   if(val_en_item != ""){
				   
				   compteur=compteur+1;
				   list_val_en=list_val_en+val_en_item+"@";
				   
				   
			   }

		  }
			
		console.log(list_val_en);
			
		  if(compteur ==0){
				   
				   sweetAlert("Oops...", "Au moins une valeur d entreprise doit etre renseigne !", "error");
				   
			   }else{
				   
				    $.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>administration/ajout_valeur_entreprise',
                        data: { 
							liste_valeur_entreprise: list_val_en, 
						
							
						},
                        dataType: 'html',

                        success: function(json) {
							
							
							
							console.log(json);
							
							for (var i = 2; i < 10; i++) {
								$("#valeur_en"+i).hide();
								$("#btn_"+i).hide();
							}
							for (var i = 1; i < 10; i++) {
								$("#valeur_en"+i).val("");
								
							}
							
							list_val_en="";
							
							$("#zone_list_valeur").empty();
							$("#zone_list_valeur").load("<?php echo base_url('administration/valeur_list_ajax') ;?>"); 
							
							
							
							
						
							
	
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
				   
				   
			   }
			
		});
		
		$( ".supprim" ).on("click",function() {
			
			
			var id_ajax=$(this).data("id");
			
			
		  
			
			$.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>administration/delete_valeur_ajax',
                        data: { 
							id_ajax: id_ajax, 	
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
							$("#zone_list_valeur").empty();
							$("#zone_list_valeur").load("<?php echo base_url('administration/valeur_list_ajax') ;?>"); 
							
							
							
							
							
	
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
        
        
        
        $( ".proposition" ).click(function() {
        
            
            var valeur=$(this).attr("data-id");
            $.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>administration/ajout_valeur_individuel',
                        data: { 
							valeur: valeur, 
						
							
						},
                        dataType: 'html',

                        success: function(json) {
							
							
							
							console.log(json);
							
							for (var i = 2; i < 10; i++) {
								$("#valeur_en"+i).hide();
								$("#btn_"+i).hide();
							}
							for (var i = 1; i < 10; i++) {
								$("#valeur_en"+i).val("");
								
							}
							
							list_val_en="";
							
							$("#zone_list_valeur").empty();
							$("#zone_list_valeur").load("<?php echo base_url('administration/valeur_list_ajax') ;?>"); 
							
							
							
							
						
							
	
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
		
		
        
});
</script>