<?php
// Démarrage ou restauration de la session
//session_start();
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['password']."<br>";
//echo $_SESSION['mdp']."<br>";
//echo $hash = password_hash('saham',PASSWORD_BCRYPT);
//echo $_SESSION['matricule'];

/*if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
    header ('location: http://forint/');
}
if(time()- $_SESSION['timestamp']>1440)
{
    echo"<script>alert('15 Minutes over!');</script>";
    unset($_SESSION['username'],$_SESSION['password'],$_SESSION['matricule']);
    header ('location: http://forint/');
    exit;
}*/
/*else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
    header ('location: http://saham-app.com');
}*/


require_once '../../model/IntermediaireDao.php';
require_once '../../mapping/Intermediaire.php';
require_once '../../mapping/Police.php';
require_once '../../model/PoliceDao.php';
require_once '../../model/AssureDao.php';
require_once '../../mapping/Assure.php';
require_once '../../mapping/Periode_garantie.php';
require_once '../../model/Periode_garantieDao.php';
require_once '../../mapping/Vehicule.php';
require_once '../../model/VehiculeDao.php';
require_once '../../mapping/Decompte_prime.php';
require_once '../../model/Decompte_primeDao.php';
require_once '../../mapping/RedMaj.php';
require_once '../../model/RedMajDao.php';
require_once '../../mapping/Contenir.php';
require_once '../../model/ContenirDao.php';
require_once '../../mapping/Conducteur_vehicule.php';
require_once '../../model/ConducteurVehiculeDao.php';
require_once '../../model/TypeAttestationDao.php';
require_once '../../mapping/TypeAttestation.php';
require_once '../../mapping/Attestation.php';
require_once '../../model/AttestationDao.php';
require_once '../../mapping/Annulation.php';
require_once '../../model/AnnulationsDao.php';
require_once '../../model/CommandesDao.php';



