<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1 style="margin-bottom:15px"><?=empty($product) ? 'Cadastro de' : 'Editar'?> produto</h1>
        <form method="POST" action="<?=empty($product) ? '/products/store' : "/products/{$product['id']}update"?>"
            enctype="multipart/form-data">
            <?php if (empty($product)) { ?>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control-file" name="images[]" multiple required>
            </div>
            <?php } ?>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="name" value="<?=checkContent($product, 'name')?>"
                    required>
            </div>
            <div class="form-group">
                <label>Preço</label>
                <input type="number" step="any" class="form-control" name="price"
                    value="<?=checkContent($product, 'price')?>" required>
            </div>
            <div class="form-group">
                <label>Descrição:</label>
                <textarea class="form-control" name="description"
                    required><?=checkContent($product, 'description')?></textarea>
            </div>
            <?php if (!empty($product)) {?>
            <?php if ($_SESSION['auth']['occupation'] == 'manager') {?>
            <div class="form-group">
                <label>Situação:</label>
                <select name="status" class="form-control" name="description" required>
                    <option <?= $product['status'] == 'active' ? 'selected' : ''?> value="active">Ativo</option>
                    <option <?= $product['status'] == 'pending' ? 'selected' : ''?> value="pending">Pendente</option>
                    <option <?= $product['status'] == 'inactive' ? 'selected' : ''?> value="inactive">Recusado</option>
                </select>
            </div>
            <?php }?>
            <input type="hidden" name="_method" value="put">
            <?php }?>
            <button type="submit" class="btn btn-primary"><?=empty($product) ? 'Cadastrar' : 'Editar'?></button>
        </form>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            <a href="/products">Voltar</a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>