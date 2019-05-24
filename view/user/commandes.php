
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Saham Assurance SN</title>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../view/style/style_aff.css">

    <style>
        .top-title{
            position: absolute;
            top: 15px;
            left: 87px;
            color:#062945
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 65px;
            left: 86px;
        }
        .command-card{
            width: 40%;
            margin: auto;
            margin-top: 134px;
            height: 433px;
        }
        .command-header{
            background:#062945;
            color: #f7bb3d;
        }
        .command-form{
            padding: 5%;
        }
        input{
            border: 1px solid #ffffff !important;
            border-bottom: 1px solid #062944 !important;
        }
        label{
            margin-bottom: 3px;
        }
        .validation-row{
            width: 21%;
            margin: auto;
            margin-top: -4px;
        }
        .btn-primary{
            background: #062944 !important;
            color: #e4b939 !important;
        }
        input{
            margin-bottom: 10px !important
        }
        .validDotation{
            padding: 12px;
            width: 107px;
        }
    </style>
    </head>
    <body ♥ id="acceuil">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php include "header.php"; ?>
        <main class="mdl-layout__content">
            <h1 class='top-title'>PASSER UNE COMMANDE D'ATTESTATIONS</h1>
            <hr></hr>
            <div class="card command-card">
                <div class="card-header command-header">Formulaire de commande</div>
                <div class="card-body">
                    <div class="form command-form">
                    <form method="post" action="../../controller/formulaire/index.php">
                    <input type="number" style='display:none !important' value=<?php echo("'".$mat."'")?>>
                    <div class="row md-12">
                        <div class="col md-4">
                            <div class="form-group" style='position: relative;top: 41px;left: 22px;'>
                                <input type="checkbox" class="form-check-input" id="check1" name='attesta_jaune'>
                                <label class="form-check-label" for="exampleCheck1">Attestation(s) Jaune(s)</label>
                            </div>
                        </div>
                        <div class="col md-4">
                            <div class="form-group">
                                <label for="matricule">nombre d'attestations</label>&nbsp&nbsp<span style='color:red'>*</span>
                                <input type="number" placeholder="0" min="1cc" name='nj' id='number_j'>
                            </div>
                        </div>
                    </div>
                    <div class="row md-12">
                        <div class="col md-4">
                            <div class="form-group" style='position: relative;top: 41px;left: 22px;'>
                                <input type="checkbox" class="form-check-input" id="check2"  name='attesta_verte'>
                                <label class="form-check-label" for="exampleCheck1">Attestation(s) Verte(s)</label>
                            </div>
                        </div>
                        <div class="col md-4">
                            <div class="form-group">
                                <label for="matricule">nombre d'attestations</label>&nbsp&nbsp<span style='color:red'>*</span>
                                <input type="number" placeholder="0" min="1" name="nv" id='number_v'>
                            </div>
                        </div>
                    </div>
                    <div class="row md-12">
                        <div class="col md-4">
                            <div class="form-group" style='position: relative;top: 41px;left: 22px;'>
                                <input type="checkbox" class="form-check-input" id="check3" name='attesta_cedeao'>
                                <label class="form-check-label" for="exampleCheck1">Attestation(s) Cedeao</label>
                            </div>
                        </div>
                        <div class="col md-4">
                            <div class="form-group">
                                <label for="matricule">nombre d'attestation</label>&nbsp&nbsp<span style='color:red'>*</span>
                                <input type="number" placeholder="0" min="1" name='nc' id='number_c'>
                            </div>
                        </div>
                    </div>
                          
                    <div class="row validation-row">
                        <button class="btn btn-primary mb-2 validDotation" name="action" value="valider_commande">VALIDER</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../view/js/form-script.js"></script>

    </body>

</html>