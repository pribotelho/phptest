<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Lista de Tarefas</h1>

    <form action="adicionar.php" method="post">
        <label for="tarefa">Nova Tarefa:</label>
        <input type="text" id="tarefa" name="tarefa" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        <?php include 'exibir.php'; ?>
    </ul>

</body>
</html>
