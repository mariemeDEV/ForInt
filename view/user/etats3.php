<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Saham Assurance SN</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link href="../../view/style/form_v3.css" rel="stylesheet">
    <link href="../../view/style/css_etats3.css" rel="stylesheet">
</head>
<body onload="write.print()">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:369px;height:1371px;z-index:17;">
<div id="wb_Heading8" style="position:absolute;left:571px;top:30px;width:210px;height:20px;text-align:center;z-index:18;">
    <h6 id="Heading8">ASSURANCE AUTOMOBILE</h6></div>
<img src="../../img/images3/img0001.jpg" id="Banner1" alt="CONDITIONS PARTICULIERES" style="border-width:0;position:absolute;left:386px;top:50px;width:580px;height:14px;z-index:19;">
<label for="" id="Label7" style="position:absolute;left:400px;top:66px;width:62px;height:12px;line-height:12px;z-index:20;">N° Police</label>
<input type="text" id="Editbox1" style="position:absolute;left:470px;top:66px;width:82px;height:12px;line-height:12px;z-index:21;" name="EditboxPolice" value="<?php echo $codePolice ?>" spellcheck="false">
<label for="" id="Label8" style="position:absolute;left:779px;top:66px;width:62px;height:16px;line-height:16px;z-index:22;">Intermediaire</label>
<input type="text" id="Editbox2" style="position:absolute;left:859px;top:66px;width:82px;height:12px;line-height:12px;z-index:23;" name="EditboxPolice" value="<?php echo $codeInt." ".$prenomInt." ".$nomInt; ?>" spellcheck="false">
<div id="wb_Form1" style="position:absolute;left:390px;top:100px;width:250px;height:84px;z-index:24;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
        <input type="text" id="Editbox4" style="position:absolute;left:100px;top:31px;width:140px;height:12px;line-height:12px;z-index:0;" name="EditboxAdresseS" value="<?php echo $adresseAssure; ?>" spellcheck="false">
        <input type="text" id="Editbox5" style="position:absolute;left:100px;top:60px;width:140px;height:12px;line-height:12px;z-index:1;" name="EditboxTelS" value="<?php echo $telAssure; ?>" spellcheck="false">
        <label for="" id="Label5" style="position:absolute;left:9px;top:62px;width:65px;height:14px;line-height:14px;z-index:2;">Téléphone</label>
        <label for="" id="Label2" style="position:absolute;left:9px;top:31px;width:47px;height:14px;line-height:14px;z-index:3;">Adresse</label>
    </form>
</div>
<label for="" id="Label1" style="position:absolute;left:393px;top:99px;width:76px;height:15px;line-height:15px;z-index:25;">Prenom et Nom</label>
<input type="text" id="Editbox3" style="position:absolute;left:490px;top:100px;width:141px;height:12px;line-height:12px;z-index:26;" name="EditboxNPS" value="<?php echo $prenomAssure." ".$nomAssure; ?>" spellcheck="false">
<img src="../../img/images3/img0002.jpg" id="Banner4" alt="PERIDOE DE GARANTIE" style="border-width:0;position:absolute;left:510px;top:184px;width:281px;height:16px;z-index:27;">
<div id="wb_Heading1" style="position:absolute;left:386px;top:210px;width:31px;height:10px;text-align:center;z-index:28;">
    <h6 id="Heading1">Du</h6></div>
<div id="wb_Heading2" style="position:absolute;left:393px;top:244px;width:16px;height:10px;text-align:center;z-index:29;">
    <h6 id="Heading2">A</h6></div>
<div id="wb_Heading3" style="position:absolute;left:520px;top:210px;width:23px;height:10px;text-align:center;z-index:30;">
    <h6 id="Heading3">Au</h6></div>
