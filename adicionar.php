<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conexao.php';

    $descricao = $_POST['tarefa'];

    // Insere a nova tarefa no banco de dados
    $stmt = $pdo->prepare("INSERT INTO tarefas (descricao) VALUES (:descricao)");
    $stmt->bindParam(':descricao', $descricao);
    $stmt->execute();

    // Redireciona de volta para a página principal
    header('Location: index.php');
}
?>
