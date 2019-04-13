<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['idcom'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recupererCommande($_GET['idcom']);
	foreach($result as $row){
		$idcom=$row['IDCom'];
		$iduser=$row['IDUser'];
		$totalcom=$row['TotalCom'];
	
?>
<form method="POST">
<table>
<caption>Modifier Commande</caption>
<tr>
<td>IDCom</td>
<td><input type="number" name="idcom" value="<?PHP echo $idcom ?>"></td>
</tr>
<tr>
<td>IDUSER</td>
<td><input type="number" name="iduser" value="<?PHP echo $iduser ?>"></td>
</tr>
<tr>
<td>total</td>
<td><input type="number" name="totalcom" value="<?PHP echo $totalcom ?>"></td>
</tr>
<tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idcom_ini" value="<?PHP echo $_GET['idcom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['idcom'],$_POST['iduser'],$_POST['totalcom']);
	$commandeC->modifierCommande($commande,$_POST['idcom_ini']);
	echo $_POST['idcom_ini'];
	header('Location: afficherCommande.php');
}
?>
</body>
</HTMl>