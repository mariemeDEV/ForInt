
document.getElementById('date_debut').valueAsDate = new Date();
function CalculeBC()
{
    var varDate       =   null;
    var puissance     = document.getElementById('puissance').value;
    var cylindre      = document.getElementById('cylindre').value;
    var valeur_venale = document.getElementById('val_venale').value;
    var valeur_neuve  = document.getElementById('val_neuve').value;
    var genre_v       = document.getElementById('categorie').value;
    var mois          = document.getElementById('duree').value;
    var x             = document.getElementById("energie").selectedIndex;
    var option        = document.getElementsByTagName("option")[x].value
    var nrj
    if(option=="essence"){
        nrj="Essence"
    }if(option=="diesel"){
        nrj="Diesel"
    }
    alert
    var xD            = document.getElementById("date_debut").value;
    var xF            = document.getElementById("date_fin").value;
    var xMEC          = document.getElementById("mec").value;
    var DateDebut     = xD.substring(0, 10);
    var DateFin       = xF.substring(0, 10);
    var ynew3         = new Date(DateDebut);
    var ynew1         = new Date(DateFin);
    var andif         = ynew3-ynew1;
    var ynew2         = new Date(DateDebut);
    var d             = new Date(DateDebut);
    var demain        = new Date();
    document.getElementById("nom_conducteur").value    = document.getElementById("nom_assure").value;
    document.getElementById("prenom_conducteur").value = document.getElementById("prenom_assure").value;
 

    if((demain.getTime()-ynew2.getTime())>86400000)
   {
       varDate=0;
       document.getElementById('date_debut').style.borderColor='#ff1309';
       $('[data-toggle="popover"]').popover();
    }
    else
    {
        varDate=1;
        document.getElementById('date_debut').style.borderColor="green";
    }

    d.setTime(d.getTime() - (24 * 3600 * 1000));
  // alert("Demain nous serons le "+demain.getDate()+"/"+(demain.getMonth()+1)+"/"+demain.getFullYear())
    var month1 = Number(d.getMonth());
    d.setMonth(month1+Number(mois));
    var month  = Number(d.getMonth()+1);//j'ajout +1 au mois car en javascript le mois commence par 0 et se termine par 11
    var day    = Number(d.getDate());
    if(month<10)
    {
        month="0"+month;
    }
    if(day<10)
    {
        day="0"+day;
    }
    var years     = d.getFullYear();
    var inputYear = (years+" - "+month+" - "+day).toString();
    document.getElementById("date_fin").value = inputYear;
    document.getElementById("demo").innerHTML = "<strong>Date Echeance : </strong>"+day+"/"+month+"/"+years;
    //------------diffrence années---------------------------------------
    var ynew   = new Date(xMEC);
    var DiffAn = Number((ynew2.getTime() - ynew.getTime()) / 31536000000).toFixed(0);

    //------------ faiencee années---------------------------------------
    var newDate = ynew2;
    newDate.setUTCMonth(newDate.getUTCMonth()+3);

    var mec          = document.getElementById('mec').value;
    var today1       = new Date();
    var today2       = today1.getFullYear();
    var annee        = Number(DiffAn)+1; //a changer et recuperer l'année
    var e = document.getElementById("energie");
    var strUser = e.options[e.selectedIndex].value;
    var nrj          = document.getElementById('energie').value;
    var charge_utile = document.getElementById('charge').value;


    //------------------------DETERMINATION  DU GENRE DE VEHICULE------------------
    if(genre_v==1)
    {
        document.getElementById("Checkbox2").checked   = true;//recours des tiers et incendie
        document.getElementById("Checkbox265").checked = true;//
        document.getElementById('genre1').value        = ' promenade et affaires personne physique';
        document.getElementById('genre').value         = ' PAPP';
        document.getElementById("Checkbox10").checked  = true;
        document.getElementById("Checkbox101").checked = true;
        $("#pack").fadeOut();
        $("#charge").fadeOut();
       /* $("#places").fadeIn();
        $("#places1").fadeOut();
        $("#placeSup").fadeOut();*/
        //$("#places1").fadeOut();
        document.getElementById("places").disabled            = false;
        document.getElementById("places1").disabled           = true;
        document.getElementById("pack").options[0].selected   = true;
        document.getElementById("charge").options[0].selected = true;
    }
    if (genre_v==2)
    {
        document.getElementById("Checkbox2").checked    = true;//recours des tiers et incendie
        document.getElementById("Checkbox265").checked  = true;//
        document.getElementById('genre1').value         = 'transport pour propre compte';
        document.getElementById('genre').value          = 'TPC';
        document.getElementById("Checkbox10").checked   = true;
        document.getElementById("Checkbox101").checked  = true;
        $("#pack").fadeOut();
        $("#charge").fadeIn();
        document.getElementById("places").disabled          = false;
        document.getElementById("places1").disabled         = true;
        document.getElementById("pack").options[0].selected = true;
    }
    if (genre_v==3)
    {
        document.getElementById("Checkbox2").checked    = true;//recours des tiers et incendie
        document.getElementById("Checkbox265").checked  = true;//
        document.getElementById('genre1').value         = 'transport public de marchandises';
        document.getElementById('genre').value          = 'TPM';
        document.getElementById("Checkbox10").checked   = true;
        document.getElementById("Checkbox101").checked  = true;
        document.getElementById("Checkbox7_1").disabled = true;
        document.getElementById("Checkbox7_1").checked  = false;
        $("#pack").fadeOut();
        $("#charge").fadeIn();
       /*$("#places").fadeIn();
        $("#places1").fadeOut();
        $("#placeSup").fadeOut();*/
        document.getElementById("places").disabled          = false;
        document.getElementById("places1").disabled         = true;
        document.getElementById("pack").options[0].selected = true;
    }
    if (genre_v==4)
    {
        document.getElementById('genre1').value         = 'transport public de voyageurs';
        document.getElementById('genre').value          = 'TPV';
        document.getElementById("Checkbox3").disabled   = true;
        document.getElementById("Checkbox3").checked    = false;
        document.getElementById("Checkbox10").checked   = false;
        document.getElementById("Checkbox101").checked  = false;
        document.getElementById("Checkbox7_1").disabled = true;
        document.getElementById("Checkbox7_1").checked  = false;
        $("#pack").fadeOut();
        $("#charge").fadeIn();
        $("#places").fadeOut();
        $("#places1").fadeIn();
        $("#placeSup").fadeIn();
        document.getElementById("places").disabled        = true;
        document.getElementById("places1").disabled       = false;
        var places=document.getElementById('places1').value;
        document.getElementById("pack").options[0].selected=true;
    }
    if (genre_v==5)
    {
        document.getElementById("puissance").disabled=true;
        document.getElementById("puissance").value=null;
        document.getElementById('genre1').value = '2 roues';
        document.getElementById('genre').value = '2 roues';
        document.getElementById("Checkbox2").checked = true;//recours des tiers et incendie
        document.getElementById("Checkbox265").checked = true;//
        document.getElementById("Checkbox3").disabled = false;
        //document.getElementById("Checkbox3").checked = true;
        document.getElementById("Checkbox4").disabled = true;
        document.getElementById("Checkbox4").checked = false;
        document.getElementById("Checkbox5").disabled = true;
        document.getElementById("Checkbox5").checked = false;
        document.getElementById("Checkbox6").disabled = true;
        document.getElementById("Checkbox6").checked = false;
        document.getElementById("Checkbox7_1").disabled = true;
        document.getElementById("Checkbox7_1").checked = false;
        document.getElementById("Checkbox7_2").disabled = true;
        document.getElementById("Checkbox7_2").checked = false;
        document.getElementById("Checkbox8").disabled = true;
        document.getElementById("Checkbox8").options[0].selected=true;
        document.getElementById("Checkbox9").disabled = true;
        document.getElementById("Checkbox9").options[0].selected=true;
        document.getElementById("Checkbox10").disabled = false;
        document.getElementById("Checkbox10").checked = true;
        document.getElementById("Checkbox101").checked = true;
        document.getElementById('chassis').disabled = false;
        document.getElementById('cylindre').disabled = false;
        var lim_gant_ck3=0;
        var franch_3=0;
        var primebrute_3=0;
        var primebrute_prorata_3=0;
        // alert(lim_gant_ck3);
        // alert("lim_gant_ck3"+lim_gant_ck3+' prime brute3'+primebrute_3+' prorata3'+primebrute_prorata_3);
        document.getElementById('lim3').value=0;
        document.getElementById('franch3').value=0;
        document.getElementById('brute3').value=0;
        document.getElementById('prorata3').value=0;
        document.getElementById('PrimeDefense').value=0;

        var lim_gant_ck4=0;
        var franch_4=0;
        var primebrute_4=0;
        primebrute_prorata_4=0;
        // alert("lim_gant_ck4"+lim_gant_ck4);
        document.getElementById('lim4').value=0;
        document.getElementById('franch4').value=0;
        document.getElementById('brute4').value=0;
        document.getElementById('prorata4').value=0;
        document.getElementById('PrimeIncendie').value=0;

        var lim_gant_ck5=0;
        var franch_5=0;
        var primebrute_5=0;
        var primebrute_prorata_5=0;
        // alert("lim_gant_ck5"+lim_gant_ck5);
        document.getElementById('lim5').value=0;
        document.getElementById('franch5').value=0;
        document.getElementById('brute5').value=0;
        document.getElementById('prorata5').value=0;
        document.getElementById('PrimeVol').value=0;
        $("#pack").fadeOut();
        $("#charge").fadeOut();
       /* $("#places").fadeIn();
        $("#places1").fadeOut();
        $("#placeSup").fadeOut();*/
        document.getElementById("places").disabled=false;
        document.getElementById("places1").disabled=true;
        document.getElementById("charge").options[0].selected=true;
        document.getElementById("pack").options[0].selected=true;
    }
    if(genre_v !=5)
    {
        document.getElementById("Checkbox3").disabled = false;
        document.getElementById("Checkbox4").disabled = false;
        document.getElementById("Checkbox5").disabled = false;
        document.getElementById("Checkbox6").disabled = false;
        document.getElementById("Checkbox7_1").disabled = true;
        document.getElementById("Checkbox7_2").disabled = true;
        document.getElementById("Checkbox8").disabled = false;
        document.getElementById("Checkbox9").disabled = false;
        document.getElementById("Checkbox10").disabled = false;
        document.getElementById('chassis').disabled = true;
        document.getElementById('cylindre').disabled = true;
        document.getElementById('cylindre').value = null;
        document.getElementById("puissance").disabled=false;
    }
    if(genre_v !=4)
    {
        document.getElementById("Checkbox3").disabled = false;
        $("#places").fadeIn();
        $("#places1").fadeOut();
        $("#placeSup").fadeOut();
        document.getElementById("places").disabled=false;
        document.getElementById("places1").disabled=true;
        var places=document.getElementById('places').value;
    }
    /******************************TEST SUR LES PACK****************************************/
    var pack=document.getElementById("pack").value;
    if(genre_v==6)
    {
        //alert("genre="+genre_v);
        document.getElementById('duree').value=12;
        document.getElementById("Checkbox2").checked = false;//recours des tiers et incendie
        document.getElementById("Checkbox265").checked = false;//
        document.getElementById("Checkbox3").checked = true;//defense et recours
        document.getElementById('genre1').value = 'Pack auto';
        document.getElementById('genre').value = 'Pack auto';
        document.getElementById('Checkbox9').options[3].selected = true
        $("#pack").fadeIn();
        $("#charge").fadeOut();
        document.getElementById("charge").options[0].selected=true;
        if(pack=="mini")
        {
            //alert("pack="+pack);
            document.getElementById("Checkbox4").disabled = true;
            document.getElementById("Checkbox4").checked = false;
            document.getElementById("Checkbox5").disabled = true;
            document.getElementById("Checkbox5").checked = false;
            document.getElementById("Checkbox6").disabled = true;
            document.getElementById("Checkbox6").checked = false;
            document.getElementById("Checkbox7_1").disabled = true;
            document.getElementById("Checkbox7_1").checked = false;
            document.getElementById("Checkbox7_2").disabled = true;
            document.getElementById("Checkbox7_2").checked = false;
            document.getElementById("Checkbox8").disabled = true;
            document.getElementById("Checkbox8").options[0].selected=true;
        }
        if(pack=="classic")
        {
            //alert("pack choisie "+pack);
            document.getElementById("Checkbox4").checked = true;
            document.getElementById("Checkbox5").checked = true;
            document.getElementById("Checkbox6").checked = true;
            document.getElementById("Checkbox7_1").disabled = true;
            document.getElementById("Checkbox7_1").checked = false;
            document.getElementById("Checkbox7_2").disabled = true;
            document.getElementById("Checkbox7_2").checked = false;
            document.getElementById("Checkbox8").disabled = true;
            document.getElementById("Checkbox8").options[1].selected=true;
        }
        if (pack=="confort"){
            //alert( "je suis le pack confort");
            document.getElementById("Checkbox4").checked = true;
            document.getElementById("Checkbox5").checked = true;
            document.getElementById("Checkbox6").checked = true;
            document.getElementById("Checkbox7_1").disabled = true;
            document.getElementById("Checkbox7_1").checked = false;
            document.getElementById("Checkbox7_2").disabled = false;
            document.getElementById("Checkbox7_2").checked = true;
            document.getElementById("Checkbox8").disabled = true;
            document.getElementById("Checkbox8").options[0].selected=true;
        }
        if(pack=="liberte")
        {
            //alert("je suis le pack liberte");
            document.getElementById("Checkbox4").checked = true;
            document.getElementById("Checkbox5").checked = true;
            document.getElementById("Checkbox6").checked = true;
            document.getElementById("Checkbox7_1").disabled = false;
            document.getElementById("Checkbox7_1").checked = true;
            document.getElementById("Checkbox7_2").disabled = true;
            document.getElementById("Checkbox7_2").checked = false;
            document.getElementById("Checkbox8").disabled = true;
            document.getElementById("Checkbox8").options[0].selected=true;
        }
        //alert("pack="+pack);
    }

    /**********************************************************************/


    //alert("genre"+document.getElementById('genre');
    //------------------------FIN DETERMINATION DU GENRE DE VEHICULE--------------------
    //------------------------CALCUL DU TAUX------------------
    if (mois==1) {var taux=8.75;  }
    else if(mois==2) {var taux=2*(8.75)}
    else if(mois==3) {var taux=3*(8.75)}
    else if(mois==4) {var taux=4*(8.75)}
    else if(mois==5) {var taux=5*(8.75)}
    else if(mois==6) {var taux=6*(8.75)}
    else if(mois==7) {var taux=7*(8.75)}
    else if(mois==8) {var taux=8*(8.75)}
    else if(mois==9) {var taux=9*(8.75)}
    else{ var taux=100}
   // alert('taux: '+taux);

    //------------------------ANNULATION DES CHECKBOX LIES A LA CATEGORIE 5------------------

    /* if(genre_v!=4)
     {
         document.getElementById("Checkbox3").disabled = false;
     }
     else if (genre_v==5 )
     {
     }*/



    //------------------------FIN CALCUL DU TAUX------------------

//alert('categorie'+genre_v);

    //*************************CONDITION POUR LE CHECKBOX 1:RESPONSABILITE CIVILE *********************** */
    if (Checkbox1.checked == 1 ) {
        //alert("checked0");
        if(genre_v==1 || genre_v==6)
        {
            //alert("checked1");
            if (puissance<=2) {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=37601     //prime brute
                // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
            }
            if(puissance==3 || puissance==4 || puissance==5 || puissance==6) {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=45181;     //prime brute
                // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);

            }
            if (puissance==7 || puissance==8 ||puissance==9 ||  puissance==10)
            {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=51078;     //prime brute
                //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);

            }
            if (puissance==11 || puissance==12 || puissance==13 || puissance==14)
            {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=65677;//prime brute
                //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);

            }
            if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23 || puissance==24)
            {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=86456;     //prime brute
                //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);

            }
            if (puissance>24 )
            {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=104143;    //prime brute
                //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);

            }
            var primebrute_prorata_1=parseInt(primebrute_1*(taux/100));
        }
        if(genre_v==2){
            console.log(places+' '+varDate + ' ' + puissance + ' '+ cylindre+' '+valeur_venale+' '+valeur_neuve+' '+genre_v+' '+mois+' '+nrj+' '+charge_utile)

            if(nrj=='essence')
            {
                if(charge_utile=='Break')
                {
                    if (puissance<=2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=56958     //prime brute
                    }
                    if(puissance==3 || puissance==4 || puissance==5 || puissance==6) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=67644;     //prime brute
                    }
                    if (puissance==7 || puissance==8 ||puissance==9 ||  puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=78974;     //prime brute
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=113944;//prime brute
                    }
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23 || puissance==24)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=146969;     //prime brute
                    }
                    if (puissance>24 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=174491;    //prime brute
                    }
                }
                if(charge_utile=='Moins de 3,5T')
                {
                    if (puissance<=2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=88759     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==3 || puissance==4 || puissance==5 || puissance==6) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=101048;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==7 || puissance==8 ||puissance==9 ||  puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=127880;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=168085;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23 || puissance==24)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=206063;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>24 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=237710;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }
                if(charge_utile=='Plus de 3,5T')
                {
                  //  alert('charge_utile='+charge_utile);
                    if (puissance<=2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=91294     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==3 || puissance==4 || puissance==5 || puissance==6) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=103580;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==7 || puissance==8 ||puissance==9 ||  puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=130415;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);

                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=170617;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23 || puissance==24)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=208597;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>24 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=240245;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }

                }
            }
            if(nrj=='diesel')
            {
               // alert('energie='+nrj);

                if(charge_utile=='Break')
                {
                 //   alert('charge_utile='+charge_utile);
                    if (puissance<2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=56958     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==2 || puissance==3 || puissance==4) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=67644;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==5 || puissance==6 ||puissance==7)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=78974;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==8 || puissance==9 || puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=113944;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14 || puissance==15 || puissance==16 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=146969;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==17 ||puissance>17)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=174491;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }
                if(charge_utile=='Moins de 3,5T')
                {
                   // alert('charge_utile='+charge_utile);
                    if (puissance<2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=88759     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==2 || puissance==3 || puissance==4) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=101048;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==5 || puissance==6 ||puissance==7)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=127880;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==8 || puissance==9 || puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=168085;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14 || puissance==15 || puissance==16)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=206063;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==17 ||puissance>17 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=237710;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }
                if(charge_utile=='Plus de 3,5T')
                {
                   // alert('charge_utile='+charge_utile);
                    if (puissance<2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=91294     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==2 || puissance==3 || puissance==4) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=103580;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==5 || puissance==6 ||puissance==7)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=130415;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==8 || puissance==9 || puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=170617;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14 || puissance==15 || puissance==16)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=208597;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==17 ||puissance>17  )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=240245;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }

            }
            var primebrute_prorata_1=parseInt(primebrute_1*(taux/100));
        }
        if(genre_v==3)
        {
          //  alert("checked3");
            if(nrj=='essence')
            {
             //   alert('energie='+nrj);
                if(charge_utile=='Moins de 3,5T')
                {
                  //  alert('charge_utile='+charge_utile);
                    if (puissance<=2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=115559     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==3 || puissance==4 || puissance==5 || puissance==6) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=133050;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==7 || puissance==8 ||puissance==9 ||  puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=165601;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=222270;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23 || puissance==24)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=293130;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>24 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=328955;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }
                if(charge_utile=='Plus de 3,5T')
                {
                  //  alert('charge_utile='+charge_utile);
                    if (puissance<=2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=117937     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==3 || puissance==4 || puissance==5 || puissance==6) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=135437;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==7 || puissance==8 ||puissance==9 ||  puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=167982;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=224650;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23 || puissance==24)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=285510;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>24 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=331336;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }
            }
            if(nrj=='diesel')
            {
               // alert('energie='+nrj);
                if(charge_utile=='Moins de 3,5T')
                {
                 //   alert('charge_utile='+charge_utile);
                    if (puissance<2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=115559     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==2 || puissance==3 || puissance==4) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=133050;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==5 || puissance==6 ||puissance==7)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=165601;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==8 || puissance==9 || puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=222270;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14 || puissance==15 || puissance==16)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=283130;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==17 ||puissance>17 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=328955;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }
                if(charge_utile=='Plus de 3,5T')
                {
                  //  alert('charge_utile='+charge_utile);
                    if (puissance<2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=117937     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==2 || puissance==3 || puissance==4) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=135437;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==5 || puissance==6 ||puissance==7)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=167982;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==8 || puissance==9 || puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=224650;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14 || puissance==15 || puissance==16)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=285510;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==17 ||puissance>17  )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=331336;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }

            }
            var primebrute_prorata_1=parseInt(primebrute_1*(taux/100));
        }
        if(genre_v==5)
        {
           // alert('categorie='+genre_v);
            if(cylindre<=49)
            {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=18780;    //prime brute
            }
            if(cylindre>=50 && cylindre<=125)
            {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=29448;    //prime brute
            }
            if(cylindre>125)
            {
                var lim_gant_ck1='ILLIMITE' // garantie
                var franch_1=0;             //franchise
                var primebrute_1=34021;    //prime brute
            }
            var primebrute_prorata_1=parseInt(primebrute_1*(taux/100));
        }
        if(genre_v==4)
        {
            console.log(places+' '+varDate + ' ' + puissance + ' '+ cylindre+' '+valeur_venale+' '+valeur_neuve+' '+genre_v+' '+mois+' '+nrj+' '+charge_utile)
            
            var lim_gant_ck1='ILLIMITE' // garantie
            var franch_1=0;             //franchise
           // document.getElementById('puissance').style.backgroundColor='#ff1309';
            if(nrj=='essence')
            {
                if(places==4)
                {
                    alert("ok")
                    // if(puissance>=7 && puissance<=10)
                    // {
                    //     //alert('allo papa');
                    //     var primebrute_1=12772;    //prime brute
                    // }
                    // if (puissance>=11 && puissance<=14)
                    // {
                    //    // alert("nooooooooo");
                    //     var primebrute_1=17162;    //prime brute
                    // }

                   // var primebrute_1=34021;    //prime brute
                }
                if(places==7)
                {
                    if(puissance>=7 && puissance<=10)
                    {
                        //alert('allo papa');
                        var primebrute_1=18912;    //prime brute
                    }
                    if (puissance>=11 && puissance<=14)
                    {
                        // alert("nooooooooo");
                        var primebrute_1=23302;    //prime brute
                    }
                }
                if(places==23)
                {
                    if(puissance>=15 && puissance<=23)
                    {
                       // alert('allo papa');
                        var primebrute_1=38557;    //prime brute
                    }
                }
                if(places==24)
                {
                    if(puissance>=15 && puissance<=23)
                    {
                        var primebrute_1=39381;    //prime brute
                    }
                }
                if(places==39)
                {
                    if(puissance>=15 && puissance<=23)
                    {
                        var primebrute_1=49621;    //prime brute
                    }
                }
            }
            if (nrj=='diesel')
            {
                if(places==4)
                {
                    if(puissance>=5 && puissance<=7)
                    {
                        //alert('allo papa');
                        var primebrute_1=12772;    //prime brute
                    }
                    if (puissance>=8 && puissance<=10)
                    {
                        // alert("nooooooooo");
                        var primebrute_1=17162;    //prime brute
                    }

                }
                if(places==7)
                {
                    if(puissance>=5 && puissance<=7)
                    {
                        //alert('allo papa');
                        var primebrute_1=18912;    //prime brute
                    }
                    if (puissance>=8 && puissance<=10)
                    {
                        // alert("nooooooooo");
                        var primebrute_1=23302;    //prime brute
                    }

                }
                if(places==23)
                {
                    if(puissance>=11 && puissance<=16)
                    {
                        var primebrute_1=38557;
                    }
                }
                if(places==24)
                {
                    if (puissance>=8 && puissance<=10)
                    {
                        // alert("nooooooooo");
                        var primebrute_1=34450;    //prime brute
                    }
                    if(puissance>=11 && puissance<=16)
                    {
                        var primebrute_1=39381;
                    }
                }
                if(places==39)
                {
                    if(puissance>=11 && puissance<=16)
                    {
                        var primebrute_1=49621;
                    }
                }
                if(places==60)
                {
                    if(puissance>=5 && puissance<=7)
                    {
                        if(mois==1)
                        {
                            var primebrute_1=52071;
                        }
                        if(mois==2)
                        {
                            var primebrute_1=104142;
                        }
                        if(mois==3)
                        {
                            var primebrute_1=156213;
                        }
                        if(mois==4)
                        {
                            var primebrute_1=208284;
                        }
                        if(mois==5)
                        {
                            var primebrute_1=260355;
                        }
                        if(mois==6)
                        {
                            var primebrute_1=312426;
                        }
                    }
                    if(puissance>=8 && puissance<=10)
                    {
                        if(mois==1)
                        {
                            var primebrute_1=56421;
                        }
                        if(mois==2)
                        {
                            var primebrute_1=112922;
                        }
                        if(mois==3)
                        {
                            var primebrute_1=169383;
                        }
                        if(mois==4)
                        {
                            var primebrute_1=225844;
                        }
                        if(mois==5)
                        {
                            var primebrute_1=282305;
                        }
                        if(mois==6)
                        {
                            var primebrute_1=338766;
                        }
                    }
                    if(puissance>=11 && puissance<=16)
                    {
                        if(mois==1)
                        {
                            var primebrute_1=61391;
                        }
                        if(mois==2)
                        {
                            var primebrute_1=122782;
                        }
                        if(mois==3)
                        {
                            var primebrute_1=184173;
                        }
                        if(mois==4)
                        {
                            var primebrute_1=245564;
                        }
                        if(mois==5)
                        {
                            var primebrute_1=306955;
                        }
                        if(mois==6)
                        {
                            var primebrute_1=368346;
                        }
                    }
                }
            }
            var primebrute_prorata_1=parseInt(primebrute_1);
        }

       // var primebrute_prorata_1=parseInt(primebrute_1*(taux/100));
        // alert('garantie check1: '+lim_gant_ck1+" franchise check1: "+franch_1+" prime brute check1: "+primebrute_1+" prorata1:"+primebrute_prorata_1);
        document.getElementById('lim1').value=lim_gant_ck1;
        document.getElementById('franch1').value=franch_1;
        document.getElementById('brute1').value=primebrute_1;
        document.getElementById('prorata1').value=primebrute_prorata_1;
        document.getElementById('PrimeRC').value=primebrute_prorata_1;
       // alert("prime brute RC:"+primebrute_prorata_1);
    }

    //*************************CONDITION POUR LE CHECKBOX 2: RECOURS DES TIERS INCENDIE*********************** */

