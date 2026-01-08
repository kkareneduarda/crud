<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['usuarios'][] = [
        'id' => $_POST['id'],
        'nome' => $_POST['nome'],
        'sobrenome' => $_POST['sobrenome'],
        'idade' => $_POST['idade']
    ];
}
?>

<h1>Adicionar Usuário</h1>

<form method="POST">
    <label>ID:</label>
        <input name="id" type="number" required>
    <br><br>
    <label>Nome:</label>
        <input name="nome" type="text" required>
    <br><br>
    <label>Sobrenome:</label>
        <input name="sobrenome" type="text" required>
    <br><br>
    <label>Idade:</label>
        <input name="idade" type="number" required>
    <br><br>
    <button>Salvar</button>
</form>

<a href="index.php">Voltar</a>
