<?php     include_once("dbConfig.php");
	$requete = "DELETE FROM images WHERE id =".$_GET['id']; 
	$resultat = mysqli_query($db, $requete);
	 mysqli_close($db);
	  if($resultat==true)	header("location: Files liste.php?etat=success");
		else		echo "echec d'insertion";
	?>
	
	