<!doctype html>
<html lang="fr">
<head><!--header-->
    <title>For-Int</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../view/style/intlTelInput.css">
    <link rel="stylesheet" href="../../view/style/style_aff.css">
    <style>
        .selected-flag{
            z-index: 4 !important;
            /* background: #062944 !important; */
            position: relative;
            left: -3px;        
        }
        .country-list{
            z-index:3 !important;
            left:14px !important
        }
        .country-list{
            width: 216px !important
        }
        .more-garanties{
            float: right;
            margin-top: -27px;
            font-size: 20px;
            cursor:pointer
        }
        #close-empty{
            color: #ffc107;
            font-size: 25px !important;
            float: right;
            position: relative;
            top: -12px;
        }
        .empty-card{
            width: 35%;
            height: 23%;
            margin: auto;
            position: relative;
            top: 102px;
        }
        .alerts{
            color:#062944;
            text-align:center;
            font-size: 13px;
            padding-top: 17px;
        }
        .empty-header{
            height: 33px;
            background: #021426;
            color: #f7ba00 !important;
            font-weight:bold
        }
        #effetModal{
            display:none
        }
        .effet-card{
            width: 33%;
            margin: auto;
            text-align: center;
            color: #062944;
            margin-top: 74px;
        }
        .valeurs-card{
            display: block;
            width: 35%;
            margin: auto;
            color: #062944;
            margin-top: 101px;
        }
        .more-garanties{
            float: right;
            margin-top: -27px;
            font-size: 20px;
            cursor:pointer
        }
        
    </style>
</head><!--end header-->

