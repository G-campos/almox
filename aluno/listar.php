<?php
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
require_once "../class/conexao.class.php";   
} else {
echo "Arquivo de conexão nao foi encontrado ";
exit;
} 
session_start();
//require("funcao.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <script type="text/javascript" src="../app.js"></script>
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script type="text/javascript" src="../js/script.js"></script>
        <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />

      <link type="text/css" rel="stylesheet" href="../css/Layout.css"  media="screen,projection"/>
    <link  rel ="icon"  href = "../imagens/almox.ico"  type = "imagem/x-icon" >
    <script type="../js/jquery.dataTable.js"></script>
     <script type="../js/dataTable.js"></script>
    <title>LISTA DE ALUNOS</title>
  </head>
<body class="bg_color">
  <?php
    include("../class/conexao.class.php");
    //autenticação privilégio usuário
     $sql = "SELECT * FROM usuario WHERE nome  ='".$_SESSION['login']."'"; 
      //seta quem esta na sessão

      //print_r($_SESSION['login']); mostra oq tem na variável
    
     $sql = $pdo->query($sql); //executa a consulta da variavel
    
    if($sql->rowCount() > 0){
    
	    //puxa todas os dados do usuario
	    $result = $sql->fetch();
	
	    //print_r($result['id_privilegio']);
	    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){

	       	if($result['id_privilegio'] == 1 or $result['id_privilegio'] == 2) {

	   			//SQL para seleciona os registros
          $result_list = "SELECT * FROM usuario ORDER BY nome";

          //seleciona os registros
          $resultado_lista = $pdo->query($result_list);
	   			
  	   			echo "<div class='form'>
                <a href='../principal.php'><h5><img src='../imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a><a href='index.php'> > ALUNOS</a><a href='index.php'> > LISTA DE ALUNOS</h5></a>
                <table id='tabela'>
                <thead>
                  <tr>
                    <th>Código</th><th>Nome</th><th>CGM</th><th>Curso</th>
                  </tr>
                  <tr>
                    <th><input type='text' id='txtColuna1'/></th>
                    <th><input type='text' id='txtColuna2'/></th>
                    <th><input type='text' id='txtColuna3'/></th>
                    <th><input type='text' id='txtColuna4'/></th>
                  </tr>
                </thead>
                <tbody>";
          
                  while ($aluno = $resultado_lista->fetch(PDO::FETCH_OBJ)){
                    switch ($result['id_curso']) {
                      case 1:
                        $aluno->id_curso = 'Administração';
                        break;
                      case 2:
                        $aluno->id_curso = 'Edificações';
                        break;
                      case 3:
                        $aluno->id_curso = 'Eletrônica';
                        break;
                      case 4:
                        $aluno->id_curso = 'Eletromecânica';
                        break;
                      case 5:
                        $aluno->id_curso = 'Enfermagem';
                        break;
                      case 6:
                        $aluno->id_curso = 'Especialização Enfermagem';
                        break;
                      case 7:
                        $aluno->id_curso = 'Informática';
                        break;
                      case 8:
                        $aluno->id_curso = 'Meio Ambiente';
                        break;
                      default:
                        $aluno->id_curso = 'Segurança do Trabalho';
                        break;
                        
                    }
                    if ($aluno->id_privilegio == 4) {
                      echo '<tr>';
                      echo '<td>'.$aluno->id_usuario.'</td>';
                      echo '<td>'.$aluno->nome.'</td>';
                      echo '<td>'.$aluno->cgm.'</td>';
                      echo '<td>'.$aluno->id_curso.'</td>';
                      echo '<tr>';
                    }                   
                  } 
                echo "</tbody>
              </table>
            </div>";
      
	      	} else {
	           	header('location:../principal.php');
	       	}

	  	}else{
	       	header('location:../index.html');
	   	} 
    } 
    
          
    ?>
    <!-- SCRIPT DO FILTRO DE LISTA-->
    <script>
          M.AutoInit();
          $(document).ready(function(){
            $('#usuario').dataTable();
          });
        </script>
    <!-- script do modal (TÁ FUNCIONANDO POHA) -->
      <script type="text/javascript">
         $(document).ready(function(){
          $('.modal-trigger').bind('click', function(){
            $('.modal').modal();
          });
        });
      </script>
  <footer>
    <p>Duvidas, entre em contato com os laboratoristas</p>
    <p>Desenvolvido por CAMPOS & JP <a href="class/extras/extra_pcm.php">&copy;</a> - 2018</p>
  </footer>
       <script type="text/javascript" src="js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="app.js"></script>

</body>
</html>