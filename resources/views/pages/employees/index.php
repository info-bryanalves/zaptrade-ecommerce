<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1>Profissionais</h1>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            <button class="btn btn-info">Cadastrar funcionário</button>
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
                <?php foreach ($employees as $employee) { ?>
                <tr>
                    <th scope="row"><?= $employee['id']; ?></th>
                    <td><?= $employee['username']; ?></td>
                    <td><?= $employee['occupation'] == 'manager' ? 'Gerente' : 'Vendedor'; ?></td>
                    <td><?= $employee['occupation'] == 'manager' ? 'Gerente' : 'Vendedor'; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>