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
        <form class="input form-inline" method="POST" action="recebe.php">
    <div class="row">
        <h1> CADASTRO DE CLIENTES </h1>
        <div class="col s6">
             <label> NOME </label>
        <input class="form-control" type="text" placeholder="NOME" name="nome" required>
        </div>
        <div class="col s6">
        <label> E-MAIL </label>
            <input type="text" name="email" placeholder="E-MAIL" required class="form-control">
        </div>
    </div> <!-- /.row -->
    <div class="row">
    <div class="col s4">
        <label> CPF </label>
        <input type="text" class="form-control" placeholder="CPF" required name="cpf">
</div>
<div class="col s4">
     <label> RG </label>
        <input type="text" class="form-control" placeholder="RG" required name="rg">
</div>
<div class="col s4">
     <label> TELEFONE </label>
        <input type="text" class="form-control" placeholder="TELEFONE" required name="telefone">
</div>
</div> <!-- /.row -->
<div class="row">
    <div class="col s6">
         <label> RUA </label>
        <input type="text" required name="rua" class="form-control" placeholder="RUA">
</div> 
<div class="col s6">
     <label> BAIRRO </label>
        <input type="text" required name="bairro" class="form-control" placeholder="BAIRRO">
</div>  
</div> <!-- /.row -->
<div class="row">

<div class="col s4">
     <label> Nº </label>
        <input type="text" required name="numero" class="form-control" placeholder="Nº">
</div>  
<div class="col s4">
     <label> CIDADE </label>
        <input type="text" required name="cidade" class="form-control" placeholder="CIDADE">
</div>  
<div class="col s4">
       <button type="submit" class="btn waves-effect waves-light blue"> CADASTRAR </button>
</div>
 
</div> <!-- /.row -->
</form>
</div> <!--/.container -->
<?php

    include "footer.php";
?>
</body>
</html>