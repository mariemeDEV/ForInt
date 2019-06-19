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
            left:18px
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
        #usersData_filter{
            position: relative !important;
            left: 2em !important;
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
        /* .pagination li{
            padding:0 !important
        } */
       
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
          <h1 class="ajout-title">Consultation dotations</h1>
          <hr>
            <table id="usersData" class="table dataTab table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Numéro attestation</th>
                        <th>Type attestation</th>
                        <th>Nom intermediaire</th>
                        <th>Prénom intermédiaire</th>
                        <th>Téléphone intérmédiaire</th>
                        <th>Etat actuel</th>
                        <th>Etat sortie</th>
                        <!--th>Opération</th-->
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($row=$attestations->fetch()){
                        $type_attestation = $row[1];
                        $etat_actuel      = $row[5];
                        $etat_sortie      = $row[6];
                        echo'
                        <tr>
                            <td>'.$row[0].'</td>';
                            if($type_attestation=="verte"){
                                echo '<td style="background:#77bb41;">'.$row[1].'</td>';
                            }else if($type_attestation=="jaune"){
                                echo '<td style="background:#f5ca3e">'.$row[1].'</td>';
                            }else if($type_attestation=="cedeao"){
                                echo '<td style="background:#d3d3ec">'.$row[1].'</td>';
                            }
                            echo '<td>'.$row[2].'</td>';
                            echo '<td>'.$row[3].'</td>';
                            if($etat_actuel=="attribue"){
                                echo '<td style="background:#e4a6a0;">'.$row[5].'</td>';
                            }else if($etat_actuel=="libre"){
                                echo '<td style="background:#99c5e2;">'.$row[5].'</td>';
                            }
                             echo '<td>'.$row[4].'</td>';
                             if($etat_sortie=="restante"){
                                echo '<td style="background:#de5143;text-transform:uppercase;font-weight:bold;text-align:center !important;line-height: 0.5rem">non utilisée</td>';
                             }else if($etat_sortie=="vendue"){
                                echo '<td style="background:#acd68b;text-transform:uppercase;font-weight:bold;text-align:center !important;line-height:0.5rem">utilisée</td>';
                             }
                        echo '</tr>';
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

    <script>
        $(document).ready(function() {
            $('#usersData').DataTable();
            $("#usersData_filter").find('input').focus()
        } );
    </script>
    <script>
        // function checkValue(checkboxes,limit){
        //     for(var i=0;i<limit;i++){
        //         console.log(checkboxes[i]); 
        //         $(checkboxes[i]).prop('checked', true);
        //     }
        // }
        // $(document).ready(function(){

        //     $('#attestations-vertes,#attestations-jaunes').change(function(){
        //         var vertes       = parseInt($('#attestations-vertes').val());
        //         var jaunes       = parseInt($('#attestations-jaunes').val());
        //         var attestations = vertes+jaunes;
        //         $('#attestations-cedeao').val(attestations);
        //         var cedeaoCheckboxes    = $('#dotations').find('.checkbox-cedeao');
        //         checkValue(cedeaoCheckboxes,attestations);
        //     })
            
        //     $('#attestations-vertes').change(function(){
        //         var vertes          = parseInt($('#attestations-vertes').val());
        //         var greenCheckboxes = $('#dotations').find('.checkbox-vertes');
        //         checkValue(greenCheckboxes,vertes);
        //     })

        //     $('#attestations-jaunes').change(function(){
        //         var jaunes           = parseInt($('#attestations-jaunes').val());
        //         var yellowCheckboxes = $('#dotations').find('.checkbox-jaunes');
        //         checkValue(yellowCheckboxes,jaunes);
        //     })
        // })
    </script>
    <!--script>
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
    </script-->
    </body>
</html>