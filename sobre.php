<?php
//Verifico se o arquivo existe
if(file_exists("class/conexao.class.php")) {
	require_once "class/conexao.class.php";		
} else {
	echo "Arquivo de conexão nao foi encontrado ";
	exit;
} 
/* define o limitador de cache para 'private' 

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

// define o prazo do cache em 30 minutos 
session_cache_expire(120);
$cache_expire = session_cache_expire();*/

//inicia a sessão
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="css/Layout.css"  media="screen,projection"/>
	<link  rel ="icon"  href = "imagens/almox.ico"  type = "imagem/x-icon" >

	<title>Inicio</title>
	
</head>
<body class="bg_color">
	<?php 
	include("class/conexao.class.php");
	
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
							<h4><a href='principal.php'><img src='imagens/logo.jpg' class='avatar_sobre'></a> CEEP ALMOX</h4>						
			<!--coluna-4-->
							<div class='coluna4'>
									<h5>O que é o CEEP ALMOX ?</h5>
									<p>Sistema de almoxarifado que visa facilitar o trabalho e a organização dos colaboradores do almoxarifado e dos usuários dos laboratórios. Tornando virtual e integrado todos os sistemas de registros manuais já existentes.</p>

									<h5> Como o CEEP ALMOX faz isso ? </h5>
									<p>atraves da gerencia da central de materias o CEEP ALMOX realiza emprestimos de materias e reservas de laboratorios.</p>
							</div>
			<!--coluna-5-->
							<div class='coluna5'>
									<h5>Objetivo geral</h5>
								<p> Com o objetivo de colaborar com o CEEP e desenvolver um sistema onde posteriormente os próximos alunos do curso de informática pudessem estar implementando esse projeto com  o auxilio e conforme a necessidade dos usuários.</p>

									<p> De modo a deixando um legado de conscientização, que assim como fomos ajudados devemos ajudar também.</p>

									<h5>Objetivo especifico</h5>
									<p> Foi observado a necessidade, de um sistema que facilitasse e agilizasse a organização do almoxarifado, central de materiais e dos vários laboratórios.</p>

									<p> Com o sistema, vários usuários irão ter conectividade e comunicação entre os setores. Melhorando o armazenamento das informações dos almox. e substituindo os livros de registro.</p><br>
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
   				<p>CEEP ALMOX <a href="">&#174;</a> desenvolvido por CAMPOS & JP <a href="class/extras/extra_pcm.php">&copy;</a> - 2018</p>
 	 </footer>
       	<script type="text/javascript" src="../js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      	<script type="text/javascript" src="../js/materialize.min.js"></script>
      	<script type="text/javascript" src="../app.js"></script>
</body>
</html>
