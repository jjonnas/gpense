<?php

require_once("main.php");

$tipo = $_GET['tipo'];

$indice = array();
for($i=1;$i<=60;$i++){
	$indice[$i] = $i;
}

$pagina->assign("indice", $indice);

//$pagina->display("gabarito.input.tpl");
$pagina->display("gabarito.$tipo.tpl");
?>