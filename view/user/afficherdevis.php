<!DOCTYPE html>

<html lang="fr">

    <head>

        <title>Saham Assurance SN</title>
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
            left: 15px
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 134px;
            left: 138px
        }
        .dataTab{
            position: relative;
            top: 5px;
        }
        .paging_simple_numbers{
            position: relative !important;
            top: 81px !important
        }
        .pagination li{
            height:34px !important
        }
        .pagination li a{
            padding: 1px !important;
            background: #062944 !important;
            color: #f7ba00 !important
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
            left: 55em;
            z-index: 3;
        }
        .container ul li{
            padding: 1em;
            line-height: 39px;
            font-weight: bold;
        }
        /* .container ul li::after:not(:last-child){
        } */
        /* li:last-child:after{
            content:'/';
            padding-left:40px
        } */
        /* ul > li:not(:last-child):after{
            content:'/';
            padding-left:40px;
            color: #f7bb3d !important

        } */
        ul li a{
            text-decoration:none !important;
            color: #f7bb3d !important;
            position: relative;
            left: 118px;
        }
     
    </style>

    </head>

    <body onchange="CalculeBC()">
        <!--header-->
        <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">
            <?php include "header.php";?>
        </div>
        <!--header-->

        <!--container-->
        <div class="container">
            <div class="modal" id='intermediaire_modal'><!--extraction modal-->
                <div class="modal-content" style="width: 45% !important">
                <div>
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
                </div>
                </div><!--extraction production-->
                <ul>
                    <li style='display:none '><a>Dotation</a></li>
                    <li ><a id="myBtn">Production</a></li>
                    <li style='display:none'><a id="add_new_intermediaire">Nouveau</a></li>
                </ul>
          <h1 class="ajout-title">Géstion des dévis</h1>
          <hr>
            <table id="usersData" class="table dataTab table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Numero Police</th>
                        <th>Date debut</th>
                        <th>Date Echeance</th>
                        <th>Assure</th>
                        <th>Conditions particuliéres</th>
                        <th style='text-align: center;'>Contrat</th>
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
                            <td style='text-align: center;'>
                                <a href='../../controller/formulaire/?action=modiferDevis&id_police=$row[0]' onclick='if(!confirm(\"voulez-vous créer un contrat pour ce devis ? \")) return false;' target=\"_blank\"><i class=\"material-icons\" style=\"color:#062944 !important\">folder_open</i></a>
                            </td>                           
                        </tr>";
                        }
                       ?>
                </tbody>
                </tfoot>                
                <tfoot>

            </table>
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
    </body>
</html>