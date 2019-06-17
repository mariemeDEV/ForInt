$(document).ready(function(){
/*function getCP(){
    window.open("../../controller/formulaire/?action=lister1&opli=$unikId&att=$attestationCedeao")
    /*var a ='../../controller/formulaire/?action=lister1&opli=$unikId&att=$attestationCedeao';
    window.location.href='../../controller/formulaire/?action=valider';
    window.open(a);*/
//}
/*function getOne(){
    var cat = $categorie;
    if(cat!='4'){
        var b ='../../controller/formulaire/?action=lister2&opli=$unikId';
        window.location.href='../../controller/formulaire/?action=valider';
        window.open(b);
    }else{
        var c ='../../controller/formulaire/?action=lister3&opli=$unikId';
        window.location.href='../../controller/formulaire/?action=valider';
        window.open(c);
    }
}
function getCedeao(){
var d ='../../controller/formulaire/?action=lister4&opli=$unikId';
window.location.href='../../controller/formulaire/?action=valider';
window.open(d);
}*/

   // assurance-form
   //getCP()
   /* $.ajax({
    url: "../../controller/formulaire/post.php",
    type: "GET",
    dataType: json,
        success: function ( result ) {
            if ( result.status === "Success" ) {
                alert( "success" )                 
            } else if (result.status === 'Fail'){
                alert( "non" )                 
            }
        }
    })*/
    $.ajax({
        url: "../../controller/formulaire/post.php",
        dataType: "json", //the return type data is jsonn
        success: function(data){ // <--- (data) is in json format
          alert(data.test1);
          //parse the json data
        }
      });

})
