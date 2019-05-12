<?PHP
include "../Entites/Chat.php";
include "../Core/ChatC.php";

if (isset($_POST['pseudo']) and isset($_POST['message']) and !empty($_POST['pseudo']) and !empty($_POST['message']))
{
$Chat1=new Chat($_POST['pseudo'],$_POST['message']);
$Chat1C=new ChatC();
$Chat1C->ajouterChat($Chat1);
header('Location: chat.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>