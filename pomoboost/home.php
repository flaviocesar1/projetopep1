<?php

session_start();
if (!isset($_SESSION['user_id'])) {

	header('location: index.php');
	exit();

// se o usuario não tiver autenticado ele volta pro index
}
//lista de cachorros
include 'conn.php';
$stmt = $pdo->prepare ('SELECT * FROM tempos WHERE user_id = ?');
$stmt->execute([$_SESSION['user_id']]);

$tempos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
 <h1>SEJA BEM VINDO! <?= $_SESSION['username']?>  </h1>
 <a href="logout.php">Sair</a>
 <a href="delete.php?id=<?=$_SESSION['user_id']?>"> DELETAR CONTA</a>



,

 <table>
 	<?php foreach ($tempos as $tempo): ?> 
 	<tr>
 		<td><?= $tempo['inicial'] ?></td>
 		<td><?= $tempo['final'] ?></td>
 		<td><a href="delete2.php?id=<?= $tempo['id']?>"> APAGAR TEMPO</a></td>
 		<td><a href="edit.php?id=<?= $tempo['id']?>"> EDITAR TEMPO</a></td>

 	</tr>
 	<?php endforeach?>
</table>

<form action="save.php" method="POST">
	<h2> </h2>
	<input type="text" name="inicial" placeholder="Tempo Inicial">
	<input type="text" name="final" placeholder="Tempo Final">
	<input type="Submit" Value="Salvar">
</form>




</body>
</html>
