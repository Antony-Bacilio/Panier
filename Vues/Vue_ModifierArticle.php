<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Modifier Article</title>
    <meta charset="UTF-8">

</head>

<body>
<h1><br/>Modifier un Article:</h1>

<form method ="POST" name="form2">

    <label>Réference: </label><?php echo $idProd?>
    <br/><br/>

    Désignation: <input type = 'text' size='30' name = 'des' id='des' value="<?php echo $ref;?>">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Prix Unitaire: <input type = 'text' size ='10' name = 'prixuni' value=<?php echo $prixUnit;?>>
    &nbsp;&nbsp;
    <br/><br/>
    <input type = 'submit' value = 'Modifier'> &nbsp;&nbsp;<input type = 'reset' value = 'Effacer'>
    <br/><br/>
    <label><a href="index.php?page=Articles">Annuler Modification et Retourner à la liste des Articles</a></label>


</form>
</body>
</html>
