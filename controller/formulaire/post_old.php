<?php
    /**********************LES VALEURS DE L'ASSURE ***********************************/
//echo $_SESSION['matricule'];
 echo "unique ID: ".$unikId=uniqid();
 function generateId($length):string{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@';
    $charactersLength = strlen($characters);
    $idGenerated      = '';
    $password         = '';
    for ($i = 0; $i < $length; $i++) {
        $idGenerated .= $characters[rand(0, $charactersLength - 1)];
    }
    return $idGenerated;
}
echo "<br>";
"<br>";
$c1=null;   $c2=null;   $c3=null;   $c4=null;   $c5=null;   $c6=null;   $c7=null;$c8=null;

echo "nom assure".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_assure'],FILTER_SANITIZE_STRING))."<br>";
echo "prenom assure".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_assure'],FILTER_SANITIZE_STRING))."<br>";
echo "adresse assure".preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['adresse_assure'],FILTER_SANITIZE_STRING))."<br>";
echo " telephone".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['tel_assure'],FILTER_SANITIZE_NUMBER_INT))."<br>";
echo " email".preg_replace("#[^a-zA-Z- ]]#", "",filter_var($_POST['email_assure'],FILTER_SANITIZE_EMAIL))."<br>";
$Assuredao=new AssureDao();
$usAssure=new Assure($unikId,preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['adresse_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['tel_assure'],FILTER_SANITIZE_NUMBER_INT)),
                            preg_replace("#[^a-zA-Z- ]]#", "",filter_var($_POST['email_assure'],FILTER_SANITIZE_EMAIL))
                            );
$okAssure=$Assuredao->insererAssure($usAssure);
if($okAssure==true)
  {
    echo 'ASSURE insere'."<br>";
    $c1=1;
  }
else
   {
     echo "ASSURE non inserer"."<br>";
  }

/**********************LES VALEURS Du CONDUCTEUR DU VEHICULE ***********************************/

echo "nom conducteur: ".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_conducteur'],FILTER_SANITIZE_STRING))."<br>";
echo "prenom conducteur: ".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_conducteur'],FILTER_SANITIZE_STRING))."<br>";
// echo "annee permis: ".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['annee_permis'],FILTER_SANITIZE_NUMBER_INT))."<br>";
// echo "duree conduite: ".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['duree_conduite'],FILTER_SANITIZE_NUMBER_INT))."<br>";

$conddao=new ConducteurVehiculeDao();
$usCond=new Conducteur_vehicule($unikId,
            preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_conducteur'],FILTER_SANITIZE_STRING)),
            preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_conducteur'],FILTER_SANITIZE_STRING))
            // preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['annee_permis'],FILTER_SANITIZE_NUMBER_INT)),
            // preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['duree_conduite'],FILTER_SANITIZE_NUMBER_INT))
            );
$okCond=$conddao->insererConducteur($usCond);
// var_dump($usCond);
if($okCond==true)
{
    echo 'conducteur donnees insere'."<br>";
        $c2=1;
}
else
{
    echo " conducteur donnee non inserer"."<br>";
}


/**********************LES VALEURS DE LA PERIODE DE LA GARANTIE ***********************************/
$date_debut=$_POST['date_debut'];
$heure_debut="08:00:00";

$date_fin=substr($_POST['date_debut'],0,-6);
$heure_fin="23:59:00";
echo "date debut ".$date_debut."<br>";
echo "heure debut  ".$heure_debut."<br>";
echo "date fin ".$date_fin."<br>";
echo "debut debut ".$heure_fin."<br>";
echo "date debut: ".$_POST['date_debut']."<br>";
echo "date fin: ".$_POST['demo']."<br>";
echo "duree garantie: ".$_POST['duree_garantie']."<br>";

$Gantdao = new Periode_garantieDao();
$usGant  = new Periode_garantie($unikId,$_POST['date_debut'],$_POST['demo'],$heure_debut,$heure_fin,$_POST['duree_garantie']);

$okGant=$Gantdao->insererPeriode($usGant);
if($okGant==true)
  {
    echo 'Periode_garantie insere'."<br>";
    $c3=1;
  }
else
 {
  echo "Periode_garantie non inserer"."<br>";
   }


/**********************LES VALEURS DU VEHICULE ***********************************/

/*echo "marque: ".$_POST['marque']."<br>";
echo "type vehicule: ".$_POST['type_vehicule']."<br>";
echo "immatriculation: ".$_POST['immatriculation']."<br>";
 echo "GENRE".$_POST['genre']."<br>";
echo "puissance".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['puissance'],FILTER_SANITIZE_NUMBER_INT))."<br>";
echo "energie: ".$_POST['energie']."<br>";
echo "charge: ".$_POST['charge']."<br>";
echo "places: ".$_POST['places']."<br>";
echo "MEC: ".$_POST['mec']."<br>";
echo "valeur neuve: ".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['val_neuve'],FILTER_SANITIZE_NUMBER_INT))."<br>";
echo "valeur venale: ".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['val_venale'],FILTER_SANITIZE_NUMBER_INT))."<br>";
echo "categorie: ".$_POST['categorie']."<br>";
echo "PAck: ".$_POST['pack']."<br>";*/
$marque=preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['marque'],FILTER_SANITIZE_STRING));
$type=preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['type_vehicule'],FILTER_SANITIZE_STRING));
$immatriculation=preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['immatriculation'],FILTER_SANITIZE_STRING));
if(!isset($_POST['puissance'])) $puissance="N/A";
else $puissance=preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['puissance'],FILTER_SANITIZE_NUMBER_INT));
$energie=$_POST['energie'];
$charge_utile=$_POST['charge'];
$places=filter_var($_POST['places'],FILTER_SANITIZE_NUMBER_INT)+filter_var($_POST['placeSup'],FILTER_SANITIZE_NUMBER_INT);
$genre=$_POST['genre'];

