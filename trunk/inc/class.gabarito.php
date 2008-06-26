<?php
class gabarito{
	//referencia ao gabarito
	var $questao = array();
	var $oficial = array();
	var $comparacao = array();
	var $questaoStr = "";
	var $numero_de_questoes = 60;
	var $questoes_certas = 0;
	var $questoes_erradas= 0;
	 
	//referencia aos dados do aluno
	var $dadosStr = "";
	var $dados = array(); 
	
	function gabarito(){
	}
	
	function getFromStr($questoesStr){
		$this->questaoSqr = $questoesStr;
		for($i=0;$i<strlen($questoesStr);$i++){
			$this->questao[$i+1] = substr($questoesStr,$i,1);
		}
	}
	
	function setDados($dados){
		$this->dadosStr = $dados;
		$adados = array();
		$adados = explode(" ",$dados);
		$arraydados = array();
		for($i=0;$i<count($adados);$i++){
			if($adados[$i]!=""){
				$arraydados[] = $adados[$i];
			}
		}
		$this->dados = $arraydados;
	}
	
	function comparaComOficial($goficial){
		$this->oficial = $goficial->getQuestoes();
		for($i=1;$i<=$goficial->getQuantQuestoes();$i++){
			if($goficial->getQuestao($i)==" "){
				$this->comparacao[$i] = true;
				$this->putCerta();
			}else{
				if($goficial->getQuestao($i) == $this->getQuestao($i)){
					$this->comparacao[$i] = true;
					$this->putCerta();
				}else{
					$this->comparacao[$i] = false;
					$this->putErrada();
				}
			}
			
		}
	}
	
	function getResultado(){
		$result = $this->dadosStr."<br>";
		$result .= "Questões Certas: ".$this->getCertas()." :::::::::::::";
		$result .= "Questões Erradas: ".$this->getErradas()."<br>";
		$result .= "<table><tr>";
		for($i=1;$i<=$this->numero_de_questoes;$i++){
			$result .= "<td> ";
			$result .= $i;
			$result .= "</td> ";
		}
		$result .= "</tr><tr>";
		for($i=1;$i<=$this->numero_de_questoes;$i++){
			$result .= "<td> ";
			if($this->comparacao[$i]){
				$result .= $this->getQuestao($i)." ";
			}else{
				$result .= "<b>".$this->getQuestao($i)."</b> ";
			}
			
			$result .= "</td> ";
		}
		$result .= "</tr><tr>";
		for($i=1;$i<=$this->numero_de_questoes;$i++){
			$result .= "<td> ";
			$result .= $this->oficial[$i]." ";
			$result .= "</td> ";
		}
		$result .= "</tr></table>";
		return $result;
	}
	
	function getQuestao($i){
		return $this->questao[$i];
	}
	
	function putCerta(){
		if($this->questoes_certas<60){
			$this->questoes_certas++;
		}
	}
	function putErrada(){
		if($this->questoes_erradas<60){
			$this->questoes_erradas++;			
		}
	}
	function getCertas(){
		return $this->questoes_certas;
	}
	function getErradas(){
		return $this->questoes_erradas;
	}
	function getQuantQuestoes(){
		return $this->numero_de_questoes;
	}
	function getQuestoes(){
		return $this->questao;
	}
}


?>