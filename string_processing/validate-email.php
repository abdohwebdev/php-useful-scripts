<?php
function validateEmail($email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return checkdnsrr(explode('@', $email)[1], 'MX');
}

// test
$email = "test@test.com";
if(validateEmail($email)) {
    echo "Email is valid";
} else {
    echo "Email is invalid";
}
// Output: Email is invalid

/*** warning from php manual : Email validation is complex and the only true way to confirm an email is valid and exists is to send an email to the address. ***/

 