<?PHP
include "../Core/ReclamR.php";
$Reclam1R=new ReclamR();
$listeReclam=$Reclam1R->afficherReponses();
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ID_client</td>
<td>sujet</td>
<td>texte</td>
<td>date_reclam</td>
<td>etat</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeReclam as $row){
  ?>
  <tr>
  <td><?PHP echo $row['ID_client']; ?></td>
  <td><?PHP echo $row['sujet']; ?></td>
  <td><?PHP echo $row['texte']; ?></td>
  <td><?PHP echo $row['date_reclam']; ?></td>
  <td><?PHP echo $row['etat']; ?></td>
  <td><form method="POST" action="supprimerProduit.php">
  <input type="submit" name="supprimer" value="supprimer">





  <input type="hidden" value="<?PHP echo $row['ID_client']; ?>" name="ID_client">

  </form>
  </td>
  <td><a href="modifierReclam.php?ID_client=<?PHP echo $row['ID_client']; ?>&&ref=<?PHP echo $row['ref_reclam']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>


