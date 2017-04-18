 <?php
										 if(isset($categorie_list)){
											 
										  foreach($categorie_list as $infos){ ?>
										  
										  <div class="row">
											<div class="col-sm-10">
												<div class="fg-line"><input type="text"  class="form-control input-sm" placeholder="<?php echo $infos->libelle_cap;  ?>" disabled></div>
											</div>
											<div class="col-sm-2">
												 <button class="btn btn-danger waves-effect supprim" data-id="<?php echo $infos->id_cap; ?>">x</button>
											</div>
                                        </div>
											  
										  <?php }
											 
										 }
										  
										
?>


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
				   console.log(list_val_en);
				   
			   }

		  }
			
		  if(compteur ==0){
				   
				   sweetAlert("Oops...", "Au moins une valeur d entreprise doit etre renseigne !", "error");
				   
			   }else{
				   
				    $.ajax({

                        type: 'POST',
                       
                        url: '<?php echo base_url(); ?>admin/ajout_valeur_entreprise',
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
							
							
							
//							$(".user_list").empty();
//							 $(".user_list").load("<?php echo base_url('admin/user_list_ajax') ;?>"); 
//							
//							swal("Succes!", "Enregistrement effectue avec succes !", "success");
//							
							
	
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
                       
                        url: '<?php echo base_url(); ?>admin/delete_categorie_ajax',
                        data: { 
							id_ajax: id_ajax, 	
						},
                        dataType: 'html',

                        success: function(json) {
							
							console.log(json);
							
							
						$("#zone_list_valeur").empty();
				        $("#zone_list_valeur").load("<?php echo base_url('admin/categorie_list_ajax') ;?>"); 
							
							
							
							
							
							
	
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