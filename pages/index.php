<?php 
include_once __DIR__ . "/header.php";
include_once __DIR__ . "/../conf/DB.php";


$totalEncomendas = read("SELECT count(*) AS total FROM encomenda");
$totalclientes = read("SELECT count(*) AS total FROM cliente");
$totalBolos = read("SELECT count(*) AS total FROM bolo");
$encomenda = "SELECT e.id, c.nome AS cliente, b.nome, e.contacto_entrega, e.data_encomenda
                    FROM encomenda e INNER JOIN cliente c ON e.cliente = c.id
                    INNER JOIN bolo b ON b.id = e.bolo ORDER BY e.data_encomenda LIMIT 5";
$encomenda = read($encomenda);
$bolo =  "SELECT b.id, b.nome AS bolo, b.tamanho, b.preco, t.nome AS tipo  
        FROM bolo b INNER JOIN tipo_bolo t ON b.tipo = t.id ORDER BY id DESC LIMIT 5";
$bolosRecentes = read($bolo);


?>
<!-- Page Content  -->
    <div id="content" class="p-4 p-md-5" style="width: 100%;">
        <nav class="navbar navbar-expand-lg navbar-white bg-light rounded shadow-sm mb-4">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                    </ul>
                </div>
            </div>
        </nav>


        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
        </nav>
        
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        

        <div class="row mt-5">
            <div class="col-md-4">
                    <a href="add_fazer_encomenda.php" style="color:black;">
                    <div class="card">
                        <div class="row no-gutters flex align-items-center align-content-center">
                            <div class="col-md-4 ">
                                <i class="fa fa-shopping-cart" style="margin: 0 10px; font-size: 68px; height: 100%;"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-white bg-dark ">
                                    <p class="card-title">Total encomendas</p>
                                    <h2 class="card-text"> <?php  echo $totalEncomendas[0]['total']; ?> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                    <a href="add_cliente.php" style="color:black;">
                    <div class="card">
                        <div class="row no-gutters flex align-items-center align-content-center">
                            <div class="col-md-4 ">
                                <i class="fa fa-person" style="margin: 0 10px; font-size: 68px; height: 100%;"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-white bg-dark ">
                                    <p class="card-title">Total clientes</p>
                                    <h2 class="card-text"> <?php  echo $totalclientes[0]['total']; ?> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                    <a href="add_bolo.php" style="color:black;">
                    <div class="card">
                        <div class="row no-gutters flex align-items-center align-content-center">
                            <div class="col-md-4 ">
                                <i class="fa fa-cake" style="margin: 0 10px; font-size: 68px; height: 100%;"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-white bg-dark ">
                                    <p class="card-title">Total Bolos</p>
                                    <h2 class="card-text"> <?php  echo $totalBolos[0]['total']; ?> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
        </div>

        <div class="row mt-5 pt-5">
            <div class="col-6">
                <h4>Ultimas Encomendas</h4>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Bolo</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($encomenda as $e) : ?>
                    <tr>
                        <td><?= $e['id'] ?></td>
                        <td><?= $e['cliente'] ?></td>
                        <td><?= $e['nome'] ?></td>
                        <td><?= $e['contacto_entrega'] ?></td>
                        <td><?= $e['data_encomenda'] ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>

            </div>
            <div class="col-6">
                <h4>Novos bolos</h4>
                <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Tipo Bolo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bolosRecentes as $e) : ?>
                <tr>
                    <td><?= $e['id'] ?></td>
                    <td><?= $e['bolo'] ?></td>
                    <td><?= $e['tamanho'] ?></td>
                    <td><?= $e['preco'] ?></td>
                    <td><?= $e['tipo'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
                </table>

            </div>
        </div>
    
    </div>
</div>


</body>
</html>