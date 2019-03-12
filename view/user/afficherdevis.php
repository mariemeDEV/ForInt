

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saham Assurance SN</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    <title>Document</title>
    <link href="http://saham-app.com/view/style/style_aff.css" rel="stylesheet">
</head>
<body id="body_accueil">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "header.php"; ?>
    <main class="mdl-layout__content" >
        <div class="mdl-content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--8-col" style="margin-top: 20px;" >
            <div class="card " style="background: floralwhite">

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Numero Police</th>
                            <th>Date debut</th>
                            <th>Date Echeance</th>
                            <th>Assure</th>
                            <th style='text-align: center;'>Imprimer</th>
                            <th style='text-align: center'>Creer Contrat</th>
                        </tr>
                        </thead>
                        <tbody>
                         
                        <?php

                        $cp=0;
                        while($row=$resultat->fetch())
                        {
                            $cp+=1;
                        ?>
                            <tr>
                                <th scope=\"row\"><?php echo $cp; ?></th>                         
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4].'&nbsp'.$row[5]?></td>                   
                                <td style='text-align: center;'>
                                    <a href="http://saham-app.com/controller/formulaire/?action=lister&id=<?php echo $row[0]; ?>" onclick="if(!confirm('voulez - vous imprimer ?')) return false;" 
                                      target="_blank">
                                        <i class="material-icons">print</i>
                                    </a>
                                </td>
                                <?php 
                                    if($row['6']==1){
                                 ?>
                                   <!--  <td>
                                        <form action='../../controller/formulaire/index.php' method='get'>
                                            <input type='hidden' name='id_police' value='<?php echo $row[0] ?>'>
                                            <input type="hidden" name="action" value="changeToValider">
                                            <input type='submit' name='ok' value='valider'>
                                        </form>
                                    </td>   -->
                                  <!--   <td>
                                        <form action='../../controller/controller/formulaire/index.php' method='get'>
                                            <input type='hidden' name='id_police' value='<?php echo $row[0] ?>'>
                                            <input type='submit' name='action' value='modifierDevis'>
                                        </form>
                                    </td> -->

                                     <td>
                                        <form action='../../controller/formulaire/index.php' method='get'>
                                            <input type='hidden' name='id_police' value='<?php echo $row[0] ?>'>
                                            <input type='submit' name='action' value='modiferDevis'>
                                        </form>
                                    </td>
                                    <?php } ?>                          
                            </tr>
                        <?php 
                        }
                       ?>
                        </tbody>
                    </table>


                </div>
            </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col" style="margin-top: 0px;height: 100px" >
                <div class="card " style="background: floralwhite">

                    <div class="card-body">
                        <div style="margin: 0 auto;text-align: center">
                            <h3>Extraction Production</h3>
                        </div>
                        <div class="alert alert-info" role="alert" style="margin: 0 auto;font-size: 15px;width: 90%;text-align: center;">
                            Choisissez une periode pour pouvoir télécharger les productions
                        </div>
                        <div style="height: 23px;"  class="col-lg-12">
                        </div>
                        <form method="post" action="../../controller/formulaire/index.php">
                        <div class="col-lg-6">
                            <div class="form-group" >
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: 15%;" >Période Début</label>
                                <input type ="date"  name="debut" id="mec" required style="margin-left: 5%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: 29%;" >Période Fin</label>
                                <input type ="date"  name="fin" id="mec" required style="margin-left: 20%;">
                            </div>
                        </div>
                        <div style="height: 23px;"  class="col-lg-12">
                        </div>
                        <div style="text-align: center;margin: 0 auto;">
                            <input type="submit" name="action" value="Telecharger" class="btn btn-primary btn-lg">
                        </div>
                        </form>
                        <div >
                            &nbsp;
                        </div>
                </div>
            </div>
        </div>
        </div>

     <!--  <div class="mdl-content" style="width: 100%; height: 225px">
           &nbsp;
            </div> !-->
        <div class="mdl-content" style="width: 100%;bottom: 0;>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col" >
                    <?php //include "footer.php"; ?>
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
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</body>

</html>