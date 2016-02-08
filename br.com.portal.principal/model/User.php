<?php
class User{
	private $nome;
	private $email;
	private $senha;
	private $ativo;
	
	public function __construct($nome = null,$email = null,$senha = null, $ativo = null ){
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
		$this->ativo = $ativo;	
	}

	// setters e getters
    public function setNome ($nome) {
        $this->nome = $nome;
    }
	public function setEmail($email){
		$this->email =$email;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function setAtivo($ativo){
		$this->ativo = $ativo;
	}
	public function getNome () {
        return $this->nome;
    }
	public function getEmail(){
		return $this->email;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getAtivo(){
		return $this->ativo;
	}
	

}
	
	
	