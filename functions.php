<?php


if (isset($_POST['lenght'])) {
    $lengthPassword = $_POST['lenght'];
}

function randomLetters()
{
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $n = rand(0, strlen($letters) - 1);

    return $letters[$n];
}

function randomLettersUppercase()
{
    $lettersUppercase = 'ABCDEFGHIJKLMNOPQSRTUVWXYZ';
    $n = rand(0, strlen($lettersUppercase) - 1);

    return $lettersUppercase[$n];
}

function randmoSpecialCharacters()
{
    $specialCharacters = '!@#$%^&*()_+-={}[]|:;"<>,.?/';
    $n = rand(0, strlen($specialCharacters) - 1);

    return $specialCharacters[$n];
}

function generatePassword($length)
{
    $password = '';
    while (lengthPassword($password, $length)) {
        if (lengthPassword($password, $length)) {
            $password .= randomLetters();
        };
        if (lengthPassword($password, $length)) {
            $password .= randomLettersUppercase();
        };
        if (lengthPassword($password, $length)) {
            $password .= rand(0, 9);
        };
        if (lengthPassword($password, $length)) {
            $password .= randmoSpecialCharacters();
        };
        /* $password .= randomLetters();
        $password .= randomLettersUppercase();
        $password .= rand(0, 9);
        $password .= randmoSpecialCharacters(); */
    }

    return str_shuffle($password);
}

function lengthPassword($pass, $len)
{
    if (strlen($pass) < $len) {
        return true;
    }
    return false;
}
