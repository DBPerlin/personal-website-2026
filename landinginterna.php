<?php
session_start();

if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Área interna</title>
</head>
<body>

<h1>Bem-vinda à área interna 🔒</h1>

<a href="logout.php">Sair</a>

</body>
</html>