<?PHP
include "../entities/Commande.php";
include "../core/CommandeC.php";
$commande=new commande(20,9,5000);
$commandeC=new CommandeC();
$commanderC->afficherCommandes($commande);
echo "****************";
echo "<br>";
echo "idcom:".$commande->getIDCom();
echo "<br>";
echo "iduser:".$commande->getIDUser();
echo "<br>";
echo "totalcom:".$commande->getTotalCom();
echo "<br>";




?>