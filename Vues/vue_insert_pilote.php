<h4>Insertion d'un pilote</h4>
<form method="post" action="">
	<table border="0">
		<tr>
			<td> Nom :</td>
			<td>
				<input type="text" name="nom" 
				value="<?php if($lePilote != null)  echo $lePilote['nom'] ; ?>">
			</td>
		</tr>
		<tr>
			<td> Prenom :</td>
			<td>
				<input type="text" name="prenom" 	value="<?php if($lePilote != null)  echo $lePilote['prenom'] ; ?>">

			</td>
		</tr>
		<tr>
			<td> Age :</td>
			<td>
				<input type="text" name="age"
				value="<?php if($lePilote != null)  echo $lePilote['age'] ; ?>">
 
			</td>
		</tr>
		<tr>
			<td> Email :</td>
			<td>
				<input type="text" name="email"
				value="<?php if($lePilote != null)  echo $lePilote['email'] ; ?>">

			</td>
		</tr>
		<tr>
			<td> Grade :</td>
			<td>
				<input type="text" name="grade"
				value="<?php if($lePilote != null)  echo $lePilote['grade'] ; ?>">

			</td>
		</tr>
		<tr>
			<td> Mot de passe :</td>
			<td>
				<input type="password" name="mdp">
			</td>
		</tr>

		<?php 
		if($lePilote != null ) echo "<input type='hidden' name='idPilote' value='".$lePilote['idPilote']."'>" ;

		?>

		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
		
			<td><input type="submit" <?php
					if ($lePilote != null) echo 'name="Modifier" value="Modifier"' ;
					else echo 'name="Valider" value="Valider"';
					 ?> >
					</td>
		</tr>








	</table>
</form>