<?php 
include_once __DIR__ . "/header.php";
require_once __DIR__ . "/../config/DB.php";




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
    <h2 class="page-section__title">Adicionar Artigos</h2>
    <form  action="./../config/admin_crud/add_artigo.php" class="mt-3" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-6">
                <label for="titulo">titulo</label>
                <input type="text" name="titulo" class="campo" id="titulo">
            </div>
            <div class="form-group col-6 mt-3">
                <label for="tipo">texto</label>
                <input type="text" name="texto" class="campo" id="tipo">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="data">data publicação</label>
                <input type="date" name="data_pub" class="campo" id="titulo">
            </div>
            <div class="form-group col-6 mt-3">
                <label for="tipo">texto</label>
                <textarea  name="texto" class="campo" id="tipo" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group col-6 mt-3">
                <label for="tipo">Autor</label>
                <input type="text" name="autor" class="campo" id="tipo">
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