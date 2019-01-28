<?php
require 'functions.php';

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit'])) {
    $name = $_POST['name'];
    $datum = $_POST['datum'];
    $zeit = $_POST['zeit'];
    $ort = $_POST['ort'];
    $hinweis = $_POST['hinw'];

    addTermin($datum, $zeit, $ort, $hinweis, $name);

    header('location:termine_index.php');
}