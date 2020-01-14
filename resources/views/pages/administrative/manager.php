<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1>Produtos para aprovação</h1>
        <div style="display:none" id="page-message"></div>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            &nbsp;
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width:9%">Foto principal</th>
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
                    <th class="text-center"><img src="<?=$product['thumbnail'];?>" style="height:50px"></th>
                    <td><a href="/catalog/<?=$product['id']?>" target="_blank"> <?=$product['name'];?></a></td>
                    <td><?="R$ " . brazilianFormatMoney($product['price']);?></td>
                    <td class="text-justify"><?=$product['description'];?></td>
                    <td><?=$product['author']['username']?></td>
                    <td class="text-center" style="width:15%">
                        <form method="POST" action="/catalog/<?=$product['id']?>">
                            <input type="hidden" name="_method" value="put">
                            <button name="action"
                                value="active"
                                class="btn btn-success" data-toggle="modal" data-target=".modal-delete-product"
                                title="Aprovar produto" style="margin-right:10px;">
                                <img src="/img/check.png" style="width:14px;">
                            </button>
                            <button
                                name="action"
                                value="inactive"
                                class="btn btn-danger" data-toggle="modal" data-target=".modal-delete-product"
                                title="Recusar produto">
                                <img src="/img/x-mark.png" style="width:14px;">
                            </button>
                        </form>
                    </td>
                </tr>

                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>