if(!isset($_POST['chassis'])) $chassis="N/A";
else $chassis=$_POST['chassis'];
if(!isset($_POST['cylindre'])) $cylindre="N/A";
else $cylindre=preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['cylindre'],FILTER_SANITIZE_NUMBER_INT));
$date_mec=$_POST['mec'];
$valeur_neuve=preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['val_neuve'],FILTER_SANITIZE_NUMBER_INT));
$valeur_venale=preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['val_venale'],FILTER_SANITIZE_NUMBER_INT));
$nom_chauffeur=preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_conducteur'],FILTER_SANITIZE_STRING));
$categorie=$_POST['categorie'];
echo $categorie."<br>";
$Vehdao=new VehiculeDao();
$usVeh=new Vehicule($unikId,$marque,$type,$immatriculation,$puissance,$energie,$charge_utile,$places,$genre,$chassis,$cylindre,$date_mec,$valeur_neuve,$valeur_venale,$nom_chauffeur,$categorie);
$Vdao=new VehiculeDao('','','','','','','','','','','','','','','',$categorie);
$voiture=new Vehicule();
$vehicule=$Vdao->getCatVehicule($voiture);

        $okVeh=$Vehdao->insererVehicule($usVeh);
        if($okVeh==true)
        {
            echo 'VEHICULE insere'."<br>";
            $c4=1;
        }
        else
        {
            echo "VEHICULE non inserer"."<br>";
        }

/***********************************INSERTION DE DECOMPTE *************************************/

echo "taxe".$taxe=$_POST['taxe1']."<br>";
echo "fond de garantie".$fond=$_POST['totalFG1']."<br>";
echo "accessoire".$fond=$_POST['accessoire']."<br>";
echo "prime nette".$primeNette=$_POST['totalPN1']."<br>";
echo "prime totale".$primeTotale=$_POST['totalPT1']."<br>";

$Cptdao=new Decompte_primeDao();
$usCpt=new Decompte_prime($unikId,$_POST['taxe1'],$fond=$_POST['accessoire'],$_POST['totalFG1'],$_POST['totalPN1'],$_POST['totalPT1']);

