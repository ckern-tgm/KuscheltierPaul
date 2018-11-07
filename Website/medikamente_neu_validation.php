<?php

require 'functions.php';
//Muss für Datenbank geupdatet werden. Folgt in kürze
//echo "<script type='text/javascript'>alert('med validation start')</script>";
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])) {
    echo "<script type='text/javascript'>alert('start')</script>";
    $name = $_POST['name'];
    $anz = $_POST['anz'];
    $zeit = $_POST['zeit'];

    $ccount = 0;
    if (isset($_POST['moCheck'])) {
        // Montag angeklickt
        $mo = 'true';
        ++$ccount;
    } else {
        $mo = 'false';
    }
    if (isset($_POST['diCheck'])) {
        // Dienstag angeklickt
        $di = 'true';
        ++$ccount;
    } else {
        $di = 'false';
    }
    if (isset($_POST['miCheck'])) {
        // Mittwoch angeklickt
        $mi = 'true';
        ++$ccount;
    } else {
        $mi = 'false';
    }
    if (isset($_POST['doCheck'])) {
        // Donnerstag angeklickt
        $do = 'true';
        ++$ccount;
    } else {
        $do = 'false';
    }
    if (isset($_POST['frCheck'])) {
        // Freitag angeklickt
        $fr = 'true';
        ++$ccount;
    } else {
        $fr = 'false';
    }
    if (isset($_POST['samCheck'])) {
        // Samstag angeklickt
        $sa = 'true';
        ++$ccount;
    } else {
        $sa = 'false';
    }
    if (isset($_POST['soCheck'])) {
        // Sonntag angeklickt
        $so = 'true';
        ++$ccount;
    } else {
        $so = 'false';
    }

    if (!$ccount > 0) {
        echo "<script type='text/javascript'>
		 $(document).ready(function(){
		    $('#modalAbr').modal('show');
		 });
		 </script>";
    }

    addMedikament($name, $anz, $mo, $di, $mi, $do, $fr, $sa, $so, $zeit);
/*
    echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){";
    echo "$('#modalHinz').modal('show');});";
	echo "</script>";*/

    //echo "<script type='text/javascript'>alert('med validation end')</script>";
    header('location:medikamente_index.php');
}
