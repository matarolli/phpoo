<?php include('src/db.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Meu Site</title>
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <header>
        <h1>Bem-vindo ao Meu Site</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="usuarios.php">Usuários</a>
            <a href="admin-usuarios.php">Administração</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Explore nossa Galeria</h2>
    </section>

    <section class="gallery">
        <h2>Galeria de Imagens</h2>
        <div class="gallery-container">
            <?php
            for ($i = 1; $i <= 6; $i++) {
                echo "<img src='https://via.placeholder.com/150' alt='Imagem $i'>";
            }
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Meu Site Simplificado</p>
    </footer>
</body>

</html>