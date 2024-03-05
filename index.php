<?php
include_once __DIR__ . '/functions.php';
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
        <?php if (isset($lengthPassword) && $lengthPassword === '') : ?>
            <div class="badge text-bg-danger p-3 mt-4">
                <?= 'Insert a value before click button' ?>
            </div>
        <?php else : ?>
            <div class="badge text-bg-success p-3 mt-4">
                <?= generatePassword($lengthPassword); ?>
            </div>
        <?php endif; ?>
    </div>


</body>

</html>