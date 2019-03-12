<?php
/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 20/08/2017
 * Time: 20:56
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saham Assurance SN</title>
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<body id="body_accueil">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "header.php";?>
    <main class="mdl-layout__content">
        <div class="mdl-content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--8-col" style="width: 100rem;margin: 0 auto;margin-top: 20px;" >
            <div class="card " style="">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>id Police</th>
                            <th>Numero Police</th>
                            <th>Date debut</th>
                            <th>Date Echeance</th>
                            <th>Assure</th>
                            <th>Etat</th>
                            <th style='text-align: center'>Imprimer</th>
                            <th style='text-align: center'>Valider/Dévalider</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $cp=0;
                        while($row=$resultat->fetch())
                        {
                            $etat=null;
                            if($row[6]==1) $etat="Validé";
                            else $etat="Dévalidé";
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
                                <a href='./controller/admin/?action=lister&mat=".$_GET['mat']."&id=$row[0]' onclick='if(!confirm(\"voulez - vous imprimer ? \")) return false;'target=\"_blank\"><i class=\"material-icons\">print</i></a>
                              </td>
                              
                              <td style='text-align: center;'>
                              <a href='./controller/admin/?action=validate&mat=".$_GET['mat']."&id=$row[0]' onclick='if(!confirm(\"voulez - vous vraiment valider ? \"))  return false;'><i class=\"material-icons\">done</i></a>
                              &nbsp;&nbsp;
                              <a href='./controller/admin/?action=unvalidate&mat=".$_GET['mat']."&id=$row[0]' onclick='if(!confirm(\"voulez - vous vraiment dévalider ? \"))  return false;'><i class=\"material-icons\">clear</i></a>
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


    </main>

</div>


<script src="../../controller/tables/js/jquery.js"></script>
<script src="../../controller/tables/js/dataTables.bootstrap.js"></script>
<script src="../../controller/tables/js/jquery.dataTables.js"></script>
<script >
    $(".table").DataTable();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>