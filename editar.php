<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
    <title> CADASTRO </title>
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
    <?php
        include "./conexao.php";
        $id = $_GET['id'];
        $sql = "SELECT * from clientes WHERE id='$id'";
        $resultado = mysqli_query($con, $sql);
        while($dados = mysqli_fetch_array($resultado)) {
    ?>
        <form class="input form-inline" method="post" action="update.php">
    <div class="row">
        <h1> CADASTRO DE CLIENTES </h1>
        <div class="col s6">
             <label> ID </label>
        <input class="form-control" type="text" placeholder="ID" name="id"  value="<?php echo $dados['id'];?>">
        </div>
        <div class="col s6">
             <label> NOME </label>
        <input class="form-control" type="text" placeholder="NOME" name="nome"  value="<?php echo $dados['nome'];?>">
        </div>
        <div class="col s6">
        <label> E-MAIL </label>
            <input type="text" name="email" placeholder="E-MAIL"  class="form-control"  value="<?php echo $dados['email'];?>">
        </div>
    </div> <!-- /.row -->
    <div class="row">
    <div class="col s4">
        <label> CPF </label>
        <input type="text" class="form-control" placeholder="CPF"  name="cpf"  value="<?php echo $dados['cpf'];?>">
</div>
<div class="col s4">
     <label> RG </label>
        <input type="text" class="form-control" placeholder="RG"  name="rg"  value="<?php echo $dados['rg'];?>">
</div>
<div class="col s4">
     <label> TELEFONE </label>
        <input type="text" class="form-control" placeholder="TELEFONE"  name="telefone"  value="<?php echo $dados['telefone'];?>">
</div>
</div> <!-- /.row -->
<div class="row">
    <div class="col s6">
         <label> RUA </label>
        <input type="text"  name="rua" class="form-control" placeholder="RUA"  value="<?php echo $dados['rua'];?>">
</div> 
<div class="col s6">
     <label> BAIRRO </label>
        <input type="text"  name="bairro" class="form-control" placeholder="BAIRRO"  value="<?php echo $dados['bairro'];?>">
</div>  
</div> <!-- /.row -->
<div class="row">

<div class="col s4">
     <label> Nº </label>
        <input type="text" name="num" class="form-control" placeholder="Nº"  value="<?php echo $dados['num'];?>">
</div>  
<div class="col s4">
     <label> CIDADE </label>
        <input type="text"  name="cidade" class="form-control" placeholder="CIDADE"  value="<?php echo $dados['cidade'];?>">
</div>  
<div class="col s4">
       <button type="submit" class="btn waves-effect waves-light blue"> CADASTRAR </button>
</div>
 
</div> <!-- /.row -->
</form>
</div> <!--/.container -->
<?php
  };
    include "footer.php";
?>
</body>
</html>