<input type="text" id="Editbox9" style="position:absolute;left:420px;top:205px;width:82px;height:12px;line-height:12px;z-index:31;" name="EditboxDebut" value="<?php echo $dateDebut->format('d/m/Y'); ?>" spellcheck="false">
<input type="text" id="Editbox10" style="position:absolute;left:414px;top:238px;width:86px;height:12px;line-height:12px;z-index:32;" name="Editbox9" value="<?php echo $heureDebut; ?>" spellcheck="false">
<input type="text" id="Editbox11" style="position:absolute;left:547px;top:204px;width:81px;height:12px;line-height:12px;z-index:33;" name="EditboxFin" value="<?php echo $dateFin->format('d/m/Y'); ?>" spellcheck="false">
<input type="text" id="Editbox12" style="position:absolute;left:546px;top:238px;width:84px;height:12px;line-height:12px;z-index:34;" name="Editbox9" value="<?php echo $heureFin; ?>" spellcheck="false">
<input type="text" id="Editbox13" style="position:absolute;left:717px;top:204px;width:44px;height:12px;line-height:12px;z-index:35;" name="EditboxDuree" value="<?php echo $duree; ?> Mois" spellcheck="false">
<div id="wb_Line6" style="position:absolute;left:795px;top:197px;width:2px;height:29px;z-index:36;">
    <img src="../../img/images3/img0003.png" id="Line6" alt=""></div>
<div id="wb_Heading9" style="position:absolute;left:668px;top:210px;width:37px;height:10px;text-align:center;z-index:37;">
    <h5 id="Heading9">Durée<br></h5></div>
<div id="wb_Heading10" style="position:absolute;left:818px;top:210px;width:144px;height:10px;text-align:center;z-index:38;">
    <h6 id="Heading10">Sans tacite reconduction</h6></div>
<img src="../../img/images3/img0004.jpg" id="Banner5" alt="SOUSCRIPTEUR" style="border-width:0;position:absolute;left:390px;top:86px;width:250px;height:14px;z-index:39;">
<img src="../../img/images3/img0005.jpg" id="Banner6" alt="ASSURE" style="border-width:0;position:absolute;left:708px;top:86px;width:262px;height:14px;z-index:40;">
<img src="../../img/images3/img0006.jpg" id="Banner2" alt="CONDUCTEUR HABITUEL" style="border-width:0;position:absolute;left:510px;top:270px;width:281px;height:20px;z-index:41;">
<input type="text" id="Editbox14" style="position:absolute;left:446px;top:298px;width:128px;height:12px;line-height:12px;z-index:42;" name="EditboxConducteur" value="<?php echo $prenomConducteur." ".$nomConducteur; ?>" spellcheck="false">
<input type="text" id="Editbox15" style="position:absolute;left:734px;top:299px;width:55px;height:12px;line-height:12px;z-index:43;" name="EditboxAnnee" value="<?php echo $anneeConducteur; ?>" spellcheck="false">
<input type="text" id="Editbox16" style="position:absolute;left:910px;top:299px;width:50px;height:12px;line-height:12px;z-index:44;" name="EditboxDureeCond" value="<?php echo $dureeConduite." Ans"; ?>" spellcheck="false">
<label for="" id="Label9" style="position:absolute;left:386px;top:300px;width:63px;height:12px;line-height:12px;z-index:45;">Conducteur</label>
<label for="" id="Label10" style="position:absolute;left:590px;top:300px;width:137px;height:12px;line-height:12px;z-index:46;">Année de délivrance de permis: </label>
<label for="" id="Label11" style="position:absolute;left:810px;top:299px;width:81px;height:12px;line-height:12px;z-index:47;">Durée de conduite</label>
<hr id="Line10" style="position:absolute;left:380px;top:330px;width:163px;height:20px;z-index:48;">
<div id="wb_Text1" style="position:absolute;left:382px;top:335px;width:78px;height:11px;z-index:49;">
    <span style="color:#000000;font-family:Arial;font-size:9.3px;"><strong>N° Attestation</strong></span></div>
<input type="text" id="Editbox17" style="position:absolute;left:448px;top:328px;width:85px;height:14px;line-height:14px;z-index:50;" name="EditboxAttest" value="<?php echo $attestation; ?>" spellcheck="false">
<img src="../../img/images3/img0007.jpg" id="Banner3" alt="CARACTERISTIQUE DU VEHICULE" style="border-width:0;position:absolute;left:566px;top:331px;width:207px;height:19px;z-index:51;">
<hr id="Line11" style="position:absolute;left:788px;top:332px;width:94px;height:16px;z-index:52;">
<div id="wb_Text3" style="position:absolute;left:790px;top:331px;width:100px;height:16px;z-index:53;">
    <span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><strong>Catégorie</strong></span></div>
