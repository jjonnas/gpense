<?php
require_once("main.php");
$sala = $_POST['sala'];
$gabostr = $_POST["goficial"];
$gabaritos = $_POST["gabaritos"];
$ordena = $_POST["ordena"];
$gabaritooficial = new gabarito();
$gabaritooficial->getFromStr($gabostr);
$lines = explode("\n",$gabaritos);

$agabaritos = array();
$aclassificacao = array();
$i = 1;
foreach ($lines as $line_num => $line) {
	$dados 		= substr($line,0,50);
	$gab 	= substr($line,50,strlen($line)-50);
	$gabarito = new gabarito();
	$gabarito->setDados($dados);
	$gabarito->getFromStr($gab);
	$gabarito->comparaComOficial($gabaritooficial);
	$gabarray = $gabarito->getResultado();
	$gabarray['classificacao'] = $i;
	$agabaritos[] = $gabarray;
	$i++;
}
if($ordena=="pontos"){
	// Obter uma lista de colunas
	foreach ($agabaritos as $key => $row) {
	    $classificacao[$key]  = $row['classificacao'];
	    $numero[$key] = $row['numero'];
		$pontos[$key] = $row['pontos'];
	}
	    // Ordena os dados com volume descendente, edition ascendente
	    // adiciona $data como o último parãmetro, para ordenar pela chave comum
	array_multisort($pontos, SORT_DESC, $numero, SORT_ASC, $classificacao, SORT_ASC, $agabaritos);
	for($i=0;$i<count($agabaritos);$i++){
		$agabaritos[$i]['classificacao'] = $i+1;
	}
}
$pagina->assign("sala", $sala);
$pagina->assign("gabaritos",$agabaritos);
$pagina->display("resultado.tpl");
?>