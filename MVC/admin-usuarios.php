<?php include('src/db.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Usuários</title>
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <header>
        <h1>Administração de Usuários</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="usuarios.php">Usuários</a>
            <a href="admin-usuarios.php" class="active">Administração</a>
        </nav>
    </header>

    <main class="admin-container">
        <?php
        // Deletar usuário
        if (isset($_GET['delete'])) {
            $id = intval($_GET['delete']);
            $sql = "DELETE FROM usuarios WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                echo "<p class='success-message'>Usuário deletado com sucesso!</p>";
            } else {
                echo "<p class='error-message'>Erro ao deletar usuário: " . $stmt->error . "</p>";
            }
        }

        // Atualizar usuário
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_id'])) {
            $id = intval($_POST['update_id']);
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            $sql = "UPDATE usuarios SET nome = ?, sobrenome = ?, telefone = ?, email = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssi", $nome, $sobrenome, $telefone, $email, $id);
            if ($stmt->execute()) {
                echo "<p class='success-message'>Usuário atualizado com sucesso!</p>";
            } else {
                echo "<p class='error-message'>Erro ao atualizar usuário: " . $stmt->error . "</p>";
            }
        }

        // Obter todos os usuários
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        ?>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <form method="POST" action="">
                        <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
                        <td><input type="text" name="nome" value="<?php echo $row['nome']; ?>" required></td>
                        <td><input type="text" name="sobrenome" value="<?php echo $row['sobrenome']; ?>" required></td>
                        <td><input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" required></td>
                        <td><input type="email" name="email" value="<?php echo $row['email']; ?>" required></td>
                        <td>
                            <button type="submit" class="btn-submit">Salvar</button>
                            <a href="?delete=<?php echo $row['id']; ?>" class="btn-delete"
                                onclick="return confirm('Tem certeza que deseja deletar este usuário?');">Deletar</a>
                        </td>
                    </form>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                    <td colspan="5">Nenhum usuário encontrado.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Meu Site Simplificado</p>
    </footer>
</body>

</html>