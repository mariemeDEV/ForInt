<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Condition particuiére</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link href="../../view/style/form_v3.css" rel="stylesheet">
    <link href="../../view/style/css_etats3.css" rel="stylesheet">
    <style>
        @page {
            size: auto;   
            margin: 0;  
        }
        #Image2{
            height:126% !important
        }
    </style>
</head>
<body onload="window.print()">
<div id="wb_Image1">
<div id="wb_Heading8">
    <h6 id="Heading8">ASSURANCE AUTOMOBILE</h6></div>
<img src="../../img/images3/img0001.jpg" id="Banner1" alt="CONDITIONS PARTICULIERES">
<label for="" id="Label7">N° Police</label>
<input type="text" id="Editbox1" name="EditboxPolice" value="<?php echo $codePolice ?>" spellcheck="false">
<label for="" id="Label8">Intermediaire</label>
<input type="text" id="Editbox2" name="EditboxPolice" value="<?php echo $codeInt." ".$prenomInt." ".$nomInt; ?>" spellcheck="false">
<div id="wb_Form1">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
        <input type="text" id="Editbox4" name="EditboxAdresseS" value="<?php echo $adresseAssure; ?>" spellcheck="false">
        <input type="text" id="Editbox5" name="EditboxTelS" value="<?php echo $telAssure; ?>" spellcheck="false">
        <label for="" id="Label5" >Téléphone</label>
        <label for="" id="Label6" style='position: absolute !important;left:272px !important;top:43px !important;' >E-mail</label>
        <input type="text" id="Editbox6" style='position: absolute !important;left: 333px !important;top: 21px !important;' name="EditboxTelS" value="<?php echo $telAssure; ?>" spellcheck="false">
        <label for="" id="Label2" >Adresse</label>
    </form>
</div>
<label for="" id="Label1" >Prenom et Nom</label>
<?php //echo urlencode("https://geeksforgeeks.org/")?>
<input type="text" id="Editbox3" name="EditboxNPS" value="<?php echo $prenomAssure." ".$nomAssure; ?>" spellcheck="false">
<img src="../../img/images3/img0002.jpg" id="Banner4" alt="PERIDOE DE GARANTIE">
<div id="wb_Heading1">
    <h6 id="Heading1">Du</h6></div>
<div id="wb_Heading2">
    <h6 id="Heading2">A</h6></div>
<div id="wb_Heading3">
    <h6 id="Heading3">Au</h6></div>
<input type="text" id="Editbox9"  name="EditboxDebut" value="<?php echo $dateDebut->format('d/m/Y'); ?>" spellcheck="false">
<input type="text" id="Editbox10" name="Editbox9" value="<?php echo $heureDebut; ?>" spellcheck="false">
<input type="text" id="Editbox11" name="EditboxFin" value="<?php echo $dateFin->format('d/m/Y'); ?>" spellcheck="false">
<input type="text" id="Editbox12" name="Editbox9" value="<?php echo $heureFin; ?>" spellcheck="false">
<input type="text" id="Editbox13" name="EditboxDuree" value="<?php echo $duree; ?> Mois" spellcheck="false">
<div id="wb_Line6">
    <img src="../../img/images3/img0003.png" id="Line6" alt=""></div>
<div id="wb_Heading9">  
    <h5 id="Heading9">Durée<br></h5></div>
<div id="wb_Heading10">
    <h6 id="Heading10">Sans tacite reconduction</h6></div>
<img src="../../img/images3/img0004.jpg" id="Banner5" alt="SOUSCRIPTEUR">
<img src="../../img/images3/img0005.jpg" id="Banner6" alt="ASSURE">
<input type="text" id="Editbox14" name="EditboxConducteur" value="<?php echo $prenomConducteur." ".$nomConducteur; ?>" spellcheck="false">
<input type="text" id="Editbox15" name="EditboxAnnee" value="<?php echo $anneeConducteur; ?>" spellcheck="false">
<input type="text" id="Editbox16" name="EditboxDureeCond" value="<?php echo $dureeConduite." Ans"; ?>" spellcheck="false">
<label for="" id="Label9" >Conducteur</label>
<label for="" id="Label10">Année de délivrance de permis: </label>
<label for="" id="Label11">Durée de conduite</label>
<div id="wb_Text1">
    <span style='margin-left: -5px;'>
    <p style='    background: yellow;margin-top: -11px;margin-left: 42px;width: 96%;'><b>N° Att. : <?php echo ($attestation)?></b></p>
    <p style='background:yellow;position: relative;top:-1px;left:39px !important;'><b>CEDEAO:<?php echo $_GET['att'] ?></b></p>
    </span></div>
