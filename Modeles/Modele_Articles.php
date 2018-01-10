<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 28/10/2017
 * Time: 01:18
 */

class Articles{

    private $BdD;
    private $Arts;

    private $idProd;


    public function  __construct(){

        require_once('Modele_Connecter.php');

        $connecter = new Connecter();        //$this->Arts = Modele_Connecter::connexion();//si la fonction CONNEXION serait Static;
        $this->BdD = $connecter->connexion();
    }

    /********************** Montrer les Articles *******************/
    public function getArticles(){

        try{
            $requete_Article = $this->BdD->query('SELECT * FROM Article');
            $ligne = $requete_Article->fetchAll(PDO::FETCH_OBJ);
            $this->Arts = $ligne;
            return $this->Arts;
        }
        catch (Exception $excep) {
            die($excep->getMessage());
        }
    }

    /*********************** Obtenir IdProduit *********************/
    public function getId(){
        $this->idProd = $_GET['id'];
        return $this->idProd;
    }

    /*********************** Obtenir Designation *********************/
    public function getDesignation(){
        foreach ($this->Arts as $ligDes) {
            if ($ligDes->Reference == $_GET['id']) {
                return $ligDes->Designation;
            }
        }
        return NULL;
    }

    /*********************** Obtenir PrixUnitaire *********************/
    public function getPrixunitaire(){
        foreach ($this->Arts as $ligPrix) {
            if($ligPrix->Reference==$_GET['id']){
                return $ligPrix->Prix_Unitaire;
            }
        }
        return NULL;
    }

    /********************** Actuliser Articles *******************/
    public function updateArticles(){

        try{
            if (isset($_GET['id']) || isset($_POST['des']) || isset($_POST['prixuni'])) {
                $requete_Article = $this->BdD->prepare(' UPDATE Article SET Designation=?, Prix_Unitaire = ? WHERE Reference=?');
                $requete_Article->execute(array($_POST['des'],$_POST['prixuni'],$_GET['id']));
                if ($requete_Article) {
                   echo "<br/><br/><b>L'article est modifié!!</b>";
                    return 1;
                } else {
                   echo "On n'a pas pu modifier";
                   return 0;
               }
            }
        }
        catch (Exception $excep){
            die($excep->getMessage());
        }
    }

    /*********************** Ajouter Articles *********************/
    public function addArticles(){
            //if(isset($_POST['designation']) && isset($_POST['prixunitaire'])){
        try{
                /*if(empty($_POST))echo "<script langage=\"javascript\" type=\"text/javascript\" src=\"alertes.js\"> alerteInfo();</script>";
                else if(empty($_POST['designation']) && !empty($_POST['prixunitaire'])) echo "<script langage=\"javascript\" type=\"text/javascript\" src=\"alertes.js\"> alerteDesig();</script>";
                else if (!empty($_POST['designation'])&& empty($_POST['prixunitaire'])) echo "<script langage=\"javascript\" type=\"text/javascript\" src=\"alertes.js\"> alertePrix();</script>";*/
                //else {
                    $requete_Article = $this->BdD->prepare('INSERT INTO Article(Designation, Prix_Unitaire) VALUES(?,?)');
                    $requete_Article->execute(array($_POST['designation'],$_POST['prixunitaire']));
                    if($requete_Article){
                        echo "<br/><br/><b>Un nouveau article est ajouté!!</b>";
                        return 1;
                    }
                    else{
                        echo "On n'a pas pu ajouter";
                        return 0;
                    }
        }
        catch (Exception $excep){
            die($excep->getMessage());
        }
    }

    /*********************** Supprimer Articles *********************/
    public function deleteArticles(){
        //$idProduit = $_POST['Reference'];
        try {
            //$requete_Article = $this->BdD->query(' DELETE FROM Article WHERE References=$_POST[References]');
            if (isset($_GET['id'])) {
                $requete_Article = $this->BdD->prepare(' DELETE FROM Article WHERE Reference=?');
                $requete_Article->execute(array($_GET['id']));
                /*if ($requete_Article) {
                    echo "<br/><br/>Un nouveau article est supprimé!!";
                } else {
                    echo "On n'a pas pu supprimer";
                }*/
            }
        }
        catch (Exception $excep){
            die($excep->getMessage());
        }
    }
}
?>
