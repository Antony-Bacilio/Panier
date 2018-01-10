<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 29/10/2017
 * Time: 17:23
 */

require_once(dirname(__FILE__) . "/../Modeles/Modele_Articles.php");
    $objArticle = new Articles();

    $matriceArticles = $objArticle->getArticles();

    $idProduit =$objArticle->getId();
    $ref = $objArticle->getDesignation();
    $prixUnit = $objArticle->getPrixunitaire();
    $_SESSION['qte']= $_POST['qte_dde'];
require_once (dirname(__FILE__)."/../Vues/Vue_Acheter.php");

?>