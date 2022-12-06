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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
    <title> DETALHE </title>
</head>
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
         <li><a href="exibir_os.php"> EXIBIR OS </a></li>


      </ul>
    </div>
  </nav>  
<h1> CLIENTES CADASTRADOS </h1>
    <table class="table table-striped">
        <thead> 
            <tr>
            <th> ID </th>
            <th> NOME </th>
            <th> E-MAIL </th>
            <th> CPF </th>
            <th> RG </th>
            <th> TELEFONE </th>
            <th> RUA </th>
            <th> BAIRRO </th>
            <th> NUMERO </th>
            <th> CIDADE </th>
            </tr>
        </thead>
        <tbody>
            <?php
          $id = $_GET['id'];
            $sql = "SELECT * FROM clientes WHERE id='$id'";
            $resultado = mysqli_query($con, $sql);              
            while ($dados = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
            <td><?php echo $dados['id']; ?> </td>
                <td><?php echo $dados['nome']; ?> </td>
                <td><?php echo $dados['email']; ?> </td>
                <td><?php echo $dados['cpf']; ?> </td>
                <td><?php echo $dados['rg']; ?> </td>
                <td><?php echo $dados['telefone']; ?> </td>
                <td><?php echo $dados['rua']; ?> </td>
                <td><?php echo $dados['bairro']; ?> </td>
                <td><?php echo $dados['num']; ?> </td>
                <td><?php echo $dados['cidade']; ?> </td>
                <td>  
                    <a href="deletar.php?id=<?php echo $dados['id'];?>">
                    <i class="material-icons">delete</i>
            </a>
             </td>
                <td>  
                <a href="editar.php?id=<?php echo $dados['id'];?>">
                    <i class="material-icons">update</i> </td>
            </a>
            </tr>
            <?php
            };
            ?>

        </tbody>
</table>
    
</body>
</html>