<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1 style="margin-bottom:15px">Fotos</h1>
        <div class="d-flex">
            <div class="w-25">
                <h5>Selecione a foto principal</h5>
            </div>
            <div class="w-75 text-right">
                <form method="POST" action="/products/<?= $id ?>/photos" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="images[]" multiple required>
                        <button type="submit" class="btn btn-info" onclick="$('#imagemr3').click()">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <form method="POST" action="/products/<?= $id ?>/photos">
            <div style="display:flex;">
                <?php foreach ($images as $key => $value) { ?>
                <div style="margin-right:15px; display:flex;flex-direction:column">
                    <img src="<?= $value ?>" style="height:100px">
                    <div class="d-flex justify-content-center" style="margin-top:15px;margin-bottom:15px">
                        <input <?= $thumbnail == $value ? 'checked' : ''?> type="radio" name="thumbnail"
                            value="<?= $value ?>" required>
                    </div>
                </div>
                <?php } ?>
            </div>
            <input type="hidden" name="_method" value="put">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            <a href="/products">Voltar</a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>