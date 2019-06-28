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
            margin: 156px 58px 30px 27px
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

          <h1 class="title-top">DEMANDE D'ANNULATION</h1>
          <hr>

          <div class="container" style='margin:0 !important;    margin: 0 !important;position: relative;top: -83px;'>
            <div class="row" style='padding-bottom: 10px;'>Date de la demande :</div>
            <div class="row" style='padding-bottom: 10px;'>Service :</div>
            <div class="row">Demandeur :</div>
          </div>

            <table id="demandeData" class="table dataTab table-bordered" style="width:100%">
               
                <tbody>                  
                 <?php
                 while($row=$annulation->fetch()){
                echo '<tr>
                   <td>NUMERO DE POLICE</td>
                   <td>'.$row[1].'</td>
                </tr>
                <tr>
                    <td>INTERMEDIAIRE</td>
                   <td>'.$row[2].'</td>
                </tr>
                <tr>
                    <td>AVENANT</td>
                   <td>'.$row[0].'</td>
                </tr>
                <tr>
                    <td>EFFET</td>
                   <td>'.$row[5].'</td>
                </tr>
                <tr>
                    <td>ECHEANCE</td>
                   <td>'.$row[5].'</td>
                </tr>
                <tr>
                    <td>PART COASSURANCE</td>
                   <td>'.$row[0].'</td>
                </tr>
                <tr>
                    <td>ASSURE</td>
                   <td>'.$row[0].'</td>
                </tr>
                <tr>
                    <td>PRIME NETTE</td>
                   <td>'.$row[0].'</td>
                </tr>
                <tr>
                    <td>APERITEUR</td>
                   <td>'.$row[0].'</td>
                </tr>
                <tr>
                    <td>RAISON DE LA DEMANDE</td>
                   <td>'.$row[3].'</td>
                </tr>';
                 }
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

    <script>
      /*  $(document).ready(function(){
            $('#demandeData tr').each(function(){
                $(this).find("td").eq(2).css('text-align','center !important'); 
            })
        })*/
    </script>
</body>
</html>