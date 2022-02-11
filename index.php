<?php
	//session_start(); //demarrage de la session
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
			<h1>Gestion Pilote Air France</h1>

							
				<a href="index.php?page=0">
					<img src="images/home.png" height="60" width="60">
				</a>

				<a href="index.php?page=1">
					<img src="images/pilote.png" height="60" width="60">
				</a>
				<a href="index.php?page=2">
					<img src="images/avion.png" height="60" width="60">
				</a>
				<a href="index.php?page=3">
					<img src="images/aeroport.png" height="60" width="60">
				</a>
				<a href="index.php?page=4">
					<img src="images/vol.png" height="60" width="60">
				</a>
				<a href="index.php?page=5">
					<img src="images/deconnexion.png" height="60" width="60">
				</a>

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
								
		</center>
	</body>
</html>