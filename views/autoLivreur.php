<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['cin'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererLivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$nbH=$row['nbHeuresTravail'];
		$tarifH=$row['tarifHoraire'];
?>
<form method="POST">
<table>
<caption>Modifier livreur</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<td>numero de permis</td>
<td><input type="text" name="numPermis" value="<?PHP echo $numPermis ?>"></td>
</tr>
<td>RIB</td>
<td><input type="text" name="RIB" value="<?PHP echo $RIB ?>"></td>
</tr>
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<td>mot de passe</td>
<td><input type="text" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="number" name="nbHeuresTravail" value="<?PHP echo $nbHeuresTravail ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="tarifHoraire" value="<?PHP echo $tarifHoraire ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['numPermis'],$_POST['rib'],$_POST['mail'],$_POST['numTel'],$_POST['mdp'],$_POST['nbHeuresTravail'],$_POST['tarifHoraire']);                                                 
	$livreurC->modifierLivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherLivreur.php');
}
?>
</body>
</HTMl>