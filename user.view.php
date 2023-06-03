<?php require_once "partials/head.php" ?>
<?php
if (isset($_SESSION['id'])) {
    $ads = get_all_user_ads($_SESSION['id']);
    //dd($ads);
} else {
    header('Location: index.php');
}
?>
<?php require_once "partials/navbar.php" ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <di-fluidv class="col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
            <div class="mt-3 mb-5">
                <a href="new.add.view.php" class="btn btn-info form-control">New ad</a>
            </div>
        </di-fluidv>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($ads as $ad) : ?>
            <div style="width: 300px;">
                <div class="card mb-2 mt-2">
                    <div class="card-header">
                        <a href="#" class="btn btn-secondary btn-sm"><?php echo $ad['category']; ?></a>
                    </div>
                    <div class="card-body text-center">
                        <h5><?php echo $ad['title']; ?></h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="#" class="btn btn-warning btn-sm"><?php echo $ad['name']; ?></a>
                        <a href="#" class="btn btn-danger btn-sm"><?php echo $ad['price']; ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="d-flex justify-content-center mt-1">
        <a class="link-underline link-underline-opacity-0 link-opacity-75-hover" href="ads.view.php">
            <h3 class="mb-0">&#8617;</h3>
        </a>
    </div>
</div>
<?php require_once "partials/footer.php" ?>