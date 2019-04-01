<?PHP
include "../core/livreurC.php";
$livreur1C=new livreurC();
$listeLivreur=$livreur1C->afficherLivreur();


//var_dump($listeLivreur->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>Numero de permis</td>
<td>RIB</td>
<td>E-mail</td>
<td>Numero de telephone</td>
<td>Mot de passe</td>
<td>nb heures</td>
<td>tarif horaire</td>
</tr>


<?PHP
foreach($listeLivreur as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['numPermis']; ?></td>
	<td><?PHP echo $row['rib']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['numTel']; ?></td>
	<td><?PHP echo $row['mdp']; ?></td>
	<td><?PHP echo $row['nbHeuresTravail']; ?></td>
	<td><?PHP echo $row['tarifHoraire']; ?></td>
	</tr>
	<?PHP
}
?>
</table>