// reucperer la valeur venale et le taux de 0.5
    if (Checkbox2.checked==1)
    {
        var lim_gant_ck2=50000000   // garantie
        var franch_2=0;             //franchise
        var primebrute_2='GRATUITS';       //prime brute
        var primebrute_prorata_2='GRATUITS';
        //alert("checkbox2: "+lim_gant_ck2+" franchise check2"+franch_2+" primebrute ck2"+primebrute_2+" prorata"+primebrute_prorata_2);
        document.getElementById('lim2').value=lim_gant_ck2;
        document.getElementById('franch2').value=franch_2;
        document.getElementById('brute2').value=primebrute_2;
        document.getElementById('prorata2').value=primebrute_prorata_2;
        document.getElementById('PrimeTiers').value=primebrute_prorata_2;
    }
    if (Checkbox2.checked==false)
    {
           var lim_gant_ck2=0   // garantie
        var franch_2=0;             //franchise
       var primebrute_2='0';       //prime brute
       var primebrute_prorata_2=0;
       //alert("checkbox2: "+lim_gant_ck2+" franchise check2"+franch_2+" primebrute ck2"+primebrute_2+" prorata"+primebrute_prorata_2);
        document.getElementById('lim2').value=lim_gant_ck2;
        document.getElementById('franch2').value=franch_2;
       document.getElementById('brute2').value=primebrute_2;
       document.getElementById('prorata2').value=primebrute_prorata_2;
        document.getElementById('PrimeTiers').value=primebrute_prorata_2;
       }
    //*************************CONDITION POUR LE CHECKBOX 3:DEFENSE ET RECOURS*********************** */

    if (Checkbox3.checked==1) {
        if (genre_v==1 )
        {
            var lim_gant_ck3=200000;
            var franch_3=0;
            var primebrute_3=6000;
            var  primebrute_prorata_3=parseInt(primebrute_3*(taux/100));

            //  alert("pb"+primebrute_3);
            //   alert("pb"+primebrute_3);
        }
         if (genre_v==2 || genre_v==3 )
        {
            var lim_gant_ck3=200000;
            var franch_3=0;
            var primebrute_3=8000;
            var  primebrute_prorata_3=parseInt(primebrute_3*(taux/100));
            //alert("pb"+primebrute_3);
        }
       
        if (genre_v==4 )
        {
            var lim_gant_ck3=0;
            var franch_3=0;
            var primebrute_3=0;
            var  primebrute_prorata_3=parseInt(primebrute_3*(taux/100));
            var primebrute_4=0;
            var primebrute_5=0;
            var primebrute_6=0;
            var primebrute_7=0;
            var primebrute_8=0;
            var primebrute_9=0;
            //alert("pb"+primebrute_3);
            // document.getElementById("Checkbox10").disabled = true;
        }
        if(genre_v==5)
        {
            var lim_gant_ck3=200000;
            var franch_3=0;
            var primebrute_3=3000;
            var  primebrute_prorata_3=parseInt(primebrute_3*(taux/100));
        }
        if(genre_v==6)
        {
            var lim_gant_ck3=200000;
            var franch_3=0;
            var primebrute_3='GRATUITS';
            var  primebrute_prorata_3='GRATUITS';
        }
        //alert("lim_gant_ck3"+lim_gant_ck3+' prime brute3'+primebrute_3+' prorata3'+primebrute_prorata_3);
        document.getElementById('lim3').value=lim_gant_ck3;
        document.getElementById('franch3').value=franch_3;
        document.getElementById('brute3').value=primebrute_3;
        document.getElementById('prorata3').value=primebrute_prorata_3;
        document.getElementById('PrimeDefense').value=primebrute_prorata_3;
    }
    if (Checkbox3.checked==0)
    {
        var lim_gant_ck3=0;
        var franch_3=0;
        var primebrute_3=0;
        var primebrute_prorata_3=0;
        // alert(lim_gant_ck3);
        //alert("lim_gant_ck3"+lim_gant_ck3+' prime brute3'+primebrute_3+' prorata3'+primebrute_prorata_3);
        document.getElementById('lim3').value=lim_gant_ck3;
        document.getElementById('franch3').value=franch_3;
        document.getElementById('brute3').value=primebrute_3;
        document.getElementById('prorata3').value=primebrute_prorata_3;
        document.getElementById('PrimeDefense').value=primebrute_prorata_3;
    }

    //*************************CONDITION POUR LE CHECKBOX 4: INCENDIE*********************** */

    if (Checkbox4.checked==1)
    {
       // alert("incendie");
        if(genre_v==1)
        {
        //    //alert("incendie+"+genre_v);
            var lim_gant_ck4=0;
            var franch_4=0;
            var primebrute_4=parseInt(valeur_venale*(0.5)/100);
            var primebrute_prorata_4=parseInt(primebrute_4*(taux/100));
            //alert("checkbox4:lim: "+lim_gant_ck4+" franchise4: "+franch_4+" primebrute"+primebrute_4+"prorata"+primebrute_prorata_4);

            document.getElementById('lim4').value=lim_gant_ck4;
            document.getElementById('franch4').value=franch_4;
            document.getElementById('brute4').value=primebrute_4;
            document.getElementById('prorata4').value=primebrute_prorata_4;
            document.getElementById('PrimeIncendie').value=primebrute_prorata_4;
        }
        if(genre_v==2)
        {
         //   alert("incendie+"+genre_v);
            var lim_gant_ck4=0;
            var franch_4=0;
            var primebrute_4=parseInt(valeur_venale*(0.75)/100);
            var primebrute_prorata_4=parseInt(primebrute_4*(taux/100));
            //alert("checkbox4:lim: "+lim_gant_ck4+" franchise4: "+franch_4+" primebrute"+primebrute_4+"prorata"+primebrute_prorata_4);

            document.getElementById('lim4').value=lim_gant_ck4;
            document.getElementById('franch4').value=franch_4;
            document.getElementById('brute4').value=primebrute_4;
            document.getElementById('prorata4').value=primebrute_prorata_4;
            document.getElementById('PrimeIncendie').value=primebrute_prorata_4;
        }
        if(genre_v==3 || genre_v==4)
        {
            var lim_gant_ck4=0;
            var franch_4=0;
            var primebrute_4=parseInt(valeur_venale*(1.5)/100);
            var primebrute_prorata_4=parseInt(primebrute_4*(taux/100));
            //alert("checkbox4:lim: "+lim_gant_ck4+" franchise4: "+franch_4+" primebrute"+primebrute_4+"prorata"+primebrute_prorata_4);

            document.getElementById('lim4').value=lim_gant_ck4;
            document.getElementById('franch4').value=franch_4;
            document.getElementById('brute4').value=primebrute_4;
            document.getElementById('prorata4').value=primebrute_prorata_4;
            document.getElementById('PrimeIncendie').value=primebrute_prorata_4;
        }
        if(pack=="classic" || pack=="confort" || pack=="liberte")
        {
            var lim_gant_ck4=0;
            var franch_4=0;
            var primebrute_4=parseInt(valeur_venale*(0.20)/100);
            var primebrute_prorata_4=parseInt(primebrute_4*(taux/100));
            document.getElementById('lim4').value=lim_gant_ck4;
            document.getElementById('franch4').value=franch_4;
            document.getElementById('brute4').value=primebrute_4;
            document.getElementById('prorata4').value=primebrute_prorata_4;
            document.getElementById('PrimeIncendie').value=primebrute_prorata_4;
        }

    }
    else
    {
        var lim_gant_ck4=0;
        var franch_4=0;
        var primebrute_4=0;
        primebrute_prorata_4=0;
        // alert(lim_gant_ck4);
        document.getElementById('lim4').value=lim_gant_ck4;
        document.getElementById('franch4').value=franch_4;
        document.getElementById('brute4').value=primebrute_4;
        document.getElementById('prorata4').value=primebrute_prorata_4;
        document.getElementById('PrimeIncendie').value=primebrute_prorata_4;

    }

    //*************************CONDITION POUR LE CHECKBOX 5: VOL*********************** */
    if (Checkbox5.checked==1)
    {
        if(genre_v==1)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(valeur_venale*(0.3)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(genre_v==2)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(valeur_venale*(0.15)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(genre_v==3)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(valeur_venale*(0.28)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(genre_v==4)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(valeur_venale*(0.42)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(pack=="classic" || pack=="confort" || pack==="liberte")
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(valeur_venale*(0.20)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
            // alert("checkbox5 lim: "+lim_gant_ck5+"franch: "+franch_5)

        }
        document.getElementById('lim5').value=lim_gant_ck5;
        document.getElementById('franch5').value=franch_5;
        document.getElementById('brute5').value=primebrute_5;
        document.getElementById('prorata5').value=primebrute_prorata_5;
        document.getElementById('PrimeVol').value=primebrute_prorata_5;

    }
    else
    {
        var lim_gant_ck5=0;
        var franch_5=0;
        var primebrute_5=0;
        var primebrute_prorata_5=0;
        // alert(lim_gant_ck5);
        document.getElementById('lim5').value=lim_gant_ck5;
        document.getElementById('franch5').value=franch_5;
        document.getElementById('brute5').value=primebrute_5;
        document.getElementById('prorata5').value=primebrute_prorata_5;
        document.getElementById('PrimeVol').value=primebrute_prorata_5;

    }

    //*************************CONDITION POUR LE CHECKBOX 6: BRIS DE GLACE*********************** */
    if( Checkbox6.checked==1){
        var lim_gant_ck6=0;
        var franch_6=0;
        //alert("checkbox6");
        if(puissance==1 ||puissance==2||puissance==3||puissance==4||puissance==5||puissance==6 ||puissance==7)
        {

            var primebrute_6=15750
            // alert("checkbox6--7"+15750);
            // alert("puisscane"+puissance);
        }
        if (puissance==8 ||puissance==9 || puissance==10)
        {
            var primebrute_6=20000;
            //  alert("checkbox6--8"+20000);
            // alert("puisscane 8 :"+puissance);
        }
        if (puissance==11 ||puissance==12 || puissance==13 ||puissance==14)
        {
            var primebrute_6=26250;
            //  alert("checkbox6--11"+26250);
            //alert("puisscane11 :"+puissance);
            //alert("prime 4"+primebrute_6)
        }

        if (puissance==15||puissance==16||puissance==17||puissance==18||puissance==19||puissance==18||puissance==19|| puissance==20)
        {
            var primebrute_6=31500;
            //alert("prime 5"+primebrute_6)
        }


        if  (puissance==24 ||puissance>24)
        {
            var primebrute_6=36750;
            //  alert("puisscane"+puissance);
            // alert("prime brute 6:"+primebrute_6);
        }
        if(places==39 ||places==60 || places>60)
        {
            var primebrute_6=105000;
        }
       /* if(pack=="classic" || pack=="confort" || pack=="liberte")
        {
            var primebrute_6=200000;

        }*/
        if(pack=="classic" || pack=="confort" || pack=="liberte")
        {
            var lim_gant_ck6=200000;
            var franch_6=0;
            var primebrute_6=10000;
        }

        //alert("chck6: limitation"+lim_gant_ck6+ "franchise"+franch_6+"prime brute 6:"+primebrute_6);
        var  primebrute_prorata_6=parseInt(primebrute_6*(taux/100));
        document.getElementById('lim6').value=lim_gant_ck6;
        document.getElementById('franch6').value=franch_6;
        document.getElementById('brute6').value=primebrute_6;
        document.getElementById('prorata6').value=primebrute_prorata_6;
        document.getElementById('PrimeBris').value=primebrute_prorata_6;

    }
    else
    {
        var lim_gant_ck6=0;
        var franch_6=0;
        var primebrute_6=0;
        var primebrute_prorata_6=0;
        document.getElementById('lim6').value=lim_gant_ck6;
        document.getElementById('franch6').value=franch_6;
        document.getElementById('brute6').value=primebrute_6;
        document.getElementById('prorata6').value=primebrute_prorata_6;
        document.getElementById('PrimeBris').value=primebrute_prorata_6;

        // alert(lim_gant_ck3);
    }
    //*************************CONDITION POUR LE CHECKBOX 7:TIERCE*********************** */
    //alert("anee:"+annee)
    if(annee<=3 && mois>6)
    {
      //  alert(" voila anee:"+annee)
        Checkbox7_1.disabled=false;
        Checkbox7_2.disabled=false;
        if (Checkbox7_1.checked==true)
        {
            document.getElementById("Checkbox8").disabled = true;
            document.getElementById("Checkbox8").options[0].selected=true;
         //   alert("tierce");
            if(genre_v==1)

            {
         //       alert("genre"+genre_v);

                Checkbox7_2.disabled=true;
                Checkbox7_2.checked=false;
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*((5.5)/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
                document.getElementById('lim9').value=0;
                document.getElementById('franch9').value=0;
                document.getElementById('brute9').value=0;
                document.getElementById('prorata9').value=0;
                document.getElementById('PrimeAvance').value=0;
            }
            else if(genre_v==2)

            {
                Checkbox7_2.disabled=true;
                Checkbox7_2.checked=false;
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*((10)/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
                document.getElementById('lim9').value=0;
                document.getElementById('franch9').value=0;
                document.getElementById('brute9').value=0;
                document.getElementById('prorata9').value=0;
                document.getElementById('PrimeAvance').value=0;
            }
            else if(genre_v==6)
            {
                var lim_gant_ck7=0;
                var franch_7=36000;
                var primebrute_7=parseInt(valeur_neuve*((3)/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
                document.getElementById('lim9').value=0;
                document.getElementById('franch9').value=0;
                document.getElementById('brute9').value=0;
                document.getElementById('prorata9').value=0;
                document.getElementById('PrimeAvance').value=0;

            }
        }
        else if(Checkbox7_2.checked==true)
        {
            Checkbox7_1.disabled=true;
            Checkbox7_1.checked=false;

            if(genre_v==1)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(3/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
            }
            if(genre_v==2)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(6/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));
                var primebrute_8=0;
                var primebrute_prorata_8=0;
            }
            if(genre_v==3)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(19.25/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
            }
            if(genre_v==4)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(20/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));
                var primebrute_8=0;
                var primebrute_prorata_8=0;
            }
            if(genre_v==6)
            {
                var lim_gant_ck7=0;
                var franch_7=36000;
                var primebrute_7=parseInt(valeur_neuve*(2/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));
                var primebrute_8=0;
                var primebrute_prorata_8=0;
            }
            document.getElementById("Checkbox8").disabled = true;
            document.getElementById("Checkbox8").options[0].selected=true;
            document.getElementById('lim9').value=0;
            document.getElementById('franch9').value=0;
            document.getElementById('brute9').value=0;
            document.getElementById('prorata9').value=0;
            document.getElementById('PrimeAvance').value=0;

        }
        else
        {
            var lim_gant_ck7=0;
            var franch_7=0;
            var primebrute_7=0;
            var primebrute_prorata_7=0;
        }
        document.getElementById('lim7').value=lim_gant_ck7;
        document.getElementById('franch7').value=franch_7;
        document.getElementById('brute7').value=primebrute_7;
        document.getElementById('prorata7').value=primebrute_prorata_7;
        document.getElementById('PrimeTierce').value=primebrute_prorata_7;


    }
    else if (annee>3 && annee<=5 && mois>6)
    {
        Checkbox7_1.disabled=true;
        Checkbox7_1.checked=false;
        Checkbox7_2.disabled=false;

        if (Checkbox7_2.checked==true)
        {
            //alert("annee superieur a 3");
            if(genre_v==1)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(3/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
                var primebrute_8=0;
                var primebrute_prorata_8=0;
                document.getElementById("Checkbox8").disabled = true;
                document.getElementById("Checkbox8").options[0].selected=true;
            }
            if(genre_v==2)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(6/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
                var primebrute_8=0;
                var primebrute_prorata_8=0;
                document.getElementById("Checkbox8").disabled = true;
                document.getElementById("Checkbox8").options[0].selected=true;
            }
            if(genre_v==3)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(19.25/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
                var primebrute_8=0;
                var primebrute_prorata_8=0;
                document.getElementById("Checkbox8").disabled = true;
                document.getElementById("Checkbox8").options[0].selected=true;
            }
            if(genre_v==4)
            {
                var lim_gant_ck7=0;
                var franch_7=0;
                var primebrute_7=parseInt(valeur_neuve*(20/100));
                var primebrute_prorata_7=parseInt(primebrute_7*(taux/100));

                var primebrute_8=0;
                var primebrute_prorata_8=0;
                var primebrute_8=0;
                var primebrute_prorata_8=0;
                document.getElementById("Checkbox8").disabled = true;
                document.getElementById("Checkbox8").options[0].selected=true;
            }


        }
        else
        {
            var lim_gant_ck7=0;
            var franch_7=0;
            var primebrute_7=0;
            var primebrute_prorata_7=0;
        }

        document.getElementById('lim7').value=lim_gant_ck7;
        document.getElementById('franch7').value=franch_7;
        document.getElementById('brute7').value=primebrute_7;
        document.getElementById('prorata7').value=primebrute_prorata_7;
        document.getElementById('PrimeTierce').value=primebrute_prorata_7;
    }
    else
    {
        Checkbox7_1.disabled=true;
        Checkbox7_1.checked=false;
        Checkbox7_2.disabled=true;
        Checkbox7_2.checked=false;
        var lim_gant_ck7=0;
        var franch_7=0;
        var primebrute_7=0;
        var primebrute_prorata_7=0;

        document.getElementById('lim7').value=lim_gant_ck7;
        document.getElementById('franch7').value=franch_7;
        document.getElementById('brute7').value=primebrute_7;
        document.getElementById('prorata7').value=primebrute_prorata_7;
        document.getElementById('PrimeTierce').value=primebrute_prorata_7;

    }
    //*************************CONDITION POUR LE CHECKBOX 8 AVANCE SUR RECOURS*********************** */
    if (mois<6)
    {
        //alert("moins de six mois");
        document.getElementById("Checkbox8").disabled = true;
        document.getElementById("Checkbox8").options[0].selected=true;
        var lim_gant_ck8=0;
        var franch_8=0;
        var primebrute_8=0;
        var primebrute_prorata_8=0;
        //alert("ello lim: "+lim_gant_ck8);
        document.getElementById('lim9').value=lim_gant_ck8;
        document.getElementById('franch9').value=franch_8;
        document.getElementById('brute9').value=primebrute_8;
        document.getElementById('prorata9').value=primebrute_prorata_8;
        document.getElementById('PrimeAvance').value=primebrute_prorata_8;
        // alert("document: "+ document.getElementById('PrimeAvance').value);
    }
    else
    {
        if(Checkbox7_1.checked==false && Checkbox7_2.checked==false)
        {
            document.getElementById("Checkbox8").disabled = false;
            if(document.getElementById('Checkbox8').options[0].selected == true)
            {
                var lim_gant_ck8=0;
                var franch_8=0;
                var primebrute_8=0;
                var primebrute_prorata_8=0;
                // alert("ello lim: "+lim_gant_ck8);
                document.getElementById('lim9').value=lim_gant_ck8;
                document.getElementById('franch9').value=franch_8;
                document.getElementById('brute9').value=primebrute_8;
                document.getElementById('prorata9').value=primebrute_prorata_8;
                document.getElementById('PrimeAvance').value=primebrute_prorata_8;
                //alert("document: "+ document.getElementById('PrimeAvance').value);
            }
            if(document.getElementById('Checkbox8').options[1].selected == true)
            {
                if(genre_v==1)
                {
                    // alert("plus de six mois");
                    var lim_gant_ck8=500000;
                    var franch_8=0;
                    var primebrute_8=parseInt(500000*(3/100));
                    var primebrute_prorata_8=parseInt(primebrute_8*(taux/100));
                    //alert("ello lim: "+lim_gant_ck8);
                    document.getElementById('lim9').value=lim_gant_ck8;
                    document.getElementById('franch9').value=franch_8;
                    document.getElementById('brute9').value=primebrute_8;
                    document.getElementById('prorata9').value=primebrute_prorata_8;
                    document.getElementById('PrimeAvance').value=primebrute_prorata_8;
                    //alert("document: "+ document.getElementById('PrimeAvance').value);
                }
                if(genre_v==2)
                {
                    // alert("plus de six mois");
                    var lim_gant_ck8=500000;
                    var franch_8=0;
                    var primebrute_8=parseInt(500000*(5.10/100));
                    var primebrute_prorata_8=parseInt(primebrute_8*(taux/100));
                    //alert("ello lim: "+lim_gant_ck8);
                    document.getElementById('lim9').value=lim_gant_ck8;
                    document.getElementById('franch9').value=franch_8;
                    document.getElementById('brute9').value=primebrute_8;
                    document.getElementById('prorata9').value=primebrute_prorata_8;
                    document.getElementById('PrimeAvance').value=primebrute_prorata_8;
                    //alert("document: "+ document.getElementById('PrimeAvance').value);
                }
                if(genre_v==3)
                {
                    // alert("plus de six mois");
                    var lim_gant_ck8=500000;
                    var franch_8=0;
                    var primebrute_8=parseInt(500000*(6/100));
                    var primebrute_prorata_8=parseInt(primebrute_8*(taux/100));
                    //alert("ello lim: "+lim_gant_ck8);
                    document.getElementById('lim9').value=lim_gant_ck8;
                    document.getElementById('franch9').value=franch_8;
                    document.getElementById('brute9').value=primebrute_8;
                    document.getElementById('prorata9').value=primebrute_prorata_8;
                    document.getElementById('PrimeAvance').value=primebrute_prorata_8;
                    //alert("document: "+ document.getElementById('PrimeAvance').value);
                }
                if(genre_v==4)
                {
                    // alert("plus de six mois");
                    var lim_gant_ck8=500000;
                    var franch_8=0;
                    var primebrute_8=parseInt(500000*(6.20/100));
                    var primebrute_prorata_8=parseInt(primebrute_8*(taux/100));
                    //alert("ello lim: "+lim_gant_ck8);
                    document.getElementById('lim9').value=lim_gant_ck8;
                    document.getElementById('franch9').value=franch_8;
                    document.getElementById('brute9').value=primebrute_8;
                    document.getElementById('prorata9').value=primebrute_prorata_8;
                    document.getElementById('PrimeAvance').value=primebrute_prorata_8;
                    //alert("document: "+ document.getElementById('PrimeAvance').value);
                }
                if(pack=="classic")

                {
                    var lim_gant_ck8=1000000;
                    var franch_8=0;
                    var primebrute_8=10000;
                    var primebrute_prorata_8=10000;
                    //alert("ello lim: "+lim_gant_ck8);
                    document.getElementById('lim9').value=lim_gant_ck8;
                    document.getElementById('franch9').value=franch_8;
                    document.getElementById('brute9').value=primebrute_8;
                    document.getElementById('prorata9').value=primebrute_prorata_8;
                    document.getElementById('PrimeAvance').value=primebrute_prorata_8;

                }
            }
            if (document.getElementById('Checkbox8').options[2].selected == true)
            {
                // alert ("plus de 6 mois");
                var lim_gant_ck8=750000;
                var franch_8=0;
                var primebrute_8=parseInt(750000*(3/100));
                var primebrute_prorata_8=parseInt(primebrute_8*(taux/100));
                //alert("ello lim: "+lim_gant_ck8);
                document.getElementById('lim9').value=lim_gant_ck8;
                document.getElementById('franch9').value=franch_8;
                document.getElementById('brute9').value=primebrute_8;
                document.getElementById('prorata9').value=primebrute_prorata_8;
                document.getElementById('PrimeAvance').value=primebrute_prorata_8;
                //alert("document: "+ document.getElementById('PrimeAvance').value);
            }
            if (document.getElementById('Checkbox8').options[3].selected == true)
            {
                // alert ("plus de 6 mois");
                var lim_gant_ck8=1000000;
                var franch_8=0;
                var primebrute_8=parseInt(1000000*(3/100));
                var primebrute_prorata_8=parseInt(primebrute_8*(taux/100));
                // alert("ello lim: "+lim_gant_ck8);
                document.getElementById('lim9').value=lim_gant_ck8;
                document.getElementById('franch9').value=franch_8;
                document.getElementById('brute9').value=primebrute_8;
                document.getElementById('prorata9').value=primebrute_prorata_8;
                document.getElementById('PrimeAvance').value=primebrute_prorata_8;
                // alert("document: "+ document.getElementById('PrimeAvance').value);
            }
        }

    }
    //*************************CONDITION POUR LE CHECKBOX 9 PERSONNES TRANSPORTEES*********************** */
    var transport=document.getElementById('Checkbox9').value;

    if (document.getElementById('Checkbox9').options[0].selected == true)
    {
        var lim_gant_ck9=0;
        var franch_9=0;
        var primebrute_9=0;
        var primebrute_prorata_9=0;
        document.getElementById('lim10').value=lim_gant_ck9;
        document.getElementById('franch10').value=franch_9;
        document.getElementById('brute10').value=primebrute_9;
        document.getElementById('prorata10').value=primebrute_prorata_9;
        document.getElementById('PrimePersonne').value=primebrute_prorata_9;
    }
    if ( document.getElementById('Checkbox9').options[1].selected == true)
    {
        var lim_gant_ck9=1000000;
        var franch_9=0;
        var primebrute_9=places*1200;
        var primebrute_prorata_9=parseInt(primebrute_9*(taux/100));
        document.getElementById('lim10').value=lim_gant_ck9;
        document.getElementById('franch10').value=franch_9;
        document.getElementById('brute10').value=primebrute_9;
        document.getElementById('prorata10').value=primebrute_prorata_9;
        document.getElementById('PrimePersonne').value=primebrute_prorata_9;
    }
    if(document.getElementById('Checkbox9').options[2].selected === true)
    {
        var lim_gant_ck9=2000000;
        var franch_9=0;
        var primebrute_9=places*2400;
        var primebrute_prorata_9=parseInt(primebrute_9*(taux/100));
        document.getElementById('lim10').value=lim_gant_ck9;
        document.getElementById('franch10').value=franch_9;
        document.getElementById('brute10').value=primebrute_9;
        document.getElementById('prorata10').value=primebrute_prorata_9;
        document.getElementById('PrimePersonne').value=primebrute_prorata_9;
    }
    if(document.getElementById('Checkbox9').options[3].selected === true)
    {
        if(pack=="mini"  )
        {
            var primebrute_9=5000;
            var lim_gant_ck9=0;
            var franch_9=0;
        }
        else if(pack=="classic" || pack=="confort" || pack=="liberte" )
        {
            var primebrute_9=5000;
            var lim_gant_ck9=3000000;
            var franch_9=0;
        }
        else
        {
            var lim_gant_ck9=0;
            var franch_9=0;
            var primebrute_9=places*3600;
        }
        var primebrute_prorata_9=parseInt(primebrute_9*(taux/100));
        document.getElementById('lim10').value=lim_gant_ck9;
        document.getElementById('franch10').value=franch_9;
        document.getElementById('brute10').value=primebrute_9;
        document.getElementById('prorata10').value=primebrute_prorata_9;
        document.getElementById('PrimePersonne').value=primebrute_prorata_9;
    }


    //*************************CONDITION POUR LE CHECKBOX 10 AUTO*********************** */
    if(Checkbox10.checked==true)
    {
        var franch_10=0;
        var primebrute_prorata_10='GRATUITS';
        if(pack=="classic")
        {
            var lim_gant_ck10='2 interventions/an';
            var primebrute_10=10000;
            var primebrute_prorata_10=10000;


        }
        else if(pack=="confort" || pack=="liberte")
        {
            var lim_gant_ck10='2 interventions/an';
            var primebrute_10=15000;
            var primebrute_prorata_10=15000;

        }
        else
        {
            var lim_gant_ck10=0;
            var primebrute_10='GRATUITS';
            var primebrute_prorata_10='GRATUITS';
        }
        document.getElementById('lim11').value=lim_gant_ck10;
        document.getElementById('franch11').value=franch_10;
        document.getElementById('brute11').value=primebrute_10;
        document.getElementById('prorata11').value=primebrute_prorata_10;
        document.getElementById('PrimeAuto').value=primebrute_prorata_10;
    }



//rime prorata1="+primebrute_prorata_1);
//alert("prime prorata2="+primebrute_prorata_2);
//alert("prime prorata3="+primebrute_prorata_3);
//alert("prime prorata4="+primebrute_prorata_4);
//alert("prime prorata5="+primebrute_prorata_5);
//alert("prime prorata6="+primebrute_prorata_6);
//alert("prime prorata7="+primebrute_prorata_7);
//alert("prime prorata8="+primebrute_prorata_8);
//alert("prime prorata9="+primebrute_prorata_9);
//alert("prime prorata10="+primebrute_prorata_10);
    if(genre_v==6)
    {
        if(pack=="classic" || pack=="confort" || pack=="liberte")
        {
            var primeProrataTotal=primebrute_prorata_1+primebrute_prorata_4+
                primebrute_prorata_5+primebrute_prorata_6+primebrute_prorata_7+primebrute_prorata_8+primebrute_prorata_9+primebrute_prorata_10;
          // alert("prime primeProrataTotal clas-conf-lib="+primeProrataTotal);
        }
        else
        {
            var primeProrataTotal=primebrute_prorata_1+primebrute_prorata_4+
                primebrute_prorata_5+primebrute_prorata_6+primebrute_prorata_7+primebrute_prorata_8+primebrute_prorata_9;
          // alert("prime primeProrataTotal="+primeProrataTotal);

        }

    }
    if(genre_v ==1 || genre_v ==2 || genre_v ==3 || genre_v ==4 || genre_v ==5)
    {
        var primeProrataTotal=primebrute_prorata_1+primebrute_prorata_3+primebrute_prorata_4+
            primebrute_prorata_5+primebrute_prorata_6+primebrute_prorata_7+primebrute_prorata_8+primebrute_prorata_9;
    }
//alert('Prime totale='+primeProrataTotal);
//alert('Prime primebrute_prorata_1='+primebrute_prorata_1);

    //-------------------calcul du bonus Commerciale--------------------------
    //cmettrte prime brute au prorata
    var c1=document.getElementById('chiffre3').value;
    //alert("pourcentage: "+c1);
    var totalBC=parseInt(primebrute_prorata_1*(c1/100)) ;
    document.getElementById('totalBC').value = totalBC;
    document.getElementById('totalBC1').value = totalBC;
  //  alert("total bonus commercial:"+totalBC);
    //-------------------calcul du total reduction commerciale--------------------------
    var c2=document.getElementById('sel1').value;
    // alert(document.getElementById('totalBC1').value);
    // alert(c2)
    var diff=parseInt(primeProrataTotal );
    // alert("diff"+diff);
    var totalRC=parseInt((primeProrataTotal-primebrute_prorata_1)*(c2/100));
    document.getElementById('totalRC').value = totalRC;
    document.getElementById('totalRC1').value = totalRC;
   // alert("total reduction commerciale:"+totalRC);
//------------------calcul de la prime nette--------------------------------------
    var totalPN=parseInt(primeProrataTotal-totalBC-totalRC);
    document.getElementById('totalPN').value = totalPN;
    document.getElementById('totalPN1').value = totalPN;

    // ------------------------FIN CALCUL DES Checkbox-------------------------------
    //******************************************************************************

    //******************************************************************************
    //***********************************************************************************

    //******************************************************************************
    //-----------------------calcul de l'accessoire-------------------------------
    if  (totalPN<=50000) {
        var totalAC=2000
        document.getElementById('totalAC').value = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else if(totalPN>=50001 && totalPN<=100000){
        var totalAC=3000
        document.getElementById('totalAC').value = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }

    else if(totalPN>=100001 && totalPN<=500000){
        var totalAC=5000
        document.getElementById('totalAC').value = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else if(totalPN>=500001 && totalPN<=1000000){
        var totalAC=8000
        document.getElementById('totalAC').value = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else if(totalPN>=1000001 && totalPN<=5000000){
        var totalAC=10000
        document.getElementById('totalAC').value = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else{
        var totalAC=20000
        document.getElementById('totalAC').value = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }

    //---------------------calcul dela taxe-----------------------
    var taxe=Math.round((totalPN+totalAC)*(10/100));
    document.getElementById('taxe').value = taxe;
    document.getElementById('taxe1').value = taxe;

    //---------------------calcul du fond de garantie-----------------------
    // 2.5*res civ prorata
    var totalFG=parseInt((primebrute_prorata_1-totalBC)*(2.5/100))

    document.getElementById('totalFG').value = totalFG;
    document.getElementById('totalFG1').value = totalFG;


    //---------------------- calcul de la prime totale-------------------------------------


    var PrimeTotale=parseInt(totalPN+totalAC+taxe+totalFG);
    document.getElementById('totalPT').value = PrimeTotale;
    document.getElementById('totalPT1').value = PrimeTotale;

    var dtre=(document.getElementById('date_debut').value).substring(0,10);
    var dtrv=(document.getElementById('date_fin').value).substring(0,10);
//alert("date debut:"+dtre+" date fin:"+dtrv);
/**********************************COULEUR DES CHAMPS DES GARANTIES**************************************/
/*************Responsabilite civile******************/

    if(document.getElementById('PrimeRC').value=="NaN" || document.getElementById('PrimeRC').value=="undefined")
    {
        document.getElementById('PrimeRC').style.borderColor='#ff1309';
    }
else
    {
        document.getElementById('PrimeRC').style.borderColor=null;
    }
/********************Recours Tiers Incendie**************************/
    if(document.getElementById('PrimeTiers').value=="NaN" || document.getElementById('PrimeTiers').value=="undefined")
    {
        document.getElementById('PrimeTiers').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeTiers').style.borderColor=null;
    }
/***************************Defense et recours****************************/
    if(document.getElementById('PrimeDefense').value=="NaN" || document.getElementById('PrimeDefense').value=="undefined")
    {
        document.getElementById('PrimeDefense').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeDefense').style.borderColor=null;
    }
    /************************Incendie*****************************/
    if(document.getElementById('PrimeIncendie').value=="NaN" || document.getElementById('PrimeIncendie').value=="undefined")
    {
       // alert("erreur");
        document.getElementById('PrimeIncendie').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeIncendie').style.borderColor=null;
    }
/*************************VOL***********************************/
    if(document.getElementById('PrimeVol').value=="NaN" || document.getElementById('PrimeVol').value=="undefined")
    {
       // alert("erreur");
        document.getElementById('PrimeVol').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeVol').style.borderColor=null;
    }
    /*************************Bris de glace***********************************/
    if(document.getElementById('PrimeBris').value=="NaN" || document.getElementById('PrimeBris').value=="undefined")
    {
     //   alert("erreur");
        document.getElementById('PrimeBris').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeBris').style.borderColor=null;
    }
    /*************************Tierce complete/collision**********************************/
    if(document.getElementById('PrimeTierce').value=="NaN" || document.getElementById('PrimeTierce').value=="undefined")
    {
     //   alert("erreur");
        document.getElementById('PrimeTierce').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeTierce').style.borderColor=null;
    }
    /*************************Avance sur recours*********************************/
    if(document.getElementById('PrimeAvance').value=="NaN" || document.getElementById('PrimeAvance').value=="undefined")
    {
       // alert("erreur");
        document.getElementById('PrimeAvance').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeAvance').style.borderColor=null;
    }
    /*************************Personnes Transportees*********************************/
    if(document.getElementById('PrimePersonne').value=="NaN" || document.getElementById('PrimePersonne').value=="undefined")
    {
      //  alert("erreur");
        document.getElementById('PrimePersonne').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimePersonne').style.borderColor=null;
    }
    if(
        document.getElementById('PrimeRC').value=="NaN" || document.getElementById('PrimeRC').value=="undefined" ||
        document.getElementById('PrimeTiers').value=="NaN" || document.getElementById('PrimeTiers').value=="undefined" ||
        document.getElementById('PrimeDefense').value=="NaN" || document.getElementById('PrimeDefense').value=="undefined" ||
        document.getElementById('PrimeIncendie').value=="NaN" || document.getElementById('PrimeIncendie').value=="undefined" ||
        document.getElementById('PrimeVol').value=="NaN" || document.getElementById('PrimeVol').value=="undefined" ||
        document.getElementById('PrimeBris').value=="NaN" || document.getElementById('PrimeBris').value=="undefined" ||
        document.getElementById('PrimeTierce').value=="NaN" || document.getElementById('PrimeTierce').value=="undefined" ||
        document.getElementById('PrimeAvance').value=="NaN" || document.getElementById('PrimeAvance').value=="undefined" ||
        document.getElementById('PrimePersonne').value=="NaN" || document.getElementById('PrimePersonne').value=="undefined"
        || varDate==0
    )
    {
        document.getElementById('valider').disabled=true;
    }
    else
    {
        document.getElementById('valider').disabled=false;
    }
/**************************************************************/
}
function myFunction() {
    $("#pack").fadeOut();
    $("#pack1").fadeOut();
    $("#charge").fadeOut();
}

