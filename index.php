<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manuella Perlin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<script>
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar-custom");

    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});
</script>

<body>

<!-- NAVBAR -->
<?php include 'assets/inc/header.php' ?>

<!-- HERO -->
<section class="hero d-flex align-items-center">
    <div class="container text-center">
        <h1>Manuella Perlin</h1>
        <p class="subtitle">Desenvolvedora de Software</p>
        <a href="#sobre" class="btn btn-hero mt-3">Get to know me</a>
    </div>
</section>

<!-- ACADÊMICO -->
<section id="sobre" class="section">
    <div class="container">

        <div class="row align-items-center">

            <!-- TEXTO -->
            <div class="col-md-6">
                <h2>Acadêmico</h2>
                <p>
                    Oi! Eu sou a <strong>Manu</strong>, estou no 7° semestre de <strong>engenharia de software</strong> na UnB.
                    Caso você não esteja familiarizado com a distribuição de cursos da UnB, vale lembrar:
                    o curso de Engenharia de Software da UnB é lecionado no campus do Gama, a <strong>FCTE</strong>.
                </p>
                <h3 class="mt-4">Mais sobre minha graduação</h3>
                <p>
                    Nesse semestre, resolvi me aventurar na conhecida <strong>dupla graduação</strong>. Prometo dar uma
                    justificativa melhor do que <strong>"eu gosto e queria"</strong> na sessão da <strong>FGR</strong>, mas, por enquanto...
                    Eu ainda sou a Manu, e estou no meu 1° semestre de engenharia eletrônica na UnB!
                </p>
            </div>

            <!-- IMAGEM -->
            <div class="col-md-6 text-center">
                <img src="assets/img/unb.jpg" class="img-fluid sobre-img">
            </div>

        </div>

    </div>
</section>

<!-- FGR -->
<section id="sobre" class="section bg-light">
    <div class="container">

        <div class="row align-items-center">

            <!-- IMAGEM -->
            <div class="col-md-6 text-center">
                <img src="assets/img/fgr.jpg" class="img-fluid sobre-img">
            </div>

            <!-- TEXTO -->
            <div class="col-md-6">
                <h2>O que é a FGR</h2>
                <p>
                    FGR ou <strong>Fórmula Gama Racing</strong> é a equipe de competição de <strong>Fórmula SAE</strong> que eu participo!
                    Competimos na modalidade EV, o que significa que nossos modelos são 100% elétricos. Atualmente, estou na área técnica de
                    <strong>eletrônica</strong> e no departamento de <strong>marketing</strong>!
                </p>
                <h3 class="mt-4">E o que o curso tem a ver?</h3>
                <p>
                    Eu, particularmente, acho que estar em uma <strong>equipe de competição da Fórmula SAE</strong> é um <strong>ÓTIMO</strong> motivo pra
                    querer se inserir no mercado de engenharia. <strong>(Eng. de Software é computação ok?)</strong> E pra virar um engenheiro...
                    <strong>Curse engenharia!</strong>
                    Mas é o que eu disse, minha melhor desculpa é: eu <strong>gosto</strong> e <strong>quero</strong> fazer engenharia eletrônica :) .
                </p>
            </div>

        </div>

    </div>
</section>

<!-- GOSTOS PESSOAIS -->
<section id="sobre" class="section">
    <div class="container">

        <div class="row align-items-center">

            <!-- TEXTO -->
            <div class="col-md-6">
                <h2>Sobre mim</h2>
                <p>
                    Agora, um pouco <strong>sobre a Manu</strong>, mas sobre a Manu <strong>fora</strong> do curso superior.
                    Assim como grande parte dos profissionais de TI, eu sou a clássica <strong>"nerd"</strong>. Assisto <strong>desenhos japoneses</strong>,
                    sou fascinada por filmes de <strong>ficcção</strong>, fã ávida de <strong>terror e suspense</strong>, todo dia uma partidinha de algum
                    <strong>videogame</strong>, totalmente metaleira e, pra fechar o combo, faço <strong>cosplay</strong>.
                </p>
                <h3 class="mt-4">E por que TI?</h3>
                <p>
                    Na verdade essa é fácil. Sempre fui a criança <strong>tech</strong>. É fácil se encantar quando você nasceu em 2005 e viveu a <strong>invasão
                    tecnológica</strong> na casa das pessoas. Na minha memória mais antiga a Manuzinha ta sentada na sala procurando o episódio pirata
                    de Naruto num site <strong>nada</strong> seguro. E logo depois entrou no skype pra jogar Minecraft com os amigos.
                    <br>
                    Não sei dizer quando realmente me tornei uma <strong>entusiasta</strong> da tecnologia. Mas sei que em algum momento tive a <strong>curiosidade</strong>
                    de abrir o meu pc, ainda com medo, resolvi limpar as ventoinhas. Quis <strong>estudar as peças</strong>, melhorar o desempenho, resolver
                    os bugs dos pcs dos meus amigos...
                    <br>
                    Em algum momento quis saber <strong>como funcionava</strong> uma televisão.
                    Em outro, pedi pro meu pai me ensinar a usar um multímetro. Ganhei meu primeiro kit de <strong>ferramentas</strong>.
                    Um dia o computador travou, joguei o erro no google e entrei no primeiro link, <strong>"Stack Overflow"</strong>.
                    Enfim, acho que foi uma caminhada, sabe? Sempre tive aptidão, <strong>em algum momento abracei isso</strong>.
                </p>
            </div>

             <!-- CARROSSEL -->
            <div class="col-md-6">

                <div id="carouselProjeto" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="assets/img/eufgr.jpeg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/img/1.jpeg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/img/2.jpeg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/img/3.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/7.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/4.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/5.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/6.jpeg" class="d-block w-100">
                        </div>
                    </div>

                    <!-- CONTROLES -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjeto" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProjeto" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
        </div>

    </div>
</section>


<!-- PROJETOS -->
<section id="projetos" class="section bg-light">
    <div class="container">
        <h2>Projetos</h2>

        <div class="row">

            <div class="col-md-4">
                <div class="card project-card">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 1</h5>
                        <p class="card-text">Sistema web para gerenciamento.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card project-card">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 2</h5>
                        <p class="card-text">Automação de processos.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card project-card">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 3</h5>
                        <p class="card-text">Aplicação com integração API.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato" class="section">
    <div class="container">
        <h2>Contato</h2>

        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Seu nome">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Seu email">
            </div>

            <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Mensagem"></textarea>
            </div>

            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>

<div class="text-center mt-4">
    <a href="projetos.php" class="btn btn-next">
        Projetos →
    </a>
</div>

<?php include 'assets/inc/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>