<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php $ads = getAll();
//dd($ads);
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
            <h1 class="display-6 text-center">All Ads</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($ads as $ad) : ?>
            <div style="width: 300px;">
                <div class="card mb-2 mt-2">
                    <div class="card-header">
                        <a href="show.category.php?cat=<?php echo $ad['category']; ?>" class="btn btn-secondary btn-sm"><?php echo $ad['category']; ?></a>
                    </div>
                    <div class="card-body text-center">
                        <h5><?php echo $ad['title']; ?></h5>
                        <a href="single.ad.php?id=<?php echo $ad['id']; ?>" class="btn btn-light btn-sm">See ad</a>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="ads_from_user.php?name=<?php echo $ad['name']; ?>" class="btn btn-warning btn-sm"><?php echo $ad['name']; ?></a>
                        <a href="ads_from_price.php?price=<?php echo $ad['price']; ?>" class="btn btn-danger btn-sm"><?php echo $ad['price']; ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once "partials/footer.php" ?>