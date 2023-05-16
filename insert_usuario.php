<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

/*Recebendo dados do form */

$nome = $_POST ['nome'];
$login = $_POST ['login'];
$senha = $_POST ['senha'];
$gmail = $_POST ['gmail'];



/*Comando para insert into*/
$sql = "INSERT INTO tb_usuario (nm_user, login, senha, nm_gmail) values ('$nome', '$login', '$senha', '$gmail')";

/*Comando para enviar os dados o banco*/
$insert = mysqli_query($conexao, $sql);

header('Location: ..\index.php?msg=1');

?>