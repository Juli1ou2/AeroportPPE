<h4>Insertion d'un Aéroport</h4>
<form method="post" action="">
	<table border="0">
		<tr>
			<td> Désignation de l'aéroport :</td>
			<td>
				<input type="text" name="designationAeroport" 
				value="<?php if($leAeroport != null)  echo $leAeroport['designationAeroport'] ; ?>">
			</td>
		</tr>
		<tr>
			<td> Adresse de l'aéroport :</td>
			<td>
				<input type="text" name="adresse" 	value="<?php if($leAeroport != null)  echo $leAeroport['adresse'] ; ?>">

			</td>
		</tr>
		<tr>
			<td> Statut de l'aéroport :</td>
			<td>
				<input type="text" name="statut"
				value="<?php if($leAeroport != null)  echo $leAeroport['satut'] ; ?>">
 
			</td>
		</tr>
	


		<?php 
		if($leAeroport != null ) echo "<input type='hidden' name='idAeroport' value='".$leAeroport['idAeroport']."'>" ;

		?>

		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
		
			<td><input type="submit" <?php
					if ($leAeroport != null) echo 'name="Modifier" value="Modifier"' ;
					else echo 'name="Valider" value="Valider"';
					 ?> >
					</td>
		</tr>








	</table>
</form>