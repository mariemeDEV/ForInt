<?php
/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 20/08/2017
 * Time: 12:53
 */
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: http://saham-app.com/');
