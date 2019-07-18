<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Condition particuiére</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <link href="../../view/style/form_v3.css" rel="stylesheet">
    <link href="../../view/style/css_etats3.css" rel="stylesheet">
    <style>
        @page {
            size: auto;   
            margin: 0;  
        }
        #Image2{
            height:126% !important
        }
        .container{
            margin: 297px 58px 30px 27px
        }
        .table td{
            padding:10px !important;
            border: 1px solid black;
        }
        .title-top{
            position: relative;
            top: -105px;
            left: 285px;
        }
        hr{
            position: relative;
            top: -118px;
            width: 47%;
            left: 20px;
        }
        .img-content{
            position: relative;
            top: -121px;
        }
    </style>
</head>

<body onload="window.print()">
      <!--container-->
      <div class="container">
        <div class="img-content">
            <img src="../../img/images/LogoSaham1.jpg" style="width:13% !important">
        </div>

          <h1 class="title-top">FICHE DE COMMANDE ATTESTATION</h1>
          <hr>

          <div class="container" style='margin:0 !important;    margin: 0 !important;position: relative;top: -83px;'>
            <div class="row" style='padding-bottom: 10px;'>Date de la demande : <?php echo $date_commande; ?></div>
            <div class="row" style='padding-bottom: 10px;'>Service : <?php echo 'Automobile'; ?></div>
            <div class="row">Demandeur : <?php echo $intermediaire ; ?></div>
          </div>

            <table id="demandeData" class="table dataTab table-bordered" style="width:100%">
               
                <tbody>                  
                 <?php
                echo '<tr>
                   <td>ID COMMANDE</td>
                   <td>'.$id.'</td>
                </tr>
                <tr>
                    <td>INTERMEDIAIRE</td>
                   <td>'.$intermediaire.'</td>
                </tr>
                <tr>
                    <td>EFFET</td>
                   <td>'.$date_commande .'</td>
                </tr>
                <tr>
                    <td>NOMBRE D\'ATTESTATIONS VERTES</td>
                   <td>'.$n_vertes.'</td>
                </tr>
                <tr>
                    <td>NOMBRE D\'ATTESTATIONS JAUNES</td>
                   <td>'.$n_jaunes.'</td>
                </tr>
                <tr>
                    <td>NOMBRE D\'ATTESTATIONS CEDEAO</td>
                   <td>'.$n_cedeao.'</td>
                </tr>';
                ?>
                </tbody>
                </tfoot>                
                <tfoot>
            </table>
            <div class="row">
                <div class="col-md-6">Signature du demandeur</div>
                <div class="col-md-6" style="position: relative;left: 57em;top: -10px;">Signature du supérieur hiérarchique</div>
            </div>
            </div>
            

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js"></script>
</body>
</html>