<table style="position:absolute;left:378px;top:352px;width:443px;height:37px;z-index:54;" id="Table1">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:10px;"> Marque</span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:8px;line-height:10px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:10px;">Type</span></td>
        <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:8px;line-height:10px;"> Immatriculation</span></td>
        <td class="cell3"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> Puissance</span></td>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> Energie</span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:8px;line-height:10px;"> Charge Utile</span></td>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> Places</span></td>
    </tr>
    <tr>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:10px;"> <strong><?php echo strtoupper($marque);?></strong></span></td>
        <td class="cell6"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:10px;"> <strong><?php echo strtoupper($type);?></strong></span></td>
        <td class="cell7"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <strong><?php echo strtoupper($immatriculation);?></strong></span></td>
        <td class="cell8"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <strong><?php echo $puissance;?></strong></span></td>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:10px;"> <strong><?php echo strtoupper($energie);?></strong></span></td>
        <td class="cell6"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong> <?php echo $charge;?></strong></span></td>
        <td class="cell9"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <strong><?php echo $place;?></strong></span></td>
    </tr>
</table>
<table style="position:absolute;left:379px;top:398px;width:441px;height:40px;z-index:55;" id="Table3">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> Genre</span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> N° Chassis</span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:12px;line-height:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:15px;">Cylindre</span></td>
        <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> Date 1ere MEC</span></td>
    </tr>
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <strong><?php echo $genre;?></strong></span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <strong><?php echo strtoupper($chassis);?></strong></span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong> <?php echo $cylindre;?></strong></span></td>
        <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <strong><?php echo $mec->format('d/m/Y');?></strong></span></td>
    </tr>
</table>
<table style="position:absolute;left:818px;top:352px;width:152px;height:39px;z-index:56;" id="Table2">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong>Etendue territoriale des garanties</strong></span></td>
    </tr>
</table>
<table style="position:absolute;left:820px;top:398px;width:150px;height:40px;z-index:57;" id="Table4">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><strong>RC:</strong> Etats membres de la CIMA<br><strong>Autres Garanties: </strong>Assurance</span></td>
    </tr>
</table>
<table style="position:absolute;left:598px;top:438px;width:372px;height:29px;z-index:58;" id="Table5">
    <tr>
        <td class="cell0"><label for="" id="Label13" style="display:block;width:100%;;height:24px;line-height:24px;z-index:4;">Valeur Neuve: </label>
        </td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:12px;line-height:16px;"><strong><?php echo number_format($val_neuve);?></strong></span></td>
        <td class="cell0"><label for="" id="Label14" style="display:block;width:100%;;height:24px;line-height:24px;z-index:5;">Valeur Vénale</label>
        </td>
        <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:12px;line-height:16px;"><strong><?php echo number_format($val_venale);?></strong></span></td>
    </tr>
