<?php
/* $lettersUppercase = 'ABCDEFGHIJKLMNOPQSRTUVWXYZ';
$letters = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$specialCharacters = '!@#$%^&*()_+-={}[]|:;"<>,.?/'; */


if (isset($_GET['lenght'])) {
    $lengthPassword = $_GET['lenght'];
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

if (isset($lengthPassword)) {
    var_dump(generatePassword($lengthPassword));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body>
    <div class="container text-center">
        <form action="" method="get">
            <div class="mb-3">
                <label for="" class="form-label">Number of password's characters</label>
                <input type="number" class="form-control w-25 m-auto" name="lenght" id="lenght" aria-describedby="helpId" placeholder="Number of characters" min='4' />
                <small id="helpId" class="form-text text-muted">Insert number of your password's lenght</small>
            </div>

            <button type="submit" class="btn btn-primary">
                Genera
            </button>
        </form>
        <?php if (isset($lengthPassword)) { ?>
            <div class="badge text-bg-success p-3">
                <?= generatePassword($lengthPassword); ?>
            </div>
        <?php }; ?>
    </div>


</body>

</html>