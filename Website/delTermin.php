<?php

$id = $_GET['id'];

$dbconn = pg_connect("host=localhost port=5432 dbname=kuscheltier user=vinc password=vinc");
$del = "DELETE FROM termine WHERE name = '$id';";
pg_query($dbconn, $del);

header('location:termine_index.php');
?>