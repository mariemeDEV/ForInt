<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saham Assurance SN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="../../view/style/style_aff.css">
    <style>
        .dataTables_length{
            width: 40% !important;
            position: relative !important;
            top: 44px !important;
            left: 6px !important;
        }
        .dataTables_filter {
            position: relative !important;
            top: 25px !important;
            right: -3px !important;
        }
        #DataTables_Table_0_paginate{
            margin-top:-21px !important
        }
    </style>

</head>
<body id="body_accueil">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "header.php"; ?>
    <main class="mdl-layout__content" >
        <div class="mdl-content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--8-col" style="margin-top: 20px;" >
            <div class="card ">
                <div class="card-body">
                    <table class="table table-striped" style="margin-top: 30px !important;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Numero Police</th>
                            <th>Date debut</th>
                            <th>Date Echeance</th>
                            <th>Assure</th>
                            <th style='text-align: center;'>Conditions particuliéres</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $cp=0;
                        while($row=$resultat->fetch())
                        {
                            $cp+=1;
                            echo "<tr>
                            <th scope=\"row\">$cp</th>                         
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[5]&nbsp;$row[4]</td>                   
                            <td style='text-align: center;'>
                                <a href='../../controller/formulaire/?action=lister&id=$row[0]' onclick='if(!confirm(\"voulez-vous imprimer ? \")) return false;' target=\"_blank\"><i class=\"material-icons\" style=\"color:#062944 !important\">print</i></a>
                            </td>                            
                        </tr>";
                        }
                       ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col" style="margin-top: 0px;height: 100px" >
                <div class="card production" style="background: floralwhite">
                    <div class="card-body">
                        <div style="margin: 0 auto;text-align: center">
                            <h3 class="action-title">Extraction Production</h3>
                        </div>
                        <div class="alert alert-info" role="alert" style="margin: 0 auto;font-size: 15px;width: 90%;text-align: center;">
                            Choisissez une periode pour pouvoir télécharger les productions
                        </div>
                        <div style="height: 23px;"  class="col-lg-12">
                        </div>
                        <form method="post" action="../../controller/formulaire/index.php" style="margin-left: -26px;padding: 2%;">
                        <div class="col-lg-6">
                            <div class="form-group" >
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: 15%;" >Période Début</label>
                                <input type ="date" class="periode-inputs" name="debut" id="mec" required style="margin-left: 5%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: 29%;" >Période Fin</label>
                                <input type ="date" class="periode-inputs" name="fin" id="mec" required style="margin-left: 20%;">
                            </div>
                        </div>
                        <div style="height: 23px;"  class="col-lg-12">
                        </div>
                        <div style="text-align: center;margin: 0 auto;">
                            <input type="submit" name="action" value="Telecharger" class="btn btn-primary btn-md download">
                        </div>
                        </form>
                        <div>
                            &nbsp;
                        </div>
                </div>
            </div>
        </div>
        </div>

        <div class="mdl-content" style="width: 100%;bottom: 0;">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col" >
                    <?php //include "footer.php"; ?>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="../../controller/tables/js/jquery.js"></script>
<script src="../../controller/tables/js/jquery.dataTables.js"></script>
<script >
    $(".table").DataTable();
</script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>