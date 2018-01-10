<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 29/10/2017
 * Time: 18:59
 */

    require_once(dirname(__FILE__) . "/../Modeles/Modele_Articles.php");
    $objArticle = new Articles();
        $idProd = $objArticle->getId();

    $ref = $objArticle->getDesignation();
    $prixUnit = $objArticle->getPrixunitaire();
    $objArticle->updateArticles();


    require_once (dirname(__FILE__)."/../Vues/Vue_ModifierArticle.php");



?>