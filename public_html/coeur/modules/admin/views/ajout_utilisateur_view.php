<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    

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
                        <h2 class="pull-left">Informations sur l'administrateur</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Tableau de bords</a></li>
                          
                            <li><a href="#">Ajout un administrateur</a></li>
                        </ul>
                    </div>
                   
                    <div class="row">
                       <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card" style="min-height: 200px">
                                <div class="card-header">
                                    <h2>Informations generale
                                        
                                    </h2>
                                </div>
                          <form action="?" method="POST">
                                 <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-home"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" id="nom" data-validation="required">
                                            <label class="fg-label">Nom(s)</label>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control"  id="prenom" data-validation="required">
                                            <label class="fg-label">Prenom(s)</label>
                                           
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control"  id="email" required>
                                            <label class="fg-label">Email</label>
                                           
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control"  id="tel">
                                            <label class="fg-label">Telephone fixe</label>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                  <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" id="cel" required>
                                            <label class="fg-label">Telephone mobile</label>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="col-sm-4">
                                    <div class="select">
									<select class="form-control" id="id_profil">
									<option value="">Selectionner le profil</option>
									<option value="1">Gestionnaire</option>
									<option value="2">Configuration</option>
									<option value="3">Souscription</option>
									<option value="4">Informaticien</option>
									</select>
									</div>
                                </div>
                                
                          
                            </div>
                               
                              
                  
                                
                            </div>
                           
                           </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5"></div>
                            <div class="col-sm-2">
                           	 <center>
                            	 <input type="submit" class="btn md-bg-teal waves-effect" value="Ajouter" id="valider">
                             </center>
                            </div>
                            </form>
                            <div class="col-sm-5"></div>
                            
                             <div class="row">
                                 <div class="col-sm-4">
                                  
                                 
                                  
                                 </div>
                                   
                             </div>
                            
                            
                            
                                
                        
                    </div>
                </div>

            </section>
              <section id="content" class="user_list">
                <div class="container">
                    <div class="block-header clearfix">
                       

                       
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Liste des administrateurs
                                        <small>
                                        </small>
                                    </h2>
                                </div>
        
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th data-column-id="id" data-type="numeric">ID</th>
                                                <th data-column-id="sender">Nom & prenom</th>
                                                <th data-column-id="sender">Tel /cel </th>
                                                <th data-column-id="sender">Email / login </th>
                                                <th data-column-id="sender">Mot de passe</th>
                                                <th data-column-id="sender">Profil</th>
                                                
                                                <th data-column-id="sender">Actions</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           <?php 
											  if(isset($user_list)){
												  foreach($user_list as $info_user){ ?>
												  
												  <tr>
													<td><?php echo $info_user->id_us; ?></td>
													<td><?php echo $info_user->nom_us." ".$info_user->prenom_us; ?></td>
													<td><?php
														    if($info_user->telephone_fixe_us == ""){
																echo $info_user->telephone_mobile_us;
															}else{
																echo $info_user->telephone_fixe_us." / ".$info_user->telephone_mobile_us; 
															}
																					
														?></td>
													<td><?php echo $info_user->email_us; ?></td>
													<td><?php echo $info_user->pass_us; ?></td>
													<td><?php 
                                                        $profil = array(1 => 'gestionnaire', 'configuration', 'souscription','informaticien');
                                                        $profil_id=$info_user->id_profil;
                                                             echo $profil[$profil_id];
                                                        ?></td>
													<td>
													<button class="btn btn-success btn-icon waves-effect waves-circle waves-float modiff" data-id="<?php echo $info_user->id_us; ?>"><i class="zmdi zmdi-more-vert"></i></button>
													<button class="btn btn-danger btn-icon waves-effect waves-circle waves-float supprim" data-id="<?php echo $info_user->id_us; ?>"><i class="zmdi zmdi-close"></i></button>
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

                <p>Chargement en cours...</p>
            </div>
        </div>
        
        <!-- Javascript Libraries -->
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/jquery/dist/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/chosen/chosen.jquery.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/Waves/dist/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/autosize/dist/autosize.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
	</body>
	<script type="text/javascript">
		$( document ).ready(function() {
			
			console.log( "ready!" );
			
		});
		
		$( "#valider" ).click(function() {
			
		    var nom=$("#nom").val();
			var prenom=$("#prenom").val();
			var email=$("#email").val();
			var cel=$("#cel").val();
			var tel=$("#tel").val();
			var id_profil=$("#id_profil").val();
			var vide="";
			var field_error="";
			
			if(nom == "" || prenom == "" || email == "" || cel == "" || id_profil == ""){
				
				 if(nom == ""){
					 
					 field_error="nom";
				 }else{
					 if(prenom == ""){
						 field_error="prenom";
					 }else{
						 if(email == ""){
							 field_error="email";
						 }else{
							 if(cel == ""){
								field_error="Telephone mobile";
							 }else{
								 
								 if(id_profil ==""){
									 
									 field_error="profil";
								 }
							 }
						 }
					 }
				 }
				
				console.log(field_error);
				
				sweetAlert("Oops...", "le champ "+field_error+" est obligatoire !", "error");
			}else{
                
                


                
                $.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>admin/ajout_administrateur',
                        data: { 
							nom: nom, 
                            prenom: prenom, 
                            email: email, 
                            cel: cel, 
                            tel: tel, 
                            id_profil: id_profil, 
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
							$(".user_list").empty();
				            $(".user_list").load("<?php echo base_url('admin/user_list_ajax') ;?>"); 
                            
                            $("#nom").val("");
                            $("#prenom").val("");
                            $("#email").val("");
                            $("#cel").val("");
                            $("#tel").val("");
							
							swal("Succes!", "Ajout effectue avec succes !", "success");
							
							
	
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
                       
                        url: '<?php echo base_url(); ?>admin/delete_user_ajax',
                        data: { 
							id_ajax: id_ajax, 	
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
							$(".user_list").empty();
							 $(".user_list").load("<?php echo base_url('admin/user_list_ajax') ;?>"); 
							
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
		
		$( ".modiff" ).click(function() {
		  
			console.log($(this).data("id"));
		});
    </script>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:59 GMT -->
</html>