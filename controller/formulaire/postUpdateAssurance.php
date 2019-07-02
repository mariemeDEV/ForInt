<?php
$idPolice = $_POST['idPolice'];
    /**********************LES VALEURS DE L'ASSURE ***********************************/
//echo $_SESSION['matricule'];
 function generateIdVente($length):string{
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
$c1=null; $c4=null;$c7=null;

echo "nom assure".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_assure'],FILTER_SANITIZE_STRING))."<br>";
echo "prenom assure".preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_assure'],FILTER_SANITIZE_STRING))."<br>";
echo "adresse assure".preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['adresse_assure'],FILTER_SANITIZE_STRING))."<br>";
echo " telephone".preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['tel_assure'],FILTER_SANITIZE_NUMBER_INT))."<br>";
echo " email".preg_replace("#[^a-zA-Z- ]]#", "",filter_var($_POST['email_assure'],FILTER_SANITIZE_EMAIL))."<br>";
$Assuredao=new AssureDao();
$usAssure=new Assure($_POST['idPolice'],preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['nom_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^a-zA-Z- ]#", "",filter_var($_POST['prenom_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^A-Za-z0-9- ]#", "",filter_var($_POST['adresse_assure'],FILTER_SANITIZE_STRING)),
                            preg_replace("#[^A-Za-z0-9]#", "",filter_var($_POST['tel_assure'],FILTER_SANITIZE_NUMBER_INT)),
                            preg_replace("#[^a-zA-Z- ]]#", "",filter_var($_POST['email_assure'],FILTER_SANITIZE_EMAIL))
                            );
$okAssure=$Assuredao->updateAssure($usAssure);
if($okAssure==true)
  {
    echo 'ASSURE à jour'."<br>";
    $c1=1;
  }
else
   {
     echo "ASSURE non inserer"."<br>";
  }

/**********************LES VALEURS DU VEHICULE ***********************************/

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
$usVeh=new Vehicule($_POST['idPolice'],$marque,$type,$immatriculation,$puissance,$energie,$charge_utile,$places,$genre,$chassis,$cylindre,$date_mec,$valeur_neuve,$valeur_venale,$nom_chauffeur,$categorie);
$Vdao=new VehiculeDao('','','','','','','','','','','','','','','',$categorie);
$voiture=new Vehicule();
$vehicule=$Vdao->getCatVehicule($voiture);

        $okVeh=$Vehdao->updateVehicule($usVeh);
        if($okVeh==true)
        {
            echo 'VEHICULE insere'."<br>";
            $c4=1;
        }
        else
        {
            echo "VEHICULE non inserer"."<br>";
        }


