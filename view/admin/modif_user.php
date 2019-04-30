<?php

echo('
<head>
    <title>Saham Assurance SN</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../view/style/style_aff.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<h1 class="top-title" style="position: absolute;top: 15px;left: 87px;color: #062945;">Modifier information</h1>
<hr style="width: 9%;border: 0;border-top: 2px solid #062945;position: absolute;top: 65px;left: 86px;">
<div class="card" style="width: 40%;margin: auto;margin-top:8%">
<div class="card-header" style="background:#062945 !important;color: #f7ba00 !important;text-align:center;font-weight:bold"><h3>Modifications</h3></div>
<div class="card-body">
    <form style="height:63%;width:90%;margin:auto" method="POST" action="../../controller/admin/index.php?action=updateUser" name="form_update">
        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%" type="text" placeholder="Matricule" name="matricule_update" id="matricule" class="form-control" value="'.$_GET['mat'].'" required>
        </div>
        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%" type="text" placeholder="Nom" name="nom_update" id="nom" class="form-control" value="'.$_GET['nom'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%" type="text" placeholder="Prenom" name="prenom_update" id="prenom" class="form-control" value="'.$_GET['prenom'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%" type="text"placeholder="Adresse" name="adresse_update" id="adresse" class="form-control" value="'.$_GET['adresse'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%" type="text" placeholder="Telephone" name="tel_update" id="tel" class="form-control" value="'.$_GET['telephone'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%" type="email" placeholder="Email" name="email_update" id="email" class="form-control" value="'.$_GET['email'].'" required>
        </div>
        <div class="card-action" style="position: absolute;top: 88%;left:297px">
            <button type="reset" class="btn btn-primary btn-md" style="background:#062945 !important;color: #f7ba00 !important;font-weight:bold">Annuler</button>
            <button type="submit" class="btn btn-primary btn-md" style="background:#062945 !important;color: #f7ba00 !important;font-weight:bold">Valider</button>
        </div>
    </form>
</div>
</div>'
);