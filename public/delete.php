<?php

$id = $_POST['id'] ?? null;
if(!$id){
    header('Location:index.php');
    exit;
}

require_once __DIR__.'/../db.php';

$imagePath = $_POST['imagePath'];
$consulta = $pdo->prepare('DELETE FROM products WHERE id = :id');
$consulta->bindValue(':id', $id);
$consulta->execute();

//Eliminar la imagen y la carpeta
if($imagePath){
    unlink(($imagePath));
    rmdir(dirname($imagePath));
}

header('Location:index.php');


