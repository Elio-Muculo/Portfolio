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
    <h2 class="page-section__title">Atualizar Dados Pessoais</h2>
    <form  action="./../config/admin_crud/add_dados.php" class="mt-3" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-6">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="campo" id="nome" value="<?= $dados_pessoais[0]['nome'] ?>">
            </div>
            <div class="form-group col-6 mt-3">
                <label for="dataNasc">data nascimento</label>
                <input type="date" name="dataNasc" class="campo" id="dataNasc" value="<?=$dados_pessoais[0]['data_nascimento']?>">
            </div>
        </div>
        <div class="form-group mt-3 col-6">
            <label for="inputAddress">Nacionalidade</label>
            <input type="text" name="nacionalidade" class="campo"  value="<?= $dados_pessoais[0]['nacionalidade'] ?>">
        </div>
        <div class="form-row row mt-3">
            <div class="form-group col-6">
                <label >bairro</label>
                <input type="text" name="bairro" class="campo"  value="<?= $dados_pessoais[0]['bairro'] ?>">
            </div>
            <div class="form-group col-6 mt-3">
                <label >N. BI</label>
                <input type="text" name="nr_bi" class="campo"  value="<?= $dados_pessoais[0]['nr_BI'] ?>">
            </div>
        </div>
        <div class="form-group mt-3 col-6">
            <label for="">Foto de perfil</label>
            <input type="file" name="foto"  class="campo"  value="<?= $dados_pessoais[0]['foto_perfil'] ?>">
        </div>
        <button type="submit" class="btn mt-3 form-group">Atualizar</button>
    </form>
</div>

<script>

</script>

</body>
</html>