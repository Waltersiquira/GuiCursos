<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiCursos</title>
</head>
<body style="text-align: center;">
    <?php require_once 'includes/lojas.php'?>
    <h1>Aprovado</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Approved_img.png" alt="">
    <p>Curso comprado com sucesso clique no link embaixo para ver o curso</p>
    <?php 
    $id2 = $_GET['i2'] ?? 1;
    $busca = $l->query("select * from cursos where id = '$id2'");
    if (!$busca){
        echo 'error';
    } else {
        if ($busca->num_rows == 0){
            echo 'error';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<a href='$reg->playlist' style='text-decoration: none;'>Playlist do curso de $reg->nome</a>";
            }
        }
    }
    ?>
</body>
</html>