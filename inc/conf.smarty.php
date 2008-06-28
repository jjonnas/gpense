<?php
/**
Arquivo de configura��es basicas do Smarty
Contem todas as declara��es basicas para o funcionamento da engine smarty
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

//configura��o de exibi��o do debug [1:debugar][0:n�o debugar]
$smarty->debugging = 0;

//criando uma pagina apartir do objeto smarty
$pagina = $smarty;

//adi��o da variavel template as templates smarty
$pagina->assign("template",$template);

?>