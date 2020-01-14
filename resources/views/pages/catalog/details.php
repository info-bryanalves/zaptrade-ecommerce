<?php require __DIR__ . '/../../layouts/header.php';?>

<div class="container-fluid">
    <div class="row">
        <?php if (!empty($product)) {?>
        <div class="product-container col-12 col-md-12 col-lg-12">
            <div class="product-item" style="height:410px">
                <a href="<?= $product['thumbnail'] ?>" data-toggle="lightbox" data-gallery="gallery">
                    <div class="product-image">
                        <img src="<?=$product['thumbnail']?>" />
                    </div>
                </a>
                <?php if (!empty($images) && count($images) > 1) { ?>
                <div class="d-flex justify-content-center" style="border-bottom: 1px solid #e3e3e3;">
                    <?php foreach ($images as $image) { ?>
                    <?php if ($product['thumbnail'] !== $image) { ?>
                    <a href="<?= $image ?>" data-toggle="lightbox" data-gallery="gallery">
                        <div style="height: 90px; border: 1px solid #e3e3e3; padding: 10px; margin-right:5px;margin-bottom:10px;
                        ">
                            <img src="<?= $image?>" style="height:100%">
                        </div>
                    </a>
                    <?php }?>
                    <?php } ?>
                </div>
                <?php } ?>
                <div class="product-content">
                    <div class="product-title">
                        <div class="product-name" title="<?=$product['name']?>"><?=$product['name']?></div>
                        <div class="product-price">R$ <?=$product['price']?></div>
                    </div>
                    <div class="product-description">
                        <span><?=$product['description']?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php } else {?>
        <div class="alert alert-warning mt-5 w-100 text-center">
            Produto não disponível!
        </div>
        <?php }?>
    </div>
</div>

<?php require __DIR__ . '/../../layouts/footer.php';?>