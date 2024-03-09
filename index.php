<?php
session_start();

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}

?>

<?php include __DIR__ . '/header.php' ?>
<div class="container">
    <h3 class="text-light text-center">Genera una password sicura</h3>
    <?php if ((isset($error))) : ?>
        <div class="text-start text-bg-danger p-4 mt-2 mb-2 rounded">
            <?= $error ?>
        </div>
    <?php endif; ?>
    <form class="bg-light p-4 rounded" action="./functions.php" method="post">
        <div class="mb-3 d-flex">
            <label for="" class="form-label w-50">Lunghezza password :</label>
            <input type="number" class="form-control w-25" name="lenght" id="lenght" aria-describedby="helpId" placeholder="Lunghezza password" min='4' />
        </div>
        <div class="mb-3 d-flex">
            <div class="w-50">
                Consenti ripetizioni di uno o più caratteri :
            </div>
            <div>
                <div class="form-check">

                    <div>
                        <input class="form-check-input" type="radio" name="repeatCharacters" value="si" id="repeatCharacters" checked>
                        <label class="form-check-label" for="repeatCharacters">
                            Si
                        </label>
                    </div>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="repeatCharacters" value="no" id="noRepeatCharacters">
                    <label class="form-check-label" for="noRepeatCharacters">
                        No
                    </label>
                </div>
            </div>

        </div>
        <div class="mb-3 d-flex">
            <div class="w-50">
                Scegli quali caratteri inserire nella password :
            </div>
            <div>
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

        </div>
        <button type="submit" class="btn btn-primary">
            Genera
        </button>
        <a href="./index.php" class="btn btn-secondary">Annulla</a>
    </form>

</div>


</body>

</html>