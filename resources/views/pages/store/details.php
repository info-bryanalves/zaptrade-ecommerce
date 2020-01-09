<?php require(__DIR__ . '/../../layouts/header.php'); ?>
<?php require(__DIR__ . '/../../components/header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="product-container col-12 col-md-12 col-lg-12">
                <div class="product-item">
                    <a href="/products/<?= $product['id'] ?>">
                        <div class="product-image">
                            <img src="<?= $product['thumbnail'] ?>" />
                        </div>
                    </a>
                    <div class="product-content">
                        <div class="product-title">
                            <div class="product-name" title="<?= $product['name'] ?>"><?= $product['name'] ?></div>
                            <div class="product-price">R$ <?= $product['price'] ?></div>
                        </div>
                        <div class="product-description">
                            <span><?= $product['description'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>