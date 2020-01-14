<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1>Produtos</h1>
        <div class="" style="display:none" id="page-message"></div>
        <div class="modal fade modal-delete-product" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title text-center" style="margin-bottom:30px">Atenção, ação irreversível!</h5>

                        <form method="POST" id="form-delete-product">
                            <div class="form-group text-center" style="margin-bottom:30px">
                                Deseja realmente excluir este produto?
                            </div>

                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger w-100">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            <a href="/products/create" class="btn btn-info" style="color:white">Cadastrar produto</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto principal</th>
                    <th scope="col">Nome</th>
                    <th scope="col" style="width:12.5%">Preço</th>
                    <th scope="col">Descrição</th>
                    <th scope="col" style="width:12.5%">Situação</th>
                    <th scope="col">Autor</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) {?>
                <tr>
                    <th scope="row"><?=$product['id'];?></th>
                    <th class="text-center"><img src="<?=$product['thumbnail'];?>" style="height:50px"></th>
                    <td><a href="/catalog/<?=$product['id']?>" target="_blank"> <?=$product['name'];?></a></td>
                    <td><?="R$ " . brazilianFormatMoney($product['price']);?></td>
                    <td class="text-justify"><?=$product['description'];?></td>
                    <td><?=getStatus($product['status'])?></td>
                    <td><?=$product['author']['username']?></td>
                    <td class="d-flex">
                        <?php $disabled = '';?>
                        <?php if ($_SESSION['auth']['occupation'] !== 'manager') {?>
                        <?php $disabled = $product['created_by'] != $_SESSION['auth']['id'] ? 'disabled' : ''?>
                        <?php }?>

                        <form action="/products/<?=$product['id']?>/edit">
                            <button type="submit" class="btn btn-primary" style="margin-right:10px" <?=$disabled?>
                                <?=$disabled == 'disabled' ? 'title="Sem permissão para edição"' : ''?>>
                                <img src="/img/edit.png" style="width:14px;">
                            </button>
                        </form>


                        <button onclick="$('#form-delete-product').attr('action','/products/<?=$product['id'];?>')"
                            class="btn btn-danger" data-toggle="modal" style="margin-right:10px"
                            data-target=".modal-delete-product" <?=$disabled?>
                            <?=$disabled == 'disabled' ? 'title="Sem permissão para exclusão"' : ''?>>
                            <img src="/img/less.png" style="width:14px;">
                        </button>
                        <form action="/products/<?=$product['id']?>/photos">
                            <button onclick="$('#form-delete-product').attr('action','/products/<?=$product['id'];?>')"
                                class="btn btn-info" data-toggle="modal" data-target=".modal-delete-product"
                                <?=$disabled?> <?=$disabled == 'disabled' ? 'title="Sem permissão"' : 'title="Fotos"'?>>
                                <img src="/img/galery.png" style="width:14px;">
                            </button>
                        </form>
                    </td>
                </tr>

                <?php }?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>