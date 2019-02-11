<!DOCTYPE HTML>
<?php include('config.php');?>
<html>
	<head>
		<title>Log in | Airport</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
	
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Airport <span>save flight</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="vluchten.php">Vluchten</a></li>
							<li><a href="welcome.php" class="button primary">Account</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
			<article id="main">

					<header class="special container">
						<span class="icon fa-mobile"></span>
						<h2>Welkom <strong> Nieuwe Gebruiker</strong></h2>
						<p>Hier kunt u een nieuw account maken, waarmee je je kan inschrijven voor vluchten.</p>
					</header>

					<!-- One -->
					
						<section class="wrapper style4 container">
							<?php
            			
        				$regi_username = mysqli_real_escape_string($db, $_POST['regi_username']);
            			$regi_password = mysqli_real_escape_string($db, $_POST['regi_password']);
						$regi_email = mysqli_real_escape_string($db, $_POST['regi_email']);
						$regi_city = mysqli_real_escape_string($db, $_POST['regi_city']);
						$regi_firstname = mysqli_real_escape_string($db, $_POST['regi_firstname']);
						$regi_lastname = mysqli_real_escape_string($db, $_POST['regi_lastname']);
						$regi_gender = mysqli_real_escape_string($db, $_POST['regi_gender']);
						
			            if(!empty($regi_username)) {
						$username_check = "SELECT passenger_id FROM passenger_information WHERE passenger_username = '$regi_username'";
						$username_check_result = mysqli_query($db,$username_check);
						$username_count = mysqli_num_rows($username_check_result);
							
						if($username_count == 1) {
							echo '<h3><strong>Deze gebruikersnaam is al in gebruik, kies een andere en probeer het opnieuw</strong><h3> <br>';
						} else if($username_count == 0) {
						$insert_user = "
			            				INSERT INTO passenger_information 
			            
			            				(passenger_id, passenger_firstname, passenger_lastname, passenger_city, passenger_gender, passenger_username, passenger_password, passenger_email) 
			            
			            				VALUES (NULL, '$regi_firstname', '$regi_lastname', '$regi_city', '$regi_gender', '$regi_username', '$regi_password', '$regi_email')";
			        	
			        	mysqli_query($db, $insert_user); 
			        	header('location: login.php?register=1');
						} else {
							echo 'Het zou niet mogelijk moeten zijn om deze error te zien, als je deze error toch ziet, neem dan contact op met Cemre8@live.nl';
						}
            
			            
			            }
            
           
           
?>
							<form action="register.php" method="post">
								<h3>Gebruikersnaam: <input type="text" name="regi_username" id="gebruikersnaam" placeholder="Typ hier uw nieuwe gebruikersnaam" pattern="^(?!.*\s).{6,}$" oninvalid="setCustomValidity('De gebruikersnaam moet langer zijn dan 6 tekens.')" oninput="setCustomValidity('')" required /> </h3>
								<h3>Wachtwoord: <input type="password" name="regi_password" id="password" placeholder="Typ hier uw nieuwe wachtwoord" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,}$" oninvalid="setCustomValidity('Het wachtwoord moet langer zijn dan 6 tekens en minimaal 1 hoofdletter en cijfer bevatten.')" oninput="setCustomValidity('')"  required/> </h3>
								<h3>Herhaal wachtwoord: <input type="password" id="confirm_password" placeholder="Typ hier uw nieuwe wachtwoord opnieuw" required/> </h3>
								<h3>E-Mail:  <input  type="email" name="regi_email" placeholder="Typ hier uw e-mail adres" oninvalid="setCustomValidity('Voer een geldig email adres in')" oninput="setCustomValidity('')"required/></h3>
								<h3>Woonplaats:  <input type="text" name="regi_city" placeholder="Typ hier uw woonplaats" required/></h3>
								<h3>Voornaam:  <input  type="text" name="regi_firstname" placeholder="Typ hier uw voornaam" required/></h3>
								<h3>Achternaam:  <input  type="text" name="regi_lastname" placeholder="Typ hier uw achternaam" required/></h3>
								<h3>Geslacht:  <input  type="text" name="regi_gender" placeholder="Typ hier uw geslacht" required/></h3>
							<section class=" style4 container special medium">
								<ul class="buttons">
									<li><input type="submit" class="special primary"  value="Registreer" /></li>
							</form>
									<li><button type="button" onclick="window.location.href='login.php'" class="special">Terug</button></li>
								</ul>	
							</section>
						</section>

			

				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="error_messages.js"></script>

	</body>
</html>