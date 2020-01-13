<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1>Meus produtos pendentes</h1>
        <div style="display:none" id="page-message"></div>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            &nbsp;
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto principal</th>
                    <th scope="col">Nome</th>
                    <th scope="col" style="width:12.5%">Preço</th>
                    <th scope="col">Descrição</th>
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
                    <td class="d-flex">
                    </td>
                </tr>

                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>