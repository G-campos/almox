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
      <script type="text/javascript" src="../js/script.js"></script>
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />

      <link type="text/css" rel="stylesheet" href="../css/Layout.css"  media="screen,projection"/>
    <link  rel ="icon"  href = "../imagens/almox.ico"  type = "imagem/x-icon" >
     <title>CAUTELAR</title>
</head>
<body class="bg_color">
  <?php 
  include("../class/conexao.class.php");
  //include("cautela.controller.php");
  
  $sql = "SELECT * FROM usuario WHERE nome  ='".$_SESSION['login']."'"; 
      //seta quem esta na sessão

  //print_r($_SESSION['login']); mostra oq tem na variável
    
  $sql = $pdo->query($sql); //executa a consulta da variavel
    
  if($sql->rowCount() > 0){
    
    //puxa todas os dados do usuario
    $result = $sql->fetch();
      
      //print_r($result['id_privilegio']);
    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
      if (!empty($_SESSION['emprestimo'])) {
        $emprestimo = $_SESSION['emprestimo'];
      }else{
        $emprestimo = '';
      }

      //SQL para seleciona os registros
      $produtos = "SELECT * FROM produtos ORDER BY nome_produto";//PRODUTOS
      $usuarios = "SELECT * FROM usuario ORDER BY nome";//USUÁRIOS

      //seleciona os registros
      $prod = $pdo->query($produtos);
      
      $lista_produtos = $prod->fetch(PDO::FETCH_ASSOC);

      //seleciona os registros
      $user = $pdo->query($usuarios);
      
     // print_r($lista_produtos);//ver oq tem dentro da variável
      //var_dump($lista_produtos);//ver os detalhes da variével

      echo "<form action='cautela.controller.php' method='post' oninput='result.value=parseInt(estoque.value)'>
                <a href='../principal.php'><h5><img src='../imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a><a href='index.php'> > EMPRESTIMOS</a><a href='cautela.php'> > RESERVAR EMPRESTIMO</h5></a>";
      //cautela
      echo "<div class='conteiner'>
                  <h3><img src='../imagens/produtos.jpg' alt='Logo' class='avatar'>Emprestimo de Materiais</h3><br>
                    <div class='header'>
                      <button type='button'>
                        <a href='cautela.controller.php'>
                          <img src='../imagens/add.ico' class='img'/>Adicionar
                        </a>
                      </button> 
                      <button type='button'>
                        <a href='cautela.controller.php'>
                          <img src='../imagens/arquivar.ico' class='img'>Salvar
                        </a>
                      </button>
                    </div>
                    <div class='row'>
                        <div class='col s8'>
                          <label> Nome </label> <br> 
                          <input name='requirente' type='text' required autofocus='true' pattern='[A-Z][a-z]{,20}'>
                        </div>
                            <div class='col s4 disabled'>
                                <label class='disabled'> Quantidade em estoque</label> <br> 
                                <input name='estoque' type='range' value='".$lista_produtos->qtd."' min='".$lista_produtos->qtd."' max='".$lista_produtos->qtd."'>
                                <output name='result' style='color:#ffffff;'></output>
                              </div>
                                <div class='col s8'>
                                  <label>
                                    <i class='material-icons right'>search</i>Material
                                  </label><br>
                                    <label for='material'>
                                      <input id='material' name='material' list='produto' type='text' required autofocus='true' pattern='[A-Z][a-z]{,20}'>
                                      <datalist id='produto'>";
                     while ($lista_produtos = $prod->fetch(PDO::FETCH_ASSOC)) {
                       echo            "<option value='".$lista_produtos->nome_produto."'>";
                     }

      echo                            "</datalist>
                                    </label>
                                </div>
                              <div class='col s4'>
                                <label> Quantidade a retirar </label> <br> 
                                <input name='quantidade' type='number' required maxlength='9' minlength='9'>
                              </div>
                      <div class='col s12'>
                        <table>
                          <thead>
                            <tr>
                              <td class='col s8'>Nome</td><td class='col s2'>Quantidade</td><td class='col s2'>Remover</td>
                            </tr>
                          </thead>
                          <tbody>";
      echo "                <tr>
                              <td class='col s10'>Total de materiais</td><td>".count($emprestimo)."</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      </div>
                </div>    
              </form>
            </div>";
          
            
    }else{
        header('location:../index.html');
    }  
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