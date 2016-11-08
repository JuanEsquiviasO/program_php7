<?php 

class Padre {

	const GENERO = 'Masculino';

	protected $nombre = 'Roy';
	protected $apellido = 'Fokker';
	protected $secreto = 'Esto es secreto';
	protected $protegido = 'Esto es protegido';

	// public function getSecreto()
	// {
	// 	return $this->secreto;
	// }

	private function cosaPrivada()
	{
		//code;
		echo 'Cosa privada';
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}
}

