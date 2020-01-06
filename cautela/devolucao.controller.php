<?php 
session_start();
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
include ("../class/conexao.class.php");   
} else {
echo "Arquivo de conexão não foi encontrado ";
exit;
} 

$sql = "SELECT * FROM usuario WHERE nome  ='".$_SESSION['login']."'"; 

$sql = $pdo->query($sql);

$id=$_GET['devolve'];

$material=$id->id_produto;
$qtd=$id->qtd;

	if(isset($_SESSION['login']) && !empty($_SESSION['login'])){

	    if($result['id_privilegio'] == 1 or $result['id_privilegio'] == 2) {

	    	$sql = "UPDATE emprestimos SET (id_usuario, nome_usuario, id_produto, nome_produto, qtd, data, hora, status) values () WHERE id_emprestimo='$id'";

	    	$sql1 = "UPDATE produtos SET (nome, marca, valor, descricao, qtd, un, status) values ('$nome','$marca','$valor', '$obs','$quantidade','$un', 'devolvido') WHERE id_produto='$material'";
	    
	    }
	}
?>