<?php

require 'functions.php';
if (!session_id()) {
    session_start();
}

if (strcmp($_SESSION["pwdChecked"], "false") == 0) {
    header('location:index.php');
}

$nk = new Notfallkontakt();
$kn = new Kuscheltiernutzer();

?>
<html lang="de">
	<head>
		<title>Notfalldaten ändern</title>
		<!--Bootstrap-->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" />
		<!--UTF8-->
		<meta charset="utf-8" />
		<!--JQuery-->
		<script src="scripts/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
		<!--Icon-->
		<link rel="icon" type="image/png" href="Bilder/Logo.png" />
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
		<div class="navbar navbarOne" title="Infobar">
			<div class="navbar-header">
				<img src="Bilder/logo_klein.png" class="logo" alt="Logo" />
				<a href="index.php" class="titel">Kuscheltier Paul</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#modalHelp" accesskey="0" title="Zur Hilfeseite"><span class="glyphicon glyphicon-question-sign"></span> Hilfe</a></li>
			</ul>
		</div>
		
		<!--Menübar-->
		<div class="navbar navbarTwo" title="Menubar">
			<a href="index.php" accesskey="1" title="Zur Startseite">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Startseite" width="35" height="35" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Startseite</span>
			</a>
			<a href="medikamente_index.php" accesskey="2" title="Zur Medikamentenseite">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Medikamente erinnern" width="35" height="35" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M22 5.72l-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM7.88 3.39L6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM12.5 8H11v6l4.75 2.85.75-1.23-4-2.37V8zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/></svg>
				<span>Medikamente erinnern</span>
			</a>
			<a href="termine_index.php" accesskey="3" title="Zur Terminseite">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Terminplanung" width="35" height="35" viewBox="0 0 24 24"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
				<span>Terminplanung</span>
			</a>
			<a href="buecher_index.php" accesskey="4" title="Zur Buecherseite">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Bücher vorlesen" width="35" height="35" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><defs><path id="a" d="M0 0h24v24H0V0z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg>
				<span>Bücher vorlesen</span>
			</a>
			<a href="notfallsignal_index.php" class="choosen" accesskey="5" title="Zur Notfallseite">
				<svg xmlns="http://www.w3.org/2000/svg" alt="Notfallsignal" width="35" height="35" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<span>Notfallsignal</span>
			</a>
		</div>
		
		<!--Aktuelle Seiten-Position-->
		<ol class="breadcrumb" title="Actual Sideposition List">
			<li><a href="index.php">Startseite</a></li>
			<li><a href="notfallsignal_index.php">Aktuelle Notfalldaten</a></li>
			<li class="active">Notfalldaten ändern</li>
		</ol>
		
		<div title="Headline">
			<h1>
				<svg xmlns="http://www.w3.org/2000/svg" alt="Notfallsignal" class="headline_svg" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				<a href="#scroll" style="color: white;">Notfalldaten ändern</a>
			</h1>
		</div>
		
		<!-- Hilfe Alert -->
		<div class="remodal" data-remodal-id="modalHelp">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 class="helpHeadline">Hilfe Notfalldaten ändern</h1>
			<br />
			<br />
			<p class="helpText">
				<u>Was kann ich hier machen?</u>
				<br />
				Ihre bereits eingespeicherten, <b>aktuellen Notfalldaten ändern</b>.
			</p>
			<p class="helpText">
				<u>Wie kann ich das machen?</u>
				<br />
				- Zunächst müssen Sie die <b>Formularfelder ausfüllen</b>, die sich auf der aktuellen Seite befinden.
				Zur Zeit stehen hier die <b>aktuell eingespeicherten Notfalldaten</b> in den jeweiligen Feldern. Um diese <b>zu Ändern</b>, klicken Sie in die
				<b>jeweiligen Felder</b> und <b>ändern Sie die Werte</b> in diesen.
				Die Eingabefelder haben bunte Rahmen, sind die Rahmen <b>rot</b>, fehlen Eingaben, sind diese <b>grün</b> ist die Eingaben möglich. Sind alle 
				benötigten Daten korrekt eingegeben, leuchten alle Eingabefelder sowie der Rahmen des Formulares grün. Beispiel für eine Eingabe:
				<div style="text-align: center;">
					<img src="Bilder/notfalldaten_bsp.png" alt="Bild Medikamente Tabelle" style="width: 100%;" />
				</div>
			</p>
			<p class="helpText">
				- Um die <b>eingegebenen Daten</b> nun <b>permanent zu speichern</b> müssen Sie auf den <b>grünen Button</b> mit der Aufschrift "Speichern" klicken.
				<div style="text-align: center;">
					<img src="Bilder/save.png" alt="Button speichern" style="width: 80%;" />
				</div>
			</p>
			<p class="helpText">
				- Um das <b>Hinzufügen der Daten abbzubrechen</b> müssen Sie auf den <b>roten Button</b> mit der Aufschrift "Abbrechen" klicken.
				<div style="text-align: center;">
					<img src="Bilder/cancel.png" alt="Button Abbrechen" style="width: 80%;" />
				</div>
			</p>
			<button type="button" class="helpBackButton" data-remodal-action="close">Hilfe schließen</button>
		</div>
		
		<!-- Hinzufügen Alert -->
		<div class="remodal" data-remodal-id="modalUpd">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 style="background-color: transparent; color: green; text-align: center;">Speichern <br /> erfolgreich!</h1>
			<br />
			<br />
			<button data-remodal-action="confirm" class="remodal-confirm" onclick="location.href='notfallsignal_index.php';">OK</button>
		</div>

		<!-- Abbrechen Alert -->
		<div class="remodal" data-remodal-id="modalAbr">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1 style="background-color: transparent; color: red; text-align: center;">Hinzufügen <br /> abgebrochen!</h1>
			<br />
			<br />
			<button data-remodal-action="cancel" class="remodal-cancel" onclick="location.href='notfallsignal_index.php';">OK</button>
		</div>
		
		<br />
		
		<form action="notfallsignal_change_validation.php" method="post" id="scroll" title="Change Notfallinfo Form">
			<br />
			<div class="table-responsive" id="scroll" title="Information von Kuscheltierbesitzers change">
				<table class="table table-dark table-bordered table-hover table-striped">
					<thead class="tablehead">
						<tr>
							<th scope="col" colspan="3">Daten des Kuscheltierbesitzers:</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Name</th>
							<td>
								<input type="text" class="form-control form-control-lg" value="<?php $kn->getName(); ?>" placeholder="Name" name="nameNutzer" id="nameNutzer" required />
							</td>
						</tr>
						<tr>
							<th>Adresse</th>
							<td>
								<input type="text" class="form-control form-control-lg" value="<?php $kn->getAdress(); ?>" placeholder="Adresse" name="adresseNutzer" id="adresseNutzer" required />
							</td>
						</tr>
						<tr>
							<th>Telefonnummer</th>
							<td>
								<input type="text" class="form-control form-control-lg" value="<?php $kn->getTel(); ?>" pattern="[0-9]{11,12}" placeholder="Telefonnummer" name="nrNutzer" id="nrNutzer" required />
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<br />
			
			<div class="table-responsive" id="scroll" title="Information von Notfallkontakt change">
                <table class="table table-dark table-bordered table-hover table-striped">
					<thead class="tablehead">
						<tr>
							<th scope="col" colspan="3">Daten des Notfallkontaktes:</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Name</th>
							<td>
								<input type="text" class="form-control form-control-lg" value="<?php $nk->getName(); ?>" placeholder="Name" name="nameKontakt" id="nameKontakt" required />
							</td>
						</tr>
						<tr>
							<th>Telefonnummer</th>
							<td>
								<input type="text" class="form-control form-control-lg" value="<?php $nk->getTel(); ?>" pattern="[0-9]{11}" placeholder="Telefonnummer" name="nrKontakt" id="nrKontakt" required />
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<div class="form-group" title="Add or Cancel">
				<div class="form-group col-md-6" title="Add">
					<!--<a href="#modalUpd" class="noUnderline">-->
						<button type="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block" accesskey="6">
							<svg xmlns="http://www.w3.org/2000/svg" alt="Hinzufügen" class="headline_svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
							Speichern
						</button>
					<!--</a>-->
				</div>
				<div class="form-group col-md-6" title="Cancel">
					<a href="#modalAbr" class="noUnderline">
						<button type="button" class="btn btn-warning btn-lg btn-block" accesskey="7">
							<svg xmlns="http://www.w3.org/2000/svg" alt="Abbrechen" class="headline_svg" viewBox="0 0 24 24"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
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
		<br />
		<br />
		
		<footer class="mainfooter" role="contentinfo" title="footer">
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