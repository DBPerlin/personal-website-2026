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
    <link rel="stylesheet" href="assets/css/contato.css">

</head>

<body>
<?php include 'assets/inc/headernormal.php' ?>

<section class="contato-section">

    <div class="container">

        <div class="text-center mb-5">
            <h1 class="title-line">Vamos conversar?</h1>
            <p class="subtitle">
                Tem uma ideia, projeto ou só quer trocar uma ideia? 👇
            </p>
        </div>

        <div class="row g-4">

            <!-- LADO ESQUERDO -->
            <div class="col-md-5">

                <div class="contact-box">
                    <h4>Fale comigo</h4>

                    <a href="mailto:perlinmanuella@gmail.com" class="contact-item">
                        📩 Email
                    </a>

                    <a href="https://www.linkedin.com/in/manuella-perlin/" class="contact-item">
                        💼 LinkedIn
                    </a>

                    <a href="https://github.com/dbperlin" class="contact-item">
                        💻 GitHub
                    </a>
                </div>

            </div>

            <!-- FORM -->
            <div class="col-md-7">

                <form class="contact-form">

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Seu nome">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Seu email">
                    </div>

                    <div class="mb-3">
                        <select class="form-control">
                            <option>Qual o objetivo?</option>
                            <option>Criação de site</option>
                            <option>Sistema personalizado</option>
                            <option>Outros</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Me conta sua ideia..."></textarea>
                    </div>

                    <button class="btn btn-form">
                        Enviar mensagem →
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<?php include 'assets/inc/footer.php' ?>    