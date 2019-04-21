<?PHP
include "../core/CommandeC.php";
$Commande1C=new CommandeC();
$listeCommandes=$Commande1C->afficherCommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>IDCOM</td>
<td>IDUSER</td>
<td>TOTAL</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['IDCom']; ?></td>
	<td><?PHP echo $row['IDUser']; ?></td>
	<td><?PHP echo $row['TotalCom']; ?></td>
	
	<td><form method="POST" action="supprimerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['IDCom']; ?>" name="idcom">
	</form>
	</td>
	<td><a href="modifierCommande.php?idcom=<?PHP echo $row['IDCom']; ?>">
	Modifier</a></td>
	

	</tr>
	<?PHP
}
?>
</table>


