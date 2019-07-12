<?php
// Démarrage ou restauration de la session
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
    header ('location: ../../view/user/connect.php');
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Saham Assurance SN</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css">
    <link rel="stylesheet" href="../../view/style/style_aff.css">
</head>

<body onchange="CalculeBC()"♥">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header ">
    <?php include "header.php";?>
    <main class="mdl-layout__content">
        <div class="mdl-content" style="padding-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col "></div>
                    <div class="col">
                        <!-- Card -->
                        <div class="card card-image" style="background-image: url(../../img/admin.png);background-size:cover;background-repeat:no repeat;width:200%;margin-left: -161px;">
                            <!-- Content -->
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-2 px-2">
                                <div>
                                    <h5 class="pink-text" style="    color: #f7ba00 !important;text-align: center;    position: relative;left: 13em;"><i class="fa fa-pie-chart"></i> Administrateur<br></h5>
                                    <p><br><br><br></p>
                                    <a class="btn btn-md" style="background: #062945;color:#f7ba00 !important;font-weight: bold;margin-left: 190%;" href="../../controller/admin/?action=ajout"><i class="fa fa-clone left"></i> Continuer</a>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Card -->
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </main>
</div>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
</body>
</html>