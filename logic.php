<?php
function generaPassword($passwordLength)
{
    $password = '';
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $passwordLength; $i++) {
        $character = rand(0, $charactersLength - 1);
        $pass .= $characters[$character];
    }
    return $password;
};




?>