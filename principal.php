<?php
session_start();
//Verifico se o arquivo existe
if(file_exists("class/conexao.class.php")) {
require_once "class/conexao.class.php";   
} else {
echo "Arquivo de conexão não foi encontrado ";
exit;
} 
require("funcao.php");
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

	//seta quem esta na sessão
	$sql = "SELECT * FROM usuario WHERE nome  ='".$_SESSION['login']."'"; 
	//print_r($_SESSION['login']); mostra oq tem na variável
		
	$sql = $pdo->query($sql); //executa a consulta da variavel


	if($sql->rowCount() > 0){
		
		//puxa todas os dados do usuario
		$result = $sql->fetch();
			//print_r($result['id_privilegio']);
		if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
			
			switch ($result['id_privilegio']) {
				case 1:
					p_adm();
					break;
				case 2:
					p_funcionario();
					break;
				case 3:
					p_professor();
					break;
				default:
					p_aluno();
					break;
			}
			$adm = json_encode($result['id_privilegio']);
		}
	}else{
		header('location:index.html');
	}
	
	

	?>
	<script>
		if(adm->['id_privilégio'] == 1) {
			document.getElementByClass('button').style.backgroundColor = 'red';
		}
	</script>
	<footer>
				<p><a href="sobre.php">Sobre o CEEP ALMOX <-- Click aqui</a></p>
    			<p>Duvidas, entre em contato com os laboratoristas</p>
   				<p>CEEP ALMOX <a href="">&#174;</a> desenvolvido por CAMPOS & JP <a href="class/extras/extra_pcm.php">&copy;</a> - 2018</p>
 	 </footer>
       	<script type="text/javascript" src="js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script type="text/javascript" src="app.js"></script>
</body>
</html>