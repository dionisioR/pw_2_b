<?php require_once('../../utils/header.php') ?>
<?php require_once('../../utils/menu.php') ?>

<?php require_once('./handlerSelectAll.php'); ?>

<h1>Todos os produtos cadastrados</h1>

<?php


    if($num > 0){

        echo "<table class='table table-hover'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>Descrição</th>";
        echo "<th>Preço</th>";
        echo "<th>URL</th>";
        echo "<th>Ações</th>";
        echo "</tr>";

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            echo "<tr>";
            echo "<td>{$pro_id}</td>";
            echo "<td>{$pro_nome}</td>";
            echo "<td>{$pro_descricao}}</td>";
            echo "<td>{$pro_preco}</td>";
            echo "<td><img src='{$pro_url}' alt='{$pro_nome}'></td>";
            echo "<td><a href=''>Detalhes</a> | <a href=''>Editar</a> | <a href=''>Deletar</a></td>";
            echo "</tr>";

        }
        echo "</table>";


    }else{
        echo "<p>Nenhum produto encontrado.</p>";
    }


?>

<?php require_once('../../utils/footer.php') ?>