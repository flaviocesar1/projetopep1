<?php

 include 'conn.php'; 

 $stmt = $pdo->prepare("
	SELECT * FROM tempos
	WHERE id =  ? "); 
 $stmt->execute([$_GET['id']]);
 $tempo = $stmt -> fetch();


  ?>

<form action="update.php" method="POST">

	<h2> </h2>
	<input type="text" name="inicial" value="<?=$tempo['inicial']?>" placeholder="Tempo Inicial">
	<input type="text" name="final" value="<?=$tempo['final']?>" placeholder="Tempo Final">
	<input type="Submit" Value="Salvar">
	<input type="hidden" name="id" value="<?=$tempo['id']?>">

</form>