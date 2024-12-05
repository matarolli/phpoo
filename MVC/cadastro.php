<?php include('src/db.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nome, sobrenome, telefone, email) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $sobrenome, $telefone, $email);

    if ($stmt->execute()) {
        echo "<p>Usuário cadastrado com sucesso!</p>";
    } else {
        echo "<p>Erro ao cadastrar usuário: " . $stmt->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Meu Site</title>
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <header>
        <h1>Cadastro de Usuários</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="usuarios.php">Usuários</a>
            <a href="admin-usuarios.php">Administração</a>
        </nav>
    </header>

    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" required name="email">

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>