<div class="rest-container" style="background:green">
<img src="../../img/images3/img0007.jpg" id="Banner3" alt="CARACTERISTIQUE DU VEHICULE">
<hr id="Line11">
<div id="wb_Text3">
    <span><strong><?php echo($libCat)?></strong></span></div>
<table id="Table1">
    <tr>
        <td class="cell0"><span> Marque</span></td>
        <td class="cell1"><span > </span><span>Type</span></td>
        <td class="cell2"><span> Immatriculation</span></td>
        <td class="cell3"><span> Puissance</span></td>
        <td class="cell0"><span> Energie</span></td>
        <td class="cell1"><span> Charge Utile</span></td>
        <td class="cell4"><span> Places</span></td>
    </tr>
    <tr>
        <td class="cell5"><span> <strong><?php echo strtoupper($marque);?></strong></span></td>
        <td class="cell6"><span> <strong><?php echo strtoupper($type);?></strong></span></td>
        <td class="cell7"><span> <strong><?php echo strtoupper($immatriculation);?></strong></span></td>
        <td class="cell8"><span> <strong><?php echo $puissance;?></strong></span></td>
        <td class="cell5"><span> <strong><?php echo strtoupper($energie);?></strong></span></td>
        <td class="cell6"><span><strong> <?php echo $charge;?></strong></span></td>
        <td class="cell9"><span> <strong><?php echo $place;?></strong></span></td>
    </tr>
</table>
<table id="Table3">
    <tr>
        <td class="cell0"><span> Genre</span></td>
        <td class="cell1"><span> N° Chassis</span></td>
        <td class="cell1"><span></span><span>Cylindre</span></td>
        <td class="cell2"><span> Date 1ere MEC</span></td>
    </tr>
    <tr>
        <td class="cell0"><span> <strong><?php echo $genre;?></strong></span></td>
        <td class="cell1"><span> <strong><?php echo strtoupper($chassis);?></strong></span></td>
        <td class="cell1"><span><strong> <?php echo $cylindre;?></strong></span></td>
        <td class="cell2"><span> <strong><?php echo $mec->format('d/m/Y');?></strong></span></td>
    </tr>
</table>
<table id="Table2">
    <tr>
        <td class="cell0"><span><strong>Etendue territoriale des garanties</strong></span></td>
    </tr>
</table>
<table id="Table4">
    <tr>
        <td class="cell0"><span><strong>RC:</strong> Etats membres de la CIMA<br><strong>Autres Garanties: </strong>Assurance</span></td>
    </tr>
</table>
<table id="Table5">
    <tr>
        <td class="cell0"><label for="" id="Label13">Valeur Neuve: </label>
        </td>
        <td class="cell1"><span> </span><span><strong><?php echo($val_neuve);?></strong></span></td>
        <td class="cell0"><label for="" id="Label14">Valeur Vénale</label>
        </td>
        <td class="cell2"><span> </span><span><strong><?php echo($val_venale);?></strong></span></td>
    </tr>
