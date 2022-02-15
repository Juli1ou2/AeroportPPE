<?php
	session_start(); //demarrage de la session
	require_once("fonctions/fonctions.php")

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pilotes AirFrance</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/airfrance.css">
		<link rel="icon" href="images/favicon.ico" />
	</head>

	<body>
		<center>
			<header>
				<div id="en-tete">		
					<h1>Gestion Pilotes AirFrance</h1>
						
					<div id="menu">			
						<a href="index.php?page=0">
							<img src="images/home.png" height="60" width="60" title="Accueil">
						</a>

						<a href="index.php?page=1">
							<img src="images/pilote.png" height="60" width="60" title="Pilotes">
						</a>
						<a href="index.php?page=2">
							<img src="images/avion.png" height="60" width="60" title="Avions">
						</a>
						<a href="index.php?page=3">
							<img src="images/aeroport.png" height="60" width="60" title="Aéroports">
						</a>
						<a href="index.php?page=4">
							<img src="images/vol.png" height="60" width="60" title="Vols">
						</a>
						<a href="index.php?page=5">
							<img src="images/deconnexion.png" height="60" width="60" title="Se déconnecter">
						</a>
					</div>
				</div>
			</header>

					    <?php
					    	if(isset($_GET["page"])){
					    		$page = $_GET['page'];
					    	}else{
					    		$page=0 ;
					    	}
					    	switch ($page) {
					    		case 0 : require_once('home.php');
					    			break;
					    		case 1 : require_once("g_pilote.php");
					    			break;
					    		case 2: require_once("g_avion.php");
					    			break;
					    		case 3 : require_once("g_aeroport.php");
					    			break;
					    		case 4 : require_once("g_vol.php");
					    			break;
					                case 5 :
					            break;
					    	}
					 	?>

			<br/><br/><br/>
			<footer>
				<h3>Contact :</h3>
				<p><a href="mailto:pilote-info@airfrance.fr">pilote-info@airfrance.fr</a> | <a href="tel:+33909090909">09.09.09.09.09</a></p>
			</footer>
								
		</center>
	</body>
</html>