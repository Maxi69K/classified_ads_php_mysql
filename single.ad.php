<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php $ad = getOne($_GET['id']);
//dd($ad);
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
            <h3 class="display-6 text-center"><?php echo $ad['title']; ?></h3>
            <div class="row justify-content-center">
                <div style="width: 600px;">
                    <div class="card mb-2 mt-2">
                        <div class="card-header">
                            <a href="#" class="btn btn-secondary btn-sm"><?php echo $ad['category']; ?></a>
                        </div>
                        <div class="card-body text-center">
                            <h5><?php echo $ad['title']; ?></h5>
                            <p><?php echo $ad['text']; ?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-warning btn-sm"><?php echo $ad['name']; ?></a>
                            <a href="#" class="btn btn-danger btn-sm"><?php echo $ad['price']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-1">
        <a class="link-underline link-underline-opacity-0 link-opacity-75-hover" href="ads.view.php">
            <h3 class="mb-0">&#8617;</h3>
        </a>
    </div>
</div>
<?php require_once "partials/footer.php" ?>