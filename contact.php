<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact | Airport</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
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
						<span class="icon fa-envelope"></span>
						<h2>Stel een vraag</h2>
						<p>Gebruik het onderstaande formulier om uw vraag te stellen.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form>
										<div class="row gtr-50">
											<div class="col-6 col-12-mobile">
												<input type="text" name="naam" placeholder="Naam" />
											</div>
											<div class="col-6 col-12-mobile">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="col-12">
												<input type="text" name="onderwerp" placeholder="Onderwerp" />
											</div>
											<div class="col-12">
												<textarea name="bericht" placeholder="Bericht" rows="7"></textarea>
											</div>
											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" class="special" name="submit" value="Stuur bericht" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

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
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
		<!-- PHP -->
			<?php include 'contact_form.php';?>

	</body>
</html>