<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
$livreur=new livreur(75757575,'BEN Ahmed','Salah',50,20,'kaiskasmi@€sprit.tn',232228585,'tamere',10,10);
$livreurC=new livreurC();
$livreurC->afficherLivreur($livreur);
echo "le salaire est : ";
$livreurC->calculerSalaire($livreur); 
echo "<br>";
?>