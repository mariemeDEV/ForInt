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
            left: 15px
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 134px;
            left: 140px;
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
/*Footer*/
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
            left:-440px;
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
        .card-header{
            background: #062944;
            width: 582px;
            margin: auto;
            position: relative;
            top: 74px;
            z-index: 1;
        }
        .card-header h3{
            color: #f7bb3d;
        }
        .close{
            position: relative;
            top: -20px;
            z-index: 1;
            left: 526px;
            color: #f7bb3d;
        }
        .modal{
            width:99% !important
        }
        .modal-content{
            height: 381px !important;
            width: 45% !important
        }
        .btn-lg{
            background: #062944;
            color: #f7bb3d !important;
            position: relative;
            top: 50px;
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
        <div class="card modal" id='intermediaire_modal'><!--extraction modal-->
            <div class="card-header"><h3>Extraction production</h3></div>
            <div class="card-body">
            <div>
                <div class="modal-content">
                        <!--h3 style='color: #062944;font-weight:bold;text-align:center !important'>Extraction production</h3-->
                        <span class="close">&times;</span>
                        <form method="post" action="../../controller/formulaire/index.php" style="margin-top: -28px;">
                            <div class="form-group inline" style="width: 65%;margin:auto;margin-top:49px;    border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;" >
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Début</label>
                                <input type ="date"  name="debut" id="mec" required style="">
                            </div>
                            <div class="form-group" style="width: 65%;margin:auto;margin-top:28px;border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;">
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Fin</label>
                                <input type ="date"  name="fin" id="mec" required style="">
                            </div>
                            <div style="text-align: center;margin: 0 auto;">
                                <input type="submit" name="action" value="EXTRAIRE" class="btn btn-primary btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--extraction production-->
            <ul>
                <li ><a id="myBtn">Éxtraire production</a></li>
            </ul>
          <h1 class="ajout-title">Géstion des contrats</h1>
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
    </body>
</html>