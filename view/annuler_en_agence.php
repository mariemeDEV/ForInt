<!doctype html>
<html lang="fr">
<head><!--header-->
<title>For-Int</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../../view/style/style_aff.css">
    <style>
        .success-message{
            text-align: center; 
            color: #ec7777;
        }
        .success-text{
            color: #062944;
            text-align:center;
            font-size:11px
        }
        .success-content{
            margin-top: 71px;
        }
        .retour-content{
            width: 6%;
            margin: auto;
            background: #062944;
            text-align: center;
            padding: 16px;
        }
        .retour-content a{
            color: rgb(247, 187, 61);
            font-weight:bold
        }
    </style>
</head><!--end header-->
<body onload="myFunction();CalculeBC()" id="assurance">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "user/header.php"; ?>
        <main class="mdl-layout__content success-content">
            <div class="mdl-content">
                <h1 class="success-message">Succés !</h1>
                <p class='success-text'>Votre demande d'annulation sera prise en charge par le support Saham Assurance,<br>Cordialement</p>
                <div class="retour-content">
                    <a href="/forint/view/user/accueil.php">RETOUR</a>
                </div>
            </div>
        </main>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>