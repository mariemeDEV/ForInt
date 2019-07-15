<!DOCTYPE html>
<html lang="en">
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
            top: 90px;
            left: 135px;
        }
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute !important;
            top: 134px !important;
            left: 138px !important
        }
        .validation{
            cursor: pointer;
            color: #f7ba00 !important;
            background: #062945;
            padding: 7px;
        }
        #commandesTab{
            font-size: 12px;
            color: #212529;
        }
        th{
            background:#f7ba0085;
            font-weight:bold
        }

    </style>
</head>
<body>
   <!--header-->
        <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">
            <?php include "header.php";?>
        </div>
    <!--header-->
    <h1 class="ajout-title">Géstion des commandes</h1>
    <hr>
    <div class="container tab-container">
            <table id="commandesTab" class="table table-bordered table-stripted commandes-table">
                <thead>
                    <tr>
                        <th>Id commande</th>
                        <th>Date commande</th>
                        <th>intermédiaire</th>
                        <th>nombre att.vertes</th>
                        <th>nombre att.jaunes</th>
                        <th>nombre att.cedeao</th>
                        <th>etat commande</th>
                        <th>Générer fiche de commande</th>

                        <!--th>Générer demande</th>
                        <th>Valider</th>
                        <th>Annuler</th-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=$commandes->fetch()){
                            echo"
                            <tr>";
                            echo "<td>".$row[0]."</td>";
                            echo "<td>".$row[1]."</td>";
                            echo "<td>".$row[2]."</td>";
                            echo "<td>".$row[3]."</td>";
                            echo "<td>".$row[4]."</td>";
                            echo "<td>".$row[5]."</td>";
                            echo "<td>".$row[6]."</td>";
                            echo
                            "<td>
                                <button style=\"border:none;background:#ffffff\" class=\"getFiche\" value='$row[0]'><i class=\"material-icons\" style=\"color:#b71a23 !important;margin-left:21px;cursor:pointer\" id=\"delete-contrat\">folder</i></button>
                            </td>";
                           // echo "<td><button style=\"border:none;background:#ffffff\" class=\"cp-btn\" value='$row[0]'><i class=\"material-icons\" style=\"color:#b71a23 !important;margin-left:21px;cursor:pointer\">folder</i></button></td>";
                           // echo "<td><a  href='#' class=\"validation\">Valider</td>";
                           // echo "<td><a href='./?action=delete_demandet&demande=$row[0]' style=\"border:none;background:#ffffff\"><i class=\"material-icons icon\" style=\"color:#b71a23 !important;margin-left:21px;cursor:pointer\" id=\"delete-demande\">delete</i></a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="card modal" id='demande_modal'><!--Demande-->
                <div class="card-header" style='width: 26% !important;text-align:center !important;position: relative;top: 56px;'><h3 style='font-size:13px'>Demande d'annulation</h3></div>
                <div class="card-body">
                <div>
                    <div class="modal-content" style='height: 158px !important;width: 27% !important;text-align:center !important'>
                            <span class="close" style='position: relative;left: 155px;top: -27px;'>&times;</span>
                            <form method="POST" action="../../controller/admin/index.php">
                                <input type="text" name='numero_pol' id='pol_folder'>
                                <div style="text-align: center;margin: 0 auto;">
                                    <input  name="action"  type="submit" value="Fiche commande" class="btn btn-primary btn-md annulation-validate" id='' style='margin-top:6px !important'>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--Demande-->
            </div>
            
    <script src="../../view/js/material.min.js"></script>
    <script src="../../view/js/jquery.min.js"></script>
    <script src="../../view/js/datatables.min.js"></script>
    <script src="../../view/js/jquery-ui.min.js"></script>
    <script src="../../view/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#commandesTab').DataTable()
        })

        $(document).find('#commandesTab tr').each(function(){
            var ficheBtn = $(this).find('td').eq(7)
            ficheBtn.on('click', function(){
                alert('ok')
            })
        })
    </script>

  
</body>
</html>