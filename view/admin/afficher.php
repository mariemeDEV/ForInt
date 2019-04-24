<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saham Assurance SN</title>
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="../../view/style/details_style.css">

</head>
<body id="body_accueil">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "header.php";?>
    <main class="mdl-layout__content">
        <div class="mdl-content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--8-col" style="width: 100rem;margin: 0 auto;margin-top: 20px;" >
            <div class="card " style="">
            <h1 class="top-title">Activités de l'intérmédiaire</h1>
            <hr></hr>
            <div class="row">
            <?php              
            while($row=$intermediaireData->fetch()){
            echo '
                <div class="col-lg-4">
                <ul class="list-group intermediaire_data" style="width: 110% !important">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Matricule
                    <span class="badge badge-primary badge-pill">'.$row[0].'</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Prénom
                    <span class="badge badge-primary badge-pill">'.$row[2].'</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Nom
                    <span class="badge badge-primary badge-pill">'.$row[1].'</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Téléphone
                    <span class="badge badge-primary badge-pill">'.$row[4].'</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    E-mail
                    <span class="badge badge-primary badge-pill">'.$row[5].'</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Etat
                    <span class="badge badge-primary badge-pill">'.$row[8].'</span>
                </li>
            </ul>
            </div>';
            }
        ?>
            <div class="col-lg-8">
                <div class="card-body" >
                    <table class="table table-striped details_tab">
                        <thead class="thead-inverse ">
                        <tr>
                            <th>#</th>
                            <th>id Police</th>
                            <th>Numero Police</th>
                            <th>Date debut</th>
                            <th>Date Echeance</th>
                            <th>Assure</th>
                            <th>Etat</th>
                            <th style='text-align: center'>Condition particuliére</th>
                            <th>Activer</th>
                            <th>Désactiver</th>
                            <!--th style='text-align: center'>Valider/Dévalider</th-->
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $cp=0;
                        while($row=$resultat->fetch())
                        {
                            $etat=null;
                            if($row[6]==1) $etat="Activé";
                            else $etat="Désactivé";
                            $cp+=1;
                            echo "<tr>
                            <th scope=\"row\">$cp</th>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[5]&nbsp;$row[4]</td>
                            <td>$etat</td>
                            <td style='text-align: center'>
                                <a href='./?action=lister&mat=".$_GET['mat']."&id=$row[0]' onclick='if(!confirm(\"voulez - vous imprimer ? \")) return false;'target=\"_blank\"><i class=\"material-icons\">print</i></a>
                            </td>
                            <td style='text-align: center;'>
                                <a href='./?action=validate&mat=".$_GET['mat']."&id=$row[0]' onclick='if(!confirm(\"voulez - vous vraiment valider ? \"))  return false;'><i class=\"material-icons\">done</i></a>
                            </td>
                            <td>
                                <a href='./?action=unvalidate&mat=".$_GET['mat']."&id=$row[0]' onclick='if(!confirm(\"voulez - vous vraiment dévalider ? \"))  return false;'><i class=\"material-icons\">clear</i></a>
                            </td>
                        </tr>";
                        }
                       ?>
                        </tbody>
                    </table>


                </div>
            </div>
            </div>

            </div>
            </div>
        </div>
        </div>
    </main>
</div>

<script src="../../controller/tables/js/jquery.js"></script>
<script src="../../controller/tables/js/dataTables.bootstrap.js"></script>
<script src="../../controller/tables/js/jquery.dataTables.js"></script>
<script>
    $(".table").DataTable();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="../../view/js/form-script.js"></script>

</body>

</html>