<?php


class PagamentoU{
    private string $curso;
    private string $preco;
    private bool $numerocartao;


	public function getNumerocartao()
	{
		return $this->numerocartao;
	}

	public function setNumerocartao($numerocartao)
	{
		$this->numerocartao = $numerocartao;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function setPreco($preco)
	{
		$this->preco = $preco;
	}

	public function getCurso()
	{
		return $this->curso;
	}

	public function setCurso($curso)
	{
		$this->curso = $curso;
	}
}