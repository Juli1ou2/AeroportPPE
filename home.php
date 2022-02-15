<h3>Accueil du site</h3>

<h4>
	<!-- <?php 
		echo "Personne connectée : ".$_SESSION['prenom']." ".$_SESSION['nom']; 
		echo "<br/>";
		echo "Rôle : ".$_SESSION['role'];
	?> -->
</h4>

<img src="images/logo.png" height="140" width="220">

<p>Bienvenue sur la plateforme de gestion des pilotes AirFrance. <br>
Veuillez vous connecter pour avoir accès à votre espace.<br/><br/><br/></p>

<?php
	$nbPilotes = countPilotes();
	$nbAvions = countAvions();
	//$nbAeroports = countAeroports();
	$nbVols = countVols();
?>

<h3>Statistiques de la base de données</h3>
<table id="table_affichage">
	<thead>
		<th>Nombre de pilotes</th>
		<th>Nombre d'avions</th>
		<!--<th>Nombre d'aéroports</th>-->
		<th>Nombre de vols</th>
	</thead>
	<?php
		echo "<tr>";
		echo "<td>".$nbPilotes."</td>";
		echo "<td>".$nbAvions."</td>";
		//echo "<td>".$nbAeroports."</td>";
		echo "<td>".$nbVols."</td>";
		echo "</tr>";
	?>
</table>