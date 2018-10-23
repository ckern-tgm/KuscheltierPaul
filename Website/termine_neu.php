<html lang="de">
	<head>
		<title>Termin hinzufügen</title>
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
				<!-- thumbnail image wrapped in a link -->
				<li><a href="#img1"><span class="glyphicon glyphicon-question-sign"></span> Hilfe</a></li>
			</ul>
		</div>
		
		<!--Menübar-->
		<div class="navbar navbarTwo">
			<a href="index.php">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Startseite" width="35" height="35" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Startseite</span>
			</a>
			<a href="medikamente_index.php">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Medikamente erinnern" width="35" height="35" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M22 5.72l-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM7.88 3.39L6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM12.5 8H11v6l4.75 2.85.75-1.23-4-2.37V8zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/></svg>
				<span>Medikamente erinnern</span>
			</a>
			<a href="termine_index.php" class="choosen">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Terminplanung" width="35" height="35" viewBox="0 0 24 24"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
				<span>Terminplanung</span>
			</a>
			<a href="#">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Bücher vorlesen" width="35" height="35" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><defs><path id="a" d="M0 0h24v24H0V0z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg>
				<span>Bücher vorlesen</span>
			</a>
			<a href="#">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Notfallsignal" width="35" height="35" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Notfallsignal</span>
			</a>
		</div>
		
		<!--Aktuelle Seiten-Position-->
		<ol class="breadcrumb">
			<li><a href="index.php">Startseite</a></li>
			<li><a href="termine_index.php">Terminplanung</a></li>
			<li class="active">Termin hinzufügen</li>
		</ol>
		
		<div>
			<h1>
				<?xml version="1.0" encoding="utf-8"?>
				<!-- Generator: Adobe Illustrator 15.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg version="1.1" alt="Termin hinzufügen" style="fill: white; width: 3vw; height: 3vw;" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M20,3h-1V1h-2v2H7V1H5v2H4C2.9,3,2,3.9,2,5v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V5C22,3.9,21.1,3,20,3z M20,21H4V8h16V21z"/>
					<path fill="none" d="M0,0h24v24H0V0z"/>
					<path d="M16.969,15.304H12.71v4.259h-1.419v-4.259H7.031v-1.42h4.259V9.625h1.419v4.259h4.259V15.304z"/>
				</svg>
				<a href="#scroll" style="color: white;">Termin hinzufügen</a>
			</h1>
		</div>
		
		<!-- lightbox container hidden with CSS -->
		<a href="#_" class="lightbox" id="img1">
			<img src="Bilder/kalender.png">
		</a>
		
		<br />
		
		<!-- Hinzufügen Alert -->
		<div class="remodal" data-remodal-id="modalHinz">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 style="background-color: transparent; color: green; text-align: center;">Hinzufügen <br /> erfolgreich!</h1>
			<br />
			<br />
			<button data-remodal-action="confirm" class="remodal-confirm" onclick="location.href='termine_index.php';">OK</button>
		</div>
		
		<!-- Abbrechen Alert -->
		<div class="remodal" data-remodal-id="modalAbr">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 style="background-color: transparent; color: red; text-align: center;">Hinzufügen <br /> abgebrochen!</h1>
			<br />
			<br />
			<button data-remodal-action="cancel" class="remodal-cancel" onclick="location.href='termine_index.php';">OK</button>
		</div>
		
		<form id="scroll">
			<br />
			<div class="form-group">
				<label for="name" class="headlabel">Terminname:</label>
				<input type="text" class="form-control form-control-lg" id="name" placeholder="Terminname" required />
				<small id="nameHelp" class="form-text text-muted">
					Bitte geben Sie den Namen von ihrem Termim ein. Beispiel: "Zahnarzt"
				</small>
			</div>
			<div class="form-group">
				<label for="datum" class="headlabel">Datum:</label>
				<input type="date" class="form-control form-control-lg" id="datum" placeholder="Datum" required />
				<small id="datumHelp" class="form-text text-muted">
					Bitte geben Sie das Datum ihres Termines ein. Beispiel: "01.01.2020"
				</small>
			</div>
			<div class="form-group">
				<label for="zeit" class="headlabel">Uhrzeit:</label>
				<input type="time" class="form-control form-control-lg" id="zeit" placeholder="Uhrzeit" required />
				<small id="zeitHelp" class="form-text text-muted">
					Bitte geben Sie die Uhrzeit ihres Termines ein. Beispiel: "08:00"
				</small>
			</div>
			<div class="form-group">
				<label for="ort" class="headlabel">Ort:</label>
				<input type="text" class="form-control form-control-lg" id="ort" placeholder="Ort" required />
				<small id="ortHelp" class="form-text text-muted">
					Bitte geben Sie den Ort von ihrem Termin ein. Beispiel: "Wien"
				</small>
			</div>
			<div class="form-group">
				<label for="hinw" class="headlabel">Hinweis:</label>
				<input type="text" class="form-control form-control-lg" id="hinw" placeholder="Hinweis(optional)" />
				<small id="hinwHelp" class="form-text text-muted">
					Hier können sie einen Hinweis zu ihrem Termin hinzufügen. Beispiel: "E-Card nicht vergessen."
				</small>
			</div>
			
			<br />
			<br />
			
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
					<p class="progress-bar-text">25%</p>
				</div>
			</div>
			
			<br />
			
			<div class="form-group">
				<div class="form-group col-md-6">
					<a href="#modalHinz">
						<button type="button" class="btn btn-success btn-lg btn-block" onclick="">
							<svg xmlns="http://www.w3.org/2000/svg" alt="Hinzufügen" style="width: 3vw; height: 3vw;" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
							Hinzufügen
						</button>
					</a>
				</div>
				<div class="form-group col-md-6">
					<a href="#modalAbr">
						<button type="button" class="btn btn-warning btn-lg btn-block" onclick="">
							<svg xmlns="http://www.w3.org/2000/svg" alt="Abbrechen" style="width: 3vw; height: 3vw;" viewBox="0 0 24 24"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
							Abbrechen
						</button>
					</a>
				</div>
			</div>
		</form>
		
		<br />
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
		
		<!--Smooth Scroll-->
		<script src="scripts/smoothScroll.js" type="text/javascript"></script>
	</body>
</html>