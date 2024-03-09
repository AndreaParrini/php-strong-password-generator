<?php
session_start();

echo $_SESSION['password'];

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}
?>

<?php include __DIR__ . '/header.php' ?>

</body>

</html>