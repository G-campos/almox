 <?php
 //tentar
try {
  //faz a conexão
	$pdo = new PDO("mysql:dbname=almox;host=localhost", "root", "");
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $pdo;
	
} 
//senão
catch (PDOException $e) {
	echo "não foi dessa vez".$e->getMessage();
}

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
date_default_timezone_set('America/Sao_Paulo');
  
// inclui o arquivo de funçõees
require_once 'funcao.php';
?>

