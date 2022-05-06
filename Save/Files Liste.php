<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: /GRAPHICOM/index.html');
	exit();
}
?>

  <!DOCTYPE html>
  <html lang="">
  	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Files Management</title>
  
  		<!-- Bootstrap CSS -->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  		<!-- Google Fonts -->
  		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
  		<!-- Font Awesome -->
  		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  		<!-- Style -->
  		<link href='style.css' rel='stylesheet' type='text/css'>
  
  		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  		<![endif]-->
  	</head>
	<style>
	  form {
  width: 30%;
  margin: 100px auto;
  padding: 30px;
  border: 1px solid #555;
}
input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
table.blueTable {
  border: 1px solid #1C6EA4;
  
  background-color: #;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #ffffff;
  padding: 3px 2px;
  
}
table.blueTable tbody td {
  font-size: 13px;
  
}
table.blueTable tr:nth-child(even) {

  background: #;
  
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  text-align: center;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}
	
	</style>
	
	
	      <script type = "text/javascript">
         <!--
            function Warn() {
     var x;
     if (confirm("Are you sure?") == true) {
         x = "You pressed OK!";
     } else {
         x = "You pressed Cancel!";
     }
     return x; 
}
         //-->
      </script>
	
  	<body>
  		<nav class="navbar navbar-default" role="navigation">
  			<div class="container">
  				<!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  						<span class="sr-only">Toggle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" >Graphicom</a>
  				</div>
  		
  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-collapse navbar-ex1-collapse">
  					<ul class="nav navbar-nav navbar-right">
					    <li><a href="Save.php" id="accueil"> Back  </a> </li>
  						<li><a href="/GRAPHICOM/logout.php">Logout</a></li>
  						<li class="dropdown">
  				</div><!-- /.navbar-collapse -->
  			</div>
  		</nav>
		
		<!-- START SECTION -->
  		<div class="section hero text-center background-dark dark-bg">
  			<div class="background-image" style="background: url(images/earth2.jpg) no-repeat center center; background-size: cover; opacity: .2;"></div>
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12">
  						<h2>Files List</h2>
  						<p class="lead"></p>
  						
	                     <table class="blueTable">
                          <thead>
                              <th>ID</th>
                              <th>File Name</th>
                        	  <th>Uploaded On</th>
                              <th>Download</th>
	                          <th>Supprimer</th>
                          </thead>
                         <tbody>

                              <?php include_once("filesLogic.php");
                                include_once("dbConfig.php");  
                                foreach ($files as $file): ?>
                                  <tr>
                                     <td><?php echo $file['id']; ?></td>
                                     <td><?php echo $file['file_name']; ?></td>
	                                 <td><?php echo $file['uploaded_on']; ?></td>
                                     <td><a href="downloads.php?id=<?php echo $file['id'] ?> "  class="btn btn-md btn-info" style="background-color: #2eb8b8;   height: 100%; border-radius: 5px; font-size: 10px;" >Download</a></td>  
	                                 <td><a href="supprimer.php?id=<?php echo $file['id'] ?>" onclick = "if(window.confirm('Are you sure you want to delete this?')){return true;}else{return false;}" class="btn btn-md btn-primary" style=" background-color: #ff8080; height: 100%; border-radius: 5px; font-size: 11px;">supprimer</a></td>
                                  </tr>
                               <?php endforeach;?>


                          </tbody>
                         </table>
						 
	<br>
	
	<script> 

document.getElementById("Supp").addEventListener("click", function(  ){ 
        return confirm("Do you really want to do this?") ;
    });

</script>
	
	<?php    
	include_once("dbConfig.php");	
	
	
	$requete = "SELECT * FROM images ORDER BY uploaded_on DESC"; 
	$resultat = mysqli_query($db, $requete);
	
	
	
	
	
	
	// <!-- Retour vers la page d'accueil & Nombre total :  -->
	
	if(isset($_GET["etat"])){
			if($_GET["etat"]=="success")	echo "<p style='color: green;'> succès</p>";
			else if($_GET["etat"]=='erreur')
				echo "<p style='color: red;'>erreur</p>";
		} 
		?>						
						
						
						
						
	<!-- Retour vers la page d'accueil & Nombre total :  -->
	
	
	<hr/><p><b>Nombre total : </b> <?php echo mysqli_num_rows($resultat)?>  Files.</p>
	<?  php mysqli_close($db);	//Fermer la connexion ?>
	<hr/><p> </p>					
						
						
						
						
						
						
						
						
						
						
						

  					</div>
  				</div>
  			</div>
  		</div>
  		<!--/.section -->

  		<!-- START SECTION -->
  		<div class="section background-light">

  	 
	     <?php
             // Include the database configuration file
             include 'dbConfig.php';

                 // Get images from the database
              $query = $db->query("SELECT * FROM images ORDER BY uploaded_on ASC");

                 if($query->num_rows > 0){
                 while($row = $query->fetch_assoc()){
                 $imageURL = 'uploads/'.$row["file_name"];
           ?>
		   
		   
		   
			
          <img src="<?php echo $imageURL; ?>" alt="" style=" width: 25%; height: 30%;" />
		  
		  

		   
		   
           <?php }
           }else{ ?>
           <p>No image(s) found...</p>
           <?php } ?>
       </div>
  
  
  
  
  
  
  
  
  

  		<!-- jQuery -->
  		<script src="//code.jquery.com/jquery.js"></script>
  		<!-- Bootstrap JavaScript -->
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  	</body>
  </html>