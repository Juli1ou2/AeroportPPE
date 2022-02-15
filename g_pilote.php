<h3>Espace Pilote</h3>

	<?php


	$lePilote= null;

	if (isset($_SESSION['email']) and $_SESSION['role']=='admin'){
		if (isset($_GET['action']) && isset($_GET['idPilote'])){
		$action = $_GET['action'];
		$idPilote = $_GET['idPilote'];
		switch ($action) 
		{
			case 'sup' : deletePilote($idPilote);

				break;

			case 'edit': $lePilote = selectWherePilote($idPilote) ; 
			//var_dump($lePilote);
				break;
		}
	}

		require_once("vues/vue_insert_pilote.php");
		if (isset($_POST['Modifier']))
		{
			updatePilote($_POST);
			//on recharge la page
			header("Location: index.php?page=1");
		}
		if (isset($_POST['Valider']))
		{
			echo'<p> test </p>';
			insertPilote($_POST);
		}
	}


	if (isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot'];
		$lesPilotes = searchPilotes($mot);

	} else {
		$lesPilotes = selectAllPilotes();
	}

	require_once("vues/vue_les_pilotes.php");


	?>