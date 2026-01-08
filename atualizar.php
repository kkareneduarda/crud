<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['usuarios'][$_POST['id']] = [
        'nome' => $_POST['nome'],
        'sobrenome' => $_POST['sobrenome'],
        'idade' => $_POST['idade']
    ];
}
?>
?>

<h1>Atualizar Usuário</h1>

<form method="POST">
    <label>ID:</label>
        <input name="id" type="number" required>
    <br><br>
    <label>Novo nome:</label>
        <input name="nome" type="text" required>
    <br><br>
    <label>Novo sobrenome:</label>
        <input name="sobrenome" type="text" required>
    <br><br>
    <label>Nova idade:</label>
        <input name="idade" type="number" required>
    <br><br>
    <button>Salvar</button>
</form>

<a href="index.php">Voltar</a>
