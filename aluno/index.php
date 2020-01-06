<?php
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
	require_once "../class/conexao.class.php";		
} else {
	echo "Arquivo de conexão nao foi encontrado ";
	exit;
} 

//inicia a sessão
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="../css/Layout.css"  media="screen,projection"/>
	<link  rel ="icon"  href = "imagens/almox.ico"  type = "imagem/x-icon" >

	<title>Inicio</title>
	
</head>
<body class="bg_color">
	<?php 
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

			if($result['id_privilegio'] == 1 or $result['id_privilegio'] == 2){
				echo "<div class='container_trescolunas'>
			<!--coluna-1-->
							<div class='coluna1'>
								<a href='../principal.php'>
									<div class='button'>
										<img src='../imagens/icone_grande/baseline_home_black_48dp.png' class='img'>
										<p>Home</p>
									</div> 		
								</a>
							</div>
			<!--coluna-2-->
							<div class='coluna2'>
									<a href='cad_aluno.php'>
										<div class='button'>
											<img src='../imagens/aluno.png' class='img'>
											<p>Cadastrar</p>
										</div>
									</a>	
							</div>
			<!--coluna-3-->
							<div class='coluna3'>
								<a href='listar.php'>
									<div class='button'>
										<img src='../imagens/icone_grande/outline_list_alt_black_48dp.png' class='img'>
										<p>Listar</p>
									</div> 		
								</a>
							</div>
						</div>";
			} else {
				header('location:../principal.php');
			}
		}
	}else{
		header('location:../index.html');
	}
	?>

	<footer>
    			<p>Duvidas, entre em contato com os laboratoristas</p>
   				<p>Desenvolvido por CAMPOS & JP <a href="class/extras/extra_pcm.php">&copy;</a> - 2018</p>
 	 </footer>
       	<script type="text/javascript" src="../js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      	<script type="text/javascript" src="../js/materialize.min.js"></script>
      	<script type="text/javascript" src="../app.js"></script>
</body>
</html>