</table>
<table style="position:absolute;left:380px;top:466px;width:591px;height:234px;z-index:59;" id="Table6">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:12px;line-height:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:15px;">GARANTIES</span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> LIMITATIONS DES GARANTIES (FCFA)</span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> FRANCHISES <br>(FCFA)</span></td>
        <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> PRIMES BRUTES ANNUELLES (FCFA)</span></td>
        <td class="cell3"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> PRIMES BRUTES AU PRORATA (FCFA)</span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong> RESPONSABILITE CIVILE</strong></span></td>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:16px;"><?php echo $lim1;?></span></td>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:16px;"><?php echo $franch1;?></span></td>
        <td class="cell6"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <?php echo number_format($brute1,'0');?></span></td>
        <td class="cell7"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:15px;"><?php echo number_format($prorata1);?></span></td>
    </tr>
    <tr>
        <td class="cell8"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong> RECOURS TIERS INCENDIE</strong></span></td>
        <td class="cell9"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <?php echo $lim2;?></span></td>
        <td class="cell9"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <?php echo $franch2 ;?></span></td>
        <td class="cell10"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"> <?php echo $brute2;?></span></td>
        <td class="cell11"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:15px;"><?php echo $prorata2;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong> DEFENSE ET RECOURS</strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:16px;"><?php echo $lim3;?></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:16px;"><?php echo $franch3;?></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $brute3;?></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:15px;"><?php echo $prorata3;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong> INCENDIE</strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:16px;"><?php echo $lim4;?></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:15px;"><?php echo $franch4;?></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:16px;"><?php echo $brute4;?></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:15px;"><?php echo $prorata4;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong>VOL</strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $lim5;?></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $franch5;?></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $brute5;?></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $prorata5;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong>BRIS DE GLACE</strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $lim6;?></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $franch6;?></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $brute6;?></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $prorata6;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong><?php echo $vri;?></strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $lim7;?></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $franch7;?></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $brute7;?></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $prorata7;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong><?php echo $titreAv;?></strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $lim8;?></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $franch8;?></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $brute9;?></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $prorata8;?></span></td>
    </tr>
    <tr>
        <td class="cell8"><span style="color:#000000;font-family:Arial;font-size:8.7px;line-height:11px;"><strong><?php echo $titrePs;?></strong></span></td>
        <td class="cell15"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $lim9;?></span></td>
        <td class="cell15"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $franch9;?></span></td>
        <td class="cell10"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $brute9;?></span></td>
        <td class="cell11"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php echo $prorata9;?></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong>CARTE BRUNE CEDEAO</strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;">GRATUIT</span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"></span></td>
    </tr>
    <tr>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:11px;"><strong>ASSISTANCE</strong></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php if($lim10==0 ||$lim10=='') echo ""; else echo $lim10 ;?></span></td>
        <td class="cell12"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php if($franch10==0 ||$franch10=='') echo ""; else echo $franch10 ;?></span></td>
        <td class="cell13"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php  echo $brute10 ;?></span></td>
        <td class="cell14"><span style="color:#000000;font-family:Arial;font-size:9.3px;line-height:12px;"><?php  echo $prorata10 ;?></span></td>
    </tr>

</table>
<img src="../../img/images3/img0008.jpg" id="Banner7" alt="REDUCTION/MAJORATION" style="border-width:0;position:absolute;left:500px;top:720px;width:319px;height:20px;z-index:60;">
<table style="position:absolute;left:500px;top:740px;width:131px;height:44px;z-index:61;" id="Table7">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong> </strong></span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"><strong>BONUS RC</strong></span></td>
    </tr>
    <tr>
        <td class="cell1"><div align="justify"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo $percentBC ;?>%&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  <?php echo $bc ?></span></div></td>
    </tr>
</table>
<table style="position:absolute;left:640px;top:740px;width:178px;height:46px;z-index:62;" id="Table8">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong> </strong></span><span style="color:#000000;font-family:Arial;font-size:12px;line-height:19px;"><strong>REDUCTION COMMERCIALE</strong></span></td>
    </tr>
    <tr>
        <td class="cell1"><div align="justify"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $percentRC ;?>%&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $rc ?></span></div></td>
    </tr>
</table>
<img src="../../img/images3/img0009.jpg" id="Banner8" alt="DECOMPTE DES PRIMES" style="border-width:0;position:absolute;left:500px;top:790px;width:319px;height:17px;z-index:63;">
<img src="../../img/images3/img0010.jpg" id="Banner9" alt="Prime nette" style="border-width:0;position:absolute;left:380px;top:807px;width:89px;height:13px;z-index:64;">
<img src="../../img/images3/img0011.jpg" id="Banner10" alt="Accessoires" style="border-width:0;position:absolute;left:484px;top:807px;width:95px;height:13px;z-index:65;">
<img src="../../img/images3/img0012.jpg" id="Banner11" alt="Taxe" style="border-width:0;position:absolute;left:600px;top:807px;width:88px;height:13px;z-index:66;">
<img src="../../img/images3/img0013.jpg" id="Banner12" alt="Fond de garantie" style="border-width:0;position:absolute;left:719px;top:807px;width:125px;height:13px;z-index:67;">
<img src="../../img/images3/img0014.jpg" id="Banner13" alt="Prime Totale" style="border-width:0;position:absolute;left:861px;top:807px;width:105px;height:12px;z-index:68;">
<table style="position:absolute;left:483px;top:820px;width:97px;height:23px;z-index:69;" id="Table10">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo number_format($accessoire)  ?></span></td>
    </tr>
