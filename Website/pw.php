<?php
$hash = password_hash("Paul123", PASSWORD_BCRYPT);

if (password_verify('Paul123', $hash)) {
    echo 'Valides Passwort!';
} else {
    echo 'Invalides Passwort.';
}
