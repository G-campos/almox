<?php
//Verifico se o arquivo existe
if(file_exists("class/conexao.class.php")) {
  require_once "class/conexao.class.php";   
} else {
  echo "Arquivo de conexão nao foi encontrado ";
  exit;
} 

//inicia a sessão
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <script type="text/javascript" src="app.js"></script>
      <script type="text/javascript" src="js/jquery.js"></script>
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />

      <link type="text/css" rel="stylesheet" href="css/Layout.css"  media="screen,projection"/>
    <link  rel ="icon"  href = "imagens/almox.ico"  type = "imagem/x-icon" >

    <title>CAD DE ALUNOS</title>
  </head>
<body class="bg_color">
  <?php
    include("class/conexao.class.php");
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

            echo "<div class='conteiner'>
                          <form method='post' action='class/erros.funciton.php'>
                            <div class='conteiner'>
                              <h3><img src='imagens/icone_grande/outline_settings_black_48dp.png' alt='Logo' class='avatar'>Relatar erros</h3><br>
                            <div class='header'>
                              <a href='principal.php'>
                                <button type='button'>
                                  <img src='imagens/home.ico' class='img'/>Home
                                </button> 
                              </a>
                                  <button>
                                      <img src='imagens/arquivar.ico' class='img'>Enviar
                                    </button>              
                            </div>
                    <div class='row'>
                      <div class='col s4'>
                        <label> Nome </label> <br> 
                        <input name='nome' type='text' required autofocus='true' pattern='[A-Z][a-z]{,20}'>
                      </div>  
                        <div class='col s4'>
                              <label> Assunto:</label>
                              <input name='assunto' type='text' required pattern='[A-Z][a-z]{,20}'>
                        </div>            
                          <div class='col s4'>
                            <label>Setor</label>
                              <select name='setor' class='bg_color'>
                                <option value=''>Sala de Aula</option>
                                <option value=''>Almoxarifado</option>
                                <option value=''>Central de Máteriais</option>
                                <option value=''>Laboratórios de Informatica</option>
                                <option value=''>Laboratório de Quimica/física</option>
                                <option value=''>Laboratório de Eletricidade</option>
                                <option value=''>Laboratório de Eletrônica</option>
                                <option value=''>Laboratório de Enfermagem</option>
                                <option value=''>Laboratório de Mecânica</option>
                              </select>
                          </div>
                    </div>
                      <br class='limpa'>
                    <div class='row'>
                      <div class='s12'>
                        <label>Descrição do erro:</label><br>
                        <textarea name='valor' type='textarea' required pattern='[1-9]{,100}'></textarea> 
                      </div>
                    </div>
                  </form>
                  </div>";
                         
          } else {
            header('location:principal.php');
          }

        }
      }else{
        header('location:index.html');
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