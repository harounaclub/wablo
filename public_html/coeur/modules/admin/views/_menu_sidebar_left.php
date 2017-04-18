 <?php

    $profil_id=$this->session->userdata('profil_id');

 
                              
 ?>
<nav id="sidebar-left" class="sidebar mcs-overflow">
            	<ul class="sb-header m-b-20">
                	<li class="dp-trigger" data-dp-action="left-sidebar-toggle" data-dp-target="#sidebar-left">
                        <a href="#"><span class="header-logo m-r-20">Dashplus Admin</span><i class="menu-icon zmdi zmdi-arrow-left"></i></a>
                    </li>
                </ul>
                <div class="nav-menu-wrapper mcs-overflow1">
                	<ul class="nav-menu">
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>admin" ><i class="zmdi zmdi-view-dashboard"></i>&nbsp;<span>Tableau de bords</span></a>
                            
                          
                            
                        </li>
                        
                        <?php 
                            
                              if($profil_id == 1|| $profil_id == 3){ ?>
                                 
                                 <li class="nav-item">
                                        <a href="#" data-dp-action="submenu-toggle"><i class="zmdi zmdi-view-column"></i>&nbsp;<span> SOUSCRIPTIONS </span></a>
                                        <ul>
                                            <li><a href="<?php echo base_url() ?>admin/ajout_package_souscription">Ajouter un package</a></li>
                                            <li><a href="<?php echo base_url() ?>admin/ajout_entreprise">Ajouter une entreprise</a></li>

                                        </ul>
                                 </li>
                                  
                                  
                             <?php  }
                              
                        ?>
                        
                         <?php 
                            
                              if($profil_id == 1 || $profil_id == 2 || $profil_id == 4){ ?>
                        
                         <li class="nav-item">
                            <a href="#" data-dp-action="submenu-toggle"><i class="zmdi zmdi-money-box"></i>&nbsp;<span>CONFIGURATIONS </span></a>
                            <ul>
                                <?php 
                             
                                   if($profil_id == 1 || $profil_id == 2 || $profil_id == 4){ ?>
                                    
                                <li><a href="<?php echo base_url() ?>admin/ajout_administrateur">Gestion des utilisateurs</a></li>
                                
                                 <?php  }
                              
                                  ?>
                                  
                                 <?php 
                             
                                   if($profil_id == 1 || $profil_id == 2){ ?>
                                   
                                <li><a href="<?php echo base_url() ?>admin/ajout_valeur_entreprise">Gestion valeurs entreprises</a></li>
                                
                                <?php  }
                              
                                  ?>
                                
                                  <?php 
                             
                                   if($profil_id == 1 || $profil_id == 2){ ?>
                                   
                                <li><a href="<?php echo base_url() ?>admin/ajout_categorie_entreprise">Gestion categories employes</a></li> 
                                
                                 <?php  }
                              
                                  ?>
                                
                                 <?php 
                             
                                   if($profil_id == 1){ ?>
                                <li><a href="<?php echo base_url() ?>admin/ajout_structure_entreprise">Gestion categories structures entreprises</a></li>
                                
                                  <?php  }
                              
                                  ?>

                                
                            </ul>
                        </li>
                        
                               
                             <?php  }
                              
                        ?>
                        
                     
                    </ul>
                </div>
            </nav>