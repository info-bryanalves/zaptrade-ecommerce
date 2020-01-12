<style>
.sidebar {
    width: 20%;
    height: 100%;
    color: white;
    background-color: #8e8e8e;
    text-decoration: none;
}

.sidebar a {
    color: #343a40;
}

.sidebar-item {
    border-bottom: 1px solid;
}

.sidebar-item a:hover {
    background-color: #e3e3e3;
}

@media (max-width: 600px) {
    .sidebar {
        width: 100%;
        display: flex;
    }

    .sidebar-item {
        border-bottom: 1px solid;
        width: 33.3%;
        text-align:center;
        border-width:  1px 1px 1px 0px;
        border-style: solid;
        border-color: #000;
    }

    .sidebar-item:first-child {
        border-left: 1px solid black;
    }
}
</style>
<div class="sidebar">
    <div class="sidebar-item">
        <a class="nav-link" href="/administrative">Tela inicial </a>
    </div>
    <div class="sidebar-item">
        <a class="nav-link" href="/products">Produtos </a>
    </div>
    <?php if (!empty($_SESSION['auth']) && $_SESSION['auth']['occupation'] == 'manager') {?>
    <div class="sidebar-item">
        <a class="nav-link" href="/employees">Funcionários </a>
    </div>
    <?php }?>
</div>