<?php 
include_once __DIR__ . "/header.php";

?>

    <?php if (isset($_SESSION['msg'])) : ?>
                <div class="alert alert-info d-flex align-items-center mb-3" role="alert">
                    <div> 
                        <?= $_SESSION["msg"]; ?>
                        <?php unset($_SESSION['msg']); ?>
                    </div> 
                </div>
            <?php  endif; ?>

            
<div class="content">
    <h2 class="page-section__title">Adicionar Habilidades</h2>
    <form  action="./../config/admin_crud/add_habilidades.php" class="mt-3" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-6">
                <label for="Habilidade">Habilidade</label>
                <input type="text" name="Habilidade" class="campo" id="Habilidade">
            </div>
            <div class="form-group col-6 mt-3">
                <label for="tipo">Nivel</label>
                <input type="text" name="nivel" class="campo" id="tipo">
            </div>
        </div>
        <div class="form-group mt-3 col-6">
            <label for="inputAddress">Imagem</label>
            <input type="file" name="foto" class="campo">
        </div>
        
        <button type="submit" class="btn mt-3 form-group">Adicionar</button>
    </form>
</div>

<script>

</script>

</body>
</html>