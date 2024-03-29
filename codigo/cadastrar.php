<?php
include("conexao.php");


if (isset($_POST['bt_nome'])) {
    $nome = $_POST['bt_nome'];
    $sinopse = $_POST['sinop'];
    $arquivo = $_FILES['bt_arquivo'];

    $nome_foto = $arquivo['name'];
    $pasta = "recebidos/" . $nome_foto;

    $mover = move_uploaded_file($arquivo["tmp_name"],  $pasta);

    $mysqli->query("INSERT INTO favai_receber (nome, sinop, arquivo) VALUES ('$nome', '$sinopse', '$nome_foto')") or die($mysqli->error);

    var_dump($mover);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo/estilo2.css">

    <title>Cadastrar</title>
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)),
                url("../img/3sapo.jpg");
            background-size: cover;
            background-color: var(--cor0);
        }

        p {
            color: rgba(255, 255, 255, 0.719);
        }

        label {
            color: rgba(255, 255, 255, 0.685);
        }

        .form-text {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <h1>Cadastrar:</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="bt_nome" class="form-label">Nome:</label>
                <input class="form-control" type="text" name="bt_nome" required>


                <div class="form-text">*inserir nome completo</div>
                <br>
            </div>

            <div class="mb-3">
                <input class="form-control" type="file" name="bt_arquivo" required>
                <label for="bt_arquivo" class="form-label">Selecione uma foto do eletrônico:</label>


                <div class="form-text">
                    <p>*inserir apenas arquivos .jpg</p>
                </div>
            </div>
            <div class="mb-3">
                <label for="bt_nome" class="form-label">Informações sobre o produto:</label><br>
                <textarea name="sinop" id="" cols="137" rows="6" required></textarea>
                <div class="form-text">*inserir informações sobre o eletrônico</div>
                <br>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>

            <a href="index.php" class="btn btn-warning">Sair</a>
        </form>
    </div>

    <?php
    if (isset($_POST['bt_name'])) {
        $arquivo = $_FILES['bt_arquivo'];

        var_dump($arquivo);


        if (isset($_FILES['bt_arquivo'])) {
            $arquivo = $_FILES['bt_arquivo'];
            if ($arquivo['size'] > 15000000) {
                die("O arquivo é muito grande MAXIMO DE 15 MB");
            }
            if ($arquivo['error']) {
                die("Falha em exibir o arquivo");
            }
        }

        $nome = $_POST['bt_name'];
        $arquivo = $_FILES['bt_arquivo'];
        $pasta = "recebidos/";
        $nome_arquivo = $arquivo['name'];




        $nna = uniqid();

        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

        $caminho = $pasta . $nna . "." . $extensao;

        echo ($caminho);

        if ($extensao != ("jpg" or "png")) {
            echo "<br>";
            die("Tipo de arquivo invalido!");
        }

        $deucerto = move_uploaded_file($arquivo["tmp_name"], $caminho);


        if ($deucerto) {

            $mysqli->query("INSERT INTO receber (nome, arquivo_caminho) values ('$nome','$caminho')") or die($mysqli->error);
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>