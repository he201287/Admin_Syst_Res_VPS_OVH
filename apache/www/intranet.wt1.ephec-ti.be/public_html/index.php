<!DOCTYPE html>
<html>
	<head>
		<title> intranet.wt1.ephec-ti </title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<header>
			<h1>WoodyToys(intranet)</h1>
		</header>
		<main>
			<h2>WoodyToys</h2>
			<?php
                                function monPrint_r($liste) {
                                        $out = '<pre>'.print_r($liste, 1). '</pre><hr>';
                                        return $out;
                                }
                                $dbname="wt1_db";
                                $dataSrc = "mysql:host=***.***.***.***; dbname=$dbname";
                                $slqRequ = "SELECT * FROM tbEmployee;";
                                $connexion = new PDO($dataSrc, "*****", "I*****");

                                foreach($connexion->query($slqRequ, PDO::FETCH_ASSOC) as $print) {
                                        echo monPrint_r($print);
                                }
                        ?>
		</main>
		<br>
		<footer>
		email : contact@wt1.ephec-ti.be
		</footer>
	</body>
</html>
