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
                                    <h2>Ajouter un ou plusieur(s) employe
                                       
                                    </h2>
                                </div>
                                
                                <div class="zone-form">
                                
                                 
                                 
                                    <div class="card-body card-padding">
                                    <p class="c-black f-500"></p>
                                    <div class="form-group input_fields_wrap">
                                     <h4>Cocher la categorie concernee</h4>
                                        
                                        <?php 
                                        
                                        if(isset($structure_list_gen)){
                                          foreach($structure_list_gen as $valeur_gen){ ?>
                                             
                                             <div class="radio m-b-15">
                                                <label>
                                                <input type="radio" name="choix_cat" class="proposition" data-id="<?php echo $valeur_gen->id_sep;  ?>">
                                                <i class="input-helper"></i>
                                               <?php echo $valeur_gen->libelle_sep;  ?>
                                                </label>
                                            </div>
                                              
                                              
                                         <?php }
                                          }
                                        ?>
                                       
                                            
                                     
                                    
                                </div>
                                
                                
                                </div>
                                
                                
                            </div>
                                
                        </div>
                        
                         <br> <br>
                    </div>
                    
                       <div class="col-sm-6">
                            <div class="card" style="min-height: 500px">
                                <div class="card-header">
                                    <h2>info structure de l entreprise
                                        <small>Selectionner une categorie d employe et uploader le fichier du personnel.</small>
                                    </h2>
                                    <div id="str_name">
                                        
                                    </div>
                                </div>
                               
                                
                                <div class="zone-form">
                                   
                                    
                                    <div class="card-body card-padding">
                                    <p class="c-black f-500"></p>
                                    <div class="form-group input_fields_wrap">
                                            
                                    <div id="zone_list_valeur">
                                    	
                                        
                                         <?php 
                                        
                                        if(isset($categories_list_gen)){
                                          foreach($categories_list_gen as $valeur_gen){ ?>
                                             
                                            
                                             <div class="radio m-b-15">
                                                <label>
                                                <input type="radio" name="choix_cat_p" class="proposition_cat_p" data-id="<?php echo $valeur_gen->id_capp;  ?>">
                                                <i class="input-helper"></i>
                                               <?php echo $valeur_gen->libelle_capp;  ?>
                                                </label>
                                            </div>
                                              
                                              
                                         <?php }
                                          }
                                        ?>
                                        
                                      

      


                                    
                                </div>
                              
                                </div>
                                
                                
                            </div>
                            <div class="row" id="fichier_upload">
                            <div class="col-sm-1"></div>
                             <div class="col-sm-10">
                                    <p class="f-500 c-black m-b-20">Fichier personnel</p>


									  <div id="dropzone"><form action="administration/ajout_personnel_entreprise_ajax" method="POST" class="dropzone needsclick" id="demo-upload">

									  <div class="dz-message needsclick">
										Glisser / Deposer ou cliquer pour telecharger le fichier.<br /><font color="red">Structure du fichier excel</font><br />
										<center>
										<table border="1">
										    <th>Civilite</th><th>Nom</th><th>Prenom</th><th>Email</th><th>GSM</th>
                                            <tr>
                                                 <td>Mr</td><td>Kone</td><td>Aboubacar</td><td>kone@gmail.com</td><td>01010101</td>
                                            </tr>
                                            
                                            <tr>
                                                 <td>Mme</td><td>Miriam</td><td>Kouassi</td><td>m@gmail.com</td><td>01010101</td>
                                            </tr>
										        
										    
										</table>
										<input type="text" name="structure_en" id="structure_en">
										<input type="text" name="categorie_en" id="categorie_en">
										</center>
									  </div>

									</form></div>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                         </div>
                                
                        </div>
                    </div>
                </div>
               
                <div class="row">
       
                	<button class="btn btn-success waves-effect col-sm-4" id="ajouter">Ajouter un ou plusieurs employe(S)</button>
                </div>
                <div class="row">
                       <br> <br>
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
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/dropzone/dropzone.min.js"></script>
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
		
	
        $("#zone_list_valeur").hide();
        $("#fichier_upload").hide();
        
        
		
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
                       
                        url: '<?php echo base_url(); ?>administration/ajout_personnel_entreprise',
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
							$("#zone_list_valeur").load("<?php echo base_url('administration/categorie_list_ajax') ;?>"); 
							
							
							
							
						
							
	
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
		

        
        
        
        $( ".proposition" ).click(function() {
        
            
            var valeur=$(this).attr("data-id");
            console.log(valeur);
            $( "#str_name" ).empty();
            $( "<h4>"+valeur+"</h4>" ).appendTo( "#str_name" );
            $("#zone_list_valeur").show();
            $("#fichier_upload").show();
            $("#structure_en").val(valeur);
            
        });
        
        $( ".proposition_cat_p" ).click(function() {
        
            
            var valeur=$(this).attr("data-id");
          
            $("#categorie_en").val(valeur);
            
        });
		
		
        
});
</script>