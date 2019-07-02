<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saham Assurance SN</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
    <style>
      .ajout-title{
        position: relative;
        top: 90px;
        left: 78px;
        width: 41%;
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 125px;
            left: 81px;
        }
       .dotations-form{
            position: relative !important;
            top: 18px !important;
            padding: 0 !important;
            width: 50%;
            height: 394px !important;
            margin: auto;
            padding: 35px 0 0 0 !important;
       }
       .dotations-form input{
            width: 112% !important;
            margin:auto;
            margin-top: -2% !important;
            border: none !important;
            border-bottom: 1px solid #062843 !important;
            margin-bottom: 12% !important;


       }
       .dotations-form select{
            width: 113% !important;
            height: 3.1rem;
            margin:auto;
            margin-top: -2% !important;
            border: none !important;
            border-bottom: 1px solid #062843 !important;
            margin-bottom: 12% !important;
       }
       .dotations-form label{
        margin-left: -10em;
       }
       .btn-primary{
            background: #062944;
            color: #f7bb3d !important;
            margin: auto;
            padding: 14px;
            width: 48%;
            margin-top: 5%;
       }
       .form-card{
        width: 45%;
        margin: auto;
        margin-top: 112px;
       }
    </style>
</head>
<body>
    <!--header-->
    <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">
        <?php include "header.php";?>
    </div>
    <!--header-->
    <h1 class="ajout-title">Faire une dotation</h1>
    <hr>
    <div class="container-fluid"><!--begin container-->
    <div class="card form-card">
    <div class="card-header" style="background:#062945 !important;color: #f7ba00 !important;text-align:center;font-weight:bold"><h3>Dotations</h3></div>
       <div class="card-body">
       <form class="form dotations-form" method="post" action="../../controller/admin/index.php"  id='dotations'><!--begin form-->
            <div class="form-group">
                <select class="form-control" id="" name="type_attestation">
                    <?php
                        while($row=$types->fetch()){
                            echo('<option>'.$row[1].'</option>');
                        }
                    ?>
                <select>            
            </div>
            <!--label>Début série</label-->
            <div class="form-group">
                <input type="text" class="form-control nombre-attestations" name="debut_serie" id='debut-serie' value='' placeholder="début de la série">
            </div>
            <!--label>Fin série</label-->
            <div class="form-group">
                <input type="text" class="form-control  nombre-attestations" name="fin_serie" id='fin-serie' value='' placeholder="Fin de la série">
            </div>
            <div class="row validation-row">
                <button class="btn btn-primary mb-2 validDotation" name="action" value="Valider dotation">VALIDER</button>
            </div>
        </form><!--end form-->
       </div>   
    </div>
    </div><!--end container-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>