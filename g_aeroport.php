<h3>Espace Aéroport</h3>

	<?php


	$leAeroport= null;


		if (isset($_GET['action']) && isset($_GET['idAeroport']))
	{
		$action = $_GET['action'];
		$idAeroport = $_GET['idAeroport'];
		switch ($action) 
		{
			case 'sup' : deleteAeroport($idAeroport);

				break;

			case 'edit': $leAeroport = selectWhereAeroport($idAeroport) ; 
				break;
		}
	}

	require_once("vues/vue_insert_aeroport.php");
	if (isset($_POST['Modifier']))
	{
		updateAeroport($_POST);
		header("Location: index.php?page=3");
	}
	if (isset($_POST['Valider']))
	{
		
		insertAeroport($_POST);
	}



	if (isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot'];
		$lesAeroports = searchAeroport($mot);

	} else {
		$lesAeroports = selectAllAeroports();
	}

	require_once("vues/vue_les_aeroports.php");
	  echo "<br/> <br/>";
   if ($lesAeroports != null)
   {
      require_once ("vues/vue_les_aeroports.php");
   }


	?>