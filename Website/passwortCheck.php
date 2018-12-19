<?php
if (!session_id()) {
    session_start();
}
$input = $_POST["inputPwd"];

if (password_verify($input, $_SESSION["pwd"])) {
    $_SESSION["pwdChecked"] = "true";
    header('location:notfallsignal_change.php');
} else {
    header('location:notfallsignal_index.php');
}
