<?php

class Filme {
    private int $id;
    private string $genero;
    private string $filme;
    private string $descricao;
    private string $diretor;
    private string $duracao;
    private string $estudante;
	private string $arquivo;

	public function getId() : int {
		return $this->id;
	}

	public function setId(int $value) {
		$this->id = $value;
	}

	public function getGenero() : string {
		return $this->genero;
	}

	public function setGenero(string $value) {
		$this->genero = $value;
	}

	public function getFilme() : string {
		return $this->filme;
	}

	public function setFilme(string $value) {
		$this->filme = $value;
	}

	public function getDescricao() : string {
		return $this->descricao;
	}

	public function setDescricao(string $value) {
		$this->descricao = $value;
	}

	public function getDiretor() : string {
		return $this->diretor;
	}

	public function setDiretor(string $value) {
		$this->diretor = $value;
	}

	public function getDuracao() : string {
		return $this->duracao;
	}

	public function setDuracao(string $value) {
		$this->duracao = $value;
	}

	public function getEstudante() : string {
		return $this->estudante;
	}

	public function setEstudante(string $value) {
		$this->estudante = $value;
	}

	public function getArquivo() : string {
		return $this->arquivo;
	}

	public function setArquivo(string $value) {
		$this->arquivo = $value;
	}
}