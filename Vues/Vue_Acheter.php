<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Achat des Articles</title>
    <meta charset="UTF-8">

</head>

<body>

<h1>Acheter l'article suivant:</h1>

<form method ="POST" name="form4">
    <label>Réference: </label> <?php echo $idProduit ?>
    <br/><br/>
    <label>Designation: </label><?php echo $ref; ?>
    <br/><br/>
    <label>Prix Unitaire: </label><?php echo $prixUnit; ?>
    <br/><br/>
    Quantité: <input type = 'text' size ='10' name = 'qte_dde'>
    &nbsp;&nbsp;
    <input type = 'submit' value = 'Ajouter au Caddie' onsubmit="">&nbsp;&nbsp;<input type = 'reset' value = 'Effacer'>
    <br/><br/>
    <label><a href="index.php?page=Articles">Annuler Achat et Retourner à la liste des Articles</a></label>
    <br/><br/>
    <label><a href="index.php?page=AfficherCaddie&id=<?php echo $idProduit ?>">Voir Caddie</a></label>

</form>

</body>
</html>




