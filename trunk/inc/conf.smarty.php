<?php
/**
Arquivo de configuraчѕes basicas do Smarty
Contem todas as declaraчѕes basicas para o funcionamento da engine smarty
criado em 23/05/2008
*/

//incluindo a classe smarty no projeto
require_once("smarty/Smarty.class.php");

//instanciando um objeto smarty
$smarty = new Smarty;

//configurando diretorios necessarios ao smarty
$smarty->template_dir = "templates/$template/";
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'inc/';
$smarty->cache_dir = 'cache/';

//delimitadores para as variaveis smarty {$variavel}
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';

//configuraчуo de exibiчуo do debug [1:debugar][0:nуo debugar]
$smarty->debugging = 0;

//criando uma pagina apartir do objeto smarty
$pagina = $smarty;

//adiчуo da variavel template as templates smarty
$pagina->assign("template",$template);

?>