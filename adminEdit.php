<!DOCTYPE HTML>
<?php include('config.php');
	$editAdmin = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
		$new_username = mysqli_real_escape_string($db, $_POST['reset_username']);
		
	$dom = "SELECT passenger_username FROM passenger_information WHERE passenger_id = '$editAdmin'";
	$domdom =	mysqli_query($db, $dom);
	
	$row = mysqli_fetch_array($domdom);
?>


<html>
	<head>
		<title>Wijzig gebruiker | Airport</title>
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
						<h2>Welkom <strong> Administrator</strong></h2>
						<p>Hier kunt u de gegevens wijzigen van de passagier met de gebruikersnaam <strong><?php echo $row['passenger_username']; ?></strong> en het id: <strong><?php echo $editAdmin ?> </strong> </p>
					</header>

					<!-- One -->
					
						<section class="wrapper style4 container">
							
							<form action="dataEdit.php?id= <?php echo $editAdmin;?>" method="post">
								<h3>Gebruikersnaam: <input type="text" name="reset_username" id="gebruikersnaam" placeholder="Typ hier uw nieuwe gebruikersnaam" pattern="^(?!.*\s).{6,}$" oninvalid="setCustomValidity('De gebruikersnaam moet langer zijn dan 6 tekens.')" oninput="setCustomValidity('')" /> </h3>
								<h3>Wachtwoord: <input type="password" name="reset_password" id="password" placeholder="Typ hier uw nieuwe wachtwoord" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,}$" oninvalid="setCustomValidity('Het wachtwoord moet langer zijn dan 6 tekens en minimaal 1 hoofdletter en cijfer bevatten.')" oninput="setCustomValidity('')"/> </h3>
								<h3>Herhaal wachtwoord: <input type="password" id="confirm_password" placeholder="Typ hier uw nieuwe wachtwoord opnieuw" /> </h3>
								<h3>E-Mail:  <input  type="email" name="reset_email" placeholder="Typ hier uw e-mail adres" oninvalid="setCustomValidity('Voer een geldig email adres in')" oninput="setCustomValidity('')"/></h3>
								<h3>Woonplaats:  <input type="text" name="reset_city" placeholder="Typ hier uw woonplaats" /></h3>
								<h3>Voornaam:  <input  type="text" name="reset_firstname" placeholder="Typ hier uw voornaam" /></h3>
								<h3>Achternaam:  <input  type="text" name="reset_lastname" placeholder="Typ hier uw achternaam" /></h3>
								<h3>Geslacht:  <input  type="text" name="reset_geslacht" placeholder="Typ hier uw geslacht" /></h3>
							<section class=" style4 container special medium">
								<ul class="buttons">
									<li><input type="submit" class="special primary"  value="Wijzig" /></li>
							</form>
									<li><button type="button" onclick="window.location.href='admin.php'" class="special">Terug</button></li>
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