</table>
<table id="Table6">
    <tr>
        <td class="cell0"><span> </span><span>GARANTIES</span></td>
        <td class="cell1"><span> LIMITATIONS DES GARANTIES (FCFA)</span></td>
        <td class="cell1"><span> FRANCHISES <br>(FCFA)</span></td>
        <td class="cell2"><span> PRIMES BRUTES ANNUELLES (FCFA)</span></td>
        <td class="cell3"><span> PRIMES BRUTES AU PRORATA (FCFA)</span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong> RESPONSABILITE CIVILE</strong></span></td>
        <td class="cell5"><span> </span><span><?php echo $lim1;?></span></td>
        <td class="cell5"><span> </span><span><?php echo $franch1;?></span></td>
        <td class="cell6"><span> <?php echo number_format($brute1,'0');?></span></td>
        <td class="cell7"><span> </span><span><?php echo number_format($prorata1);?></span></td>
    </tr>
    <tr>
        <td class="cell8"><span><strong> RECOURS TIERS INCENDIE</strong></span></td>
        <td class="cell9"><span> <?php echo $lim2;?></span></td>
        <td class="cell9"><span> <?php echo $franch2 ;?></span></td>
        <td class="cell10"><span> <?php echo $brute2;?></span></td>
        <td class="cell11"><span> </span><span><?php echo $prorata2;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong> DEFENSE ET RECOURS</strong></span></td>
        <td class="cell12"><span> </span><span><?php echo $lim3;?></span></td>
        <td class="cell12"><span> </span><span><?php echo $franch3;?></span></td>
        <td class="cell13"><span><?php echo $brute3;?></span></td>
        <td class="cell14"><span> </span><span><?php echo $prorata3;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong> INCENDIE</strong></span></td>
        <td class="cell12"><span> </span><span><?php echo $lim4;?></span></td>
        <td class="cell12"><span> </span><span><?php echo $franch4;?></span></td>
        <td class="cell13"><span> </span><span><?php echo $brute4;?></span></td>
        <td class="cell14"><span> </span><span><?php echo $prorata4;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong>VOL</strong></span></td>
        <td class="cell12"><span><?php echo $lim5;?></span></td>
        <td class="cell12"><span><?php echo $franch5;?></span></td>
        <td class="cell13"><span><?php echo $brute5;?></span></td>
        <td class="cell14"><span><?php echo $prorata5;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong>BRIS DE GLACE</strong></span></td>
        <td class="cell12"><span><?php echo $lim6;?></span></td>
        <td class="cell12"><span><?php echo $franch6;?></span></td>
        <td class="cell13"><span><?php echo $brute6;?></span></td>
        <td class="cell14"><span><?php echo $prorata6;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong><?php echo $vri;?></strong></span></td>
        <td class="cell12"><span><?php echo $lim7;?></span></td>
        <td class="cell12"><span><?php echo $franch7;?></span></td>
        <td class="cell13"><span><?php echo $brute7;?></span></td>
        <td class="cell14"><span><?php echo $prorata7;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong><?php echo $titreAv;?></strong></span></td>
        <td class="cell12"><span><?php echo $lim8;?></span></td>
        <td class="cell12"><span><?php echo $franch8;?></span></td>
        <td class="cell13"><span><?php echo $brute9;?></span></td>
        <td class="cell14"><span><?php echo $prorata8;?></span></td>
    </tr>
    <tr>
        <td class="cell8"><span><strong><?php echo $titrePs;?></strong></span></td>
        <td class="cell15"><span><?php echo $lim9;?></span></td>
        <td class="cell15"><span><?php echo $franch9;?></span></td>
        <td class="cell10"><span><?php echo $brute9;?></span></td>
        <td class="cell11"><span><?php echo $prorata9;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong>CARTE BRUNE CEDEAO</strong></span></td>
        <td class="cell12"><span>GRATUIT</span></td>
        <td class="cell12"><span></span></td>
        <td class="cell13"><span></span></td>
        <td class="cell14"><span></span></td>
    </tr>
    <tr>
        <td class="cell4"><span><strong>ASSISTANCE</strong></span></td>
        <td class="cell12"><span><?php if($lim10==0 ||$lim10=='') echo ""; else echo $lim10 ;?></span></td>
        <td class="cell12"><span><?php if($franch10==0 ||$franch10=='') echo ""; else echo $franch10 ;?></span></td>
        <td class="cell13"><span><?php  echo $brute10 ;?></span></td>
        <td class="cell14"><span><?php  echo $prorata10 ;?></span></td>
    </tr>

</table>
<img src="../../img/images3/img0008.jpg" id="Banner7" alt="REDUCTION/MAJORATION">
<table id="Table7">
    <tr>
        <td class="cell0"><span><strong> </strong></span><span><strong>BONUS RC</strong></span></td>
    </tr>
    <tr>
        <td class="cell1"><div align="justify"><span> <?php echo $percentBC ;?>%&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  <?php echo $bc ?></span></div></td>
    </tr>
</table>
<table id="Table8">
    <tr>
        <td class="cell0"><span> </span><span><strong> </strong></span><span><strong style='font-size:12px !important'>REDUCTION COMMERCIALE</strong></span></td>
    </tr>
    <tr>
        <td class="cell1"><div align="justify"><span><?php echo $percentRC ;?>%&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $rc ?></span></div></td>
    </tr>
