<?php
function encryptPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}
// Usage
$hash = encryptPassword('password');
echo "Hash: $hash\n";
echo verifyPassword('password', $hash) ? 'Password is correct' : 'Password is incorrect';

// actually no need to this function, just use password_hash() and password_verify() directly but this to be a reference or reminder
?>