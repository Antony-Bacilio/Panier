<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 29/10/2017
 * Time: 19:45
 */

require_once(dirname(__FILE__) . "/../Modeles/Modele_Articles.php");
$objArticle = new Articles();
$objArticle->deleteArticles();
$matriceArticles = $objArticle->getArticles();


require_once (dirname(__FILE__)."/../Vues/Vue_Articles.php");

?>