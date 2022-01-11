<?php

//include 'conn.php'
//consulta ---- mandando inserir nome e senha com os valores projeto e projeto123
//$pdo->query("insert into usuario (username, password) values ('projeto', 'projeto123')");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Cadastre-se</h1>
    <form action="cadastrar.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit">
    </form>

    <h1>Login</h1>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit">
    </form>
</body>
</html>