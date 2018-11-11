<?php

$id = $_GET['id'];
$datum = $_GET['datum'];
$zeit = $_GET['zeit'];

$dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
$del = "DELETE FROM termine WHERE name = '$id' AND datum = '$datum' AND uhrzeit = '$zeit';";
pg_query($dbconn, $del);

header('location:termine_index.php');
