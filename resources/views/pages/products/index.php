<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1>Produtos</h1>
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
                    <th scope="col">Nome</th>
                    <th scope="col" style="width:12.5%">Preço</th>
                    <th scope="col">Descrição</th>
                    <th scope="col" style="width:12.5%">Autor</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) {?>
                <tr>
                    <th scope="row"><?=$product['id'];?></th>
                    <td><?=$product['name'];?></td>
                    <td><?="R$ " . brazilianFormatMoney($product['price']);?></td>
                    <td class="text-justify"><?=$product['description'];?></td>
                    <td><?=$product['author']['username']?></td>
                    <td class="text-center">
                        <button onclick="$('#form-delete-product').attr('action','/products/<?=$product['id'];?>')" class="btn btn-danger" data-toggle="modal" data-target=".modal-delete-product">
                            <img src="/img/less.png" style="width:14px;">
                        </button>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>