<!DOCTYPE html>

<html lang="fr">

    <head>

        <title>For-Int</title>
        <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../view/style/search_admin.css">
        <link rel="stylesheet" href="../../view/style/style_aff.css">

    
    <style>
        .ajout-title{
            position: relative;
            top: 98px;
            left: 15px
        }
        hr{
            width: 9%;
            border: 0;
            border-top: 2px solid #062945;
            position: absolute;
            top: 134px;
            left: 140px;
        }
        .dataTab{
            position: relative;
            top: 5px;
        }
       
        #usersData_filter{
            position: relative !important;
            left: -5px !important;
            top: 6px;
        }
        #usersData_filter .form-control-sm{
            border: 0 solid #ffffff !important;
            border-bottom: 1px solid #062944 !important;
            width: 79%;
        }
        thead{
            background: #f9d281;
            color: #062944;
        }
        thead,td{
            font-size:13px !important
        }
        .table td{
            padding-bottom:0 !important
        }
/*Footer*/
        .dataTables_info{
            display:none !important
        }
        .pagination{
            display: inline-flex;
            position: absolute;
            top: -74px;
            left: -42em;
            background: #062843;
            z-index: 3;
        }
        .pagination li a{
            background: #062944 !important;
            color: #f7ba00 !important
        } 
        .container ul{
            display: inline-flex;
            position: absolute;
            top: 15px;
            left:-440px;
            z-index: 3;
        }
        ul li a{
            text-decoration:none !important;
            color: #f7bb3d !important;
            position: relative;
        }
        .list-group-item{
            padding: 5px !important;
        } 
        .mdl-layout__container{
            overflow-x:hidden !important
        }
        .card-header{
            background: #062944;
            width: 582px;
            margin: auto;
            position: relative;
            top: 74px;
            z-index: 1;
        }
        .card-header h3{
            color: #f7bb3d;
        }
        .close{
            position: relative;
            top: -20px;
            z-index: 1;
            left: 526px;
            color: #f7bb3d;
        }
        .modal{
            width:99% !important
        }
        .modal-content{
            height: 429px !important;
            width: 45% !important
        }
        .btn-lg{
            background: #062944;
            color: #f7bb3d !important;
            position: relative;
            top: 50px;
        }
        #myBtn{
            background: #f7ba00 !important;
            position: relative;
            top: 24px;
            z-index: 3;
            padding: 13px;
        }
        .form-group{
            position:relative !important;
            top:11px !important
        }
        .delete-btn{
     
          /*  padding: 5px;
            margin-top: -6px;
            border: none;
            cursor: pointer;
            padding: 6px !important*/
        }
        .annulation-validate{
            padding: 10px 18px 10px 18px !important;
            position: relative !important;
            top: 2px !important;
        }
        .annulation-label{
            position: relative !important;
            top: 52px !important
        }
     
    </style>

    </head>

    <body onchange="CalculeBC()">
    
        <!--header-->
        <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-header">
            <?php include "header.php";?>
        </div>
        <!--header-->

        <!--container-->
        <div class="container">
        <div class="card modal" id='intermediaire_modal'><!--extraction modal-->
            <div class="card-header"><h3>Extraction production</h3></div>
            <div class="card-body">
            <div>
                <div class="modal-content">
                        <!--h3 style='color: #062944;font-weight:bold;text-align:center !important'>Extraction production</h3-->
                        <span class="close">&times;</span>
                        <form method="post" action="../../controller/formulaire/index.php" style="margin-top: -28px;">
                            <div class="form-group inline" style="width: 65%;margin:auto;margin-top:49px;    border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;" >
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Début</label>
                                <input type ="date"  name="debut" id="mec" required style="">
                            </div>
                            <div class="form-group" style="width: 65%;margin:auto;margin-top:28px;border: 1px solid #ffffff !important;border-bottom: 1px solid #062944 !important;">
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Période Fin</label>
                                <input type ="date"  name="fin" id="mec" required style="">
                            </div>
                            <div style="text-align: center;margin: 0 auto;">
                                <input type="submit" name="action" value="EXTRAIRE" class="btn btn-primary btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--extraction production-->
               <a id="myBtn">Éxtraire production</a>
          <h1 class="ajout-title">Géstion des contrats</h1>
          <hr style='position:absolute;top:153px !important'>
            <table id="usersData" class="table dataTab table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Numero Police</th>
                        <th>Date debut contrat</th>
                        <th>Date Echeance</th>
                        <th>Assure</th>
                        <th>Conditions particuliéres</th>
                        <th>Etat de la production</th>
                        <th>Annuler</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $cp=0;
                    while($row=$resultat->fetch())
                    {
                        $cp+=1;
                    echo "<tr>
                        <th scope=\"row\">$cp</th>                         
                        <td>$row[1]</td>
                        <td class=\"echeance_date\">$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[5]&nbsp;$row[4]</td>                   
                        <td style='text-align: center;'>
                            <a href='../../controller/formulaire/?action=lister&id=$row[0]'<i class=\"material-icons\" style=\"color:#062944 !important\">print</i></a>
                        </td> ";
                        if($row[7]=="En cours"){
                            echo "<td style='background:green;text-align:center;font-weight:bold'>".$row[7]."</td>";
                        }else if($row[7]=="Annulé"){
                            echo "<td style='background:red;text-align:center;font-weight:bold'>".$row[7]."</td>";
                        }
                        echo
                            "<td>
                                <button style=\"border:none;background:#ffffff\"class=\"delete-btn\" value='$row[0]'><i class=\"material-icons\" style=\"color:#b71a23 !important;margin-left:21px\">delete</i></button>
                                <input type=\"text\" class=\"souscript-date\" value='$row[2]' style=\"display:none\">
                            </td>                        
                    </tr>";
                    }
                       ?>
                </tbody>
                </tfoot>                
                <tfoot>

            </table>

            <div class="card modal" id='annulation_modal'><!--Annulation contrat-->
            <div class="card-header"><h3>Annuler la production</h3></div>
            <div class="card-body">
            <div>
                <div class="modal-content">
                        <!--h3 style='color: #062944;font-weight:bold;text-align:center !important'>Extraction production</h3-->
                        <span class="close">&times;</span>
                        <input type="text" value=<?php echo '"'.$mat.'"'?> style="display:none !important" id='mat_int'>
                        <p style='position: relative;top: 26px;font-weight: bold;font-weight: bold;color: #062944;'><span style='color:red'>*</span>Etes-vous sure de vouloir annuler la police :<p class='policeNum'></p> </p>
                        <form method="POST" action="../../controller/formulaire/index.php" style="margin-top: -28px;" id="annulation-form">
                            <div class="form-group inline">
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Numéro police</label>
                                <input type ="text"  name="police" id="pol" required style="">
                            </div>
                            <div class="form-group">
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Code intermédiaire</label>
                                <input type ="text"  name="intermediaire" id="code" required style="">
                            </div>
                            <div class="form-group">
                                <label for="Motif d'annulation">Motif d'annulation</label>
                                <select class="form-control" id="motifAnnulation" name="motif">
                                    <option>Erreur de saisie</option>
                                    <option>Retour</option>
                                </select>
                            </div>
                            <input type="text" value='' id='date_debut_contrat' style='display:none' name='date_souscription'>
                            <div style="text-align: center;margin: 0 auto;">
                                <input  name="action"  type="submit" value="Valider Annulation" class="btn btn-primary btn-lg annulation-validate" id='confirm_annulation' style='margin-top:6px !important'>
                            </div>
                        </form>
                        <!--p>NB: Notez que l'annulattion d'une prduction est irreversible, merci de vous rassurer que vous désirez vraiment faire l''annulation</p-->
                    </div>
                </div>
            </div>
        </div><!--Annulation contrat-->

        
        <div class="card modal" id='demande_modal'><!--Demande d'an nulation de contrat-->
            <div class="card-header"><h3>Demande d'annulation</h3></div>
            <div class="card-body">
            <div>
                <div class="modal-content">
                        <span class="close">&times;</span>
                        <input type="text" value=<?php echo '"'.$mat.'"'?> style="display:none !important" id='mat_int'>
                        <form method="POST" action="../../controller/formulaire/index.php" style="margin-top: -28px;" id="annulation-form">
                            <div class="form-group inline">
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Numéro police</label>
                                <input type ="text"  name="police" id="polDemande" required style="">
                            </div>
                            <div class="form-group">
                                <label for="dtp_input2" class=" control-label" title="Mise en circulation" >Code intermédiaire</label>
                                <input type ="text"  name="intermediaire" id="codeDemande" required style="">
                            </div>
                            <div class="form-group">
                                <label for="Motif d'annulation">Motif d'annulation</label>
                                <select class="form-control" id="motifDemande" name="motif">
                                    <option>Erreur de saisie</option>
                                    <option>Retour</option>
                                </select>
                            </div>
                            <input type="text" value='' id='date_debut' style='display:none' name='date_souscription'>
                            <div style="text-align: center;margin: 0 auto;">
                                <input  name="action"  type="submit" value="Valider Demande" class="btn btn-primary btn-lg annulation-validate" id='' style='margin-top:66px !important'>
                            </div>
                        </form>
                        <!--p>NB: Notez que l'annulattion d'une prduction est irreversible, merci de vous rassurer que vous désirez vraiment faire l''annulation</p-->
                    </div>
                </div>
            </div>
        </div><!--Annulation contrat-->

        <div class="card modal" id='message_modal'><!--Demande d'an nulation de contrat-->
            <div class="card-header" style='width: 26% !important;text-align:center !important;position: relative;top: 56px;'><h3 style='font-size:13px'>Demande d'annulation</h3></div>
            <div class="card-body">
            <div>
                <div class="modal-content" style='height: 158px !important;width: 27% !important;text-align:center !important'>
                        <span class="close" style='position: relative;left: 155px;top: -27px;'>&times;</span>
                        <p>Ce contrat a étè déjà annulé</p>                       
                        <!--p>NB: Notez que l'annulattion d'une prduction est irreversible, merci de vous rassurer que vous désirez vraiment faire l''annulation</p-->
                    </div>
                </div>
            </div>
        </div><!--Annulation contrat-->


        </div>
        <!--container-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js" charset="UTF-8"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../view/js/form-script.js"></script>
    <script>
        $(document).ready(function() {
            $('#usersData').DataTable();
            $("#usersData_filter").find('input').focus()
        } );
    </script>
    <script>
        $('#add_new_intermediaire').on('click',function(){
            $('#addUserModal').fadeIn()
        })
    </script>
    <script>
        $("#myBtn").on('click',function(){
            $('#intermediaire_modal').fadeIn()
        })
    </script>
    <script>
        var intermediaire_modal      = document.getElementById('intermediaire_modal')
        $('#first_prod').click(function(){
            $('#intermediaire_modal').fadeIn()
        })
    </script>
    <script>
        var production_intermediaire = document.getElementsByClassName('intermediaire_prod')
        var intermediaire_modal      = document.getElementById('intermediaire_modal')
        $('.userDataTab td:last-child').find('button').on('click',function(){
            intermediaire_modal.style.display='block'
        })
    </script>
 
    <script>
        var cell =  $("#usersData tr td:last-child")
        cell.on('click',function(){
            var date_souscription = ($(this).find('.souscript-date').val());
            var date              = new Date();
            var current_date      = ((date.getFullYear() + '-' + (date.getMonth()+1) + '-' +  date.getDate()));
            var police            = ($(this).find('.delete-btn').val());
            var int               = $('#mat_int').val();

          
        //Souscription datant de la journée
        if ((new Date(date_souscription)) > (new Date(current_date)) ) {
           // alert("not");
            $('#pol').val(police);
            $('#code').val(int);
            $('#date_debut_contrat').val(date_souscription);
            $('#annulation_modal').fadeIn();
        }
        //Souscription antérieure
        else {
           // alert("yes");
            $('#polDemande').val(police);
            $('.policeNum').text('ok');
            $('#codeDemande').val(int);
            $('#date_debut').val(date_souscription);
            $('#demande_modal').fadeIn();
        }
         
        })
    </script>
    <script>
        $(document).ready(function(){
            $('#usersData tr').each(function() {
                var etat = $(this).find("td").eq(5).html(); 
                if(etat =='Annulé'){
                    var delete_btn=$(this).find("td").eq(6)
                    $(delete_btn).unbind()
                    delete_btn.on('click',function(){
                        $('#message_modal').fadeIn();
                    })
                }
            });
        })
    </script>
    <script>
        $('.close').on('click',function(){
            $('#intermediaire_modal,#addUserModal,#annulation_modal,#demande_modal,#message_modal').fadeOut()
        })
    </script>
    <script>
        $(window).on('click',function(event){
            if (event.target == $('#intermediaire_modal')) {
                $('#intermediaire_modal,#addUserModal,#annulation_modal').fadeOut()
            }
        })
    </script>
    </body>
</html>