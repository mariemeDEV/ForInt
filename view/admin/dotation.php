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
            top: 24px;
            left: 15px;
            width: 41%;
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 120px;
            left: 138px
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
            left: -772px !important;
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
            content:'/';
            padding-left:40px;
            color: #f7bb3d !important

        }
        ul li a{
            text-decoration:none !important;
            color: #f7bb3d !important
        }
        .form-row{
            position: relative;
            top: 195px;
        }
        .dotationForm{
            position: relative;
            top: -115px;
            left: 340px;
            margin: auto !important;
        }
        .dotationForm select{
            border: 1px solid #ffffff !important;
            border-bottom: 1px solid #062944 !important;
            width: 136px !important;
            padding-left: 55px !important
        }
        .validDotation{
            background: #062843;
            padding: 5px;
            position: relative;
            top: 7px;
            left:-30px;
            color:#f7bb3d !important
        }
        .validDotation:hover{
            background:#062843 !important;
            color:#f7bb3d !important;
            opacity:0.5
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
            <div class="row form-row">
            <form class="form-inline dotationForm">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type d'attestation</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <?php
                        while($row=$types->fetch())
                            {
                                echo"<option>$row[1]</option>";
                            }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Du</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Au</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 validDotation">VALIDER</button>
            </form>
            </div>
          <h1 class="ajout-title">Dotation des attestations</h1>
          <hr>
            <table id="usersData" class="table dataTab table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>E-mail</th>
                        <th>Type d'attestation</th>
                        <th>Du</th>
                        <th>Au</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                    </tr>
                    <tr>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                    </tr>
                    <tr>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                    </tr>
                    <tr>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                        <td>tyu</td>
                    </tr>
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