<?php	
		function connexion ()
	{
		$con = mysqli_connect("localhost:8889", "root", "root", "airfrance");
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
		$unPilote = mysqli_fetch_assoc($lesPilotes); //recuperer un client sous forme de tableau associatif.
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

















?>