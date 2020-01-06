<?php
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
	require_once "../class/conexao.class.php";   
} else {
	echo "Arquivo de conexão não foi encontrado ";
exit;
} 
session_start();

	try {
		require_once "../class/conexao.class.php";
		//*************************************************//

		if(!isset($_SESSION['carrinho'])){
			$_SESSION['carrinho']=array();
		}
			$id=intval($_GET['codigo']);
		if (!isset($_SESSION['carrinho'][$id])){
			$_SESSION ['carrinho'][$id]=1;
		}
		else{
			$_SESSION['carrinho'][$id]+=1;
		}

		//*************************************************//
		if (!isset($_SESSION['emprestimo'])) {
			$_SESSION['emprestimo'] = array();
		}
		
		
		$requirente =addslashes($_POST['requirente']);
		$estoque = ($_POST['estoque']);
		$material = ($_POST['material']);
		$ =addslashes($_POST['']);
		$qtd =addslashes($_POST['quantidade']);
		$ =addslashes($_POST['']);

		$status = 'reservado';

		if ($_POST['salva']>0) {

			$sql= "insert into emprestimo (id_usuario, nome_usuario, id_produto, nome_produto, qtd, data, hora, status) values ()";
		} else {
			
		}
		
	} catch (PDOException $e) {
		echo "erro".$e;
	}

header('location: cautela.php');

?>