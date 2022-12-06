<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function ok() {
            alert("Cadastro efetuado!")
            setTimeout("window.location='exibir_os.php'", 1000);
           
        }
        function erro() {
            alert("ERRO AO CADASTRAR OS");
            setTimeout("window.location:'os.php'", 1000);
        }
        </script>
</head>
<body>
    <?php
        include "conexao.php";
        $mat_tecnico = $_POST['mat_tecnico'];
        $nome_tecnico = $_POST['nome_tecnico'];
        $nome_equipamento = $_POST['nome_equipamento'];
        $marca = $_POST['marca'];
        $n_serial = $_POST['n_serial'];
        $descricao_servico = $_POST['descricao_servico'];
        $valor_servico = $_POST['valor_servico'];
        $data_entrega = $_POST['data_entrega'];
      
        $inserir = $con -> query("INSERT INTO os VALUES
        ('0','$mat_tecnico','$nome_tecnico','$nome_equipamento', '$marca', '$n_serial', '$descricao_servico' , '$valor_servico','$data_entrega')");
    
            if($inserir) {
                echo "<script> ok() </script>";
            } else {
                echo "<script> erro() </script>";
            }
    
    ?>
</body>
</html>