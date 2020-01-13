<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1 style="margin-bottom:15px"><?= empty($product) ? 'Cadastro de' : 'Editar'?> produto</h1>
        <form method="POST" action="<?= empty($product) ? '/products/store' : "/products/{$product['id']}update"?>">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="name" value="<?= checkContent($product, 'name') ?>" required>
            </div>
            <div class="form-group">
                <label>Preço</label>
                <input type="number" step="any" class="form-control" name="price" value="<?= checkContent($product, 'price') ?>" required>
            </div>
            <div class="form-group">
                <label>Descrição:</label>
                <textarea class="form-control" name="description" required><?= checkContent($product, 'description') ?></textarea>
            </div>
            <input type="hidden" name="_method" value="put">
            <button type="submit" class="btn btn-primary"><?= empty($product) ? 'Cadastrar' : 'Editar'?></button>
        </form>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            <a href="/products">Voltar</a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>