$choix=null;
$usdao=new IntermediaireDao();
if(isset($_GET['action']))
{
    switch ($_GET['action']) {
        case 'ajout':
            $ps         = new Intermediaire(0,0,0,0,0,'mbachhhke@saham.com',0);
            $resultMail = $usdao->getUserByMail('mbachhhke@saham.com');
            $cpt1       = $resultMail->rowCount();
            $chiffre    = null;
            while($row  = $resultMail->fetch())
            {
                echo $emial=$row[0]."<br>";
                if($row[0] !="mbacke@saham.com")
                {
                    echo "cool";
                }
            }
            $choix=1;
            $resultat=$usdao->listUser();
            require_once('../../view/admin/ajout_user.php');
        break;
        case 'modif':
            require_once('../../view/admin/modif_user.php');
        break;
        case 'updateUser':
            $ps     = new Intermediaire($_POST['matricule_update'],$_POST['prenom_update'],$_POST['nom_update'],$_POST['adresse_update'],$_POST['tel_update'],$_POST['email_update']);
            $ps_dao = new IntermediaireDao();
            $ps_dao->modifUser($ps);
            echo("<script>alert('Modifications effectuées avec succés.')</script>");
            $ps=new Intermediaire(0,0,0,0,0,'mbachhhke@saham.com',0);
            $resultMail= $usdao->getUserByMail($ps);
            $cpt1=$resultMail->rowCount();
            $chiffre=null;
            while($row=$resultMail->fetch())
            {
                echo $emial=$row[0]."<br>";
                if($row[0] !="mbacke@saham.com")
                {
                    echo "cool";
                }
            }
            $choix=1;
            $resultat=$usdao->listUser();
            require_once('../../view/admin/ajout_user.php');
        break;
        case 'activer':
            $int=new Intermediaire($_GET['mat'],'','','','','','','',$_GET['act']);
            $activaction=$usdao->activedUser($int);
            $resultat=$usdao->listUser();
            require_once('../../view/admin/ajout_user.php');
        break;
        case 'unvalidate':
            $usPolao=new PoliceDao();
            $val=new Police($_GET['mat'],'','','','','','','','','','','','','');
            $unvalidate=$usPolao->unvalidate($val);
            $usPolao=new PoliceDao();
            $pol=new Police($_GET['mat'],'','','','','','','','','','','','','');
            $resultat=$usPolao->listPoliceAdmn($pol);
            $cpt1=$resultat->rowCount();
            require_once('../../view/admin/afficher.php');
        break;
        case 'validate':
            $usPolao    = new PoliceDao();
            $val        = new Police($_GET['id'],'','','','','','','','','','','','','');
            $unvalidate = $usPolao->validate($val);
            $usPolao    = new PoliceDao();
            $pol        = new Police('','','','','','',$_GET['mat'],'','','','','','','');
            $resultat   = $usPolao->listPoliceAdmn($pol);
            $cpt1       = $resultat->rowCount();
            require_once('../../view/admin/afficher.php');
        break;
        case 'lister':
                $usInt         = new IntermediaireDao();
                $int           = new Intermediaire($_SESSION['matricule']);
                $intermediaire = $usInt->getUserByMat($_SESSION['matricule']);
                foreach($intermediaire as $ligne18)
                {
                    $codeInt   = $ligne18['matricule'];
                    $nomInt    = $ligne18['nom'];
                    $prenomInt = $ligne18['prenom'];
                }
                //-------------------------------------
                $usdao    = new AssureDao();
                $us       = new Assure('598724bd9b810','','','','');
                $Resultat = $usdao->selectAssure($us);
                foreach ($Resultat as $ligne)
                {
                    $nomAssure     = $ligne['nom_assure'];
                    $prenomAssure  = $ligne['prenom_assure'];
                    $adresseAssure = $ligne['adresse_assure'];
                    $telAssure     = $ligne['tel_assure'];
                }
                //--------------------------------------
                $usPolao=new PoliceDao();
                $pol=new Police($_GET['id'],"","","","","","","","","","","","","","");
                $podice=$usPolao->selectPolice($pol);
                foreach($podice as $ligne1)
                {
                    $codePolice  = $ligne1['num_police'];
                    $datePolice  = new DateTime(substr($ligne1['date_police'],0, 11));
                    $datePolice  = $datePolice->format('d/m/Y');
                    $attestation = $ligne1['attestation'];
                }
                //-------------------------------------
                $pdao=new Periode_garantieDao();
                $gant=new Periode_garantie($_GET['id'],'','','','');
                $periode=$pdao->listPeriode($gant);
                foreach ($periode as $ligne2)
                {
                    $dateFin=DateTime::createFromFormat('Y-m-d', $ligne2['date_fin']);
                    $heureDebut=$ligne2['heure_debut'];
                    $heureFin=$ligne2['heure_fin'];
                    $duree=$ligne2['duree'];
                    $dateDebut = DateTime::createFromFormat('Y-m-d', $ligne2['date_debut']);
                }
                //--------------------------------------
                $Cvao=new ConducteurVehiculeDao();
                $cond=new Conducteur_vehicule($_GET['id'],'','','','');
                $conducteur=$Cvao->selectConducteur($cond);
                //-------------------------------------
                //-------------------------------------
                $Vdao=new VehiculeDao();
                $voiture=new Vehicule($_GET['id'],'','','','');
                $vehicule=$Vdao->selectVehicule($voiture);
                foreach ($vehicule as $ligne10)
                {
                    $marque             =$ligne10['marque'];
                    $type               =$ligne10['type'];
                    $immatriculation    =$ligne10['immatriculation'];
                    $puissance          =$ligne10['puissance'];
                    $energie            =$ligne10['energie'];
                    $charge             =$ligne10['charge_utile'];
                    $place              =$ligne10['places'];
                    $genre              =$ligne10['genre'];
                    $chassis            =$ligne10['chassis'];
                    $cylindre           =$ligne10['cylindre'];
                    $mec                =DateTime::createFromFormat('Y-m-d', $ligne10['date_mec']);
                    $val_neuve          =$ligne10['valeur_neuve'];
                    $val_venale         =$ligne10['valeur_venale'];
                }
                //-------------------------------------
                $VCatdao=new VehiculeDao();
                $categorie=$VCatdao->getCatVehicule($voiture);
                foreach ($categorie as $ligne4)
                {
                    $libCat=$ligne4['libelle_categorie'];
                }
                //-------------------------------------
                $Redmaj=new RedMajDao();
                $red_maj=new RedMaj($_GET['id'],'','','','');
                $bonus=$Redmaj->selectRedMaj($red_maj);
                foreach ($bonus as $ligne5)
            {
                if($ligne5['pourcentageBC']==0) $percentBC=''; else $percentBC=$ligne5['pourcentageBC'];
                if($ligne5['pourcentageRC']==0) $percentRC=''; else $percentRC=$ligne5['pourcentageRC'];
                if($ligne5['bonus_rc']==0)
                {
                    $bc='';$percentBC='';
                }
                else
                {
                    $bc=number_format($ligne5['bonus_rc']);
                }
                if($ligne5['reduc_com']==0)
                {
                    $rc='';$percentRC='';
                }
                else
                {
                    $rc=number_format($ligne5['reduc_com']);
                }
            }
                //-------------------------------------
                $Decompte=new Decompte_primeDao();
                $dec_prime=new Decompte_prime($_GET['id'],'','','','');
                $Prime=$Decompte->selectDecompte($dec_prime);
                //-------------------------------------
                $res=new ContenirDao();
                $respons=new Contenir('','','','','','',$_GET['id']);
                /*************************************************************************/
                $reponsable=$res->getResponsabilite($respons);
                foreach ($reponsable as $ligne8)
                {
                    if($ligne8['franchise']==0) $franchRes='';else $franchRes=number_format($ligne8['franchise']);
                    if($ligne8['prime_brute']==0) $bruteRes='';else $bruteRes=number_format($ligne8['prime_brute']);
                    if($ligne8['prime_prorata']==0) $prorataRes='';else $prorataRes=number_format($ligne8['prime_prorata']);
                    $limRes=$ligne8['lim_gant'];
                }
                /***************************************************************************/
                $rti=$res->getRTI($respons);
                $rowRTI=$rti->rowCount();
                if($rowRTI==1)
                {
                    foreach ($rti as $ligne7)
                    {
                        if($ligne7['lim_gant']     ==0) $limRti=''       ; else $limRti=number_format($ligne7['lim_gant']);
                        if($ligne7['franchise']    ==0) $franchRti=''    ; else $franchRti=number_format($ligne7['franchise']);
                        $bruteRti=$ligne7['prime_brute'];
                        $prorataRti=$ligne7['prime_prorata'];
                    }
                }
                else{
                    $limRti='';$franchRti='';$bruteRti='';$prorataRti='';
                }
                /****************************************************************************/
                $defense=$res->getDefense($respons);
                $rowDER=$defense->rowCount();
                if($rowDER==1)
                {
                    foreach ($defense as $ligne9)
                    {
                        if($ligne9['lim_gant']     ==0) $limdef=''       ; else  $limdef=number_format($ligne9['lim_gant']);
                        if($ligne9['franchise']    ==0) $franchdef=''    ; else  $franchdef=number_format($ligne9['franchise']);
                        if($ligne9['prime_brute']  ==0) $brutedef=''     ; else  $brutedef=number_format($ligne9['prime_brute']);
                        if($ligne9['prime_prorata']==0) $proratadef=''   ; else  $proratadef=number_format($ligne9['prime_prorata']);
                    }
                }
                else{
                    $limdef ='';$franchdef='';$brutedef='';$proratadef='';
                }
                /****************************************************************************/
                $incendie=$res->getIncendie($respons);
                $rowInc=$incendie->rowCount();
                if($rowInc==1)
                {
                    foreach ($incendie as $ligne10)
                    {
                        if($ligne10['lim_gant']     ==0) $lim4=''       ; else  $lim4=number_format($ligne10['lim_gant']);
                        if($ligne10['franchise']    ==0) $franch4=''    ; else  $franch4=number_format($ligne10['franchise']);
                        if($ligne10['prime_brute']  ==0) $brute4=''     ; else  $brute4=number_format($ligne10['prime_brute']);
                        if($ligne10['prime_prorata']==0) $prorata4=''   ; else  $prorata4=number_format($ligne10['prime_prorata']);
                    }
                }
                else
                {
                    $lim4=''; $franch4='';$brute4='';$prorata4='';
                }
                /*************************************************************************/
                $vol=$res->getVol($respons);
                $rowVol=$vol->rowCount();
                if($rowVol==1)
                {
                    foreach ($vol as $ligne11)
                    {
                        if($ligne11['lim_gant']     ==0) $lim5=''       ; else $lim5=number_format($ligne11['lim_gant']);
                        if($ligne11['franchise']    ==0) $franch5=''    ; else $franch5=number_format($ligne11['franchise']);
                        if($ligne11['prime_brute']  ==0) $brute5=''     ; else $brute5=number_format($ligne11['prime_brute']);
                        if($ligne11['prime_prorata']==0) $prorata5=''   ; else $prorata5=number_format($ligne11['prime_prorata']);
                    }
                }
                else
                {
                    $lim5=''; $franch5='';$brute5='';$prorata5='';
                }
                /*****************************************************************************/
                $lib_gant=$res->getLibelle_garantie($respons);
                $tc=0;$aso=0;$pto=0;
             foreach ($lib_gant as $key=>$Base)
              {
                  $libelle=$Base['id_garantie'];
                  if($libelle==7)  {$tc=7;$vri = "TIERCE COMPLETE (TCM)";}
                  if($libelle==8)  {$tc=8;$vri = "TIERCE COLLISION (TCL)";}
                  if($libelle==9)  {$aso=9;$titreAv="AVANCE SUR RECOURS-OPT1";}
                  if($libelle==10) {$aso=10;$titreAv="AVANCE SUR RECOURS-OPT1";}
                  if($libelle==11) {$aso=11;$titreAv="AVANCE SUR RECOURS-OPT3";}
                  if($libelle==12) {$pto=12;$titrePs="PERSONNES TRANSPORTEES OPT1";}
                  if($libelle==13) {$pto=13;$titrePs="PERSONNES TRANSPORTEES OPT2";}
                  if($libelle==14) {$pto=14;$titrePs="PERSONNES TRANSPORTEES OPT3";}
                  $ert=$libelle;
              }
              /**************************************************/
                $bris=$res->getBris($respons);
                $rowBris=$bris->rowCount();
                if($rowBris==1)
                {
                    foreach ($bris as $ligne12)
                    {
                        if($ligne12['lim_gant']     ==0) $lim6=''       ; else $lim6=number_format($ligne12['lim_gant']);
                        if($ligne12['franchise']    ==0) $franch6=''    ; else $franch6=number_format($ligne12['franchise']);
                        if($ligne12['prime_brute']  ==0) $brute6=''     ; else $brute6=number_format($ligne12['prime_brute']);
                        if($ligne12['prime_prorata']==0) $prorata6=''   ; else $prorata6=number_format($ligne12['prime_prorata']);
                    }
                }
                else
                {
                    $lim6=''; $franch6='';$brute6='';$prorata6='';
                }
              /**************************************************/
                $tcm=$res->getTcm($respons);
                $tcl=$res->getTcl($respons);
                $rowtierces=$tcm->rowCount();
                $rowtierces1=$tcl->rowCount();
                if($tc==7)
                {
                    $vri = "TIERCE COMPLETE (TCM)";
                    if($rowtierces==1)
                    {
                        foreach ($tcm as $ligne14)
                        {
                            if($ligne14['lim_gant']     ==0) $lim7=''       ; else $lim7        =number_format(intval($ligne14['lim_gant']));
                            if($ligne14['franchise']    ==0) $franch7=''    ; else $franch7     =number_format(intval($ligne14['franchise']));
                            if($ligne14['prime_brute']  ==0) $brute7=''     ; else $brute7      =number_format(intval($ligne14['prime_brute']));
                            if($ligne14['prime_prorata']==0) $prorata7=''   ; else $prorata7    =number_format(intval($ligne14['prime_prorata']));
                        }
                    }
                    else
                    {
                        $lim7=''; $franch7='';$brute7='';$prorata7='';
                    }
                }
                elseif ($tc==8)
                {
                    $vri = "TIERCE COLLISION (TCL)";
                    if($rowtierces1==1)
                    {
                        foreach ($tcl as $ligne14)
                        {
                            if($ligne14['lim_gant']     ==0) $lim7=''       ; else $lim7        =number_format(intval($ligne14['lim_gant']));
                            if($ligne14['franchise']    ==0) $franch7=''    ; else $franch7     =number_format(intval($ligne14['franchise']));
                            if($ligne14['prime_brute']  ==0) $brute7=''     ; else $brute7      =number_format(intval($ligne14['prime_brute']));
                            if($ligne14['prime_prorata']==0) $prorata7=''   ; else $prorata7    =number_format(intval($ligne14['prime_prorata']));
                        }
                    }
                    else
                    {
                        $lim7=''; $franch7='';$brute7='';$prorata7='';
                    }
                }
                else
                {
                    $vri = "TIERCE COMPLETE (TCM)";
                    $lim7=''; $franch7='';$brute7='';$prorata7='';
                }
                /*************************************************/
                $avance1=$res->getAvance1($respons);
                $avance2=$res->getAvance2($respons);
                $avance3=$res->getAvance3($respons);
                if( $aso==9)
                {
                    foreach ($avance1 as $ligne15)
                    {
                        if($ligne15['lim_gant']     ==0) $lim8=''       ; else $lim8        =number_format(intval($ligne15['lim_gant']));
                        if($ligne15['franchise']    ==0) $franch8=''    ; else $franch8     =number_format(intval($ligne15['franchise']));
                        if($ligne15['prime_brute']  ==0) $brute8=''     ; else $brute8      =number_format(intval($ligne15['prime_brute']));
                        if($ligne15['prime_prorata']==0) $prorata8=''   ; else $prorata8    =number_format(intval($ligne15['prime_prorata']));
                    }
                }
                elseif ($aso==10)
                {
                    foreach ($avance2 as $ligne15)
                    {
                        if($ligne15['lim_gant']     ==0) $lim8=''       ; else $lim8        =number_format(intval($ligne15['lim_gant']));
                        if($ligne15['franchise']    ==0) $franch8=''    ; else $franch8     =number_format(intval($ligne15['franchise']));
                        if($ligne15['prime_brute']  ==0) $brute8=''     ; else $brute8      =number_format(intval($ligne15['prime_brute']));
                        if($ligne15['prime_prorata']==0) $prorata8=''   ; else $prorata8    =number_format(intval($ligne15['prime_prorata']));
                    }
                }
                elseif($aso==11)
                {
                    foreach ($avance3 as $ligne15)
                    {
                        if($ligne15['lim_gant']     ==0) $lim8=''       ; else $lim8        =number_format(intval($ligne15['lim_gant']));
                        if($ligne15['franchise']    ==0) $franch8=''    ; else $franch8     =number_format(intval($ligne15['franchise']));
                        if($ligne15['prime_brute']  ==0) $brute8=''     ; else $brute8      =number_format(intval($ligne15['prime_brute']));
                        if($ligne15['prime_prorata']==0) $prorata8=''   ; else $prorata8    =number_format(intval($ligne15['prime_prorata']));
                    }
                }
                else
                {
                    $titreAv="AVANCE SUR RECOURS";
                    $lim8=''   ;$franch8='';$brute8='';$prorata8='';
                }
                //************************************************/
                $personne1=$res->getPersonne1($respons);
                $personne2=$res->getPersonne2($respons);
                $personne3=$res->getPersonne3($respons);
                if($pto==12)
                {
                    foreach ($personne1 as $ligne16)
                    {
                        if($ligne16['lim_gant']     ==0) $lim9=''       ; else $lim9        =number_format(intval($ligne16['lim_gant']));
                        if($ligne16['franchise']    ==0) $franch9=''    ; else $franch9     =number_format(intval($ligne16['franchise']));
                        if($ligne16['prime_brute']  ==0) $brute9=''     ; else $brute9      =number_format(intval($ligne16['prime_brute']));
                        if($ligne16['prime_prorata']==0) $prorata9=''   ; else $prorata9    =number_format(intval($ligne16['prime_prorata']));
                    }
                }
                elseif($pto==13)
                {
                    foreach ($personne2 as $ligne16)
                    {
                        if($ligne16['lim_gant']     ==0) $lim9=''    ;      else $lim9      =number_format($ligne16['lim_gant']);
                        if($ligne16['franchise']    ==0) $franch9='' ;      else $franch9   =number_format($ligne16['franchise']);
                        if($ligne16['prime_brute']  ==0) $brute9=''  ;      else $brute9    =number_format($ligne16['prime_brute']);
                        if($ligne16['prime_prorata']==0) $prorata9='';      else $prorata9  =number_format($ligne16['prime_prorata']);
                    }
                }
                elseif($pto==14)
                {
                    foreach ($personne3 as $ligne16)
                    {
                        if($ligne16['lim_gant']     ==0) $lim9=''    ;   else $lim9         =number_format($ligne16['lim_gant']);
                        if($ligne16['franchise']    ==0) $franch9='' ;   else $franch9      =number_format($ligne16['franchise']);
                        if($ligne16['prime_brute']  ==0) $brute9=''  ;   else $brute9       =number_format($ligne16['prime_brute']);
                        if($ligne16['prime_prorata']==0) $prorata9='' ;  else $prorata9     =number_format($ligne16['prime_prorata']);
                    }
                }
                else
                {
                    $titrePs="PERSONNES TRANSPORTEES";
                    $lim9=''   ;$franch9='';$brute9='';$prorata9='';
                }
                //****************************************************/
                $assistance=$res->getAssistance($respons);
                $rowAss=$assistance->rowCount();
                if($rowAss==1)
                {
                    foreach ($assistance as $ligne27)
                    {
                        if($ligne27['lim_gant']     ==0) $lim10=''    ;   else $lim10     =$ligne27['lim_gant'];
                        if($ligne27['franchise']    ==0) $franch10='' ;   else $franch10  =$ligne27['franchise'];
                        if($ligne27['prime_brute']==15000 || $ligne27['prime_brute']==10000)
                        {
                            $brute10=number_format($ligne27['prime_brute']);
                        }
                        else
                        {
                            $brute10  =$ligne27['prime_brute'];
                        }
                        if($ligne27['prime_prorata']==15000 || $ligne27['prime_prorata']==10000)
                        {
                            $prorata10=number_format($ligne27['prime_prorata']);
                        }
                        else
                        {
                            $prorata10  =$ligne27['prime_prorata'];
                        }
                    }
                }
                else
                {
                    $lim10=''; $franch10='';$brute10='';$prorata10='';
                }
            // //-------------------------------------
            require_once '../../view/user/etats.php';
        break;
        case 'dotations' :
            $type           = new TypeAttestationDao();
            $attestationDao = new AttestationDao();
          
            $attestations   = $attestationDao->getAttestations();
            require_once '../../view/admin/dotation.php';
        break;
        case 'annulations':
        $annulationsDao = new AnnulationsDao();
        $annulations    = $annulationsDao->getAnnulations();
            require_once '../../view/admin/annulation.php';
        break;
        case 'commandes' :
            $commandesDAO = new CommandesDao();
            $commandes = $commandesDAO->getCommandes();
            require_once '../../view/admin/commandes.php';
        break;
        case 'affectations' :
            $type           = new TypeAttestationDao();
            $attestationDao = new AttestationDao();
            $types          = $type->listTypes();
            $matricule      = $_GET['mat'];
            require_once '../../view/admin/affectations.php';
        break;
        case 'demande_att' :
            require_once '../../view/admin/demande_att.php';
        break;
        case 'prod':
            $i_dao             = new IntermediaireDao();
            $resultat = $i_dao->getAllProduct($_GET['mat']);
            require_once('../../view/admin/consultation_prod.php');
        break;
        default:
            require_once '../../view/error.php';
        break;
    }
}

