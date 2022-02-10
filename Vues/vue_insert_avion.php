<h4>Insertion d'un Avion</h4>
<form method="post" action="">
	<table border="0">
		<tr>
			<td> Modele d'avion :</td>
			<td>
				<input type="text" name="modele" 
				value="<?php if($leAvion != null)  echo $leAvion['modele'] ; ?>">
			</td>
		</tr>
		<tr>
			<td> État de l'avion :</td>
			<td>
				<input type="text" name="etat" 	value="<?php if($leAvion != null)  echo $leAvion['etat'] ; ?>">

			</td>
		</tr>
		<tr>
			<td> Nombres de place :</td>
			<td>
				<input type="text" name="nbPlaces"
				value="<?php if($leAvion != null)  echo $leAvion['nbPlaces'] ; ?>">
 
			</td>
		</tr>
		<tr>
			<td> Type d'avion :</td>
			<td>
				<input type="text" name="type"
				value="<?php if($leAvion != null)  echo $leAvion['type'] ; ?>">

			</td>
		</tr>


		<?php 
		if($leAvion != null ) echo "<input type='hidden' name='idAvion' value='".$leAvion['idAvion']."'>" ;

		?>

		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
		
			<td><input type="submit" <?php
					if ($leAvion != null) echo 'name="Modifier" value="Modifier"' ;
					else echo 'name="Valider" value="Valider"';
					 ?> >
					</td>
		</tr>








	</table>
</form>