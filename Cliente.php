<?php
class Cliente{
    private string $codigo;
    private string $nome;
    private string $senha;
    private Conta $conta;

    public function __construct($codigo,$nome,$senha,$conta){
        $this->definirCodigo($codigo);
        $this->definirNome($nome);
        $this->definirSenha($senha);
        $this->definirConta($conta);
    }

    public function definirCodigo(string $codigo){
        $this->codigo = $codigo;
    }

    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirSenha(string $senha){
        $this->senha = $senha;
    }

    public function definirConta(Conta $conta){
        $this->conta = $conta;
    }


    public function exibirCodigo(){
        return $this->codigo;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirSenha(){
        return $this->senha;
    }

    public function exibirConta(){
        return $this->conta;
    }
}
?>