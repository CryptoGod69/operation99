<?PHP
include "../Core/ProduitRetounreP.php";
$ProduitRetounre1P=new ProduitRetounreP();
$listeProduit=$ProduitRetounre1P->afficherProduits();
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ID_client</td>
<td>ID_produit</td>
<td>Nom</td>
<td>Ref_Commande</td>
<td>Ref_Reclam</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduit as $row){
  ?>
  <tr>
  <td><?PHP echo $row['ID_client']; ?></td>
  <td><?PHP echo $row['ID_produit']; ?></td>
  <td><?PHP echo $row['Nom']; ?></td>
  <td><?PHP echo $row['Ref_Commande']; ?></td>
  <td><?PHP echo $row['Ref_Reclam']; ?></td>
  <td><form method="POST" action="supprimerProduit.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['ID_client']; ?>" name="ID_client">
  </form>
  </td>
  <td><a href="product-list.html?ID_client=<?PHP echo $row['ID_client']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>


