<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])){
        header ('location: ./');
    }
    if(time()- $_SESSION['timestamp']>600){
        echo"<script>alert('15 Minutes over!');</script>";
        unset($_SESSION['username'],$_SESSION['password'],$_SESSION['matricule']);
        header ('location: ./');
        exit;
    }
    else{
        $_SESSION['timestamp'] = time();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>For-Int</title>
        <link rel="icon"       href="../../img/favicon-32x32.png" type="image/png" sizes="32x32" />
        <link rel="stylesheet" href="../../view/style/material.min.css">
        <link rel="stylesheet" href="../../view/style/material-icon.min.css">
        <link rel="stylesheet" href="../../view/style/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../../view/style/animate.min.css">
        <link rel="stylesheet" href="../../view/style/style_2.css">
        <style>
            .subTitle{
                position: relative;
                top: 82px;
                left: 247px;
                font-size: 10px;
                color: #062944;
                font-weight: bold;
            }
        </style>
    </head>
    <body ♥ id="acceuil">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php include "header.php"; ?>
        <main class="mdl-layout__content">
            <h1 class='top-title'>For-Int</h1><span class='subTitle'>Saham sénègal</span>
            <hr style='width:5% !important'></hr>

            <div class="mdl-content" style='margin-top:-55px;'><!--row1-->
                <div class="mdl-grid animated fadeInLeft animation-delay-900">

                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d1 mdl-card mdl-shadow--2dp" id="rediger">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=valider">SOUSCRIPTION</a>
                        </div>
                    </div>
                  
                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d4 mdl-card mdl-shadow--2dp" id="contrats">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=affi">CONSULTER MES CONTRATS</a>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d5 mdl-card mdl-shadow--2dp" id="simuler">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=passer">COMMANDE D'ATTESTATIONS</a>
                        </div>
                    </div>
                </div>
            </div><!--row1-->

            <div class="mdl-content" style='margin-top: -174px;'><!--row2-->
                <div class="mdl-grid animated fadeInLeft animation-delay-900">

                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d2 mdl-card mdl-shadow--2dp" id="simuler">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=simul">SIMULATION</a>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d3 mdl-card mdl-shadow--2dp" id="consult">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=afficher">CONSULTER MES PROJETS</a>
                        </div>
                    </div>

               
                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d6 mdl-card mdl-shadow--2dp" id="consult">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="garanties_details.php">VOIR MES GARANTIES</a>
                        </div>
                    </div>

                </div>
            </div><!--row2-->

        </main>
    </div>
    <script src="../js/material.min.js"></script>
    </body>

</html>