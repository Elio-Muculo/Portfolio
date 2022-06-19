<?php 
include_once __DIR__ . "/header.php";
require_once __DIR__ . "/../config/DB.php";

$dados_pessoais = read("SELECT * FROM contacto WHERE id = :id", ['id' => 1]);



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
    <h2 class="page-section__title">Atualizar Dados Contacto</h2>
    <form  action="./../config/admin_crud/add_contacto.php" class="mt-3" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-6">
                <label for="titulo">Telefone</label>
                <input type="tel" name="cel1" class="campo" id="titulo"  value="<?= $dados_pessoais[0]['telefone'] ?>">
            </div>
            <div class="form-group col-6 mt-3">
                <label for="tipo">Telefone Alternatico</label>
                <input type="text" name="cel2" class="campo" id="tipo"  value="<?= $dados_pessoais[0]['telefone_alternativo'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="data">Email</label>
                <input type="text" name="email" class="campo" id="titulo"  value="<?= $dados_pessoais[0]['email'] ?>">
            </div>
            <div class="form-group col-6 mt-3">
                <label for="tipo">Endereço</label>
                <input type="text" name="end" class="campo" id="tipo"  value="<?= $dados_pessoais[0]['endereco'] ?>" >
            </div>
           
        </div>
        <button type="submit" class="btn mt-3 form-group">Atualizar</button>
    </form>
</div>

<script>

</script>

</body>
</html>