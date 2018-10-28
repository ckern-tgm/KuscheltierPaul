<?php require 'functions.php'; ?>
<html lang="de">
	<head>
		<title>Aktuelle Medikamente</title>
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
				<li><a href="#modalHelp"><span class="glyphicon glyphicon-question-sign"></span> Hilfe</a></li>
			</ul>
			<!--<button onclick="document.location = 'medikamente_index.php#img1'" style="float: right">Hilfe</button>-->
		</div>
		
		<!--Menübar-->
		<div class="navbar navbarTwo">
			<a href="index.php">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Startseite" width="35" height="35" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Startseite</span>
			</a>
			<a href="medikamente_index.php" class="choosen">
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
			<a href="#">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Notfallsignal" width="35" height="35" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Notfallsignal</span>
			</a>
		</div>
		
		<!--Aktuelle Seiten-Position-->
		<ol class="breadcrumb">
			<li><a href="index.php">Startseite</a></li>
			<li class="active">Medikamente erinnern</li>
		</ol>
		
		<div>
			<h1>
				<svg xmlns="http://www.w3.org/2000/svg" alt="Medikamente erinnern" style="fill: white; width: 3vw; height: 3vw;" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M22 5.72l-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM7.88 3.39L6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM12.5 8H11v6l4.75 2.85.75-1.23-4-2.37V8zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/></svg>
				<a href="#scroll" style="color: white;">Aktuelle Medikamente</a>
			</h1>
		</div>
		
		<!-- Hilfe Alert -->
		<div class="remodal" data-remodal-id="modalHelp">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 class="helpHeadline">Hilfe Medikamente erinnern</h1>
			<br />
			<br />
			<p class="helpText">
				<u>Was kann ich hier machen?</u>
				<br />
				Ihre bereits eingespeicherten, <b>aktuellen Medikamente</b> einsehen, diese bei Bedarf löschen und zur Seite an dem Sie 
				<b>neue Medikamente hinzufügen</b> können, navigieren.
			</p>
			<p class="helpText">
				<u>Wie kann ich das machen?</u>
				<br />
				- Durch <b>Scrollen</b> auf der aktuellen Seite können Sie alle Ihre <b>aktuellen Medikamente</b> sehen.
				Sie können durch Klicken auf den <b>roten Button</b> Medikamente <b>löschen</b>.
				<div style="text-align: center;">
					<img src="Bilder/medikamente_tabelle.png" alt="Bild Medikamente Tabelle" style="width: 70%;" />
				</div>
			</p>
			<p class="helpText">
				- Um <b>Medikamente hinzuzufügen</b> klicken Sie auf den <b>blauen Button</b> auf dem oberen Teil der Seite.
				<div style="text-align: center;">
					<img src="Bilder/medikamente_button.png" alt="Button Medikamente hinzufügen" style="width: 80%;" />
				</div>
			</p>
			<button class="helpBackButton" onclick="location.href='medikamente_index.php';">Hilfe schließen</button>
		</div>
		
		<br />
		
		<!-- Löschen Alert Abfrage -->
		<div class="remodal" data-remodal-id="modalDel">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 style="background-color: transparent; color: red; text-align: center;">Wirklich löschen?</h1>
			<p>Wollen Sie das Medikament <?php echo $name; ?> wirklich löschen?</p>
			<br />
			<a href='delMedikament.php?id=$name'>
				<button data-remodal-action="confirm" class="remodal-confirm" style="text-decoration:underline;">Ja</button>
			</a>
			<button data-remodal-action="cancel" class="remodal-cancel">Nein</button>
		</div>
		
		<button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='medikamente_neu.php';">
			<svg xmlns="http://www.w3.org/2000/svg" alt="Medikament hinzufügen" style="width: 3vw; height: 3vw;" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M7.88 3.39L6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM22 5.72l-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm1-11h-2v3H8v2h3v3h2v-3h3v-2h-3V9z"/></svg>
			Medikament hinzufügen
		</button>
		
		<br />
		
		<div class="table-responsive table-wrapper-scroll-y" id="scroll">
			<table class="table table-dark table-bordered table-hover table-striped">
				<thead class="tablehead">
					<tr>
						<th scope="col">Medikament:</th>
						<th scope="col">Einnahmezeit:</th>
						<th scope="col">Tablettenanzahl:</th>
						<th scope="col">Einnahmetage:</th>
						<th scope="col">Entfernen?</th>
					</tr>
				</thead>
				<tbody>
					<tr>
                        <?php  ?>
                    </tr>
					<tr>
						<th>Pille 2</th>
						<td>12:00</td>
						<th>1</th>
						<td>SA</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 3</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 4</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 5</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 6</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 7</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 8</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 9</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
					<tr>
						<th>Pille 10</th>
						<td>18:00</td>
						<th>0.5</th>
						<td>FR,SO</td>
						<td><a href="#modalDel"><button type="button" class="btn btn-danger">Löschen</button></a></td>
					</tr>
				</tbody>
			</table>
		</div>

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