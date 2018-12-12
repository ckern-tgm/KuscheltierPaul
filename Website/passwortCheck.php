<?php
if (!session_id()) {
    session_start();
}
$input = $_POST["inputPwd"];

if (strcmp($input, "Paul123") == 0) {
    $_SESSION["pwdChecked"] = "true";
    header('location:notfallsignal_change.php');
} else {
    //echo "<script>alert('Passwort falsch')</script>";
    header('location:notfallsignal_index.php');
}