</table>
<table style="position:absolute;left:599px;top:820px;width:89px;height:23px;z-index:70;" id="Table11">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo number_format($taxe) ; ?></span></td>
    </tr>
</table>
<table style="position:absolute;left:718px;top:820px;width:127px;height:23px;z-index:71;" id="Table12">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo number_format($fond) ; ?></span></td>
    </tr>
</table>
<table style="position:absolute;left:861px;top:820px;width:105px;height:23px;z-index:72;" id="Table13">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">  <?php echo number_format($totale); ?></span></td>
    </tr>
</table>
<table style="position:absolute;left:379px;top:820px;width:92px;height:23px;z-index:73;" id="Table9">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">  <?php echo number_format($nette); ?></span></td>
    </tr>
</table>
<table style="position:absolute;left:380px;top:850px;width:584px;height:44px;z-index:74;" id="Table14">
    <tr>
        <td class="cell0"><div id="wb_Text4">
                <span style="color:#000000;font-family:Arial;font-size:9.3px;"><strong><em>Il n'est rien dérogé aux autres clauses et conditions de la police auxquelles le présent contrat demeure annexé. Sont nulles toutes adjonctions ou modifications matérielles non revêtues du visa de la compagnie.</em></strong></span>
            </div>
        </td>
    </tr>
</table>
<div id="wb_Text5" style="position:absolute;left:380px;top:900px;width:579px;height:83px;z-index:75;">
    <span style="color:#000000;font-family:Arial;font-size:9.3px;"><strong><u>DECLARATION DU SOUSCRIPTEUR<br></u></strong>Je soussigné, déclare que les réponses données ci-dessus sont sincères et&nbsp; à ma connaissance exactes.<br>En cas de fausses déclarations, il sera fait application des articles 18 et 19 du code CIMA.<br>Je reconnais que la prise d'effet de la garantie est subordonnée au paiement intégral de la prime et avoir reçu un exemplaire des conditions générales.<br><br></span></div>
<div id="wb_Checkbox1" style="position:absolute;left:391px;top:979px;width:20px;height:20px;z-index:76;">
    <input type="checkbox" id="Checkbox1" name="Checkbox1" value="on" checked style="position:absolute;left:0;top:0;"><label for="Checkbox1"></label></div>
<label for="" id="Label15" style="position:absolute;left:411px;top:978px;width:430px;height:14px;line-height:14px;z-index:77;">J'autorise Saham Sénégal à utiliser mes données personnelles à des fins commerciales.</label>
<hr id="Line13" style="position:absolute;left:490px;top:1000px;width:342px;height:22px;z-index:78;">
<label for="" id="Label16" style="position:absolute;left:560px;top:1000px;width:218px;height:14px;line-height:14px;z-index:79;">Fait en deux exemplaires à Dakar, le &nbsp; <?php echo $datePolice; ?></label>
<div id="wb_Text7" style="position:absolute;left:396px;top:1020px;width:130px;height:14px;z-index:80;">
    <span style="color:#000000;font-family:Arial;font-size:11px;"><strong><u>Pour le Souscripteur</u></strong></span></div>
<div id="wb_Text8" style="position:absolute;left:846px;top:1020px;width:116px;height:14px;z-index:81;">
    <span style="color:#000000;font-family:Arial;font-size:11px;"><strong><u>Pour la Compagnie</u></strong></span></div>
<div id="wb_Text6" style="position:absolute;left:380px;top:1070px;width:563px;height:20px;text-align:justify;z-index:82;">
    <span style="color:#000000;font-family:Arial;font-size:8px;">Siège Social : Boulevard de la Madeleine x rue Carnot BP : 21244 Dakar - Sénégal<br>Tel : +221 33 849 69 00 - Fax : +221 33 823 23 66 - Email : senegal@sahamassurance.com - www.sahamassurance.sn</span></div>
