<!DOCTYPE html>
<html>
	<head>
		<title>Űrlap vezérlése új elemekkel</title>
	</head>

	<body>
		<font style="font-size: 18pt">
			<h2>Űrlap vezérlése új elemekkel</h2>

			<?php
				print ("Név: " .$_POST['nev'] . "<br>");
				print ("PIN kód: " .$_POST['kod'] . "<br>");
			?>

			<a href="urlap3.html">vissza az űrlapra...</a>
		</font>
	</body>
</html>