<?php
require_once("main.php");
$gabostr = $_POST["goficial"];
$gabaritos = $_POST["gabaritos"];
$gabaritooficial = new gabarito();
$gabaritooficial->getFromStr($gabostr);
$lines = explode("\n",$gabaritos);

$agabaritos = array();
foreach ($lines as $line_num => $line) {
	$dados 		= substr($line,0,50);
	$gab 	= substr($line,50,strlen($line)-50);
	$gabarito = new gabarito();
	$gabarito->setDados($dados);
	$gabarito->getFromStr($gab);
	$gabarito->comparaComOficial($gabaritooficial);
	$agabaritos[] = $gabarito->getResultado();
}
$pagina->assign("gabaritos",$agabaritos);
$pagina->display("resultado.tpl");
?>