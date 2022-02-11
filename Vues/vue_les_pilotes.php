<h4>Liste des pilotes</h4>
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
				<th>Id Pilote</th>
				<th>Nom Pilote</th>
				<th>Prenom Pilote</th>
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
		echo "<img src='images/supprimer.jpeg' height='30' width='30'>";
		echo "</a>";
		echo "<a href='index.php?page=1&action=edit&idPilote=".$unPilote['idPilote']."'>";
		echo "<img src='images/edit.jpeg' height='30' width='30'>";
		echo "</a>";



		echo "</td>";
		echo "</tr>";
	}

	?>


</table>
</div>