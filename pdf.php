<?php
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['password'];
//echo $_SESSION['matricule'];
if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
    header ('location: http://localhost/saham_4');
}
ob_start();
require_once 'mapping/Police.php';
require_once 'model/PoliceDao.php';

$usdao=new PoliceDao();
// $us=new Police('','',$_SESSION['pdf_debt'],'','','',$_SESSION['matricule'],'','','','','','','');
// $ds=new Police('','',$_SESSION['pdf_fin'],'','','','','','','','','','','');
// $is=new Police('','','','','',$_SESSION['matricule'],'','','','','','','','');
$Resultat=$usdao->getAllProductByInt($_SESSION['matricule'],$_SESSION['pdf_debt'],$_SESSION['pdf_fin']);
?>
<page backtop="1%" backbottom="1%" backright="5%" backleft="1%" >

    <h1> Liste des Productions</h1>
    <table style="width: 100%;border: 2px black" border="1">
        <tr >
            <th style="width: 10%">Numero Police</th>
            <th style="width: 10%">Intermediaire</th>
            <th style="width: 10%">Date debut</th>
            <th style="width: 10%">Date echéance</th>
            <th style="width: 10%">Assure</th>
            <th style="width: 10%">Prime Nette</th>
            <th style="width: 10%">Accessoire</th>
            <th style="width: 10%">Taxe</th>
            <th style="width: 10%">Fond de garantie</th>
            <th style="width: 10%">Prime totale</th>
        </tr>
        <?php
        while ($row=$Resultat->fetch())
        {
        ?>
            <tr style="width: 100%;border: 2px black">
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[4]."/".$row[5]?></td>
                <td><?php echo $row[11]?></td>
                <td><?php echo $row[13]?></td>
                <td><?php echo $row[8]." ".$row[7]?></td>
                <td><?php echo $row[26] ?></td>
                <td><?php echo $row[27] ?></td>
                <td><?php echo $row[28] ?></td>
                <td><?php echo $row[29] ?></td>
                <td><?php echo $row[30] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</page>
<?php
ob_end_clean();
$content = ob_get_clean();
require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('p','A3','fr','true','UTF-8',1);
$html2pdf->writeHTML($content);
$html2pdf->output();

?>
