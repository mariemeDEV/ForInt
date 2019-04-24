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
        <title>Saham Assurance SN</title>
        <link rel="icon"       href="../../img/favicon-32x32.png" type="image/png" sizes="32x32" />
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="../../view/style/style_2.css">
    </head>
    <body ♥ id="acceuil">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php include "header.php"; ?>
        <main class="mdl-layout__content">
            <h1 class='top-title'>ASSURANCE AUTOMOBILE</h1>
            <hr></hr>
            <div class="mdl-content">
                <div class="mdl-grid animated fadeInLeft animation-delay-900">
                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d1 mdl-card mdl-shadow--2dp" id="rediger">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=valider">SOUSCRIPTION ASSURANCE</a>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d2 mdl-card mdl-shadow--2dp" id="simuler">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=simul">SIMULATION SOUSCRIPTION</a>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell---col">
                        <div class="demo-card-square d3 mdl-card mdl-shadow--2dp" id="consult">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect action-title" href="../../controller/formulaire/?action=afficher">CONSULTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </body>

</html>