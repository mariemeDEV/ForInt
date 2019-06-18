<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>JAUNE</title>

    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link href="../../view/style/form_v3.css" rel="stylesheet">
    <style>
         @page {
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */
        }
        .b3{
            position: absolute;
            left: 16em !important;
            top: 309px;
        }
        .b1{
            position: absolute;
            left:7em;
            top: 308px;
        }
        .b2{
            position: absolute;
            left: 38em;
            top: 309px;
        }
    </style>
</head>
<body onload="window.print()">

<!-- <div id="wb_Line3" style="position:absolute;left:386px;top:1359px;width:570px;height:2px;z-index:88;">
    <img src="../../img/images3/img0018.png" id="Line3" alt=""></div> -->
<div class="main-content">
<div class='b1' style="">
    <div>
        <span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo $prenomAssure." "."$nomAssure"; ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"><br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:10px;"> </span>
        <span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:-5px"><?php echo $codePolice ?><br>&nbsp;&nbsp;<?php echo $dateDebut->format('d/m/Y') ?><br>&nbsp;&nbsp;<?php echo $dateFin->format('d/m/Y') ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <?php echo '<span style="position:relative;left:-31px;top:-6px">'.strtoupper($marque).'</span>'?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"><br></span><span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:-14px;left:48px">&nbsp; <?php echo strtoupper($immatriculation) ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <?php //echo $genre ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:8px;">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo strtoupper($libCat);?></span></div></div>
<div class="b2">
    <div>
    <span style="color:#000000;font-family:Arial;font-size:10px;"><?php echo $prenomAssure." "."$nomAssure"; ?><br></span>
        <span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:8px">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $codePolice; ?><br>
            <?php echo $dateDebut->format('d/m/Y'); ?><?php echo '<p style="position: relative;top:-23px;left:168px;">'.$dateFin->format('d/m/Y').'</p>'; ?><br></span><span style="color:#000000;font-family:Arial;font-size:8px;"></span><span style="color:#000000;font-family:Arial;font-size:10px;">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        </span><span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:-36px;left:39px"><?php echo strtoupper($marque); ?><br></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br></span><span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:-32px;left:47px">
            &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($immatriculation); ?></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br></span><span style="color:#000000;font-family:Arial;font-size:10px;">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  <?php // echo $genre ?><br></span><span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:-40px;left:108px">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($libCat);?></span>
    </div>
</div>
<div class='b3'>
    <div>
        <span style="color:#000000;font-family:Arial;font-size:10px;"></span><span style="color:#000000;font-family:Arial;font-size:10px;"><br></span><span style="color:#000000;font-family:Arial;font-size:12px;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:8px;"> </span><span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:-5px "><?php echo $codePolice; ?></span><span style="color:#000000;font-family:Arial;font-size:8px;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="color:#000000;font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>
        <span style="color:#000000;font-family:Arial;font-size:10px;position:relative;left:96px;top:-44px;">&nbsp;&nbsp; &nbsp;<?php echo '<span style="position:relative;left:-45px">'.$dateDebut->format('d/m/Y').'</span>'; ?>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<br> <?php echo $dateFin->format('d/m/Y'); ?></span><span style="color:#000000;font-family:Arial;font-size:10px;"><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span><span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top:-51px;left:48px"><?php echo strtoupper($marque); ?></span><br><span style="color:#000000;font-family:Arial;font-size:8px;"><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="color:#000000;font-family:Arial;font-size:10px;position:relative;top: -59px;left:95px;"> <?php echo strtoupper($immatriculation); ?><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<?php// echo $genre ?><br> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '<span style="position:relative;left:-70px">'.strtoupper($libCat).'</span>';?></span>
    </div>
</div>
</div>

</body>
</html>