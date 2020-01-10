<style>
.modal-header {
    padding: 0;
    position: fixed;
    left: 90%;
    z-index: 999;
}

.modal-body {
    padding-top: 0;
}

.modal-header,
.modal-body,
.modal-footer {
    border: 0;
}

.color-white:hover {
    color:white !important;
}
</style>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
    <a class="navbar-brand" href="/">ZAPTRADE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link color-white" href="/">Catálogo <span class="sr-only">(página atual)</span></a>
            </li>
            <?php if (isset($_SESSION['auth']['id'])) {?>
            <li class="nav-item">
                <a class="nav-link color-white" href="/administrative">Adminstrativo <span class="sr-only">(página atual)</span></a>
            </li>
            <?php }?>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <?php if (!isset($_SESSION['auth']['username'])) {?>
                <a href="#" class="nav-link" data-toggle="modal" data-target=".bd-example-modal-sm">Entrar</a>
                <?php } else {?>
                <div class="dropdown">
                    <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown">Bem vindo,
                        <?=$_SESSION['auth']['username']?>!</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <form method="POST" action="/auth" id="logout-form">
                            <a class="dropdown-item" href="#"
                                onclick="document.getElementById('logout-form').submit()">Sair</a>
                            <input type="hidden" name="_method" value="delete">
                        </form>
                    </div>
                </div>
                <?php }?>
            </li>
        </ul>
    </div>
</nav>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title text-center">Identificação</h5>
                <?php if (!empty($_SESSION['auth']['error'])) {?>
                <div class="alert alert-warning">
                    <?=$_SESSION['auth']['error'] == 'exists' ? 'Usuário inexistente!' : 'Senha incorreta!'?>
                </div>
                <?php }?>
                <form method="POST" action="/auth">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuário</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>