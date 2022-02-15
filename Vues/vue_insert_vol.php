<h4>Insertion d'un vol</h4>
<form method="post" action="">
	<table border="0">
		<tr>
			<td>Désignation du vol :</td>
			<td>
				<input type="text" name="designationVol" 
				value="<?php if($leVol != null)  echo $leVol['designationVol'] ; ?>">
			</td>
		</tr>
		<tr>
			<td>Date du vol :</td>
			<td>
				<input type="date" name="dateVol" value="<?php if($leVol != null)  echo $leVol['dateVol'] ; ?>">
			</td>
		</tr>
		<tr>
			<td>Heure de départ :</td>
			<td>
				<input type="time" name="heureDepart"
				value="<?php if($leVol != null)  echo $leVol['heureDepart'] ; ?>"> 
			</td>
		</tr>
		<tr>
			<td>Heure d'arrivée :</td>
			<td>
				<input type="time" name="heureArrivee"
				value="<?php if($leVol != null)  echo $leVol['heureArrivee'] ; ?>">
			</td>
		</tr>
		<tr>
			<td>Durée du vol :</td>
			<td>
				<input type="time" name="dureeVol"
				value="<?php if($leVol != null)  echo $leVol['dureeVol'] ; ?>">
			</td>
		</tr>
		<tr>
			<td>ID Avion :</td>
			<td><select name="idAvion" value="<?php if($leVol!=null) echo $leVol['idAvion'];?>">
				<?php
					foreach ($lesAvions as $unAvion) {
						echo "<option value='".$unAvion['idAvion']."'>";
						echo $unAvion['modele']." ".$unAvion['type'];
						echo "</option>";
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td>ID Aéroport Aller :</td>
			<td><select name="idclient" value="<?php if($leVehicule!=null) echo $leVehicule['idclient'];?>">
				<?php
					foreach ($lesClients as $unClient) {
						echo "<option value='".$unClient['idclient']."'>";
						echo $unClient['nom']." ".$unClient['prenom'];
						echo "</option>";
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td>ID Aéroport Retour :</td>
			<td><select name="idclient" value="<?php if($leVehicule!=null) echo $leVehicule['idclient'];?>">
				<?php
					foreach ($lesClients as $unClient) {
						echo "<option value='".$unClient['idclient']."'>";
						echo $unClient['nom']." ".$unClient['prenom'];
						echo "</option>";
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td>ID Pilote Aller :</td>
			<td><select name="idPilote1" value="<?php if($leVol!=null) echo $leVol['idPilote1'];?>">
				<?php
					foreach ($lesPilotes as $unPilote) {
						echo "<option value='".$unPilote['idPilote']."'>";
						echo $unPilote['nom']." ".$unPilote['prenom'];
						echo "</option>";
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td>ID Pilote Retour :</td>
			<td><select name="idPilote2" value="<?php if($leVol!=null) echo $leVol['idPilote2'];?>">
				<?php
					foreach ($lesPilotes as $unPilote) {
						echo "<option value='".$unPilote['idPilote']."'>";
						echo $unPilote['nom']." ".$unPilote['prenom'];
						echo "</option>";
					}
				?>
			</select></td>
		</tr>

		<?php 
		if($leVol != null ) echo "<input type='hidden' name='idVol' value='".$leVol['idVol']."'>" ;
		?>

		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>		
			<td><input type="submit" <?php
					if ($leVol != null) echo 'name="Modifier" value="Modifier"' ;
					else echo 'name="Valider" value="Valider"';
					 ?> >
					</td>
		</tr>








	</table>
</form>