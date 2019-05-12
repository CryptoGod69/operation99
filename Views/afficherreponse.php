<?PHP
include "../Core/ReponseC.php";
$Reponse1C=new ReponseC();
$listeReponse=$Reponse1C->afficherReponses();
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ref_reclam</td>
<td>ID_client</td>
<td>reponse</td>

</tr>

<?PHP
foreach($listeReponse as $row){
  ?>
  <tr>
  <td><?PHP echo $row['ref_reclam']; ?></td>
  <td><?PHP echo $row['ID_client']; ?></td>
  <td><?PHP echo $row['reponse']; ?></td>
  </tr>
  <?PHP
}
?>
</table>