<div id="wb_Line2" style="position:absolute;left:367px;top:1106px;width:600px;height:2px;z-index:83;">
    <img src="../../img/images3/img0015.png" id="Line2" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:386px;top:0px;width:170px;height:40px;z-index:84;">
    <img src="../../img/images3/LogoSaham1.jpg" id="Image2" alt=""></div>
<div id="wb_Form2" style="position:absolute;left:709px;top:99px;width:261px;height:85px;z-index:85;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form2">
        <label for="" id="Label3" style="position:absolute;left:3px;top:0px;width:77px;height:15px;line-height:15px;z-index:10;">Prenom et Nom</label>
        <label for="" id="Label4" style="position:absolute;left:9px;top:62px;width:65px;height:14px;line-height:14px;z-index:11;">Téléphone</label>
        <label for="" id="Label6" style="position:absolute;left:9px;top:31px;width:47px;height:14px;line-height:14px;z-index:12;">Adresse</label>
        <input type="text" id="Editbox8" style="position:absolute;left:110px;top:0px;width:141px;height:12px;line-height:12px;z-index:13;" name="EditboxNPA" value="<?php echo $prenomAssure." ".$nomAssure;?>" spellcheck="false">
        <input type="text" id="Editbox6" style="position:absolute;left:110px;top:31px;width:140px;height:12px;line-height:12px;z-index:14;" name="EditboxAdresseA" value="<?php echo $adresseAssure;?>" spellcheck="false">
        <input type="text" id="Editbox7" style="position:absolute;left:110px;top:62px;width:140px;height:12px;line-height:12px;z-index:15;" name="EditboxTelA" value="<?php echo $telAssure;?>" spellcheck="false">
    </form>
</div>
<label class="Heading 5 <h5>" for="" id="Label17" style="position:absolute;left:683px;top:1139px;width:93px;height:22px;line-height:22px;z-index:86;">Facture N°</label>
<div id="wb_Line1" style="position:absolute;left:386px;top:1156px;width:570px;height:2px;z-index:87;">
    <img src="../../img/images3/img0017.png" id="Line1" alt=""></div>
<!-- <div id="wb_Line3" style="position:absolute;left:386px;top:1359px;width:570px;height:2px;z-index:88;">
    <img src="../../img/images3/img0018.png" id="Line3" alt=""></div> -->
<div id="wb_Line4" style="position:absolute;left:386px;top:1160px;width:2px;height:204px;z-index:89;">
    <img src="../../img/images3/img0019.png" id="Line4" alt=""></div>
<div id="wb_Line5" style="position:absolute;left:956px;top:1160px;width:2px;height:204px;z-index:90;">
    <img src="../../img/images3/img0020.png" id="Line5" alt=""></div>
<label for="" id="Label18" style="position:absolute;left:483px;top:1203px;width:36px;height:16px;line-height:16px;z-index:91;"><?php echo $codeInt ;?></label>
<label for="" id="Label21" style="position:absolute;left:517px;top:1203px;width:89px;height:16px;line-height:16px;z-index:92;"><?php echo $codePolice ;?></label>
<label for="" id="Label25" style="position:absolute;left:490px;top:1235px;width:150px;height:16px;line-height:16px;z-index:93;"><?php echo $dateDebut->format('d/m/Y');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $heureDebut ;?></label>
<label for="" id="Label26" style="position:absolute;left:492px;top:1263px;width:170px;height:16px;line-height:16px;z-index:94;"><?php echo $dateFin->format('d/m/Y');?>&nbsp;&nbsp;&nbsp;<?php echo $heureFin ;?></label>
<label for="" id="Label27" style="position:absolute;left:554px;top:1328px;width:124px;height:16px;line-height:16px;z-index:95;"><?php echo $codeInt." ".$prenomInt." ".$nomInt ;?></label>
<label for="" id="Label28" style="position:absolute;left:532px;top:1297px;width:74px;height:16px;line-height:16px;z-index:96;"><?php echo strtoupper($immatriculation);?></label>
<label for="" id="Label29" style="position:absolute;left:710px;top:1180px;width:81px;height:16px;line-height:16px;z-index:97;">Prime Nette</label>
<label for="" id="Label30" style="position:absolute;left:710px;top:1220px;width:101px;height:16px;line-height:16px;z-index:98;">Accessoires</label>
<label for="" id="Label31" style="position:absolute;left:710px;top:1260px;width:53px;height:16px;line-height:16px;z-index:99;">Taxe</label>
<label for="" id="Label32" style="position:absolute;left:710px;top:1296px;width:112px;height:16px;line-height:16px;z-index:100;">Fonds de garantie</label>
<div id="wb_Line8" style="position:absolute;left:806px;top:1316px;width:140px;height:3px;z-index:101;">
    <img src="../../img/images3/img0026.png" id="Line8" alt=""></div>
