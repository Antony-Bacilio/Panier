<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Ajouter Article</title>
    <meta charset="UTF-8">

</head>

<body>
<h2>Ajouter un Article:</h2>

<form method ="POST" name="form1">
    Désignation: <input type = 'text' size='30' name = 'designation' id='designation'>
    <br/><br/>
    Prix Unitaire: <input type = 'text' size ='10' name = 'prixunitaire'>
    <br/><br/>
    <input type = 'submit' value = 'Ajouter'> &nbsp;&nbsp;<input type = 'reset' value = 'Effacer'>
    <br/><br/>
    <label><a href="index.php?page=Articles">Annuler Ajout d'Article et Retourner à la liste des Articles</a></label>

</form>