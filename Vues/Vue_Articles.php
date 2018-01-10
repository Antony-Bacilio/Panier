<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Articles en Ventes</title>
    <meta charset="UTF-8">

</head>

<body>

<h1>Les articles en Ventes</h1>
<table border='1'>
    <tr>
        <th>Référence</th>
        <th>Désignation</th>
        <th>Prix Unitaire</th>
        <th colspan="3">Edition</th>
    </tr>
    <?php
    foreach ($matriceArticles as $ligArticle){
        echo"<tr>".
            "<td>0$ligArticle->Reference</td><td>$ligArticle->Designation</td><td>$ligArticle->Prix_Unitaire</td>"."<td><a href='index.php?page=ModifierArticle&id=0$ligArticle->Reference'>Modifier</a></td>".
            "<td><a href='index.php?page=SupprimerArticle&id=$ligArticle->Reference'>Supprimer</a></td>".
            "<th colspan=\"3\"><a href=\"index.php?page=Acheter&id=0$ligArticle->Reference\">Acheter</a></th>".
            "</tr>";
    }
    ?>
    <tr>

        <th colspan="6"><a href="index.php?page=AjouterArticle">Ajouter Article</a></th>
    </tr>
</table>

</body>
</html>