<div id="wb_Shape6" style="position:absolute;left:704px;top:1330px;width:121px;height:24px;z-index:102;">
    <img src="../../img/images3/img0027.png" id="Shape6" alt="" style="width:121px;height:24px;"></div>
<div id="wb_Line7" style="position:absolute;left:688px;top:1160px;width:2px;height:200px;z-index:103;">
    <img src="../../img/images3/img0021.png" id="Line7" alt=""></div>
<div id="wb_Text2" style="position:absolute;left:80px;top:1120px;width:263px;height:160px;z-index:104;">
    <div style="
-moz-transform: rotate(-90deg) translate(0, 100%);
-moz-transform-origin: 0% 100%;
-o-transform: rotate(-90deg) translate(0, 100%);
-o-transform-origin: 0% 100%;
-webkit-transform: rotate(-90deg) translate(0, 100%);
-webkit-transform-origin: 0% 100%;
-ms-transform: translate(0%, 106%) rotate(-90deg);
-ms-transform-origin: 0% 0%;
transform: translate(0%, 106%) rotate(-90deg);
transform-origin: 0% 0%;
"><span style="color:#000000;font-family:Arial;font-size:12px;"> <?php echo $prenomAssure." "."$nomAssure"; ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"><br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </span>
        <span style="color:#000000;font-family:Arial;font-size:10px;"> </span>
        <span style="color:#000000;font-family:Arial;font-size:12px;"><?php echo $codePolice ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <?php echo $dateDebut->format('d/m/Y') ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <?php echo $dateFin->format('d/m/Y') ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($marque) ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"><br><br></span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp; <?php echo strtoupper($immatriculation) ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <?php echo $genre ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </span>
        <span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo strtoupper($libCat);?></span></div></div>
<div id="wb_Text9" style="position:absolute;left:118px;top:792px;width:247px;height:133px;z-index:105;">
    <div style="
-moz-transform: rotate(-90deg) translate(0, 100%);
-moz-transform-origin: 0% 100%;
-o-transform: rotate(-90deg) translate(0, 100%);
-o-transform-origin: 0% 100%;
-webkit-transform: rotate(-90deg) translate(0, 100%);
-webkit-transform-origin: 0% 100%;
-ms-transform: translate(0%, 106%) rotate(-90deg);
-ms-transform-origin: 0% 0%;
transform: translate(0%, 106%) rotate(-90deg);
transform-origin: 0% 0%;">
        <span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

            <?php echo $codePolice; ?><br>
            <?php echo $dateDebut->format('d/m/Y'); ?><br> <?php echo $dateFin->format('d/m/Y'); ?><br></span><span style="color:#000000;font-family:Arial;font-size:8px;"></span><span style="color:#000000;font-family:Arial;font-size:12px;">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        </span><span style="color:#000000;font-family:Arial;font-size:12px;"><?php echo strtoupper($marque); ?><br></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br><br></span><span style="color:#000000;font-family:Arial;font-size:12px;">
            &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($immatriculation); ?></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br></span><span style="color:#000000;font-family:Arial;font-size:12px;">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  VP/CI<br></span><span style="color:#000000;font-family:Arial;font-size:11px;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($libCat);?></span>
    </div>
