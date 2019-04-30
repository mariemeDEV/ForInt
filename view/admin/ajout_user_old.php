

<!DOCTYPE html>

<html lang="fr">

<head>

    <title>Saham Assurance SN</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../view/style/search_admin.css">
    <link rel="stylesheet" href="../../view/style/style_aff.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        }

        /* The Close Button */
        .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }
        .dataTables_length{
            display:none !important
        }
        #DataTables_Table_0_filter{
            height: 26px !important;
            position: relative !important;
            left: 0px !important;
            top: 49px !important;
        }
        #DataTables_Table_0_filte label input{
            border-bottom: 1px solid #062944 #!important
        }
        #myBtn{
            margin-left: 83em !important;
            background: #062944 !important;
            color: #f7bb3d !important;
            font-weight: bold !important;
            border: none !important;
            font-size: 14px !important;
            padding: 4px !important;
            margin-top: 27px !important;
        }
        .userDataTab{
            margin-top: 90px !important;
        }
</style>
</head>

<body onchange="CalculeBC()"♥>

    <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">

        <?php include "header.php";?>
        <main class="mdl-layout__content">
            <div class="modal" id='intermediaire_modal'>
                <div class="modal-content" style="width: 45% !important">
                    <h3 style='color: #062944;font-weight:bold;text-align:center !important'>Extraction production</h3>
                    <hr style='width:50% !important;margin:auto !important;font-weight:bold !important'>
                    <span class="close" style="position:relative;top:-64px">&times;</span>
                    <form method="post" action="../../controller/admin/index.php" style="margin-top: -28px;">
                        <div class="form-group inline" style="width: 65%" >
                            <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Début</label>
                            <input type ="date"  name="debut" id="mec" required style="">
                        </div>
                        <div class="form-group" style="width: 65%">
                            <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Fin</label>
                            <input type ="date"  name="fin" id="mec" required style="">
                        </div>
                        <div class="form-group" style="width: 65%">
                            <label for="intermediaire" class=" control-label" title="Mise en circulation" >Intermédiaire</label>
                            <input type ="text"  name="intermediaire_extrait" value="MATRICULE INTERMEDIAIRE" id="intermdiaire" required style="">
                        </div>
                        <div style="text-align: center;margin: 0 auto;">
                            <input type="submit" name="action" value="excelIntermediaire" class="btn btn-primary btn-lg" style="background: #062944;color: #f7bb3d !important;">
                        </div>
                    </form>
                </div>
            </div>

            <button id="myBtn">Production</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">
            <!-- Modal content -->
            <span class="close" style="position:relative;top:-64px">&times;</span>
            <div class="modal-content" style="width:45% !important">
            <div>
                <div style="margin: 0 auto;text-align: center">
                    <h3 style='color: #062944;font-weight:bold'>Extraction productions</h3>
                    <hr style='width:50% !important;margin:auto !important;font-weight:bold !important'>
                </div>

                <!--div class="alert alert-info" role="alert" style="margin: 0 auto;font-size: 10px;width: 100%">
                    Choisissez une periode pour pouvoir télécharger les productions
                </div-->

                <form method="post" action="../../controller/admin/index.php" style="margin-top: 20px;">
                    <div class="form-group inline" style="width: 65%" >
                        <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Début</label>
                        <input type ="date"  name="debut" id="mec" required style="">
                    </div>

                    <div class="form-group" style="width: 65%">
                        <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Fin</label>
                        <input type ="date"  name="fin" id="mec" required style="">
                    </div>

                    <div style="text-align: center;margin: 0 auto;">
                        <input type="submit" name="action" value="excel" class="btn btn-primary btn-lg" style="background: #062944;    color: #f7bb3d !important;">
                    </div>
                </form>

                </div>

                </div>

            </div>
            </div>

            <div class="mdl-content" style="padding-top: 25px;>

                <div class="container">
                <div id="addUserModal" class="modal">
                    <div class="modal-content cotent_ajout">
                    <span class="close">&times;</span>
                    <h5>Ajouter un nouvel utilisateur</h5>
                          <form method="post" action="../../controller/admin/index.php" class="addIntermediaire">
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
                            <input type="text" placeholder="Matricule" name="matricule" id="matricule" class="form-control" <?php if($choix==2) echo"value=".$item['matricule']."" ;?> required>
                        </div>

                        <div class="md-form" style="height: 35px">
                            <input type="text" placeholder="Nom" name="nom" id="nom" class="form-control" <?php if($choix==2) echo"value=".$item['nom']."" ;?> required>
                        </div>

                        <div class="md-form" style="height: 35px">
                            <input type="text" placeholder="Prenom" name="prenom" id="prenom" class="form-control" <?php if($choix==2) echo"value=".$item['prenom']."" ;?> required>
                        </div>

                        <div class="md-form" style="height: 35px">
                            <input type="text"placeholder="Adresse" name="adresse" id="adresse" class="form-control" <?php if($choix==2) echo"value=".$item['adresse']."" ;?> required>
                        </div>

                        <div class="md-form" style="height: 35px">
                            <input type="text" placeholder="Telephone" name="tel" id="tel" class="form-control" <?php if($choix==2) echo"value=".$item['tel']."" ;?> required>
                        </div>

                        <div class="md-form" style="height: 35px">
                            <input type="email" placeholder="Email" name="email" id="email" class="form-control" <?php if($choix==2) echo"value=".$item['email']."" ;?> required>
                        </div>

                        <div class="md-form" style="height: 35px">
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
                    </div>
                </div>

                    <div class="row">
                    <!--a id="target">CLICK</a-->
                    <button id="add_new_intermediaire" class="btn_new">Nouveau</button>
                        <div class="col-12 ">
                            <table class="table userDataTab">
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
                                    <!--th>Extraire production</th-->
                                </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    while($row=$resultat->fetch())
                                    {
                                        if($row[8]==0)
                                            $act="<i class=\"fa fa-lock prefix red-text\"></i>";
                                        else
                                            $act="<i class=\"fa fa-unlock prefix blue-text\"></i>";
                                        echo "<tr>
                                                <th scope=\"row\">$act</th>
                                                <td>$row[0]</td>
                                                <td>$row[1]</td>
                                                <td>$row[2]</td>
                                                <td>$row[3]</td>
                                                <td>$row[4]</td>
                                                <td>$row[5]</td>
                                                <td style='text-align: center'>
                                                    <a href='./?action=afficher&mat=$row[0]'><button class='btn btn-md' style='background:#062843;padding:7px !important;color: #f7bb3d !important;cursor:pointer'>DÉTAILS</button></a>
                                                </td>
                                                <td style='text-align: center'>
                                                    <a style='padding-right:16px' href='./?action=modif&mat=$row[0]&prenom=$row[1]&nom=$row[2]&adresse=$row[3]&telephone=$row[4]&email=$row[5]' onclick='if(!confirm(\"voulez - vous Modifier ? \")) return false;'><i class=\"fa fa-edit prefix blue-text\"></i></a>/
                                                    <a style='padding-right:16px' href='./?action=activer&mat=$row[0]&act=1'! onclick='if(!confirm(\"voulez - vous Activer ? \")) return false;'><i class=\"fa fa-unlock prefix blue-text\"></i></a>/
                                                    <a style='padding-right:16px' href='./?action=activer&mat=$row[0]&act=0' onclick='if(!confirm(\"voulez - vous Desactiver ? \")) return false;'><i class=\"fa fa-lock prefix red-text\"></i></a>
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

        </main>

    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="../../controller/tables/js/jquery.js"></script>
    <script src="../../controller/tables/js/dataTables.bootstrap.js"></script>
    <script src="../../controller/tables/js/jquery.dataTables.js"></script>
    <script src="../../view/js/form-script.js"></script>
    <script >
        $(".table").DataTable();
    </script>

    <script>
       // $('td:last-child a').click(function(){
        //     alert('ok')
        // })
        $("#myBtn").on('click',function(){
            $('#myModal').css('display','block')
        })
     
    </script>

    <script>
        var intermediaire_modal      = document.getElementById('intermediaire_modal')
        $('#first_prod').click(function(){
            intermediaire_modal.style.display='block'
        })
    </script>
    <script>
        var production_intermediaire = document.getElementsByClassName('intermediaire_prod')
        var intermediaire_modal      = document.getElementById('intermediaire_modal')
        // $('.userDataTab td:last-child').find('button').css('background','yellow')
        $('.userDataTab td:last-child').find('button').on('click',function(){
            intermediaire_modal.style.display='block'
        })
        // for(var e=1; e<=production_intermediaire.length; e++){
        //     production_intermediaire[e].onclick=function(){
        //         intermediaire_modal.style.display='block'
        //     }
        // }
    </script>

    <script>
        $('.close').on('click',function(){
            $('#intermediaire_modal #myModal').css('display','none')
        })
    </script>

    <script>
        $(window).on('click',function(event){
            if (event.target == $('#intermediaire_modal')) {
                $('#intermediaire_modal').style.display = "none";
            }
        })
    </script>

</body>



</html>