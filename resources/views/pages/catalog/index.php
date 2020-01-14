<?php require(__DIR__ . '/../../layouts/header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <?php foreach ($products as $product) { ?>
        <div class="product-container col-12 col-md-6 col-lg-4">

            <div class="product-item">
                <a href="/catalog/<?= $product['id'] ?>">
                    <div class="product-image">

                        <img src="<?= $product['thumbnail'] ?>" />
                    </div>
                </a>

                <div class="product-content">
                    <div class="product-title">

                        <div class="product-name" title="<?= $product['name'] ?>" style="font-weight: 500;">
                            <a href="/catalog/<?= $product['id'] ?>" style="color: inherit;">
                                <?= $product['name'] ?>
                            </a>
                        </div>
                        <div class="product-price text-right">R$ <?= $product['price'] ?></div>
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

<?php require __DIR__ . '/../../layouts/footer.php';?>