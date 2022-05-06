<?php     include_once("dbConfig.php");
	$requete = "DELETE FROM accounts WHERE id =".$_GET['id']; 
	$resultat = mysqli_query($db, $requete);
	 mysqli_close($db);
	  if($resultat==true)	header("location: Sgin in.php?etat=success");
		else		echo "echec d'insertion";
	?>
	
	