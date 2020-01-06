<?php 
	//função para verificar o arquivo de conexão
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(file_exists("conexao.class.php")) {
			require "conexao.class.php";
			session_start();

			//autenticando usuário
			include ("conexao.class.php");	
			$login = addslashes($_POST['login']);
			$senha = addslashes($_POST['senha']);

				$sql = "SELECT * FROM usuario
			 	WHERE nome  = '$login' AND senha = '$senha'";

				$result = $pdo->query($sql);
					if($result->rowCount() > 0) {
						$_SESSION['login'] = $login;
						$_SESSION['senha'] = $senha;
						header('location:../principal.php');
					}else{ 
						//login invalido
  						unset ($_SESSION['login']);
  						unset ($_SESSION['senha']);
  						echo "<script>alert('LOGIN e SENHA INVALIDOS, tente novamente'); document.location.href='../index.html';</script>";
					}
		} else {
		echo "<script>alert('Falha na conexão, entre em contato com o Administrador do sistema'); document.location.href='../index.html';</script>";
		}
	} else {
		echo "<script>alert('Falha na conexão, entre em contato com o Administrador do sistema'); document.location.href='../index.html';</script>";
	}	
 ?>
