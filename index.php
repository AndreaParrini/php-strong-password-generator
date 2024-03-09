<?php
session_start();

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}

?>

<?php include __DIR__ . '/header.php' ?>
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
    <?php if ((isset($error))) : ?>
        <div class="badge text-bg-danger p-3 mt-4">
            <?= $error ?>
        </div>
    <?php endif; ?>
</div>


</body>

</html>