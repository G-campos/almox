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
    <script language=javascript type="text/javascript">
      function verificarSenhas(){
        if (document.cad_aluno.senha.value == document.cad_aluno.confirme_senha.value){
          alert ("As duas senhas conferem")
        }else{
          alert ("As duas senhas não conferem")
        }
      }
    </script>
    <title>CAD DE ALUNOS</title>
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

              //cadastro
                  if( isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['cgm']) && !empty($_POST['cgm']) &&  isset($_POST['dn']) && !empty($_POST['dn']) &&  isset($_POST['turno']) && !empty($_POST['turno']) &&  isset($_POST['turma']) && !empty($_POST['turma']) &&  isset($_POST['curso']) && !empty($_POST['curso']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['confirme_senha']) && !empty($_POST['confirme_senha'])){

                  $nome= $_POST ['nome'];
                  $sobrenome= $_POST ['sobrenome'];
                  $cgm= $_POST ['cgm'];
                  $dn= $_POST ['dn'];
                  $turno= $_POST ['turno'];
                  $turma= $_POST   ['turma'];
                  $curso= $_POST   ['curso'];
                  $senha= $_POST ['senha'];
                  $confirmesenha= $_POST ['confirme_senha'];

                  if($senha == $confirmesenha){

                    $sql= "insert into usuario (nome,cgm, dn, id_turno, id_privilegio, id_turma, id_curso, senha) values ('$nome','$cgm','$dn','$turno', 4,'$turma','$curso','$senha')";

                    $pdo->query($sql);

                    echo "<script>alert('Salvo com sucesso!'); document.location.href='../aluno';</script>";

                  } else {
                    if ($senha == "") {
                      $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";

                    } else {
                     $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
                   } 
                 }           
               }
            cad_aluno();

                         
          } else {
            header('location:../principal.php');
          }

        }
      }else{
        header('location:../index.html');
      }  
    ?>
  
  <!-- roda pé -->
  <footer>
    <p>Duvidas, entre em contato com os laboratoristas</p>
    <p>Desenvolvido por CAMPOS & JP <a href="../class/extras/extra_pcm.php">&copy;</a> - 2018</p>
  </footer>
       <script type="text/javascript" src="../js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript" src="../app.js"></script>

     

</body>
</html>