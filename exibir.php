<?php
include 'conexao.php';

// Seleciona todas as tarefas do banco de dados
$stmt = $pdo->query("SELECT * FROM tarefas");
$tarefas = $stmt->fetchAll();

// Exibe cada tarefa como um item de lista
foreach ($tarefas as $tarefa) {
    echo "<li>{$tarefa['descricao']} <a href='excluir.php?id={$tarefa['id']}'>Excluir</a></li>";
}
?>
