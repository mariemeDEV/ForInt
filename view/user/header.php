
<header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"><img src="../../img/images/LogoSaham1.jpg" style="width:13% !important;"></span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation mdl-layout--large-screen-only ">
            <a  href="../../">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style='position: absolute !important;left: 71rem !important;top: 14px;'>DECONNEXION<i class="material-icons">account_circle</i></button></a>
        </nav>
    </div>
</header>

<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Saham Assurance</span>
    <?php
        if($_SESSION['mdp']!="saham")
    echo "<nav class=\"mdl-navigation\">
        <a class=\"mdl-navigation__link\" href=\"../../view/user/accueil.php\">Accueil</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/intermediaire/?action=profil\">Mon compte</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=valider\">Creer une assurance</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=afficher\">Consulter Devis</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=affi\">Consulter Contrats</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/formulaire/?action=simul\">Faire une Simulation</a>
        <a class=\"mdl-navigation__link\" href=\"../../controller/intermediaire?action=disconnect\">
        <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--accent\" style=\"margin:auto !important\">DECONNECTER<i class=\"material-icons\">account_circle</i></button></a>    
    </nav>
";
    ?>
</div>
