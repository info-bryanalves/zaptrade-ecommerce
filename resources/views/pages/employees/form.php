<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <h1 style="margin-bottom:15px">Cadastro de funcionário</h1>
        <form method="POST" action="/employees/store">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label>Cargo:</label>
                <select class="form-control" name="occupation">
                    <option value="manager">Gerente</option>
                    <option value="salesman">Vendedor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <div class="d-flex justify-content-end" style="margin-bottom:15px">
            <a href="/employees">Voltar</a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>