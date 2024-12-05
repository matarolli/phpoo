<?php include('src/db.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários - Meu Site</title>
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <header>
        <h1>Usuários Cadastrados</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="usuarios.php">Usuários</a>
            <a href="admin-usuarios.php">Administração</a>
        </nav>
    </header>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['nome']}</td>
                        <td>{$row['sobrenome']}</td>
                        <td>{$row['telefone']}</td>
                        <td>{$row['email']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum usuário encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>