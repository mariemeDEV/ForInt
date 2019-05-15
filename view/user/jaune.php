<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Saham Assurance SN</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link href="../../view/style/form_v3.css" rel="stylesheet">
    <style>
         @page {
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */
        }
        #wb_Text10{
            position: absolute;
            left: 16em !important;
            top: 441px;
        }
        #wb_Text2{
            position: absolute;
            left:3em;
            top: 27em;
        }
        #wb_Text9{
            position: absolute;
            left: 38em;
            top: 454px;
        }
    </style>
</head>
<body onload="write.print()">

<!-- <div id="wb_Line3" style="position:absolute;left:386px;top:1359px;width:570px;height:2px;z-index:88;">
    <img src="../../img/images3/img0018.png" id="Line3" alt=""></div> -->
<div class="main-content">
<div id="wb_Text2" style="">
    <div>
        <span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo $prenomAssure." "."$nomAssure"; ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"><br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:10px;"> </span>
        <span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo $codePolice ?><br>&nbsp;&nbsp;<?php echo $dateDebut->format('d/m/Y') ?><br>&nbsp;&nbsp;<?php echo $dateFin->format('d/m/Y') ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <?php echo strtoupper($marque) ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"><br></span><span style="color:#000000;font-family:Arial;font-size:10px;">&nbsp; <?php echo strtoupper($immatriculation) ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <?php echo $genre ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo strtoupper($libCat);?></span></div></div>
<div id="wb_Text9" style="">
    <div>
        <span style="color:#000000;font-family:Arial;font-size:10px;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

            <?php echo $codePolice; ?><br>
            <?php echo $dateDebut->format('d/m/Y'); ?><br> <?php echo $dateFin->format('d/m/Y'); ?><br></span><span style="color:#000000;font-family:Arial;font-size:8px;"></span><span style="color:#000000;font-family:Arial;font-size:10px;">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        </span><span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo strtoupper($marque); ?><br></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br></span><span style="color:#000000;font-family:Arial;font-size:10px;">
            &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($immatriculation); ?></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br></span><span style="color:#000000;font-family:Arial;font-size:10px;">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  VP/CI<br></span><span style="color:#000000;font-family:Arial;font-size:10px;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($libCat);?></span>
    </div>
</div>
<div id="wb_Text10" style="">
    <div>
        <span style="color:#000000;font-family:Arial;font-size:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prenomAssure." "."$nomAssure"; ?></span><span style="color:#000000;font-family:Arial;font-size:10px;"><br></span><span style="color:#000000;font-family:Arial;font-size:12px;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"> </span><span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo $codePolice; ?></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:10px;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $dateDebut->format('d/m/Y'); ?>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $dateFin->format('d/m/Y'); ?></span><span style="color:#000000;font-family:Arial;font-size:10px;"><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span><span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo strtoupper($marque); ?></span><br><span style="color:#000000;font-family:Arial;font-size:8px;"><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="color:#000000;font-family:Arial;font-size:10px;"> <?php echo strtoupper($immatriculation); ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; VP/CI<br> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($libCat);?></span>
    </div>
</div>
</div>

</body>
</html>