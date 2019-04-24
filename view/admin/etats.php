<!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Saham Assurance SN</title>
        <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link href="form.css" rel="stylesheet">
    <link href="../../view/style/css_etat.css" rel="stylesheet">
    </head>
    <body onload="window.print()">
    <?php var_dump($codeInt)?>
    <img src="../../img/images/img0001.jpg" id="Banner1" alt="CONDITIONS PARTICULIERES" style="border-width:0;position:absolute;left:3px;top:70px;width:970px;height:20px;z-index:22;">
    <img src="../../img/images/img0002.jpg" id="Banner2" alt="SOUSCRIPTEUR" style="border-width:0;position:absolute;left:17px;top:150px;width:368px;height:20px;z-index:23;">
    <div id="wb_Form1" style="position:absolute;left:19px;top:170px;width:365px;height:130px;z-index:24;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
        <input type="text" id="Editbox1" style="position:absolute;left:133px;top:13px;width:222px;height:19px;line-height:19px;z-index:0;" name="Editbox1" value="<?php echo $prenomInt." ".$nomInt; ?>" spellcheck="false">
        <input type="text" id="Editbox2" style="position:absolute;left:133px;top:53px;width:222px;height:17px;line-height:17px;z-index:1;" name="Editbox2" value="<?php echo $adresseAssure; ?>" spellcheck="false">
        <label for="" id="Label2" style="position:absolute;left:2px;top:53px;width:47px;height:19px;line-height:19px;z-index:2;">Adresse</label>
        <label for="" id="Label5" style="position:absolute;left:4px;top:94px;width:65px;height:18px;line-height:18px;z-index:3;">Téléphone</label>
        <input type="text" id="Editbox5" style="position:absolute;left:133px;top:94px;width:222px;height:16px;line-height:16px;z-index:4;" name="Editbox1" value="<?php echo $telAssure; ?>"  spellcheck="false">
        <label for="" id="Label1" style="position:absolute;left:3px;top:13px;width:100px;height:21px;line-height:21px;z-index:5;">Prenom et Nom</label>
    </form>
    </div>
    <div id='wb_Form2' style='position:absolute;left:608px;top:170px;width:365px;height:130px;z-index:47;'>
        <form name='Form1' method='post' action='mailto:yourname@yourdomain.com' enctype='text/plain' id='Form2'>
            <input type="text" id="Editbox3" style="position:absolute;left:132px;top:13px;width:220px;height:19px;line-height:19px;z-index:9;" name="Editbox1" value="<?php echo $prenomAssure." ".$nomAssure; ?>" spellcheck="false">
            <input type="text" id="Editbox4" style="position:absolute;left:132px;top:53px;width:220px;height:17px;line-height:17px;z-index:10;" name="Editbox2" value="<?php echo $adresseAssure; ?>" spellcheck="false">
            <input type="text" id="Editbox6" style="position:absolute;left:132px;top:94px;width:220px;height:16px;line-height:16px;z-index:11;" name="Editbox1" value="<?php echo $telAssure; ?>" spellcheck="false">
            <label  for=""     id="Label3"   style="position:absolute;left:0px;top:12px;width:96px;height:22px;line-height:22px;z-index:12;">Prenom et Nom</label>
            <label  for=""     id="Label4"   style="position:absolute;left:0px;top:53px;width:58px;height:19px;line-height:19px;z-index:13;">Adresse</label>
            <label  for=""     id="Label6"   style="position:absolute;left:1px;top:94px;width:68px;height:18px;line-height:18px;z-index:14;">Téléphone</label>
        </form>
    </div>
    <img src="../../img/images/Banner3.jpg" id="Banner3" alt="SOUSCRIPTEUR" style="border-width:0;position:absolute;left:606px;top:150px;width:368px;height:20px;z-index:25;">
    <div id="wb_Form3" style="position:absolute;left:30px;top:100px;width:291px;height:30px;z-index:26;">
    <form name="Form3" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form3">
        <label for="" id="Label7" style="position:absolute;left:7px;top:3px;width:54px;height:19px;line - height:19px;z - index:7;">N° Police</label>

        <input type="text" id="Editbox7" style="position:absolute;left:99px;top:3px;width:182px;height:17px;line - height:17px;z - index:6;" value="<?php echo $codePolice; ?>"  name="Editbox1"  spellcheck="false">
    </form>
    </div>
    <img src="../../img/images/img0004.jpg" id="Banner4" alt="PERIDOE DE GARANTIE" style="border-width:0;position:absolute;left:227px;top:300px;width:529px;height:20px;z-index:27;">
    <div id="wb_Heading1" style="position:absolute;left:38px;top:330px;width:42px;height:20px;text-align:center;z-index:28;">
    <h5 id="Heading1">Du</h5></div>
    <div id="wb_Heading2" style="position:absolute;left:38px;top:369px;width:42px;height:21px;text-align:center;z-index:29;">
    <h6 id="Heading2">A</h6></div>
    <div id="wb_Heading3" style="position:absolute;left:230px;top:331px;width:50px;height:19px;text-align:center;z-index:30;">
    <h6 id="Heading3">Au</h6></div>
    <input type="text" id="Editbox9"   value="<?php echo $dateDebut->format('d/m/Y'); ?>" style="position:absolute;left:86px;top:327px;width:111px;height:16px;line-height:16px;z-index:33;" name="Editbox9" spellcheck="false">
    <input type="text" id="Editbox10"  value="<?php echo $heureDebut; ?>"  style="position:absolute;left:86px;top:366px;width:111px;height:16px;line-height:16px;z-index:32;" name="Editbox9" spellcheck="false">
    <input type="text" id="Editbox11"  value="<?php echo $dateFin->format('d/m/Y'); ?>" style="position:absolute;left:297px;top:327px;width:111px;height:16px;line-height:16px;z-index:33;" name="Editbox9" spellcheck="false">
    <input type="text" id="Editbox11"  value="<?php echo $dateFin->format('d/m/Y'); ?>" style="position:absolute;left:297px;top:327px;width:111px;height:16px;line-height:16px;z-index:33;" name="Editbox9" spellcheck="false">
    <input type="text" id="Editbox12"  value="<?php echo $heureFin; ?>"  style="position:absolute;left:297px;top:366px;width:111px;height:16px;line-height:16px;z-index:34;" name="Editbox9" spellcheck="false">
    <input type="text" id="Editbox13"  value="<?php echo $duree; ?>&nbsp;Mois"  style="position:absolute;left:606px;top:327px;width:124px;height:16px;line-height:16px;z-index:35;" name="Editbox9" value="" spellcheck="false">

    <div id="wb_Line6" style="position:absolute;left:742px;top:323px;width:2px;height:29px;z-index:36;">
    <img src="../../img/images/img0005.png" id="Line6" alt=""></div>
    <img src="../../img/images/img0006.jpg" id="Banner5" alt="CONDUCTEUR HABITUEL" style="border-width:0;position:absolute;left:230px;top:400px;width:529px;height:20px;z-index:37;">
    <div id="wb_Heading5" style="position:absolute;left:20px;top:430px;width:108px;height:27px;text-align:center;z-index:38;">
    <h6 id="Heading5">Conducteur<br></h6></div>
    <?php
    $anneeConducteur=null;$dureeConduite=null;
    foreach($conducteur as $ligne3)
    {
        // if($ligne3['annee_permis']=='') $anneeConducteur='&nbsp;'; else $anneeConducteur=$ligne3['annee_permis'];
        // if($ligne3['duree_conduite']=='') $dureeConduite='&nbsp;'; else $dureeConduite=$ligne3['duree_conduite']."&nbsp;Ans";
        echo "
        <input type=\"text\" id=\"Editbox14\" value=".$ligne3['nom_conducteur']."&nbsp;".$ligne3['prenom_conducteur']." style=\"position:absolute;left:130px;top:430px;width:176px;height:16px;line-height:16px;z-index:39;\" name=\"Editbox9\"  spellcheck=\"false\">
        <div id=\"wb_Heading6\" style=\"position:absolute;left:420px;top:430px;width:267px;height:27px;text-align:center;z-index:40;\">
        <h6 id=\"Heading6\">Année de délivrance de permis: </h6></div>
        <input type=\"text\"  value=".$anneeConducteur." id=\"Editbox15\" style=\"position:absolute;left:680px;top:430px;width:47px;height:16px;line-height:16px;z-index:41;\" name=\"Editbox9\"  spellcheck=\"false\">
        <div id=\"wb_Heading7\" style=\"position:absolute;left:770px;top:430px;width:150px;height:27px;text-align:center;z-index:42;\">
        <h6 id=\"Heading7\">Durée de conduite: </h6></div>
        <input type=\"text\" value=".$dureeConduite." id=\"Editbox16\" style=\"position:absolute;left:920px;top:430px;width:45px;height:16px;line-height:16px;z-index:43;\" name=\"Editbox9\"  spellcheck=\"false\">
   
    ";
    }
    ?>

    <div id="wb_Heading8" style="position:absolute;left:355px;top:54px;width:278px;height:16px;text-align:center;z-index:44;">
    <h3 id="Heading8">ASSURANCE AUTOMOBILE</h3></div>
    <div id="wb_Form4" style="position:absolute;left:690px;top:100px;width:291px;height:30px;z-index:45;">
    <form name="Form3" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form4">
        <input type="text" value="<?php echo $codeInt." ".$prenomInt." ".$nomInt ?>" id="Editbox8" style="position:absolute;left:99px;top:3px;width:182px;height:17px;line-height:17px;z-index:8;" name="Editbox1"  spellcheck="false">
    </form>
    </div>
    <label for="" id="Label8" style="position:absolute;left:690px;top:105px;width:109px;height:16px;line-height:16px;z-index:46;">Intermediaire</label>
    <hr id="Line10" style="position:absolute;left:30px;top:470px;width:250px;height:30px;z-index:48;">
    <div id="wb_Text1" style="position:absolute;left:30px;top:480px;width:102px;height:18px;z-index:49;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong>N° Attestation</strong></span></div>
    <input type="text" id="Editbox17" style="position:absolute;left:140px;top:470px;width:125px;height:16px;line-height:16px;z-index:50;" name="Editbox9" value="<?php echo $attestation ?>" spellcheck="false">
    <img src="../../img/images/img0007.jpg" id="Banner6" alt="CARACTERISTIQUE DU VEHICULE" style="border-width:0;position:absolute;left:310px;top:470px;width:389px;height:20px;z-index:51;">
    <hr id="Line11" style="position:absolute;left:710px;top:470px;width:94px;height:30px;z-index:52;">
    <div id="wb_Text3" style="position:absolute;left:720px;top:480px;width:128px;height:18px;z-index:53;">
    <span style="color:#FFFFFF;font-family:Arial;font-size:10px;"><strong>Catégorie</strong></span></div>
    <hr id="Line12" style="position:absolute;left:800px;top:470px;width:181px;height:30px;z-index:54;">
    <label for="" id="Label9" style="position:absolute;left:800px;top:480px;width:73px;height:16px;line-height:16px;z-index:55;"><?php echo $libCat ;?></label>
    <table style="position:absolute;left:30px;top:510px;width:720px;height:50px;z-index:56;" id="Table1">
    <tr>
    <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:15px;"> Marque</span></td>
    <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:15px;"> Type</span></td>
    <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Immatriculation</span></td>
    <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Puissance</span></td>
    <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Energie</span></td>
    <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Charge Utile</span></td>
    <td class="cell3"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Places</span></td>
    </tr>
        <tr>
            <?php
            $size=null; if(strlen($marque)<=10) $size=13;else $size=8; ?>
            <td class="cell4"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:<?php echo $size ?>px;line-height:19px;"><strong><?php echo strtoupper($marque);?></strong></span></td>
            <td class="cell5"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"><strong><?php echo strtoupper($type);?></strong></span></td>
            <td class="cell4"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"><strong><?php echo strtoupper($immatriculation);?></strong></span></td>
            <td class="cell6"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"><strong><?php echo $puissance;?></strong></strong></span></td>
            <td class="cell4"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"><strong><?php echo strtoupper($energie);?></strong></span></td>
            <td class="cell7"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"><strong><?php echo $charge;?></strong></span></td>
            <td class="cell8"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;"> </span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:19px;"><strong><?php echo $place;?></strong></span></td>


        </tr>
    </table>
    <table style="position:absolute;left:760px;top:510px;width:221px;height:51px;z-index:57;" id="Table2">
        <tr>
            <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:22px;"> </span><h5>Etendue territoriale des garanties</h5></td>
        </tr>
    </table>
    <table style="position:absolute;left:30px;top:570px;width:721px;height:55px;z-index:58;" id="Table3">
        <tr>
            <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Genre</span></td>
            <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> N° Chassis</span></td>
            <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Cylindre</span></td>
            <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Date 1ere MEC</span></td>
        </tr>
        <tr>

            <td class="cell3"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span></span><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong><?php echo strtoupper($genre);?></strong></span></td>
            <td class="cell4" ><span style = "color:#000000;font-family:Arial;font-size:13px;line-height:16px;" > </span ><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong><?php echo strtoupper($chassis);?></strong></span></td >
            <td class="cell4" ><span style = "color:#000000;font-family:Arial;font-size:13px;line-height:16px;" > </span ><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong><?php echo $cylindre;?></strong></span></td >
            <td class="cell5" ><span style = "color:#000000;font-family:Arial;font-size:13px;line-height:16px;" > </span ><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong><?php echo $mec->format('d/m/Y');?></strong></span></td >


        </tr >
    </table>
    <table style="position:absolute;left:760px;top:570px;width:221px;height:55px;z-index:59;" id="Table4">
        <tr>
            <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong>RC:</strong></span><span style="color:#000000;font-family:Arial;font-size:15px;line-height:19px;"> Etats membres de la CIMA<br></span><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;\"><strong>Autres Garanties: </strong></span><span style="color:#000000;font-family:Arial;font-size:15px;line-height:19px;">Assurance</span></td>
        </tr>
    </table>
    <table style="position:absolute;left:430px;top:630px;width:552px;height:31px;z-index:60;" id="Table5">
        <tr>
            <td class="cell0"><label for="" id="Label10" style="display:block;width:100%;;height:24px;line-height:24px;z-index:15;">Valeur Neuve: </label>
            </td>
            <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <strong><?php echo number_format($val_neuve);?></strong></span></td>
            <td class="cell0"><label for="" id="Label11" style="display:block;width:100%;;height:24px;line-height:24px;z-index:16;">Valeur Vénale</label>
            </td>
            <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <strong><?php echo number_format($val_venale);?></strong></span></td>
        </tr>
    </table>
    <table style="position:absolute;left:28px;top:660px;width:955px;height:206px;z-index:61;" id="Table6">
    <tr>
        <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> GARANTIES</span></td>
        <td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> LIMITATIONS DES GARANTIES (FCFA)</span></td>
        <td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> FRANCHISES <br>(FCFA)</span></td>
        <td class="cell3"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> PRIMES BRUTES ANNUELLES (FCFA)</span></td>
        <td class="cell4"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> PRIMES BRUTES AU PRORATA (FCFA)</span></td>
    </tr>
    <tr>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><strong> </strong></span><span style="color:#000000;font-family:Arial;font-size:12px;line-height:16px;"><strong>RESPONSABILITE CIVILE</strong></span></td>
        <td class="cell6" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo $limRes;?></span></td>
        <td class="cell7" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo $franchRes ?></span></td>
        <td class="cell8" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $bruteRes ?> </span></td>
        <td class="cell9" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $prorataRes ?> </span></td>
    </tr>
    <tr>
      <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:12px;line-height:15px;"><strong> RECOURS TIERS INCENDIE</strong></span></td>
        <td class="cell6" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $limRti ?></span></td>
        <td class="cell7" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $franchRti ?></span></td>
        <td class="cell8" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $bruteRti ?></span></td>
        <td class="cell9" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $prorataRti ?></span></td>
    </tr>
    <tr>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:12px;line-height:15px;"><strong> DEFENSE ET RECOURS</strong></span></td>
        <td class="cell6" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $limdef;?> </span></td>
        <td class="cell7" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $franchdef;?> </span></td>
        <td class="cell8" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $brutedef;?> </span></td>
        <td class="cell9" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $proratadef;?> </span></td>

    </tr>
    <tr>
        <td class="cell5" ><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><strong> </strong></span><span style="color:#000000;font-family:Arial;font-size:12px;line-height:16px;"><strong>INCENDIE</strong></span></td>
        <td class="cell6" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $lim4;?> </span></td>
        <td class="cell7" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $franch4;?> </span></td>
        <td class="cell8" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $brute4;?> </span></td>
        <td class="cell9" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $prorata4;?> </span></td>

    </tr>
    <tr>
        <td class="cell5" ><span style="color:#000000;font-family:Arial;font-size:12px;line-height:10px;"><strong>VOL</strong></span></td>
        <td class="cell6" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $lim5;?> </span></td>
        <td class="cell7" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $franch5;?> </span></td>
        <td class="cell8" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $brute5;?> </span></td>
        <td class="cell9" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $prorata5;?> </span></td>
    </tr>
    <tr>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:10px;"><strong>BRIS DE GLACE<br></strong></span></td>
        <td class="cell6" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $lim6;?> </span></td>
        <td class="cell7" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $franch6;?> </span></td>
        <td class="cell8" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $brute6;?> </span></td>
        <td class="cell9" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $prorata6;?> </span></td>
    </tr>
    <tr>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:10px;"><strong><?php echo $vri ?></strong></span></td>
        <td class="cell6" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $lim7     ?></span></td>
        <td class="cell7" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $franch7  ?></span></td>
        <td class="cell8" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $brute7   ?></span></td>
        <td class="cell9" style='text-align: center'><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $prorata7 ?></span></td>
    </tr>
    <tr>

        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:10px;"><strong><?php echo $titreAv ?></strong></span></td>
        <td class="cell6" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $lim8 ?></span></td>
        <td class="cell7" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $franch8 ?></span></td>
        <td class="cell8" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $brute8; ?></span></td>
        <td class="cell9" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $prorata8; ?></span></td>
    </tr>
    <tr>
    <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:10px;"><strong><?php echo $titrePs    ; ?></strong></span></td>
        <td class="cell6" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $lim9 ?></span></td>
        <td class="cell7" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $franch9 ?></span></td>
        <td class="cell8" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $brute9 ?></span></td>
        <td class="cell9" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo $prorata9 ?></span></td>
    </tr>

    <tr>
        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:10px;"><strong>CARTE BRUNE CEDEAO</strong></span></td>
        <td class="cell6" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\">GRATUIT</td>
        <td class="cell7" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"></td>
        <td class="cell8" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"></td>
        <td class="cell9" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"></td>
    </tr>
    <tr>

        <td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:10px;"><strong>ASSISTANCE AUTO</strong></span></td>
        <td class="cell6" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php  echo $lim10       ?></td>
        <td class="cell7" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo  $franch10  ?></td>
        <td class="cell8" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo  $brute10    ?></td>
        <td class="cell9" style='text-align: center'><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"><?php echo  $prorata10   ?></td>
    </tr>
    </table>
    <img src="../../img/images/img0008.jpg" id="Banner7" alt="REDUCTION / MAJORATION" style="border-width:0;position:absolute;left:230px;top:966px;width:529px;height:20px;z-index:62;">

    <table style="position:absolute;left:230px;top:990px;width:192px;height:48px;z-index:63;" id="Table7">
    <tr>

    <td class="cell0"><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong> BONUS RC</strong></span></td>
    </tr>
    <tr>

        <?php
            echo "
            <td class=\"cell1\"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\">".$percentBC."%
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             ".$bc."</span></td>        
     </tr>
    </table>
    <table style=\"position:absolute;left:510px;top:990px;width:246px;height:48px;z-index:64;\" id=\"Table8\">
    <tr>
    <td class=\"cell0\"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:19px;\"> </span><span style=\"color:#000000;font-family:Arial;font-size:16px;line-height:19px;\"><strong> REDUCTION COMMERCIALE</strong></span></td>
    </tr>
    <tr>
    <td class=\"cell1_2\">
    <span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\">".$percentRC."%
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     ".$rc."</span>
    </td>
            ";
        ?>
    </tr>
    </table>
    <img src="../../img/images/img0009.jpg" id="Banner8" alt="DECOMPTE DES PRIMES" style="border-width:0;position:absolute;left:231px;top:1045px;width:527px;height:20px;z-index:65;">
    <img src="../../img/images/img0010.jpg" id="Banner9" alt="Prime nette" style="border-width:0;position:absolute;left:37px;top:1070px;width:113px;height:30px;z-index:66;">
    <img src="../../img/images/img0011.jpg" id="Banner10" alt="Accessoires" style="border-width:0;position:absolute;left:225px;top:1070px;width:122px;height:30px;z-index:67;">
    <img src="../../img/images/img0012.jpg" id="Banner11" alt="Taxe" style="border-width:0;position:absolute;left:427px;top:1070px;width:122px;height:30px;z-index:68;">
    <img src="../../img/images/img0013.jpg" id="Banner12" alt="Fond de garantie" style="border-width:0;position:absolute;left:617px;top:1070px;width:162px;height:30px;z-index:69;">
    <img src="../../img/images/img0014.jpg" id="Banner13" alt="Prime Totale" style="border-width:0;position:absolute;left:851px;top:1070px;width:132px;height:30px;z-index:70;">

        <?php
        foreach ($Prime as $ligne6)
        {
            echo "
    <table style=\"position:absolute;left:225px;top:1100px;width:122px;height:30px;z-index:71;\" id=\"Table10\">
    <tr>
    <td class=\"cell0\"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"> ".number_format(intval($ligne6["accessoire"]))."</span></td>
    </tr>
    </table>
      <table style=\"position:absolute;left:37px;top:1100px;width:113px;height:30px;z-index:72;\" id=\"Table9\">
    <tr>
    <td class=\"cell0\"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"> ".number_format(intval($ligne6["prime_nette"]))."</span></td>
    </tr>
    </table>
    <table style=\"position:absolute;left:427px;top:1100px;width:122px;height:30px;z-index:73;\" id=\"Table11\">
    <tr>
    <td class=\"cell0\"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"> ".number_format(intval($ligne6["taxe"]))."</span></td>
    </tr>
    </table>
    <table style=\"position:absolute;left:617px;top:1100px;width:162px;height:31px;z-index:74;\" id=\"Table12\">
    <tr>
    <td class=\"cell0\"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"> ".number_format(intval($ligne6["fond_garantie"]))."</span></td>
    </tr>
    </table>
    <table style=\"position:absolute;left:851px;top:1100px;width:132px;height:30px;z-index:75;\" id=\"Table13\">
    <tr>
    <td class=\"cell0\"><span style=\"color:#000000;font-family:Arial;font-size:13px;line-height:16px;\"> ".number_format(intval($ligne6["prime_totale"]))."</span></td>
    </tr>
    </table>

            ";
        }

        ?>
    <picture id="wb_Picture3" style="position:absolute;left:101px;top:1350px;width:0px;height:0px;z-index:76">
    <img src="" id="Picture3" alt="">
    </picture>
    <div id="wb_Text5" style="position:absolute;left:30px;top:1188px;width:976px;height:90px;z-index:77;">
    <span style="color:#000000;font-family:Arial;font-size:12px;"><strong><u>DECLARATION DU SOUSCRIPTEUR</u></strong></span><span style="color:#000000;font-family:Arial;font-size:13px;">
            <strong><u><br></u></strong></span><span style="color:#000000;font-family:Arial;font-size:12px;">
            Je soussigné, déclare que les réponses données ci-dessus sont sincères et&nbsp; à ma connaissance exactes.<br>
            En cas de fausses déclarations, il sera fait application des articles 18 et 19 du code CIMA.<br>
            Je reconnais que la prise d'effet de la garantie est subordonnée au paiement intégral de la prime et avoir reçu un exemplaire des conditions générales
            .<br><br>
        </span>
    </div>
    <table style="position:absolute;left:30px;top:1137px;width:952px;height:41px;z-index:78;" id="Table14">
    <tr>
    <td class="cell0"><div id="wb_Text4">
    <span style="color:#000000;font-family:Arial;font-size:13px;"><strong><em>Il n'est rien dérogé aux autres clauses et conditions de la police auxquelles le présent contrat demeure annexé. Sont nulles toutes adjonctions ou modifications matérielles non revêtues du visa de la compagnie.</em></strong></span>
    </div>
    </td>
    </tr>
    </table>
    <div id="wb_Checkbox1" style="position:absolute;left:40px;top:1258px;width:20px;height:20px;z-index:79;">
    <input type="checkbox" id="Checkbox1" name="Checkbox1" value="" checked style="position:absolute;left:0;top:0;" disabled title="J&#39;autorise Saham"><label for="Checkbox1"></label></div>
    <label for="" id="Label12" style="position:absolute;left:65px;top:1256px;width:517px;height:16px;line-height:16px;z-index:80;">J'autorise Saham Sénégal à utiliser mes données personnelles à des fins commerciales.</label>
    <div id="wb_Text6" style="position:absolute;left:30px;top:1365px;width:590px;height:28px;text-align:justify;z-index:81;">
    <span style="color:#000000;font-family:Arial;font-size:11px;">Siège Social : Boulevard de la Madeleine x rue Carnot BP : 21244 Dakar - Sénégal<br>Tel : +221 33 849 69 00 - Fax : +221 33 823 23 66 - Email : senegal@sahamassurance.com - www.sahamassurance.sn</span></div>
    <div id="wb_Text7" style="position:absolute;left:30px;top:1305px;width:162px;height:18px;z-index:82;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong><u>Pour le Souscripteur</u></strong></span></div>
    <div id="wb_Text8" style="position:absolute;left:810px;top:1305px;width:162px;height:18px;z-index:83;">
    <span style="color:#000000;font-family:Arial;font-size:15px;"><strong><u>Pour la Compagnie</u></strong></span></div>
    <hr id="Line13" style="position:absolute;left:323px;top:1278px;width:392px;height:30px;z-index:84;">
    <label for="" id="Label13" style="position:absolute;left:323px;top:1281px;width:300px;height:16px;line-height:16px;z-index:85;">Fait en deux exemplaires à Dakar, le <?php echo $datePolice; ?></label>
    <picture id="wb_Picture1" style="position:absolute;left:30px;top:15px;width:150px;height:48px;z-index:86">
    <img src="../../img/images/LogoSaham1.jpg" id="Picture1" alt="" srcset="">
    </picture>
    <div id="wb_Heading9" style="position:absolute;left:540px;top:330px;width:50px;height:20px;text-align:center;z-index:87;">
    <h5 id="Heading9">Durée<br></h5></div>
    <div id="wb_Heading10" style="position:absolute;left:746px;top:330px;width:196px;height:20px;text-align:center;z-index:88;">
    <h5 id="Heading10">Sans tacite reconduction</h5></div>
    </body>
    </html>