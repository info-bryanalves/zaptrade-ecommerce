<?php require __DIR__ . '/../../layouts/header.php';?>

<div class="container-fluid">
    <div class="row">
        <?php if (!empty($product)) {?>
        <div class="product-container col-12 col-md-12 col-lg-12">
            <div class="product-item">
                <a href="/products/<?=$product['id']?>">
                    <div class="product-image">
                        <img src="<?=$product['thumbnail']?>" />
                    </div>
                </a>
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