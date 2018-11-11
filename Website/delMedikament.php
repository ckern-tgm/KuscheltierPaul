<?php

$id = $_GET['id'];
$zeit = $_GET['zeit'];
$anz = $_GET['anz'];

$dbconn = pg_connect('host=localhost port=5432 dbname=paul user=vinc password=vinc');
$del = "DELETE FROM medikamente WHERE name = '".$id."' AND zeit = '".$zeit."' AND anz = ".$anz.";";
pg_query($dbconn, $del);

header('location:medikamente_index.php');
