<?php
class Medicacao{
    private $nome_medicacao;
    private $codigo;
    private $nome_fabricante;
    private $controle;
    private $quantidade;
    private $preco;

    public function __construct($nome_medicacao,$nome_fabricante,$controle,$quantidade,$preco){
        $this->nome_medicacao = $nome_medicacao;       
        $this->nome_fabricante = $nome_fabricante;      
        $this->controle = $controle;      
        $this->quantidade = $quantidade;      
        $this->preco = $preco;      
      
    }
    public function getNome_medicacao(){
        return $this->nome_medicacao;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome_fabricante(){
        return $this->nome_fabricante;
    }
    public function getControle(){
        return $this->controle;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setNome_medicacao($nome_medicacao){
        $this->nome_medicacao = $nome_medicacao;
    }
    public function setCodigo(int $codigo){
        $this->codigo = $codigo;
    }
    public function setNome_fabricante($nome_fabricante){
        $this->nome_fabricante = $nome_fabricante;
    }
    public function setControle( $controle){
        $this->controle = $controle;
    }
    public function setQuantidade( $quantidade){
        $this->quantidade = $quantidade;
    }
    public function setPreco( $preco){
        $this->preco = $preco;
    }
}
?>