</table>
<img src="../../img/images3/img0009.jpg" id="Banner8" alt="DECOMPTE DES PRIMES">
<img src="../../img/images3/img0010.jpg" id="Banner9" alt="Prime nette">
<img src="../../img/images3/img0011.jpg" id="Banner10" alt="Accessoires">
<img src="../../img/images3/img0012.jpg" id="Banner11" alt="Taxe">
<img src="../../img/images3/img0013.jpg" id="Banner12" alt="Fond de garantie">
<img src="../../img/images3/img0014.jpg" id="Banner13" alt="Prime Totale">
<table  id="Table10">
    <tr>
        <td class="cell0"><span> <?php echo number_format($accessoire)  ?></span></td>
    </tr>
</table>
<table id="Table11">
    <tr>
        <td class="cell0"><span> <?php echo number_format($taxe) ; ?></span></td>
    </tr>
</table>
<table id="Table12">
    <tr>
        <td class="cell0"><span> <?php echo number_format($fond) ; ?></span></td>
    </tr>
</table>
<table id="Table13">
    <tr>
        <td class="cell0"><span>  <?php echo number_format($totale); ?></span></td>
    </tr>
</table>
<table id="Table9">
    <tr>
        <td class="cell0"><span>  <?php echo number_format($nette); ?></span></td>
    </tr>
</table>
<table id="Table14">
    <tr>
        <td class="cell0"><div id="wb_Text4">
                <span><strong><em>Il n'est rien dérogé aux autres clauses et conditions de la police auxquelles le présent contrat demeure annexé. Sont nulles toutes adjonctions ou modifications matérielles non revêtues du visa de la compagnie.</em></strong></span>
            </div>
        </td>
    </tr>
</table>
<div id="wb_Text5">
    <span>
        <strong><p style="text-decoration:none">DECLARATION DU SOUSCRIPTEUR</p></strong>
        Je soussigné, déclare que les réponses données ci-dessus sont sincères et&nbsp;à ma connaissance exactes.<br>En cas de fausses déclarations, il sera fait application des articles 18 et 19 du code CIMA.<br>Je reconnais que la prise d'effet de la garantie est subordonnée au paiement intégral de la prime et avoir reçu un exemplaire des conditions générales.
    </span>
</div>
<div id="wb_Checkbox1">
    <img src='../../img/images/checked.png' id="Checkbox1" style='width: 112% !important'>
</div>
<label for="" id="Label15">J'autorise Saham Sénégal à utiliser mes données personnelles à des fins commerciales.</label>
<hr id="Line13">
<label for="" id="Label16">Fait en deux exemplaires à Dakar, le &nbsp; <?php echo $datePolice; ?></label>
<div id="wb_Text7">
    <span><strong><u>Pour le Souscripteur</u></strong></span></div>
<div id="wb_Text8">
    <span><strong><u>Pour la Compagnie</u></strong></span></div>
<div id="wb_Text6">
    <span>Siège Social : Boulevard de la Madeleine x rue Carnot BP : 21244 Dakar - Sénégal<br>Tel : +221 33 849 69 00 - Fax : +221 33 823 23 66 - Email : senegal@sahamassurance.com - www.sahamassurance.sn</span>
</div>
<div id="wb_Line2">
    <img src="../../img/images3/img0015.png" id="Line2" alt=""></div>
<div id="wb_Image2">
    <img src="../../img/images3/LogoSaham1.jpg" id="Image2" alt="">
</div>
<div id="wb_Form2">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form2">
        <label for="" id="Label3">Prenom et Nom</label>
        <label for="" id="Label4">Téléphone</label>
        <label for="" id="Label6">Adresse</label>
        <input type="text" id="Editbox8" name="EditboxNPA" value="<?php echo $prenomAssure." ".$nomAssure;?>" spellcheck="false">
        <input type="text" id="Editbox6" name="EditboxAdresseA" value="<?php echo $adresseAssure;?>" spellcheck="false">
        <input type="text" id="Editbox7" name="EditboxTelA" value="<?php echo $telAssure;?>" spellcheck="false">
    </form>
</div>
<label class="Heading 5 <h5>" for="" id="Label17">Facture N°</label>
<div id="wb_Line1">
    <img src="../../img/images3/img0017.png" id="Line1" alt=""></div>
<!-- <div id="wb_Line3"rc="../../img/images3/img0018.png" id="Line3" alt=""></div> -->
<div id="wb_Line4">
    <img src="../../img/images3/img0019.png" id="Line4" alt=""></div>
<div id="wb_Line5">
    <img src="../../img/images3/img0020.png" id="Line5" alt=""></div>
