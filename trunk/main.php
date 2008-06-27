<?php
/**
Arquivo basico para toda pagina do site!
Contem todas as funчѕes e variaveis que sуo necessarias para a criaчуo deste site.
Criado 23/05/2008
*/

//adiquirindo variaveis basicas
//require_once("conf.php");

//iniciando a session
require_once('inc/class.session.php');
$session = new session();

// idioma da aplicaчуo
//$lang = 'pt_BR';
/*
if(isset($_GET['lang'])){//usuario escolhe a linguagem.
	$lang = $_GET['lang'];
	$session->set_var('lang', $lang);
}else if($session->is_registered('lang')){//recuperando linguagem escolhida.
	$lang = $session->get_var('lang');
}else{//quando ninguem escolhe a linguagem, ir para linguagem padrуo.
	$lang = 'pt_BR';
	$session->set_var('lang', $lang);
}
*/

//require_once("inc/conf.i18n.php");

// template utilizado pelo smarty
$template = 'pense';

//adcionando smarty template engine
require_once("inc/conf.smarty.php");

//adcionando xajax
//require_once("inc/conf.xajax.php");


//Propel
// Initialize Propel using path to the converted
// property file that was created with the convert-props phing target
//require_once ("inc/propel.init.php");

//Captura as variaveis importantes ao site, como titulo, rodape, linguagem, etc...
require_once("inc/conf.site.php");

//internacionalizaчуo
//require_once("inc/class.i18n.php");
//$i18n = new i18n($lang);
//require_once($i18n->getDicPath());
//$i18n->toSmarty($pagina);

require_once("inc/class.file.php");
require_once("inc/class.gabarito.php");

?>