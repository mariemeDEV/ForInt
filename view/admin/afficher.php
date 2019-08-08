<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
     <link rel="stylesheet" hrref="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.css">
</head>
<body>
<style>
    .dt-button{
       color:#f7ba00;
       background-color:#062945 !important;
       border:none !important;
       margin-top:15px !important;
       padding:12px !important;
       width: 73px;
       cursor:pointer !important
    }
</style>

<table id="productionIntTab" class="display" style="width:100%;font-size:12px">
        <thead>
            <tr>
                <th>Numéro police</th>
                <th>Date contrat</th>
                <th>Attestation</th>
                <th>Code assuré</th>
                <th>Nom assuré</th>
                <th>Prénom assuré</th>
                <th>Téléphone assuré</th>
                <th>Adresse assuré</th>
                <th>Catégorie véhicule</th>
                <th>Immatriculation</th>
                <th>Date de mise en circulation</th>
                <th>Date d'effet contrat</th>
                <th>Date fin contrat</th>
                <th>Prime nette</th>
                <th>Prime totale</th>
                <th>Etat production</th>
                <th>Garantties</th>
                <th>Durée du contrat</th>
                <th>Pourcentage Bonus Commercial(%)</th>
                <th>Montant Bonus Commercial</th>
                <th>Pourcentage Reduction Commerciale(%)</th>
                <th>Montant Reduction Commerciale</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row=$resultat->fetch()){
                //$datePolice = date("d-m-Y", strtotime($row[0]));
                echo'
                <tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>
                    <td>'.$row[5].'</td>
                    <td>'.$row[6].'</td>
                    <td>'.$row[7].'</td>
                    <td>'.$row[8].'</td>
                    <td>'.$row[9].'</td>
                    <td>'.$row[10].'</td>
                    <td>'.$row[11].'</td>
                    <td>'.$row[12].'</td>
                    <td>'.$row[13].'</td>
                    <td>'.$row[14].'</td>
                    <td>'.$row[15].'</td>
                    <td>'.$row[16].'</td>
                    <td>'.$row[17].'</td>
                    <td>'.$row[18].'</td>
                    <td>'.$row[19].'</td>
                    <td>'.$row[20].'</td>
                    <td>'.$row[21].'</td>';
            echo'</tr>';
            }
        ?>
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#productionIntTab').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5',
            ]
        } );
    } );
</script>
</html>