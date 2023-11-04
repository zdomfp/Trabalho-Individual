<?php

class Conta{
    private $numero;
    private $nome;
    private $saldo;

    function __construct($numero,$nome,$saldo){ 
        $this->definirNumero($numero); 
        $this->definirNome($nome); 
        $this->definirSaldo($saldo); 
    }

    public function definirNumero($vlr){$this->numero = $vlr;} 
    public function retornarNumero(){return $this->numero.PHP_EOL;} 
    public function definirNome($vlr){$this->nome = $vlr;} 
    public function retornarNome(){return $this->nome.PHP_EOL;} 
    public function definirSaldo($vlr){$this->saldo = $vlr;} 
    public function retornarSaldo(){return 'R$'.$this->saldo.PHP_EOL;}

    public function retornarConta(){ 
        $this->retornarNumero(); 
        $this->retornarNome(); 
        $this->retornarSaldo(); 
    }
}
?>