<!DOCTYPE HTML>
<?php 
include('session.php');
if(empty($final_username)) {
	
	header('location: login.php');
}
?>


<html>
	<head>
		<title>Welkom | Airport</title>
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
					
					<section class="wrapper style3 container medium">
					<?php
					$edited = isset($_REQUEST['edited']) ? $_REQUEST['edited'] : null;
    				if($edited == 2) {
    					echo '<h3><strong>Uw gegevens zijn succesvol veranderd</strong></h3>';
    								} ?>
					<h2>Gegevens:</h2>
					<form onsubmit="return confirm('Weet je zeker dat je je gegevens wilt bewerken. Als je je gebruikersnaam verandert moet je opnieuw inloggen.');" action="dataEdit.php" method="post">
			
					<h3>Gebruikersnaam: <strong><?php echo $final_username; ?></strong> <input id="editInput1" type="text" name="reset_username" placeholder="Typ hier uw nieuwe gebruikersnaam" pattern="^(?!.*\s).{6,}$" oninvalid="setCustomValidity('De gebruikersnaam moet langer zijn dan 6 tekens.')" oninput="setCustomValidity('')"/> </h3>
					<h3>E-Mail: <strong> <?php echo $final_email ?></strong> <input id="editInput2" type="email" name="reset_email" placeholder="Typ hier uw nieuwe e-mail adres" oninvalid="setCustomValidity('Voer een geldig email adres in')" oninput="setCustomValidity('')"/></h3>
					<h3>Woonplaats: <strong> <?php echo $final_city ?></strong> <input id="editInput3" type="text" name="reset_city" placeholder="Typ hier uw nieuwe woonplaats" /></h3>
					<h3>Voornaam: <strong><?php echo $final_firstname ?></strong> <input id="editInput4" type="text" name="reset_firstname" placeholder="Typ hier uw nieuwe voornaam" /></h3>
					<h3>Achternaam: <strong><?php echo $final_lastname ?></strong> <input id="editInput5" type="text" name="reset_lastname" placeholder="Typ hier uw nieuwe achternaam" /></h3>
					<h3>Geslacht: <strong><?php echo $final_geslacht ?></strong> <input id="editInput10" type="text" name="reset_geslacht" placeholder="Typ hier uw nieuwe geslacht" /></h3>
					<br>
					<div id="editInput6">
					<h3><strong>Verander Wachtwoord:</strong></h3>
					<h3>Wachtwoord: <input type="password" name="reset_password" id="password" placeholder="Typ hier uw nieuwe wachtwoord" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,}$" oninvalid="setCustomValidity('Het wachtwoord moet langer zijn dan 6 tekens en minimaal 1 hoofdletter en cijfer bevatten.')" oninput="setCustomValidity('')" /> </h3>
					<h3>Herhaal wachtwoord: <input type="password" id="confirm_password" placeholder="Typ hier uw nieuwe wachtwoord opnieuw"/> </h3>
					<input  type="submit" class="primary" value="Opslaan" /> 
					</div>
					</form>
					<br>
					<form  onsubmit="return confirm('Weet je zeker dat je je account wilt verwijderen, dit kan niet ongedaan worden gemaakt.');" action="deleteAccount.php" method="post">
						<input id="editInput7" style="color=red"type="submit" class="special" value="VERWIJDER ACCOUNT" /> 
					</form>
					<br>
					<button id="editInput8" onclick="showEdit()" class="button">Annuleer</button>
					<br>
					<button  id="editInput9" onclick="showEdit()" >Bewerk je gegevens</button>
					</section>
					
				</article>
				
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://github.com" class="icon circle fa-github"><span class="label">Github</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Ciss™</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>
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