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
                <th>CODE POLICE</th>
                <th>DATE DE CRÉATION</th>
                <th>NUMÉRO ATTESTATION</th>
                <th>MATRICULE ASSURE</th>
                <th>MATRICULE INTERMÉDIAIRE</th>
                <th>NOM ASSURÉ</th>
                <th>PRÉNOM ASSURÉ</th>
                <th>IMMATRICULATION</th>
                <th>GARANTIES</th>
                <th>PRIME TOTALE</th>
                <th>CP</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row=$resultat->fetch()){
        echo
        "<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[10]</td>
            <td>$row[17]</td>
            <td>$row[15]</td>
            <td><a href='../../controller/admin/?action=lister&matricule=$row[4]&opli=$row[0]'<i class=\"material-icons\" style=\"color:#062944 !important\">print</i></a></td>
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