<h4>Liste des aéroports</h4>
<form method="post" action="">
	Mot de recherche :
	<input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Aéroport</th>
				<th>Désignation</th>
				<th>Adresse</th>
				<th>Statut</th>
				<?php if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo '<th>Opérations</th>';
				} ?>
			</tr> 
		</thead>

	<?php
	foreach ($lesAeroports as $unAeroport) {
		echo "<tr>";
		echo "<td>".$unAeroport['idAeroport']. "</td>";
		echo "<td>".$unAeroport['designationAeroport']. "</td>";
		echo "<td>".$unAeroport['adresse']. "</td>";
		echo "<td>".$unAeroport['statut']. "</td>";

		if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
			echo "<td><center>";

			echo "<a href='index.php?page=3&action=sup&idAeroport=".$unAeroport['idAeroport']."'>";
			echo "<img src='images/supprimer.png' height='30' width='30'>";
			echo "</a>";
			echo "<a href='index.php?page=3&action=edit&idAeroport=".$unAeroport['idAeroport']."'>";
			echo "<img src='images/edit.png' height='30' width='30'>";
			echo "</a>";

			echo "</center></td>";
		}
		
		echo "</tr>";
	}

	?>


</table>