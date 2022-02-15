<h3>Espace Avion</h3>

	<?php


	$leAvion= null;

	if (isset($_SESSION['email']) and $_SESSION['role']=='admin'){
		if (isset($_GET['action']) && isset($_GET['idAvion'])){
		$action = $_GET['action'];
		$idAvion = $_GET['idAvion'];
		switch ($action) 
		{
			case 'sup' : deleteAvion($idAvion);

				break;

			case 'edit': $leAvion = selectWhereAvion($idAvion) ; 
			//var_dump($lePilote);
				break;
		}
	}

		require_once("vues/vue_insert_avion.php");
		if (isset($_POST['Modifier']))
		{
			updateAvion($_POST);
			//on recharge la page
			header("Location: index.php?page=2");
		}
		if (isset($_POST['Valider']))
		{
			//echo'<p> test </p>';
			insertAvion($_POST);
		}
	}



	if (isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot'];
		$lesAvions = searchAvions($mot);

	} else {
		$lesAvions = selectAllAvions();
	}

	require_once("vues/vue_les_avions.php");


	?>