<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiCursos</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $n = $_GET['nome'];
    $d = $_GET['descricao'];
    $c = $_GET['carga'];
    $t = $_GET['totaulas'];
    $pr = $_GET['preco'];
    $pl = $_GET['playlist'];
    $i = $_GET['imagem'];
    if ($l->query("INSERT INTO `cursos` (`id`, `nome`, `descrição`, `carga`, `totalaulas`, `preço`, `playlist`, `imagem`) VALUES (DEFAULT, '$n', '$d', '$c', '$t', '$pr', '$pl', '$i')") == true){
        echo "curso adcionado com sucesso";
    } else {
        echo 'error';
    }
    ?>
</body>
</html>