<body onload="myFunction();CalculeBC()" id="assurance">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "header.php"; ?>
    <form method="post" action="../../controller/formulaire/index.php" id="assurance-form" name="updateContrat"><!--form-->
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
                            <div class="panel panel-info" id="assure-infos" style="width: 128%;height: 120;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Assuré</a>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row"><!-- debut row -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group"><!-- debut input-group -->
                                                  <label style="font-family: Times New Roman;margin-top: 2%;font-size: 14px;">Nom<span style="color: red;">*</span></label>
                                                  <input type="text" style="margin-left:8%;font-size: 15px;font-family: Times New Roman;width:100%" name="nom_assure" id="nom_assure" onchange="CalculeBC()" class="form-control requis "   placeholder="Nom de l'assure" aria-describedby="sizing-addon1" title="Nom de l'assure">
                                               </div> <!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group"><!-- debut input-group -->
                                                  <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;margin-top: 2%;">Pénom<span style="color: red;">*</span></label>
                                                  <input type="text" style="margin-left:4%;font-size: 15px;font-family: Times New Roman;width:92% !important" name="prenom_assure" id="prenom_assure" class="form-control requis" onchange="CalculeBC()" placeholder="Prenom de l'assure" aria-describedby="sizing-addon1" title="Prenom de l'assure" >
                                                </div> <!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group"><!-- debut input-group -->
                                                    <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;margin-top: 2%;">Adresse</label></label>
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;margin-left:5px;margin-top:-5px;width:117% !important" name="adresse_assure" id="adresse_assure" class="form-control" placeholder="Adresse de l'assure" aria-describedby="sizing-addon1" title="Adresse de l'assure">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group"><!-- debut input-group -->
                                                     <label style="margin-right: 1%;margin-top: 2%;font-family: Times New Roman;font-size: 14px;position:relative;left:-12px">Téléphone</label>
                                                     <input type="text" id="tel" style="margin-top:-2%;margin-left:-4px;font-size: 15px;font-family: Times New Roman;width:102%" name="tel_assure" class="form-control divide" placeholder="Ex: 00 000 00 00" aria-describedby="sizing-addon1" title="Telephone de l'assure">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group" style="width: 212% !important">
                                                    <!-- debut input-group -->
                                                    <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;">E-mail</label>
                                                    <input type="text" type="tel" style="margin-top:1%;margin-left:14px;font-size: 15px;font-family: Times New Roman;width:99%" name="email_assure" id="email_assure" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" title="Email de l'assure">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                            
                            <!--début période de garantie-->
                            <div class="panel panel-info" style=" width: 128%;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Période de la garantie</a>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <div class="row"><!-- debut row -->
                                            <div class="col-lg-5"><!-- debut col-lg-6 -->
                                                <div class="form-group">
                                                    <label style="margin-right: 1%;margin-top: 5%;font-family: Times New Roman;font-size: 14px;">Durée<span style="color: red;">*</span>:</label>  
                                                    <select onchange="CalculeBC()" class="form-control requis" name="duree_garantie" id="duree" title="duree" style="height: 36%;font-size: 15px;font-family: Times New Roman;width: 60%;padding-left: 33px;;margin-top: -30px !important;margin-left: 57px !important" required='required'>
                                                        <option value=<?php echo('"'. $item['duree'].'"')?>><?php echo($item['duree'].' mois')?></option>
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
                                            <div class="col-lg-7"><!-- debut col-lg-6 -->
                                    
                                                <div class="form-group">
                                                    <!--<strong>Date Effet</strong>-->
                                                    <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;position: absolute;top: 10px;">Date effet<span style="color: red">*</span>:</label>  
                                                    <input  type ="date" onchange="CalculeBC();checkDate()" name="date_debut" id="date_debut" title="Date Effet" style="width: 60%;height:2em;font-size: 15px;font-family: Times New Roman;margin-left:78px;margin-top: 5px;padding-left:46px;border-radius:.25rem;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;" data-toggle="popover" title="Popover Header" data-content="Date non valide" data-trigger="focus" value="">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->    
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="form-group" hidden>
                                                    <label for="dtp_input2" class=" control-label">DATE ÉCHÉANCE</label>
                                                    <input type="text" id="date_fin" style="font-size: 15px;font-family: Times New Roman;" name="demo" class="form-control" placeholder="date_fin" aria-describedby="sizing-addon1">
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                                            
                                            <div class="col-lg-8"><!-- debut col-lg-6 -->
                                                <div class="form-group">
                                                    <p id="demo" style="padding-top: 15px;color: #3d823d;font-size:15px"> </p>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                            <!--fin période de garantie-->

                            <div class="panel panel-info" style=" width: 128%;display:none">
                                <div class="panel-heading" >
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">CONDUCTEUR DU VÉHICULE</a></h3>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row"><!-- debut row -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group">
                                                <label style="margin-right: 5%;margin-top: 2%;font-family: Times New Roman;font-size: 15px;">NOM<span style="color: red;font-size: 15px;">*</span> </label>      <!-- debut input-group -->
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" id="nom_conducteur" name="nom_conducteur" class="form-control" placeholder="Nom du conducteur" title="Nom du conducteur" aria-describedby="sizing-addon1" required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group" style="margin-left: -4%;"> 
                                                <label style="margin-right: 1%;margin-top: 2%;font-family: Times New Roman;font-size: 15px;">PRÉNOM<span style="color: red;font-size: 15px;">*</span> </label>       <!-- debut input-group -->
                                                    <input  name="prenom_conducteur" style="font-size: 15px;font-family: Times New Roman;" id="prenom_conducteur" class="form-control" placeholder="Prenom du conducteur" title="Prenom du conducteur;" aria-describedby="sizing-addon1" required>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-info" style=" width: 128%;" id="hidden-caracteristiques"><!--caracteristiques-->
                                <div class="panel-heading" >
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Caractéristiques du véhicule</a>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" style="height:424px !important;max-height:450px !important">
                                    <div class="panel-body">
                                    
                                        <div class="row"><!-- debut row -->

                                        <br><br><br>
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;">Catégorie<span style="color: red;">*</span></label>  
                                                <input style='display:none' type="text" value=<?php echo('"'.$item['id_police'].'"')?> name="idPolice">
                                                <div class="input-group">   
                                                    <select class="custom-select col-lg-12 requis" id="categorie" title="Categorie" name="categorie" onchange="CalculeBC()" style="height: 35px;font-size: 15px;font-family: Times New Roman;border: 1px solid #bbcedc;">
                                                    <option value = 
                                                            <?php echo '"'.$item['id_cat'].'"' ?>
                                                        >  
                                                            <?php echo $item['libelle_categorie'];?>
                                                        </option>
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
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;">Genre</label>
                                                <div class="input-group"><!-- debut input-group -->  
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="genre1" class="form-control" placeholder="Genre" title="Genre" aria-describedby="sizing-addon1" id="genre1" disabled>
                                                    <label for="genre" hidden>
                                                        <input type="text" style="font-size: 15px;font-family: Times New Roman;margin-top:-19px" name="genre" class="form-control" placeholder="Genre" aria-describedby="sizing-addon1" id="genre" hidden>
                                                    </label>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;">Marque<span style="color: red;"></span></label> 
                                                <div class="input-group"><!-- debut input-group --> 
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" class="form-control" name="marque" id="marque" placeholder="Marque" title="Marque" aria-describedby="sizing-addon1" <?php echo"value=".$item['marque']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->


                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;">Modéle<span style="color: red;"></span></label>
                                                <div class="input-group"><!-- debut input-group -->          
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="type_vehicule" class="form-control" placeholder="Type" title="Type" id="type" aria-describedby="sizing-addon1" <?php echo"value=".$item['type']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;">Immatriculation<span style="color: red;">*</span></label> 
                                                <div class="input-group"><!-- debut input-group -->        
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="immatriculation" class="form-control requis" id="immatriculation" title="Immatriculation" placeholder="immatriculation" aria-describedby="sizing-addon1" <?php echo"value=".$item['immatriculation']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->


                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;" id='labelPuissance'>Puissance<span style="color: red;"></span></label> 
                                                <div class="input-group"><!-- debut input-group -->        
                                                    <input type="number" style="font-size: 15px;font-family: Times New Roman;" name="puissance" title="Puissance" class="form-control" min="1" max="10000" onchange="CalculeBC()" id="puissance" placeholder="puissance" aria-describedby="sizing-addon1" <?php echo"value=".$item['puissance']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;" id="vnLabel">Valeur neuve<span style="color: red;"></span></label>
                                                <div class="input-group"><!-- debut input-group -->  
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="val_neuve" class="form-control divide" id="val_neuve" placeholder="valeur neuve" title="Valeur neuve" aria-describedby="sizing-addon1" <?php echo"value=".$item['valeur_neuve']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;" id='vvLabel'>Valeur vénale<span style="color: red;"></span></label> 
                                                <div class="input-group"><!-- debut input-group --> 
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="val_venale" class="form-control divide" id="val_venale" onchange="CalculeBC()" placeholder="valeur venale" title="Valeur venale" aria-describedby="sizing-addon1" <?php echo"value=".$item['valeur_venale']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                            <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;" id='energieLabel'>Énérgie<span style="color: red;"></span></label>
                                            <div class="form-group" id="mySelect">       <!-- debut input-group -->
                                            <select id="energie" name="energie" title="Energie" required style="height: 35px !important;width: 246px;background: #ffffff;font-size: 15px;font-family: Times New Roman;border: 1px solid #bbcedc;" onChange="CalculeBC()">
                                            <option value="essence" selected>Essence</option>
                                                <option value="diesel">Diesel</option>
                                            </select>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                                 <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;" id="placeLabel">Places<span style="color: red;">*</span></label>
                                                <div class="form-group">
                                                    <select name="places" class="custom-select col-lg-12 requis" id="places" title="Places" disabled  onchange="CalculeBC()" style="height:35px;font-size: 15px;font-family: Times New Roman;border: 1px solid #bbcedc;">
                                                        <option value="2">2 places</option>
                                                        <option value="3">3 places</option>
                                                        <option value="4">4 places</option>
                                                        <option value="5">5 places</option>
                                                        <option value="6">6 places</option>
                                                        <option value="7">7 places</option>
                                                        <option value="8">8 places</option>
                                                        <option value="9">9 places</option>
                                                        <option value="10">10 places</option>
                                                        <option value="11">11 places</option>
                                                        <option value="12">12 places</option>
                                                        <option value="13">13 places</option>
                                                        <option value="14">14 places</option>
                                                        <option value="15">15 places</option>
                                                        <option value="23">23 places</option>
                                                        <option value="24">24 places</option>
                                                        <option value="28">28 places</option>
                                                        <option value="29">29 places</option>
                                                        <option value="39">39 places</option>
                                                    </select>
                                                    <select name="places" class="custom-select col-lg-12" id="places1" onchange="CalculeBC()" style="height: 30%">
                                                        <option selected value="0">Surplus</option>
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
                                                <div class="form-group" id='mecGroup'>
                                                     <label style="margin-right: 1%;margin-top:-5px;font-family: Times New Roman;font-size: 14px;" id='mecLabel'>m.e.c<span style="color: red;">*</span></label>
                                                    <input type ="date" onchange="CalculeBC()" class="requis" name="mec" id="mec"  style="width:247px !important;;font-size:15px;font-size: 15px;height:32px;transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;" <?php echo"value=".$item['date_mec']."";?>>
                                                </div><!-- /input-group-->
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-lg-6">            <!-- debut col-lg-6 -->
                                            <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;display:none;position:relative;top:-6px" id='cylindreLabel'>Cylindre<span style="color: red;"></span></label>
                                                <div class="form-group">       <!-- debut input-group -->
                                                    <input type="number" style="display:none !important;font-size: 15px;font-family: Times New Roman;border-radius:0 !important;margin-top:-6px;margin-left:0px;width:245px" name="cylindre" onchange="CalculeBC()" id="cylindre" class="form-control" min="1" max="10000" placeholder="cylindre" title="Cylindre" aria-describedby="sizing-addon1" <?php echo"value=".$item['cylindre']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6" style="display:none">            <!-- debut col-lg-6 -->
                                                <label style="margin-right: 1%;font-family: Times New Roman;font-size: 14px;">Chassis<span style="color: red;"></span></label>
                                                <div class="input-group">       <!-- debut input-group -->
                                                    <input type="text" style="font-size: 15px;font-family: Times New Roman;" name="chassis" class="form-control" id="chassis" placeholder="chassis" title="Chassis" aria-describedby="sizing-addon1"title="Chassis" <?php echo"value=".$item['chassis']."";?>>
                                                </div><!-- /input-group -->
                                            </div><!-- /.col-lg-6 -->
                                            <br><br><br>
                                            <div class="col-lg-6" style="left: 274px !important;top:-17px !important">
                                             <input type="text" style="display:none !important;font-size: 15px;font-family: Times New Roman;margin-right:1%;position:relative;top:15px !important;left: -273px;width: 519px;margin-left:0 !important" name="pack" class="form-control" placeholder="Charge" title="Genre" aria-describedby="sizing-addon1" id="genre2" disabled>
                                                <label style="display:none !important; margin-right: 1%;font-family: Times New Roman;font-size: 14px;position:relative;top:-76px;width: 245px;" id="labelChargeUtile">Charge utile</label>
                                                <p></p>
                                                <div class="input-group">       <!-- debut input-group -->
                                                    <select class="custom-select col-lg-12" style="height: 30px;font-size: 15px;font-family: Times New Roman;margin-top:-89px;border-radius:0 !important;margin-left:0 !important;border:1px solid #bbcedc" onchange="CalculeBC()" id="charge" name="charge">
                                                        <!--option value="N/A" selected>CHARGE UTILE<span style="color: red;">*</span></option-->
                                                        <option value="Break" selected>Break</option>
                                                        <option value="Moins de 3,5T">Moins de 3,5T</option>
                                                        <option value="Plus de 3,5T">Plus de 3,5T</option>
                                                    </select>
                                                    <label style="display:none !important; margin-right: 1%;font-family: Times New Roman;font-size: 14px;position:relative;top:-87px" id="labelPack">Pack<span style="color: red;">*</span></label>
                                                    <select class="custom-select col-lg-12" id="pack" style='height: 30px;border: 1px solid #bbcedc;border-radius: 0;font-size: 15px;font-family: "Times New Roman";margin-top: -25%;margin-left:-39px;' onchange="CalculeBC()" name="pack">
                                                        <!--option  selected>PACK</option-->
                                                        <option value="mini" selected>Pack Mini</option>
                                                        <option value="classic">Pack Classic</option>
                                                        <option value="confort">Pack Confort</option>
                                                        <option value="liberte">Pack Liberte</option>
                                                    </select>
                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6"><!-- debut col-lg-6 -->
                                                <div class="input-group"><!-- debut input-group -->

                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                            <!--fin caracteristiques du vehicule -->
                          
                            <div id="myModal" class="modal">
                                <div class="modal-content" style='background:#ffffff !important;height:72% !important'>
                                <span class="close" id="close_modal" style="position: relative;top: -21px;color: #062944;">&times;</span>
                                <h2 style="padding-bottom: 10px;color:#062944;text-align: center;text-decoration: underline">Confirmez-vous la création du contrat ?<h2>
                                <h3 style="color:#062944">Les actions suivantes seront éxecutées</h3>
                                <ul>
                                    <li style="color:#062944">Cration d'une police.</li>
                                    <li style="color:#062944">Édition des conditions particuliéres.</li>
                                    <li style="color:#062944">Édition des attestations.</li>
                                </ul>
                                <div class="row" style="position:relative !important;top:-118px !important">
                                <label class="radio-inline" id='j' style="font-size:12px">
                                    <input type="radio" name="optradio" id="jaune" value="jaune" checked style="cursor:pointer !important">attestation jaune
                                </label>
                                <label class="radio-inline" id='v' style="font-size:12px">
                                    <input type="radio" name="optradio" id="verte" value="verte" style="cursor:pointer !important">attestation verte
                                </label>
                                </div>
                                <div class="row" style="margin-top: -160px !important;">
                                    <div class="col-lg-6"> 
                                        <div class="input-group">
                                            <input class="form-control form-control-sm attestations" type="text" name="attestation-j" id="attestation-jaune" class="form-control" placeholder="Attestation" title="Attestation" aria-describedby="sizing-addon1" style="font-size: 15px;font-family: Times New Roman;height: 34px !important;">
                                        </div>
                                        <div class="input-group"> 
                                            <input class="form-control form-control-sm attestations"  type="text" name="attestation-v" id="attestation-verte" class="form-control" placeholder="Attestation" title="Attestation" aria-describedby="sizing-addon1" style="font-size: 15px;font-family: Times New Roman;height: 34px !important; !important;display:none">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">     
                                        <div class="input-group "> 
                                            <input class="form-control form-control-sm attestations" type="text" name="attesta" id="attesta" class="form-control" placeholder="Attestation CDEAO" title="Attesta" aria-describedby="sizing-addon1" style="font-size: 15px;font-family: Times New Roman;margin-top: -118px !important;position: relative;top: 119px;height: 34px !important;">&nbsp;&nbsp;<span style="color: red;font-size: 15px;">*</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <input  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored validate-btn" type="submit" value="Valider Contrat" name="action" style="margin:auto !important;position: relative;top: -125px;color: #f7bb3d;">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mdl-cell mdl-cell--8-col" style="position: static;">
                        <div class="panel panel-info" style="margin-left: 13%;margin-right: -1%;">
                            <div class="panel-heading"><h4>Garanties</h4><span class="more-garanties">[+]<span></div><!--Garanties-->
                            <div class="panel-body" >
                                <table class="table  table-bordered" style="padding-left: 1%;padding-right: 1%;">
                                    <thead><!--header-->
                                    <tr>
                                        <th style="width: 10%;">GARANTIES</th>
                                        <th style="width: 10%;">PRIME</th>
                                        <th style="width: 10%;">GARANTIES</th>
                                        <th style="width: 2%;">PRIME</th>
                                    </tr>
                                    </thead>
                                    <tbody><!--header-->
                                    <tr>
                                        <td >
                                            <font size=1 >
                                                <label class="form-check-label"  hidden >
                                                    <input class="form-check-input"  name="res_civ"   type="checkbox" onclick="CalculeBC()"  id="Checkbox1" value="1" checked > RESPONSABILITE CIVILE
                                                </label>
                                                <label class="form-check-label">
                                                    <input class="form-check-input"  name="res_civ65" type="checkbox" onclick="CalculeBC()"  id="Checkbox144" value="1"  checked disabled> RESPONSABILITE CIVILE
                                                </label>
                                            </font>
                                        </td>
                                        <td><input class="divide" type="text"   size="6" name="prorata11" id="PrimeRC" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label" style="padding-left: 1%;">
                                                    <input class="form-check-input" name="bris" type="checkbox" onclick="CalculeBC()"  id="Checkbox6" value="6" > BRIS DE GLACE
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text" class="divide" size="6" name="PrimeBris" id="PrimeBris" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label" hidden >
                                                    <input class="form-check-input " name="recours"  onclick="CalculeBC()"  type="checkbox" id="Checkbox2" value="" checked> RECOURS DES TIERS INCENDIE
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
                                            </font>
                                            <font  size=1>
                                                <label class="form-check-label" style="padding-left: 1%;">
                                                    <input class="form-check-input" name="TierceCol"  onclick="CalculeBC()"  type="checkbox" id="Checkbox7_2" value=""> TIERCE COLLISION (TCL)
                                                </label>
                                            </font>
                                            <!--font  size=1>
                                                <label class="form-check-label" style="padding-left: 1%;">
                                                    <input class="form-check-input" name="TierceAgr"  onclick="CalculeBC()"  type="checkbox" id="Checkbox7_3" value=""> TIERCE AGRÉE (TAG)
                                                </label>
                                            </font-->

                                        </td>
                                        <td><input type="text"  class="divide" size="6" name="PrimeTierce" id="PrimeTierce" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="defense" type="checkbox"  id="Checkbox3" onclick="CalculeBC()"  value="3" > DEFENSE ET RECOURS
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text" class="divide" size="6" name="PrimeDefense" id="PrimeDefense" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <div class="col-lg-11 select-garanties">
                                                <font  size=1>
                                                    <select  class="form-control" name="avance" id="Checkbox8"  onchange="CalculeBC()">
                                                        <option value="0">AVANCE SUR RECOURSS</option>
                                                        <option value="AR_opt1">AVANCE SUR RECOURS (OPTION 1)</option>
                                                        <option value="AR_opt2">AVANCE SUR RECOURS (OPTION 2)</option>
                                                        <option value="AR_opt3">AVANCE SUR RECOURS (OPTION 3)</option>
                                                    </select>
                                                </font>
                                            </div>
                                        </td>
                                        <td><input type="text"class="divide"  size="6" name="PrimeAvance" id="PrimeAvance" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label">
                                                    <input class="form-check-input divide" name="incendie" type="checkbox" onclick="CalculeBC()"  id="Checkbox4" value="4" ><span id="incendie-text">INCENDIE</span>
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text" class="divide" size="6" name="PrimeIncendie" id="PrimeIncendie" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <div class="col-lg-11 select-garanties">
                                                <font  size=1>
                                                    <select  class="form-control" id="Checkbox9" name="personne" onchange="CalculeBC()">
                                                        <option value="0">PERSONNES TRANSPORTÉES</option>
                                                        <option value="PT_opt1">PERSONNES TRANSPORTÉES(OPTION 1)</option>
                                                        <option value="PT_opt2">PERSONNES TRANSPORTÉES(OPTION 2)</option>
                                                        <option value="PT_opt3">PERSONNES TRANSPORTÉES(OPTION 3)</option>
                                                    </select>
                                                </font>
                                            </div>
                                        </td>
                                        <td><input class="divide" type="text"  size="6" name="PrimePersonne" id="PrimePersonne" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <font  size=1>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="vol" type="checkbox" onclick="CalculeBC()"  id="Checkbox5" value="5" > VOL
                                                </label>
                                            </font>
                                        </td>
                                        <td><input type="text" class="divide" size="6" name="PrimeVol" id="PrimeVol" style="text-align: right;" disabled="disabled" /></td>
                                        <td>
                                            <div class="col-lg-12">
                                                <font size="1">
                                                    <label class="form-check-label" hidden>
                                                        <input class="form-check-input"  name="assistance" type="checkbox" onclick="CalculeBC()"  id="Checkbox10" value=""  checked> ASSISTANCE
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input"  name="assistance1" type="checkbox" onclick="CalculeBC()"  id="Checkbox101" value="" checked disabled> ASSISTANCE                                                            </label>
                                                </font>
                                                </label>
                                                </font>
                                            </div>
                                        </td>
                                        <td><input  class="divide" type="text" size="6" name="PrimeAuto" id="PrimeAuto" style="text-align: right;" disabled="disabled" /></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="panel panel-info"  style="margin-left: 13%;margin-right: -1%;margin-top: -2%;">

                            <div class="panel panel-info col-lg-5" style="height: 160px;">
                                <div class="panel-heading col-lg-12">
                                    <h4 class="panel-title">Majoration Reduction</h4>
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
                                                    <option value="0">0%</option>
                                                    <option value="5">5%</option>
                                                    <option value="10">10 %</option>
                                                    <option value="15">15 %</option>
                                                    <option value="20">20 %</option>
                                                </select>
                                                <input  class='taxes-sup divide' type="text"  size="6" id="totalBC" disabled="disabled" />
                                                <input  class='taxes-sup divide' type="text" name="totalBC1" size="10" id="totalBC1" hidden />
                                            </td>
                                            <td class='texes-sup'>
                                                <select class="custom-select" name="sel1" id="sel1"   onchange="CalculeBC()">
                                                    <option value="0">0%</option>
                                                    <option value="5">5%</option>
                                                    <option value="10">10%</option>
                                                    <option value="15">15%</option>
                                                    <option value="20">20%</option>
                                                    <option value="25">25%</option>
                                                    <option value="30">30%</option>
                                                    <option value="35">35%</option>
                                                </select>
                                                <input  class='taxes-sup divide' type="text" size="8" id="totalRC" disabled="disabled"/>
                                                <input  class='taxes-sup divide' type="text" name="totalRC1" size="10" id="totalRC1" hidden/>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <div style="height: 160px;" class="panel panel-info col-lg-7">
                            <div class="panel-heading col-lg-12">
                                <h4 class="panel-title">Decompte prime</h4>
                            </div>
                            <div class="panel-body col-lg-12">
                                <table class="table  table-bordered">
                                    <thead>
                                    <th style='color:green !important'>Prime nette</th>
                                    <th>Accesssoire</th>
                                    <th>Taxe</th>
                                    <th>FGA</th>
                                    <th class="t_text" style='color:green !important'>Prime Totale</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input  class='taxes-sup divide' type="text"  style="text-align: right" size="6" id="totalPN" disabled="disabled" />
                                            <input  class='taxes-sup divide net' type="text" name="totalPN1" size="8" id="totalPN1" hidden />
                                        </td>
                                        <td>
                                            <input  class='taxes-sup divide' type="text"  size="6" id="totalAC"  disabled="disabled" />
                                            <input  class='taxes-sup divide' type="text" name="accessoire" size="8" id="totalAC1" hidden />
                                        </td>
                                        <td>
                                            <input  class='taxes-sup divide' type="text"  size="6" id="taxe" disabled="disabled" />
                                            <input  class='taxes-sup divide' type="text" name="taxe1" size="8" id="taxe1" hidden/>
                                        </td>
                                        <td>
                                            <input  class='taxes-sup divide' type="text"  style="text-align: right" size="8" id="totalFG" disabled="disabled" />
                                            <input  class='taxes-sup divide' type="text" name="totalFG1" size="8" id="totalFG1" hidden/>
                                        </td>
                                        <td>
                                            <input  class='taxes-sup divide' type="text"  style="text-align: right" size="6" id="totalPT" disabled="disabled" />
                                            <input  class='taxes-sup divide' type="text" name="totalPT1" size="8" id="totalPT1" hidden/>
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
            
            <div class="mdl-cell mdl-cell--6-col"  hidden>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Calculs</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row" id="fields_row">       <!-- debut row -->
                            <div class="col-lg-3">            <!-- debut col-lg-6 -->
                                <div class="input-group">       <!-- debut input-group -->
                                    <label for="">limGant1</label>
                                    <input type="text"  name="lim1" id="lim1" class="form-control" placeholder="Nom du conducteur" aria-describedby="sizing-addon1">&nbsp;&nbsp;<span style="color: red;font-size: 15px;">*</span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3">             <!-- debut col-lg-6 -->
                                <div class="input-group">        <!-- debut input-group -->
                                    <label for="">franch1</label>
                                    <input type="text" id="franch1" name="franch1" class="form-control" placeholder="Prenom du conducteur'" aria-describedby="sizing-addon1">&nbsp;&nbsp;<span style="color: red;font-size: 15px;">*</span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <br><br><br>
                            <div class="col-lg-3">            <!-- debut col-lg-6 -->
                                <div class="input-group">
                                    <label for="">brute 1</label>      <!-- debut input-group -->
                                    <input type="text" name="brute1"  id="brute1" class="form-control" placeholder=" Année delivrance permis" aria-describedby="sizing-addon1">&nbsp;&nbsp;<span style="color: red;font-size: 15px;">*</span>
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
                                <div class="input-group"><!-- debut input-group -->
                                    <label for="">brute 10</label>
                                    <input type="text" name="brute10" id="brute11" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-3"><!-- debut col-lg-6 -->
                                <div class="input-group"><!-- debut input-group -->
                                    <label for="">prorata 10</label>
                                    <input type="text" id="prorata11" name="prorata10" class="form-control" placeholder="durée conduite" aria-describedby="sizing-addon1">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div>
                </div>
            </div>
            <div class="buttons">
                <input  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored validate-btn" onclick="sendContrat()" value="Continuer" id="valider">
                <button type="reset" value="Annuler" name="annuler" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">ANNULER</button>
            </div>
        </main>
    </form><!--form-->

     <!-- The Modal -->
    
     <div class="modal" id='effetModal'><!--Empty alert-->
    <div class="card empty-card">
        <div class="card-header empty-header">
        <p>Attention !</p>
            <!--span id='close-empty'>&times;</span-->
        </div>
        <div class="card-body">
            <h3 class="alerts">Assurez-vous que tous les champs avec le caractére <span style="color:red">*</span> sont bien renseignés pour continuer.</h3>
        </div>
    </div>
    </div><!--empty alert-->

    <div id="valeursModal" class="modal">
        <div class="card valeurs-card"><!--Modal valeurs-->
        <div class="card-header empty-header"><p>Attention !</p></div>
            <div class="card-body">
                <p class="alerts">La valeur vénale ne peut etre supérieure à la valeur neuve !</p>
            </div>
        </div>
    </div><!--Modal valeurs-->

    <div class="modal" id='empty-alert'><!--Empty alert-->
    <div class="card empty-card">
        <div class="card-header empty-header">
        <p>Attention !</p>
            <!--span id='close-empty'>&times;</span-->
        </div>
        <div class="card-body">
            <h3 class="alerts">Assurez-vous que tous les champs avec le caractére <span style="color:red">*</span> sont bien renseignés pour continuer.</h3>
        </div>
    </div>
    </div><!--empty alert-->


    <form id="hidden-form">
        <select name="" id="vertes-attestations" style="display:none !important">
            <?php
                while($vert=$vertes->fetch()){
                    echo '<option>'.$vert[1].'</option>';
                }
            ?>
        </select>
        <select name="" id="jaunes-attestations" style="display:none !important">
            <?php
                while($jaune=$jaunes->fetch()){
                    echo '<option>'.$jaune[1].'</option>';
                }
            ?>
        </select>
        <select name="" id="cedeao-attestations" style="display:none !important">
            <?php
                while($cdao=$cedeao->fetch()){
                    echo '<option>'.$cdao[1].'</option>';
                }
            ?>
        </select>
    </form>
    <!--h2--><?php //echo($item['id_police'])?><!--/h2-->