if(isset($_POST['action']))
{
    switch ($_POST['action']) {
        case 'ajout':
            extract($_POST);
            $ps=new Intermediaire(0,0,0,0,0,$_POST['email'],0);;
            $resultMail= $usdao->getUserByMail($_POST['email']);
            $cpt1=$resultMail->rowCount();
            if($cpt1==0)
            {
                $hash = password_hash('saham',PASSWORD_BCRYPT);
                $us=new Intermediaire($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tel'],$_POST['email'],$hash,2,$_POST['actived']);
                $ok= $usdao->insererUser($us);
            }
            else
            {
                $ko="faux";
            }
            $resultat=$usdao->listUser();
            $intermediaireInfos = $resultMail;
            require_once '../../view/admin/ajout_user.php';

            break;
        case 'modif':
            // echo('ok');
            // $hash = password_hash($_POST['mdp'],PASSWORD_BCRYPT);
            // $us=new Intermediaire($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tel'],$_POST['email'],$hash);
            // $modification=$usdao->modifUser($us);
            // $resultat=$usdao->listUser();
            // require_once'../../view/admin/ajout_user.php';
            break;
                case 'excel':
                $debut     = new DateTime($_POST['debut']);
                $fin       = new DateTime($_POST['fin']);
                $matricule = $_SESSION['matricule'];
                $interval  = $debut->diff($fin);
                $usdao=new PoliceDao();
                $Resultat=$usdao->getAllProduct($_POST['debut'],$_POST['fin']);
                require_once('../../view/admin/production.php');
            break;
            case 'lister':
                require_once('../../view/admin/etats.php');
            break;
            case 'Valider dotation':
           // echo($_POST['intermediaire']);
                $matIntermediaire = $_POST['intermediaire'];
                $type           = new TypeAttestationDao();
                $attestationDao = new AttestationDao();
               $types = $type->listTypes();$totalJaunes = $attestationDao->getJaunesByType();$totalVertes = $attestationDao->getVertesByType();$attestations = $attestationDao->getAttestations();
                function getAttestations(){
                    $serie          = array();
                    for($t=($_POST['debut_serie']);$t<=($_POST['fin_serie']);$t++){
                        array_push($serie,str_pad($t, 7, '0', STR_PAD_LEFT));
                    }
                    return $serie;
                }
                if(($_POST['type_attestation']=="verte")){
                $selectedVertes = getAttestations();
                //var_dump($selectedVertes);
                    for($v=0;$v<count($selectedVertes);$v++){
                        $attestationVerte = new Attestation($selectedVertes[$v],1,NULL, $matIntermediaire,'attribue','restante');
                        $attestationDao->insertDotation($attestationVerte);
                        //var_dump($attestationDao->insertDotation($attestationVerte));
                    }
                }else if(($_POST['type_attestation']=="jaune")){
                    $selectedJaunes = getAttestations();
                   // var_dump($selectedJaunes);
                    for($j=0;$j<count($selectedJaunes);$j++){
                        $attestationJaune = new Attestation($selectedJaunes[$j],2,NULL,$matIntermediaire,'attribue','restante');
                        $attestationDao->insertDotation($attestationJaune);
                        //var_dump($attestationDao->insertDotation($attestationJaune));
                    }
                }else if(($_POST['type_attestation']=="cedeao")){
                    $selectedCedeao = getAttestations();
                    //var_dump($selectedCedeao);
                    for($c=0;$c<count($selectedCedeao);$c++){
                        $attestationCedeao = new Attestation($selectedCedeao[$c],3,NULL, $matIntermediaire,'attribue','restante');
                        $attestationDao->insertDotation($attestationCedeao);
                       // var_dump( $attestationDao->insertDotation($attestationCedeao));
                    }
                }
                require_once '../../view/admin/dotation-succes.php';
            break;
            case 'afficher':
                $i_dao             = new IntermediaireDao();
                $resultat = $i_dao->getAllProductByInt($_POST['hidden_mat'],$_POST['debut'],$_POST['fin']);
                require_once('../../view/admin/afficher.php');
        break;
            case 'Annuler Police' :
            echo($_SESSION['matricule']);
            //echo($_POST ['numero_police']);
                $policeDao = new PoliceDao();
                $policeDao->deletePolice($_POST['numero_police'],$_SESSION['matricule']);
                require_once('../../view/annuler.php');
            break;
            case 'Generer Demande' :
                $annulationDao    = new AnnulationsDao();
                $intermediaireDao = new IntermediaireDao();
                $annulation    = $annulationDao->getAnnulation($_POST['numero_police']);
                $assure        = $annulationDao->getAssure($_POST['numero_police']);
                $primeNette    = $annulationDao->getPN($_POST['numero_police']);
                $intermediaire = $intermediaireDao->getUserByMat($_POST['mat-intermediaire']);
                while($row=$annulation->fetch()){
                    $police = $row[1];
                    $effet  = $row[5];
                    $raison = $row[3];
                }
                while($row=$assure->fetch()){
                    $prenom_assure = $row[0];
                    $nom_assure    = $row[1];
                }
                while($row=$primeNette->fetch()){
                    $prime = $row[0];
                }
                while($row=$intermediaire->fetch()){
                    $mat_int    = $row[0];
                    $nom_int    = $row[1];
                    $prenom_int = $row[2];
                }
                require_once('../../view/admin/demande.php');
            break;
            case 'Generer Commande':
            $commandeDAO = new CommandesDao();
            $commande = $commandeDAO->getCommande($_POST['id_com']);
            while($row=$commande->fetch()){
                $id            = $row[0];
                $date_commande = $row[1];
                $intermediaire = $row[2];
                $n_vertes      = $row[3];
                $n_jaunes      = $row[4];
                $n_cedeao      = $row[5];
                $etat          = $row[6];
            }
                require_once('../../view/admin/fiche_commande.php');
            break;
            case 'Annuler Commande' :
                $commandeDAO = new CommandesDao();
                $commandeDAO->cancelCommande($_POST['id_commande']);
                $commandes = $commandeDAO->getCommandes();
                require_once '../../view/admin/commandes.php';
            break;
            default :
                require_once '../../view/error.php';
            break;
    }
}