<?php
// Démarrage ou restauration de la session
//session_start();
//echo $_SESSION['username'];
//echo $_SESSION['password'];
//echo $_SESSION['matricule'];
// Démarrage ou restauration de la session
//echo $_SESSION['username'];
//echo $_SESSION['password'];
//echo $_SESSION['matricule'];

if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
    header ('location: ./');

}
if(time()- $_SESSION['timestamp']>600)
{
    echo"<script>alert('15 Minutes over!');</script>";
    unset($_SESSION['username'],$_SESSION['password'],$_SESSION['matricule']);
    header ('location: ./');
    exit;
}
else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saham Assurance SN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../../view/style/style_2.css" rel="stylesheet">
    <style>
        .modal{
            margin-top:105px
        }
        input{
            border: 0px solid #ffffff !important;
            border-bottom:1px solid green !important;
            width: 233px !important;
            margin: auto !important
        }
    </style>
</head>
<body ♥ id="acceuil">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php include "header.php"; ?>
    <main class="mdl-layout__content">
        <div class="mdl-content" style="padding-top: 50px;padding-left:5%">
            <div class="mdl-grid">
                <?php
                 if(isset($_GET['err']))
                 {
                    if($_GET['err']=="1np0"){
                echo "
                    <div class=\"mdl-cell mdl-cell--12-col\" id='errorMSG' >
                    <div class=\"col-lg-8\" style='padding-left: 25%'>
                        <div class=\"alert alert-danger\" role=\"alert\" >
                            <h6>Les mots de passes ne sont pas conformes</h6>
                        </div>
                    </div>
                    </div>";
                }
                     if($_GET['err']=="2np0")
                     {
                         echo "
                                 <div class=\"mdl-cell mdl-cell--12-col\" id='errorMSG' >
                                    <div class=\"col-lg-8\" style='padding-left: 25%'>
                                        <div class=\"alert alert-danger\" role=\"alert\" >
                                            <h6>veuillez prendre un autre mot de passe different de 'saham'</h6>
                                        </div>
                                    </div>
                                 </div>
                            ";
                     }
                     if($_GET['err']=="1np1")
                     {
                         echo "
                                 <div class=\"mdl-cell mdl-cell--12-col\" id='errorMSG' >
                                    <div class=\"col-lg-8\" style='padding-left: 25%'>
                                        <div class=\"alert alert-success\" role=\"alert\" >
                                            <h6>Changement effectué avec succes!</h6>
                                        </div>
                                    </div>
                                 </div>
                            ";
                     }
                 }
                ?>
                <div class="mdl-cell mdl-cell--8-col" style="margin: 0 auto">
                    <div class="demo-card-square mdl-card mdl-shadow--2dp account-card" id="compteM" style="width: 100%;height: 100%;background: #062945 !important;color: #f7ba00 !important;">
                        <div class="mdl-cell mdl-cell--12-col">
                            <div class="col-lg-8" style="padding-top: 25px">
                                <table class="table" style="font-size: 18px">
                                    <tbody>
                                    <tr style="font-size: 14px;">
                                        <td>Matricule</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right"><?php echo $matricule ?></td>
                                    </tr>
                                    <tr style="font-size: 14px;">
                                        <td>Prenom et nom</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right"><?php echo $nom ?></td>
                                    </tr>
                                    <tr style="font-size: 14px;">
                                        <td>Adresse</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right"><?php echo $adresse ?></td>
                                    </tr>
                                    <tr style="font-size: 14px;">
                                        <td>Telephone</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right"><?php echo $tel ?></td>
                                    </tr>
                                    <tr style="font-size: 14px;">
                                        <td>Nom d'utilisateur</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right"><?php echo $email ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="padding-left: 50%">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-lg passWord" data-toggle="modal" data-target="#myModal" style="background: #f7ba00; color: #062945 !important;padding: 5px; position: relative;top:-6px">
                                    Modifier Mot de passe
                                </button>
                            </div>
                            <!-- Accent-colored raised button with ripple -->
                        </div>  
                </div>

            </div>
        </div>
        <div class="mdl-cell mdl-cell--12-col" style="height: 180px;" >

        </div>
            <div class="mdl-content" style="width: 100%;height: 20px">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col"  >
                        <?php //include "footer.php"; ?>
                    </div>
                </div>
            </div>
    </main>
    <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                <form method="post" action="../../controller/intermediaire/index.php">
                        <div class="form-group"> <label for="Amdp">Ancien Mot de passe</label> <input type="password" class="form-control" name="Amdp" id="Amdp" placeholder="Saisir votre ancien mot de passe"> </div>
                        <div class="form-group"> <label for="Npwd">Nouveau Mot de passe</label> <input type="password" class="form-control" name="Npwd" id="Npwd" placeholder="Entrer le nouveau mot de passe"> </div>
                        <div class="form-group"> <label for="Cpwd">Confirmer Mot de passe</label> <input type="password" class="form-control" name="Cpwd" id="Cpwd" placeholder="Confirmer mot de passe"> </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button  class="btn btn-primary" type="submit" value="pmodif" name="action">Changer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>



<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    var test =  setTimeout(function()
    {
        document.getElementById('errorMSG').style.display = "none";
    },10000);
</script>
</body>

</html>