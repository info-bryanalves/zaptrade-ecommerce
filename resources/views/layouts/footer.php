<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="/assets/js/index.js?time=<?php time()?>">
</script>

<?php if (isset($_SESSION['error'])) {?>
    <?php if (in_array($_SESSION['error']['type'], getLoginTypeErrors())) {?>
            <script>loginErrorMessage('<?=$_SESSION['error']['type']?>')</script>
<?php } else { ?>
<script>pageMessage('<?= $_SESSION['error']['type'] ?>')</script>
<?php }?>
<?php unset($_SESSION['error']); ?>
<?php }?>

<?php if (isset($_SESSION['info'])) {?>

<script>pageMessage('<?= $_SESSION['info']['type'] ?>')</script>

<?php unset($_SESSION['info']); ?>
<?php }?>



</body>

</html>