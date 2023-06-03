<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
            <form action="register.php" method="post">
                <input type="text" name="name" placeholder="name" class="form-control"><br>
                <input type="email" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button type="submit" class="form-control btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <a class="link-underline link-underline-opacity-0 link-opacity-75-hover" href="index.php">
            <h3 class="mb-0">&#8617;</h3>
        </a>
    </div>
</div>
<?php require_once "partials/footer.php" ?>