<label for="" id="Label18" ><?php echo $codeInt ;?></label>
<label for="" id="Label21" ><?php echo $codePolice ;?></label>
<label for="" id="Label25" ><?php echo $dateDebut->format('d/m/Y');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $heureDebut ;?></label>
<label for="" id="Label26" ><?php echo $dateFin->format('d/m/Y');?>&nbsp;&nbsp;&nbsp;<?php echo $heureFin ;?></label>
<label for="" id="Label27" ><?php echo $codeInt." ".$prenomInt." ".$nomInt ;?></label>
<label for="" id="Label28" ><?php echo strtoupper($immatriculation);?></label>
<label for="" id="Label29" >Prime Nette</label>
<label for="" id="Label30" >Accessoires</label>
<label for="" id="Label31" >Taxe</label>
<label for="" id="Label32" >Fonds de garantie</label>
<div id="wb_Line8">
    <img src="../../img/images3/img0026.png" id="Line8" alt=""></div>
<div id="wb_Shape6">
    <img src="../../img/images3/img0027.png" id="Shape6" alt="" style="width:121px;height:24px;"></div>
<div id="wb_Line7">
    <img src="../../img/images3/img0021.png" id="Line7" alt=""></div>
<div id="wb_Text2" >
    <div><span > <?php echo $prenomAssure." "."$nomAssure"; ?><br></span>
        <span ><br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </span>
        <span > </span>
        <span ><?php echo $codePolice ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <?php echo $dateDebut->format('d/m/Y') ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <?php echo $dateFin->format('d/m/Y') ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($marque) ?><br></span>
        <span ><br><br></span><span>&nbsp; <?php echo strtoupper($immatriculation) ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <?php echo $genre ?><br></span>
        <span ><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </span>
        <span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo strtoupper($libCat);?></span></div></div>
<div id="wb_Text9">
    <div>
        <span>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

            <?php echo $codePolice; ?><br>
            <?php echo $dateDebut->format('d/m/Y'); ?><br> <?php echo $dateFin->format('d/m/Y'); ?><br></span><span></span><span>
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        </span><span><?php echo strtoupper($marque); ?><br></span><span><br><br></span><span>
            &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($immatriculation); ?></span><span><br></span><span>
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  VP/CI<br></span><span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($libCat);?></span>
    </div>
</div>
<div id="wb_Text10">
    <div>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prenomAssure." "."$nomAssure"; ?></span><span><br></span><span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span> </span><span><?php echo $codePolice; ?></span><span><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span>&nbsp;&nbsp; &nbsp;&nbsp;  <?php echo $dateDebut->format('d/m/Y'); ?>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $dateFin->format('d/m/Y'); ?></span><span><br><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span><span><?php echo strtoupper($marque); ?><br></span><span><br><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span><span> <?php echo strtoupper($immatriculation); ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; VP/CI<br> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo strtoupper($libCat);?></span></div></div>
<div id="wb_Text11">
    <span><strong>Police N° :</strong></span></div>
<div id="wb_Text12">
    <span><strong>Date d'effet :</strong></span></div>
<div id="wb_Text13">
    <span><strong>Date d'expiration :</strong></span></div>
<div id="wb_Text14">
    <span><strong>Bureau Souscription :</strong></span></div>
<div id="wb_Text15">
    <span><strong>N° Immatriculation :</strong></span></div>
<div id="wb_Image3">
    <img src="../../img/images3/LogoSaham1.jpg" id="Image3" alt=""></div>
<input type="text" id="Editbox18"  name="EditboxFacture" value="<?php echo $numFacture; ?>" spellcheck="false">
<input type="text" id="Editbox19"  name="EditboxPn" value="<?php echo number_format($nette); ?>" spellcheck="false">
<input type="text" id="Editbox20"  name="EditboxAcc" value="<?php echo number_format($accessoire); ?>" spellcheck="false">
<input type="text" id="Editbox21"  name="EditboxTaxe" value="<?php echo number_format($taxe) ; ?>" spellcheck="false">
<input type="text" id="Editbox22"  name="EditboxFond" value="<?php echo number_format($fond) ; ?>" spellcheck="false">
<input type="text" id="Editbox23"  name="EditboxTotalPNS" value="<?php echo number_format($totale); ?>" spellcheck="false">
<input type="text" id="Editbox24"  name="EditboxFacture" value="<?php echo strtoupper($libCat);?>" spellcheck="false">
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js"></script>
</body>
</html>