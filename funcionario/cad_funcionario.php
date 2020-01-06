<?php
//Verifico se o arquivo existe
if(file_exists("../class/conexao.class.php")) {
require_once "../class/conexao.class.php";   
} else {
echo "Arquivo de conexão não foi encontrado ";
exit;
} 
session_start();
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
    <title>CAD DE FUNCIONARIO</title>
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
            echo "teste4";
              //cadastro
                  if( isset($_POST['nome']) && !empty($_POST['nome']) &&  isset($_POST['sobrenome']) && !empty($_POST['sobrenome']) 
                    &&  isset($_POST['setor']) && !empty($_POST['setor']) &&  isset($_POST['funcao']) && !empty($_POST['funcao']) 
                    &&  isset($_POST['senha']) && !empty($_POST['senha']) &&  isset($_POST['confirme']) && !empty($_POST['confirme'])){
                  echo "teste5<br>";
                  $nome= $_POST ['nome'];
                  $sobrenome= $_POST['sobrenome'];
                  $setor= $_POST ['setor'];
                  $funcao= $_POST ['funcao'];
                  $senha= $_POST ['senha'];
                  $confirmesenha= $_POST ['confirme'];

                  if($senha == $confirmesenha){
                    echo "teste6<br>";
                    $sql= "insert into usuario (nome, sobrenome, id_setor, id_privilegio, senha) values ('$nome', '$sobrenome', '$setor', '$funcao', '$senha')";

                    $pdo->query($sql);

                    $_SESSION['salvou'] = 1;
                    echo "<script>alert('Salvo com sucesso!'); document.location.href='../funcionario';</script>";

                  } else {
                    if ($senha == "") {
                      $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";

                    } else {
                     $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
                   } 
                 }           
               }
            cad_funcionario();                    
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
       <script type="text/javascript" src="js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="app.js"></script>

</body>
</html>