<?php
session_start();
if(!empty($_GET['page']) && is_file('Controleurs/Controleur_'.$_GET['page'].'.php')) {
    //require_once ('Controleurs/Controleur_Articles.php');
    include 'Controleurs/Controleur_' . $_GET['page'] . '.php';
}
else{
    //Sinon on apelle une page d'accueil
    include 'Controleurs/Controleur_Accueil.php';
}

?>



