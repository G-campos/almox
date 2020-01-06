<?php
session_start();
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
require_once "../class/conexao.class.php";   
} else {
echo "Arquivo de conexão não foi encontrado ";
exit;
} 

	include("../class/conexao.class.php");
	
	$sql = "SELECT * FROM usuario WHERE nome  ='".$_SESSION['login']."'"; 
			//seta quem esta na sessão

	//print_r($_SESSION['login']); mostra oq tem na variável
		
	$sql = $pdo->query($sql); //executa a consulta da variavel
		
	if($sql->rowCount() > 0){
		
		//puxa todas os dados do usuario
		$result = $sql->fetch();
			//print_r($result['id_privilegio']);
		if(isset($_SESSION['login']) && !empty($_SESSION['login'])){

			header('location: cautela.php');
		}
	}else{
		header('location:../index.html');
	}
?>