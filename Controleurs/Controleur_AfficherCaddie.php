<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 29/10/2017
 * Time: 20:27
 */


    require_once(dirname(__FILE__) . "/../Modeles/Modele_AjouterCaddie.php");
    $objArticle = new Ajouter();
    $matriceArticleCadd = $objArticle->getArticlesCaddies();
    $IdCaddie = $objArticle->getIdCaddie();
    $prixTotal = $objArticle->getPrixtotal();
    $prixTTC = $objArticle->getPrixTTC();


    require_once(dirname(__FILE__) . "/../Vues/Vue_AfficherCaddie.php");

?>