<style>
.sidebar {
    width: 20%;
    height: 100%;
    color: white;
    background-color: #8e8e8e;
    text-decoration: none;
}

@media (max-width: 600px)
{
  .sidebar
   {
    width: 30%;
   }
}

.sidebar a {
    color:#343a40;
}

.sidebar-item {
    border-bottom: 1px solid;
}

.sidebar-item a:hover {
    background-color:#e3e3e3;
}
</style>
<div class="sidebar">
    <div class="sidebar-item">
        <a class="nav-link" href="/administrative">Tela inicial </a>
    </div>
    <div class="sidebar-item">
        <a class="nav-link" href="/products">Produtos </a>
    </div>
    <div class="sidebar-item">
        <?php if ($_SESSION['auth']['occupation'] == 'manager') {?>
        <a class="nav-link" href="/employees">Profissionais </a>
        <?php }?>
    </div>
</div>