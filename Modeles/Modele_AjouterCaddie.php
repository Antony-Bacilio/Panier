<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 29/10/2017
 * Time: 13:37
 */

require_once ("Modele_Articles.php");
class Ajouter extends Articles {

    private $qte;
    private $prixTotal;
    private $prixTTC;



    public function getQuantite(){

        return $this->qte = $_SESSION['qte'];
    }

    public function getIdCaddie(){
        $idCaddie = $_GET['id'];
        return $idCaddie;
    }

    public function getPrixunitaire()
    {
        return parent::getPrixunitaire(); // TODO: Change the autogenerated stub
    }

    public function getArticlesCaddies(){
        return $this->getArticles();
    }

    public function getPrixtotal(){
        $this->prixTotal = $this->getQuantite() * $this->getPrixunitaire();
        return $this->prixTotal;
    }

    public function getPrixTTC(){

        $this->prixTTC = $this->getPrixtotal();
        return $this->prixTTC;
    }

}
?>

