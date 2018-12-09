<?php
    if (!session_id()) {
        session_start();
    }
    $_SESSION["pwd"] = "Paul123";
    $_SESSION["pwdChecked"] = "false";
?>
<html lang="de">
	<head>
		<title>Startseite</title>
		<!--Bootstrap-->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" />
		<!--UTF8-->
		<meta charset="utf-8" />
		<!--JQuery-->
		<script src="scripts/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
		<!--Icon-->
		<link rel="icon" type="image/png" href="Bilder/Logo.png" alt="Logo" />
		<!--Remodal-->
		<link rel="stylesheet" href="scripts/Remodal-1.1.1/dist/remodal.css" />
		<link rel="stylesheet" href="scripts/Remodal-1.1.1/dist/remodal-default-theme.css" />
		<!--CSS-->
		<link href="design.css" rel="stylesheet" />
	</head>
	<body>
		<!--Remodal-->
		<script src="scripts/Remodal-1.1.1/dist/remodal.min.js"></script>
		<!--Bootstrap-->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<!--Infobar-->
		<div class="navbar navbarOne">
			<div class="navbar-header">
				<img src="Bilder/logo_klein.png" class="logo" alt="Logo" />
				<a href="index.php" class="titel">Kuscheltier Paul</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#modalHelp"><span class="glyphicon glyphicon-question-sign" alt="Hilfe"></span> Hilfe</a></li>
			</ul>
		</div>
		
		<!--Menübar-->
		<div class="navbar navbarTwo">
			<a href="index.php" class="choosen">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Startseite" width="35" height="35" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Startseite</span>
			</a>
			<a href="medikamente_index.php">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Medikamente erinnern" width="35" height="35" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M22 5.72l-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM7.88 3.39L6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM12.5 8H11v6l4.75 2.85.75-1.23-4-2.37V8zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/></svg>
				<span>Medikamente erinnern</span>
			</a>
			<a href="termine_index.php">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Terminplanung" width="35" height="35" viewBox="0 0 24 24"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
				<span>Terminplanung</span>
			</a>
			<a href="buecher_index.php">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Bücher vorlesen" width="35" height="35" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><defs><path id="a" d="M0 0h24v24H0V0z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg>
				<span>Bücher vorlesen</span>
			</a>
			<a href="notfallsignal_index.php">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Notfallsignal" width="35" height="35" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Notfallsignal</span>
			</a>
		</div>
		
		<ol class="breadcrumb">
			<li class="active">Startseite</li>
		</ol>
		
		<div>
			<h1>
				<svg xmlns="http://www.w3.org/2000/svg" alt="Startseite" style="fill: white; width: 3vw; height: 3vw;" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				Startseite
			</h1>
		</div>
		
		<!-- Hilfe Alert -->
		<div class="remodal" data-remodal-id="modalHelp">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 class="helpHeadline">Hilfe Startseite</h1>
			<br />
			<br />
			<p class="helpText">
				<u>Was kann ich hier machen?</u>
				<br />
				<b>Informationen</b> zu Ihrem Kuscheltier bekommen und zu den <b>Funktionen navigieren</b>.
			</p>
			<p class="helpText">
				<u>Wie kann ich das machen?</u>
				<br />
				- Durch <b>Scrollen</b> durch die Startseite können Sie alle <b>Informationen</b> sehen.
				<div style="text-align: center;">
					<img src="Bilder/maus_scroll.png" alt="Scrollmaus" style="width: 10%;" />
				</div>
			</p>
			<p class="helpText">
				- Zu den <b>Funktionen</b> gelangen Sie durch die <b>weiße Menüleiste</b> oben auf der Website. 
				Es ist immer die <b>aktuelle Seite</b> auf der Sie sich befinden <b>hellblau markiert</b>, durch
				klicken auf die gewünschte Seite mit ihrer Maus gelangen Sie zu dieser.
				<div style="text-align: center;">
					<img src="Bilder/bar.png" alt="Menübar" style="width: 100%;" />
				</div>
			</p>
			<button type="button" class="helpBackButton" data-remodal-action="close">Hilfe schließen</button>
		</div>
		
		<br />
		
		<p style="background-color: white; margin-left: 40px; margin-right: 40px; text-align: justify; padding: 10px; font-size: 2vw;">
			<u>Was ist Paul?</u>
			Paul ist ein interaktives Kuscheltier, das Senioren in ihrem Alltag unterstützen, aber auch unterhalten soll. Dafür hat Paul verschiedene Taster, 
			Sensoren und bietet zielgruppenorientierte Funktionen.
		</p>
		
		<br />
		
		<p style="background-color: white; margin-left: 40px; margin-right: 40px; text-align: justify; padding: 10px; font-size: 2vw;">
			<u>Wie funktioniert Paul?</u> 
			Das Kuscheltier lässt sich über die verbauten Knöpfe bedienen und über eine seniorenfreundliche Website steuern. Das Kuscheltier hat verschiedenste
			Funktionen um den Senioren den Alltag zu erleichtern, wie eine <a href="medikamente_index.php">Medikamentenerinnerung</a> oder einen <a href="termine_index.php">Terminplaner</a>. 
			Aus Unterhaltungszwecken kann man mit dem Kuscheltier Simon says spielen und man kann sich <a href="buecher_index.php">Hörbücher anhören</a>.
			Des Weiteren kann man seine Herzfrequenz oder eine <a href="notfallsignal_index.php">Notfallnachricht senden</a> messen.
		</p>
		
		<!--Video-->
		<div class="embed-responsive embed-responsive-16by9" style="margin-left: 40px; margin-right: 40px;">
			<!--<iframe class="embed-responsive-item" src="Video/Teaser.mp4" allowfullscreen autoplay="0"></iframe>-->
			<video src="Video/Teaser.mp4" controls poster="Bilder/poster.png">
				Dies Video kann in Ihrem Browser nicht wiedergegeben werden.<br> 
			</video>
		</div>
		
		<br />
		
		<p style="background-color: white; margin-left: 40px; margin-right: 40px; text-align: justify; padding: 10px; font-size: 2vw;">
			<u>Einzigartigkeit und Innovation:</u>
			Geht man zunächst auf die Hinsicht der Unterhaltung ein, gibt es am Markt eine riesige Menge  an  Unterhaltungsgeräten.  Diese  sind  aber  
			Großteiles  sehr  teuer,  unhandlich und  für  die  ältere  Generation  schlichtweg  unverständlich.  Es  gibt  jedoch  bereits spezielle  
			Produkte  zur  Unterhaltung  von  Pensionisten,  wie  zum  Beispiel  einen Katzenroboter  der Firma  Hasbro  oder  einen  Hunderoboter.  
			Diese  dienen  aber ausschließlich zur Unterhaltung und Beschäftigung der Rentner.
		</p>
		
		<br />
		
		<p style="background-color: white; margin-left: 40px; margin-right: 40px; text-align: center; padding: 10px; font-size: 2vw;">
			<u>Sitemap:</u> <br />
			<br />
			<img src="Bilder/Sitemap.png" alt="Sitemap" usemap="#Map" class="img-responsive center-block" />
			<map name="Map" id="Map">
				<area alt="Medikamente" title="Medikamente" href="medikamente_index.php" shape="rect" coords="12,141,245,269" />
				<area alt="Neues Medikament" title="Neues Medikament" href="medikamente_neu.php" shape="rect" coords="12,313,245,442" />
				<area alt="Termine" title="Termine" href="termine_index.php" shape="rect" coords="269,141,501,238" />
				<area alt="Neuer Termin" title="Neuer Termin" href="termine_neu.php" shape="rect" coords="269,281,501,410" />
				<area alt="Bücher vorlesen" title="Bücher vorlesen" href="buecher_index.php" shape="rect" coords="524,141,757,238" />
				<area alt="Notfalldaten" title="Notfalldaten" href="notfallsignal_index.php" shape="rect" coords="780,141,1013,237" />
				<area alt="Notfalldaten ändern" title="Notfalldaten ändern" href="notfallsignal_index.php" shape="rect" coords="780,281,1013,411" />
				<area alt="Startseite" title="Startseite" href="index.php" shape="rect" coords="396,0,629,97" />
			</map>
		</p>
		
		<br />
		<br />
		<br />
		<br />
		
		<footer class="mainfooter" role="contentinfo">
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<p class="text-xs-center">&copy; Copyright 2018 - KuscheltierPaul.  All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</body>
</html>