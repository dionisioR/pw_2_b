<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- SEU CSS  AQUI -->


    <?php
    $base_url = dirname($_SERVER["PHP_SELF"]);
    $base_url = rtrim($base_url, "/views/produto");
    $base_url = rtrim($base_url, "/views/cliente");
    ?>
    
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
</head>

<body>