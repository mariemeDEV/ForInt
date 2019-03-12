<header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"><img src="../../img/images/LogoSaham1.jpg"></span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation mdl-layout--large-screen-only ">
            <a  href="../../intermediaire?action=disconnect">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">DECONNEXION<i class="material-icons">account_circle</i></button></a>
        </nav>
    </div>
</header>
<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Saham Assurance</span>
    <?php
        if($_SESSION['mdp']!="saham")
            echo "    <nav class=\"mdl-navigation\">
        <a class=\"mdl-navigation__link\" href=\"../../view/user/accueil.php\">Accueil</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/intermediaire/?action=profil\">Mon compte</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=valider\">Creer une assurance</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=afficher\">Consulter_contrat</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=affi\">Consulter_devis</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=simul\">Simulation</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/intermediaire?action=disconnect\">
            <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--accent\">
                DECONNECTER<i class=\"material-icons\">account_circle</i>
            </button></a>    
    </nav>
";
    ?>
</div>
