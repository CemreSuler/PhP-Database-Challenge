<!DOCTYPE HTML>
<?php 
include('session.php');
include('config.php')
?>

<html>
	<head>
		<title>Welkom | Airport</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<style>
		
	

td,th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(134,210,201);
  color: white;
}
	</style>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Airport <span>save flight</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="vluchten.php">Vluchten</a></li>
							<li><a href="logout.php?logout=1" class="button primary">Log out</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article  id="main">

					<header class="special container medium">
						<span class="icon fa-mobile"></span>
						<h2>Welkom <strong> <?php echo $final_firstname . ' ' . $final_lastname; ?></strong></h2>
						<p>Op deze pagina kan je je gegevens aanpassen</p> <br>
						
					</header>
					
					<section class="wrapper style3 container">
					<?php
					$edited = isset($_REQUEST['edited']) ? $_REQUEST['edited'] : null;
    				if($edited == 2) {
    					echo '<h3><strong>Uw gegevens zijn succesvol veranderd</strong></h3>';
    								} ?>
					<h2>Gegevens:</h2>
				
			
					<h3>Gebruikersnaam: <strong><?php echo $final_username; ?></strong> </h3>
					<h3>E-Mail: <strong> <?php echo $final_email ?></strong> </h3>
					<h3>Woonplaats: <strong> <?php echo $final_city ?></strong> </h3>
					<h3>Voornaam: <strong><?php echo $final_firstname ?></strong></h3>
					<h3>Achternaam: <strong><?php echo $final_lastname ?></strong> </h3>
					<h3>Geslacht: <strong><?php echo $final_geslacht ?></strong></h3>
					<br>
					
						<?php
						$allInfo = "SELECT * FROM passenger_information";
						$result = mysqli_query($db, $allInfo);
						$row = mysqli_fetch_array($result);
						echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Voornaam</th>";
                                        echo "<th>Achternaam</th>";
                                        echo "<th>Woonplaats</th>";
                                        echo "<th>Geslacht</th>";
                                        echo "<th>Gebruikersnaam</th>";
                                        echo "<th>Wachtwoord</th>";
                                        echo "<th>E-Mail</th>";
                                        echo "<th>Acties</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
					while ($row = mysqli_fetch_array($result)) {
						
						echo "<tr>";
                                        echo "<td>" . $row['passenger_id'] . "</td>";
                                        echo "<td>" . $row['passenger_firstname'] . "</td>";
                                        echo "<td>" . $row['passenger_lastname'] . "</td>";
                                        echo "<td>" . $row['passenger_city'] . "</td>";
                                        echo "<td>" . $row['passenger_gender'] . "</td>";
                                        echo "<td>" . $row['passenger_username'] . "</td>";
                                        echo "<td>" . $row['passenger_password'] . "</td>";
                                        echo "<td>" . $row['passenger_email'] . "</td>";
                                        echo "<td>";
                                           
                                            echo "<a href='adminEdit.php?id=". $row['passenger_id'] ."' title='Update Record' data-toggle='tooltip'> Edit </a>";
                                            echo "<a href='deleteAccount.php?id=". $row['passenger_id'] ."' title='Delete Record' data-toggle='tooltip'> Delete </a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
					?>
			
					</section>
				
				</article>
				
			<!-- Footer -->
			
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="showEdit.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="error_messages.js"></script>
<script>
	 var x = document.getElementById("editInput1");
   var y = document.getElementById("editInput2");
   var z = document.getElementById("editInput3");
   var xx = document.getElementById("editInput4");
   var yy = document.getElementById("editInput5");
   var zz = document.getElementById("editInput6");
   var xxx = document.getElementById("editInput7");
   var yyy = document.getElementById("editInput8");
	var yyyy = document.getElementById("editInput10");

   x.style.display = "none";
   y.style.display = "none";
   z.style.display = "none";
   xx.style.display = "none";
   yy.style.display = "none";
   zz.style.display = "none";
   xxx.style.display = "none";
   yyy.style.display = "none";
  yyyy.style.display = "none";

   
</script>

	</body>
</html>