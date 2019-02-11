<!DOCTYPE HTML>
<!-- php -->
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

				<div id="loginPart">
				<article id="main">

					<header class="special medium container">
						<span class="icon fa-unlock"></span>
						<h2>Log in</h2>
						<p>Log in met uw gegevens om uw persoonlijke vlchtgegevens te bekijken.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
	<?php 
			session_start();
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$password = mysqli_real_escape_string($db, $_POST['password']);
			
			$sql = "SELECT passenger_id FROM passenger_information WHERE passenger_username = '$username' AND passenger_password = '$password'";
			$result = mysqli_query($db,$sql);
		
			$row = mysqli_fetch_array($result);
			$active = $row['active'];
			$count = mysqli_num_rows($result);
			if($count == 1) {
    		  echo '<h3>U bent succesvol ingelogd</h3>';
    		  
        	
        		$_SESSION['login_user'] = $username;
				
				 if($username == 'Admin') {
    				 header("location:admin.php");
				} else {
				header("location: welcome.php");	
				}
        		
    		  }	else if(empty($username) && empty($password)) {
    		  	echo '';
    		  	
    		  } else if (empty($username)) {
    		  	echo '<h3>Er is geen gebruikersnaam ingevoerd, probeer het opnieuw</h3>';
    			
    		  } else if (empty($password)) {
    		  	echo '<h3>Er is geen wachtwoord ingevoerd, probeer het opnieuw</h3>';
    		  	
    		  }
    		  
    		  else {
    		   echo '<h3>Uw wachtwoord en gebruikersnaam kwamen niet overeen, probeer het opnieuw</h3>';
      }
    		
    		
    		$registered = isset($_REQUEST['register']) ? $_REQUEST['register'] : null;
    		if($registered ==1) {
    			echo '<h3><strong>U bent succesvol geregistreerd, u kunt nu inloggen:</strong></h3>';
    		}
    		$edited = isset($_REQUEST['edited']) ? $_REQUEST['edited'] : null;
    		if($edited == 1) {
    			echo '<h3><strong>Uw inlog gegevens zijn succesvol veranderd, u kunt nu opnieuw inloggen</strong></h3>';
    		}
    		$logout = isset($_REQUEST['logout']) ? $_REQUEST['logout'] : null;
    		if($logout == 1) {
    			echo '<h3><strong>U bent succesvol uitgelogd</strong></h3>';
    		}
    		$deleted = isset($_REQUEST['deleted']) ? $_REQUEST['deleted'] : null;
    		if($deleted == 1) {
    			echo '<h3><strong>Uw account is succesvol verwijderd en u bent uitgeschreven bij alle vluchten</strong></h3>';
    		}
			?>
									<form action="login.php" method="post">
										<div class="row gtr-50">
											<div class="col-12">
												<input type="text" name="username" placeholder="Gebruikersnaam" />
											</div>	
											<div class="col-12">
												<input type="password" name="password" placeholder="Wachtwoord" id="password"/>
											</div>
											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" class="special primary"  value="Log in" /></li>
													</form>
													<li><button type="button" onclick="window.location.href='register.php'" class="special">Registreer</button></li>
												</ul>	
													
												
											</div>
										</div>
									
										
										
								</div>
							
						</section>
						
				</article>
			
				</div>
				
				
			
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
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			
	</body>
</html>