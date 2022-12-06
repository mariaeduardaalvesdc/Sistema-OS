<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function cadastroEfetuado () {
            alert("Cadastro efetuado com sucesso!");
            setTimeout('window.location="exibir.php"', 100);
        }
        function cadastroFalhou () {
            alert("Não foi possivel efetuar o cadastro!");
            setTimeout('window.location="cadastro.php"', 100);
        }
    </script>
</head>
<body>
    <?php
    include "conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $num = $_POST['num'];
    $cidade = $_POST['cidade'];

    $inserir  = $con -> query ("INSERT INTO clientes VALUES ('0', '$nome', '$email', '$cpf', '$rg', '$telefone', '$rua', '$bairro', '$num', '$cidade')");

        if ($inserir) {
            echo "<script> cadastroEfetuado() </script>";
        } else {
            echo "<script> cadastroFalhou() </script>";
        }

    ?>
</body>
</html>