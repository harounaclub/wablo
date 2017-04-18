                   <div class="bloc_package">
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th data-column-id="sender">Entreprise</th>
                                                
                                                <th data-column-id="sender">Package</th>
                                                <th data-column-id="sender">Montant</th> 
                                                <th data-column-id="sender">Souscripteurs</th> 
                                                <th data-column-id="sender">Actions</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           <?php 
											  if(isset($souscription_list)){
												  foreach($souscription_list as $info_souscription){ ?>
												  
												  <tr>
													<td><?php echo $info_souscription->designation_entreprise; ?></td>								
													<td><?php echo $info_souscription->package_en; ?></td>  
												    <td><?php echo $info_souscription->montant_sousen; ?></td>
												    <td><?php echo $info_souscription->nom_sousen." ".$info_souscription->prenom_sousen." ".$info_souscription->telephone_mobile_sousen; ?></td>
												    
													<td>
													<button class="btn btn-danger btn-icon waves-effect waves-circle waves-float supprim" data-id="<?php echo $info_souscription->id_sousen."_".$info_souscription->id_entreprise; ?>"><i class="zmdi zmdi-close"></i></button>
													</td>


												</tr>
													  
													  
										   <?php  }
											  }
											?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                             </div>
<script type="text/javascript">
    $(document).ready(function() {
		
      console.log("ready");
		        
     });
    
     $( "#ajouter_id" ).click(function() {
         

         
         //informations generale
         
         var nom_entreprise=$( "#nom_entreprise" ).val();
         var pays_entreprise=$( "#pays_entreprise" ).val();
         var ville_entreprise=$( "#ville_entreprise" ).val();
         var quartier_entreprise=$( "#quartier_entreprise" ).val();
         var addr_postale=$( "#addr_postale" ).val();
         var email_entreprise=$( "#email_entreprise" ).val();
         var telephone_fixe_en=$( "#telephone_fixe_en" ).val();
         
          //informations souscriptions


         
         var nom_sous=$( "#nom_sous" ).val();
         var prenom_sous=$( "#prenom_sous" ).val();
         var tel_mobile_sous=$( "#tel_mobile_sous" ).val();
         var email_sous=$( "#email_sous" ).val();
         var addr_postale=$( "#addr_postale" ).val();
         var package_entreprise=$( "#package_entreprise" ).val();
         var mode_paiement=$( "#mode_paiement" ).val();
        
         
      
        
         
         	$.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>admin/ajout_entreprise',
                        data: { 
							nom_entreprise: nom_entreprise,
                            pays_entreprise: pays_entreprise,
                            ville_entreprise: ville_entreprise,
                            quartier_entreprise: quartier_entreprise,
                            addr_postale: addr_postale,
                            email_entreprise: email_entreprise,
                            telephone_fixe_en: telephone_fixe_en,
                            
                            nom_sous: nom_sous,
                            prenom_sous: prenom_sous,
                            tel_mobile_sous: tel_mobile_sous,
                            email_sous: email_sous,
                            addr_postale: addr_postale,
                            package_entreprise: package_entreprise,
                            mode_paiement: mode_paiement,
                            
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
							$(".bloc_package").empty();
							$(".bloc_package").load("<?php echo base_url('admin/souscription_list_ajax') ;?>"); 
							
							
							
							
							
							
	
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
                       
                        url: '<?php echo base_url(); ?>admin/delete_souscription_ajax',
                        data: { 
							id_ajax: id_ajax, 	
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
							$(".bloc_package").empty();
							$(".bloc_package").load("<?php echo base_url('admin/souscription_list_ajax') ;?>"); 
							
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