<?php
	require 'environment.php';
	
	$config = array();

	define ("NOME_SITE", "DDTIZA-ID");
	define ("NAME_TOKEN", "DDTIZAID");//sem espaço 
	define ("EMAIL_", "contato@3eprofissionalizante.com.br");
	define ("EMAIL_DEV", "desenvolvimento@3eprofissionalizante.com.br");
	define ("SENHA_DEV", "desenvolvimento@123");
	define ("HOST_MAIL", "mail.3eprofissionalizante.com.br");
	define ("TELEFONE_SUPORTE", "(31) 3840-9112");
	define ("NOME_SESSION", "ddtizaid");
	define ("ICON", "icon.png");
	define ("IMG_FUNDO", "1-YP-Biax952QfRqvTIkV4lg2.jpg");
	define ("COR_BASE", "#ff6f12");
	define ("COR_HOLVER", "#ea5f05");
	define ("COR_MARCACAO", "#d55a0b");
	define ("WEBSERVICE", '');
	define ("DOMINIO", "https://www.ddtizaid.com.br");
	define ("KEY_TOKEN", "1843562f1d1bb61f20e111984ada65ec");
	
	
	if(ENVIRONMENT == 'development'){
		define ("BASE_URL", "http://127.0.0.1:8080/ddtizaid");
		define ("LOCAL", "TRUE");

		$config['dbname'] = 'ddtizaid';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}elseif(ENVIRONMENT == 'production'){
		$teste = $_SERVER['HTTP_HOST'];
		$teste2 = explode('.', $teste);
		$teste3 = '';

		if($teste2[0] == 'tidobrasilhost'){
			$teste3 = 'tidobrasilhost';
		}else{
			$teste3 = 'www.tidobrasilhost';
		}

		define ("BASE_URL", "https://".$teste3.".com.br/ddtizaid");
		define ("LOCAL", "FALSE");

		//define ("BASE_URL", "http://www.tidobrasilhost.com.br/empresasantos");
		$config['dbname'] = 'basemodelo';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'basemodelo';
		$config['dbpass'] = 'ewR2&p61';
	}
	
	global $db;
	
	try{
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
	} catch(PDOException $e){
		echo "ERRO: ".$e->getMenssage();
		exit;	
	}
?>