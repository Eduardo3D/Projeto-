<?php

class Ajuda{
    private string $id_usuario;
    private string $comentario;
    private bool $ativo;


	public function getAtivo()
	{
		return $this->ativo;
	}

	public function setAtivo($ativo) {
		
		if ($ativo === null) {
			$this->ativo = false; 
		} elseif (is_bool($ativo)) {
			$this->ativo = $ativo; 
		} else {

			$this->ativo = false;
		}
	}
	

	public function getComentario()
	{
		return $this->comentario;
	}

	public function setComentario($comentario)
	{
		$this->comentario = $comentario;
	}

	public function getId_usuario()
	{
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario)
	{
		$this->id_usuario = $id_usuario;
	}
}