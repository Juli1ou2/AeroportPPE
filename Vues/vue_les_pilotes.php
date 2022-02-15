<h4>Liste des pilotes</h4>
<form method="post" action="">
	Mot de recherche :
	<input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Pilote</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Age</th>
				<th>Email</th>
				<th>Grade</th>
				<th>Opérations</th>
				
			</tr> 
		</thead>

	<?php
	foreach ($lesPilotes as $unPilote ) {
		echo "<tr>";
		echo "<td>".$unPilote['idPilote']. "</td>";
		echo "<td>".$unPilote['nom']. "</td>";
		echo "<td>".$unPilote['prenom']. "</td>";
		echo "<td>".$unPilote['age']. "</td>";
		echo "<td>".$unPilote['email']. "</td>";
		echo "<td>".$unPilote['grade']. "</td>";
		echo "<td>";


	
		echo "<a href='index.php?page=1&action=sup&idPilote=".$unPilote['idPilote']."'>";
		echo "<img src='images/supprimer.png' height='30' width='30'>";
		echo "</a>";
		echo "<a href='index.php?page=1&action=edit&idPilote=".$unPilote['idPilote']."'>";
		echo "<img src='images/edit.png' height='30' width='30'>";
		echo "</a>";



		echo "</td>";
		echo "</tr>";
	}

	?>


</table>
</div>