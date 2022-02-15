<h3>Gestion des vols</h3>

	<?php

	$leVol = null;
	$lesAvions = selectAllAvions();
	//$lesAeroports = selectAllAeroports();
	$lesPilotes = selectAllPilotes();


	if (isset($_SESSION['email']) and $_SESSION['role']=='admin'){
		if (isset($_GET['action']) && isset($_GET['idVol'])){
			$action = $_GET['action'];
			$idVol = $_GET['idVol'];
			switch ($action){
				case 'sup' : deleteVol($idVol);
					break;

				case 'edit': $leVol = selectWhereVol($idVol) ; 
					break;
			}
		}

		require_once("vues/vue_insert_vol.php");
		if (isset($_POST['Modifier'])){
			updateVol($_POST);
			//on recharge la page
			header("Location: index.php?page=4");
		}
		if (isset($_POST['Valider'])){
			insertVol($_POST);
		}
	}



	if (isset($_POST['Rechercher'])){
		$mot = $_POST['mot'];
		$lesVols = searchVols($mot);

	} else {
		$lesVols = selectAllVols();
	}

	require_once("vues/vue_les_vols.php");

	?>