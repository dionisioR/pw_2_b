<?php
require_once('../../config/db.php');
require_once('../../model/Produto.php');

// verificar se o Id foi passado na url

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // conexão com BD
    $database = new Database();
    $db = $database->getConnection();

    // instância do objeto produto
    $produto = new Produto($db);
    $produto->pro_id = $id;

    // chamo o método para obter detalhes do produto
    $produto->readOne();
} else {
    echo "<div class='alert alert-warning'>Produto não encontrado</div>";
    exit();
}

?>

<?php include_once('../../utils/header.php') ?>
<?php include_once('../../utils/menu.php') ?>

<h1>Detalhes</h1>

<figure>
    <img src="<?php echo $produto->pro_url;?>" alt="<?php echo $produto->pro_nome;?>" class="img-thumbnail">
    <figcaption><?php echo $produto->pro_nome;?></figcaption>
</figure>
<p><strong>Nome: </strong><?php echo $produto->pro_nome;?></p>
<p><strong>Descrição: </strong> <?php echo $produto->pro_descricao;?></p>
<p><strong>Preço:</strong> <?php echo $produto->pro_preco;?></p>

<!-- <a href="handlerSelectAll.php" class="btn btn-primary"> VOLTAR </a> -->

<?php include_once('../../utils/footer.php') ?>