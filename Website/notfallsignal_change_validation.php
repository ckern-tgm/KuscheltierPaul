<?php

require 'functions.php';
if (!session_id()) session_start();

$nk = new Notfallkontakt();
$kn = new Kuscheltiernutzer();


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit'])){
    $kname = $_POST['nameKontakt'];
    $ktel = $_POST['nrKontakt'];
    $nk->update($kname, $ktel);

    $nname = $_POST['nameNutzer'];
    $nadresse = $_POST['adresseNutzer'];
    $ntel = $_POST['nrNutzer'];
    $kn->update($nname, $nadresse, $ntel);
}

header('location:notfallsignal_index.php');
