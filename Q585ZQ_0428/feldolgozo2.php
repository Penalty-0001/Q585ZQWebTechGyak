<!DOCTYPE html>
<html>
	<head>
		<title>Űrlap vezérlése új elemekkel</title>
	</head>

	<body>
		<font style="font-size: 18pt">
			<h2>Űrlap vezérlése új elemekkel</h2>

			<?php
				print ("Név: " .$_GET['nev'] . "<br>");
				print ("PIN kód: " .$_GET['kod'] . "<br>");
			?>

			<a href="urlap3.html">vissza az űrlapra...</a>
		</font>
	</body>
</html>