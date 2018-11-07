<?php

$id = $_GET['id'];

$dbconn = pg_connect('host=localhost port=5432 dbname=paul user=vinc password=vinc');
$del = "DELETE FROM medikament WHERE name = '$id';";
pg_query($dbconn, $del);

header('location:medikamente_index.php');