$okCpt=$Cptdao->insererDecompte($usCpt);
if($okCpt==true)
{
    echo 'Decompte donnees insere'."<br>";
    $c5=1;
}
else
{
    echo "Decompte donnee non inserer"."<br>";
}

/*****************************INSERTION DE LA REDUCTION MAJORATION**********************/
echo "bonus commerciale".$_POST['totalBC1']."<br>";
echo "Reduction commerciale".$_POST['totalRC1']."<br>";
echo "Reduction commerciale".$_POST['accessoire']."<br>";
echo "Pourcentage Bonus BC".$_POST['chiffre3']."<br>";
echo "Pourcentage Reduction RC".$_POST['sel1']."<br>";

$Rejdao=new RedMajDao();
$usRej=new RedMaj($unikId,$_POST['chiffre3'],$_POST['totalBC1'],$_POST['sel1'],$_POST['totalRC1']);

$okRej=$Rejdao->insererRedMaj($usRej);
if($okRej==true)
{
    echo 'reduction donnees insere'."<br>";
    $c6=1;
}
else
{
    echo " reduction donnee non inserer"."<br>";
}
$numPdao=new PoliceDao();
$numP=$numPdao->getNumPolice($_SESSION['matricule'],$categorie);
$c8=$numP->rowCount();
if($numP==true)
{
    foreach ($numP as $value)
    {
        if($value['numPolice']=='')
        {
            echo "<strong>il nya pas de police</strong><br>";
            $vaPol="4".$categorie."000001";;
            $valueNumP=$_SESSION['matricule']."/4".$categorie."000001";

        }
        else{
            echo $valueNumP=$_SESSION['matricule']."/".$value['numPolice'];
            $vaPol=$value['numPolice'];
            $valueNumP=$_SESSION['matricule']."/".$vaPol;
            echo "fdhggh".$vaPol."<br>";
        }

    }
}
else
{
    echo "supression Vehicule non effectué<br>";
}
echo "okokok".$valueNumP."<br>";
//echo "numepro polirut".$valueNumP;
date_default_timezone_set('UTC');
$year=date("Y");
/*********************************************************************************************/
$usPolao=new PoliceDao();
// $pol=new Police('','','','','','',$_SESSION['matricule'],'','','','','','','');
$numF=$usPolao->getNumFacture($_SESSION['matricule']);
foreach ($numF as $item)
{
    echo "facture =".$item['facture']."<br>";
    $numFacture=$item['facture'];
}

if($numFacture==null)
{
   $numFacture=$vaPol."-".$year."-".$_SESSION['matricule']."0000";

}
else
{
    $numFacture=$vaPol."-".$year."-".$item['facture'];
}
/*****************************INSERTION DE LA POLICE*****************************************/

// $dp = date_create()->format('Y-m-d');

echo(date_create()->format('Y-m-d H:i:s'));
$datePolice = date_create()->format('Y-m-d H:i:s');
 $attestation=preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['attestation'],FILTER_SANITIZE_NUMBER_INT));
