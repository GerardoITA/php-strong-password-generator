<?php
$passwordLength = $_POST['passlength'] ?? false;

if ($passwordLength != false) {
    function generaPassword($lunghezza) {
    for ( $i = 0; $i < $lunghezza; $i++ ){
        $pass = '';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
        $character = rand(0, $lunghezza);
        $pass += $characters[$character];
    }
    return $pass;
};

}



?>