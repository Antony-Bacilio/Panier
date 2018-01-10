<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 28/10/2017
 * Time: 02:52
 */

//Appel au Modele;
    require_once (dirname(__FILE__)."/../Modeles/Modele_Articles.php");
        $objArticle = new Articles();
        $matriceArticles = $objArticle->getArticles();

    require_once (dirname(__FILE__)."/../Vues/Vue_Articles.php");
?>
