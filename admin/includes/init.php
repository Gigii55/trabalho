<?php
	// init.php
	// Ficheiro de inicialização de configurações gerais
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	define('SITE_ROOT',ROOT.DS.'tcc-setif-medio-2023');
	define('SITE_ROOT_ADMIN',SITE_ROOT.DS.'admin');
	# 2º alternativa
	# define('SITE_ROOT',DS.'var'.DS.'www'.DS.'meu_site');
	define('LIB_CONTROLLER',SITE_ROOT_ADMIN.DS.'controller');
	define('LIB_DAO',SITE_ROOT_ADMIN.DS.'dao');
	define('LIB_MODEL',SITE_ROOT_ADMIN.DS.'model');
    define('LIB_INCLUDES',SITE_ROOT_ADMIN.DS.'includes');	
	define('LIB_IMG',SITE_ROOT.DS.'imagens');
?>