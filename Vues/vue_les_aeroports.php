<h4>Liste des aéroports</h4>
<form method="post" action="">
	Mot de recherche :
	<input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

	<div class="table-responsive">
	<table class="table">
		<thead class="bg-dark text-light">
			<tr>
				<th>Id Aéroport</th>
				<th>Désignation</th>
				<th>Adresse</th>
				<th>Statut</th>
				
			</tr> 
		</thead>

	<?php
	foreach ($lesAeroports as $unAeroport ) {
		echo "<tr>";
		echo "<td>".$unAeroport['idAeroport']. "</td>";
		echo "<td>".$unAeroport['designationAeroport']. "</td>";
		echo "<td>".$unAeroport['adresse']. "</td>";
		echo "<td>".$unAeroport['statut']. "</td>";
		echo "<td>";


	
		echo "<a href='index.php?page=3&action=sup&idAeroport=".$unAeroport['idAeroport']."'>";
		echo "<img src='images/supprimer.jpeg' height='30' width='30'>";
		echo "</a>";
		echo "<a href='index.php?page=3&action=edit&idAeroport=".$unAeroport['idAeroport']."'>";
		echo "<img src='images/edit.jpeg' height='30' width='30'>";
		echo "</a>";



		echo "</td>";
		echo "</tr>";
	}

	?>


</table>
</div>