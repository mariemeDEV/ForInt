<?php
$c1=null;   $c2=null;   $c3=null;   $c4=null;   $c5=null;   $c6=null;   $c7=null;$c8=null;
    /**********************LES VALEURS DE L'ASSURE ***********************************/
    $usdao=new PoliceDao();
    $Assuredao=new AssureDao();
    $conddao=new ConducteurVehiculeDao();
    $Gantdao=new Periode_garantieDao();
    $Vehdao=new VehiculeDao();
    $Cptdao=new Decompte_primeDao();
    $usdao=new ContenirDao();
    $Rejdao=new RedMajDao();

    //-Autre

$categorie=$_POST['categorie'];
// echo "nom assure".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_assure'],FILTER_SANITIZE_STRING))."<br>";
// echo "prenom assure".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_assure'],FILTER_SANITIZE_STRING))."<br>";
// echo "adresse assure".preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['adresse_assure'],FILTER_SANITIZE_STRING))."<br>";
// echo " telephone".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['tel_assure'],FILTER_SANITIZE_NUMBER_INT))."<br>";
// echo " email".preg_replace("#[^a-zA-Z- ]]#", "",filter_var($_POST['email_assure'],FILTER_SANITIZE_EMAIL))."<br>";
    //--modification police
    $us=new Police($id_police,'','','','','',$_SESSION['matricule'],'','','','','','',$categorie);
    $usdao->update($us);// creer si elle n y a pas
    $us=$usdao->selectPolice($us);
    
    $usAssure=new Assure($us->getAssure(),preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['adresse_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['tel_assure'],FILTER_SANITIZE_NUMBER_INT)),
                            preg_replace("#[^a-zA-Z- ]]#", "",filter_var($_POST['email_assure'],FILTER_SANITIZE_EMAIL)));
    $Assuredao->updateAssure($usAssure);//creer si elle n'existe pas


//--------------------------------modification conducteur-----------------
// echo "nom conducteur: ".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_conducteur'],FILTER_SANITIZE_STRING))."<br>";
// echo "prenom conducteur: ".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_conducteur'],FILTER_SANITIZE_STRING))."<br>";
// echo "annee permis: ".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['annee_permis'],FILTER_SANITIZE_NUMBER_INT))."<br>";
// echo "duree conduite: ".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['duree_conduite'],FILTER_SANITIZE_NUMBER_INT))."<br>";
$conddao=new ConducteurVehiculeDao();
$usCond=new Conducteur_vehicule($us->getConducteurVehicule(),
            preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_conducteur'],FILTER_SANITIZE_STRING)),
            preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_conducteur'],FILTER_SANITIZE_STRING)),
            preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['annee_permis'],FILTER_SANITIZE_NUMBER_INT)),
            preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['duree_conduite'],FILTER_SANITIZE_NUMBER_INT))
            );
$okCond=$conddao->updateConducteur($usCond);
if($okCond==true)
{
    echo 'modification donnees conducteur insere'."<br>";
        $c2=1;
}
else
{
    echo 'modification donnees conducteur non insere'."<br>";
}
//--------------------------------modification periode de garantie-----------------
$date_debut=$_POST['date_debut'];
$heure_debut="08:00:00";

$date_fin=substr($_POST['date_debut'],0, -6);
$heure_fin="23:59:00";
// echo "date debut ".$date_debut."<br>";
// echo "heure debut  ".$heure_debut."<br>";
// echo "date fin ".$date_fin."<br>";
// echo "debut debut ".$heure_fin."<br>";
// echo "date debut: ".$_POST['date_debut']."<br>";
// echo "date fin: ".$_POST['demo']."<br>";
// echo "duree garantie: ".$_POST['duree_garantie']."<br>";
$Gantdao=new Periode_garantieDao();
$usGant=new Periode_garantie($us->getPeriodeGarantie(),$_POST['date_debut'],$_POST['demo'],$heure_debut,$heure_fin,$_POST['duree_garantie']);

$okGant=$Gantdao->updatePeriode($usGant);
if($okGant==true)
  {
    echo 'Periode_garantie modifie'."<br>";
    $c3=1;
  }
