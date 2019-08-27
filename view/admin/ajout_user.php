<!DOCTYPE html>

<html lang="fr">

    <head>

        <title>Saham Assurance SN</title>
        <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
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
            top: 98px;
            left: -105px;

        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 134px;
            left: 24px
        }
        .dataTab{
            position: relative;
            top: 5px;
        }
       
        #usersData_filter{
            position: relative !important;
            left: -5px !important;
            top: 6px;
        }
        #usersData_filter .form-control-sm{
            border: 0 solid #ffffff !important;
            border-bottom: 1px solid #062944 !important;
            width: 79%;
        }
        thead{
            background: #f9d281;
            color: #062944;
        }
        thead,td{
            font-size:13px !important
        }
        .table td{
            padding-bottom:0 !important
        }
        .dataTables_info{
            display:none !important
        }
        .container ul{
           display: inline-flex;
            position: absolute;
            top: -3px;
            left: 14em;
            z-index: 3;
            left: 18em;
        }
        .container ul li{
            padding: 1em;
            line-height: 39px;
            font-weight: bold;
        }
        ul > li:not(:last-child):after{
            padding-left:40px;
            color: #f7bb3d !important
        }
        ul li a{
            text-decoration: none !important;
            color: #062945 !important;
            background: #f7ba00;
            padding: 8px;
            border-radius:15px !important
        }
        .card-body input{
            border: 1px solid #ffffff !important;
            border-bottom: 1px solid #062944 !important
        }
        .cotent_ajout {
            height: 105% !important;
            margin-top: -71px !important;
        }
        .modal{
            top: 40px
        }
        .text-center{
            margin-top: -11px !important
        }
        .btn-indigo{
            background-color: #062944!important;
            color: #f7bb3d !important;
        }
       /*Footer*/
       .dataTables_info{
            display:none !important
        }
        .pagination{
            display: inline-flex;
            position: absolute;
            top: 11px;
            left: 14em;
            z-index: 3;
            left: -32em !important
        }
        .pagination li a{
            background: #062944 !important;
            color: #f7ba00 !important
        } 

        .pagination ul li {
            text-decoration:none !important;
            color: #f7bb3d !important;
            position: relative;
        }
        .pagination li{
            padding:0 !important

        }
        .list-group-item{
            padding: 5px !important;
        } 
        .mdl-layout__container{
            overflow-x:hidden !important
        }
     
     
    </style>

    </head>

    <body>
        <!--header-->
        <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">
            <?php include "header.php";?>
        </div>
        <!--header-->

        <!--container-->
        <div class="container">
            <div class="modal" id='intermediaire_modal'><!--extraction modal-->
            <!--div class="modal-content" style="width: 45% !important"-->
            <div class="card" style="width:42%;margin:auto  ">
                <div class="card-header" style="background:#062944;"><span class="close" style="position:relative;top:-64px;top: -16px;color: #f7bb3d !important;">&times;</span><h3 style="color:#f7bb3d">Extraction production</h3></div>
                <div class="card-body">
                <form method="post" action="../../controller/admin/index.php" style="margin-top:-2px;margin-left: 160px;">
                    <div class="form-group inline" style="width: 65%" >
                        <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: -23%;">Période Début</label>
                        <input type ="date"  name="debut" id="mec" required style="width: 136%;margin-left: -23%;border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;margin-bottom: 11%;">
                    </div>
                    <div class="form-group" style="width: 65%">
                        <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: -23%;">Période Fin</label>
                        <input type ="date"  name="fin" id="mec" required style="width: 136%;margin-left: -23%;border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;margin-bottom: 11%;">
                    </div>
                    <div style="text-align: center;margin: 0 auto;">
                        <input type="submit" name="action" value="excel" class="btn btn-primary btn-lg" style="background: #062944;color: #f7bb3d !important; margin-left:-121px;">
                    </div>
                </form>
                </div>
            <!--/div-->
            </div>
        </div><!--extraction production-->
        <div class="card modal" id="addUserModal" ><!--ajout nouvel utilisateur-->
                <div class="modal-content cotent_ajout">
                <div class="card-header" style="width:614px;margin-left: -16px;background: #062944;color: #f7bb3d;text-align:left;margin-top:-17px !important"><span class="close" style="color: #f7bb3d;margin-top: -14px;">&times;</span><h3>Ajout utilisateur</h3></div>
                <div class="card-body">
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
                            echo "<button class=\"btn btn-indigo\"  value=\"ajout\" name=\"action\">Ajouter</button>";
                        ?>

                        <?php if($choix==2) echo"<button class=\"btn btn-indigo\"  value=\"modif\" name=\"action\">Modifer <i class=\"fa fa-paper-plane-o ml-1\"></i></button>" ;

                        ?>
                        <!--button type="reset" value="Annuler" name="annuler" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">ANNULER</button-->
                    </div>

                    </form>

                    <!-- Form subscription -->
                </div>
                </div><!--ajout nouvel utilisateur-->
                </div>
                <ul>
                    <li><a href="./?action=dotations">Consultation dotations</a></li>
                    <li><a href="./?action=annulations">Consultation annulations</a></li>
                    <li><a id="myBtn">Extraire production</a></li>
                    <li><a href="./?action=commandes">Géstion des commandes</a></li>
                    <li><a id="add_new_intermediaire">Nouvel intérmédiaire</a></li>
                </ul>
          <h1 class="ajout-title">Géstion des utilisateurs</h1>
          <hr>
            <table id="usersData" class="table dataTab table-striped table-bordered" style="width:100%;width: 100%;position: relative;left: -125px;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>E-mail</th>
                        <th>Consulter</th>
                        <th>Extraire</th>
                        <th>Attestations</th>
                        <th>Modif/Act/Desact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=$resultat->fetch())
                        {
                            if($row[8]==0)
                                $act="<i class=\"fa fa-lock prefix red-text\"></i>";
                            else
                                $act="<i class=\"fa fa-unlock prefix blue-text\" ></i>";
                            echo "<tr>
                                <th scope=\"row\">$act</th>
                                <td>$row[0]</td>
                                <td>$row[1]</td>
                                <td>$row[2]</td>
                                <td>$row[3]</td>
                                <td>$row[4]</td>
                                <td>$row[5]</td>
                                <td>
                                    <a href='./?action=prod&mat=$row[0]'><button class='btn btn-md' style='background:#062843;padding:7px !important;color: #f7bb3d !important;cursor:pointer;border-radius:15px !important'>CONSULTATION</button></a>
                                </td>
                                <td style='text-align: center'>
                                    <a href='#'><button class='btn btn-md extraire_prod' style='background:#062843;padding:7px !important;color: #f7bb3d !important;cursor:pointer;border-radius:15px !important'>EXTRACTION<input type=\"text\" value='$row[0]' style=\"display:none\" class=\"hiddenMat\"></button></a>
                                </td>
                                <td style='text-align: center'>
                                    <a href='./?action=affectations&mat=$row[0]'><button class='btn btn-md' style='background:#062843;padding:7px !important;color: #f7bb3d !important;cursor:pointer;border-radius:15px !important'>DOTATION</button></a>
                                </td>
                                <td style='text-align: center'>
                                    <a style='padding-right:16px' href='./?action=modif&mat=$row[0]&prenom=$row[1]&nom=$row[2]&adresse=$row[3]&telephone=$row[4]&email=$row[5]' onclick='if(!confirm(\"voulez - vous Modifier ? \")) return false;'><i class=\"fa fa-edit prefix blue-text\"></i></a>/
                                    <a style='padding-right:16px' href='./?action=activer&mat=$row[0]&act=1'! onclick='if(!confirm(\"voulez - vous Activer ? \")) return false;'><i class=\"fa fa-unlock prefix blue-text\"></i></a>
                                    <a style='padding-right:16px' href='./?action=activer&mat=$row[0]&act=0' onclick='if(!confirm(\"voulez - vous Desactiver ? \")) return false;'><i class=\"fa fa-lock prefix red-text\"></i></a>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
                </tfoot>                
                <tfoot>
            </table>

            <div class="modal" id='prod_intermediaire_modal'><!--extraction pour un intermédiaire-->
            <!--div class="modal-content" style="width: 45% !important"-->
            <div class="card" style="width:42%;margin:auto  ">
                <div class="card-header" style="background:#062944;"><span class="close" style="position:relative;top:-64px;top: -16px;color: #f7bb3d !important;">&times;</span><h3 style="color:#f7bb3d">Extraction production</h3></div>
                <div class="card-body">
                <form method="post" action="../../controller/admin/index.php" style="margin-top:-2px;margin-left: 160px;">
                    <div class="form-group inline" style="width: 65%" >
                        <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: -23%;">Période Début</label>
                        <input type ="date"  name="debut" id="mec" required style="width: 136%;margin-left: -23%;border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;margin-bottom: 11%;">
                    </div>
                    <div class="form-group" style="width: 65%">
                        <label for="dtp_input2" class=" control-label" title="Mise en circulation" style="margin-left: -23%;">Période Fin</label>
                        <input type ="date"  name="fin" id="mec" required style="width: 136%;margin-left: -23%;border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;margin-bottom: 11%;">
                    </div>
                    <!-- ./?action=afficher&mat=$row[0]-->
                    <div style="text-align: center;margin: 0 auto;">
                        <input type="submit" name="action" value="afficher" class="btn btn-primary btn-lg" style="background: #062944;color: #f7bb3d !important; margin-left:-121px;">
                        <input type="text" value='' style='display:none !important' name='hidden_mat' id='hidden-matricule'>
                    </div>
                </form>
                </div>
            <!--/div-->
            </div>
        </div><!--extraction pour un intermédiaire-->
        </div>
        <!--container-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../view/js/form-script.js"></script>

    <script>
        $(document).ready(function() {
            $('#usersData').DataTable();
            $("#usersData_filter").find('input').focus()
        } );
    </script>
    <script>
        $('#add_new_intermediaire').on('click',function(){
            $('#addUserModal').fadeIn()
        })
    </script>
    <script>
        $("#myBtn").on('click',function(){
            $('#intermediaire_modal').fadeIn()
        })
    </script>
    <script>
        var intermediaire_modal      = document.getElementById('intermediaire_modal')
        $('#first_prod').click(function(){
            $('#intermediaire_modal').fadeIn()
        })
    </script>
    <script>
        var production_intermediaire = document.getElementsByClassName('intermediaire_prod')
        var intermediaire_modal      = document.getElementById('intermediaire_modal')
        $('.userDataTab td:last-child').find('button').on('click',function(){
            intermediaire_modal.style.display='block'
        })
    </script>
    <script>
        $('.close').on('click',function(){
            $('#intermediaire_modal,#addUserModal').fadeOut()
        })
    </script>
    <script>
        $(window).on('click',function(event){
            if (event.target == $('#intermediaire_modal')) {
                $('#intermediaire_modal,#addUserModal').fadeOut()
            }
        })
    </script>
    <script>
        $('.extraire_prod').on('click',function(){
            var hiddenMat =  ($(this).find('.hiddenMat').val())
            $('#hidden-matricule').val(hiddenMat)
           // alert($('#hidden-matricule').val())
            $('#prod_intermediaire_modal').fadeIn()
           
        })
        $('.close').on('click',function(){
            $('#prod_intermediaire_modal').fadeOut()
          
        })
    </script>
    </body>
</html>