</div>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://tyugaev.github.io/number-divider/lib/number-divider.min.js"></script>
<script src="../../view/js/intlTelInput.js"></script>
<script src="../../view/js/calcul_script1.js"></script>
<script src="../../view/js/form-script.js"></script>
<script>

$(document).ready(function(){
// $("#creationEtat").prop('disabled', true);
    var attestationsVertes = [];
    var attestationsJaunes = [];
    var attestationsCedeao = [];

    function pushAttestations(selector,tab=[]){
        $(selector).each(function(){
            tab.push($(this).val())
        })
        return tab;
    }

//If the object is in the array, it will return 0, but 0 is false in Javascript 
    function checkValue(value,tab=[]){
        for(var t=0;t<tab.length;t++){
            if(tab[t]==value){
                var exist = "ok"
                break
            }else if(tab[t]!=value){
                var exist = "non"
            }
        }
        return exist
    }
    function getExist(assertion){
        if(assertion=="ok"){}else if(assertion=="non"){
            alert("Seuls les numéros d'attestation affichés vous sont autorisés.")
            // $("#attestationsForm").trigger("reset");
        }
    }
 
//Faire le controle et s'assurer que la valeur saisie est dans le plage de valeurs
    $(".attestations").on('change',function(){
        var idElement  = $(this).attr('id')
        var value      = $(this).val()
        if(idElement=="attestation-jaune"){
            var jaunesPlage =  pushAttestations('#jaunes-attestations option',attestationsJaunes);
            var jauneExists = checkValue(value,jaunesPlage);
            getExist(jauneExists)
        }else if(idElement=="attestation-verte"){
            var vertesPlage =  pushAttestations('#vertes-attestations option',attestationsVertes);
            var verteExists = checkValue(value,vertesPlage);
            getExist(verteExists)
        }else if(idElement=="attesta"){
            var cedeaoPlage  =  pushAttestations('#cedeao-attestations option',attestationsCedeao);
            var cedeaoExists = checkValue(value,cedeaoPlage);
            getExist(cedeaoExists)
        }
      
        if(jauneExists=="ok" || verteExists=="ok"){
            $("#creationEtat").prop('disabled',false);
        }
        if(cedeaoExists!="ok"){
            $("#creationEtat").prop('disabled',true);
        }else{
            $("#creationEtat").prop('disabled',false);
        }
    })

    $(function() {
        $("#attestation-verte").autocomplete({
            source: pushAttestations('#vertes-attestations option',attestationsVertes)
        });
        $("#attestation-jaune").autocomplete({
            source: pushAttestations('#jaunes-attestations option',attestationsJaunes)
        });
        $("#attesta").autocomplete({
            source: pushAttestations('#cedeao-attestations option',attestationsCedeao )
        });

    });
})
  </script>

</body>
</html>