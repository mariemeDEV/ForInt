function removeOptions(){
    while (document.getElementById("places").firstChild) {
        document.getElementById("places").removeChild( document.getElementById("places").firstChild);
    }
}
document.getElementById('date_debut').valueAsDate = new Date();

// $('#dateEffetbtn').click(function(){
//     $('#effetModal').fadeIn()
// })

function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
      x = x.replace(pattern, "$1,$2");
      return x;
}


function CalculeBC(){
    var varDate       = null;
    var puissance     = document.getElementById('puissance').value;
    var cylindre      = document.getElementById('cylindre').value;
    var valeur_venale = document.getElementById('val_venale').value;
    var valeur_neuve  = document.getElementById('val_neuve').value;
    var mois          = document.getElementById('duree').value;
    var places        = document.getElementById('places').value;
    var valeurVenale  = parseFloat(valeur_venale.replace(/[^\d\.]/g,''));
    var valeurNeuve   = parseFloat(valeur_neuve .replace(/[^\d\.]/g,''));
    if(valeurVenale>valeurNeuve){
        var modal_values = document.getElementById("valeursModal");
        var span         = document.getElementsByClassName("close")[0];
        var inputs       = document.getElementById("hidden-caracteristiques");
            inputs.style.display='none'
            modal_values.style.display = "block";
            span.onclick = function() {
                modal_values.style.display = "none";
                inputs.style.display='block'
            }
            window.onclick = function(event) {
                if (event.target == modal_values) {
                    modal_values.style.display = "none";
                    inputs.style.display='block'
                }
            }
        document.getElementById('date_debut').valueAsDate = new Date();
        document.getElementById('val_venale').value=""
        document.getElementById('val_venale').autofocus
        document.getElementById('val_neuve').value=""
        document.getElementById('val_neuve').autofocus
    }
    var genre_v       = document.getElementById('categorie').value;
    var x             = document.getElementById("energie").selectedIndex;
    var option        = document.getElementsByTagName("option")[x].value
    var nrj
    if(option=="essence"){
        nrj="Essence"
    }if(option=="diesel"){
        nrj="Diesel"
    }
 
    document.getElementById("nom_conducteur").value    = document.getElementById("nom_assure").value;
    document.getElementById("prenom_conducteur").value = document.getElementById("prenom_assure").value;
    var xD   = document.getElementById("date_debut").value;
    var xF   = document.getElementById("date_fin").value;
    var xMEC = document.getElementById("mec").value;
    document.getElementById("nom_conducteur").value    = document.getElementById("nom_assure").value;
    document.getElementById("prenom_conducteur").value = document.getElementById("prenom_assure").value;

    //date choisie
        var DateDebut = xD.substring(0, 10);
        var DateFin   = xF.substring(0, 10);
        var ynew3     = new Date(DateDebut);

      
        var ynew1     = new Date(DateFin);
        var andif     = ynew3-ynew1;
        var ynew2     = new Date(DateDebut);
        var d         = new Date(DateDebut);
        var demain    = new Date();
        if((demain.getTime()-ynew2.getTime())>86400000){
            varDate=0;
            document.getElementById('date_debut').style.borderColor='#ff1309';
            $('[data-toggle="popover"]').popover();
         }
         else{
            varDate = 1;
            document.getElementById('date_debut').style.borderColor="green";
         }

      
        d.setTime(d.getTime() - (24 * 3600 * 1000));
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
        var years=d.getFullYear();
        var inputYear=(years+"-"+month+"-"+day).toString();
        document.getElementById("date_fin").value =inputYear;
        document.getElementById("demo").innerHTML ="<strong>Date Echeance : </strong>"+day+"/"+month+"/"+years;
    
        //------------diffrence années---------------------------------------
            var ynew   = new Date(xMEC);
            var DiffAn = Number((ynew2.getTime() - ynew.getTime()) / 31536000000).toFixed(0);
        
            //------------ faiencee années---------------------------------------
            var newDate=ynew2;
            newDate.setUTCMonth(newDate.getUTCMonth()+3);
            var mec    = document.getElementById('mec').value;
            var today1 = new Date();
            var today2 = today1.getFullYear();
            var annee = Number(DiffAn)+1;
       
    var nrj   = document.getElementById('energie').value;
    var nrjSelected
    var charge_utile=document.getElementById('charge').value;


    //------------------------DETERMINATION  DU GENRE DE VEHICULE------------------

//
    if(genre_v==1)
    {
        // removeOptions()
        // var genre1_places = [2,3,4,5,6,7,8,9]
        // for(var i=0; i<genre1_places.length; i++){
        //     document.getElementById("places").innerHTML+="<option value='" + genre1_places[i] + "'>" + genre1_places[i] + "</option>"
        //     console.log("<option value='" + genre1_places[i] + "'>" + genre1_places[i] + "</option>")
        // }
        document.getElementById("Checkbox2").checked   = true;
        document.getElementById("Checkbox265").checked = true;
        document.getElementById('genre1').value        = ' promenade et affaires personne physique';
        document.getElementById('genre').value         = ' PAPP';
        document.getElementById("Checkbox10").checked  = true;
        document.getElementById("Checkbox101").checked = true;
        $("#labelPack").fadeOut();
        $("#pack").fadeOut();
        $("#labelChargeUtile").fadeOut();
        $("#charge").fadeOut();
        document.getElementById("places").disabled=false;
        document.getElementById("places1").disabled=true;
        document.getElementById("pack").options[0].selected=true;
        document.getElementById("charge").options[0].selected=true;
    }
    if (genre_v==2)
    {
        document.getElementById('genre2').value = 'Charge Utile';
        document.getElementById("Checkbox2").checked = true;//recours des tiers et incendie
        document.getElementById("Checkbox265").checked = true;//
        document.getElementById('genre1').value = 'transport pour propre compte';
        document.getElementById('genre').value = 'TPC';
        document.getElementById("Checkbox10").checked = false;
        document.getElementById("Checkbox101").checked = false;
        document.getElementById("Checkbox10").value = 0
        $("#labelPack").fadeOut();
        $("#pack").fadeOut();
        $("#labelChargeUtile").fadeIn();
        $("#charge").fadeIn();
        $("#places1").fadeIn();
        $("#placeSup").fadeIn();
        $('#cylindreCol').fadeIn();


        document.getElementById("places").disabled=false;
        document.getElementById("places1").disabled=true;
        var places=document.getElementById('places').value;

        document.getElementById("pack").options[0].selected=true;
    }
    if (genre_v==3)
    {
    //    removeOptions()
    //     var genre3_places = [2,3,4,5]
    //     for(var k=0; k<genre3_places.length; k++){
    //         document.getElementById("places").innerHTML+="<option value='" + genre3_places[k] + "'>"+genre3_places[k] + "</option>"
    //     }
        document.getElementById('genre2').value = 'Charge Utile';
        document.getElementById("Checkbox2").checked = true;//recours des tiers et incendie
        document.getElementById("Checkbox265").checked = true;//
        document.getElementById('genre1').value = 'transport public de marchandises';
        document.getElementById('genre').value = 'TPM';
        document.getElementById("Checkbox10").checked = false;
        document.getElementById("Checkbox10").value = ''
        document.getElementById("Checkbox101").checked = false;
        document.getElementById("Checkbox7_1").disabled = true;
        document.getElementById("Checkbox7_1").checked = false;
        $("#labelPack").fadeOut();
        $("#pack").fadeOut();
        $("#charge").fadeIn();
        document.getElementById("places").disabled=false;
        document.getElementById("places1").disabled=true;
        document.getElementById("pack").options[0].selected=true;
    }
    if (genre_v==4)
    {
        // removeOptions()
        // var genre4_places = [10,11,12,13,14,15]
        // for(var l=0; l<genre4_places.length; l++){
        //     document.getElementById("places").innerHTML+="<option value='" + genre4_places[l] + "'>"+genre4_places[l] + "</option>"
        //     // console.log("<option value='" + genre4_places[l] + "'>"+genre4_places[l] + "</option>")
        // }
        document.getElementById('genre2').value = 'Charge Utile';
        document.getElementById('genre1').value = 'transport public de voyageurs';
        document.getElementById('genre').value = 'TPV';
        document.getElementById("Checkbox3").disabled = true;
        document.getElementById("Checkbox3").checked = false;
        document.getElementById("Checkbox10").checked = false;
        document.getElementById("Checkbox10").value = ''
        document.getElementById("Checkbox101").checked = false;
        document.getElementById("Checkbox7_1").disabled = true;
        document.getElementById("Checkbox7_1").checked = false;

        document.getElementById("places").disabled=true;
        document.getElementById("places1").disabled=false;
        // var places=document.getElementById('places1').value;
        // document.getElementById("pack").options[0].selected=true;
        // console.log($("#places").val())
    }
    if (genre_v==5)
    {
        document.getElementById("puissance").disabled=true;
        document.getElementById("puissance").value=null;
        document.getElementById('genre1').value = '2 roues';
        document.getElementById('genre').value = '2 roues';
        document.getElementById("Checkbox2").checked = true;
        document.getElementById("Checkbox265").checked = true;
        document.getElementById("Checkbox3").disabled = false;
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
        document.getElementById("Checkbox10").checked = false;
        document.getElementById("Checkbox10").value = ''

        document.getElementById("Checkbox101").checked = false;
        document.getElementById('chassis').disabled = false;
        document.getElementById('cylindre').disabled = false;
        var lim_gant_ck3=0;
        var franch_3=0;
        var primebrute_3=0;
        var primebrute_prorata_3=0;
        document.getElementById('lim3').value=0;
        document.getElementById('franch3').value=0;
        document.getElementById('brute3').value=0;
        document.getElementById('prorata3').value=0;
        document.getElementById('PrimeDefense').value=0;

        var lim_gant_ck4     = 0;
        var franch_4         = 0;
        var primebrute_4     = 0;
        primebrute_prorata_4 = 0;
        document.getElementById('lim4').value=0;
        document.getElementById('franch4').value=0;
        document.getElementById('brute4').value=0;
        document.getElementById('prorata4').value=0;
        document.getElementById('PrimeIncendie').value=0;

        var lim_gant_ck5=0;
        var franch_5=0;
        var primebrute_5=0;
        var primebrute_prorata_5=0;
        document.getElementById('lim5').value=0;
        document.getElementById('franch5').value=0;
        document.getElementById('brute5').value=0;
        document.getElementById('prorata5').value=0;
        document.getElementById('PrimeVol').value=0;
        $("#labelPack").fadeOut();
        $("#pack").fadeOut();
        $("#labelChargeUtile").fadeOut();
        $("#charge").fadeOut();
        $('#cylindreLabel').fadeIn();
        $("#cylindre").fadeIn();
        $('#labelPuissance,#puissance,#vnLabel,#val_neuve,#vvLabel,#val_venale,#placeLabel,#places,#mecLabel,#mec,#energieLabel,#energie').fadeOut()
        $('#cylindreLabel').css({'position':'relative','top':'-152px'})
        $('#cylindre').css({'margin-top' : '-150px'})
        $('#collapseFour').css('height','210px')
        // $('#mecLabel').css({'position':'relative','top':'-106px'})
        // $('#mec').css({'position':'relative','top':'-108px'})
        // $('#cylindreLabel').css({'position':'relative','top':'-110px'})
        // $('#cylindre').css({'margin-top':'-113px'})
        
        // $('#labelPuissance').css('position','relative','top','-106px','left','275px')

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
        document.getElementById("Checkbox10").disabled = true;
        document.getElementById('chassis').disabled = true;
        document.getElementById('cylindre').disabled = true;
        document.getElementById('cylindre').value = null;
        $('#cylindreLabel').fadeOut()
        $("#cylindre").fadeOut();
        $('#labelPuissance,#puissance,#vnLabel,#val_neuve,#vvLabel,#val_venale,#placeLabel,#places,#mecLabel,#mec,#energieLabel,#energie').fadeIn()
        $('#collapseFour').css({'height':'424px','max-height':'450px'})
        // $('#labelPuissance,#puissance,#vnLabel,#val_neuve,#vvLabel,#val_venale,#placeLabel,#places').fadeIn()
        // $('#energieLabel,#energie,#mecLabel,#vnLabel,#vvLabel').css({'margin-right':'1%'})
        // $('#mecGroup').css({'position':'relative','top':'42px'})
        // $('#energie').css({'position':'relative','top':'-106px','left':'274px'})
        // $('#mecLabel').css({'position':'relative','top':'-106px'})
        // $('#mec').css({'width':'247px !important','font-size':'15px','font-size': '15px','height':'32px','transition':'border-color 0.15s ease-in-out 0s box-shadow 0.15s ease-in-out 0s'})
        // $('#cylindreLabel').css({'position':'relative','top':'-110px'})
        // $('#cylindre').css({'margin-top':'-113px'})


        document.getElementById("puissance").disabled=false;
    }
    if(genre_v !=2)
    {
        document.getElementById("Checkbox3").disabled = false;
        // $("#places").fadeIn();
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
        document.getElementById('genre2').value = 'Pack Auto';
        document.getElementById('duree').value=12;
        document.getElementById("Checkbox2").checked = false;
        document.getElementById("Checkbox265").checked = false;
        document.getElementById("Checkbox3").checked = true;
        document.getElementById('genre1').value = 'Pack auto';
        document.getElementById('genre').value = 'Pack auto';
        document.getElementById('Checkbox9').options[3].selected = true
        $("#labelPack").fadeIn();
        $("#pack").fadeIn();
        $("#labelChargeUtile").fadeOut();
        $("#charge").fadeOut();
        document.getElementById("charge").options[0].selected=true;
        if(pack=="mini")
        {
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
    }

    /**********************************************************************/


    //alert("genre"+document.getElementById('genre');
    //------------------------FIN DETERMINATION DU GENRE DE VEHICULE--------------------
    
    //------------------------CALCUL DU TAUX------------------
    if (mois==1)     {var taux=8.75}
    else if(mois==2) {var taux=2*(8.75)}
    else if(mois==3) {var taux=3*(8.75)}
    else if(mois==4) {var taux=4*(8.75)}
    else if(mois==5) {var taux=5*(8.75)}
    else if(mois==6) {var taux=6*(8.75)}
    else if(mois==7) {var taux=7*(8.75)}
    else if(mois==8) {var taux=8*(8.75)}
    else if(mois==9) {var taux=9*(8.75)}
    else{var taux=100}
    //------------------------FIN CALCUL DU TAUX------------------


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

//Catégorie 2 
        if(genre_v==2){
            //La place sup n'existe que pour la catégorie 2
            var placeSup=(document.getElementById('placeSup').value)*4852;
            console.log(places+' '+varDate + ' ' + puissance + ' '+ cylindre+' '+valeur_venale+' '+valeur_neuve+' '+genre_v+' '+mois+' '+nrj+' '+charge_utile+' '+placeSup)
            if(nrj=='essence')
            {
                console.log('ok')
                if(charge_utile=='Break')
                {
                //    alert('charge_utile='+charge_utile);
                    if (puissance<=2) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=56958     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if(puissance==3 || puissance==4 || puissance==5 || puissance==6) {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=67644;     //prime brute
                        // alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==7 || puissance==8 ||puissance==9 ||  puissance==10)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=78974;     //prime brute
                        //alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance==11 || puissance==12 || puissance==13 || puissance==14)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=113944;//prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=146969;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=24 )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=174491;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }
                if(charge_utile=='Moins de 3,5T')
                {
                  //  alert('charge_utile='+charge_utile);
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
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=206063;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=24 )
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
                    if (puissance>=15 || puissance==16 || puissance==17 || puissance==18 || puissance==19 || puissance==20 || puissance==21 || puissance==22 || puissance==23)
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=208597;     //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                    if (puissance>=24 )
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
            //    alert('energie='+nrj);

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
                    if (puissance>=17)
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
                    if (puissance>=17 )
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
                    if (puissance>=17  )
                    {
                        var lim_gant_ck1='ILLIMITE' // garantie
                        var franch_1=0;             //franchise
                        var primebrute_1=240245;    //prime brute
                        //  alert('garantie: '+lim_gant_ck1+" franchise: "+franch_1+" prime brute: "+primebrute_1);
                    }
                }

            }
            var primebrute_prorata_1=parseInt(primebrute_1*(taux/100)+placeSup);
        }
        if(genre_v==3)
        // alert("ok")
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
            var lim_gant_ck1='ILLIMITE' // garantie
            var franch_1=0;             //franchise
            if(nrj=='essence')
            {
                if(places==4){
                    if(puissance>=7 && puissance<=10){
                        var primebrute_1=12772
                    }
                    if(puissance>=11 && puissance<=14){
                        var primebrute_1=17162
                    }
                }

                if(places==7){
                    if(puissance>=11 && puissance<=14){
                        var primebrute_1=23302
                    }
                }
                if(places==15)
                {
                    if(puissance==2){
                        var primebrute_1=23888; 
                    }
                    if(puissance>=3 && puissance<=6)
                    {
                        //alert('allo papa');
                        var primebrute_1=25273;    //prime brute
                    }
                    if (puissance>=7 && puissance<=10)
                    {
                       // alert("nooooooooo");
                        var primebrute_1=26763;    //prime brute
                    } 
                    if (puissance>=11 && puissance<=14)
                    {
                       // alert("nooooooooo");
                        var primebrute_1=31153;    //prime brute
                    }
                    if (puissance>=15 && puissance<=23)
                    {
                       // alert("nooooooooo");
                        var primebrute_1=36084;    //prime brute
                    }
                    if (puissance>=24)
                    {
                       // alert("nooooooooo");
                        var primebrute_1=39384;    //prime brute
                    }

                   // var primebrute_1=34021;    //prime brute
                }

                if(places==23){
                    if(puissance>=15 && puissance<=23){
                        var primebrute_1=38557;    //prime brute
                    }
                }
                if(places==24){
                    if(puissance>=11 && puissance<=14){
                        var primebrute_1=34450;    //prime brute
                    }
                    if(puissance>=15 && puissance<=23){
                        var primebrute_1=39381;    //prime brute
                    }
                }
                if(places==28)
                {
                    if(puissance>=5 && puissance<=23){
                        var primebrute_1=42676;    //prime brute
                    }
                }
                if(places==29)
                {
                    if(puissance>=5 && puissance<=23){
                        var primebrute_1=43500;    //prime brute
                    }
                }
                if(places==39)
                {
                    if(puissance>=15 && puissance<=23){
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
                        var primebrute_1=23302;    //prime brute
                    }

                }
                if(places==7)
                {
                    if(puissance>=8 && puissance<=10)
                    {
                        var primebrute_1=23302;    //prime brute
                    }
                }
                if(places==15){
                    if(puissance==2){
                        var primebrute_1=23888
                    }
                    if(puissance>=2 && puissance<=4){
                        var primebrute_1=25273
                    }
                    if(puissance>=5 && puissance<=7){
                        var primebrute_1=26763
                    }
                    if(puissance>=8 && puissance<=10){
                        var primebrute_1=31153
                    }
                    if(puissance>=11 && puissance<=16){
                        var primebrute_1=36084
                    }
                    if(puissance>=24){
                        var primebrute_1=39384
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
        var lim_gant_ck2=0           //garantie
        var franch_2=0;             //franchise
        var primebrute_2='0';      //prime brute
        var primebrute_prorata_2=0;
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
        /* if (genre_v==5 )
         {
             var lim_gant_ck3=200000;
             var franch_3=0;
             var primebrute_3=3000;

             //alert("pb"+primebrute_3);
         }*/
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

    if (document.getElementById("Checkbox4").checked==1)
    {
        // console.log(parseInt(valeur_venale))
        // alert("ok1")

        if(genre_v==1)
        {
        // alert("incendie+"+genre_v);
            var lim_gant_ck4=0;
            var franch_4=0;
            var primebrute_4=(parseInt(valeur_venale)*(0.5)/100);
            var primebrute_prorata_4=primebrute_4*(taux/100);
            // alert("checkbox4:lim: "+lim_gant_ck4+" franchise4: "+franch_4+" primebrute"+primebrute_4+"prorata"+primebrute_prorata_4);
            document.getElementById('lim4').value=lim_gant_ck4;
            document.getElementById('franch4').value=franch_4;
            document.getElementById('brute4').value=primebrute_4;
            document.getElementById('prorata4').value=primebrute_prorata_4;
            document.getElementById('PrimeIncendie').value=primebrute_prorata_4;
            console.log((primebrute_4*taux)/100)
            console.log(primebrute_4)

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
    if(document.getElementById("Checkbox5").checked==1)
    {
        // var vv = valeur_venale.split(',')
        // alert(parseFloat(valeur_venale))
        // alert(parseFloat(valeur_venale.replace(/[^\d\.]/g,'')));
        var vv = parseFloat(valeur_venale.replace(/[^\d\.]/g,''));

        if(genre_v==1)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(vv*(0.3)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(genre_v==2)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(vv*(0.15)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(genre_v==3)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(vv*(0.28)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(genre_v==4)
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(vv*(0.42)/100);
            var primebrute_prorata_5=parseInt(primebrute_5*(taux/100));
        }
        if(pack=="classic" || pack=="confort" || pack==="liberte")
        {
            var lim_gant_ck5=0;
            var franch_5=36000;
            var primebrute_5=parseInt(vv*(0.20)/100);
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


        if  (puissance==24 || puissance>24)
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
    //************************CONDITION POUR LE CHECKBOX 7:TIERCE********************** */
    // alert("anee:"+annee)
    // alert("mois" + mois)
    if(annee<=5 && mois>6)
    {
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
                var primebrute_7=parseInt(valeur_neuve*((5.50)/100));
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

        document.getElementById('lim7').value        = lim_gant_ck7;
        document.getElementById('franch7').value     = franch_7;
        document.getElementById('brute7').value      = primebrute_7;
        document.getElementById('prorata7').value    = primebrute_prorata_7;
        document.getElementById('PrimeTierce').value = primebrute_prorata_7;
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
        var primebrute_prorata_10='0';
        if(genre_v==1){
            primebrute_prorata_10='GRATUITS';
        }else{
            primebrute_prorata_10='0';
        }
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
        else if(pack=="mini")
        {
            var lim_gant_ck10=0;
            var primebrute_10=0;
            document.getElementById('PrimeAuto').value='GRATUIT'
        }
        document.getElementById('lim11').value=lim_gant_ck10;
        document.getElementById('franch11').value=franch_10;
        document.getElementById('brute11').value=primebrute_10;
        document.getElementById('prorata11').value=primebrute_prorata_10;
        document.getElementById('PrimeAuto').value=primebrute_prorata_10;
    }


    if(genre_v==6)
    {
        if(pack=="classic" || pack=="confort" || pack=="liberte")
        {
            var primeProrataTotal=primebrute_prorata_1+primebrute_prorata_4+
                primebrute_prorata_5+primebrute_prorata_6+primebrute_prorata_7+primebrute_prorata_8+primebrute_prorata_9+primebrute_prorata_10
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
    document.getElementById('totalBC').value  = totalBC;
    document.getElementById('totalBC1').value = totalBC;
  //  alert("total bonus commercial:"+totalBC);
    //-------------------calcul du total reduction commerciale--------------------------
    var c2=document.getElementById('sel1').value;
    // alert(document.getElementById('totalBC1').value);
    // alert(c2)
    var diff=parseInt(primeProrataTotal );
    // alert("diff"+diff);
    var totalRC=parseInt((primeProrataTotal-primebrute_prorata_1)*(c2/100));
    document.getElementById('totalRC').value  = totalRC;
    document.getElementById('totalRC1').value = totalRC;
   // alert("total reduction commerciale:"+totalRC);
//------------------calcul de la prime nette--------------------------------------
    var totalPN=parseInt(primeProrataTotal-totalBC-totalRC);
    document.getElementById('totalPN').value  = totalPN;
    document.getElementById('totalPN1').value = totalPN;

    // ------------------------FIN CALCUL DES Checkbox-------------------------------
    //******************************************************************************

    //******************************************************************************
    //***********************************************************************************

    //******************************************************************************

    //-----------------------calcul de l'accessoire-------------------------------
    if  (totalPN<=50000) {
        var totalAC=2000
        document.getElementById('totalAC').value  = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else if(totalPN>=50001 && totalPN<=100000){
        var totalAC=3000
        document.getElementById('totalAC').value  = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }

    else if(totalPN>=100001 && totalPN<=500000){
        var totalAC=5000
        document.getElementById('totalAC').value  = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else if(totalPN>=500001 && totalPN<=1000000){
        var totalAC=8000
        document.getElementById('totalAC').value  = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else if(totalPN>=1000001 && totalPN<=5000000){
        var totalAC=10000
        document.getElementById('totalAC').value  = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }
    else{
        var totalAC=20000
        document.getElementById('totalAC').value  = totalAC;
        document.getElementById('totalAC1').value = totalAC;
    }

    //---------------------calcul de la taxe-----------------------
    var taxe=Math.round((totalPN+totalAC)*(10/100));
    document.getElementById('taxe').value = taxe;
    document.getElementById('taxe1').value = taxe;

    //---------------------calcul du fond de garantie-----------------------
    // 2.5*res civ prorata
    var totalFG=parseInt((primebrute_prorata_1-totalBC)*(2.5/100))

    document.getElementById('totalFG').value = totalFG;
    document.getElementById('totalFG1').value = totalFG;


    //---------------------- calcul de la prime totale-------------------------------------

    // var myNum = numeral(1000);
    // var string = myNum.format('0,0');
    // var number = myNum.value();
    // $('#numeral_test').text(string);
    // console.log(typeof(number))

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
        document.getElementById('PrimeIncendie').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeIncendie').style.borderColor=null;
    }
/*************************VOL***********************************/
    if(document.getElementById('PrimeVol').value=="NaN" || document.getElementById('PrimeVol').value=="undefined")
    {
        document.getElementById('PrimeVol').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeVol').style.borderColor=null;
    }
    /*************************Bris de glace***********************************/
    if(document.getElementById('PrimeBris').value=="NaN" || document.getElementById('PrimeBris').value=="undefined")
    {
        document.getElementById('PrimeBris').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeBris').style.borderColor=null;
    }
    /*************************Tierce complete/collision**********************************/
    if(document.getElementById('PrimeTierce').value=="NaN" || document.getElementById('PrimeTierce').value=="undefined")
    {
        document.getElementById('PrimeTierce').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeTierce').style.borderColor=null;
    }
    /*************************Avance sur recours*********************************/
    if(document.getElementById('PrimeAvance').value=="NaN" || document.getElementById('PrimeAvance').value=="undefined")
    {
        document.getElementById('PrimeAvance').style.borderColor='#ff1309';
    }
    else
    {
        document.getElementById('PrimeAvance').style.borderColor=null;
    }
    /*************************Personnes Transportees*********************************/
    if(document.getElementById('PrimePersonne').value=="NaN" || document.getElementById('PrimePersonne').value=="undefined")
    {
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

//Validation du formulaire pour la création d'un contrat 
function fenvoi(){
    if (document.getElementById("nom_assure").value == "") 
     {
        document.getElementById("nom_assure").style.borderColor='#FF0000';
    }
    else
    {
        document.getElementById("nom_assure").style.borderColor='#0000FF';
    }
     if (document.getElementById("prenom_assure").value == "") 
     {
         document.getElementById("prenom_assure").style.borderColor='#FF0000';
     }
     else
     {
        document.getElementById("prenom_assure").style.borderColor='#0000FF';
     }   
     
     if (document.getElementById("marque").value == "") 
      {
         document.getElementById("marque").style.borderColor='#FF0000';
     }
     else
     {
        document.getElementById("marque").style.borderColor='#0000FF';
     }
     if (document.getElementById("type").value == "") 
      {
            document.getElementById("type").style.borderColor='#FF0000';
     }
     else
     {
        document.getElementById("type").style.borderColor='#0000FF';
     }
     if (document.getElementById("immatriculation").value == "") 
      {
            document.getElementById("immatriculation").style.borderColor='#FF0000';
     }
     else
     {
        document.getElementById("immatriculation").style.borderColor='#0000FF';
     }
     if (document.getElementById("puissance").value == "") 
      {
            document.getElementById("puissance").style.borderColor='#FF0000';
        }
     if (document.getElementById("categorie").value == "") 
      {
        document.getElementById("categorie").style.borderColor='#FF0000';
     }
     else
     {
        document.getElementById("categorie").style.borderColor='#0000FF';
     }
     if (document.getElementById("energie").value == "") 
      {
            document.getElementById("energie").style.borderColor='#FF0000';
     }
     if(document.getElementById("val_venale").value == "")
     {
         document.getElementById("val_venale").style.borderColor='#FF0000';
     }
     else
     {
        document.getElementById("val_venale").style.borderColor='#0000FF';
     }
        // Get the modal
        // var modal   = document.getElementById('myModal')
        // var inputs1 = document.getElementById("assure-infos");
        // var inputs2 = document.getElementById("hidden-caracteristiques");
        // modal.style.display   ="block";
        // inputs1.style.display ="none";
        // inputs2.style.display ="none";
        $('#myModal').fadeIn(1000);
        $('#assure-infos,#hidden-caracteristiques').fadeOut(1000)
        $('.buttons').fadeOut(1000)

    // if(document.getElementById("attestation").value == "") 
    //   {
    //         document.getElementById("attestation").style.borderColor='#FF0000';
    //  }
    //  else
    //  {
    //     document.getElementById("attestation").style.borderColor='#0000FF';
    //  }
}
// var inputs1 = document.getElementById("assure-infos");
// var inputs2 = document.getElementById("hidden-caracteristiques");
$('#close_modal').click(function(){
    $('#myModal').fadeOut(1000);
    $('#assure-infos,#hidden-caracteristiques').fadeIn(1000)
    $('.buttons').fadeIn(1000)
})
$(window).click(function(event){
    if (event.target == $('#myModal')) {
    $('#myModal').fadeOut(1000);
    $('#assure-infos,#hidden-caracteristiques').fadeIn(1000)
    }
})
// var span = document.getElementById("close_modal");
// span.onclick = function() {
//   modal.style.display   = "none";
//   inputs1.style.display ="block";
//   inputs2.style.display ="block";
// }
// var modal   = document.getElementById('myModal')
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//     inputs1.style.display ="block";
//     inputs2.style.display ="block";
//   }
// }
$("#valider_simulation").click(function(){
    Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      )
})

$('#afficherPopup').on('click', function(){
    if($(this).hasClass('selected'))
    {
    deselect($(this)); 
    }
    else
    {
    $(this).addClass('selected');
    $('.pop').slideFadeToggle();
    }
    return false;
});
$('#nom_assure,#prenom_assure,#adresse_assure,#tel,#email_assure,#puissance,#val_neuve,#val_venale,#places,#mec,#energie,#categorie,#genre,#marque,#type,#immatriculation').keyup(function(){
    // $(this).val=$(this).val().toUpperCase()
    // alert($(this).val)
    $(this).val($(this).val().toUpperCase())
    // alert('ok')
})


function checkDate(){
    var xD   = document.getElementById("date_debut").value;
    var DateDebut = xD.substring(0, 10);
    var modal_dateEffet = document.getElementById("effetModal");
    var span = document.getElementsByClassName("close")[0];
    var ynew3     = new Date(DateDebut);
    if(ynew3<new Date()){
        modal_dateEffet.style.display = "block";
        span.onclick = function() {
            modal_dateEffet.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal_dateEffet) {
                modal_dateEffet.style.display = "none";
            }
        }
        document.getElementById('date_debut').valueAsDate = new Date();
    }
}

// var btn_dateEffet = document.getElementById("dateEffetbtn");
// var modal_dateEffet = document.getElementById("effetModal");

// btn_dateEffet .onclick = function() {
//     modal_dateEffet.style.display = "block";
//   }

  // When the user clicks anywhere outside of the modal, close it



