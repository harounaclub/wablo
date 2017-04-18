<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            body{
                font-family: 'Roboto', sans-serif;
                color: #777;
                font-size: 12px;
            }

            .header{
               width: 100%;
               padding: 10px 20px;
               background-color: #eee;
              
            }

            h2.create{
                font-size: 40px;
                color: #777;
                font-weight: 300;
            }
            
            .connection{
                
               padding-top: 15px;
                
                
            }

            .formulare{
                width: 100%;
                max-width: 960px;
                margin: 0 auto;
                min-height: 400px;
                margin-top: 30px;
                padding: 20px;
            }

            label{
                font-size: 14px;
            }

            .zone-form{
                background-color: #f1f1f1;
                padding: 20px;
            }

            .device{
                text-align: center;
                margin-top: 30px;
            }

            .device img{
                display: inline-block;
            }

          
        </style>
    </head>
    <body>

        <div class="header">
            <div class="row">
                <div class="col-md-3"><img src="http://placehold.it/120x60" alt="" class="img-responsive"></div>
                <div class="col-md-4 col-md-offset-5 connection">
                 <span class="text-center">Deja membre cliquer pour vous connecter </span>
                <button type="button" class="btn btn-primary">connecter vous</button></div>
            </div>
        </div>

        <div class="contenu">
            <h2 class="text-center create">Créer votre compte W@bloCulture</h2>
            <h5 class="text-center create">ou deja membre cliquer ici pour vous connecter </h5>
            <div class="formulare">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Vous n'avez besoin que d'un compte </h4>
                        <p>Pour utiliser W@bloCulture un seul compte suffit .</p>

                        <p></p>

                        <div class="device">
                            <img src="<?php echo base_url() ?>assets/device.png" alt="" class="img-responsive">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="zone-form">
<<<<<<< HEAD
                             <?php echo form_open(''); ?>
=======
                            <?php
                                  $attributes = array('id' => 'addform', 'name'=> 'addform','method'=>'POST');
                                 echo form_open('souscription/ajout_souscription', $attributes);
                            ?>
<<<<<<< HEAD
<!--                            <form action="" method="POST" role="form">-->
>>>>>>> 5634d0a023bc6b3b3d6c5ea7ef1b34e832640ebe
=======

>>>>>>> 762d2a559ebe5deac9e02ec7aee163fc3d9bd7fb
                            
                             <div class="form-group">
                                    <label for=""> * Nom de la societe</label>
                                    <input type="text" name="societe" class="form-control" id="rs">
                                </div>

                            
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> * Nom</label>

                                        <input type="text" name="nom_souscripteur" class="form-control" id="nom">

                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for=""> * Prénoms</label>

                                        <input type="text" name="prenom_souscripteur" class="form-control" id="prenom_souscripteur">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for=""> * Email </label>

                                    <input type="text" name="email" class="form-control" id="">

                                </div>
                                
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> * Contact bureau</label>

                                        <input type="text" name="phone_bureau" class="form-control" id="">

                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for=""> * Contact Mobile</label>

                                        <input type="text" name="phone_mobile" class="form-control" id="">

                                    </div>
                                </div>
                                
                                
                                
                                
                                 <div class="form-group col-md-6">
                                  <label class="form-label">* <?php echo htmlentities("Choisir un package"); ?></label>
                                  <div class="controls">
                                    <select name="id_package">
                                     <option value="">Sélection..</option>
                                            <?php

                                              if(isset($liste_package)){
                                                foreach ($liste_package as $value) {
                                               ?>
                                                  <option value="<?php echo $value->id_package; ?>"><?php echo $value->code_package." / ".$value->montant_package."F CFA"; ?></option>

                                                <?php
                                                }

                                              }
                                            ?>
                                    </select>
                                    </div>
                                 </div>
                                
                                <div class="form-group">
                                 <label class="form-label">* Mode de paiement</label>
                                 <div class="controls">
                                   <?php echo form_dropdown("mode_paiement",$mode_paiement,"","id='mode_paiement'"); ?>
                                 </div>
                               </div>
                            

                                
                                
                            

                                <button type="submit" id="okvalid" class="btn btn-primary">Créer le compte</button>
                                <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        
        $("form#addform").on("submit",function(){
            var rs=$('#rs').val();
            var nom=$('#nom').val();
            var prenom=$('#prenom').val();
            //var nom=$('#nom').val();
            var ErrorColor='#f0e68c';
            
            if(rs < 1){
                alert('la saisie de la raison sociale est obligatoire!' );
                document.addform.rs.style.backgroundColor=ErrorColor;
                return false;
            }else if(nom < 1){
                alert('la saisie du nom du souscripteur est obligatoire!' );
                document.addform.nom.style.backgroundColor=ErrorColor;
                return false;
            }else if(prenom < 1){
                alert('la saisie du prénom du souscripteur est obligatoire!' );
                document.addform.prenom.style.backgroundColor=ErrorColor;
                return false;
            }else{
                
                $("#okvalid").attr("disabled", "disabled").html("Ajouter des données en cours... ");
                var $this = $(this);                
                
                $.ajax({
                url: "<?php echo base_url();?>souscription/ajout_souscription/",
                type: $this.attr('method'),
                data: $this.serialize(),
                dataType: 'json', // JSON
                success: function(json) {
                    if(json.reponse === '1') {

                      $("#getcontent").load("<?php echo base_url("souscription/retour") ?>");
                      //$.growl.notice({ message: "Votre opération s'est bien effectuée!" });


                      } else {
                              //$.growl.error({ message: "Echec de l'opération, veuillez verifier les differentes dates et reprendre." });
                              return false;
                                }
                            }
                        });


                return false;

            }
        });
    });
</script>
