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
    <link rel="stylesheet" href="assets/css/login.css">

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
<section class="hero d-flex align-items-center justify-content-center">

    <div class="login-wrapper text-center">

        <span class="login-note">Ops... Só pessoal autorizado ;)</span>

        <div class="login-box">

            <h2 class="text-center mb-4">DBPSystem 🔒</h2>

            <form method="POST" action="login.php">

                <div class="mb-3">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário" required>
                </div>

                <div class="mb-3">
                    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                </div>

                <button class="btn btn-login w-100">
                    Entrar
                </button>

            </form>

        </div>

    </div>

</section>

<!-- FOOTER -->
<?php include 'assets/inc/footer.php' ?>