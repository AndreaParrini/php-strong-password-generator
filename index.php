<?php

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
        <form action="./functions.php" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Number of password's characters</label>
                <input type="number" class="form-control w-25 m-auto" name="lenght" id="lenght" aria-describedby="helpId" placeholder="Number of characters" min='4' />
                <small id="helpId" class="form-text text-muted">Insert number of your password's lenght</small>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="repeatCharacters" value="si" id="repeatCharacters" checked>
                    <label class="form-check-label" for="repeatCharacters">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="repeatCharacters" value="no" id="noRepeatCharacters">
                    <label class="form-check-label" for="noRepeatCharacters">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="letters" value="checked" id="flexCheckLetters">
                    <label class="form-check-label" for="flexCheckLetters">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="numbers" value="checked" id="flexCheckNumbers">
                    <label class="form-check-label" for="flexCheckNumbers">
                        Numeri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="specialCharacters" value="checked" id="flexCheckSpecialCharacters">
                    <label class="form-check-label" for="flexCheckSpecialCharacters">
                        Simboli
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                Genera
            </button>
        </form>
        <?php if ((isset($lengthPassword) && $lengthPassword === '')) : ?>
            <div class="badge text-bg-danger p-3 mt-4">
                <?= 'Insert a value before click button' ?>
            </div>
        <?php elseif (isset($lengthPassword)) : ?>
            <div class="badge text-bg-success p-3 mt-4">
                <?= generatePassword($lengthPassword); ?>
            </div>
        <?php endif; ?>
    </div>


</body>

</html>