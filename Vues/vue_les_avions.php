

<h4>Liste des avions</h4>
<form method="post" action="">
	Mot de recherche :
	<input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Avion</th>
				<th>Modèle</th>
				<th>État</th>
				<th>Nombre de places</th>
				<th>Type</th>
				<th>Opérations</th>
				
			</tr> 
		</thead>

	<?php
	foreach ($lesAvions as $unAvion ) {
		echo "<tr>";
		echo "<td>".$unAvion['idAvion']. "</td>";
		echo "<td>".$unAvion['modele']. "</td>";
		echo "<td>".$unAvion['etat']. "</td>";
		echo "<td>".$unAvion['nbPlaces']. "</td>";
		echo "<td>".$unAvion['type']. "</td>";
		echo "<td>";


	
		echo "<a href='index.php?page=2&action=sup&idAvion=".$unAvion['idAvion']."'>";
		echo "<img src='images/supprimer.jpeg' height='30' width='30'>";
		echo "</a>";
		echo "<a href='index.php?page=2&action=edit&idAvion=".$unAvion['idAvion']."'>";
		echo "<img src='images/edit.jpeg' height='30' width='30'>";
		echo "</a>";



		echo "</td>";
		echo "</tr>";
	}

	?>


</table>
</div>