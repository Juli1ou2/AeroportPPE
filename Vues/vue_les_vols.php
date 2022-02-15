<h4>Liste des vols</h4>
<form method="post" action="">
	Mot de recherche :
	<input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Vol</th>
				<th>Désignation du Vol</th>
				<th>Date du Vol</th>
				<th>Heure du départ</th>
				<th>Heure d'arrivée</th>
				<th>Durée du vol</th>
				<th>Avion</th>
				<th>Aéroport aller</th>
				<th>Aéroport retour</th>
				<th>Pilote aller</th>
				<th>Pilote retour</th>
				<th>Opérations</th>
				
			</tr> 
		</thead>

	<?php
	foreach ($lesVols as $unVol ) {
		echo "<tr>";
		echo "<td>".$unVol['idPilote']. "</td>";
		echo "<td>".$unVol['designationVol']. "</td>";
		echo "<td>".$unVol['dateVol']. "</td>";
		echo "<td>".$unVol['heureDepart']. "</td>";
		echo "<td>".$unVol['heureArrivee']. "</td>";
		echo "<td>".$unVol['dureeVol']. "</td>";
		echo "<td>".$unVol['idAvion']. "</td>";
		echo "<td>".$unVol['idAeroport1']. "</td>";
		echo "<td>".$unVol['idAeroport2']. "</td>";
		echo "<td>".$unVol['idPilote1']. "</td>";
		echo "<td>".$unVol['idPilote2']. "</td>";
		echo "<td><center>";


	
		echo "<a href='index.php?page=1&action=sup&idVol=".$unVol['idVol']."'>";
		echo "<img src='images/supprimer.png' height='30' width='30'>";
		echo "</a>";
		echo "<a href='index.php?page=1&action=edit&idVol=".$unVol['idVol']."'>";
		echo "<img src='images/edit.png' height='30' width='30'>";
		echo "</a>";



		echo "</center></td>";
		echo "</tr>";
	}

	?>


</table>
</div>