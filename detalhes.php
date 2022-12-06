<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          
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
       <h4> CPF OU RG </h4>
     <form class="input-field" action="detalhes.php" method="POST">
      <div class="row ">
 
      <div class=" col s8">
       <label for=""></label>     
       <input type="text" name="pesquisa">   </div>     
       <div class="col s4">
       <button class="btn waves-effect waves-light blue" type="submit" name="action">PESQUISAR<i class="material-icons right">search</i> </button>      
       </div>
         
      </div>  
</form>
           <!-- tabela !-->
    <table class="bordered centered responsive-table">
        <thead>
          <tr>
              <th> ID </th>
              <th> NOME </th>
              <th> E-MAIL </th>
          </tr>
        </thead>
        <?php
        include "./conexao.php";
        $pesquisa = @$_POST['pesquisa'];
        $sql = "SELECT * FROM clientes WHERE cpf='$pesquisa' OR rg='$pesquisa'";
            $resultado = mysqli_query($con, $sql);              
            while ($dados = mysqli_fetch_array($resultado)) {            
            ?>
            <tbody>
                   <tr>
                    <td><?php echo $dados['id']; ?> </td>
                    <td><?php echo $dados['nome']; ?> </td>
                    <td><?php echo $dados['telefone']; ?> </td>
                    <td> 
                         <a href="detalhe_cliente.php?id=<?php echo $dados['id'];?>" class="btn-floating">
                             <i class="material-icons blue"> dehaze </i> </a>            

                         </a>               
                    </td>
                    </tr>
            </tbody>
            <?php
            }
            ?>
       
</table>
</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>