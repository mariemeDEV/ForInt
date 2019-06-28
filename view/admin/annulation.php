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
            top: 96px;
            left: 38px;
            width: 41%;
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 137px;
            left: 162px;
        }
        .dataTab{
            position: relative;
            top:9px;
            left:-58px
        }
        .paging_simple_numbers{
            position: relative !important;
            top: 81px !important
        }
        .pagination{
            position: absolute !important;
            left: -91em !important;
            top: -72px !important;
            padding:7px !important
            /* background: #062843; */
            /* display:none !important */
        }
        .pagination li{
            height:34px !important
        }
        .pagination li a{
            padding: 1px !important;
            background: #062944 !important;
            color: #f7ba00 !important
        }
        #annulationsData_filter{
            position: relative !important;
            left: 2em !important;
            top: 6px;
        }
        #annulationsData_filter .form-control-sm{
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
        ul > li:not(:last-child):after{
            /* content:'/'; */
            padding-left:40px;
            color: #f7bb3d !important
        }
        ul li a{
            text-decoration:none !important;
            color: #f7bb3d !important
        }
        #usersData_paginate ul{
            background: #062843 !important;
            margin-top: 13px;
            margin-left: 844px;
        }
        #usersData_paginate ul li{
            padding: 6px
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
          <h1 class="ajout-title">Consultation annulations</h1>
          <hr>
            <table id="annulationsData" class="table dataTab table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Numéro policce</th>
                        <th>Matricule intermediaire</th>
                        <th>Prénom intermediaire et nom</th>
                        <th>Téléphone intérmédiaire</th>
                        <th>Date annulation</th>
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
                        <td>'.$row[5].'</td>';
                        if($row[6]=='A annuler'){
                            echo '<td style="background:#ff000087">'.$row[6].'</td>';
                        }else if($row[6]=='Annulé'){
                            echo '<td style="background:#ffa50085">'.$row[6].'</td>';
                        }
                        echo '<td>'.$row[7].'</td>
                        <td>'.$row[8].'</td>
                        <td>'.$row[2].$row[3].'</td>';
                        echo
                        "<td>
                            <button style=\"border:none;background:#ffffff\" class=\"delete-btn\" value='$row[0]'><i class=\"material-icons\" style=\"color:#b71a23 !important;margin-left:21px;cursor:pointer\" id=\"delete-contrat\">delete</i></button>
                        </td>
                        <td>
                            <button style=\"border:none;background:#ffffff\" class=\"cp-btn\" value='$row[0]'><i class=\"material-icons\" style=\"color:#b71a23 !important;margin-left:21px;cursor:pointer\" id=\"dossier\">folder</i></button>
                        </td>
                    </tr>";
                    }
                ?>
                </tbody>
                </tfoot>                
                <tfoot>
            </table>
            
            <div class="card modal" id='annul_demande'><!--Demande d'annulation-->
                <div class="card-header" style='width: 26% !important;text-align:center !important;position: relative;top: 56px;'><h3 style='font-size:13px'>Demande d'annulation</h3></div>
                <div class="card-body">
                <div>
                    <div class="modal-content" style='height: 158px !important;width: 27% !important;text-align:center !important'>
                            <span class="close" style='position: relative;left: 155px;top: -27px;'>&times;</span>
                            <p>Vous avez déja soumis une demande pour l'annulation de ce contrat <br>Vous pouvez appeler au 33 825 20 14 pour connaitre l'etat d'avancement de votre demande.</p>                       
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

    <script>
        $(document).ready(function() {
            $('#annulationsData').DataTable();
            $("#annulationsData_filter").find('input').focus()
        } );

        var cell1 =  $("#annulationsData tr").find("td").eq(9)
        cell1.on('click',function(){
               var police= $(this).find('.delete-btn').val()
               $('#pol_num').val(police)
        })

        $('.cp-btn').on('click', function(){
            var contrat = $(this).val()
            $('#folder_modal').fadeIn();
            $('#pol_folder').val(contrat)
        })

        $('#annulationsData tr').each(function(){
            var etat       = $(this).find("td").eq(5).html(); 
            var delete_btn = $(this).find("td").eq(9)
            delete_btn.on('click',function(){
                if(etat=='Annulé'){
                    $('#annul_demande').fadeIn();
                }else if(etat=='A annuler'){
                    $('#annul_modal').fadeIn();
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