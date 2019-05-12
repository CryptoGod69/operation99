<?php
	$d=$_GET['dt'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Details de  la date : <?php echo $d;?></title>
</head>
<body>
<h1>Detail de la date : <?php echo $d;?></h1>
<?PHP
include "../core/livraisonC.php";
$livraison1C=new livraisonC();
$listelivraison=$livraison1C->afficherlivraisons1($d);
?>
		<tr>
                                                
                                                <th data-field="id">id</th>
                                                <th data-field="name">adresse</th>
                                                <th data-field="company">cin lirveur</th>
                                                <th data-field="price">Date Livraison</th>
												<th data-field="date">Durée Livraison</th>
												<th data-field="task">Etat livraison</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
                                            foreach($listelivraison as $row){
                                                ?>
                                                <tr>
                                                <td><?PHP echo $row['id']; ?></td>
                                                <td><?PHP echo $row['adresse']; ?></td>
                                                <td><?PHP echo $row['cinLivreur']; ?></td>
                                                <td><?PHP echo $row['dateLivraison']; ?></td>
                                                <td><?PHP echo $row['dureeLivraison']; ?></td>
                                                <td><?PHP echo $row['etatLivraison']; ?></td>
                                                </tr>
                                                <?PHP
                                            }
                                            ?>

