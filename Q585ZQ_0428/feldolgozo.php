<!DOCTYPE html>
<html>
	<head>
		<title>Feldolgozó php</title>
	</head>

	<body>
		<font style="font-size: 18pt">
			<h2>HTML5 űrlap</h2>

			<?php
				echo ("<strong>Név:</strong>" . $_POST['nev'] . "<br><br>");
				echo ("<strong>PIN kód:</strong>" . $_POST['kod'] . "<br><br>");
				echo ("<strong>Gyümölcs:</strong>" . $_POST['gyumolcs'] . "<br><br>");
				echo ("<strong>Életkor</strong>" . $_POST['eletkor'] . "<br><br>");
				echo ("<strong>Lábméret:</strong>" . $_POST['labmeret'] . "<br><br>");
				echo ("<strong>Önbizalom:</strong>" . $_POST['onbizalom'] . "<br><br>");
			?>

			<a href="urlap_RA.html">vissza az űrlapra...</a>
		</font>
	</body>
</html>