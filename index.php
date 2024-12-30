<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiCursos</title>
</head>
<body>
    <button><a href="form-cursos.php" style="text-decoration: none;">adcionar cursos</a></button>
    <?php require_once 'includes/lojas.php' ?>
    <h1>GuiCursos</h1>
    <hr>
    <table>
        <?php 
        $busca = $l->query('select * from cursos');
        if (!$busca){
            echo 'error';
        } else {
            if ($busca->num_rows == 0){
                echo 'error';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='pagina-curso.php?i=$reg->id'><img src='$reg->imagem' width='230'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>