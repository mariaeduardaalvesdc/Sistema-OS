<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
    <title>Document</title>
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
  <br> <br> <br><br> <br>
 <div class="container">
   <form action="recebe_os.php" method="post">
     <div class="row">
        <div class="col s2">
           <label>MAT do Técnico</label>
           <input type="text" name="mat_tecnico">
        </div>
         <div class="col s10">
           <label>Nome do Técnico</label>
           <input type="text" name="nome_tecnico">
        </div> 
         <div class="col s4">
             <label>Nome do equipamento</label>
             <input type="text" name="nome_equipamento">
         </div> 
 
   <div class="input-field col s4">
    <select name="marca">
      <option value="" disabled selected>Opções</option>
      <option value="Dell">DELL</option>
      <option value="CCE">CCE</option>
      <option value="Positivo">POSITIVO</option>
      <option value="Lenovo">LENOVO</option>
    </select>
    <label>Marca do Produto</label>
  </div>    
         
         <div class="col s4">
             <label> Nº serial </label>
             <input type="text" name="n_serial">
        </div>
        <div class="input-field col s12">
          <textarea name="descricao_servico" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1"> Serviço realizado </label>
        </div> 
   
            <div class="col s2">
                <label> Valor do serviço </label>
                <input type="text" name="valor_servico">
        </div>
        <div class="col s2">
                <label> Data de entrega </label>
                <input type="date" name="data_entrega">
        </div>
            

            <button class="btn waves-effect waves-light" type="submit" name="action"> CADASTRAR
            <i class="material-icons right">send</i>
            </button>

       
     </div>
   </form>            
 </div>
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script>
       $(document).ready(function() {
    $('select').material_select();
  });
       
      </script>

   </body>

</html>