if($c1==1 && $c2==1 && $c3==1 && $c4==1 && $c5==1 && $c6==1 )
{
    $usdao = new PoliceDao();
    // $us = new Police($unikId,$valueNumP,$datePolice,$attestation,$attestation_cedeao,$numFacture,(int)$validation,(int)($_SESSION['matricule']),$insertedconducteur,$garantieGenerated,$vehiculeInsere,$decompteInseree,$reductioInseree,$asurreInserted);
    $attestation       = $_POST['attestation'];
    $attestationCedeao = $_POST['attesta'];
    $us    = new Police($unikId,$valueNumP,$datePolice,$numFacture,$_POST['attestation'],$_POST['attesta'],1,$_SESSION['matricule'],$unikId,$unikId,$unikId,$unikId,$unikId,$unikId);
    $ok    = $usdao->insererPolice($us);
    var_dump($us);
    if($ok==true)
    {
        echo "toutes les insertions sont faites<br>";
        echo '<p style="backgroud:green">Police inseree</p>'."<br>";

        $attestationDao = new AttestationDao();
        $cedeaoDao      = new AttestationCedeaoDao();
   
        if($_POST['optradio']=='verte'){
            $attestationDao->setToSoldVertes($attestation);
            $cedeaoDao->setToSoldCedeao($attestationCedeao);

        }else if($_POST['optradio']=='jaune'){
            $attestationDao->setToSoldJaunes($attestation);
            $cedeaoDao->setToSoldCedeao($attestationCedeao);

        }
        $c7=1;
    }
    else
    {
        echo "<p style='background:red'>Police non inseree</p>"."<br>";
        if($c1 == 1)
        {
            $listAssure=$Assuredao->selectAssure(new Assure($unikId));
            $rowAssure=$listAssure->rowCount();
            if($rowAssure==1)
            {
                echo "<strong>le select passe</strong><br>";
                $koAssure=$Assuredao->deleteAssure(new Assure($unikId));
                if($koAssure==true)
                {

                    echo "supression Assure effectué<br>";
                }
                else
                {
                    echo "supression Assure non effectué<br>";
                }
            }
        }
        if($c2 == 1)
        {
            $listCond=$conddao->selectConducteur($usCond->getIdCond());
            $rowCond=$listCond->rowCount();
            if($rowCond==1)
            {
                $koCond=$conddao->deleteConducteur(new Conducteur_vehicule($unikId));
                if($koCond==true)
                {
                    echo "supression Conducteur effectué<br>";
                }
                else
                {
                    echo "supression Conducteur non effectué<br>";
                }
            }
        }
        if($c3==1)
        {
            $listGant=$Gantdao->listPeriode(new Periode_garantie($unikId));
            $rowGant=$listGant->rowCount();
            if($rowGant==1)
            {
                $koGant=$Gantdao->deletePeriode(new Periode_garantie($unikId));
                if($koGant==true)
                {
                    echo "supression Periode effectué<br>";
                }
                else
                {
                    echo "supression Periode non effectué<br>";
                }
            }
        }
        if($c4==1)
        {
            $listVeh=$Vehdao->selectVehicule(new Vehicule($unikId));
            $rowVeh=$listVeh->rowCount();
            if($rowVeh==1)
            {
                $koVeh=$Vehdao->deleteVehicule(new Vehicule($unikId));
                if($koVeh==true)
                {
                    echo "supression Vehicule effectué<br>";
                }
                else
                {
                    echo "supression Vehicule non effectué<br>";
                }
            }
        }
        if($c5==1)
        {
            $listCpt=$Cptdao->selectDecompte(new Decompte_prime($unikId));
            $rowCpt=$listCpt->rowCount();
            if($rowCpt==1)
            {
                $koCpt=$Cptdao->deleteDecomtpe(new Decompte_prime($unikId));
                if($koCpt==true)
                {
                    echo "supression decompte effectué<br>";
                }
                else
                {
                    echo "supression decompte non effectué<br>";
                }
            }
        }
        if($c6==1)
        {
            $listRej=$Rejdao->selectRedMaj(new RedMaj($unikId));
            $rowRed=$listRej->rowCount();
            if($rowRed==1)
            {
                $koRej=$Rejdao->deleteRedMaj(new RedMaj($unikId));
                if($koRej==true)
                {
                    echo "supression majoration effectué<br>";
                }
                else
                {
                    echo "supression majoration non effectué<br>";
                }
            }
        }
    }
}
else
{
    $listAssure=$Assuredao->selectAssure(new Assure($unikId));
    $rowAssure=$listAssure->rowCount();
    if($rowAssure==1)
    {
        echo "<strong>le select passe</strong><br>";
        $koAssure=$Assuredao->deleteAssure(new Assure($unikId));
        if($koAssure==true)
        {

            echo "supression Assure effectué<br>";
        }
        else
        {
            echo "supression Assure non effectué<br>";
        }
    }
    $listCond=$conddao->selectConducteur(new Conducteur_vehicule($unikId));
    $rowCond=$listCond->rowCount();
    if($rowCond==1)
    {
        $koCond=$conddao->deleteConducteur(new Conducteur_vehicule($unikId));
        if($koCond==true)
        {
            echo "supression Conducteur effectué<br>";
        }
        else
        {
            echo "supression Conducteur non effectué<br>";
        }
    }

    $listGant=$Gantdao->listPeriode(new Periode_garantie($unikId));
    $rowGant=$listGant->rowCount();
    if($rowGant==1)
    {
        $koGant=$Gantdao->deletePeriode(new Periode_garantie($unikId));
        if($koGant==true)
        {
            echo "supression Periode effectué<br>";
        }
        else
        {
            echo "supression Periode non effectué<br>";
        }
    }
    $listVeh=$Vehdao->selectVehicule(new Vehicule($unikId));
    $rowVeh=$listVeh->rowCount();
    if($rowVeh==1)
    {
        $koVeh=$Vehdao->deleteVehicule(new Vehicule($unikId));
        if($koVeh==true)
        {
            echo "supression Vehicule effectué<br>";
        }
        else
        {
            echo "supression Vehicule non effectué<br>";
        }
    }
    $listCpt=$Cptdao->selectDecompte(new Decompte_prime($unikId));
    $rowCpt=$listCpt->rowCount();
    if($rowCpt==1)
    {
        $koCpt=$Cptdao->deleteDecomtpe(new Decompte_prime($unikId));
        if($koCpt==true)
        {
            echo "supression decompte effectué<br>";
        }
        else
        {
            echo "supression decompte non effectué<br>";
        }
    }
    $listRej=$Rejdao->selectRedMaj(new RedMaj($unikId));
    var_dump($Rejdao);
    $rowRed=$listRej->rowCount();
    if($rowRed==1)
    {
        $koRej=$Rejdao->deleteRedMaj(new RedMaj($unikId));
        if($koRej==true)
        {
            echo "supression majoration effectué<br>";
        }
        else
        {
            echo "supression majoration non effectué<br>";
        }
    }

}
/**********************LES VALEURS DES CHECKBOX ***********************************/

