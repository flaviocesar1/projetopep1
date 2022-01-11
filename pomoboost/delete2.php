<?php

$id= $_GET['id'];

include 'conn.php';

$stmt = $pdo->prepare('DELETE FROM tempos WHERE id= ?');
$stmt->execute([$id]);

header('location: home.php');
?>