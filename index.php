<?php 
session_start();

require_once __DIR__ . "/config/DB.php";

$dados_pessoais = read("SELECT * FROM dados_pessoais WHERE id = :id", ['id' => 1]);
$formacao = read("SELECT * FROM formacao");
$experiencia = read("SELECT * FROM exp_prof");
$habilidades = read("SELECT * FROM habilidades");
$contactos = read("SELECT * FROM contacto");
$artigos = read("SELECT * FROM artigos");
$ano_nascimento = explode("-", $dados_pessoais[0]['data_nascimento']);


?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Elio Muculo</title>
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="content-wrapper">
    <header class="header header--bg">
        <div class="container">
            <nav class="navbar navbar-row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">E L L I O T</a>
                </div>
                <div class="" id="myNavbar">
                    <ul class="nav navbar-nav navbar-row">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#about">SOBRE</a></li>
                        <li><a href="#habilidades">HABILIDADES</a></li> 
                        <li><a href="#formacao">FORMAÇÃO</a></li>
                        <li><a href="#rodape">CONTACTOS</a></li> 
                    </ul>
                </div>
            </nav>
            <div class="header__content text-center">
                <h3 class="header__content__title">SOU ÉLIO PAULO MUCULO</h3>
                <ul class="header__content__sub-title">
                    <li>SOFTWARE ENGINEER<span class="padding">&#45;</span>FLUTTER DEVELOPER<span class="padding">&#45;</span></li>
                    <li>BACKEND DEVELOPER<span class="padding"></span></li>
                </ul>
                <a class="header__button" href="https://wa.me/258842644623">VAMOS CONECTAR</a>
            </div>
        </div>
    </header>

    <section class="about" id="about">
        <div class="container about__container--narrow">
            <div class="page-section">
                <h2 class="page-section__title">QUEM SOU EU</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">
                    "Move Fast and break things. unless you are breaking stuff, you are not moving fast enough" - Mark Zuckerberg
                </p>
                
                <div class="row gutters-80">
                    <div class="col-md-4">
                        <div>
                            <img src="assets/images/<?= $dados_pessoais[0]['foto_perfil'];?>" class="about__image" width="368" height="497" alt="Elio Paulo Muculo">
                        </div>
                    </div>
                    <div class="col-md-8 about__content">
                        <p class="about__description"><?= $dados_pessoais[0]['descricao'];?></p>
                        <div class="row row--margin-top">
                            <div class="col-md-4">
                                <p class="about__bio"><strong>NOME :</strong> <?= $dados_pessoais[0]['nome'];?></p>
                                <p class="about__bio"><strong>IDADE :</strong> <?= date('Y') - $ano_nascimento[0];?> Anos</p>
                            </div>
                            <div class="col-md-4">
                                <p class="about__bio"><strong>Nº. BI :</strong> <?= $dados_pessoais[0]['nr_BI'];?></p>
                                <p class="about__bio"><strong>NACIONALIDADE :</strong> <?= $dados_pessoais[0]['nacionalidade'];?></p>
                            </div>
                        </div>
                        <div class="row row--margin-top">
                            <div class="col-md-4">
                                <a class="button button--colorful button--margin" href="./pages/CVPdf.php">BAIXAR CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="resume" class="container">
        <div class="experience-section" id="formacao">
            <h2 class="page-section__title">Formação Académica</h2>
            <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
            <p class="page-section__paragraph">
                    "Every day we change the world. But to change the world in a way that means anything that takes more time than most people have." - Elliot Aldersson
            </p>
 
            <div class="col-twelve resume-timeline">
                <div class="timeline-wrap">
                    <?php foreach ($formacao as $f) :  ?>
                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="timeline-header">
                            <h3><?= $f['tipo'];?></h3>
                            <p><?= getMonth($f['inicio']); echo getYear($f['inicio']);?> - <?= ($f['fim_formacao'] == '0000-00-00') ? 'Presente' : getMonth($f['fim_formacao']); echo !($f['fim_formacao'] == '0000-00-00') ? getYear($f['fim_formacao']) : ''; ?></p>
                        </div>
                        <div class="timeline-content">
                            <h4><?= $f['instituicao_ensino'];?></h4>
                            <p><?= $f['descricao'];?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div> 
            </div> 
        </div> 
        <div class="experience-section">
            <h2 class="page-section__title" id="experiencia">Experiência Professional</h2>
            <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
            <p class="page-section__paragraph">
                    "Be the change that you wish to see in the world" - Mahatma Gandhi 
            </p>
             
            <div class="col-twelve resume-timeline">
                <div class="timeline-wrap">
                    <div class="timeline-block">
                    <?php foreach ($experiencia as $f) :  ?>
                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="timeline-header">
                            <h3><?= $f['organizacao'];?></h3>
                            <p><?= getMonth($f['inicio']); echo getYear($f['inicio']);?> - <?= ($f['fim'] == '0000-00-00') ? 'Presente' : getMonth($f['fim']); echo !($f['fim'] == '0000-00-00') ? getYear($f['fim']) : ''; ?></p>
                        </div>
                        <div class="timeline-content">
                            <h4><?= $f['cargo'];?></h4>
                            <p><?= $f['descricao'];?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div> 		
            </div> 
        </div> 
	</section>

    <section class="skill skill--bg" id="habilidades">
        <div class="container skill__container--narrow">
            <div class="page-section">
                <h2 class="page-section__title page-section__title--white">Habilidades</h2>
                <img class="page-section__title-style" src="assets/images/title-style-white.png" alt="">

                <div class="row gutters-60">
                    <?php foreach($habilidades as $h) : ?>
                    <div class="col-md-4" style="height: 190px;">
                        <div class="thumbnail text-center">
                            <img src="assets/images/<?= $h['imagem']?>" width="74px" height="74px" alt="logo da habilidade">
                            <h4 class="skill__single-part__title"><?= $h['habilidade']?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:<?= $h['nivel']?>%; background-color: #FFAC1B;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?> 
                </div>
            </div>
        </div>
    </section>


    <section class="blog" id="artigos">
        <div class="container">
            <div class="blog-section">
                <h2 class="page-section__title">Meus Artigos</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">

                <div class="row gutters-40 mt-3">
                <?php foreach($artigos as $h) : ?>
                    <div class="col-md-4 mt-3" style="height: 450px;">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="assets/images/<?= $h['imagem']?>" alt="">
                            <p class="blog__single__date"><?= dateArticle($h['data_publicacao']);?></p>
                            <i class="material-icons">comment</i> 7
                            <a href="#"><h4 class="blog__single__title"><?= $h['titulo']?></h4></a>
                            <p class="blog__single__paragraph"><?= $h['texto']?> <a href="#"><span class="blog__single__paragraph--read-more">READ MORE...</span></a></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer footer--bg" id="rodape">
        <div class="container text-center">
            <h1 class="footer__title">Eng.º MUCULO.</h1>
            <?php foreach ($contactos as $c) : ?>
            <ul class="footer__contact-information text-center">
                <li><a href="tel:5555555555"><i class="material-icons">phone</i> Telefone (+258) <?= $c['telefone']?></a></li>
                <li><a href="mailto:sshariar458@gmail.com"><i class="material-icons">email</i> <?= $c['email']?></a></li>
                <li><a href="#"><i class="material-icons">location_on</i> <?= $c['endereco']?></a></li>
            </ul>
            <?php endforeach; ?>
        </div>
        <hr style="border: 0;border-top: 1px solid #525B60;display:block;margin-top: 40px;">
        <div class="container text-center">
            <p class="footer__paragraph">Copyright &copy; <?= date("Y");?> Elio Muculo , Todos direitos reservados.</p>
        </div>
    </footer>
</div>
</body>
</html>  