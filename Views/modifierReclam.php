<?PHP
include_once "../Entites/Reclam.php";
include_once "../Core/ReclamR.php";
if (isset($_GET['ID_client'])){
  $ReclamR=new ReclamR();
    $result=$ReclamR->recupererReclam($_GET['ID_client']);
  foreach($result as $row){
    $ID_client=$row['ID_client'];
    $sujet=$row['sujet'];
    $texte=$row['texte'];
    $date_reclam=$row['date_reclam'];
    $etat=$row['etat'];
?>

<?PHP
  }
}
if (isset($_POST['modif'])){
  $Reclam=new Reclam($_POST['ID_client'],$_POST['sujet'],$_POST['texte'],$_POST['date_reclam'],$_POST['etat']);
  $ReclamR->modifierReclam($Reclam);
  echo $_POST['ID_client'];
  header('Location: reclam-update.php');
}
?>