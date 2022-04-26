<?php

	class Cidade{
	 
		public $nome;
		public $estado;
		public $habitantes;
		public $producaoLixo;
    public $criminalidade;
		
		function __construct ($nome, $estado, $habitantes, $producaoLixo, $criminalidade)
		 {
		   $this->nome = $nome;
					$this->estado = $estado;
					$this->habitantes = $habitantes;
					$this->producaoLixo = $producaoLixo;
          $this->criminalidade = $criminalidade;
		 }
          
          public function setNome($nome) {
            $this->nome = $nome;
          }
          
          public function setEstado($estado) {
            $this->estado = $estado;
          }
          
          public function setHabitantes($habitantes) {
            $this->habitantes = $habitantes;
          }
          
          public function setProducaoLixo($producaoLixo) {
            $this->producaoLixo = $producaoLixo;
          }

          public function setCriminalidade($criminalidade) {
            $this->criminalidade = $criminalidade;
          }
		  
		  public function imprimir(){
            echo("Nome da Cidade: ".$this->nome."<br>");
            echo("Estado: ".$this->estado."<br>");
            echo("Número de Habitantes: ".$this->habitantes."<br>");
            echo("Produção diária de lixo em quilos: ".$this->producaoLixo."<br>");
            echo("Quantidade de crimes em um mês: ".$this->criminalidade."<br>");
        }
 }
?>