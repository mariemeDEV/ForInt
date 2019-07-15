<!DOCTYPE html>

<html lang="fr">

    <head>
        <title>For-Int</title>
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
        .dataTables_info{
            display:none !important
        }
        .pagination{
            display: inline-flex;
            position: absolute;
            top: -74px;
            left: -42em;
            background: #062843;
            z-index: 3;
        }
        .pagination li a{
            background: #062944 !important;
            color: #f7ba00 !important
        } 
        .container ul{
            display: inline-flex;
            position: absolute;
            top: 15px;
            left: -31em;
            z-index: 3;
        }
        ul li a{
            text-decoration:none !important;
            color: #f7bb3d !important;
            position: relative;
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
              
          <h1 class="ajout-title">Gestion des annulations</h1>
          <hr>
            <table id="annulationsData" class="table dataTab table-striped table-bordered" style="width:100%;margin-left:-142px;"><!--Datatable-->
                <thead>
                    <tr>
                        <th>Numéro police</th>
                        <th>Matricule intermediaire</th>
                        <th>Prénom intermediaire et nom</th>
                        <th>Téléphone intérmédiaire</th>
                        <th>Date demande</th>
                        <th>Etat annulation</th>
                        <th>Motif annulation</th>
                        <th>Etat police</th>
                        <th>Annulé par</th>
                        <th>Annuler</th>
                        <th>Générer une demande d'annulation</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($row=$annulations->fetch()){
                      echo '<tr> 
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$row[6].'</td>';
                        if($row[7]=='A annuler'){
                            echo '<td style="background:#ff000087">A annuler</td>';
                        }else if($row[7]=='Annule'){
                            echo '<td style="background:#ffa50085">Annulé</td>';
                        }
                        echo '<td>'.$row[8].'</td>
                        <td>'.$row[9].'</td>
                        <td>'.$row[5].'</td>';
                        echo
                        "<td>
                            <button style=\"border:none;background:#ffffff\" class=\"delete-btn\" value='$row[10]'><i class=\"material-icons\" style=\"color:#b71a23 !important;margin-left:21px;cursor:pointer\" id=\"delete-contrat\">delete</i></button>
                        </td>
                        <td>
                            <button style=\"border:none;background:#ffffff\" class=\"cp-btn\" value='$row[10]'><i class=\"material-icons\" style=\"color:#b71a23 !important;margin-left:21px;cursor:pointer\" id=\"dossier\">folder</i></button>
                        </td>
                    </tr>";
                    }
                ?>
                </tbody><!--Datatable-->
                </tfoot>                
                <tfoot>
            </table>

            <div class="card modal" id='annul_demande'><!--Demande d'annulation-->
                <div class="card-header" style='width: 26% !important;text-align:center !important;position: relative;top: 56px;'><h3 style='font-size:13px'>Demande d'annulation</h3></div>
                <div class="card-body">
                <div>
                    <div class="modal-content" style='height: 158px !important;width: 27% !important;text-align:center !important'>
                            <span class="close" style='position: relative;left: 155px;top: -27px;'>&times;</span>
                            <p>Contrat déjà annulé.</p>                       
                        </div>
                    </div>
                </div>
            </div><!--Demande d'annulation-->

            <div class="card modal" id='annul_modal'><!--Annulation déjà effectuée-->
                <div class="card-header" style='width: 26% !important;text-align:center !important;position: relative;top: 56px;'><h3 style='font-size:13px'>Demande d'annulation</h3></div>
                <div class="card-body">
                <div>
                    <div class="modal-content" style='height: 158px !important;width: 27% !important;text-align:center !important'>
                            <span class="close" style='position: relative;left: 155px;top: -27px;'>&times;</span>
                            <form method="POST" action="../../controller/admin/index.php">
                                <input type="text" name='numero_police' id='pol_num'>
                                <div style="text-align: center;margin: 0 auto;">
                                    <input  name="action"  type="submit" value="Annuler Police" class="btn btn-primary btn-md annulation-validate" id='' style='margin-top:6px !important'>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--Annulation déjà effectuée-->

            <div class="card modal" id='folder_modal'><!--Dossier d'annulation-->
                <div class="card-header" style='width: 26% !important;text-align:center !important;position: relative;top: 56px;'><h3 style='font-size:13px'>Demande d'annulation</h3></div>
                <div class="card-body">
                <div>
                    <div class="modal-content" style='height: 158px !important;width: 27% !important;text-align:center !important'>
                            <span class="close" style='position: relative;left: 155px;top: -27px;'>&times;</span>
                            <form method="POST" action="../../controller/admin/index.php">
                                <input type="text" name='numero_police' id='pol_folder'>
                                <div style="text-align: center;margin: 0 auto;">
                                    <input  name="action"  type="submit" value="Generer Demande" class="btn btn-primary btn-md annulation-validate" id='' style='margin-top:6px !important'>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--Dossier d'annulation-->
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
            $('#annulationsData').DataTable();
            $("#annulationsData_filter").find('input').focus()
        } );

        $('.cp-btn').on('click', function(){
            var contrat = $(this).val()
            $('#folder_modal').fadeIn();
            $('#pol_folder').val(contrat)
        })

        $(document).find('#annulationsData tr').each(function(){
            var etat       = $(this).find("td").eq(5).html(); 
            var delete_btn = $(this).find("td").eq(9)
            delete_btn.on('click',function(){
                if(etat=='Annulé'){
                    $('#annul_demande').fadeIn();
                }else if(etat=='A annuler'){
                    var police= $(this).find('.delete-btn').val()
                    $('#pol_num').val(police)
                    $('#annul_modal').fadeIn()
                }
            })
        })
    </script>
      <script>
        $('.close').on('click',function(){
            $('#annul_demande,#annul_modal,#folder_modal').fadeOut()
        })
    </script>


    
    </body>
</html>