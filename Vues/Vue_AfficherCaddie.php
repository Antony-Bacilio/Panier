<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Resume Total</title>
    <meta charset="UTF-8">

</head>

<body>

<h1>Voici vos Articles commandés</h1>
<table border='1'>
    <tr>
        <th>Référence</th>
        <th>Désignation</th>
        <th>Prix Unitaire</th>
        <th>Prix Total</th>
    </tr>
    <?php
    foreach ($matriceArticleCadd as $ligArtCadd){
        if($ligArtCadd->Reference == $IdCaddie){
            echo"<tr>".
                "<td>0$ligArtCadd->Reference</td><td>$ligArtCadd->Designation</td><td>$ligArtCadd->Prix_Unitaire</td>"."<td>$prixTotal</td>".
                "</tr>";
        }
    }
    ?>

</table>
<br/><br/>
<label>Prix Total TTC: </label><?php echo $prixTTC ?>
<br/><br/>
<label><a href="index.php?page=Articles">Retourner à la liste des Articles</a></label>

</body>
</html>




