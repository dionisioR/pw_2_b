<?php

require_once('../../config/db.php');
require_once('../../model/Produto.php');

// conexão com BD
$database = new Database();
$db = $database->getConnection();

// instância do objeto produto
$produto = new Produto($db);

$stmt = $produto->readAll();
$num = $stmt->rowCount();

?>