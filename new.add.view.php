<?php require_once "partials/head.php" ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: index.php');
}
?>
<?php require_once "partials/navbar.php" ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
            <h4 class="text-center m-3">New add</h4>
            <form action="new.add.php" method="post">
                <select name="category" class="form-control" autofocus>
                    <option value="computers">Computers</option>
                    <option value="mobile phones">Mobile Phones</option>
                    <option value="white ware">White ware</option>
                    <option value="fishing">Fishing</option>
                    <option value="sports">Sports</option>
                    <option value="cars">Cars</option>
                </select><br>
                <input type="text" name="title" placeholder="title" class="form-control" required maxlength="50"><br>
                <input type="number" name="price" placeholder="price" class="form-control" required><br>
                <textarea name="text" class="form-control mb-3" required maxlength="255"></textarea>
                <button type="submit" class="btn btn-primary form-control">Add new</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <a class="link-underline link-underline-opacity-0 link-opacity-75-hover" href="user.view.php">
            <h3 class="mb-0">&#8617;</h3>
        </a>
    </div>
</div>
<?php require_once "partials/footer.php" ?>