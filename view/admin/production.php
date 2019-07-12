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

<table id="productionTab" class="display" style="width:100%;font-size:12px">
        <thead>
            <tr>
            <th>NUMÉRO POLICE</th>
                <th>DATE DE CRÉATION</th>
                <th>NUMÉRO ATTESTATION</th>
                <th>NUMÉRO ATTESTATION CEDEAO</th>
                <th>NUMÉRO FACTURE</th>
                <th>MATRICULE INTERMÉDIAIRE</th>
                <th>NOM INTERMÉDIAIRE</th>
                <th>PRÉNOM INTERMÉDIAIRE</th>
                <th>NOM ASSURÉ</th>
                <th>PRÉNOM ASSURÉ</th>
                <th>NOM CONDUCTEUR</th>
                <th>PRÉNOM CONDUCTEUR</th>
                <th>DATE EFFET</th>
                <th>DATE ECHEANCE</th>
                <th>DATE EMISSION</th>
                <th>MARQUE VOITURE</th>
                <th>IMMATRICULATION</th>
                <th>GENRE</th>
                <th>DATE DE MISE EN CIRCULATION</th>
                <th>VALEUR VÉNALE</th>
                <th>VALEUR À NEUVE</th>
                <th>GARANTIES</th>
                <th>RÉCUCTION MAJORATION RC</th>
                <th>BONUS RC</th>
                <th>POURCENTAGE RC</th>
                <th>RÉDUCTION COMMERCIALE</th>
                <th>PRIME NETTE</th>
                <th>ACCESSOIRES</th>
                <th>TAXES</th>
                <th>FGA</th>
                <th>PRIME TOTALE</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row=$Resultat->fetch()){
        echo
        "<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[30]</td>                                               
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            <td>$row[8]</td>
            <td>$row[9]</td>
            <td>$row[10]</td>
            <td>$row[11]</td>
            <td>$row[13]</td>
            <td>$row[1]</td>
            <td>$row[15]</td>
            <td>$row[16]</td>
            <td>$row[17]</td>
            <td>$row[18]</td>
            <td>$row[19]</td>
            <td>$row[20]</td>
            <td>$row[21]</td>
            <td>$row[22]</td>
            <td>$row[23]</td>
            <td>$row[24]</td>
            <td>$row[25]</td>
            <td>$row[26]</td>
            <td>$row[27]</td>
            <td>$row[28]</td>
            <td>$row[29]</td>
            <td>$row[30]</td> 
        </tr>";
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
        $('#productionTab').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5',
            ]
        } );
    } );
</script>
</html>