else
 {
  echo "Periode_garantie non modifier"."<br>";
   }
//----------------------------------modification caracteristique vehicule---------------
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
$usVeh=new Vehicule($us->getVehicule(),$marque,$type,$immatriculation,$puissance,$energie,$charge_utile,$places,$genre,$chassis,$cylindre,$date_mec,$valeur_neuve,$valeur_venale,$nom_chauffeur,$categorie);
$Vdao=new VehiculeDao('','','','','','','','','','','','','','','',$categorie);
//$voiture=new Vehicule();
//$vehicule=$Vdao->getCatVehicule($voiture);

        $okVeh=$Vehdao->updateVehicule($usVeh);
        if($okVeh==true)
        {
            echo 'VEHICULE modifie'."<br>";
            $c4=1;
        }
        else
        {
            echo "VEHICULE non modifier"."<br>";
        }
//---------------------Modification decompte-----------------------------
// echo "taxe".$taxe=$_POST['taxe1']."<br>";
// echo "fond de garantie".$fond=$_POST['totalFG1']."<br>";
// echo "accessoire".$fond=$_POST['accessoire']."<br>";
// echo "prime nette".$primeNette=$_POST['totalPN1']."<br>";
// echo "prime totale".$primeTotale=$_POST['totalPT1']."<br>";

$Cptdao=new Decompte_primeDao();
$usCpt=new Decompte_prime($us->getDecomptePrime(),$_POST['taxe1'],$fond=$_POST['accessoire'],$_POST['totalFG1'],$_POST['totalPN1'],$_POST['totalPT1']);

$okCpt=$Cptdao->updateDecompte($usCpt);
if($okCpt==true)
{
    echo 'Decompte donnees modifie'."<br>";
    $c5=1;
}
else
{
    echo "Decompte donnee non modifier"."<br>";
}
//-------------------Modification DE LA REDUCTION MAJORATION------------------------
// echo "bonus commerciale".$_POST['totalBC1']."<br>";
// echo "Reduction commerciale".$_POST['totalRC1']."<br>";
// echo "Reduction commerciale".$_POST['accessoire']."<br>";
// echo "Pourcentage Bonus BC".$_POST['chiffre3']."<br>";
// echo "Pourcentage Reduction RC".$_POST['sel1']."<br>";

$Rejdao=new RedMajDao();
$usRej=new RedMaj($us->getRedMaj(),$_POST['chiffre3'],$_POST['totalBC1'],$_POST['sel1'],$_POST['totalRC1']);

$okRej=$Rejdao->updateRedMaj($usRej);
if($okRej==true)
{
    echo 'reduction donnees modifie'."<br>";
    $c6=1;
}
else
{
    echo " reduction donnee non modifier"."<br>";
}

$numPdao=new PoliceDao();
$numP=$numPdao->getNumPolice(new Police('','','','','','',$_SESSION['matricule'],'','','','','',''),$categorie);
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
$pol=new Police('','','','','','',$_SESSION['matricule'],'','','','','','');
$numF=$usPolao->getNumFacture($pol);
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
//-------------------modification de la police----------------------------------------
$dp = date_create()->format('Y-m-d H:i:s');
$attestation="NULL";
$validation=1;
if(isset($_POST['attestation']) && !empty($_POST['attestation'])){
 $attestation=preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['attestation'],FILTER_SANITIZE_NUMBER_INT));
    $validation=0;
}
if($c1==1 && $c2==1 && $c3==1 && $c4==1 && $c5==1 && $c6==1 )
{
    echo "toutes les modifications sont faites";
    $usdao=new PoliceDao();
    $us=new Police($us->getIdPolice(),$valueNumP,$dp,$attestation,$numFacture,$validation,$_SESSION['matricule'],$unikId,$unikId, $unikId,$unikId,$unikId,$unikId);
    $ok=$usdao->uptadePolice($us);
    if($ok==true)
    {
        echo 'Police modifie'."<br>";
        $c7=1;
    }
    else
    {
        echo "Police non modifier"."<br>";
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
    // var_dump($Rejdao);
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

?>