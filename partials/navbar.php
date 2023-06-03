<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Classified Ads</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php
            if (isset($_SESSION['id'])) {
                require_once "partials/navbar-logged.php";
            } else {
                require_once "partials/navbar-login.php";
            }
            ?>
        </div>
    </div>
</nav>