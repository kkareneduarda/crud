<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    unset($_SESSION['usuarios'][$_POST['id']]);
}
?>

<h1>Deletar Usuário</h1>
<form method="POST">
    <label>ID do usário que deseja deletar:</label>
        <input name="id" type="number" required>
    <br><br>
    <button>Deletar</button>
</form>

<a href="index.php">Voltar</a>
