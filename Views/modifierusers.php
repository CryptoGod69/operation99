<HTML>
<head>
</head>
<body>
<?PHP
include "../Entites/utilisateurs.php";
include "../Core/utilisateursC.php";
if (isset($_GET['ID'])){
	$utilisateursC=new utilisateursC();
    $result=$utilisateursC->recupererutilisateurs($_GET['ID']);
	foreach($result as $row){
		$NomPrenom=$row['NomPrenom'];
		$Email=$row['Email'];
		$Tel=$row['Tel'];
		$DDN=$row['DDN'];
		$PWD1=$row['PWD1'];
		$Type=$row['Type'];
?>
<form method="POST">
<table>
<caption>Modifier utilisateurs</caption>
<tr>
<td>CIN</td>
<td><input type="text" name="NomPrenom" value="<?PHP echo $NomPrenom ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="number" name="Tel" value="<?PHP echo $Tel ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="date" name="DDN" value="<?PHP echo $DDN ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="PWD1" value="<?PHP echo $PWD1 ?>"></td>
</tr>
<td>tarif horaire</td>
<td><input type="text" name="Type" value="<?PHP echo $Type ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['ID'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$utilisateurs1=new utilisateurs($_POST['NomPrenom'],$_POST['Email'],$_POST['DDN'],$_POST['Tel'],$_POST['PWD1'],$_POST['Type']);
	$utilisateursC->modifierutilisateurs($utilisateurs1,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: modifierutilisateurs.php');
	
}
?>
</body>
</HTMl>