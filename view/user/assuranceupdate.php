<!doctype html>
<html lang="fr">
<head>
    <title>Saham Assurance SN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="http://saham-app.com/view/style/style_aff.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script type="text/javascript" src="../../view/js/calcul_script1.js"></script>
</head>
<body onload="myFunction();CalculeBC()"id="assurance">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "header.php"; ?>
    <form method="post" action="../../controller/formulaire/index.php" >
        <main class="mdl-layout__content">
            <div class="mdl-content">
                <div class="mdl-grid">
                    <?php
                        if(isset($_GET['r']))
                        {
                            if($_GET['r']==1)
                    {
                        echo "
                                 <div class=\"mdl-cell mdl-cell--12-col\" id='errorMSG'>
                                    <div class=\"col-lg-4\">
                                        <div class=\"alert alert-danger\" role=\"alert\">
                                            ECHEC DE CREATION. VEUILLEZ RECOMMENCER
                                        </div>
                                    </div>
                                 </div>
                            ";
                    }
                        }
                    ?>
                   
                    <div class="mdl-cell mdl-cell--4-col">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-info" style="width: 128%;height: 120;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Assure</a>
                                    </h3>
                                </div>
                               <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">       <!-- debut row -->
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="input-group"><!-- debut input-group -->
                                                  <label style="font-family: Times New Roman;margin-top: 2%;font-size: 15px;">Nom:</label>
                                                  <input type="text" style="margin-left: 7%;font-size: 15px;font-family: Times New Roman;" name="nom_assure" id="nom_assure" onchange="CalculeBC()" class="form-control"   placeholder="Nom de l'assure" aria-describedby="sizing-addon1" title="Nom de l'assure" required>
                                               </div> <!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">             <!-- debut col-lg-6 -->
                                                <div class="input-group"><!-- debut input-group -->
                                                  <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;margin-top: 2%;">Prenom:</label>
                                                  <input type="text" style="margin-left: 5%;font-size: 15px;font-family: Times New Roman;" name="prenom_assure" id="prenom_assure" class="form-control" onchange="CalculeBC()" placeholder="Prenom de l'assure" aria-describedby="sizing-addon1" title="Prenom de l'assure" required>
                                                </div> <!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="input-group">       <!-- debut input-group -->
                                                    <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;margin-top: 2%;">Adresse:</label>
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="adresse_assure" class="form-control" placeholder="Adresse de l'assure" aria-describedby="sizing-addon1" title="Adresse de l'assure" >
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">             <!-- debut col-lg-6 -->
                                                <div class="input-group">        <!-- debut input-group -->
                                                     <label style="margin-right: 1%;margin-top: 4%;font-family: Times New Roman;font-size: 15px;">Telephone:</label>
                                                    <input type="tel" style="margin-top: 2%;font-size: 15px;font-family: Times New Roman;" name="tel_assure" class="form-control" placeholder="Telephone" aria-describedby="sizing-addon1" title="Telephone de l'assure" >
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">             <!-- debut col-lg-6 -->
                                                <div class="input-group">
                                                      <!-- debut input-group -->
                                                        <label style="margin-right: 1%;margin-top: 4%;font-family: Times New Roman;font-size: 15px;">Email:</label> 
                                                    <input type="text" type="tel" style="margin-top: 2%;margin-left: 4%;font-size: 15px;font-family: Times New Roman;" name="email_assure" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" title="Email de l'assure">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                             <div class="panel panel-info" style=" width: 128%;">
                                <div class="panel-heading" >
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Conducteur du vehicule</a></h3>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">       <!-- debut row -->
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="input-group">
                                                <label style="margin-right: 5%;margin-top: 2%;font-family: Times New Roman;font-size: 15px;">Nom:</label>       <!-- debut input-group -->
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" id="nom_conducteur" name="nom_conducteur" class="form-control" placeholder="Nom du conducteur" title="Nom du conducteur" aria-describedby="sizing-addon1" required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">             <!-- debut col-lg-6 -->
                                                <div class="input-group" style="margin-left: -4%;"> 
                                                <label style="margin-right: 1%;margin-top: 2%;font-family: Times New Roman;font-size: 15px;">Prenom:</label>       <!-- debut input-group -->
                                                    <input  name="prenom_conducteur" style="font-size: 15px;font-family: Times New Roman;" id="prenom_conducteur" class="form-control" placeholder="Prenom du conducteur" title="Prenom du conducteur;" aria-describedby="sizing-addon1" required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="input-group">
                                                <label style="margin-right: 1%;margin-top: 2%;font-family: Times New Roman;font-size: 15px;">Annee:</label>        <!-- debut input-group -->
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;text-align: center;" name="annee_permis" class="form-control" placeholder="Année de delivrance permis" title="Année de delivrance du permis" aria-describedby="sizing-addon1">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">             <!-- debut col-lg-6 -->
                                                <div class="input-group" style="margin-left: -4%;">
                                                <label style="margin-right: 1%;margin-top: 2%;font-family: Times New Roman;font-size: 15px;">Duree_Conduite:</label>         <!-- debut input-group -->
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="duree_conduite" class="form-control" placeholder="durée conduite" title="dure de conduite" aria-describedby="sizing-addon1" >
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                             <div class="panel panel-info" style=" width: 128%;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Periode de la  Garantie</a>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">       <!-- debut row -->
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="form-group">
                                                    <label style="margin-right: 1%;margin-top: 5%;font-family: Times New Roman;font-size: 15px;">Duree:</label>  
                                                    <select onchange="CalculeBC()" class="custom-select" name="duree_garantie" id="duree" title="duree" style="height: 36%;font-size: 15px;font-family: Times New Roman;width: 60%;">
                                                        <option value="0"><?php echo $item['duree'];?></option>
                                                        <option value="0"><h5>DUREE</h5></option>
                                                        <option value="1">1 mois</option>
                                                        <option value="2">2 mois</option>
                                                        <option value="3">3 mois</option>
                                                        <option value="4">4 mois</option>
                                                        <option value="5">5 mois</option>
                                                        <option value="6">6 mois</option>
                                                        <option value="7">7 mois</option>
                                                        <option value="8">8 mois</option>
                                                        <option value="9">9 mois</option>
                                                        <option value="12">Annuelle</option>
                                                    </select>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="form-group">
                                                    <!--<strong>Date Effet</strong>-->
                                                    <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Date Effet:</label>  
                                                    <input  type ="date" onchange="CalculeBC()" name="date_debut" id="date_debut" title="Date Effet" style="width: 60%;height: 35%;font-size: 15px;font-family: Times New Roman;margin-top: 4%;"
                                                            data-toggle="popover" title="Popover Header" data-content="Date non valide" data-trigger="focus" <?php echo"value=".$item['date_debut']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                            
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="form-group" hidden>
                                                    <label for="dtp_input2" class=" control-label">Date Echeance</label>
                                                    <input type="text" id="date_fin" style="font-size: 15px;font-family: Times New Roman;" name="demo" class="form-control" placeholder="date_fin" aria-describedby="sizing-addon1">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            
                                            <div class="col-lg-8">            <!-- debut col-lg-6 -->
                                                <div class="form-group">
                                                  <p id="demo"> </p>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                            

                            <div class="panel panel-info" style=" width: 128%;">
                                <div class="panel-heading" >
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Caracteristiques du vehicule</a>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" style="height: 200%;">
                                    <div class="panel-body">
                                        <div class="row">       <!-- debut row -->
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Marque</label> 
                                                <div class="input-group">       <!-- debut input-group --> 
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" class="form-control" name="marque" id="marque" placeholder="Marque" title="Marque" aria-describedby="sizing-addon1"  <?php echo"value=".$item['marque']."";?> required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->


                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Type</label>
                                                <div class="input-group">       <!-- debut input-group -->
                                                      
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="type_vehicule" class="form-control" placeholder="Type" title="Type" aria-describedby="sizing-addon1" <?php echo"value=".$item['type']."";?> required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Matricule</label> 
                                                <div class="input-group">       <!-- debut input-group -->
                                                     
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="immatriculation" class="form-control" id="immatriculation" title="Immatriculation" placeholder="immatriculation" aria-describedby="sizing-addon1" <?php echo"value=".$item['immatriculation']."";?> required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->


                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Puissance</label> 
                                                <div class="input-group">       <!-- debut input-group -->
                                                     
                                                    <input type="number" style="font-size: 15px;font-family: Times New Roman;" name="puissance" title="Puissance" class="form-control" min="1" max="10000" onchange="CalculeBC()" id="puissance" placeholder="puissance" aria-describedby="sizing-addon1" <?php echo"value=".$item['puissance']."";?> required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Categorie</label>  
                                                <div class="input-group">
                                                    
                                                    <select class="custom-select col-lg-12" id="categorie" title="Categorie" name="categorie" onchange="CalculeBC()" required style="height: 35px;font-size: 15px;font-family: Times New Roman;">
                                                        <option value="0"> <?php echo $item['libelle_categorie'];?></option>
                                                        <option value="1">Cat 401</option>
                                                        <option value="2">Cat 402</option>
                                                        <option value="3">Cat 403</option>
                                                        <option value="4">Cat 404</option>
                                                        <option value="5">Cat 405</option>
                                                        <option value="6">Cat 418</option>
                                                    </select>
                                                </div>
                                                <!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Genre</label>
                                                <div class="input-group">       <!-- debut input-group -->  
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="genre1" class="form-control" placeholder="Genre" title="Genre" aria-describedby="sizing-addon1" id="genre1"  <?php echo "value=".$item['genre']."";?> disabled>
                                                    <label for="genre" hidden>
                                                        <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="genre" class="form-control" placeholder="Genre" aria-describedby="sizing-addon1" id="genre" hidden>
                                                    </label>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Valeur_neuve</label>
                                                <div class="input-group">       <!-- debut input-group -->  
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="val_neuve" class="form-control" id="val_neuve" placeholder="valeur neuve" title="Valeur neuve" aria-describedby="sizing-addon1"  <?php echo"value=".$item['valeur_neuve']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Valeur_venale</label> 
                                                <div class="input-group">       <!-- debut input-group --> 
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="val_venale" class="form-control" id="val_venale" onchange="CalculeBC()" placeholder="valeur venale" title="Valeur venale" aria-describedby="sizing-addon1" <?php echo"value=".$item['valeur_venale']."";?> required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Energie</label>
                                            <div class="form-group">       <!-- debut input-group -->
                                                <select class="custom-select col-lg-12" id="energie" name="energie" onchange="CalculeBC()" title="Energie" required style="height: 30%;font-size: 15px;font-family: Times New Roman;">
                                                    <option value="N/A" selected><?php echo $item['energie'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="essence">Essence</option>
                                                    <option value="diesel">Diesel</option>
                                                </select>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                 <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Places</label>
                                                <div class="form-group">
                                                    <select name="places" class="custom-select col-lg-12" id="places" title="Places" onchange="CalculeBC()" disabled style="height: 30%;font-size: 15px;font-family: Times New Roman;">
                                                        <option><?php echo $item['places'];?></option>
                                                        <option value="2">2</option>
                                                        <option value="5">5</option>
                                                        <option value="7">7</option>
                                                        <option value="14">14</option>
                                                        <option value="32">32</option>
                                                    </select>
                                                    <select name="places" class="custom-select col-lg-12" id="places1" onchange="CalculeBC()" style="height: 30%">
                                                        <option selected value="0">Places</option>
                                                        <option value="5">5</option>
                                                        <option value="7">7</option>
                                                        <option value="9">9</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="29">29</option>
                                                        <option value="39">39</option>
                                                        <option value="60">60</option>
                                                    </select>
                                                    <input type="number" name="placeSup" onchange="CalculeBC()" id="placeSup" value="0" class="form-control" min="0" max="10" placeholder="places sup" title="places supplémentaire" aria-describedby="sizing-addon1" style="height: 30%;">
                                                </div>
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <fieldset>
                                                <div class="form-group" >
                                                     <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">M.E.C</label>
                                                    <input type ="date" onchange="CalculeBC()" name="mec" id="mec"  style="width: 100%;font-size: 15px;height: 35%;"<?php echo"value=".$item['date_mec']."";?>>
                                                </div><!-- /input-group-->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                 <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Cylindre</label>
                                                <div class="form-group ">       <!-- debut input-group -->
                                                    <!--<strong>&nbsp;</strong>-->
                                                    <input type="number" style="font-size: 15px;font-family: Times New Roman;" name="cylindre" onchange="CalculeBC()" id="cylindre" class="form-control" min="1" max="10000" placeholder="cylindre" title="Cylindre" aria-describedby="sizing-addon1" <?php echo"value=".$item['cylindre']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Chassis</label>
                                                <div class="input-group">       <!-- debut input-group -->
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="chassis" class="form-control" id="chassis" placeholder="chassis" title="Chassis" aria-describedby="sizing-addon1"title="Chassis" <?php echo"value=".$item['chassis']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 15px;">Charge Utile</label>
                                                <!-- debut col-lg-6 -->
                                                <div class="input-group">       <!-- debut input-group -->

                                                    <select class="custom-select col-lg-12" style="height: 30%;font-size: 15px;font-family: Times New Roman;" onchange="CalculeBC()" id="charge" name="charge">
                                                        <option value="N/A"><?php echo$item['charge_utile'];?></option>
                                                        <option value="Break">Break</option>
                                                        <option value="Moins de 3,5T">Moins de 3,5T</option>
                                                        <option value="Plus de 3,5T">Plus de 3,5T</option>
                                                    </select>
                                                    <select class="custom-select col-lg-12" id="pack" onchange="CalculeBC()" name="pack">
                                                        <option  selected>Pack </option>
                                                        <option value="mini" >Pack Mini</option>
                                                        <option value="classic">Pack Classic</option>
                                                        <option value="confort">Pack Confort</option>
                                                        <option value="liberte">Pack Liberte</option>
                                                    </select>
                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                <div class="input-group">       <!-- debut input-group -->

                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>


                            <!-- -->
                            <div class="panel panel-info" >
                                <div class="panel panel-info" style=" width: 128%;">
                                    <div class="panel-heading" >
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Numéro Attestation</a>
                                        </h3>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-6"> 
                                                       <!-- debut col-lg-6 -->
                                                <div class="input-group ">       <!-- debut input-group -->
                                                    <input type="text" name="attestation" id="attestation" class="form-control" placeholder="Attestation" title="Attestation" aria-describedby="sizing-addon1" style="font-size: 15px;font-family: Times New Roman;"  >
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6"> 
                                                       <!-- debut col-lg-6 -->
                                                <div class="input-group ">       <!-- debut input-group -->
                                                    <input type="text" name="attesta" id="attesta" class="form-control" placeholder="attestation_cedeao" title="Attesta" aria-describedby="sizing-addon1" style="font-size: 15px;font-family: Times New Roman;">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mdl-cell mdl-cell--8-col" style="position: static;">
                        <div class="panel panel-info" style="margin-left: 13%;margin-right: -1%;">
                            <!-- Default panel contents -->
                            <div class="panel-heading"><h4>Garanties</h4></div>
                            <div class="panel-body" >

                                <table class="table  table-bordered" style="padding-left: 1%;padding-right: 1%;">
                                    <thead>
                                    <tr  >
                                        <th style="width: 10%;">GARANTIES</th>
                                        <th style="width: 10%;">PRIME</th>
                                        <th style="width: 10%;">GARANTIES</th>
                                        <th style="width: 2%;">PRIME</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td >
                                            <font size=1 >
                                                <label class="form-check-label"  hidden >
                                                    <input class="form-check-input"  name="res_civ"   type="checkbox" onclick="CalculeBC()"  id="Checkbox1" value="1" checked> RESPONSABILITE CIVILE
                                                </label>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="res_civ65"   type="checkbox" onclick="CalculeBC()"  id="Checkbox144" value="1"  checked disabled> RESPONSABILITE CIVILE
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text"   size="6" name="prorata11" id="PrimeRC" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label" style="padding-left: 1%">
                                                    <input class="form-check-input" name="bris" type="checkbox" onclick="CalculeBC()"  id="Checkbox6" value="6" > BRIS DE GLACE
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text" size="6" name="PrimeBris" id="PrimeBris" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label" hidden >
                                                    <input class="form-check-input" name="recours"  onclick="CalculeBC()"  type="checkbox" id="Checkbox2" value="" checked> RECOURS DES TIERS INCENDIE
                                                </label>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="recours65"  onclick="CalculeBC()"  type="checkbox" id="Checkbox265" value="" checked disabled> RECOURS DES TIERS INCENDIE
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text"  size="6" name="PrimeTiers" id="PrimeTiers" style="text-align: right;"  disabled="disabled" /></td>
                                        <td><font  size=1>
                                                <label class="form-check-label" style="padding-left: 1%;">
                                                    <input class="form-check-input" name="TierceCom"  onclick="CalculeBC()"  type="checkbox" id="Checkbox7_1" value="">
                                                    TIERCE COMPLETE (TCM)
                                                </label>
                                            </font><font  size=1>
                                                <label class="form-check-label" style="padding-left: 1%;">
                                                    <input class="form-check-input" name="TierceCol"  onclick="CalculeBC()"  type="checkbox" id="Checkbox7_2" value=""> TIERCE COLLISION (TCL)
                                                </label>
                                            </font>

                                        </td>
                                        <td><input type="text"  size="6" name="PrimeTierce" id="PrimeTierce" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="defense" type="checkbox"  id="Checkbox3" onclick="CalculeBC()"  value="3" > DEFENSE ET RECOURS
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text"  size="6" name="PrimeDefense" id="PrimeDefense" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <div class="col-lg-11">
                                                <font  size=1>
                                                    <select  class="form-control" name="avance" id="Checkbox8"  onchange="CalculeBC()">
                                                        <option value="0"></option>
                                                        <option value="AR_opt1">AVANCE SUR RECOURS (OPTION 1)</option>
                                                        <option value="AR_opt2">AVANCE SUR RECOURS (OPTION 2)</option>
                                                        <option value="AR_opt3">AVANCE SUR RECOURS (OPTION 3)</option>
                                                    </select>
                                                </font>
                                            </div>
                                        </td>
                                        <td><input type="text"  size="6" name="PrimeAvance" id="PrimeAvance" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                            <font  size=1>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="incendie" type="checkbox" onclick="CalculeBC()"  id="Checkbox4" value="4" > INCENDIE
                                                </label>
                                            </font>

                                        </td>
                                        <td><input type="text" size="6" name="PrimeIncendie" id="PrimeIncendie" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <div class="col-lg-11">
                                                <font  size=1>
                                                    <select  class="form-control" id="Checkbox9" name="personne" onchange="CalculeBC()">
                                                        <option value="0"></option>
                                                        <option value="PT_opt1">PERSONNES TRANSPORTEES (OPTION 1)</option>
                                                        <option value="PT_opt2">PERSONNES TRANSPORTEES (OPTION 2)</option>
                                                        <option value="PT_opt3">PERSONNES TRANSPORTEES (OPTION 3)</option>
                                                    </select>
                                                </font>
                                            </div>
                                        </td>
                                        <td><input type="text"  size="6" name="PrimePersonne" id="PrimePersonne" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="vol" type="checkbox" onclick="CalculeBC()"  id="Checkbox5" value="5" > VOL
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text" size="6" name="PrimeVol" id="PrimeVol" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <div class="col-lg-12">
                                                <font size="1">
                                                    <label class="form-check-label" hidden>
                                                        <input class="form-check-input"  name="assistance" type="checkbox" onclick="CalculeBC()"  id="Checkbox10" value=""  checked> ASSISTANCE
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" name="assistance1" type="checkbox" onclick="CalculeBC()"  id="Checkbox101" value="" checked disabled> ASSISTANCE                                                            </label>
                                                </font>
                                                </label>
                                                </font>
                                            </div>
                                        </td>
                                        <td><input  size="6" name="PrimeAuto" id="PrimeAuto" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="panel panel-info"  style="margin-left: 13%;margin-right: -1%;margin-top: -2%;">

                            <div class="panel panel-info col-lg-5" style="height: 160px;">
                                <div class="panel-heading col-lg-12">
                                    <h3 class="panel-title">Majoration Reduction</h3>
                                </div>
                                <div class="panel-body col-lg-12">
                                    <table class="table  table-bordered col-lg-12">
                                        <thead>
                                        <tr>
                                            <th>Bonus RC</th>
                                            <th>Reduction Commerciale</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <select class="custom-select" name="chiffre3" id="chiffre3"  onchange="CalculeBC()">
                                                    <option value="0">0 %</option>
                                                    <option value="5">5 %</option>
                                                    <option value="10">10 %</option>
                                                    <option value="15">15 %</option>
                                                    <option value="20">20 %</option>
                                                </select>
                                                <input type="text"  size="6" id="totalBC" disabled="disabled" />
                                                <input type="text" name="totalBC1" size="10" id="totalBC1" hidden />
                                            </td>
                                            <td>
                                                <select class="custom-select" name="sel1" id="sel1"   onchange="CalculeBC()">
                                                    <option value="0">0 %</option>
                                                    <option value="5">5%</option>
                                                    <option value="10">10%</option>
                                                    <option value="15">15%</option>
                                                    <option value="20">20%</option>
                                                    <option value="25">25%</option>
                                                    <option value="30">30%</option>
                                                    <option value="35">35%</option>
                                                </select>
                                                <input type="text"   size="8" id="totalRC" disabled="disabled"/>
                                                <input type="text" name="totalRC1" size="10" id="totalRC1" hidden/>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <div style="height: 160px;" class="panel panel-info col-lg-7">
                            <div class="panel-heading col-lg-12">
                                <h3 class="panel-title">Decompte prime</h3>
                            </div>
                            <div class="panel-body col-lg-12">
                                <table class="table  table-bordered">
                                    <thead>
                                    <th>Prime nette</th>
                                    <th>Accesssoire</th>
                                    <th>Taxe</th>
                                    <th>Fond de  Garantie</th>
                                    <th >Prime Totale</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input type="text"  style="text-align: right" size="6" id="totalPN" disabled="disabled" />
                                            <input type="text" name="totalPN1" size="8" id="totalPN1" hidden />
                                        </td>
                                        <td>
                                            <input type="text"  size="6" id="totalAC"  disabled="disabled" />
                                            <input type="text" name="accessoire" size="8" id="totalAC1" hidden />
                                        </td>
                                        <td>
                                            <input type="text"  size="6" id="taxe" disabled="disabled" />
                                            <input type="text" name="taxe1" size="8" id="taxe1" hidden/>
                                        </td>
                                        <td>
                                            <input type="text"  style="text-align: right" size="8" id="totalFG" disabled="disabled" />
                                            <input type="text" name="totalFG1" size="8" id="totalFG1" hidden/>
                                        </td>
                                        <td>
                                            <input type="text"  style="text-align: right" size="6" id="totalPT" disabled="disabled" />
                                            <input type="text" name="totalPT1" size="8" id="totalPT1" hidden/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    </div>

                </div>

            </div>
            <div style="width: 50%;border:2px  ;text-align: center;margin-left: auto; margin-right: auto">
                <input  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" value="valider" name="action" id="valider">
                <button type="reset" value="Annuler" name="annuler" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">ANNULER</button>
            </div>
            <div class="mdl-cell mdl-cell--6-col"  hidden>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Calculs</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">       <!-- debut row -->
                            <div class="col-lg-3">            <!-- debut col-lg-6 -->
                                <div class="input-group">       <!-- debut input-group -->
                                    <label for="">limGant1</label>
                                    <input type="text"  name="lim1" id="lim1" class="form-control" placeholder="Nom du conducteur" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch1</label>
                                    <input type="text" id="franch1" name="franch1" class="form-control" placeholder="Prenom du conducteur'" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">            <!-- debut col-lg-6 -->
                                <div class="input-group">
                                    <label for="">brute 1</label>      <!-- debut input-group -->
                                    <input type="text" name="brute1"  id="brute1" class="form-control" placeholder=" Année delivrance permis" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata1</label>
                                    <input type="text" name="prorata1" id="prorata1" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant2</label>
                                    <input type="text" name="lim2" id="lim2" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch2</label>
                                    <input type="text" name="franch2" id="franch2" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 2</label>
                                    <input type="text" name="brute2" id="brute2" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 2</label>
                                    <input type="text" name="prorata2" id="prorata2" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->

                            <div class="col-lg-3">            <!-- debut col-lg-6 -->
                                <div class="input-group">       <!-- debut input-group -->
                                    <label for="">limGant3</label>
                                    <input type="text" id="lim3" name="lim3" class="form-control" placeholder="Nom du conducteur" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch3</label>
                                    <input type="text" id="franch3" name="franch3" class="form-control" placeholder="Prenom du conducteur'" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">            <!-- debut col-lg-6 -->
                                <div class="input-group">
                                    <label for="">brute 3</label>      <!-- debut input-group -->
                                    <input type="text" name="brute3" id="brute3" class="form-control" placeholder=" Année delivrance permis" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata3</label>
                                    <input type="text" name="prorata3" id="prorata3" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant4</label>
                                    <input type="text" name="lim4" id="lim4" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch4</label>
                                    <input type="text" name="franch4" id="franch4" class="form-control" placeholder="franchise 4" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 4</label>
                                    <input type="text" name="brute4" id="brute4" class="form-control" placeholder="brute 4" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 4</label>
                                    <input type="text" name="prorata4" id="prorata4" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->

                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant5</label>
                                    <input type="text" name="lim5" id="lim5" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch5</label>
                                    <input type="text" name="franch5" id="franch5" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 5</label>
                                    <input type="text" name="brute5" id="brute5" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 5</label>
                                    <input type="text" id="prorata5" name="prorata5" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->

                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant6</label>
                                    <input type="text" id="lim6" name="lim6" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch6</label>
                                    <input type="text" id="franch6" name="franch6" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 6</label>
                                    <input type="text" name="brute6" id="brute6" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 6</label>
                                    <input type="text" name="prorata6" id="prorata6" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant7</label>
                                    <input type="text" name="lim7" id="lim7" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch7</label>
                                    <input type="text" name="franch7" id="franch7" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 7</label>
                                    <input type="text" name="brute7" id="brute7" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 7</label>
                                    <input type="text" id="prorata7" name="prorata7" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant8</label>
                                    <input type="text" name="lim8" id="lim9" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch8</label>
                                    <input type="text" name="franch8" id="franch9" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 8</label>
                                    <input type="text" name="brute8" id="brute9" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 8</label>
                                    <input type="text" id="prorata9" name="prorata8" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant9</label>
                                    <input type="text" name="lim9" id="lim10" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch9</label>
                                    <input type="text" name="franch9" id="franch10" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 9</label>
                                    <input type="text" name="brute9" id="brute10" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 9</label>
                                    <input type="text" id="prorata10" name="prorata9" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">limGant10</label>
                                    <input type="text" name="lim10" id="lim11" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch10</label>
                                    <input type="text" name="franch10" id="franch11" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">brute 10</label>
                                    <input type="text" name="brute10" id="brute11" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">prorata 10</label>
                                    <input type="text" id="prorata11" name="prorata10" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->

                        </div><!-- /.row -->
                    </div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col" style="height: 34px" >
            </div>
        </main>
    </form>
    <?php //include "footer.php"; ?>
</div>

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>