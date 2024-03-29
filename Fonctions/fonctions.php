<?php	
		function connexion ()
	{
		$con = mysqli_connect("localhost", "root", "", "airfrance"); //Config pour WINDOWS !
		//$con = mysqli_connect("localhost:8889", "root", "root", "airfrance"); //Config pour MACOS !
		if ($con == null){
			echo "Erreur de connexion à la bdd";
		}
		return $con;
	}

	function deconnexion ($con)
	{
		mysqli_close($con);
	}


	/***************** Fonction Pilote ****************/

	function selectAllPilotes()
	{
		$requete = "select * from pilote ;";
		$con = connexion();
		if ($con)
		{
		$lesPilotes = mysqli_query($con, $requete);
		//var_dump($lesPilotes);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesPilotes;
	}

	function insertPilote($tab)
	{
		$requete = "insert into pilote values(null,'".$tab['nom']."','".$tab['prenom']."','".$tab['age']."','".$tab['email']."','".$tab['grade']."','".$tab['mdp']."');";
		$con = connexion ();
		if ($con) 
		{
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}


	function deletePilote($idPilote){
    $requete = "delete from pilote where idPilote = ".$idPilote;
    $con = connexion();
    if ($con){
        mysqli_query($con, $requete);
    }
    deconnexion($con);
    }

       function selectWherePilote($idPilote)
    {

    	$requete = "select * from pilote where idPilote=".$idPilote 
    	;
		$con = connexion();
		if ($con)
		{
		$lesPilotes = mysqli_query($con, $requete);
		$unPilote = mysqli_fetch_assoc($lesPilotes); //recuperer un pilote sous forme de tableau associatif.
		//var_dump($lesPilotes);
		} else {

			return null;
		}
		deconnexion($con);
		return $unPilote;
    }


       function updatePilote($tab)
	{
		$requete = "update pilote set nom ='".$tab['nom']."', prenom ='".$tab['prenom']."', age ='".$tab['age']."', email ='".$tab['email']."', grade = '".$tab['grade']."' , mdp ='".$tab['mdp']."'where idPilote = ".$tab['idPilote']; 
		$con = connexion ();
		if ($con) 
		{
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}

	function searchPilotes($mot)
	{
		$requete = "select * from pilote where nom like'%".$mot."%' or prenom like '%".$mot."%' or age like '%".$mot."%' or email like '%".$mot."%' or grade like '%".$mot."%';";
		$con = connexion();
		if ($con)
		{
		$lesPilotes = mysqli_query($con, $requete);
		//var_dump($lesPilotes);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesPilotes;
	}


	function countPilotes ()
	{
		$requete = "select count(*) as nb from pilote ;";
		$con = connexion();
		if ($con)
		{
		$resultat = mysqli_query($con, $requete);
		$nb = mysqli_fetch_assoc($resultat);
		} else {
			return null;
		}
		deconnexion($con);
		return $nb["nb"];
	}

	/***************** Fonction Avion ****************/

	function selectAllAvions()
	{
		$requete = "select * from avion ;";
		$con = connexion();
		if ($con)
		{
		$lesAvions = mysqli_query($con, $requete);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesAvions;
	}

	function insertAvion($tab)
	{
		$requete = "insert into avion values(null,'".$tab['modele']."','".$tab['etat']."','".$tab['nbPlaces']."','".$tab['type']."');";
		$con = connexion ();
		if ($con) 
		{
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}

	function deleteAvion($idAvion){
    $requete = "delete from avion where idAvion = ".$idAvion;
    $con = connexion();
    if ($con){
        mysqli_query($con, $requete);
    }
    deconnexion($con);
    }

       function selectWhereAvion($idAvion)
    {

    	$requete = "select * from avion where idAvion=".$idAvion 
    	;
		$con = connexion();
		if ($con)
		{
		$lesAvions = mysqli_query($con, $requete);
		$unAvion = mysqli_fetch_assoc($lesAvions); //recuperer un avion sous forme de tableau associatif.
		//var_dump($lesPilotes);
		} else {

			return null;
		}
		deconnexion($con);
		return $unAvion;
    }


       function updateAvion($tab)
	{
		$requete = "update avion set modele ='".$tab['modele']."', etat ='".$tab['etat']."', nbPlaces ='".$tab['nbPlaces']."', type ='".$tab['type']."'where idAvion = ".$tab['idAvion']; 
		$con = connexion ();
		if ($con) 
		{
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}

	function searchAvions($mot)
	{
		$requete = "select * from avion where modele like'%".$mot."%' or etat like '%".$mot."%' or nbPlaces like '%".$mot."%' or type like '%".$mot."%';";
		$con = connexion();
		if ($con)
		{
		$lesAvions = mysqli_query($con, $requete);
		//var_dump($lesPilotes);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesAvions;
	}

	function countAvions(){
		$requete = "select count(*) as nb from avion ;";
		$con = connexion();
		if ($con){
			$resultat = mysqli_query($con, $requete);
			$nb = mysqli_fetch_assoc($resultat);
		} else {
			return null;
		}
		deconnexion($con);
		return $nb["nb"];
	}


	/***************** Fonction Vol ****************/

	function selectAllVols()
	{
		$requete = "select * from vol ;";
		$con = connexion();
		if ($con){
			$lesVols = mysqli_query($con, $requete);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesVols;
	}

	function insertVol($tab)
	{
		$requete = "insert into vol values(null,'".$tab['designationVol']."','".$tab['dateVol']."','".$tab['heureDepart']."','".$tab['heureArrivee']."','".$tab['dureeVol']."','".$tab['idAvion']."','".$tab['idAeroport1']."','".$tab['idAeroport2']."','".$tab['idPilote1']."','".$tab['idPilote2']."');";
		$con = connexion ();
		if ($con){
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}


	function deleteVol($idVol){
    $requete = "delete from vol where idVol = ".$idVol;
    $con = connexion();
    if ($con){
        mysqli_query($con, $requete);
    }
    deconnexion($con);
    }

   function selectWhereVol($idVol){
    	$requete = "select * from vol where idVol=".$idVol ;
		$con = connexion();
		if ($con){
			$lesVols = mysqli_query($con, $requete);
			$unVol = mysqli_fetch_assoc($lesVols); //recuperer un vol sous forme de tableau associatif.
		} else {
			return null;
		}
		deconnexion($con);
		return $unVol;
    }


       function updateVol($tab)
	{
		$requete = "update vol set designationVol ='".$tab['designationVol']."', dateVol ='".$tab['dateVol']."', heureDepart ='".$tab['heureDepart']."', heureArrivee ='".$tab['heureArrivee']."', dureeVol = '".$tab['dureeVol']."' , idAvion ='".$tab['idAvion']."' , idAeroport1 ='".$tab['idAeroport1']."' , idAeroport2 ='".$tab['idAeroport2']."' , idPilote1 ='".$tab['idPilote1']."' , idPilote2 ='".$tab['idPilote2']."'where idVol = ".$tab['idVol']; 
		$con = connexion ();
		if ($con){
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}

	function searchVols($mot)
	{
		$requete = "select * from vol where designationVol like'%".$mot."%' or dateVol like '%".$mot."%' or heureDepart like '%".$mot."%' or heureArrivee like '%".$mot."%' or dureeVol like '%".$mot."%' or idAvion like '%".$mot."%' or idAeroport1 like '%".$mot."%' or idAeroport2 like '%".$mot."%' or idPilote1 like '%".$mot."%' or idPilote2 like '%".$mot."%';";
		$con = connexion();
		if ($con){
			$lesVols = mysqli_query($con, $requete);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesVols;
	}


	function countVols ()
	{
		$requete = "select count(*) as nb from vol ;";
		$con = connexion();
		if ($con){
			$resultat = mysqli_query($con, $requete);
			$nb = mysqli_fetch_assoc($resultat);
		} else {
			return null;
		}
		deconnexion($con);
		return $nb["nb"];
	}

	/***************** Fonction Aeroport ****************/

	function selectAllAeroports()
	{
		$requete = "select * from aeroport ;";
		$con = connexion();
		if ($con)
		{
		$lesAeroports = mysqli_query($con, $requete);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesAeroports;
	}

	function insertAeroport($tab)
	{
		$requete = "insert into aeroport values(null,'".$tab['designationAeroport']."','".$tab['adresse']."','".$tab['statut']."');";
		$con = connexion ();
		if ($con) 
		{
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}

	function deleteAeroport($idAeroport){
    $requete = "delete from aeroport where idAeroport = ".$idAeroport;
    $con = connexion();
    if ($con){
        mysqli_query($con, $requete);
    }
    deconnexion($con);
    }

       function selectWhereAeroport($idAeroport)
    {

    	$requete = "select * from aeroport where idAeroport=".$idAeroport
    	;
		$con = connexion();
		if ($con)
		{
		$lesAeroports = mysqli_query($con, $requete);
		$unAeroport = mysqli_fetch_assoc($lesAeroports); 
		} else {

			return null;
		}
		deconnexion($con);
		return $unAeroport;
    }


       function updateAeroport($tab)
	{
		$requete = "update aeroport set designationAeroport ='".$tab['designationAeroport']."', adresse ='".$tab['adresse']."', statut ='".$tab['statut']."'where idAeroport=".$tab['idAeroport']; 
		$con = connexion ();
		if ($con) 
		{
			mysqli_query($con, $requete);
		}
		deconnexion($con);
	}

	function searchAeroport($mot)
	{
		$requete = "select * from aeroport where designationAeroport like'%".$mot."%' or adresse like '%".$mot."%' or statut like '%".$mot."%';";
		$con = connexion();
		if ($con)
		{
		$lesAeroports = mysqli_query($con, $requete);
		} else {
			return null;
		}
		deconnexion($con);
		return $lesAeroports;
	}

	function countAeroports ()
	{
		$requete = "select count(*) as nb from aeroport ;";
		$con = connexion();
		if ($con){
			$resultat = mysqli_query($con, $requete);
			$nb = mysqli_fetch_assoc($resultat);
		} else {
			return null;
		}
		deconnexion($con);
		return $nb["nb"];
	}


/***************** Fonction User ****************/

function selectUser($email, $mdp){
		$requete = "select * from user where email ='".$email."' and mdp ='".$mdp."'; " ;
		$con = connexion();
		if ($con){
			$resultat = mysqli_query($con, $requete);
			$unUser = mysqli_fetch_assoc($resultat); //récupérer une intervention sous forme de tableau associatif
		} else {
			return null;
		}
		deconnexion($con);
		return $unUser;
	}





?>