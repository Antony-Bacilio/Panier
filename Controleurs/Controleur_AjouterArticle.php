<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 29/10/2017
 * Time: 18:35
 */

require_once (dirname(__FILE__)."/../Modeles/Modele_Articles.php");
    $objArticle = new Articles();


require_once (dirname(__FILE__)."/../Vues/Vue_AjouterArticle.php");

    $matr =$objArticle->addArticles();
?>