<?php

require 'functions.php';
//Muss für Datenbank geupdatet werden. Folgt in kürze
//echo "<script type='text/javascript'>alert('alert')</script>";
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])) {
    $ccount = 0;
    if (isset($_POST['moCheck']) and $_POST['moCheck'] == '1') {
        // Montag angeklickt
        $m0 = 'true';
        ++$ccount;
    } else {
        $m0 = 'false';
    }
    if (isset($_POST['diCheck']) and $_POST['diCheck'] == '1') {
        // Dienstag angeklickt
        $di = 'true';
        ++$ccount;
    } else {
        $di = 'false';
    }
    if (isset($_POST['miCheck']) and $_POST['miCheck'] == '1') {
        // Mittwoch angeklickt
        $mi = 'true';
        ++$ccount;
    } else {
        $mi = 'false';
    }
    if (isset($_POST['doCheck']) and $_POST['doCheck'] == '1') {
        // Donnerstag angeklickt
        $do = 'true';
        ++$ccount;
    } else {
        $do = 'false';
    }
    if (isset($_POST['frCheck']) and $_POST['frCheck'] == '1') {
        // Freitag angeklickt
        $fr = 'true';
        ++$ccount;
    } else {
        $fr = 'false';
    }
    if (isset($_POST['samCheck']) and $_POST['samCheck'] == '1') {
        // Samstag angeklickt
        $sa = 'true';
        ++$ccount;
    } else {
        $sa = 'false';
    }
    if (isset($_POST['soCheck']) and $_POST['soCheck'] == '1') {
        // Sonntag angeklickt
        $so = 'true';
        ++$ccount;
    } else {
        $so = 'false';
    }

    if (!$ccount > 0) {
        echo "<script type='text/javascript'>
		 $(document).ready(function(){
		 $('#modalHinz').modal('show');});
		 </script>";
    }

    $name = $_POST['name'];
    $anz = $_POST['anz'];
    $zeit = $_POST['zeit'];

    addMedikament($name, $m, $d, $mi, $do, $fr, $sa, $so, $anz, $zeit);

    echo "<script type='text/javascript'>
		 $(document).ready(function(){
		 $('#modalHinz').modal('show');});
		 </script>";

    //header('location:medikamente_index.php');
}
