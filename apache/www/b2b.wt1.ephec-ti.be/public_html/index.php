<html>
	<head>
		<title> b2b.wt1.ephec-ti </title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<header>
			<h1>WoodyToys(b2b)</h1>
		</header>
		<main>
			<h2>WoodyToys</h2>
			<?php
				function monPrint_r($liste) {
    					$out = '<pre>'.print_r($liste, 1). '</pre><hr>';
    					return $out;
				}
				$dbname="wt1_db";
				$dataSrc = "mysql:host=151.80.119.160; dbname=$dbname";
				$slqRequ = "SELECT * FROM tbWoodenToys;";
				$connexion = new PDO($dataSrc, "Admin", "Admin@passWord66");

				foreach($connexion->query($slqRequ, PDO::FETCH_ASSOC) as $print) {
        				echo monPrint_r($print);
				}
			?>
		</main>
		<br>
		<footer>
		email : b2b@wt1.ephec-ti.be
		</footer>
	</body>
</html>
