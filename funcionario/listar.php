<?php
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
require_once "../class/conexao.class.php";   
} else {
echo "Arquivo de conexão nao foi encontrado ";
exit;
} 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <script type="text/javascript" src="../app.js"></script>
      <script type="text/javascript" src="../js/jquery.js"></script>
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

    <title>LISTA DE FUNCIONARIOS</title>
  </head>
<body class="bg_color">
<script>
  function AdicionarFiltro(tabela, coluna) {
      var cols = $("#" + tabela + " thead tr:first-child th").length;
      if ($("#" + tabela + " thead tr").length == 1) {
          var linhaFiltro = "<tr>";
          for (var i = 0; i < cols; i++) {
              linhaFiltro += "<th></th>";
          }
          linhaFiltro += "</tr>";
   
          $("#" + tabela + " thead").append(linhaFiltro);
      }
   
      var colFiltrar = $("#" + tabela + " thead tr:nth-child(2) th:nth-child(" + coluna + ")");
   
      $(colFiltrar).html("<select id='filtroColuna_" + coluna.toString() + "'  class='filtroColuna'> </select>");
   
      var valores = new Array();
   
      $("#" + tabela + " tbody tr").each(function () {
          var txt = $(this).children("td:nth-child(" + coluna + ")").text();
          if (valores.indexOf(txt) < 0) {
              valores.push(txt);
          }
      });
      $("#filtroColuna_" + coluna.toString()).append("<option>TODOS</option>")
      for (elemento in valores) {
          $("#filtroColuna_" + coluna.toString()).append("<option>" + valores[elemento] + "</option>");
      }
   
      $("#filtroColuna_" + coluna.toString()).change(function () {
          var filtro = $(this).val();
          $("#" + tabela + " tbody tr").show();
          if (filtro != "TODOS") {
              $("#" + tabela + " tbody tr").each(function () {
                  var txt = $(this).children("td:nth-child(" + coluna + ")").text();
                  if (txt != filtro) {
                      $(this).hide();
                  }
              });
          }
      });
   
  };
  AdicionarFiltro("tab", 3);
  </script>
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
	   			$result_list = "SELECT * FROM usuario ORDER BY nome ASC";

	   			//seleciona os registros
          $resultado_lista = $pdo->query($result_list);
          
            echo "<form>
                <a href='../principal.php'><h5><img src='../imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a><a href='index.php'> > FUNCIONARIOS</a><a href='lista.php'> > LISTA DE FUNCIONARIOS</h5></a>
                <table id='tab'>
                <thead>
                  <tr>
                    <td>Código</td><td>Nome</td><td>Sobrenome</td><td>Setor</td><td>Função</td>
                  </tr>
                </thead>
                <tbody>";
          
                  while ($funcionario = $resultado_lista->fetch(PDO::FETCH_OBJ)){
                    switch ($result['id_setor']) {
                      case 2:
                        $funcionario->setor = 'Sala de Aula';
                        break;
                      case 3:
                        $funcionario->setor = 'Almoxarifado';
                        break;
                      case 4:
                        $funcionario->setor = 'Central de Materiais';
                        break;
                      default:
                        $funcionario->setor = 'Laboratórios de Informática';
                        break;
                    }
                    if ($funcionario->id_privilegio == 2 or $funcionario->id_privilegio == 3){
                        if($funcionario->id_privilegio == 2){
                          $funcionario->id_privilegio = 'Laboratoristas';
                        }else{
                          $funcionario->id_privilegio = 'Professor ou Funcionario';
                        }
                      echo '<tr>';
                      echo '<td>'.$funcionario->id_usuario.'</td>';
                      echo '<td>'.$funcionario->nome.'</td>';
                      echo '<td>'.$funcionario->sobrenome.'</td>';
                      echo '<td>'.$funcionario->setor.'</td>';
                      echo '<td>'.$funcionario->id_privilegio.'</td>';
                      echo '<tr>';
                    }
                  } 
                echo "</tbody>
              </table>
            </form>";

	      	} else {
	           	header('location:../principal.php');
	       	}

	  	}else{
	       	header('location:../index.html');
	   	} 
    } 
    ?>
  <footer>
    <p>Duvidas, entre em contato com os laboratoristas</p>
    <p>Desenvolvido por CAMPOS & JP <a href="class/extras/extra_pcm.php">&copy;</a> - 2018</p>
  </footer>
       <script type="text/javascript" src="js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="app.js"></script>

</body>
</html>