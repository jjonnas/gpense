<?php

require_once("main.php");

$indice = array();
for($i=0;$i<60;$i++){
	$indice[$i] = $i;
}

$pagina->assign("indice", $indice);

//$pagina->display("gabarito.input.tpl");
$pagina->display("gabarito.radio.tpl");
?>