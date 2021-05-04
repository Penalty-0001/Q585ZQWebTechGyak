<!doctype html>

<html lang="hu">
	<head>
		<title>Beadandó</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/favicon.png" />
		<meta charset="UTF-8">
	</head>
	<body>
		<nav class="navbar">
			<div class="container" style="min-width: 1920px">
				<ul>
					<li class="logo"><a href="index.php"><img src="img/webtech.png"></a></li>
				</ul>
				<div class="container" style="min-width:1170px;">
					<ul>
						<li><a href="index.php">Kezdőlap</a></li>
						<li><a href="index.php?s=digit">Digitális Rendszerek 1</a></li>
						<li><a href="index.php?s=viltan">Villamosságtan 2</a></li>
						<li><a href="index.php?s=fizika">Fizika 1</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="mini-icons">
			<div class="github"><a href="https://github.com/Penalty-0001/Q585ZQWebTechGyak" target="github"><img src="img/github.png"></a></div>
		</div>
		<div id="neptun">
			<div class="neptun"><img src="img/neptun.png"/></div>
		</div>
		<section id="content">
			<div class="container" style="min-width:1170px;">
				<div id="wrapper">
					<div class="row">
						<div class="col-xs-9">
							<div class="content-area">
								<?PHP
									$includeDir = ".".DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR;
									$includeDefault = $includeDir."kezdolap.php";
									
									if(isset($_GET['s']) && !empty($_GET['s']))
									{
										$_GET['s'] = str_replace("\0", '', $_GET['s']);
										$includeFile = basename(realpath($includeDir.$_GET['s'].".php"));
										$includePath = $includeDir.$includeFile;
										
										if(!empty($includeFile) && file_exists($includePath)) 
										{
											include($includePath);
										}
										else 
										{
										include($includeDefault);
										}
									}
									else
									{
										include($includeDefault);
									}
								?>
								<center>
									<font color="black">
										<br><br>
										&copy; Minden jog fenntartva
									</font>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>