/*****************************INSERTION DE LA POLICE*****************************************/
echo(date_create()->format('Y-m-d H:i:s'));
$datePolice = date_create()->format('Y-m-d H:i:s');
if($c1==1 && $c4==1){
    $usdao             = new PoliceDao();
    $attestationDao    = new AttestationDao();
    if(isset($_POST['attesta'])){
        $attestationCedeao = $_POST['attesta'];
    }else{
        $attestationCedeao = 'NULL';
    }
    $option            = $_POST['optradio'];
    if($option=='jaune'){
        $attestation      = $_POST['attestation-j'];
    }else if($option=='verte'){
        $attestation       = $_POST['attestation-v'];
    }
    echo("<p style='background:yellow'>ATTESTATION</p> ".$attestation." ".$attestationCedeao.' '.$option);
    $us                = new Police($_POST['idPolice'],'',$datePolice,'',$attestation,1,'En cours','','','','','','','');
    $ok                = $usdao->uptadePolice($us);
    var_dump($ok);
    if($ok==true)
    {
echo "toutes les insertions sont faites<br>";
echo '<p style="backgroud:green">Police inseree</p>'."<br>";
        if($_POST['optradio']=='verte'){
            $idVente = generateIdVente(5);
            if(isset($_POST['attesta'])){
                $attestationDao->setToSoldVertes($_POST['attestation-v'],$idVente);
                $attestationDao->setToSoldCedeao($_POST['attesta'],$idVente);
            }else{
                $attestationDao->setToSoldVertes($_POST['attestation-v'],$idVente);
            }
        }else if($_POST['optradio']=='jaune'){
            $idVente = generateIdVente(5);
            if(isset($_POST['attesta'])){
                $attestationDao->setToSoldJaunes($_POST['attestation-j'],$idVente );
                $attestationDao->setToSoldCedeao($_POST['attesta'],$idVente );
            }else{
                $attestationDao->setToSoldJaunes($_POST['attestation-j'],$idVente );
            }
            
        }
        $c7=1;
    }
    else
    {
        echo "<p style='background:red'>Police non inseree</p>"."<br>";
    }
}

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
        $us1=new Contenir($unikIdCIV,$_POST['lim1'],$_POST['franch1'], $_POST['brute1'],$_POST['prorata1'], '1', $_POST['idPolice']);
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
        $us2=new Contenir($unikIdREC,$_POST['lim2'],$_POST['franch2'], $_POST['brute2'],$_POST['prorata2'],2, $_POST['idPolice']);

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
        $us3=new Contenir($unikIdDEF,$_POST['lim3'],$_POST['franch3'], $_POST['brute3'],$_POST['prorata3'],3, $_POST['idPolice']);

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
        $us4=new Contenir($unikIdINC,$_POST['lim4'],$_POST['franch4'], $_POST['brute4'],$_POST['prorata4'],4, $_POST['idPolice']);

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
          $us5=new Contenir($unikIdVol,$_POST['lim5'],$_POST['franch5'], $_POST['brute5'],$_POST['prorata5'],5, $_POST['idPolice']);
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
        $us6=new Contenir($unikIdBRIS,$_POST['lim6'],$_POST['franch6'], $_POST['brute6'],$_POST['prorata6'],6, $_POST['idPolice']);
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
        $us7=new Contenir($unikICOM,$_POST['lim7'],$_POST['franch7'], $_POST['brute7'],$_POST['prorata7'],7, $_POST['idPolice']);

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
                 $us7=new Contenir($unikIdCOL,$_POST['lim7'],$_POST['franch7'], $_POST['brute7'],$_POST['prorata7'],8, $_POST['idPolice']);

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
            $us8=new Contenir($unikIdAV,$lim8,$franch8,$brute8,$prorata8,9, $_POST['idPolice']);

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
            $us8=new Contenir($unikIdAV,$lim8,$franch8,$brute8,$prorata8,10, $_POST['idPolice']);

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
           $us8=new Contenir($unikIdAV,$lim8,$franch8,$brute8,$prorata8,11, $_POST['idPolice']);

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
            $us9=new Contenir($unikIdPERS,$lim9,$franch9,$brute9,$prorata9,12, $_POST['idPolice']);

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
            $us9=new Contenir($unikIdPERS,$lim9,$franch9,$brute9,$prorata9,13, $_POST['idPolice']);

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
            $us9=new Contenir($unikIdPERS,$lim9,$franch9,$brute9,$prorata9,14, $_POST['idPolice']);

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
            $us10=new Contenir($unikIdAUT,$_POST['lim10'],$_POST['franch10'], $_POST['brute10'],$_POST['prorata10'],15, $_POST['idPolice']);
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
    print "
    <!doctype html>
    <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"refresh\" content=\"5; URL=javascript:window.open('http://google.com','_parent');\">
            <meta name=\"viewport\"content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
            <title>Document</title>
        </head>
        <script>
            function getCP(){
                var a ='../../controller/formulaire/?action=lister1&opli=$idPolice&att=$attestationCedeao';
                window.location.href='../../controller/formulaire/?action=valider';
                window.open(a);
            }
            function getOne(){
                var cat = $categorie;
                if(cat!='4'){
                    var b ='../../controller/formulaire/?action=lister2&opli=$idPolice';
                    window.location.href='../../controller/formulaire/?action=valider';
                    window.open(b);
                }else{
                    var c ='../../controller/formulaire/?action=lister3&opli=$idPolice';
                    window.location.href='../../controller/formulaire/?action=valider';
                    window.open(c);
                }
            }
            function getCedeao(){
                var cat = $categorie;
                if(cat!='5'){
                    var d ='../../controller/formulaire/?action=lister4&opli=$idPolice';
                    window.location.href='../../controller/formulaire/?action=valider';
                    window.open(d)
                }else{}
               
            }
        </script>
        <body onload='getCP();getOne();getCedeao()'></body>
    </html>";
}
else{
   header('Location: ./?action=none');
}
