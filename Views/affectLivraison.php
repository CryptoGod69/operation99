<?PHP
include "../Core/livraisonC.php";
include "../Entites/livraison.php";
$LivraisonC=new LivraisonC();

if (isset($_GET["cin"]) and isset($_GET["id"])){
	$LivraisonC->affecterLivraison($_GET["id"],$_GET["cin"]);
}
echo '<script>window.location="afficherLivraison.php"</script>';

?>