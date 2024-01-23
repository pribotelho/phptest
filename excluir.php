<?php
if (isset($_GET['id'])) {
    include 'conexao.php';

    $id = $_GET['id'];

    // Exclui a tarefa do banco de dados
    $stmt = $pdo->prepare("DELETE FROM tarefas WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redireciona de volta para a página principal
    header('Location: index.php');
}
?>
