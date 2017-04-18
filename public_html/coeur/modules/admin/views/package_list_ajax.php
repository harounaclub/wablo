<div class="bloc_package">
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th data-column-id="sender">Package</th>
                                                
                                                <th data-column-id="sender">Utilite</th>
                                                <th data-column-id="sender">Respect</th> 
                                                <th data-column-id="sender">Performance</th>
                                                <th data-column-id="sender">potentiel</th>
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