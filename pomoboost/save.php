<?php

session_start();

include 'conn.php';

$stmt = $pdo->prepare('INSERT INTO tempos (inicial, final, user_id) VALUES (?,?,?)');
$stmt->execute([$_POST['inicial'], $_POST['final'], $_SESSION['user_id']]);

header('location: index.php');


?>