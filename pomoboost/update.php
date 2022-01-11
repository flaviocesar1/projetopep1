s<?php

session_start();

include 'conn.php';

$stmt = $pdo->prepare('update tempos set inicial =?, final =? where id =?');
$stmt->execute([$_POST['inicial'], $_POST['final'], $_POST['id']]);

header('location: home.php');


?>