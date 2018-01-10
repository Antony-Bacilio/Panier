<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 28/10/2017
 * Time: 00:25
 */

DEFINE('MYSQL_SERVEUR_BASE','mysql:host=infodb.iutmetz.univ-lorraine.fr;dbname=bacilios1u_Site_Vente_Achat');
DEFINE ('MYSQL_UTILISATEUR','bacilios1u_appli'); //$nomUtilisateur = "bacilios1u_appli";
DEFINE ('MYSQL_MOTDEPASSE','phpmyadmin');//$motDePasse = "phpmyadmin";

class Connecter{

    function connexion(){
        try {
            $objPdo = new PDO(MYSQL_SERVEUR_BASE, MYSQL_UTILISATEUR, MYSQL_MOTDEPASSE);
            echo "<b><i>Connexion au serveur Réussie!!...</i></b> <br/><br/>";
            printf("Information sur le serveur: &nbsp;" . $objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $exception){
            echo "Echec de connexion au serveur!!!";
            printf("Info d'erreur: ". $exception->getMessage());
        }
        return $objPdo;
    }

//On ferme la connexion à MySQL;
//$objPdo = NULL;

}
?>