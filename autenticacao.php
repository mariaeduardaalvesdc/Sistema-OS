<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Autenticação </title>
    <script>
        function autenticacaoOK() {
            alert ("Usuário logado com sucesso");
            setTimeout('window.location="index.php"', 1000);
        }
        function autenticacaoFalha () {
            alert("Não foi possível logar");
            setTimeout('window.location="login.php"', 1000);
        }
    </script>
</head>
<body>
    <?php
    include "conexao.php";
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $resultado = $con ->query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'");
    session_start();
    if(mysqli_num_rows($resultado) > 0) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION ['senha'] = $_POST['senha'];
        echo "<script>autenticacaoOK()</script>";
    } else {
       
        echo "<script> autenticacaoFalha() </script>";
    }

    ?>
</body>
</html>