<?php
 include "../config.php";


$db=config::getConnexion();
  

  $req1= $db->query("SELECT  COUNT(*) as nb10  from reclamation where etat='non traitee' " );
    $nb1 = $req1->fetch();

     $req2= $db->query("SELECT  COUNT(*) as nb20  from reclamation where etat='traitee' " );
    $nb2 = $req2->fetch();

    $req3= $db->query("SELECT  COUNT(*) as nbf  from reclamation " );
    $nb3 = $req3->fetch();

    $s1=($nb1['nb10']/$nb3['nbf'])*100;//%reclamtion nn traite
    $s2=($nb2['nb20']/$nb3['nbf'])*100;//%reclamation traite


		?>



<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true, //si je vuex changer les couleurs
	animationEnabled: true,
	title: {
		text: "Statistiques des réclamations "
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
	
		
			{ y: <?php echo $s1; ?>, label: "traitee" },
			{ y:  <?php echo $s2?>, label: "non traitee " }
			
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div> <!-- a mettre dans la template toute la div -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>