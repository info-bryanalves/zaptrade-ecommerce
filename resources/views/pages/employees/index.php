<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1>Profissionais</h1>
        <div class="modal fade modal-delete-employee" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
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

                        <form method="POST" id="form-delete-employee">
                            <div class="form-group text-center" style="margin-bottom:30px">
                            Deseja realmente excluir este profissional?
                            </div>
                            <input type="hidden" id="idfuncionario">

                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger w-100">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            <a href="/employees/create" class="btn btn-info" style="color:white" >Cadastrar profissional</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee) {?>
                <tr>
                    <th scope="row"><?=$employee['id'];?></th>
                    <td><?=$employee['username'];?></td>
                    <td><?=$employee['occupation'] == 'manager' ? 'Gerente' : 'Vendedor';?></td>
                    <td>
                        <button onclick="$('#form-delete-employee').attr('action','/employees/<?=$employee['id'];?>')" class="btn btn-danger" data-toggle="modal" data-target=".modal-delete-employee">
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