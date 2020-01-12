<?php require __DIR__ . '/../../layouts/header.php';?>
<div class="main">
    <?php require __DIR__ . '/../../components/sidebar.php';?>
    <div class="content">
        <?php if (isset($_SESSION['error']) && $_SESSION['error']['type'] == 'permission') {?>
            <div class="alert alert-warning">Permissão insuficiente!</div>
            <?php unset($_SESSION['error']);?>
        <?php }?>
    </div>
</div>
<?php require __DIR__ . '/../../layouts/footer.php';?>