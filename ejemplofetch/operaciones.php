<?php
	class Calculadora{
		private $valor1;
		private $valor2;
		private $operacion;

		
		public function setValor1($v1){
			$this->valor1=$v1;
		}
		public function getValor1(){
			return $this->valor1;
		}
		public function setValor2($v2){
			$this->valor2=$v2;
		} 
		public function getValor2(){
			return $this->valor2;
		}
		public function setOperacion($ope){
			$this->operacion=$ope;
		} 
		public function getOperacion(){
			return $this->operacion;
		}

		public function sumar(){
			return $this->valor1 + $this->valor2;
		}
		public function restar(){
			return $this->valor1 - $this->valor2;
		}
	} 

	$objeto = new Calculadora;
	$objeto->setValor1($_POST['txtValor1']);
	$objeto->setValor2($_POST['txtValor2']);
	$objeto->setOperacion($_POST['operacion']);

	
	if ($objeto->getValor1()==='' || $objeto->getValor2()==='') {
		echo json_encode('vacio');
	}else{
		if ($objeto->getOperacion()==='suma') {
			
			echo json_encode('<br> hola la respuesta a la La suma es: ' . $objeto->sumar());	
		}
		if ($objeto->getOperacion()==='resta') {
			echo json_encode('<br>La resta es: '. $objeto->restar());	
		}
	
	}

	

?>