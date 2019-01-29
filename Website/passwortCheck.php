<?php
if (!session_id()) {
    session_start();
}
$input = $_POST["inputPwd"];

if (password_verify($input, $_SESSION["pwd"])) {
    $_SESSION["pwdChecked"] = "true";
    $_SESSION['pwdFalse'] = "false";
    header('location:notfallsignal_change.php');
} else {
    $_SESSION['pwdFalse'] = "true";
    header('location:notfallsignal_index.php');
}
