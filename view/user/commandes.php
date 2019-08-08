
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>For-Int</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="../../view/style/datatables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../view/style/style_aff.css">

    <style>
        .top-title{
            position: absolute;
            top: 15px;
            left: 87px;
            color:#062945
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 65px;
            left: 86px;
        }
        .command-card{
            width: 40%;
            margin: auto;
            margin-top: 62px;
            height: 433px;
        }
        .command-header{
            background:#062945;
            color: #f7bb3d;
        }
        .command-form{
            padding: 5%;
        }
        input{
            border: 1px solid #ffffff !important;
            border-bottom: 1px solid #062944 !important;
        }
        label{
            margin-bottom: 3px;
        }
        .validation-row{
            width: 21%;
            margin: auto;
            margin-top: -4px;
        }
        .btn-primary{
            background: #062944 !important;
            color: #e4b939 !important;
        }
        input{
            margin-bottom: 10px !important
        }
        .validDotation{
            padding: 12px;
            width: 107px;
            border-radius:15px !important
        }
        .commande{
            position: relative;
            top: -47px;
            z-index: 3;
            left: 89px;
            background: #f7ba00;
            width: 13%;
            padding: 7px;
            color: #062945 !important;
            font-size: 14px;
            text-align: center;
            cursor: pointer;
            border-radius:15px !important
        }
        .close-command{
            position: relative;
            left: -426px;
            top: 59px;
            z-index: 3;
            color: #f7ba00;
            cursor: pointer;
        }
        .tab-container{
            position: relative;
            top: 21px;
        }
        .commandes-table{
            font-size: 14px;
            width: 69% !important;
            margin: auto !important;
            text-align: center;
        }
        #commandes-tab_info{
            display:none !important
        }
        #commandes-tab_filter{
            position: relative;
            top: -30px;
            width: 70% !important;
            left: -2px;
        }
        .paginate_button{
            padding: 5 !important;
            border: none !important;
            font-size: 12px !important;
            /*background: #062945 !important;*/
            color: #f7ba00 !important;
        }
        #commandes-tab_paginate{
            margin-right:155px !important
        }
       
        th{
            width: 400px;
            padding: 15px;
            background: #f9d281;
            color: #062945;
            font-weight: bold;
        }
        .dataBody{
            font-size: 12px !important
        }
    </style>
    </head>
    <body ♥ id="acceuil">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php include "header.php"; ?>
        <a class='commande' id='att-commande'>Passer une commande</a>
        <main class="mdl-layout__content">
            <h1 class='top-title'>Consultation des attestations</h1>
            <hr></hr>
            <div class="modal" id="commandModal">
            <span class="close close-command" id="close_modal">&times;</span>
                <div class="card command-card"><!-- Form modal-->
                    <div class="card-header command-header"><p>Formulaire de commande<p></div>
                    <div class="card-body">
                        <div class="form command-form">
                            <form method="post" action="../../controller/formulaire/index.php">
                            <input type="number" style='display:none !important' value=<?php echo("'".$mat."'")?>>
                            <div class="row md-12">
                                <div class="col md-4">
                                    <div class="form-group" style='position: relative;top: 41px;left: 22px;'>
                                        <input type="checkbox" class="form-check-input" id="check1" name='attesta_jaune'>
                                        <label class="form-check-label" for="exampleCheck1">Attestation(s) Jaune(s)</label>
                                    </div>
                                </div>
                                <div class="col md-4">
                                    <div class="form-group">
                                        <label for="matricule">nombre d'attestations</label>&nbsp&nbsp<span style='color:red'>*</span>
                                        <input type="number" placeholder="0" min="1" name='nj' id='number_j'>
                                    </div>
                                </div>
                            </div>
                            <div class="row md-12">
                                <div class="col md-4">
                                    <div class="form-group" style='position: relative;top: 41px;left: 22px;'>
                                        <input type="checkbox" class="form-check-input" id="check2"  name='attesta_verte'>
                                        <label class="form-check-label" for="exampleCheck1">Attestation(s) Verte(s)</label>
                                    </div>
                                </div>
                                <div class="col md-4">
                                    <div class="form-group">
                                        <label for="matricule">nombre d'attestations</label>&nbsp&nbsp<span style='color:red'>*</span>
                                        <input type="number" placeholder="0" min="1" name="nv" id='number_v'>
                                    </div>
                                </div>
                            </div>
                            <div class="row md-12">
                                <div class="col md-4">
                                    <div class="form-group" style='position: relative;top: 41px;left: 22px;'>
                                        <input type="checkbox" class="form-check-input" id="check3" name='attesta_cedeao'>
                                        <label class="form-check-label" for="exampleCheck1">Attestation(s) Cedeao</label>
                                    </div>
                                </div>
                                <div class="col md-4">
                                    <div class="form-group">
                                        <label for="matricule">nombre d'attestation</label>&nbsp&nbsp<span style='color:red'>*</span>
                                        <input type="number" placeholder="0" min="1" name='nc' id='number_c'>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row validation-row">
                                <button class="btn btn-primary mb-2 validDotation" name="action" value="valider_commande">VALIDER</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--Form modal-->
            <div class="container tab-container">
            <table id="commandes-tab" class="table table-bordered table-stripted commandes-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Numéro attestation</th>
                        <th>Type attestation</th>
                        <th>Etat actuel</th>
                    </tr>
                </thead>
                <tbody class='dataBody'>
                    <?php
                        $cp=0;
                        while($row=$attestations->fetch()){
                            $cp+=1;
                            $type_attestation = $row[1];
                            $etat_sortie      = $row[2];
                            echo'
                            <tr>
                                <td>'.$cp.'</td>
                                <td>'.$row[0].'</td>';
                                if($type_attestation=="1"){
                                    echo '<td style="background:#99dc65;">Verte</td>';
                                }else if($type_attestation=="2"){
                                    echo '<td style="background:#fff6dd">Jaune</td>';
                                }else if($type_attestation=="3"){
                                    echo '<td style="background:#d3d3ec">cedeao</td>';
                                }
                                if($etat_sortie=="vendue"){
                                    echo '<td style="background:#e4a6a0;">UTILISEE</td>';
                                }else if($etat_sortie=="restante"){
                                    echo '<td style="background:#dee9f1;">NON UTILISEE</td>';
                                }
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            </div>
         
        </main>
    </div>

    <script src="../../view/js/material.min.js"></script>
    <script src="../../view/js/jquery.min.js"></script>
    <script src="../../view/js/datatables.min.js"></script>
    <script src="../../view/js/jquery-ui.min.js"></script>
    <script src="../../view/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#number_j').prop('disabled',true)
            $('#number_v').prop('disabled',true)

            $('#check1').click(function(){
                if($(this).is(":checked")){
                    $('#number_j').prop('disabled',false)
                }else{
                    $('#number_j').prop('disabled',true)
                }
            })
            $('#check2').click(function(){
                if($(this).is(":checked")){
                    $('#number_v').prop('disabled',false)
                }else{
                    $('#number_v').prop('disabled',true)
                }
            })
                $(this).click(function(){
                if($('#check3').is(":checked")){
                    $('#number_c').prop('disabled',false)
                }else{
                    $('#number_c').prop('disabled',true)
                }
            })
        })
    </script>
    <script>
        $('#att-commande').on('click',function(){
            $('#commandModal').fadeIn(1000)
        })
        $('.close').on('click',function(){
            $('#commandModal').fadeOut(1000)
        })
        $(document).ready(function(){
            $('#commandes-tab').DataTable();
        })
    </script>

    </body>

</html>