</div>
<div id="wb_Text10" style="position:absolute;left:45px;top:491px;width:275px;height:186px;z-index:106;">
    <div style="
-moz-transform: rotate(-90deg) translate(0, 100%);
-moz-transform-origin: 0% 100%;
-o-transform: rotate(-90deg) translate(0, 100%);
-o-transform-origin: 0% 100%;
-webkit-transform: rotate(-90deg) translate(0, 100%);
-webkit-transform-origin: 0% 100%;
-ms-transform: translate(0%, 106%) rotate(-90deg);
-ms-transform-origin: 0% 0%;
transform: translate(0%, 106%) rotate(-90deg);
transform-origin: 0% 0%;">
        <span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prenomAssure." "."$nomAssure"; ?></span><span style="color:#000000;font-family:Arial;font-size:15px;"><br></span><span style="color:#000000;font-family:Arial;font-size:12px;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:15px;"> </span><span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $codePolice; ?></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp;&nbsp; &nbsp;&nbsp;  <?php echo $dateDebut->format('d/m/Y'); ?>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $dateFin->format('d/m/Y'); ?></span><span style="color:#000000;font-family:Arial;font-size:11px;"><br><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span><span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo strtoupper($marque); ?><br></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="color:#000000;font-family:Arial;font-size:13px;"> <?php echo strtoupper($immatriculation); ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; VP/CI<br> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo strtoupper($libCat);?></span></div></div>
<div id="wb_Text11" style="position:absolute;left:400px;top:1203px;width:90px;height:18px;z-index:107;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong>Police N° :</strong></span></div>
<div id="wb_Text12" style="position:absolute;left:400px;top:1236px;width:142px;height:18px;z-index:108;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong>Date d'effet :</strong></span></div>
<div id="wb_Text13" style="position:absolute;left:400px;top:1266px;width:142px;height:18px;z-index:109;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong>Date d'expiration :</strong></span></div>
<div id="wb_Text14" style="position:absolute;left:400px;top:1331px;width:160px;height:18px;z-index:110;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong>Bureau Souscription :</strong></span></div>
<div id="wb_Text15" style="position:absolute;left:400px;top:1300px;width:142px;height:18px;z-index:111;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong>N° Immatriculation :</strong></span></div>
<div id="wb_Image3" style="position:absolute;left:378px;top:1125px;width:170px;height:39px;z-index:112;">
    <img src="../../img/images3/LogoSaham1.jpg" id="Image3" alt=""></div>
<input type="text" id="Editbox18" style="position:absolute;left:768px;top:1136px;width:182px;height:15px;line-height:15px;z-index:113;" name="EditboxFacture" value="<?php echo $numFacture; ?>" spellcheck="false">
<input type="text" id="Editbox19" style="position:absolute;left:866px;top:1179px;width:74px;height:16px;line-height:16px;z-index:114;" name="EditboxPn" value="<?php echo number_format($nette); ?>" spellcheck="false">
<input type="text" id="Editbox20" style="position:absolute;left:866px;top:1218px;width:74px;height:16px;line-height:16px;z-index:115;" name="EditboxAcc" value="<?php echo number_format($accessoire); ?>" spellcheck="false">
<input type="text" id="Editbox21" style="position:absolute;left:866px;top:1256px;width:74px;height:16px;line-height:16px;z-index:116;" name="EditboxTaxe" value="<?php echo number_format($taxe) ; ?>" spellcheck="false">
<input type="text" id="Editbox22" style="position:absolute;left:866px;top:1294px;width:74px;height:16px;line-height:16px;z-index:117;" name="EditboxFond" value="<?php echo number_format($fond) ; ?>" spellcheck="false">
<input type="text" id="Editbox23" style="position:absolute;left:866px;top:1328px;width:74px;height:16px;line-height:16px;z-index:118;" name="EditboxTotalPNS" value="<?php echo number_format($totale); ?>" spellcheck="false">
<input type="text" id="Editbox24" style="position:absolute;left:870px;top:328px;width:40px;height:12px;line-height:12px;z-index:119;" name="EditboxFacture" value="<?php echo strtoupper($libCat);?>" spellcheck="false">
</body>
</html>