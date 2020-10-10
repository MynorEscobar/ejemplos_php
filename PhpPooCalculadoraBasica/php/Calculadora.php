<?php
class Calculadora{
    private $valor1;
    private $valor2;

    public function getValor1(){
        return $this->valor1;
    }
    public function setValor1($valor1){
        $this->valor1=$valor1;
    }
    public function getValor2(){
        return $this->valor2;
    }
    public function setValor2($valor2){
        $this->valor2=$valor2;
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

if(isset($_POST['btnSuma'])){
    echo "la suma es: ", $objeto->sumar();
};

if(isset($_POST['btnResta'])){
    echo "la resta es:", $objeto->restar();
};

?>