<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiCursos</title>
</head>
<body>
    <?php require_once 'includes/lojas.php' ?>
    <?php 
    $id = $_GET['i'] ?? 1;
    $busca = $l->query("select * from cursos where id = '$id'");
    if (!$busca){
        echo 'error';
    } else {
        if ($busca->num_rows == 0){
            echo 'error';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='500'> <h3>$reg->nome</h3> <h4>R$$reg->preço</h4> carga: $reg->carga <br> total de aulas: $reg->totalaulas <hr> <p>$reg->descrição</p> <button style='background-color: blue;'><a href='comprar-curso.php?i2=$reg->id' style='color: white; text-decoration: none;'>Comprar</a></button>";
            }
        }
    }
    ?>
</body>
</html>