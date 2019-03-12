
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Saham Assurance SN</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet"">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body onchange="CalculeBC()"♥>
    <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">
        <?php include "header.php";?>
        <main class="mdl-layout__content">
            <div class="mdl-content" style="padding-top: 25px;>
                <div class="container">
                    <div class="row">
                        <div class="col-3" >
                            <!-- Form subscription -->
                            <form method="post" action="../../controller/admin/index.php">
                                <p  style="height: 2px" class="h5 text-center mb-4">Ajout d'Intermediaire</p>
                                <?php
                                if (isset($ok))
                                {
                                    if ($ok==true)
                                        echo "<div class=\"alert alert-success\" role=\"alert\">Ajout effectué avec succes</div>";
                                    else
                                        echo "<div class=\"alert alert-danger\" role=\"alert\">Erreur ajout non effectué</div>";

                                }
                                if(isset($ko))
                                {
                                    if ($ko=="faux")
                                    {
                                        echo "<div class=\"alert alert-danger\" role=\"alert\">l'adresse mail existe ou code intermediaire existe déjà</div>";
                                    }
                                }
                                if (isset($modification))
                                {
                                    if ($modification==true)
                                        echo "<div class=\"alert alert-success\" role=\"alert\">Modification effectué avec succes</div>";
                                    else
                                        echo "<div class=\"alert alert-danger\" role=\"alert\">Erreur modification non effectuée</div>";

                                }
                                ?>

                                <div class="md-form" style="height: 35px">
                                    <i class="material-icons prefix md-10">&#xe85e;</i>
                                    <input type="text" placeholder="Matricule" name="matricule" id="matricule" class="form-control" <?php if($choix==2) echo"value=".$item['matricule']."" ;?> required>

                                </div>
                                <div class="md-form" style="height: 35px">
                                    <i class="material-icons prefix">&#xe85e;</i>
                                    <input type="text" placeholder="Nom" name="nom" id="nom" class="form-control" <?php if($choix==2) echo"value=".$item['nom']."" ;?> required>
                                </div>
                                <div class="md-form" style="height: 35px">
                                    <i class="material-icons prefix">&#xe85e;</i>
                                    <input type="text" placeholder="Prenom" name="prenom" id="prenom" class="form-control" <?php if($choix==2) echo"value=".$item['prenom']."" ;?> required>
                                </div>
                                <div class="md-form" style="height: 35px">
                                    <i class="material-icons prefix md-10">&#xe85e;</i>
                                    <input type="text"placeholder="Adresse" name="adresse" id="adresse" class="form-control" <?php if($choix==2) echo"value=".$item['adresse']."" ;?> required>
                                </div>
                                <div class="md-form" style="height: 35px">
                                    <i class="material-icons prefix md-10">&#xe85e;</i>
                                    <input type="text" placeholder="Telephone" name="tel" id="tel" class="form-control" <?php if($choix==2) echo"value=".$item['tel']."" ;?> required>
                                </div>
                                <div class="md-form" style="height: 35px">
                                    <i class="fa fa-at prefix grey-text"></i>
                                    <input type="email" placeholder="Email" name="email" id="email" class="form-control" <?php if($choix==2) echo"value=".$item['email']."" ;?> required>
                                </div>
                                <div class="md-form" style="height: 35px">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe par défaut: saham" class="form-control"
                                        <?php if($choix==2)
                                        {
                                            echo"value=".$item['mdp']."" ;
                                        }
                                        else
                                        {
                                            echo "placeholder=\"Mot de passe par défaut: saham\"";
                                            echo "disabled";
                                        }?> >
                                </div>
                                <?php if ($choix!=2) {
                                    echo"
                                    <div class=\"form-group\">
                                    <input name=\"actived\" type=\"radio\" value=\"1\" id=\"actived\" checked=\"checked\">
                                    <label for=\"radio11\">Activer</label>
                                    <input name=\"actived\" value=\"0\" type=\"radio\" id=\"actived\" >
                                    <label for=\"radio11\">Desactiver</label>
                                </div> ";
                                }?>
                                <div class="text-center">
                                    <?php if($choix!=2)
                                        echo "<button class=\"btn btn-indigo\"  value=\"ajout\" name=\"action\">Ajouter <i class=\"fa fa-paper-plane-o ml-1\"></i></button>";
                                    ?>
                                    <?php if($choix==2) echo"<button class=\"btn btn-indigo\"  value=\"modif\" name=\"action\">Modifer <i class=\"fa fa-paper-plane-o ml-1\"></i></button>" ;
                                    ?>
                                    <button type="reset" value="Annuler" name="annuler" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">ANNULER</button>
                                </div>
                            </form>
                            <!-- Form subscription -->
                            <div style="">&nbsp;</div>
                            <div>
                                <div style="margin: 0 auto;text-align: center">
                                    <h3>telecharger format Excel</h3>
                                </div>
                                <div class="alert alert-info" role="alert" style="margin: 0 auto;font-size: 10px;width: 100%">
                                    Choisissez une periode pour pouvoir télécharger les productions
                                </div>
                                <form method="post" action="../../controller/admin/index.php">
                                <div class="form-group inline" style="width: 65%" >
                                    <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Début</label>
                                    <input type ="date"  name="debut" id="mec" required style="">
                                </div>
                                <div class="form-group" style="width: 65%">
                                    <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Fin</label>
                                    <input type ="date"  name="fin" id="mec" required style="">
                                </div>
                                <div style="text-align: center;margin: 0 auto;">
                                    <input type="submit" name="action" value="excel" class="btn btn-primary btn-lg">
                                </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-6 ">
                            <table class="table ">
                                <thead class="thead-inverse ">
                                <tr>
                                    <th>#</th>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th style='text-align: center'>Email</th>
                                    <th>Consulter</th>
                                    <th>Modif/Act/Desact</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //$cp=0;
                                    while($row=$resultat->fetch())
                                    {
                                        if($row[8]==0)
                                            $act="<i class=\"fa fa-lock prefix red-text\"></i>";
                                        else
                                            $act="<i class=\"fa fa-unlock prefix blue-text\"></i>";
                                        //$cp+=1;
                                        echo "
                                                <tr>
                                                    <th scope=\"row\">$act</th>
                                                    <td>$row[0]</td>
                                                    <td>$row[1]</td>
                                                    <td>$row[2]</td>
                                                    <td>$row[3]</td>
                                                    <td>$row[4]</td>
                                                    <td>$row[5]</td>
                                                    <td style='text-align: center'>
                                                        <a href='localhost/saham-app/controller/admin/?action=afficher&mat=$row[0]' onclick='if(!confirm(\"voulez - vous Modifier ? \")) return false;'><i class=\"fa fa-eye prefix blue-text\"></i></a>
                                                    </td>
                                                    <td style='text-align: center'>
                                                    <a href='localhost/saham-app/controller/admin/?action=modif&mat=$row[0]' onclick='if(!confirm(\"voulez - vous Modifier ? \")) return false;'><i class=\"fa fa-edit prefix blue-text\"></i></a>/
                                                    <a href='localhost/saham-app/controller/admin/?action=activer&mat=$row[0]&act=1' onclick='if(!confirm(\"voulez - vous Activer ? \")) return false;'><i class=\"fa fa-unlock prefix blue-text\"></i></a>/
                                                    <a href='localhost/saham-app/controller/admin/?action=activer&mat=$row[0]&act=0' onclick='if(!confirm(\"voulez - vous Desactiver ? \")) return false;'><i class=\"fa fa-lock prefix red-text\"></i></a>
                                                    </td>
                                                </tr>
                                        ";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="../../controller/tables/js/jquery.js"></script>
    <script src="../../controller/tables/js/dataTables.bootstrap.js"></script>
    <script src="../../controller/tables/js/jquery.dataTables.js"></script>
    <script >
        $(".table").DataTable();
    </script>
</body>

</html>