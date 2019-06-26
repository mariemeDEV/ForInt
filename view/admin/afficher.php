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
            left: 38px;
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 134px;
            left: 40px;
        }
        .dataTab{
            position: relative;
            top: -47px;

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
            left: 448px !important;
            top: -112px;
            width: 224px;
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
            left: 18em !important;
            z-index: 3;
        }
        .container ul li{
            padding: 1em;
            line-height: 39px;
            font-weight: bold;
        }
        /* .dataTables_paginate{
            background: green !important;
            width: 219px !important;
            height: 36px !important;
            position: relative !important;
            left: -132px !important; 
        }
        .dataTables_paginate ul{
            position: absolute !important;
            left: -102px;
            top: -7px;
        }
        .dataTables_paginate ul li{
            left: 165px;
            top: 6px;
            background: yellow;
            position: absolute;
        } */
      


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
        ul li span{
            position: absolute;
            left: 315px;
            background: #f9d281 !important;
            color: #062944 !important;
        }
     
    </style>

    </head>

    <body onchange="CalculeBC()">
        <!--header-->
        <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">
            <?php include "header.php";?>
        </div>
        <!--header-->
        <h1 class="ajout-title">Activités de l'intérmédiaire</h1>
        <hr>
        <!--container-->
        <div class="container">
            <div class="row">
                <div class="col col-lg-8" style="position: relative;left:35px;top:123px !important">
                    <?php              
                        while($row=$intermediaireData->fetch()){
                        echo '
                            <ul class="list-group intermediaire_data" style="width: 110% !important">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Contrats validés
                                <span class="badge badge-primary badge-pill">'.$row[8].'</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Devis
                                <span class="badge badge-primary badge-pill">'.$row[8].'</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Attestations vertes
                                <span class="badge badge-primary badge-pill">'.$row[8].'</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Attestations jaunes
                                <span class="badge badge-primary badge-pill">'.$row[8].'</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Attestations cedeao
                                <span class="badge badge-primary badge-pill">'.$row[8].'</span>
                            </li>
                        </ul>';
                        }
                    ?>
                </div>
                <div class="col col-lg-4" style="position: relative;left: -54em;top:130px;">
                    <table id="usersData" class="table dataTab table-striped table-bordered" style="width:100%;margin-top:-63px !important">
                        <thead>
                            <tr>
                                <th>Date contrat</th>
                                <th>Code assuré</th>
                                <th>Prénom assuré</th>
                                <th>Nom assuré</th>
                                <th>Adresse assuré</th>
                                <th>Téléphone assuré</th>
                                <th>Prime nette</th>
                                <th>Prime totale</th>
                                <th>Vlidation contrat</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=$resultat->fetch()){
                            $datePolice = date("d-m-Y", strtotime($row[0]));
                            echo'
                            <tr>
                                <td>'.$datePolice.'</td>
                                <td>'.$row[2].'</td>
                                <td>'.$row[4].'</td>
                                <td>'.$row[3].'</td>
                                <td>'.$row[5].'</td>
                                <td>'.$row[6].'</td>
                                <td>'.$row[7].'</td>
                                <td>'.$row[8].'</td>';
                            if($row[1]==1){
                                echo '<td style="background:#9bec9b;text-align:center;font-weight:bold">Validé</td>';
                            }else if($row[1]==0){
                                echo '<td style="background:#e66355;text-align:center;font-weight:bold">Non validé</td>';
                            }
                        echo'</tr>';
                        }
                        ?>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
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
    </body>
</html>