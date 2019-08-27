
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>For-Int</title>

        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../view/style/style_aff.css">

    <style>
        .top-title{
            position: absolute;
            top: 15px;
            left: 87px;
            color:#062945
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 65px;
            left: 86px;
        }
        .command-card{
            width: 87%;
            margin-left: 6%;
            margin-top: 8%;
            height: 640px;
        }
        .command-header{
            background:#062945;
            color: #f7bb3d;
        }
        .command-form{
            padding: 5%;
        }
        input{
            border: 1px solid #ffffff !important;
            border-bottom: 1px solid #062944 !important;
        }
        label{
            margin-bottom: 3px;
        }
        .validation-row{
            width: 21%;
            margin: auto;
            margin-top: 49px;
        }
        .btn-primary{
            background: #062944 !important;
            color: #e4b939 !important;
        }
        .helps li{
            color:green !important
        }
        .helps{
            list-style:none !important;
            width: 28%;
            position: relative;
            right: -195px;
        }
        .helps li i{
            cursor:pointer !important
        }
        .ui-tabs{
            padding: 0;
            border: 1px solid #ffffff !important;
        }
        p{
            font-size: 12px;
        }
        .ui-state-active{
            background: #062944 !important;
            color: #f7bb3d !important;
        }
        .ui-tabs-anchor{
            font-size: 10px !important;
        }
        .ui-tabs-nav{
            background:#ffffff;
            border:1px solid #ffffff
        }
        .garanties-head th{
            font-size:12px !important
        }
        .garanties-body td{
            font-size:12px !important
        }
        .tab11 td{
            padding:6px !important
        }
        .packs-garanties{
            font-weight:bold;
            color:#3d753b;
        }
        .packs-garanties li{
            list-style-type:square !important
        }
        .p-title{
            text-decoration:underline
        }
        .tabs{
            height: 238px !important
        }
        .tabs-1,p{
            padding-left: 291px !important;
            position: relative;
            top: -170px;
        }
        .tab-img{
        width: 299px;
        height: 195px;
        position: relative;
        left: -20px;
        border: 1px solid #f7ba00;
        border-radius: 2%;
        }
   /*.whatIf{
            float: right;
            font-size: 10px;
            cursor: pointer;
        }
        .whatIf:hover{
            text-decoration:underline
        }*/
    </style>
    </head>
    <body ♥ id="acceuil">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php include "header.php"; ?>
        <main class="mdl-layout__content">
            <h1 class='top-title'>LES GARANTIES</h1>
            <p style="display: block;position: relative;top: 43px;left: 629px;color: green;font-weight: bold;font-size: 18px;">Numéro de l'assistance : <span class='blinking'>800 00 40 40</span></p>
            <hr></hr>
            <div class="card command-card">
                <div class="card-header command-header">Garanties</div>
                <div class="card-body">
                <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Responsabilité civile</a></li>
                    <li><a href="#tabs-3">Défense et recours</a></li>
                    <li><a href="#tabs-4">Incendie</a></li>
                    <li><a href="#tabs-5">Vol</a></li>
                    <li><a href="#tabs-6">Bris de glace</a></li>
                    <li><a href="#tabs-7">Tiérce compléte</a></li>
                    <li><a href="#tabs-8">Tiérce collision</a></li>
                    <li><a href="#tabs-9">Avance sur recours</a></li>
                    <li><a href="#tabs-10">Personnes ransportées</a></li>
                    <li><a href="#tabs-11">Assistance</a></li>
                    <li><a href="#tabs-12">Packs</a></li>
                </ul>
                <div id="tabs-1">
                    <table class="table" style='position: relative;top: -114px;'>
                    <img src="../../img/rc.jpg" alt="" class='tab-img'><p>Appelée communément  assurance « contre tiers », elle s’applique à la réparation des dommages corporels ou matériels résultant : Des accidents, incendies ou explosions causés par le véhicule, les accessoires  et produits servant à son utilisation, les objets et substances qu’il transporte ;De la chute de ces accessoires, objets, substances ou produitsLa RC est accordée, que le véhicule soit en circulation ou hors circulation.L’assurance RC est valable dans ensemble des territoires membres de la CIMA.Pour les pays membre de la CEDEAO, et non membre de la CIMA, la circulation dans ces territoires nécessite la détention d’une Carte brune CEDEAO pour couvrir la responsabilité civile pouvant être encourue dans ces pays.Les autres garanties ne sont valables qu’au Sénégal et peuvent être étendues à d’autres territoires.</p>
                    <thead class='garanties-head'>
                        <tr>
                            <th scope="col">Ce que nous garantissons</th>
                            <th scope="col">Montants des garanties</th>
                        </tr>
                    </thead>
                    <tbody class='garanties-body'>
                        <tr>
                            <td>Les dommages causés à autrui par le véhicule de l’assuré (RC en circulation et RC hors circulation)</td>
                            <td style='font-weight:bold;padding-left:64px'>ILLIMITE</td>
                        </tr>
                        <tr>
                            <td>Dont Recours des tiers Incendie</td>
                            <td style='color:#3d753b;font-weight:bold'>Jusqu’à 50.000.000 par sinistre</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
             
                <div id="tabs-3"><!--défense et recours-->
                <table class="table">
                    <img src="../../img/dr.jpg" alt="" class='tab-img'><p style='position:relative;top:-191px !important'>L’assureur réclame auprès du tiers responsable ou de son assureur substitué, la réparation des préjudices subis par son assuré à l’occasion d’un accident dans lequel le véhicule assuré est impliqué pourvu que le tiers responsable soit identifié.L’assureur s’engage également à pourvoir à la défense de l’assuré devant les juridictions compétentes lorsqu’il y est poursuivi à la suite d’un sinistre couvert. Cette garantie s’exerce à concurrence de 200.000 FCFA.</p>
                    <thead class='garanties-head'>
                        <tr>
                            <th scope="col">Ce que nous garantissons</th>
                            <th scope="col">Montants des garanties</th>
                        </tr>
                    </thead>
                    <tbody class='garanties-body'>
                        <tr>
                            <td>L’ASSISTANCE JURIDIQUE de l’assuré .</td>
                            <td style='font-weight:bold;color:#3d753b'>200.000 FCFA par sinistre </td>
                        </tr>
                        <tr>
                            <td>Engagement de l'assureur à exercer, à ses frais, toutes les interventions amiables ou judiciaires en vue d'obtenir la réparation pécuniaire des dommages matériels subis par le véhicule de l'assuré. </td>
                            <td style='font-weight:bold;color:#3d753b'>(y compris les frais et honoraires d'expertise, d'enquête, d'avance d'avocats, ainsi que les frais judiciaires)</td>
                        </tr>
                        <tr>
                            <td>Engagement de l'assureur à pourvoir, à ses frais, à la défense de l'assuré devant les Tribunaux répressifs, s'il est poursuivi à la suite d'infractions commises aux lois et règlements sur la circulation du fait de la propriété, de la garde ou de l’utilisation du véhicule assuré.</td>
                            <td style='font-weight:bold;color:#3d753b'>200.000 FCFA par sinistre </td>
                        </tr>
                    </tbody>
                </table>
                </div><!--défense et recours-->
                <div id="tabs-4"><!--incendie-->
                    <table class='table'>
                        <thead class='garanties-head'>
                            <tr>
                                <th>CE QUE NOUS GARANTISSONS</th>
                                <th>MONTANTS DES GARANTIES</th>
                            </tr>
                        </thead>
                        <body class='garanties-body'>
                            <tr>
                                <td><img src="../../img/incendie.jpg" alt="" class='tab-img'><p  style='position:relative;top:-202px !important'>Les dommages matériels  subis par le véhicule assuré et les accessoires et pièces de rechange dont le catalogue du constructeur prévoit la livraison en même temps que le véhicule et provenant d’incendie, de combustion spontanée, de chute de la foudre, d’explosions.</p></td>
                                <td style='color:#3d753b;font-weight:bold'>Valeur vénale du véhicule au jour du sinistre sans franchise.</td>
                            </tr>
                        </body>
                    </table>
                </div><!--incendie-->
                <div id="tabs-5"><!--Vol-->
                    <table class='table'>
                        <thead class='garanties-head'>
                            <tr>
                                <th>CE QUE NOUS GARANTISSONS</th>
                                <th>MONTANT DES GARANTIES</th>
                            </tr>
                        </thead>
                        <tbody class ='garanties-body'>
                            <tr>
                                <td><img src="../../img/vol.jpg" alt="" class='tab-img'><p  style='position:relative;top:-180px !important'>Les dommages subis par le véhicule assuré ainsi que  les accessoires et pièces de rechange dont le catalogue du constructeur prévoit la livraison en même temps que le véhicule et résultant de la disparition ou de la détérioration à la suite d’un vol ou d’une tentative de vol.<p></td>
                                <td style='color:#3d753b;font-weight:bold'>Valeur vénale du véhicule au jour du sinistre.Franchise obligatoire de FCFA 36.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--vol-->
                <div id="tabs-6"><!--Bris de glace-->
                    <table class='table'>
                        <thead class='garanties-head'>
                            <tr>
                                <th>CE QUE NOUS GARANTISSONS</th>
                                <th>MONTANTS DES GARANTIES</th>
                            </tr>
                        </thead>
                        <tbody class='garanties-body'>
                            <tr>
                                <td><img src="../../img/bg.jpg" alt="" class='tab-img'><p  style='position:relative;top:-203px !important'>Le bris des pare-brise, glaces latérales et glaces arrières lorsque le bris résulte d’un événement quelconque.</p></td>
                                <td style='color:#3d753b;font-weight:bold'>Valeur de remplacement des glaces brisées y compris les fournitures nécessaires à leur remplacement et les frais de pose.</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--bris de glace-->
                <div id="tabs-7"><!--Tiérce compléte-->
                <table class='table'>
                        <thead class='garanties-head'>
                            <tr>
                                <th>CE QUE NOUS GARANTISSONS</th>
                                <th>MONTANTS DES GARANTIES</th>
                            </tr>
                        </thead>
                        <tbody class='garanties-body'>
                            <tr>
                                <td><img src="../../img/tc.jpg" alt="" class='tab-img'><p  style='position:relative;top:-194px !important'>Les dommages subis par le véhicule de l’assuré ainsi que les accessoires et pièces de rechange dont le catalogue du constructeur prévoit la livraison en même temps que le véhicule par suite de collision, choc contre un corps fixe ou mobile, de renversement</p></td>
                                <td style='color:#3d753b;font-weight:bold'>Valeur à neuf ou catalogue du concessionnaire avec une Franchise obligatoire de FCFA 36.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--Tiérce compléte-->
                <div id="tabs-8"><!--Tiérce collision-->
                    <table class='table'>
                        <thead class='garanties-head'>
                            <tr>
                                <th>CE QUE NOUS GARANTISSONS</th>
                                <th>MONTANTS DES GAREANTIES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="../../img/t_col.jpg" alt="" class='tab-img'><p  style='position:relative;top:-204px !important'>Les dommages subis par le véhicule de l’assuré par suite de collision avec un véhicule ou un animal appartenant à un tiers identifié ou avec un piéton, lui-même identifié.</p></td>
                                <td  style='color:#3d753b;font-weight:bold'>Valeur à neuf ou catalogue du concessionnaire avec une Franchise obligatoire de FCFA 36.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--Tiérce collision-->
                <div id="tabs-9"><!--avance sur recours-->
                <img src="../../img/ar.jpg" alt="" class='tab-img'><p  style='position:relative;top:-153px !important'>En cas de collision avec un véhicule tiers identifié, accident par lequel notre assuré est dans son bon droit totalement ou partiellement, nous nous engageons à rembourser à notre assuré, les frais de réparation des dommages matériels subis par son véhicule.Un capital optionnel (500.000, 750.000, 1.000.00, 2.000.000) est proposé et en cas de sinistre, l’avance est réglée rapidement à la réception du dossier complet.</p>
                    <table class='table'>
                        <thead class='garanties-head'>
                            <tr>
                                <th>GARANTIES</th>
                                <th>MONTANTS GARANTIES</th>
                            </tr>
                        </thead>
                        <tbody class='garanties-body'>
                            <tr>
                                <td>Engagement de l’Assureur à se substituer à l’auteur de l‘accident en cas de collision entre le véhicule assuré et un autre véhicule tiers. </td>
                                <td>Les frais de réparation des seuls dommages matériels subis par le véhicule assuré et consécutifs à l’accident à concurrence du capital choisi (500.000 à 2.000.000 FCFA)</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--avance sur recours-->
                <div id="tabs-10">
                <img src="../../img/pt.jpg" alt="" class='tab-img'><p  style='position:relative;top:-152px !important'>Des indemnités contractuelles sont prévues pour les risques décès, infirmité permanente, frais médicaux pour les personnes transportées dans la limite des places autorisées par l’administration ayant délivré le récépissé de circulation.</p>
                    <table class='table'>
                        <thead class='garanties-head'>
                            <tr>
                                <th>GARANTIES</th>
                                <th>MONTANTS GARANTIES</th>
                            </tr>
                        </thead>
                        <tbody class='garanties-body tab11'>
                            <tr>
                                <td>Les personnes transportées par l’assuré (y compris conjoint, ascendants et descendant) suivant l’option choisie de capitaux ci-après :</td>
                                <td style='color:#3d753b;font-weight:bold'>Option N° 1</td>
                                <td  style='color:#3d753b;font-weight:bold'>Option N° 2</td>
                                <td style='color:#3d753b;font-weight:bold'>Option N° 3</td>
                            </tr>
                            <tr>
                                <td>Décès accidentels :</td>
                                <td>1 000 000 FCFA</td>
                                <td>2 000 000 FCFA</td>
                                <td>3 000 000 FCFA</td>
                            </tr>
                            <tr>
                                <td>Incapacité Permanente :</td>
                                <td>1 000 000 FCFA</td>
                                <td>2 000 000 FCFA</td>
                                <td>3 000 000 FCFA</td>
                            </tr>
                            <tr>
                                <td>Frais Médicaux & Pharmaceutiques :</td>
                                <td>1 000 000 FCFA</td>
                                <td>2 000 000 FCFA</td>
                                <td>3 000 000 FCFA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tabs-11"><!--Assistance-->
                <table class='table'>
                    <thead class='garanties-head'>
                        <tr>
                            <th>CE QUE NOUS GARANTISSONS</th>
                            <th>MONTANTS DES GARANTIES</th>
                        </tr>
                    </thead>
                    <tbody class='garanties-body'>
                        <tr>
                            <td><img src="../../img/ass.jpg" alt="" class='tab-img'><p>Les dommages causés à autrui par le véhicule de l’assuré (RC en circulation et RC hors circulation)</p></td>
                            <td style='color:#3d753b;font-weight:bold'>ILLIMITE</td>
                        </tr>
                        <tr>
                            <td> dont Recours des tiers Incendie</td>
                            <td style='color:#3d753b;font-weight:bold'>Jusqu’à 50.000.000 par sinistre</td>
                        </tr>
                    </tbody>
                </table>
                </div><!--Assistance-->
                <div id="tabs-12"><!--packs-->
                    <table class='table'>
                        <thead style='garanties-head'>
                            <tr>
                                <th>PACK</th>
                                <th>Garanties associées</th>
                            </tr>
                        </thead>
                        <tbody  >
                            <tr>
                                <td class="p-title">PACK MINI</td>
                                <td>
                                    <ul class='packs-garanties'>
                                        <li>Résponsabilité civile</li>
                                        <li>Défense et recours</li>
                                        <li>Individuelle personnes transportées</li>
                                        <li>Assistance / Remorquage gratuit 24h/24 - 7j/7</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                            <td class="p-title">PACK CLASSIC</td>
                                <td>
                                    <ul class='packs-garanties'>
                                        <li>Résponsabilité civile</li>
                                        <li>Défense et recours</li>
                                        <li>Incendie</li>
                                        <li>Vol</li>
                                        <li>Bris de glaces</li>
                                        <li>Avance sur recours</li>
                                        <li>Individuelle personnes transportées</li>
                                        <li>Assistance / Remorquage gratuit 24h/24 - 7j/7</li>
                                        <li>Véhicule de remplacement / 3 jours en cas d'accident</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                            <td class="p-title">PACK CONFORT</td>
                                <td>
                                    <ul class='packs-garanties'>
                                        <li>Résponsabilité civile</li>
                                        <li>Défense et recours</li>
                                        <li>Incendie</li>
                                        <li>Vol</li>
                                        <li>Bris de glaces</li>
                                        <li>Tierce complète</li>
                                        <li>Individuelle personnes transportées</li>
                                        <li>Assistance / Remorquage gratuit 24h/24 - 7j/7</li>
                                        <li>
                                            Véhicule de remplacement
                                                <ul style='padding-left: 20px;'>
                                                    <li style='list-style:none !important;color: #a43025'>8 jours en cas d'accident</li>
                                                    <li style='list-style:none !important;color: #a43025'>3 jours en cas de panne</li>
                                                </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                            <td class="p-title">PACK LIBÉRTÉ</td>
                                <td>
                                <ul class='packs-garanties'>
                                        <li>Résponsabilité civile</li>
                                        <li>Défense et recours</li>
                                        <li>Incendie</li>
                                        <li>Vol</li>
                                        <li>Bris de glaces</li>
                                        <li>Tierce complète</li>
                                        <li>Individuelle personnes transportées</li>
                                        <li>Assistance / Remorquage gratuit 24h/24 - 7j/7</li>
                                        <li>
                                            Véhicule de remplacement
                                                <ul style='padding-left: 20px;'>
                                                    <li style='list-style:none !important;color: #a43025'>8 jours en cas d'accident</li>
                                                    <li style='list-style:none !important;color: #a43025'>3 jours en cas de panne</li>
                                                </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--packs-->
                </div>
                </div>
            </div>
        </main>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../view/js/ui.js"></script>

    <script>
        $(document).ready(function(){
            $( "#tabs" ).tabs();

            $('#sinistreHelp').on('click',function(){
                alert('inforlations')
            })
        })
    </script>
    <script>
        function blinker() {
            $('.blinking').fadeOut(1000);
            $('.blinking').fadeIn(1000);
        }
        setInterval(blinker, 1000);
    </script>
    </body>

</html>