<?php
// Démarrage ou restauration de la session
session_start();
// echo $_SESSION['username'];
// echo $_SESSION['password']."<br>";
// echo $_SESSION['mdp']."<br>";
// echo $hash = password_hash('saham',PASSWORD_BCRYPT);
// echo $_SESSION['matricule'];
if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
    header ('location: ./saham-app');
}
if(time()- $_SESSION['timestamp']>1440)
{
    echo"<script>alert('15 Minutes over!');</script>";
    unset($_SESSION['username'],$_SESSION['password'],$_SESSION['matricule']);
    header ('location: ./saham-app');
    exit;
}
else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
require_once '../../model/IntermediaireDao.php';
require_once '../../mapping/Intermediaire.php';
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
require_once '../../mapping/Police.php';
require_once '../../model/PoliceDao.php';
require_once '../../mapping/Attestation.php';
require_once '../../model/AttestationDao.php';
require_once '../../mapping/AttestationCedeao.php';
require_once '../../model/AttestationCedeaoDao.php';
if(isset($_GET['action']))
{
    switch ($_GET['action']) {
        case 'valider':
            $attestationDao = new AttestationDao();
            $cedeao         = new AttestationCedeaoDao();
            $vertes         = $attestationDao->getVertes($_SESSION['matricule']);
            $jaunes         = $attestationDao->getJaunes($_SESSION['matricule']);
            $cedeao         = $attestationDao->getCedeao($_SESSION['matricule']);
            require_once('../../view/user/assurance.php');
        break;
        //Affichage des contrats
        case 'afficher':
            $usPolao  = new PoliceDao();
            $resultat = $usPolao->listPoliceValides($_SESSION['matricule'],'','','','','','','','');
            $cpt1     = $resultat->rowCount();
            require_once('../../view/user/afficherdevis.php');
        break;
        case 'simul':
            require_once ('../../view/user/simulation1.php');
        break;
        //Affichage des devis
        case 'affi':
            $usPolao  = new PoliceDao();
            $resultat = $usPolao->listPolicePreformant($_SESSION['matricule']);
            $cpt1     = $resultat->rowCount();
            require_once('../../view/user/afficher.php');
        break;
        case 'modiferDevis':
            $uspol          = new PoliceDao();
            $attestationDao = new AttestationDao();
            $attestations   = $attestationDao->getAttestations();
            $modifier       = $uspol->getAllProduction($_GET['id_police']);
            $vertes         = $attestationDao->getVertes($_SESSION['matricule']);
            $jaunes         = $attestationDao->getJaunes($_SESSION['matricule']);
            $cedeao         = $attestationDao->getCedeao($_SESSION['matricule']);
            foreach ($modifier as $item)
            {
                 $item['date_debut'];
                 $item['duree'];
                 $item['marque'];
                 $item['type'];
                 $item['immatriculation'];
                 $item['puissance'];
                 $item['valeur_neuve'];
                 $item['valeur_venale'];
                 $item['energie'];
                 $item['places'];
                 $item['libelle_garantie'];
                 $item['chassis'];
                 $item['id_cat'];
                 $item['libelle_categorie'];
                 $item['cylindre'];
                 $item['energie'];
                 $item['charge_utile'];
            }
            require_once('../../view/user/assuranceupdate.php');
        break;
        case 'changeToValider':
            $usPolao=new PoliceDao();
            $usPolao->changeToValider($_GET['id_police']);
            header('Location: ./controller/formulaire/?action=affi');
        break;
        case 'lister':
        $usInt=new IntermediaireDao();
        $int=new Intermediaire($_SESSION['matricule']);
        $intermediaire= $usInt->getUserByMat($_SESSION['matricule']);
        foreach($intermediaire as $ligne18)
        {
            $codeInt=$ligne18['matricule'];
            $nomInt=$ligne18['nom'];
            $prenomInt=$ligne18['prenom'];
        }
        //-------------------------------------
        $usdao=new AssureDao();
        $us=new Assure($_GET['id'],'','','','');
        $Resultat=$usdao->selectAssure($us);
        foreach ($Resultat as $ligne)
        {
            $nomAssure=$ligne['nom_assure'];
            $prenomAssure=$ligne['prenom_assure'];
            $adresseAssure=$ligne['adresse_assure'];
            $telAssure=$ligne['tel_assure'];
        }
        //--------------------------------------
        $usPolao=new PoliceDao();
        $pol=new Police($_GET['id']);
        $podice=$usPolao->selectPolice($pol);
        foreach($podice as $ligne1)
        {
            $codePolice=$ligne1['num_police'];
            $datePolice = new DateTime(substr($ligne1['date_police'],0, 11));
            $datePolice = $datePolice->format('d/m/Y');
            $attestation =$ligne1['attestation'];
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
        $conducteur=$Cvao->selectConducteur($_GET['id']);
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
        //-------------------------------------
        require_once '../../view/user/etats.php';
        break;
    case 'lister1':
        $usInt=new IntermediaireDao();
        $int=new Intermediaire($_SESSION['matricule']);
        $intermediaire= $usInt->getUserByMat($_SESSION['matricule']);
        foreach($intermediaire as $ligne1)
        {
            $codeInt=$ligne1['matricule'];
            $nomInt=$ligne1['nom'];
            $prenomInt=$ligne1['prenom'];
            $adresseInt=$ligne1['adresse'];
            $telInt=$ligne1['tel'];
        }
        //--------------------------------------
        $usPolao=new PoliceDao();
        $pol=new Police($_GET['opli']);
        $podice=$usPolao->selectPolice($pol);
        foreach($podice as $ligne2)
        {
            $codePolice=$ligne2['num_police'];
            $datePolice = new DateTime(substr($ligne2['date_police'],0, 11));
            $datePolice = $datePolice->format('d/m/Y');
            $numFacture=$ligne2['numFacture'];
            $attestation=$ligne2['attestation'];
        }
        //-------------------------------------
        $usdao=new AssureDao();
        $us=new Assure($_GET['opli'],'','','','');
        $Resultat=$usdao->selectAssure($us);
        foreach ($Resultat as $ligne3)
        {
            $nomAssure=$ligne3['nom_assure'];
            $prenomAssure=$ligne3['prenom_assure'];
            $adresseAssure=$ligne3['adresse_assure'];
            $telAssure=$ligne3['tel_assure'];
        }
        //-------------------------------------
        $pdao=new Periode_garantieDao();
        $gant=new Periode_garantie($_GET['opli'],'','','','');
        $periode=$pdao->listPeriode($gant);
        foreach ($periode as $ligne4)
        {
            $dateDebut=DateTime::createFromFormat('Y-m-d', $ligne4['date_debut']);
            $dateFin=DateTime::createFromFormat('Y-m-d', $ligne4['date_fin']);
            $heureDebut=$ligne4['heure_debut'];
            $heureFin=$ligne4['heure_fin'];
            $duree=$ligne4['duree'];
        }
        //--------------------------------------
        $Cvao=new ConducteurVehiculeDao();
        $cond=new Conducteur_vehicule($_GET['opli'],'','','','');
        $conducteur=$Cvao->selectConducteur($_GET['opli']);
        foreach ($conducteur as $ligne5)
        {
            $nomConducteur=$ligne5['nom_conducteur'];
            $prenomConducteur=$ligne5['prenom_conducteur'];
            $anneeConducteur=$ligne5['annee_permis'];
            $dureeConduite=$ligne5['duree_conduite'];
        }
        //-------------------------------------
        $Vdao=new VehiculeDao();
        $voiture=new Vehicule($_GET['opli'],'','','','');
        $vehicule=$Vdao->selectVehicule($voiture);
        foreach ($vehicule as $ligne7)
        {
            $marque             =$ligne7['marque'];
            $type               =$ligne7['type'];
            $immatriculation    =$ligne7['immatriculation'];
            $puissance          =$ligne7['puissance'];
            $energie            =$ligne7['energie'];
            $charge             =$ligne7['charge_utile'];
            $place              =$ligne7['places'];
            $genre              =$ligne7['genre'];
            $chassis            =$ligne7['chassis'];
            $cylindre           =$ligne7['cylindre'];
            $mec                =DateTime::createFromFormat('Y-m-d', $ligne7['date_mec']);
            $val_neuve          =$ligne7['valeur_neuve'];
            $val_venale         =$ligne7['valeur_venale'];
        }
        //-------------------------------------recu cat
        $VCatdao=new VehiculeDao();
        $categorie=$VCatdao->getCatVehicule($voiture);
        foreach ($categorie as $ligne6)
        {
            $libCat=$ligne6['libelle_categorie'];
        }
        //-------------------------------------
        $res=new ContenirDao();
        $respons=new Contenir('','','','','','',$_GET['opli']);
        $reponsable=$res->getResponsabilite($respons);
        foreach ($reponsable as $ligne8)
        {
            $lim1=$ligne8['lim_gant'];
            if($ligne8['franchise']==0 )$franch1='';else $franch1=number_format($ligne8['franchise']);
            $brute1=$ligne8['prime_brute'];
            $prorata1=$ligne8['prime_prorata'];
        }
        //-------------------------------------
        $rti=$res->getRTI($respons);
        $rowRTI=$rti->rowCount();
        if($rowRTI==1)
        {
            foreach ($rti as $ligne9)
            {
                if($ligne9['lim_gant']     ==0) $lim2=''       ; else $lim2=number_format($ligne9['lim_gant']);
                if($ligne9['franchise']    ==0) $franch2=''    ; else $franch2=number_format($ligne9['franchise']);
                $brute2=$ligne9['prime_brute'];
                $prorata2=$ligne9['prime_prorata'];
            }
        }
        else{
            $lim2='';$franch2='';$brute2='';$prorata2='';
        }
        //-------------------------------------
        $defense=$res->getDefense($respons);
        $RowDef=$defense->rowCount();
        if($RowDef==1)
        {
            foreach ($defense as $ligne10)
            {
               if($ligne10['lim_gant']     ==0) $lim3=''       ; else $lim3=number_format($ligne10['lim_gant']);
               if($ligne10['franchise']    ==0) $franch3=''    ; else $franch3=number_format($ligne10['franchise']);
               if($ligne10['prime_brute']  ==0) $brute3=''     ; else $brute3=number_format($ligne10['prime_brute']);
               if($ligne10['prime_prorata']==0) $prorata3=''   ; else $prorata3=number_format($ligne10['prime_prorata']);
            }
        }
        else
        {
            $lim3=''; $franch3='';$brute3='';$prorata3='';
        }
        //-------------------------------------
        $incendie=$res->getIncendie($respons);
        $rowInc=$incendie->rowCount();
        if($rowInc==1)
        {
            foreach ($incendie as $ligne11)
            {
              if($ligne11['lim_gant']     ==0) $lim4=''       ; else  $lim4=number_format($ligne11['lim_gant']);
              if($ligne11['franchise']    ==0) $franch4=''    ; else  $franch4=number_format($ligne11['franchise']);
              if($ligne11['prime_brute']  ==0) $brute4=''     ; else  $brute4=number_format($ligne11['prime_brute']);
              if($ligne11['prime_prorata']==0) $prorata4=''   ; else  $prorata4=number_format($ligne11['prime_prorata']);
            }
        }
        else
        {
            $lim4=''; $franch4='';$brute4='';$prorata4='';
        }
        //-------------------------------------
        $vol=$res->getVol($respons);
        $rowVol=$vol->rowCount();
        if($rowVol==1)
        {
            foreach ($vol as $ligne12)
            {
               if($ligne12['lim_gant']     ==0) $lim5=''       ; else $lim5=number_format($ligne12['lim_gant']);
               if($ligne12['franchise']    ==0) $franch5=''    ; else $franch5=number_format($ligne12['franchise']);
               if($ligne12['prime_brute']  ==0) $brute5=''     ; else $brute5=number_format($ligne12['prime_brute']);
               if($ligne12['prime_prorata']==0) $prorata5=''   ; else $prorata5=number_format($ligne12['prime_prorata']);
            }
        }
        else
        {
            $lim5=''; $franch5='';$brute5='';$prorata5='';
        }
        //-------------------------------------
        $bris=$res->getBris($respons);
        $rowBris=$bris->rowCount();
        if($rowBris==1)
        {
            foreach ($bris as $ligne13)
            {
               if($ligne13['lim_gant']     ==0) $lim6=''       ; else $lim6=number_format($ligne13['lim_gant']);
               if($ligne13['franchise']    ==0) $franch6=''    ; else $franch6=number_format($ligne13['franchise']);
               if($ligne13['prime_brute']  ==0) $brute6=''     ; else $brute6=number_format($ligne13['prime_brute']);
               if($ligne13['prime_prorata']==0) $prorata6=''   ; else $prorata6=number_format($ligne13['prime_prorata']);
            }
        }
        else
        {
            $lim6=''; $franch6='';$brute6='';$prorata6='';
       }
        //-------------------------------------
        $lib_gant=$res->getLibelle_garantie($respons);
        $rowLib=$lib_gant->rowCount();
        $tc=0;$aso=0 ;$pto=0;
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
        }
        //-------------------------------------
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
        //-------------------------------------
        $avance1=$res->getAvance1($respons);
        $avance2=$res->getAvance2($respons);
        $avance3=$res->getAvance3($respons);
        //-------------------------------------
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
        //-------------------------------------
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
        //-------------------------------------
        $assistance=$res->getAssistance($respons);
        $rowAss=$assistance->rowCount();
        if($rowAss==1)
        {
            //echo "llllllllllllllllllllllllllllllllllll".$rowAss;
            foreach ($assistance as $ligne17)
            {
                if($ligne17['lim_gant']     ==0) $lim10=''    ;   else $lim10     =$ligne17['lim_gant'];
                if($ligne17['franchise']    ==0) $franch10='' ;   else $franch10  =$ligne17['franchise'];
                if($ligne17['prime_brute']==15000 || $ligne17['prime_brute']==10000)
                {
                    $brute10=number_format($ligne17['prime_brute']);
                }
                else
                {
                    $brute10  =$ligne17['prime_brute'];
                }
                if($ligne17['prime_prorata']==15000 || $ligne17['prime_prorata']==10000)
                {
                    $prorata10=number_format($ligne17['prime_prorata']);
                }
                else
                {
                    $prorata10  =$ligne17['prime_prorata'];
                }
            }
        }
        else
        {
            $lim10=''; $franch10='';$brute10='';$prorata10='';
        }
        //-------------------------------------
        $Redmaj=new RedMajDao();
        $red_maj=new RedMaj($_GET['opli'],'','','','');
        $bonus=$Redmaj->selectRedMaj($red_maj);
        foreach ($bonus as $ligne18)
        {
            if($ligne18['pourcentageBC']==0) $percentBC=''; else $percentBC=$ligne18['pourcentageBC'];
            if($ligne18['pourcentageRC']==0) $percentRC=''; else $percentRC=$ligne18['pourcentageRC'];
            if($ligne18['bonus_rc']==0)
            {
                $bc='';$percentBC='';
            }
            else
            {
                $bc=number_format($ligne18['bonus_rc']);
            }
            if($ligne18['reduc_com']==0)
            {
                $rc='';$percentRC='';
            }
            else
            {
                $rc=number_format($ligne18['reduc_com']);
            }
        }
        //-------------------------------------
        $Decompte=new Decompte_primeDao();
        $dec_prime=new Decompte_prime($_GET['opli'],'','','','');
        $Prime=$Decompte->selectDecompte($dec_prime);
        foreach ($Prime as $ligne19)
        {
            $taxe           =$ligne19['taxe'];
            $fond           =$ligne19['fond_garantie'];
            $nette          =$ligne19['prime_nette'];
            $totale         =$ligne19['prime_totale'];
            $accessoire     =$ligne19['accessoire'];
        }
        //-------------------------------------
        require_once '../../view/user/CP.php';
        break;
        
        
        case 'lister1':
            $usInt          = new IntermediaireDao();
            $int           = new Intermediaire($_SESSION['matricule']);
            $intermediaire = $usInt->getUserByMat($_SESSION['matricule']);
            foreach($intermediaire as $ligne1)
            {
                $codeInt=$ligne1['matricule'];
                $nomInt=$ligne1['nom'];
                $prenomInt=$ligne1['prenom'];
                $adresseInt=$ligne1['adresse'];
                $telInt=$ligne1['tel'];
            }
            $usPolao=new PoliceDao('','','','','','','','','','','','','','');
            $pol=new Police($_GET['opli'],'','','','','','','','','','','','','');
            $podice=$usPolao->selectPolice($pol);
            foreach($podice as $ligne2)
            {
                $codePolice=$ligne2['num_police'];
                $datePolice = new DateTime(substr($ligne2['date_police'],0, 11));
                $datePolice = $datePolice->format('d/m/Y');
                $numFacture=$ligne2['numFacture'];
                $attestation=$ligne2['attestation'];
            }
            //-------------------------------------
            $usdao=new AssureDao();
            $us=new Assure($_GET['opli'],'','','','');
            $Resultat=$usdao->selectAssure($us);
            foreach ($Resultat as $ligne3)
            {
                $nomAssure=$ligne3['nom_assure'];
                $prenomAssure=$ligne3['prenom_assure'];
                $adresseAssure=$ligne3['adresse_assure'];
                $telAssure=$ligne3['tel_assure'];
            }
            //-------------------------------------
            $pdao=new Periode_garantieDao();
            $gant=new Periode_garantie($_GET['opli'],'','','','');
            $periode=$pdao->listPeriode($gant);
            foreach ($periode as $ligne4)
            {
                $dateDebut=DateTime::createFromFormat('Y-m-d', $ligne4['date_debut']);
                $dateFin=DateTime::createFromFormat('Y-m-d', $ligne4['date_fin']);
                $heureDebut=$ligne4['heure_debut'];
                $heureFin=$ligne4['heure_fin'];
                $duree=$ligne4['duree'];
            }
            //--------------------------------------
            $Cvao=new ConducteurVehiculeDao();
            $cond=new Conducteur_vehicule($_GET['opli'],'','','','');
            $conducteur=$Cvao->selectConducteur($_GET['opli']);
            foreach ($conducteur as $ligne5)
            {
                $nomConducteur=$ligne5['nom_conducteur'];
                $prenomConducteur=$ligne5['prenom_conducteur'];
                $anneeConducteur=$ligne5['annee_permis'];
                $dureeConduite=$ligne5['duree_conduite'];
            }
            //-------------------------------------
            $Vdao=new VehiculeDao();
            $voiture=new Vehicule($_GET['opli'],'','','','');
            $vehicule=$Vdao->selectVehicule($voiture);
            foreach ($vehicule as $ligne7)
            {
                $marque             =$ligne7['marque'];
                $type               =$ligne7['type'];
                $immatriculation    =$ligne7['immatriculation'];
                $puissance          =$ligne7['puissance'];
                $energie            =$ligne7['energie'];
                $charge             =$ligne7['charge_utile'];
                $place              =$ligne7['places'];
                $genre              =$ligne7['genre'];
                $chassis            =$ligne7['chassis'];
                $cylindre           =$ligne7['cylindre'];
                $mec                =DateTime::createFromFormat('Y-m-d', $ligne7['date_mec']);
                $val_neuve          =$ligne7['valeur_neuve'];
                $val_venale         =$ligne7['valeur_venale'];
                // $categorie          =$ligne7['categorie_vehicule_id_cat'];
            }
            //-------------------------------------recu cat
            $VCatdao=new VehiculeDao();
            $categorie=$VCatdao->getCatVehicule($voiture);
            foreach ($categorie as $ligne6)
            {
                $libCat=$ligne6['libelle_categorie'];
            }
            //-------------------------------------
            $res=new ContenirDao();
            $respons=new Contenir('','','','','','',$_GET['opli']);
            $reponsable=$res->getResponsabilite($respons);
            foreach ($reponsable as $ligne8)
            {
                $lim1=$ligne8['lim_gant'];
                if($ligne8['franchise']==0 )$franch1='';else $franch1=number_format($ligne8['franchise']);
                $brute1=$ligne8['prime_brute'];
                $prorata1=$ligne8['prime_prorata'];
            }
            //-------------------------------------
            $rti=$res->getRTI($respons);
            $rowRTI=$rti->rowCount();
            if($rowRTI==1)
            {
                foreach ($rti as $ligne9)
                {
                    if($ligne9['lim_gant']     ==0) $lim2=''       ; else $lim2=number_format($ligne9['lim_gant']);
                    if($ligne9['franchise']    ==0) $franch2=''    ; else $franch2=number_format($ligne9['franchise']);
                    $brute2=$ligne9['prime_brute'];
                    $prorata2=$ligne9['prime_prorata'];
                }
            }
            else{
                $lim2='';$franch2='';$brute2='';$prorata2='';
            }
            //-------------------------------------
            $defense=$res->getDefense($respons);
            $RowDef=$defense->rowCount();
            if($RowDef==1)
            {
                foreach ($defense as $ligne10)
                {
                   if($ligne10['lim_gant']     ==0) $lim3=''       ; else $lim3=number_format($ligne10['lim_gant']);
                   if($ligne10['franchise']    ==0) $franch3=''    ; else $franch3=number_format($ligne10['franchise']);
                   if($ligne10['prime_brute']  ==0) $brute3=''     ; else $brute3=number_format($ligne10['prime_brute']);
                   if($ligne10['prime_prorata']==0) $prorata3=''   ; else $prorata3=number_format($ligne10['prime_prorata']);
                }
            }
            else
            {
                $lim3=''; $franch3='';$brute3='';$prorata3='';
            }
            //-------------------------------------
            $incendie=$res->getIncendie($respons);
            $rowInc=$incendie->rowCount();
            if($rowInc==1)
            {
                foreach ($incendie as $ligne11)
                {
                  if($ligne11['lim_gant']     ==0) $lim4=''       ; else  $lim4=number_format($ligne11['lim_gant']);
                  if($ligne11['franchise']    ==0) $franch4=''    ; else  $franch4=number_format($ligne11['franchise']);
                  if($ligne11['prime_brute']  ==0) $brute4=''     ; else  $brute4=number_format($ligne11['prime_brute']);
                  if($ligne11['prime_prorata']==0) $prorata4=''   ; else  $prorata4=number_format($ligne11['prime_prorata']);
                }
            }
            else
            {
                $lim4=''; $franch4='';$brute4='';$prorata4='';
            }
            //-------------------------------------
            $vol=$res->getVol($respons);
            $rowVol=$vol->rowCount();
            if($rowVol==1)
            {
                foreach ($vol as $ligne12)
                {
                   if($ligne12['lim_gant']     ==0) $lim5=''       ; else $lim5=number_format($ligne12['lim_gant']);
                   if($ligne12['franchise']    ==0) $franch5=''    ; else $franch5=number_format($ligne12['franchise']);
                   if($ligne12['prime_brute']  ==0) $brute5=''     ; else $brute5=number_format($ligne12['prime_brute']);
                   if($ligne12['prime_prorata']==0) $prorata5=''   ; else $prorata5=number_format($ligne12['prime_prorata']);
                }
            }
            else
            {
                $lim5=''; $franch5='';$brute5='';$prorata5='';
            }
            //-------------------------------------
            $bris=$res->getBris($respons);
            $rowBris=$bris->rowCount();
            if($rowBris==1)
            {
                foreach ($bris as $ligne13)
                {
                   if($ligne13['lim_gant']     ==0) $lim6=''       ; else $lim6=number_format($ligne13['lim_gant']);
                   if($ligne13['franchise']    ==0) $franch6=''    ; else $franch6=number_format($ligne13['franchise']);
                   if($ligne13['prime_brute']  ==0) $brute6=''     ; else $brute6=number_format($ligne13['prime_brute']);
                   if($ligne13['prime_prorata']==0) $prorata6=''   ; else $prorata6=number_format($ligne13['prime_prorata']);
                }
            }
            else
            {
                $lim6=''; $franch6='';$brute6='';$prorata6='';
           }
            //-------------------------------------
            $lib_gant=$res->getLibelle_garantie($respons);
            $rowLib=$lib_gant->rowCount();
            $tc=0;$aso=0 ;$pto=0;
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
            }
            //-------------------------------------
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
            //-------------------------------------
            $avance1=$res->getAvance1($respons);
            $avance2=$res->getAvance2($respons);
            $avance3=$res->getAvance3($respons);
            //-------------------------------------
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
            //-------------------------------------
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
            //-------------------------------------
            $assistance=$res->getAssistance($respons);
            $rowAss=$assistance->rowCount();
            if($rowAss==1)
            {
                foreach ($assistance as $ligne17)
                {
                    if($ligne17['lim_gant']     ==0) $lim10=''    ;   else $lim10     =$ligne17['lim_gant'];
                    if($ligne17['franchise']    ==0) $franch10='' ;   else $franch10  =$ligne17['franchise'];
                    if($ligne17['prime_brute']==15000 || $ligne17['prime_brute']==10000)
                    {
                        $brute10=number_format($ligne17['prime_brute']);
                    }
                    else
                    {
                        $brute10  =$ligne17['prime_brute'];
                    }
                    if($ligne17['prime_prorata']==15000 || $ligne17['prime_prorata']==10000)
                    {
                        $prorata10=number_format($ligne17['prime_prorata']);
                    }
                    else
                    {
                        $prorata10  =$ligne17['prime_prorata'];
                    }
                }
            }
            else
            {
                $lim10=''; $franch10='';$brute10='';$prorata10='';
            }
            //-------------------------------------
            $Redmaj=new RedMajDao();
            $red_maj=new RedMaj($_GET['opli'],'','','','');
            $bonus=$Redmaj->selectRedMaj($red_maj);
            foreach ($bonus as $ligne18)
            {
                if($ligne18['pourcentageBC']==0) $percentBC=''; else $percentBC=$ligne18['pourcentageBC'];
                if($ligne18['pourcentageRC']==0) $percentRC=''; else $percentRC=$ligne18['pourcentageRC'];
                if($ligne18['bonus_rc']==0)
                {
                    $bc='';$percentBC='';
                }
                else
                {
                    $bc=number_format($ligne18['bonus_rc']);
                }
                if($ligne18['reduc_com']==0)
                {
                    $rc='';$percentRC='';
                }
                else
                {
                    $rc=number_format($ligne18['reduc_com']);
                }
            }
            //-------------------------------------
            $Decompte  = new Decompte_primeDao();
            $dec_prime = new Decompte_prime($_GET['opli'],'','','','');
            $Prime=$Decompte->selectDecompte($dec_prime);
            foreach ($Prime as $ligne19)
            {
                $taxe           =$ligne19['taxe'];
                $fond           =$ligne19['fond_garantie'];
                $nette          =$ligne19['prime_nette'];
                $totale         =$ligne19['prime_totale'];
                $accessoire     =$ligne19['accessoire'];
            }
            require_once '../../view/user/CP.php';
            break;
//C'est les memes information c'est le type choisi qui va faire la difference
        case 'lister2':
            $usInt=new IntermediaireDao();
            $int=new Intermediaire($_SESSION['matricule']);
            $intermediaire= $usInt->getUserByMat($_SESSION['matricule']);
            foreach($intermediaire as $ligne1)
            {
                $codeInt=$ligne1['matricule'];
                $nomInt=$ligne1['nom'];
                $prenomInt=$ligne1['prenom'];
                $adresseInt=$ligne1['adresse'];
                $telInt=$ligne1['tel'];
            }
            //--------------------------------------
            $usPolao=new PoliceDao();
            $pol=new Police($_GET['opli'],'','','','','','','','','','','','','');
            $podice=$usPolao->selectPolice($pol);
            foreach($podice as $ligne2)
            {
                $codePolice=$ligne2['num_police'];
                $datePolice = new DateTime(substr($ligne2['date_police'],0, 11));
                $datePolice = $datePolice->format('d/m/Y');
                $numFacture=$ligne2['numFacture'];
                $attestation=$ligne2['attestation'];
            }
            //-------------------------------------
            $usdao=new AssureDao();
            $us=new Assure($_GET['opli'],'','','','');
            $Resultat=$usdao->selectAssure($us);
            foreach ($Resultat as $ligne3)
            {
                $nomAssure=$ligne3['nom_assure'];
                $prenomAssure=$ligne3['prenom_assure'];
                $adresseAssure=$ligne3['adresse_assure'];
                $telAssure=$ligne3['tel_assure'];
            }
            
            //-------------------------------------
            $pdao=new Periode_garantieDao();
            $gant=new Periode_garantie($_GET['opli'],'','','','');
            $periode=$pdao->listPeriode($gant);
            foreach ($periode as $ligne4)
            {
                $dateDebut=DateTime::createFromFormat('Y-m-d', $ligne4['date_debut']);
                $dateFin=DateTime::createFromFormat('Y-m-d', $ligne4['date_fin']);
                $heureDebut=$ligne4['heure_debut'];
                $heureFin=$ligne4['heure_fin'];
                $duree=$ligne4['duree'];
            }
            //--------------------------------------
            $Cvao=new ConducteurVehiculeDao();
            $cond=new Conducteur_vehicule($_GET['opli'],'','','','');
            $conducteur=$Cvao->selectConducteur($_GET['opli']);
            foreach ($conducteur as $ligne5)
            {
                $nomConducteur=$ligne5['nom_conducteur'];
                $prenomConducteur=$ligne5['prenom_conducteur'];
                $anneeConducteur=$ligne5['annee_permis'];
                $dureeConduite=$ligne5['duree_conduite'];
            }
            //-------------------------------------
            $Vdao=new VehiculeDao();
            $voiture=new Vehicule($_GET['opli'],'','','','');
            $vehicule=$Vdao->selectVehicule($voiture);
            foreach ($vehicule as $ligne7)
            {
                $marque             =$ligne7['marque'];
                $type               =$ligne7['type'];
                $immatriculation    =$ligne7['immatriculation'];
                $puissance          =$ligne7['puissance'];
                $energie            =$ligne7['energie'];
                $charge             =$ligne7['charge_utile'];
                $place              =$ligne7['places'];
                $genre              =$ligne7['genre'];
                $chassis            =$ligne7['chassis'];
                $cylindre           =$ligne7['cylindre'];
                $mec                =DateTime::createFromFormat('Y-m-d', $ligne7['date_mec']);
                $val_neuve          =$ligne7['valeur_neuve'];
                $val_venale         =$ligne7['valeur_venale'];
            }
            //-------------------------------------recu cat
            $VCatdao=new VehiculeDao();
            $categorie=$VCatdao->getCatVehicule($voiture);
            foreach ($categorie as $ligne6)
            {
                $libCat=$ligne6['libelle_categorie'];
            }
            //-------------------------------------
            $res=new ContenirDao();
            $respons=new Contenir('','','','','','',$_GET['opli']);
            $reponsable=$res->getResponsabilite($respons);
            foreach ($reponsable as $ligne8)
            {
                $lim1=$ligne8['lim_gant'];
                if($ligne8['franchise']==0 )$franch1='';else $franch1=number_format($ligne8['franchise']);
                $brute1=$ligne8['prime_brute'];
                $prorata1=$ligne8['prime_prorata'];
            }
            //-------------------------------------
            $rti=$res->getRTI($respons);
            $rowRTI=$rti->rowCount();
            if($rowRTI==1)
            {
                foreach ($rti as $ligne9)
                {
                    if($ligne9['lim_gant']     ==0) $lim2=''       ; else $lim2=number_format($ligne9['lim_gant']);
                    if($ligne9['franchise']    ==0) $franch2=''    ; else $franch2=number_format($ligne9['franchise']);
                    $brute2=$ligne9['prime_brute'];
                    $prorata2=$ligne9['prime_prorata'];
                }
            }
            else{
                $lim2='';$franch2='';$brute2='';$prorata2='';
            }
            //-------------------------------------
            $defense=$res->getDefense($respons);
            $RowDef=$defense->rowCount();
            if($RowDef==1)
            {
                foreach ($defense as $ligne10)
                {
                   if($ligne10['lim_gant']     ==0) $lim3=''       ; else $lim3=number_format($ligne10['lim_gant']);
                   if($ligne10['franchise']    ==0) $franch3=''    ; else $franch3=number_format($ligne10['franchise']);
                   if($ligne10['prime_brute']  ==0) $brute3=''     ; else $brute3=number_format($ligne10['prime_brute']);
                   if($ligne10['prime_prorata']==0) $prorata3=''   ; else $prorata3=number_format($ligne10['prime_prorata']);
                }
            }
            else
            {
                $lim3=''; $franch3='';$brute3='';$prorata3='';
            }
            //-------------------------------------
            $incendie=$res->getIncendie($respons);
            $rowInc=$incendie->rowCount();
            if($rowInc==1)
            {
                foreach ($incendie as $ligne11)
                {
                  if($ligne11['lim_gant']     ==0) $lim4=''       ; else  $lim4=number_format($ligne11['lim_gant']);
                  if($ligne11['franchise']    ==0) $franch4=''    ; else  $franch4=number_format($ligne11['franchise']);
                  if($ligne11['prime_brute']  ==0) $brute4=''     ; else  $brute4=number_format($ligne11['prime_brute']);
                  if($ligne11['prime_prorata']==0) $prorata4=''   ; else  $prorata4=number_format($ligne11['prime_prorata']);
                }
            }
            else
            {
                $lim4=''; $franch4='';$brute4='';$prorata4='';
            }
            //-------------------------------------
            $vol=$res->getVol($respons);
            $rowVol=$vol->rowCount();
            if($rowVol==1)
            {
                foreach ($vol as $ligne12)
                {
                   if($ligne12['lim_gant']     ==0) $lim5=''       ; else $lim5=number_format($ligne12['lim_gant']);
                   if($ligne12['franchise']    ==0) $franch5=''    ; else $franch5=number_format($ligne12['franchise']);
                   if($ligne12['prime_brute']  ==0) $brute5=''     ; else $brute5=number_format($ligne12['prime_brute']);
                   if($ligne12['prime_prorata']==0) $prorata5=''   ; else $prorata5=number_format($ligne12['prime_prorata']);
                }
            }
            else
            {
                $lim5=''; $franch5='';$brute5='';$prorata5='';
            }
            //-------------------------------------
            $bris=$res->getBris($respons);
            $rowBris=$bris->rowCount();
            if($rowBris==1)
            {
                foreach ($bris as $ligne13)
                {
                   if($ligne13['lim_gant']     ==0) $lim6=''       ; else $lim6=number_format($ligne13['lim_gant']);
                   if($ligne13['franchise']    ==0) $franch6=''    ; else $franch6=number_format($ligne13['franchise']);
                   if($ligne13['prime_brute']  ==0) $brute6=''     ; else $brute6=number_format($ligne13['prime_brute']);
                   if($ligne13['prime_prorata']==0) $prorata6=''   ; else $prorata6=number_format($ligne13['prime_prorata']);
                }
            }
            else
            {
                $lim6=''; $franch6='';$brute6='';$prorata6='';
           }
            //-------------------------------------
            $lib_gant=$res->getLibelle_garantie($respons);
            $rowLib=$lib_gant->rowCount();
            $tc=0;$aso=0 ;$pto=0;
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
            }
            //-------------------------------------
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
            //-------------------------------------
            $avance1=$res->getAvance1($respons);
            $avance2=$res->getAvance2($respons);
            $avance3=$res->getAvance3($respons);
            //-------------------------------------
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
            //-------------------------------------
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
            //-------------------------------------
            $assistance=$res->getAssistance($respons);
            $rowAss=$assistance->rowCount();
            if($rowAss==1)
            {
                foreach ($assistance as $ligne17)
                {
                    if($ligne17['lim_gant']     ==0) $lim10=''    ;   else $lim10     =$ligne17['lim_gant'];
                    if($ligne17['franchise']    ==0) $franch10='' ;   else $franch10  =$ligne17['franchise'];
                    if($ligne17['prime_brute']==15000 || $ligne17['prime_brute']==10000)
                    {
                        $brute10=number_format($ligne17['prime_brute']);
                    }
                    else
                    {
                        $brute10  =$ligne17['prime_brute'];
                    }
                    if($ligne17['prime_prorata']==15000 || $ligne17['prime_prorata']==10000)
                    {
                        $prorata10=number_format($ligne17['prime_prorata']);
                    }
                    else
                    {
                        $prorata10  =$ligne17['prime_prorata'];
                    }
                }
            }
            else
            {
                $lim10=''; $franch10='';$brute10='';$prorata10='';
            }
            //-------------------------------------
            $Redmaj=new RedMajDao();
            $red_maj=new RedMaj($_GET['opli'],'','','','');
            $bonus=$Redmaj->selectRedMaj($red_maj);
            foreach ($bonus as $ligne18)
            {
                if($ligne18['pourcentageBC']==0) $percentBC=''; else $percentBC=$ligne18['pourcentageBC'];
                if($ligne18['pourcentageRC']==0) $percentRC=''; else $percentRC=$ligne18['pourcentageRC'];
                if($ligne18['bonus_rc']==0)
                {
                    $bc='';$percentBC='';
                }
                else
                {
                    $bc=number_format($ligne18['bonus_rc']);
                }
                if($ligne18['reduc_com']==0)
                {
                    $rc='';$percentRC='';
                }
                else
                {
                    $rc=number_format($ligne18['reduc_com']);
                }
            }
            //-------------------------------------
            $Decompte=new Decompte_primeDao();
            $dec_prime=new Decompte_prime($_GET['opli'],'','','','');
            $Prime=$Decompte->selectDecompte($dec_prime);
            foreach ($Prime as $ligne19)
            {
                $taxe           =$ligne19['taxe'];
                $fond           =$ligne19['fond_garantie'];
                $nette          =$ligne19['prime_nette'];
                $totale         =$ligne19['prime_totale'];
                $accessoire     =$ligne19['accessoire'];
            }
            require_once '../../view/user/jaune.php';
            //require_once '../../view/user/etatCedeao2.php';
            break;
        case 'lister3':
            $usInt=new IntermediaireDao();
            $int=new Intermediaire($_SESSION['matricule']);
            $intermediaire= $usInt->getUserByMat($_SESSION['matricule']);
            foreach($intermediaire as $ligne1)
            {
                $codeInt=$ligne1['matricule'];
                $nomInt=$ligne1['nom'];
                $prenomInt=$ligne1['prenom'];
                $adresseInt=$ligne1['adresse'];
                $telInt=$ligne1['tel'];
            }
            //--------------------------------------
            $usPolao=new PoliceDao();
            $pol=new Police($_GET['opli'],'','','','','','','','','','','','','');
            $podice=$usPolao->selectPolice($pol);
            foreach($podice as $ligne2)
            {
                $codePolice=$ligne2['num_police'];
                $datePolice = new DateTime(substr($ligne2['date_police'],0, 11));
                $datePolice = $datePolice->format('d/m/Y');
                $numFacture=$ligne2['numFacture'];
                $attestation=$ligne2['attestation'];
            }
            //-------------------------------------
            
            $usdao=new AssureDao();
            $us=new Assure($_GET['opli'],'','','','');
            $Resultat=$usdao->selectAssure($us);
            foreach ($Resultat as $ligne3)
            {
                $nomAssure=$ligne3['nom_assure'];
                $prenomAssure=$ligne3['prenom_assure'];
                $adresseAssure=$ligne3['adresse_assure'];
                $telAssure=$ligne3['tel_assure'];
            }
            //-------------------------------------
            $pdao=new Periode_garantieDao();
            $gant=new Periode_garantie($_GET['opli'],'','','','');
            $periode=$pdao->listPeriode($gant);
            foreach ($periode as $ligne4)
            {
                $dateDebut=DateTime::createFromFormat('Y-m-d', $ligne4['date_debut']);
                $dateFin=DateTime::createFromFormat('Y-m-d', $ligne4['date_fin']);
                $heureDebut=$ligne4['heure_debut'];
                $heureFin=$ligne4['heure_fin'];
                $duree=$ligne4['duree'];
            }
            //--------------------------------------
            $Cvao=new ConducteurVehiculeDao();
            $cond=new Conducteur_vehicule($_GET['opli'],'','','','');
            $conducteur=$Cvao->selectConducteur($_GET['opli']);
            foreach ($conducteur as $ligne5)
            {
                $nomConducteur=$ligne5['nom_conducteur'];
                $prenomConducteur=$ligne5['prenom_conducteur'];
                $anneeConducteur=$ligne5['annee_permis'];
                $dureeConduite=$ligne5['duree_conduite'];
            }
            //-------------------------------------
            $Vdao=new VehiculeDao();
            $voiture=new Vehicule($_GET['opli'],'','','','');
            $vehicule=$Vdao->selectVehicule($voiture);
            foreach ($vehicule as $ligne7)
            {
                $marque             =$ligne7['marque'];
                $type               =$ligne7['type'];
                $immatriculation    =$ligne7['immatriculation'];
                $puissance          =$ligne7['puissance'];
                $energie            =$ligne7['energie'];
                $charge             =$ligne7['charge_utile'];
                $place              =$ligne7['places'];
                $genre              =$ligne7['genre'];
                $chassis            =$ligne7['chassis'];
                $cylindre           =$ligne7['cylindre'];
                $mec                =DateTime::createFromFormat('Y-m-d', $ligne7['date_mec']);
                $val_neuve          =$ligne7['valeur_neuve'];
                $val_venale         =$ligne7['valeur_venale'];
            }
            //-------------------------------------
            $VCatdao=new VehiculeDao();
            $categorie=$VCatdao->getCatVehicule($voiture);
            foreach ($categorie as $ligne6)
            {
                $libCat=$ligne6['libelle_categorie'];
            }
            //-------------------------------------
            $res=new ContenirDao();
            $respons=new Contenir('','','','','','',$_GET['opli']);
            $reponsable=$res->getResponsabilite($respons);
            foreach ($reponsable as $ligne8)
            {
                $lim1=$ligne8['lim_gant'];
                if($ligne8['franchise']==0 )$franch1='';else $franch1=number_format($ligne8['franchise']);
                $brute1=$ligne8['prime_brute'];
                $prorata1=$ligne8['prime_prorata'];
            }
            //-------------------------------------
            $rti=$res->getRTI($respons);
            $rowRTI=$rti->rowCount();
            if($rowRTI==1)
            {
                foreach ($rti as $ligne9)
                {
                    if($ligne9['lim_gant']     ==0) $lim2=''       ; else $lim2=number_format($ligne9['lim_gant']);
                    if($ligne9['franchise']    ==0) $franch2=''    ; else $franch2=number_format($ligne9['franchise']);
                    $brute2=$ligne9['prime_brute'];
                    $prorata2=$ligne9['prime_prorata'];
                }
            }
            else{
                $lim2='';$franch2='';$brute2='';$prorata2='';
            }
            //-------------------------------------
            $defense=$res->getDefense($respons);
            $RowDef=$defense->rowCount();
            if($RowDef==1)
            {
                foreach ($defense as $ligne10)
                {
                    if($ligne10['lim_gant']     ==0) $lim3=''       ; else $lim3=number_format($ligne10['lim_gant']);
                    if($ligne10['franchise']    ==0) $franch3=''    ; else $franch3=number_format($ligne10['franchise']);
                    if($ligne10['prime_brute']  ==0) $brute3=''     ; else $brute3=number_format($ligne10['prime_brute']);
                    if($ligne10['prime_prorata']==0) $prorata3=''   ; else $prorata3=number_format($ligne10['prime_prorata']);
                }
            }
            else
            {
                $lim3=''; $franch3='';$brute3='';$prorata3='';
            }
            //-------------------------------------
            $incendie=$res->getIncendie($respons);
            $rowInc=$incendie->rowCount();
            if($rowInc==1)
            {
                foreach ($incendie as $ligne11)
                {
                    if($ligne11['lim_gant']     ==0) $lim4=''       ; else  $lim4=number_format($ligne11['lim_gant']);
                    if($ligne11['franchise']    ==0) $franch4=''    ; else  $franch4=number_format($ligne11['franchise']);
                    if($ligne11['prime_brute']  ==0) $brute4=''     ; else  $brute4=number_format($ligne11['prime_brute']);
                    if($ligne11['prime_prorata']==0) $prorata4=''   ; else  $prorata4=number_format($ligne11['prime_prorata']);
                }
            }
            else
            {
                $lim4=''; $franch4='';$brute4='';$prorata4='';
            }
            //-------------------------------------
            $vol=$res->getVol($respons);
            $rowVol=$vol->rowCount();
            if($rowVol==1)
            {
                foreach ($vol as $ligne12)
                {
                    if($ligne12['lim_gant']     ==0) $lim5=''       ; else $lim5=number_format($ligne12['lim_gant']);
                    if($ligne12['franchise']    ==0) $franch5=''    ; else $franch5=number_format($ligne12['franchise']);
                    if($ligne12['prime_brute']  ==0) $brute5=''     ; else $brute5=number_format($ligne12['prime_brute']);
                    if($ligne12['prime_prorata']==0) $prorata5=''   ; else $prorata5=number_format($ligne12['prime_prorata']);
                }
            }
            else
            {
                $lim5=''; $franch5='';$brute5='';$prorata5='';
            }
            //-------------------------------------
            $bris=$res->getBris($respons);
            $rowBris=$bris->rowCount();
            if($rowBris==1)
            {
                foreach ($bris as $ligne13)
                {
                    if($ligne13['lim_gant']     ==0) $lim6=''       ; else $lim6=number_format($ligne13['lim_gant']);
                    if($ligne13['franchise']    ==0) $franch6=''    ; else $franch6=number_format($ligne13['franchise']);
                    if($ligne13['prime_brute']  ==0) $brute6=''     ; else $brute6=number_format($ligne13['prime_brute']);
                    if($ligne13['prime_prorata']==0) $prorata6=''   ; else $prorata6=number_format($ligne13['prime_prorata']);
                }
            }
            else
            {
                $lim6=''; $franch6='';$brute6='';$prorata6='';
            }
            //-------------------------------------
            $lib_gant=$res->getLibelle_garantie($respons);
            $rowLib=$lib_gant->rowCount();
            $tc=0;$aso=0 ;$pto=0;
            foreach ($lib_gant as $key=>$Base)
            {
                $libelle=$Base['id_garantie'];
                if($libelle==7)  {$tc=7;$vri       = "TIERCE COMPLETE (TCM)";}
                if($libelle==8)  {$tc=8;$vri       = "TIERCE COLLISION (TCL)";}
                if($libelle==9)  {$aso=9;$titreAv  = "AVANCE SUR RECOURS-OPT1";}
                if($libelle==10) {$aso=10;$titreAv = "AVANCE SUR RECOURS-OPT1";}
                if($libelle==11) {$aso=11;$titreAv = "AVANCE SUR RECOURS-OPT3";}
                if($libelle==12) {$pto=12;$titrePs = "PERSONNES TRANSPORTEES OPT1";}
                if($libelle==13) {$pto=13;$titrePs = "PERSONNES TRANSPORTEES OPT2";}
                if($libelle==14) {$pto=14;$titrePs = "PERSONNES TRANSPORTEES OPT3";}
            }
            //-------------------------------------
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
            //-------------------------------------
            $avance1=$res->getAvance1($respons);
            $avance2=$res->getAvance2($respons);
            $avance3=$res->getAvance3($respons);
            //-------------------------------------
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
            //-------------------------------------
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
            //-------------------------------------
            $assistance=$res->getAssistance($respons);
            $rowAss=$assistance->rowCount();
            if($rowAss==1)
            {
                foreach ($assistance as $ligne17)
                {
                    if($ligne17['lim_gant']     ==0) $lim10=''    ;   else $lim10     =$ligne17['lim_gant'];
                    if($ligne17['franchise']    ==0) $franch10='' ;   else $franch10  =$ligne17['franchise'];
                    if($ligne17['prime_brute']==15000 || $ligne17['prime_brute']==10000)
                    {
                        $brute10=number_format($ligne17['prime_brute']);
                    }
                    else
                    {
                        $brute10  =$ligne17['prime_brute'];
                    }
                    if($ligne17['prime_prorata']==15000 || $ligne17['prime_prorata']==10000)
                    {
                        $prorata10=number_format($ligne17['prime_prorata']);
                    }
                    else
                    {
                        $prorata10  =$ligne17['prime_prorata'];
                    }
                }
            }
            else
            {
                $lim10=''; $franch10='';$brute10='';$prorata10='';
            }
            //-------------------------------------
            $Redmaj=new RedMajDao();
            $red_maj=new RedMaj($_GET['opli'],'','','','');
            $bonus=$Redmaj->selectRedMaj($red_maj);
            foreach ($bonus as $ligne18)
            {
                if($ligne18['pourcentageBC']==0) $percentBC=''; else $percentBC=$ligne18['pourcentageBC'];
                if($ligne18['pourcentageRC']==0) $percentRC=''; else $percentRC=$ligne18['pourcentageRC'];
                if($ligne18['bonus_rc']==0)
                {
                    $bc='';$percentBC='';
                }
                else
                {
                    $bc=number_format($ligne18['bonus_rc']);
                }
                if($ligne18['reduc_com']==0)
                {
                    $rc='';$percentRC='';
                }
                else
                {
                    $rc=number_format($ligne18['reduc_com']);
                }
            }
            //-------------------------------------
            $Decompte=new Decompte_primeDao();
            $dec_prime=new Decompte_prime($_GET['opli'],'','','','');
            $Prime=$Decompte->selectDecompte($dec_prime);
            foreach ($Prime as $ligne19)
            {
                $taxe           =$ligne19['taxe'];
                $fond           =$ligne19['fond_garantie'];
                $nette          =$ligne19['prime_nette'];
                $totale         =$ligne19['prime_totale'];
                $accessoire     =$ligne19['accessoire'];
            }
            //-------------------------------------
            require_once '../../view/user/verte.php';
            break;
            case 'lister4' :
            $usInt=new IntermediaireDao();
            $int=new Intermediaire($_SESSION['matricule']);
            $intermediaire= $usInt->getUserByMat($_SESSION['matricule']);
            foreach($intermediaire as $ligne1)
            {
                $codeInt=$ligne1['matricule'];
                $nomInt=$ligne1['nom'];
                $prenomInt=$ligne1['prenom'];
                $adresseInt=$ligne1['adresse'];
                $telInt=$ligne1['tel'];
            }
            //--------------------------------------
            $usPolao=new PoliceDao();
            $pol=new Police($_GET['opli'],'','','','','','','','','','','','','');
            $podice=$usPolao->selectPolice($pol);
            foreach($podice as $ligne2)
            {
                $codePolice=$ligne2['num_police'];
                $datePolice = new DateTime(substr($ligne2['date_police'],0, 11));
                $datePolice = $datePolice->format('d/m/Y');
                $numFacture=$ligne2['numFacture'];
                $attestation=$ligne2['attestation'];
            }
            //-------------------------------------
            $usdao=new AssureDao();
            $us=new Assure($_GET['opli'],'','','','');
            $Resultat=$usdao->selectAssure($us);
            foreach ($Resultat as $ligne3)
            {
                $nomAssure=$ligne3['nom_assure'];
                $prenomAssure=$ligne3['prenom_assure'];
                $adresseAssure=$ligne3['adresse_assure'];
                $telAssure=$ligne3['tel_assure'];
            }
            
            //-------------------------------------
            $pdao=new Periode_garantieDao();
            $gant=new Periode_garantie($_GET['opli'],'','','','');
            $periode=$pdao->listPeriode($gant);
            foreach ($periode as $ligne4)
            {
                $dateDebut=DateTime::createFromFormat('Y-m-d', $ligne4['date_debut']);
                $dateFin=DateTime::createFromFormat('Y-m-d', $ligne4['date_fin']);
                $heureDebut=$ligne4['heure_debut'];
                $heureFin=$ligne4['heure_fin'];
                $duree=$ligne4['duree'];
            }
            //--------------------------------------
            $Cvao=new ConducteurVehiculeDao();
            $cond=new Conducteur_vehicule($_GET['opli'],'','','','');
            $conducteur=$Cvao->selectConducteur($_GET['opli']);
            foreach ($conducteur as $ligne5)
            {
                $nomConducteur=$ligne5['nom_conducteur'];
                $prenomConducteur=$ligne5['prenom_conducteur'];
                $anneeConducteur=$ligne5['annee_permis'];
                $dureeConduite=$ligne5['duree_conduite'];
            }
            //-------------------------------------
            $Vdao=new VehiculeDao();
            $voiture=new Vehicule($_GET['opli'],'','','','');
            $vehicule=$Vdao->selectVehicule($voiture);
            foreach ($vehicule as $ligne7)
            {
                $marque             =$ligne7['marque'];
                $type               =$ligne7['type'];
                $immatriculation    =$ligne7['immatriculation'];
                $puissance          =$ligne7['puissance'];
                $energie            =$ligne7['energie'];
                $charge             =$ligne7['charge_utile'];
                $place              =$ligne7['places'];
                $genre              =$ligne7['genre'];
                $chassis            =$ligne7['chassis'];
                $cylindre           =$ligne7['cylindre'];
                $mec                =DateTime::createFromFormat('Y-m-d', $ligne7['date_mec']);
                $val_neuve          =$ligne7['valeur_neuve'];
                $val_venale         =$ligne7['valeur_venale'];
            }
            //-------------------------------------recu cat
            $VCatdao=new VehiculeDao();
            $categorie=$VCatdao->getCatVehicule($voiture);
            foreach ($categorie as $ligne6)
            {
                $libCat=$ligne6['libelle_categorie'];
            }
            //-------------------------------------
            $res=new ContenirDao();
            $respons=new Contenir('','','','','','',$_GET['opli']);
            $reponsable=$res->getResponsabilite($respons);
            foreach ($reponsable as $ligne8)
            {
                $lim1=$ligne8['lim_gant'];
                if($ligne8['franchise']==0 )$franch1='';else $franch1=number_format($ligne8['franchise']);
                $brute1=$ligne8['prime_brute'];
                $prorata1=$ligne8['prime_prorata'];
            }
            //-------------------------------------
            $rti=$res->getRTI($respons);
            $rowRTI=$rti->rowCount();
            if($rowRTI==1)
            {
                foreach ($rti as $ligne9)
                {
                    if($ligne9['lim_gant']     ==0) $lim2=''       ; else $lim2=number_format($ligne9['lim_gant']);
                    if($ligne9['franchise']    ==0) $franch2=''    ; else $franch2=number_format($ligne9['franchise']);
                    $brute2=$ligne9['prime_brute'];
                    $prorata2=$ligne9['prime_prorata'];
                }
            }
            else{
                $lim2='';$franch2='';$brute2='';$prorata2='';
            }
            //-------------------------------------
            $defense=$res->getDefense($respons);
            $RowDef=$defense->rowCount();
            if($RowDef==1)
            {
                foreach ($defense as $ligne10)
                {
                   if($ligne10['lim_gant']     ==0) $lim3=''       ; else $lim3=number_format($ligne10['lim_gant']);
                   if($ligne10['franchise']    ==0) $franch3=''    ; else $franch3=number_format($ligne10['franchise']);
                   if($ligne10['prime_brute']  ==0) $brute3=''     ; else $brute3=number_format($ligne10['prime_brute']);
                   if($ligne10['prime_prorata']==0) $prorata3=''   ; else $prorata3=number_format($ligne10['prime_prorata']);
                }
            }
            else
            {
                $lim3=''; $franch3='';$brute3='';$prorata3='';
            }
            //-------------------------------------
            $incendie=$res->getIncendie($respons);
            $rowInc=$incendie->rowCount();
            if($rowInc==1)
            {
                foreach ($incendie as $ligne11)
                {
                  if($ligne11['lim_gant']     ==0) $lim4=''       ; else  $lim4=number_format($ligne11['lim_gant']);
                  if($ligne11['franchise']    ==0) $franch4=''    ; else  $franch4=number_format($ligne11['franchise']);
                  if($ligne11['prime_brute']  ==0) $brute4=''     ; else  $brute4=number_format($ligne11['prime_brute']);
                  if($ligne11['prime_prorata']==0) $prorata4=''   ; else  $prorata4=number_format($ligne11['prime_prorata']);
                }
            }
            else
            {
                $lim4=''; $franch4='';$brute4='';$prorata4='';
            }
            //-------------------------------------
            $vol=$res->getVol($respons);
            $rowVol=$vol->rowCount();
            if($rowVol==1)
            {
                foreach ($vol as $ligne12)
                {
                   if($ligne12['lim_gant']     ==0) $lim5=''       ; else $lim5=number_format($ligne12['lim_gant']);
                   if($ligne12['franchise']    ==0) $franch5=''    ; else $franch5=number_format($ligne12['franchise']);
                   if($ligne12['prime_brute']  ==0) $brute5=''     ; else $brute5=number_format($ligne12['prime_brute']);
                   if($ligne12['prime_prorata']==0) $prorata5=''   ; else $prorata5=number_format($ligne12['prime_prorata']);
                }
            }
            else
            {
                $lim5=''; $franch5='';$brute5='';$prorata5='';
            }
            //-------------------------------------
            $bris=$res->getBris($respons);
            $rowBris=$bris->rowCount();
            if($rowBris==1)
            {
                foreach ($bris as $ligne13)
                {
                   if($ligne13['lim_gant']     ==0) $lim6=''       ; else $lim6=number_format($ligne13['lim_gant']);
                   if($ligne13['franchise']    ==0) $franch6=''    ; else $franch6=number_format($ligne13['franchise']);
                   if($ligne13['prime_brute']  ==0) $brute6=''     ; else $brute6=number_format($ligne13['prime_brute']);
                   if($ligne13['prime_prorata']==0) $prorata6=''   ; else $prorata6=number_format($ligne13['prime_prorata']);
                }
            }
            else
            {
                $lim6=''; $franch6='';$brute6='';$prorata6='';
           }
            //-------------------------------------
            $lib_gant=$res->getLibelle_garantie($respons);
            $rowLib=$lib_gant->rowCount();
            $tc=0;$aso=0 ;$pto=0;
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
            }
            //-------------------------------------
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
            //-------------------------------------
            $avance1=$res->getAvance1($respons);
            $avance2=$res->getAvance2($respons);
            $avance3=$res->getAvance3($respons);
            //-------------------------------------
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
            //-------------------------------------
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
            //-------------------------------------
            $assistance=$res->getAssistance($respons);
            $rowAss=$assistance->rowCount();
            if($rowAss==1)
            {
                foreach ($assistance as $ligne17)
                {
                    if($ligne17['lim_gant']     ==0) $lim10=''    ;   else $lim10     =$ligne17['lim_gant'];
                    if($ligne17['franchise']    ==0) $franch10='' ;   else $franch10  =$ligne17['franchise'];
                    if($ligne17['prime_brute']==15000 || $ligne17['prime_brute']==10000)
                    {
                        $brute10=number_format($ligne17['prime_brute']);
                    }
                    else
                    {
                        $brute10  =$ligne17['prime_brute'];
                    }
                    if($ligne17['prime_prorata']==15000 || $ligne17['prime_prorata']==10000)
                    {
                        $prorata10=number_format($ligne17['prime_prorata']);
                    }
                    else
                    {
                        $prorata10  =$ligne17['prime_prorata'];
                    }
                }
            }
            else
            {
                $lim10=''; $franch10='';$brute10='';$prorata10='';
            }
            //-------------------------------------
            $Redmaj=new RedMajDao();
            $red_maj=new RedMaj($_GET['opli'],'','','','');
            $bonus=$Redmaj->selectRedMaj($red_maj);
            foreach ($bonus as $ligne18)
            {
                if($ligne18['pourcentageBC']==0) $percentBC=''; else $percentBC=$ligne18['pourcentageBC'];
                if($ligne18['pourcentageRC']==0) $percentRC=''; else $percentRC=$ligne18['pourcentageRC'];
                if($ligne18['bonus_rc']==0)
                {
                    $bc='';$percentBC='';
                }
                else
                {
                    $bc=number_format($ligne18['bonus_rc']);
                }
                if($ligne18['reduc_com']==0)
                {
                    $rc='';$percentRC='';
                }
                else
                {
                    $rc=number_format($ligne18['reduc_com']);
                }
            }
            //-------------------------------------
            $Decompte=new Decompte_primeDao();
            $dec_prime=new Decompte_prime($_GET['opli'],'','','','');
            $Prime=$Decompte->selectDecompte($dec_prime);
            foreach ($Prime as $ligne19)
            {
                $taxe           =$ligne19['taxe'];
                $fond           =$ligne19['fond_garantie'];
                $nette          =$ligne19['prime_nette'];
                $totale         =$ligne19['prime_totale'];
                $accessoire     =$ligne19['accessoire'];
            }
                require_once '../../view/user/cedeao.php';
            break;
        default:
            require_once '../../view/error.php';
            break;
    }
}
if(isset($_POST['action']))
{
    switch ($_POST['action']) {

        case 'Créer contrat':
            if(isset($_GET['id_police']) && !empty($_GET['id_police'])){
                $id_police=$_GET['id_police'];
                require_once 'postUpdate.php';
            }else{
                require_once 'post.php';
            }
                $post=extract($_POST);
                echo $_POST['nom_assure'];
                $usdao2=new ContenirDao();    
        break;  
        case 'Créer devis' :
            require_once 'postUpdate.php';    
        break;

        case 'valider':
            if(isset($_GET['id_police']) && !empty($_GET['id_police'])){
               $id_police=$_GET['id_police'];
               require_once 'postUpdate.php';
           }else{
                require_once 'post.php';
            }
                $post=extract($_POST);
                echo $_POST['nom_assure'];
        $usdao2=new ContenirDao();    
        break;
 
        case 'EXTRAIRE':
        $debut     = new DateTime($_POST['debut']);
        $fin       = new DateTime($_POST['fin']);
        $matricule = $_SESSION['matricule'];
        $interval  = $debut->diff($fin);
            $usdao=new PoliceDao();
            $Resultat=$usdao->getAllProductByInt($_SESSION['matricule'],$_POST['debut'],$_POST['fin']);
            $cpt1=$Resultat->rowCount();
            $info=null;
            if($Resultat==true)
            {
                while($row=$Resultat->fetch())
                {
                    $info [] = array(
                         "NUMÉRO POLICE"                  => $row[0] ,
                         "DATE DE CRÉATION"               => $row[1] ,
                         "NUMÉRO ATTESTATION"             => $row[2] ,
                         "NUMÉRO FACTURE"                 => $row[3] ,
                         "MATRICULE INTERMÉDIAIRE"        => $row[4] ,
                         "NOM INTERMÉDIAIRE"              => $row[5] ,
                         "PRÉNOM INTERMÉDIAIRE"           => $row[6] ,
                         "NOM ASSURÉ"                     => $row[7] ,
                         "PRÉNOM ASSURÉ"                  => $row[8] ,
                         "NOM CONDUCTEUR"                 => $row[9] ,
                         "PRÉNOM CONDUCTEUR"              => $row[10] ,
                         "DATE DÉBUT PERIODE DE GARANTIE" => $row[11] ,
                         "HEURE DÉBUT PÉRIODE DE GARANTIE"   => $row[12] ,
                         "DATE FIN PÉRIODE DE GARANTIE" => $row[13] ,
                         "HEURE FIN PÉRIODE DE GARANTIE" => $row[14] ,
                         "MARQUE VOITURE"                => $row[15] ,
                         "IMMATRICULATION"               => $row[16] ,
                         "GENRE"                         => $row[17] ,
                         "DATE DE MISE EN CIRCULATION"   => $row[18] ,
                         "VALEUR VÉNALE"                 => $row[19] ,
                         "VALEUR À NEUVE"                => $row[20] ,
                         "GARANTIES"                     => $row[21],
                         "RÉCUCTION MAJORATION RC"       => $row[22],
                         "BONUS RC"                      => $row[23],
                         "POURCENTAGE RC"                => $row[24],
                         "RÉDUCTION COMMERCIALE"         => $row[25],
                         "PRIME NETTE"                   => $row[26],
                         "ACCESSOIRES"                   => $row[27],
                         "TAXES"                         => $row[28],
                         "FGA"                           => $row[29],
                         "PRIME TOTALE"                  => $row[30]
                    );
                }
                $filname='production.csv';
                header("Content-type: text/csv;charset=utf-8");
                header("Content-Disposition: attachment; filename=$filname");
                $output = fopen("php://output","w");
                $header=array_keys($info[0]);
                fputcsv($output,$header);
                foreach ($info as $row)
                {
                    fputcsv($output,$row);
                }
                fclose($output);
            }
            else echo "Une erreur s'est produite lors de l'extraction. Veuillez réessayer.";
            // header('Location: ../../pdf.php');
            break;
            
        default:
            require_once '../../view/error.php';
            break;
    }
}