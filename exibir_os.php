<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> EXIBIR OS </title>

</head>
<body>
     <nav class="blue"> 
    <div class="nav-wrapper">
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="cadastro.php"> CADASTRO </a></li>
        <li><a href="pesquisa.php"> PESQ NOME </a></li>
        <li><a href="pesq_cpf.php">CPF</a></li>
        <li><a href="pesq_rg.php"> RG </a></li>
        <li><a href="pesq_cidade.php"> CIDADE </a></li>
        <li><a href="detalhes.php"> CPF OU RG </a></li>
        <li><a href="exibir.php"> EXIBIR </a></li>
        <li><a href="os.php"> OS </a></li>
                 <li><a href="exibir_os.php">  EXIBIR OS </a></li>


      </ul>
    </div>
  </nav>  
<h1> CLIENTES CADASTRADOS </h1>
    <table class="table table-striped">
        <thead> 
            <tr>
            <th> NUM OS </th>
            <th> MAT TÉCNICO </th>
            <th> NOME TÉCNICO </th>
            <th> NOME DO EQUIPAMENTO </th>
            <th> MARCA </th>
            <th> N SERIAL </th>
            <th> DESCRIÇÃO DO SERVIÇO </th>
            <th> VALOR DO SERVIÇO </th>
            <th> DATA DE ENTREGA </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM os";
            $resultado = mysqli_query($con, $sql);              
            while ($dados = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $dados['id']; ?> </td>
                <td><?php echo $dados['mat_tecnico']; ?> </td>
                <td><?php echo $dados['nome_tecnico']; ?> </td>
                <td><?php echo $dados['nome_equipamento']; ?> </td>
                <td><?php echo $dados['marca']; ?> </td>
                <td><?php echo $dados['n_serial']; ?> </td>
                <td><?php echo $dados['descricao_servico']; ?> </td>
                <td><?php echo $dados['valor_servico']; ?> </td>
                <td><?php echo $dados['data_entrega']; ?> </td>
                
            </tr>
            <?php
            };
            ?>

        </tbody>
</table>
    
</body>
</html>