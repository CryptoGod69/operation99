<?PHP
include "../core/articleC.php";
$article1C=new ArticleC();
$listeArticles=$article1C->afficherArticles();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ID COMMANDE </td>
<td>ID PRODUIT </td>
<td>NOM PRODUIT </td>
<td>QT PRODUIT</td>
<td>PRIX PRODUIT</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeArticles as $row){
	?>
	<tr>
	<td><?PHP echo $row['IDCommande']; ?></td>
	<td><?PHP echo $row['IDProduit']; ?></td>
	<td><?PHP echo $row['NomProduit']; ?></td>
	<td><?PHP echo $row['QtProduit']; ?></td>
	<td><?PHP echo $row['PrixProduit']; ?></td>

	<td><form method="POST" action="supprimerArticle.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['NomProduit']; ?>" name="nomp">
	</form>
	</td>
	<td><a href="modifierArticle.php?idc=<?PHP echo $row['IDCommande']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


