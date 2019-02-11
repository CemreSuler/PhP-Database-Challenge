<!DOCTYPE HTML>
<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $database, $dbport)
         or die('Error connecting to MySQL server.');
    
    ?>
<html>
	<head>
		<title>Vluchten | Airport</title>
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
						<span class="icon fa-plane"></span>
						<h2>Vluchten</h2>
						<p>Vul hier uw vertrekplaats en bestemming in en bekijk welke vluchten beschikbaar zijn.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form action="vluchten.php" method="post">
										<div class="row gtr-50">
											<div class="col-6 col-12-mobile">
												<input type="text" name="origin" placeholder="Herkomst" />
											</div>
											<div class="col-6 col-12-mobile">
												<input type="text" name="destination" placeholder="Bestemming" />
											</div>
												<ul class="buttons">
													<li><input type="submit" class="special" value="Check vluchten" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>
					
				</article>
		<?php
			$search_value_origin = mysqli_real_escape_string($db, $_POST['origin']);
			$search_value_destination = mysqli_real_escape_string($db, $_POST['destination']);
			
			$originSort = 
			"SELECT 
			origin_information.origin_country, origin_information.origin_city, origin_information.origin_airport, origin_information.origin_iata,
			gate_information.gate_name, gate_information.gate_building, 
			luggage_information.arrival_hall, luggage_information.luggage_belt
			
			FROM flight_information
			
			INNER JOIN origin_information 
			ON flight_information.origin_id=origin_information.origin_id
			
			INNER JOIN gate_information
			ON flight_information.gate_id=gate_information.gate_id
			
			INNER JOIN luggage_information
			ON flight_information.luggage_id=luggage_information.luggage_id
			
			WHERE origin_information.origin_country
			LIKE '%$search_value_origin%'
			
			OR origin_information.origin_city
			LIKE '%$search_value_origin%'
			
			OR origin_information.origin_airport
			LIKE '%$search_value_origin%'
			
			OR origin_information.origin_iata
			LIKE '%$search_value_origin%'
			";
			
			$destinationSort = 
			"SELECT 
			destination_information.destination_country, destination_information.destination_city, destination_information.destination_airport, destination_information.destination_iata,
			gate_information.gate_name, gate_information.gate_building,
			checkin_information.departure_hall, checkin_information.checkin_booth,
			boarding_time, departure_date, departure_time, duration_minutes, arrival_date, arrival_time
			
			FROM flight_information
			
			INNER JOIN destination_information
			ON flight_information.destination_id=destination_information.destination_id
			
			INNER JOIN gate_information
			ON flight_information.gate_id=gate_information.gate_id
			
			INNER JOIN checkin_information
			ON flight_information.checkin_id=checkin_information.checkin_id
			
			WHERE destination_information.destination_country
			LIKE '%$search_value_destination%'
			
			OR destination_information.destination_city
			LIKE '%$search_value_destination%'
			
			OR destination_information.destination_airport
			LIKE '%$search_value_destination%'
			
			OR destination_information.destination_iata
			LIKE '%$search_value_destination%'
			";
			
			
			mysqli_query($db, $originSort) or die('Error querying database.');
			mysqli_query($db, $destinationSort) or die('Error querying database.');
			
			$resultOrigin = mysqli_query($db, $originSort);
			$resultDestination = mysqli_query($db, $destinationSort);
			
			$rowOrigin = mysqli_fetch_array($resultOrigin);
			$rowDestination = mysqli_fetch_array($resultDestination);
			
			if(!empty($search_value_origin)) {
			echo '<h2> Arrivals: </h2> <br>';
			
			while ($rowOrigin = mysqli_fetch_array($resultOrigin)) {
				
            echo 
            '| Herkomst: ' . $rowOrigin['origin_country'] . ' - ' . $rowOrigin['origin_city'] .
            ' | Gate: ' . $rowOrigin['gate_building'] . '-' . $rowOrigin['gate_name'] . 
            ' | Aankomsthal: ' . $rowOrigin['arrival_hall'] . 
            ' | Bagageband: ' . $rowOrigin['luggage_belt'] . ' |' .
            
            '<br><br>';
            
            } 
				
			}
			
			if(!empty($search_value_destination)) {
			echo '<h2> Departures: </h2> <br>';
			while ($rowDestination = mysqli_fetch_array($resultDestination)) {
				
            echo 
            '| Bestemming: ' . $rowDestination['destination_country'] . ' - ' . $rowDestination['destination_city'] .
            ' | Gate: ' . $rowDestination['gate_building'] . '-' . $rowDestination['gate_name'] . 
            ' | Vertrekhal: ' . $rowDestination['departure_hall'] .
            ' | Incheck-Balie: ' . $rowDestination['checkin_booth'] . 
            ' | Boarding: ' . $rowDestination['boarding_time'] .
            ' | Vertrek: ' . $rowDestination['departure_date'] . ' - ' . $rowDestination['departure_time'] .
            ' | Aankomst: ' . $rowDestination['arrival_date'] . ' - ' . $rowDestination['arrival_time'] .
            
            
            '<br><br>';
            
            }
				
			}
            
        	
            
            mysqli_close($db);
		?>
			
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