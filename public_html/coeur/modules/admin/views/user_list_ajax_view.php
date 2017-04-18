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
			var vide="";
			
			if(nom == ""){
				sweetAlert("Oops...", "le champ nom est obligatoire !", "error");
			}
			
			if(prenom == ""){
				sweetAlert("Oops...", "le champ prenom est obligatoire !", "error");
			}
			
			if(email == ""){
				sweetAlert("Oops...", "le champ email est obligatoire !", "error");
			}
			
			if(cel == ""){
				sweetAlert("Oops...", "le champ Telephone mobile est obligatoire !", "error");
			}
			
			$.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>admin/ajout_administrateur',
                        data: { 
							nom: nom, 
							prenom: prenom,
							email: email,
							tel: tel,
							cel: cel,
							
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							 var nom=$("#nom").val();
							$("#prenom").val(vide);
							$("#email").val(vide);
							$("#cel").val(vide);
							$("#tel").val(vide);
							
							$(".user_list").empty();
							 $(".user_list").load("<?php echo base_url('admin/user_list_ajax') ;?>"); 
							
							swal("Succes!", "Enregistrement effectue avec succes !", "success");
							
							
	
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