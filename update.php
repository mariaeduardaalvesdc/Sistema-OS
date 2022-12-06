<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$num = $_POST['num'];
$cidade = $_POST['cidade'];

$sql = $con -> query("UPDATE clientes SET nome='$nome', email='$email', cpf='$cpf' rg='$rg', telefone='$telefone', rua='$rua', bairro='$bairro',
num='$num', cidade='$cidade' WHERE id='$id'");

if ($sql) {
    echo "ATUALIZADO";
} else {
    echo "NÃO ATUALIZADO";
}

?>