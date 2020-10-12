<?php

class UsuarioAfp{
	
	private $dni;
	private $cus;
	private $nomAfp;

	public function __construct($dni,$cus,$nomAfp)
	{
		$this->dni = $dni;
		$this->cus = $cus;
		$this->nomAfp = $nomAfp;
	}

	public function getDni()
	{
		return $this->dni;
	}

	public function setDni()
	{
		$this->dni = $dni;
		return $this;
	}

	public function getCus()
	{
		return $this->cus;
	}

	public function setCus()
	{
		$this->cus = $cus;
		return $this;
	}

	public function getNomAfp()
	{
		return $this->nomAfp;
	}

	public function setNomAfp()
	{
		$this->nomAfp = $nomAfp;
		return $this;
	}
}
?>