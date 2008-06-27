<?php

require_once("inc/class.file.php");
require_once("inc/class.gabarito.php");

$gaboficial = new file("gabaritos/gabaritooficial-1-a.dat");
$gabstr = $gaboficial->read();
$gabaritooficial = new gabarito();
$gabaritooficial->getFromStr($gabstr);

$lines = file ('gabaritos/cobaia.dat');

// Percorre o array, mostrando o fonte HTML com numeração de linhas.
foreach ($lines as $line_num => $line) {
	
	$dados 		= substr($line,0,50);
	$gab 	= substr($line,50,strlen($line)-50);
	$gabarito = new gabarito();
	$gabarito->setDados($dados);
	$gabarito->getFromStr($gab);
	$gabarito->comparaComOficial($gabaritooficial);
	$html = $gabarito->getResultado();
	echo $html."<br>";
    //echo "Linha #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n";
	/*
	echo "$gab<br>\n";
	echo "<pre>";
	var_dump($gabarito);
	echo "</pre>";
	*/
}

?>