<?php
session_start();
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
require_once "../class/conexao.class.php";   
} else {
echo "Arquivo de conexão não foi encontrado ";
exit;
} 
require("../funcao.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <script type="text/javascript" src="../app.js"></script>
      <script type="text/javascript" src="../js/jquery.js"></script>
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />

      <link type="text/css" rel="stylesheet" href="../css/Layout.css"  media="screen,projection"/>
    <link  rel ="icon"  href = "../imagens/almox.ico"  type = "imagem/x-icon" >
	<title>DEVOLUÇÃO</title>
	
</head>
<body class="bg_color">
	<form action="devolucao.controller.php" method="get">
    	<a href='../principal.php'><h5><img src='../imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a><a href='cautela.php'> > CAUTELA</a><a href='#!'> > MATERIAIS EM USO</h5></a>
        <table>
        	<thead>
                <tr>
                    <td>Requerinte</td><td>Produto</td><td>Data</td><td>hora</td><td>Selecionar</td><td>Devolver</td>
                </tr>
                </thead>
                <tbody>
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
	   			$result_list = "SELECT * FROM emprestimos ORDER BY nome_usuario ASC";

	   			//seleciona os registros
	   			$resultado_lista = $pdo->query($result_list);
	   			
	   			//lista os registro de usuários
	   			while ($emprestimos = $resultado_lista->fetch(PDO::FETCH_OBJ)) {
            $devolve = $emprestimos->id_emprestimo;
            if ($emprestimos->status == "reservado") {

              echo '<tr>';
              echo '<td>'.$emprestimos->nome_usuario.'</td>';
              echo '<td>'.$emprestimos->nome_produto.'</td>';
              echo '<td>'.$emprestimos->data.'</td>';
              echo '<td>'.$emprestimos->hora.'</td>';
              echo "<td><label class='container2'><input type='checkbox' value='".$devolve."' require><span class='checkmark'></span></lavel></td>";
              echo "<td><button class='modal-close waves-effect waves-green btn'>Devolver</button></td>";
              echo '<tr>'; 
            }
	   			}

	      	} else {
	           	header('location:principal.php');
	       	}

	  	}else{
	       	header('location:index.html');
	   	} 
    } 
    ?>
    		</tbody>
    	</table>
    </form>
          <!-- Modal Structure 
          <div id='modal1' class='modal'>
            <form>
              <div class='modal-content' >
                  <h3>Para confirmar devolução!!</h3>
                  <p>Coloque sua senha para confirma devolução de material: <br>
                    <input type='password' name='password' required style='color:#ffffff;'>
                  </p>
              </div>
              <div class='modal-footer'>
                 <button class='modal-close waves-effect waves-green btn'>Devolver</button>
              </div>
            </form>
          </div>-->

   <!-- script do modal (TÁ FUNCIONANDO POHA)
      <script type="text/javascript">
         $(document).ready(function(){
          $('.modal-trigger').bind('click', function(){
            $('.modal').modal();
          });
        });
      </script>-->

	<footer>
				<p><a href="sobre.php">Sobre o CEEP ALMOX <-- Click aqui</a></p>
    			<p>Duvidas, entre em contato com os laboratoristas</p>
   				<p>CEEP ALMOX <a href="">&#174;</a> desenvolvido por CAMPOS & JP <a href="class/extras/extra_pcm.php">&copy;</a> - 2018</p>
 	 </footer>
       	<script type="text/javascript" src="../js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript" src="../app.js"></script>
</body>
</html>