<?php 
	session_start(); //inicia a sessão

	//session_cache_expire(0);
	//$cache_expire = session_cache_expire();
 
	session_destroy(); //destroi sessão
 
	session_unset(); //limpa as variaveis globais das sessões

	//echo "sessão encerrada, para voltar ao CEEP ALMOX faça o login novamente";
	echo "<script>alert('Voce saiu!'); document.location.href='../index.html';</script>";
	//header('location: ../index.html');
	
 ?> 