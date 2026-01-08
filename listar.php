<?php
session_start();

?>

<h1>Listar Usuários</h1>

<?php 

if (empty($_SESSION['usuarios'])): ?>
    <p>Nenhum registro de usuário</p>
<?php endif; ?>

<?php foreach ($_SESSION['usuarios'] as $id => $usuario): ?>
    <p>
        <?php 
            echo "ID: " . $id;
            echo " ";
            echo "<br> Nome Completo: " . $usuario['nome'] . " " . $usuario['sobrenome'];
            echo " ";
            echo "<br> Idade: " . $usuario['idade'] . " anos";
        ?>
    </p>
<?php endforeach; ?>

<a href="index.php">Voltar</a>

