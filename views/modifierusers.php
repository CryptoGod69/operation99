<?PHP
include "../entities/utilisateurs.php";
include "../core/utilisateursC.php";
if (isset($_GET['ID'])){
	$utilisateursC=new utilisateursC();
    $result=$utilisateursC->recupererutilisateurs($_GET['ID']);
	foreach($result as $row){
		$NomPrenom=$row['NomPrenom'];
		$Email=$row['Email'];
		$DDN=$row['DDN'];
		$Tel=$row['Tel'];
        $PWD1=$row['PWD1'];
        $Region=$row['Region'];
        $Type=$row['Type'];

        ?>
        <form method="POST">
        <table>
        <caption>Modifier user</caption>
        <tr>
        <td>NomPrenom</td>
        <td><input type="text" name="nomprenom" value="<?PHP echo $NomPrenom ?>"></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="<?PHP echo $Email ?>"></td>
        </tr>
        <tr>
        <td>Date de naissance</td>
        <td><input type="date" name="ddn" value="<?PHP echo $DDN ?>"></td>
        </tr>
        <tr>
        <td>Tel</td>
        <td><input type="number" name="tel" value="<?PHP echo $Tel ?>"></td>
        </tr>
        <tr>
        <td>password</td>
        <td><input type="text" name="pwd1" value="<?PHP echo $PWD1 ?>"></td>
        </tr>
        <tr>
        <td>Region</td>
        <td><input type="text" name="region" value="<?PHP echo $Region ?>"></td>
        </tr>
        <tr>
        <td>Type</td>
        <td><input type="text" name="type" value="<?PHP echo $Type ?>"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="modifier" value="modifier"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="hidden" name="ID_ini" value="<?PHP echo $_GET['ID'];?>"></td>
        </tr>
        </table>
        </form>
        <?PHP
              }
            }
if (isset($_POST['modifier'])){
	$utilisateurs=new utilisateurs($_POST['nomprenom'],$_POST['email'],$_POST['ddn'],$_POST['tel'],$_POST['pwd1'],$_POST['region'],$_POST['type']);
	$utilisateursC->modifierutilisateurs($utilisateurs,$_POST['ID_ini']);
	echo $_POST['ID_ini'];
	header('Location: modifierutilisateurs.php');
}
?>