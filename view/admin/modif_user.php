<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../view/style/search_admin.css">
        <link rel="stylesheet" href="../../view/style/style_aff.css">
</head>
<body>
    <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header" style="position:fixed !important;top:0 !important">
        <?php include "header.php";?>
    </div>
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
<h1 class="top-title" style="position: absolute;top:103px;left: 87px;color: #062945;z-index: -1;">Modifier information</h1>
<hr style="width: 9%;border: 0;border-top: 2px solid #062945;position: absolute;top:133px;left: 86px;z-index: -1;">
<div class="card" style="width: 40%;margin: auto;margin-top:12%">
<div class="card-header" style="background:#062945 !important;color: #f7ba00 !important;text-align:center;font-weight:bold"><h3>Modifications</h3></div>
<div class="card-body" style="height: 453px !important;">
    <form style="height:63%;width:90%;margin:auto" method="POST" action="../../controller/admin/index.php?action=updateUser" name="form_update">
        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%;border:1px solid #ffffff !important;border-bottom:1px solid #062944 !important;width:70%;margin:auto" type="text" placeholder="Matricule" name="matricule_update" id="matricule" class="form-control" value="'.$_GET['mat'].'" required>
        </div>
        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%;border:1px solid #ffffff !important;border-bottom:1px solid #062944 !important;width:70%;margin:auto" type="text" placeholder="Nom" name="nom_update" id="nom" class="form-control" value="'.$_GET['nom'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%;border:1px solid #ffffff !important;border-bottom:1px solid #062944 !important;width:70%;margin:auto" type="text" placeholder="Prenom" name="prenom_update" id="prenom" class="form-control" value="'.$_GET['prenom'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%;border:1px solid #ffffff !important;border-bottom:1px solid #062944 !important;width:70%;margin:auto" type="text"placeholder="Adresse" name="adresse_update" id="adresse" class="form-control" value="'.$_GET['adresse'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%;border:1px solid #ffffff !important;border-bottom:1px solid #062944 !important;width:70%;margin:auto" type="text" placeholder="Telephone" name="tel_update" id="tel" class="form-control" value="'.$_GET['telephone'].'" required>
        </div>

        <div class="md-form" style="height: 35px">
        <input style="padding-left: 4%;border:1px solid #ffffff !important;border-bottom:1px solid #062944 !important;width:70%;margin:auto" type="email" placeholder="Email" name="email_update" id="email" class="form-control" value="'.$_GET['email'].'" required>
        </div>
        <div class="card-action" style="position: absolute;top: 88%;left:155px !important">
            <button type="reset" class="btn btn-primary btn-md" style="background:#062945 !important;color: #f7ba00 !important;font-weight:bold">Annuler</button>
            <button type="submit" class="btn btn-primary btn-md" style="background:#062945 !important;color: #f7ba00 !important;font-weight:bold">Valider</button>
        </div>
    </form>
</div>
</div>'
);
?>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>

