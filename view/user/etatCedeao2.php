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
    <div id="wb_Text2" style="position:absolute;left:95px;top:254px;width:263px;height:160px;z-index:104;">
        <div><span style="color:#000000;font-family:Arial;font-size:12px;"> <?php echo $prenomAssure." "."$nomAssure";  ?></span>
            <br><br><span style="color:#000000;font-family:Arial;font-size:8px;"><br><br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </span>
            <span style="color:#000000;font-family:Arial;font-size:10px;"> </span>&nbsp;&nbsp;
            <span style="color:#000000;font-family:Arial;font-size:12px;"><?php echo strtoupper($immatriculation) ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <?php echo strtoupper($marque." ".$type) ?>
                <br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo "SAHAM Assurance" ?>
                <br><br><br><br>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $prenomInt." ".$nomInt ?><br></span>
            <span style="color:#000000;font-family:Arial;font-size:8px;">
            </span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo strtoupper($codePolice) ?>
                </span><br> <br>
            <span style="color:#000000;font-family:Arial;font-size:8px;"></span>
            <span style="color:#000000;font-family:Arial;font-size:12px;"><?php echo $dateDebut->format('d/m/Y');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dateFin->format('d/m/Y');?></span></div></div>
    <div id="wb_Text9" style="position:absolute;left:425px;top:254px;width:247px;height:133px;z-index:105;">
        <div  ><span style="color:#000000;font-family:Arial;font-size:12px;"> <?php echo $prenomAssure." "."$nomAssure";  ?></span>
            <br><br><span style="color:#000000;font-family:Arial;font-size:8px;"><br><br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </span>
            <span style="color:#000000;font-family:Arial;font-size:10px;"> </span>&nbsp;&nbsp;
            <span style="color:#000000;font-family:Arial;font-size:12px;"><?php echo strtoupper($immatriculation) ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <?php echo strtoupper($marque)." ".$type ?>
                <br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo "SAHAM Assurance" ?>
                <br><br><br><br>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $prenomInt." ".$nomInt ?><br></span>
            <span style="color:#000000;font-family:Arial;font-size:8px;">
            </span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo strtoupper($codePolice) ?>
                </span><br> <br>
            <span style="color:#000000;font-family:Arial;font-size:8px;"></span>
            <span style="color:#000000;font-family:Arial;font-size:12px;"><?php echo $dateDebut->format('d/m/Y');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dateFin->format('d/m/Y');?></span></div></div>
    </div>
    <div id="wb_Text10" style="position:absolute;left:630px;top:295px;width:275px;height:186px;z-index:106;">
        <div >
            <span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prenomInt." ".$nomInt; ?></span><span style="color:#000000;font-family:Arial;font-size:15px;"><br></span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span>
            <br><br>&nbsp;&nbsp;&nbsp; </span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>
            <span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<?php echo strtoupper($immatriculation); ?></span>
            <span style="color:#000000;font-family:Arial;font-size:11px;"><br><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "SAHAM Assurance"; ?><br></span>
            <span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;Boulevard de la Madeleine X Rue Carnot - BP</span>
        </div></div>
<div id="wb_Text10" style="position:absolute;left:820px;top:245px;width:285px;height:186px;z-index:106;">
    <div >
        <span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($codePolice); ?></span><span style="color:#000000;font-family:Arial;font-size:15px;"></span><span style="color:#000000;font-family:Arial;font-size:12px;"></span>
        &nbsp; </span><span style="color:#000000;font-family:Arial;font-size:8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:13px;"> &nbsp;&nbsp;<span style="color:#000000;font-family:Arial;font-size:12px;"><?php echo $dateDebut->format('d/m/Y');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dateFin->format('d/m/Y');?></span></span>
        <span style="color:#000000;font-family:Arial;font-size:11px;"><br><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </span>
        <span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo strtoupper($marque." ".$type); ?><br></span><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
        <span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;<?php echo strtoupper($immatriculation) ?></span><br><br> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        <span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;<?php echo "SAHAM Assurance" ?></span>
    </div></div>

</body>
</html>