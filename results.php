<?php
session_start();

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}
?>

<?php include __DIR__ . '/header.php' ?>

<div class="container">
    <div class="bg-light p-2">
        <div class="p-5 d-flex align-items-center gap-3">
            <div class="fs-5">
                Password :
            </div>
            <div class="badge text-bg-primary p-3 fs-5">
                <?= $password ?>
            </div>
        </div>
        <div class="ps-5 pb-2">
            <a href="./index.php" class="btn btn-warning">Torna al Generator</a>
        </div>

    </div>

</div>

<?php include __DIR__ . '/footer.php' ?>