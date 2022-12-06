<?php
    include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
    <title> PESQUISA POR NOME  </title>
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

<div class="container">
    <h2> PESQUISA POR NOME </h2>
        <form action="pesquisa.php" method="POST">
        <div class="row">
            <input type="text" name="pesquisa">
            <button class="btn waves-effect waves-light" type="submit"> Pesquisar </button>
          </div>
    </form>
    <h5> DADOS DO CLIENTE   </h5>
        <table class="table table-striped">
            <thead>
                <tr> 
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
                $pesquisa = @$_POST['pesquisa'];
                $sql = "SELECT * FROM clientes WHERE nome LIKE '%".$pesquisa."%'";
                $resultado = mysqli_query($con, $sql);

                while ($dados = mysqli_fetch_array($resultado)) {
                
               ?>
               <td> <?php echo $dados['nome']; ?></td>
               <td> <?php echo $dados['email']; ?></td>
               <td> <?php echo $dados['cpf']; ?></td>
               <td> <?php echo $dados['rg']; ?></td>
               <td> <?php echo $dados['telefone']; ?></td>
               <td> <?php echo $dados['rua']; ?></td>
               <td> <?php echo $dados['bairro']; ?></td>
               <td> <?php echo $dados['num']; ?></td>
               <td> <?php echo $dados['cidade']; ?></td>


            </tbody>
            <?php
                 };
            ?>

        </table>
</div> 
       
</body>
</html>