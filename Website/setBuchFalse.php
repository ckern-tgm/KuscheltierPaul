<?php
$name = $_POST['name'];
$genre = $_POST['genre'];
$autor = $_POST['autor'];

$dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
$set = "UPDATE buch SET ausgewaehlt = false WHERE name = '".$name."' and genre = '".$genre."' and autor = '".$autor."';";
pg_query($dbconn, $set);

if ($name == "hans"){
    // some action goes here under php
    echo json_encode(array("abc"=>'successfuly deactivated'));
}