if ($c7==1)
{

//-------------------------
//CHECKBOX 1
//-------------------------
    if (isset($_POST['res_civ']))
    {
        $unikIdCIV=uniqid();
        echo "la resposabilite est  choisie";
        echo "resposabilite: ".$_POST['res_civ'];
        echo "<br>";
        echo $lim1=$_POST['lim1'];
        echo "<br>";
        echo $franch1=$_POST['franch1'];
        echo "<br>";
        echo $brute1=$_POST['brute1'];
        echo "<br>";
        echo $prorata1=$_POST['prorata1'];
        echo "<br>";

        $usdao1=new ContenirDao();
        $us1=new Contenir($unikIdCIV,$_POST['lim1'],$_POST['franch1'], $_POST['brute1'],$_POST['prorata1'], '1', $unikId);
        $ok1=$usdao1->insererContenir($us1);
        if($ok1==true)
        {
            echo 'resposabilite donnees insere'."<br>";
            $cont1=1;
        }
        else
        {
            echo " resposabilite donnee non inserer"."<br>";
        }

    }
//-------------------------
//CHECKBOX 2
//-------------------------

    if (isset($_POST['recours']))
    {
        $unikIdREC=uniqid();
        echo "la recours est  choisie"."<br>";
        echo "recours: ".$_POST['recours'];
        echo "<br>";
        echo $lim2=$_POST['lim2'];
        echo "<br>";
        echo $franch2=$_POST['franch2'];
        echo "<br>";
        echo $brute2=$_POST['brute2'];
        echo "<br>";
        echo $prorata2=$_POST['prorata2'];
        echo "<br>";

        $usdao2=new ContenirDao();
        $us2=new Contenir($unikIdREC,$_POST['lim2'],$_POST['franch2'], $_POST['brute2'],$_POST['prorata2'],2, $unikId);

        $ok2=$usdao2->insererContenir($us2);
        if($ok2==true)
        {
            echo 'recours donnees insere'."<br>";
        }
        else
        {
            echo " recours donnee non inserer"."<br>";
        }


    }

//-------------------------
//CHECKBOX 3
//-------------------------
    if (isset($_POST['defense']))
    {
        $unikIdDEF=uniqid();
        echo "la resposabilite est  choisie"."<br>";
        echo "defense: ".$_POST['defense'];
        echo "<br>";
        echo $lim3=$_POST['lim3'];
        echo "<br>";
        echo $franch3=$_POST['franch3'];
        echo "<br>";
        echo $brute3=$_POST['brute3'];
        echo "<br>";
        echo $prorata3=$_POST['prorata3'];
        echo "<br>";

        $usdao3=new ContenirDao();
        $us3=new Contenir($unikIdDEF,$_POST['lim3'],$_POST['franch3'], $_POST['brute3'],$_POST['prorata3'],3, $unikId);

        $ok3=$usdao3->insererContenir($us3);
        if($ok3==true)
        {
            echo 'defense donnees insere'."<br>";
        }
        else
        {
            echo " defense donnee non inserer"."<br>";
        }
    }
//-------------------------
//CHECKBOX 4
//-----------------------------
    if (isset($_POST['incendie']))
    {
        $unikIdINC=uniqid();
        echo "l'incendie est choisie"."<br>";
        echo "incendie: ".$_POST['incendie'];
        echo "<br>";
        echo $lim4=$_POST['lim4'];
        echo "<br>";
        echo $franch4=$_POST['franch4'];
        echo "<br>";
        echo $brute4=$_POST['brute4'];
        echo "<br>";
        echo $prorata4=$_POST['prorata4'];
        echo "<br>";

        $usdao4=new ContenirDao();
        $us4=new Contenir($unikIdINC,$_POST['lim4'],$_POST['franch4'], $_POST['brute4'],$_POST['prorata4'],4, $unikId);

        $ok4=$usdao4->insererContenir($us4);
        if($ok4==true)
        {
            echo 'incendie donnees insere'."<br>";
        }
        else
        {
            echo " incendie donnee non inserer"."<br>";
        }
    }
//-------------------------
//CHECKBOX 5
//-----------------------------
    if (isset($_POST['vol']))
    {
        $unikIdVol=uniqid();
        echo "lE VOL est  choisie"."<br>";
        echo "vol: ".$_POST['vol'];
        echo "<br>";
        echo $lim5=$_POST['lim5'];
        echo "<br>";
        echo $franch5=$_POST['franch5'];
        echo "<br>";
        echo $brute5=$_POST['brute5'];
        echo "<br>";
        echo $prorata5=$_POST['prorata5'];
        echo "<br>";

          $usdao5=new ContenirDao();
          $us5=new Contenir($unikIdVol,$_POST['lim5'],$_POST['franch5'], $_POST['brute5'],$_POST['prorata5'],5, $unikId);
          $ok5=$usdao5->insererContenir($us5);
          if($ok5==true)
          {
              echo 'vol donnees insere'."<br>";
          }
          else
          {
              echo " vol donnee non inserer"."<br>";
          }

    }
//-------------------------
//CHECKBOX 6
//--------------------------------
//echo "bris: ".$_POST['bris']."<br>";
//-----------------------------
    if (isset($_POST['bris']))
    {
        $unikIdBRIS=uniqid();
        echo "lE bris est  choisie";
        echo "bris: ".$_POST['bris'];
        echo "<br>";
        echo $lim6=$_POST['lim6'];
        echo "<br>";
        echo $franch6=$_POST['franch6'];
        echo "<br>";
        echo $brute6=$_POST['brute6'];
        echo "<br>";
        echo $prorata6=$_POST['prorata6'];
        echo "<br>";

        $usdao6=new ContenirDao();
        $us6=new Contenir($unikIdBRIS,$_POST['lim6'],$_POST['franch6'], $_POST['brute6'],$_POST['prorata6'],6, $unikId);
        $ok6=$usdao6->insererContenir($us6);
          if($ok6==true)
          {
              echo 'bris donnees insere'."<br>";
          }
          else
          {
              echo " bris donnee non inserer"."<br>";
          }

    }
//-------------------------
//CHECKBOX 7
//--------------------------------

    if (isset($_POST['TierceCom']))
    {
        $unikICOM=uniqid();
        echo "la tierce complete est choisie est  choisie";
        echo "tierce: ".$_POST['TierceCom'];
        echo "<br>";
        echo $lim7=$_POST['lim7'];
        echo "<br>";
        echo $franch7=$_POST['franch7'];
        echo "<br>";
        echo $brute7=$_POST['brute7'];
        echo "<br>";
        echo $prorata7=$_POST['prorata7'];
        echo "<br>";

        $usdao7=new ContenirDao();
        $us7=new Contenir($unikICOM,$_POST['lim7'],$_POST['franch7'], $_POST['brute7'],$_POST['prorata7'],7, $unikId);

             $ok7=$usdao7->insererContenir($us7);
             if($ok7==true)
             {
                 echo 'tierce tmc donnees insere'."<br>";
             }
             else
             {
                 echo " tierce tmc donnee non inserer"."<br>";
             }
    }
    if (isset($_POST['TierceCol']))
    {
        $unikIdCOL=uniqid();
        echo "la tierce collision est choisie est  choisie";
        echo "tierce Collision: ".$_POST['TierceCol'];
        echo "<br>";
        echo $lim7=$_POST['lim7'];
        echo "<br>";
        echo $franch7=$_POST['franch7'];
        echo "<br>";
        echo $brute7=$_POST['brute7'];
        echo "<br>";
        echo $prorata7=$_POST['prorata7'];
        echo "<br>";
                 $usdao7=new ContenirDao();
                 $us7=new Contenir($unikIdCOL,$_POST['lim7'],$_POST['franch7'], $_POST['brute7'],$_POST['prorata7'],8, $unikId);

                 $ok7=$usdao7->insererContenir($us7);
                 if($ok7==true)
                  {
                      echo 'tierce collision donnees insere'."<br>";
                  }
                  else
                  {
                      echo " tierce collision donnee non inserer"."<br>";
                  }

    }


//-------------------------
//CHECKBOX 8
//-----------------------------
    if (isset($_POST['avance']))
    {
        echo $unikIdAV=uniqid();
        echo "l'avance est  choisie"."<br>";
        echo "avance: ".$_POST['avance'];
        echo "<br>";
        echo $lim8=$_POST['lim8'];
        echo "<br>";
        echo $franch8=$_POST['franch8'];
        echo "<br>";
        echo $brute8=$_POST["brute8"];
        echo "<br>";
        echo $prorata8=$_POST['prorata8'];
        echo "<br>";

        if($_POST['avance']=='AR_opt1')
        {

            $usdao8=new ContenirDao();
            $us8=new Contenir($unikIdAV,$lim8,$franch8,$brute8,$prorata8,9, $unikId);

            $ok8=$usdao8->insererContenir($us8);
            if($ok8==true)
                {
                    echo 'AR_opt1 donnees insere'."<br>";
                }
            else
                {
                    echo " AR_opt1 donnee non inserer"."<br>";
                }
        }
        if($_POST['avance']=='AR_opt2')
        {

            $usdao8=new ContenirDao();
            $us8=new Contenir($unikIdAV,$lim8,$franch8,$brute8,$prorata8,10, $unikId);

            $ok8=$usdao8->insererContenir($us8);
            if($ok8==true)
                {
                    echo 'AR_opt2 donnees insere'."<br>";
                }
            else
                {
                    echo " AR_opt2 donnee non inserer"."<br>";
                }
        }
        if($_POST['avance']=='AR_opt3')
        {

            $usdao8=new ContenirDao();
           $us8=new Contenir($unikIdAV,$lim8,$franch8,$brute8,$prorata8,11, $unikId);

           $ok8=$usdao8->insererContenir($us8);
            if($ok8==true)
                {
                    echo 'AR_opt3 donnees insere'."<br>";
                }
            else
                {
                    echo " AR_opt3 donnee non inserer"."<br>";
                }
        }

    }
//-------------------------
//CHECKBOX 9
//-----------------------------
    if (isset($_POST['personne']))
    {
        $unikIdPERS=uniqid();
        echo "la personne est  choisie";
        echo "<br>";
        echo "<br>";
        echo "personne: ".$_POST['personne'];
        echo "<br>";
        echo $lim9=$_POST['lim9'];
        echo "<br>";
        echo $franch9=$_POST['franch9'];
        echo "<br>";
        echo $brute9=$_POST['brute9'];
        echo "<br>";
        echo $prorata9=$_POST['prorata9'];
        echo "<br>";

        if($_POST['personne']=='PT_opt1')
        {
            $usdao9=new ContenirDao();
            $us9=new Contenir($unikIdPERS,$lim9,$franch9,$brute9,$prorata9,12, $unikId);

            $ok9=$usdao9->insererContenir($us9);
            if($ok9==true)
            {
                echo 'PT_opt1 donnees insere'."<br>";
            }
            else
            {
                echo " PT_opt1 donnee non inserer"."<br>";
            }
        }
        if($_POST['personne']=='PT_opt2')
        {

            $usdao9=new ContenirDao();
            $us9=new Contenir($unikIdPERS,$lim9,$franch9,$brute9,$prorata9,13, $unikId);

            $ok9=$usdao9->insererContenir($us9);
            if($ok9==true)
            {
                echo 'PT_opt2 donnees insere'."<br>";
            }
            else
            {
                echo " PT_opt2 donnee non inserer"."<br>";
            }

        }
        if($_POST['personne']=='PT_opt3')
        {

            $usdao9=new ContenirDao();
            $us9=new Contenir($unikIdPERS,$lim9,$franch9,$brute9,$prorata9,14, $unikId);

            $ok9=$usdao9->insererContenir($us9);
            if($ok9==true)
            {
                echo 'PT_opt3 donnees insere'."<br>";
            }
            else
            {
                echo " PT_opt3 donnee non inserer"."<br>";
            }
        }

    }
//-------------------------
//CHECKBOX 10
//-----------------------------
    if (isset($_POST['assistance']))
    {
        $unikIdAUT=uniqid();
        echo "la auto est  choisie";
        echo "<br>";
        echo "auto: ".$_POST['assistance'];
        echo "<br>";
        echo $lim10=$_POST['lim10'];
        echo "<br>";
        echo $franch10=$_POST['franch10'];
        echo "<br>";
        echo $brute10=$_POST['brute10'];
        echo "<br>";
        echo $prorata10=$_POST['prorata10'];
        echo "<br>";

        $usdao10=new ContenirDao();
                     $us10=new Contenir($unikIdAUT,$_POST['lim10'],$_POST['franch10'], $_POST['brute10'],$_POST['prorata10'],15, $unikId);

                     $ok10=$usdao10->insererContenir($us10);
                     if($ok10==true)
                     {
                         echo ' assistance donnees insere'."<br>";
                     }
                     else
                     {
                         echo "  assistance donnee non inserer"."<br>";
                     }
    }
   // header('Location: http://saham-app.com/controller/formulaire/?action=lister1&opli='.$unikId.'');
   // header('Location: http://saham-app.com/controller/formulaire/?action=lister2&opli='.$unikId.'');
    print "
    <!doctype html>
    <html lang=\"en\">
        <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"refresh\" content=\"5; URL=javascript:window.open('http://google.com','_parent');\">
        <meta name=\"viewport\"content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>Document</title>
            <script>
                function redict(){
                    var a ='../../controller/formulaire/?action=lister1&opli=$unikId';
                    window.location.href='../../controller/formulaire/?action=valider';
                    window.open(a);
                }
            </script>
            <script>
            function redict1(){
                var b ='../../controller/formulaire/?action=lister2&opli=$unikId';
                window.location.href='../../controller/formulaire/?action=valider';
                window.open(b);
            }
            </script>
            <script>
            function redict2(){
                var b ='../../controller/formulaire/?action=lister2&opli=$unikId';
                window.location.href='../../controller/formulaire/?action=valider';
                window.open(b);
            }
            </script>
</head>
<body onload='redict();redict1();redict2()'>
</body>
</html>
    ";
}
else{
   // header('Location: http://saham-app.com/controller/formulaire/?action=valider&r=1&opli='.$unikId.'');
}

//--------------------------------