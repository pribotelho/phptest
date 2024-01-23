<?php
require __DIR__ . '/vendor/autoload.php'; // Carrega o autoload do Composer

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$database_file = 'tarefas.db';

// Use as variáveis do .env para conectar ao banco de dados
$pdo = new PDO("mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Restante do código permanece inalterado
?>

