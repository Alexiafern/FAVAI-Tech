<?php
 /*include("conexao.php");
 include("menu.php");
    if(isset($_POST['bt_login'])){
        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];
            
        $senha_nova = password_hash(($senha), PASSWORD_DEFAULT);
        $mysqli ->query("INSERT INTO tabela_receber (nome,arquivo_caminho)values('$login','$senha_nova')") or die($mysqli->error);

        }*/
?>

<!DOCTYPE html>
<html lang="pt-pr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="favai.css">
    <title>Tela de cadastro</title>
    </head>
    <body>

        <div class="container">         
        </div>
       
            <div class="container col-11 col-md9" id="form-container">
                <div class="row align-items-center gx-5">
                    <div class="col-md-6 order-md-2">
                        <h1>Tela de Cadastro</h1>
                        <form method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder ="Digite seu Login" name="bt_login">
                                <label class="form-label" for="bt_login">Login:</label>              
                            </div>
                            <div class="form-floating mb-3">
                                 <input class="form-control" type="text" placeholder ="Digite a sua senha" name="bt_senha">
                                 <label class="form-label" for="bt_senha">Senha:</label>                         
                            </div>
                       
                        <br>
                        <input class="btn btn-primary" type="submit" value="cadastrar">
                        <input class="btn btn-danger" type="reset" value="Cancelar">
                       
                        </form>  
                        </div>                
                            <div class="col-md-6 order-md-1">
                            <div class="col-12">
                            <div>
                                <img src="../img/maos.svg" alt=""class="img-fluid">
                        </div>
                    </div>             
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        </div>
    </body>
</html>     