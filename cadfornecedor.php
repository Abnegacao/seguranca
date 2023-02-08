<?php
include "conexao.php";
$razao = $_POST['razao'];
$email = $_POST['email'];
$senha = $_POST['senha'];

sql = "insert into produto values(null,'".$razao."','".$email."','".$senha."')";


if(mysqli_query($conexao, $sql)) {
    echo "Gravado com sucesso!";
}else{
    echo "Erro ao gravar!";
}
mysqli_close($conexao);
?>
<br>