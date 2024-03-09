<?php
session_start();

if (isset($_POST['lenght'])) {
    $lengthPassword = $_POST['lenght'];
}

if (isset($_POST['numbers']) && (!isset($_POST['letters']) && !isset($_POST['specialCharacters'])) && ($lengthPassword > 10) && ($_POST['repeatCharacters'] === 'no')) {
    session_unset();
    $_SESSION['error'] = 'Impossibile generare una password, lunghezza password eccessiva.';
    header('Location: ./index.php');
} elseif ((isset($lengthPassword) && $lengthPassword === '')) {
    session_unset();
    $_SESSION['error'] = 'Inserisci una lunghezza valida';
    header('Location: ./index.php');
} elseif ((!isset($_POST['letters']) && !isset($_POST['numbers']) && !isset($_POST['specialCharacters']))) {
    session_unset();
    $_SESSION['error'] = 'Inserire almeno un parametro valido. Scegliere almeno un parametro tra Lettere, Numeri o Simboli.';
    header('Location: ./index.php');
} else {
    session_unset();
    $_SESSION['password'] = generatePassword($lengthPassword);
    header('Location: ./results.php');
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
        if (isset($_POST['letters']) && lengthPassword($password, $length)) {
            $letters = randomLetters();
            if ($_POST['repeatCharacters'] === 'no') {
                if (!str_contains($password, $letters)) {
                    $password .= $letters;
                }
            } else {
                $password .= $letters;
            }
        };
        if (isset($_POST['letters']) && lengthPassword($password, $length)) {
            $lettersUppercase = randomLettersUppercase();
            if ($_POST['repeatCharacters'] === 'no') {
                if (!str_contains($password, $lettersUppercase)) {
                    $password .= $lettersUppercase;
                }
            } else {
                $password .= $lettersUppercase;
            }
        };
        if (isset($_POST['numbers']) && lengthPassword($password, $length)) {
            $number = rand(0, 9);
            if ($_POST['repeatCharacters'] === 'no') {
                if (!str_contains($password, $number)) {
                    $password .= $number;
                }
            } else {
                $password .= $number;
            }
        };
        if (isset($_POST['specialCharacters']) && lengthPassword($password, $length)) {
            $specialCharacters = randmoSpecialCharacters();
            if ($_POST['repeatCharacters'] === 'no') {
                if (!str_contains($password, $specialCharacters)) {
                    $password .= $specialCharacters;
                }
            } else {
                $password .= $specialCharacters;
            }
        };
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
