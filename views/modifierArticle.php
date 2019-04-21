<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/article.php";
include "../core/articleC.php";
if (isset($_GET['idc'])){
	$articleC=new ArticleC();
    $result=$articleC->recupererArticle($_GET['idc']);
	foreach($result as $row){
		$idc=$row['IDCom'];
		$idp=$row['IDProduit'];
		$nomp=$row['NomProduit'];
		$qtp=$row['QtProduit'];
		$prixp=$row['PrixProduit'];
?>

<form method="POST">
<table>

<tr>
<td>IDCom</td>
<td><input type="number" name="idc" value="<?PHP echo $idc ?>"></td>
</tr>
<tr>
<td>ID Prod</td>
<td><input type="number" name="idp" value="<?PHP echo $idp ?>"></td>
</tr>
<tr>
<td>Nom Produit</td>
<td><input type="text" name="nomp" value="<?PHP echo $nomp ?>"></td>
</tr>
<tr>
<td>qt prod</td>
<td><input type="number" name="qtp" value="<?PHP echo $qtp ?>"></td>
</tr>
<tr>
<td>prix article</td>
<td><input type="number" name="prixp" value="<?PHP echo $prixp ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idc_ini" value="<?PHP echo $_GET['idc'];?>"></td>
</tr>
</table>
</form>

<?PHP
	}
}
if (isset($_POST['modifier'])){
	$article=new article($_POST['idc'],$_POST['idp'],$_POST['nomp'],$_POST['qtp'],$_POST['prixp']);
	$articleC->modifierArticle($article,$_POST['idc_ini']);
	echo $_POST['idc_ini'];
	header('Location: ../CPanel/tableArticle.php');
}
?>
</body>
</HTMl>