<?php 
include_once __DIR__ . "/header.php";
require_once __DIR__ . "/../config/DB.php";

$dados_pessoais = read("SELECT * FROM dados_pessoais WHERE id = :id", ['id' => 1]);



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
    <h2 class="page-section__title">Adicionar Formação Academica</h2>
    <form  action="./../config/admin_crud/add_formacao.php" class="mt-3" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-6">
                <label for="instituicao">instituicao</label>
                <input type="text" name="instituicao" class="campo" id="instituicao">
            </div>
            <div class="form-group col-6 mt-3">
                <label for="tipo">Grau Academico</label>
                <input type="text" name="tipo" class="campo" id="tipo">
            </div>
        </div>
        <div class="form-group mt-3 col-6">
            <label for="inputAddress">Descrição</label>
            <textarea  name="desc" cols="15" rows="5" class="campo"></textarea>
        </div>
        <div class="form-row row mt-3">
            <div class="form-group col-6">
                <label >Inicio Formação</label>
                <input type="date" name="inicio" class="campo" >
            </div>
            <div class="form-group col-6 mt-3">
                <label >Fim formação</label>
                <input type="date" name="fim" class="campo" >
            </div>
        </div>
        <button type="submit" class="btn mt-3 form-group">Adicionar</button>
    </form>
</div>

<script>

</script>

</body>
</html>