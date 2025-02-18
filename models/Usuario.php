<?php

class Usuario {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
  

	public function getId() : int {
		return $this->id;
	}

	public function setId(int $value) {
		$this->id = $value;
	}

	public function getNome() : string {
		return $this->nome;
	}

	public function setNome(string $value) {
		$this->nome = $value;
	}

	public function getEmail() : string {
		return $this->email;
	}

	public function setEmail(string $value) {
		$this->email = $value;
	}

	public function getSenha() : string {
		return $this->senha;
	}

	public function setSenha(string $value) {
		$this->senha = $value;
	}

}