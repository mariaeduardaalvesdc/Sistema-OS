<?php
include "conexao.php";
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
          
    <title> DELETAR </title>
    <script>
        function ok () {
            alert("USUÁRIO DELETADO COM SUCESSO!")
            setTimeout("window.location='detalhes.php'", 1000);
        }
        function erro () {
            alert("NÃO FOI POSSÍVEL DELETAR O USUÁRIO!")
        }
    </script>
</head>
<body>

            
    <?php
      $id = $_GET['id'];
    
       $consulta =  $con -> query ("DELETE  FROM clientes WHERE id='$id'");
                   
        if ($consulta) {
         echo "<script> ok () </script>";
           } else {
                echo "<script> erro() </script>";
              }
                   
        ?>
</body>
</html>