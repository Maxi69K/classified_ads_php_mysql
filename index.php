<?php require_once "partials/head.php" ?>
<?php
if (isset($_SESSION['id'])) {
    header('Location: ads.php');
}
?>
<?php require_once "partials/navbar.php" ?>
<div class="w-75 mx-auto mt-5 d-flex justify-content-center">
    <img src="https://source.unsplash.com/eveI7MOcSmw" class="img-fluid img-thumbnail" alt="Ads">
</div>
<?php require_once "partials/footer.php" ?>