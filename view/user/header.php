
<header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"><img src="../../img/images/LogoSaham1.jpg" style="width:13% !important;margin-left: 127%;"></span>
        <div class="mdl-layout-spacer"></div>
    </div>
</header>

<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Saham Assurance</span>
    <?php
        if($_SESSION['mdp']!="saham")
    echo "
    <nav class=\"mdl-navigation\">
        <a class=\"mdl-navigation__link\" href=\"../../view/user/accueil.php\">Accueil</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=valider\">Souscription</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=simul\">Simulation</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=affi\">Consulter mes contrats</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=afficher\">Consulter mes projets</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=passer\">Commande d'attestation</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=garanties\">Voir mes garanties</a>
        <a href='../../controller/intermediaire?action=disconnect' class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--accent\" style=\"margin:auto !important\">DECONNECTER<i class=\"material-icons\">account_circle</i></a>    
    </nav>";
    ?>
</div>
