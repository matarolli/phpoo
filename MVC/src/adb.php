<?php
// Configuração do banco de dados
$host = 'mvc-db';
$username = 'mvcuser';
$password = 'mvcpassword'; // Modifique se necessário
$database = 'mvcdb';

// Conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
