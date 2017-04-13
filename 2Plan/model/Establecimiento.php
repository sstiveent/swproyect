<?php
require_once("Foto.php");
class Establecimiento {
	private $idEstablecimiento;
	private $nombre;
	private $dirección;
	private $emailPrivado;
	private $emailPublico;
	private $password;
	private $foto;


	public function __construct()
	{
		
	}


    /**
     * Gets the value of idEstablecimiento.
     *
     * @return mixed
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Sets the value of idEstablecimiento.
     *
     * @param mixed $idEstablecimiento the id establecimiento
     *
     * @return self
     */
    public function _setIdEstablecimiento($idEstablecimiento)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Gets the value of nombre.
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the value of nombre.
     *
     * @param mixed $nombre the nombre
     *
     * @return self
     */
    public function _setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Gets the value of dirección.
     *
     * @return mixed
     */
    public function getDirección()
    {
        return $this->dirección;
    }

    /**
     * Sets the value of dirección.
     *
     * @param mixed $dirección the dirección
     *
     * @return self
     */
    public function _setDirección($dirección)
    {
        $this->dirección = $dirección;

        return $this;
    }

    /**
     * Gets the value of emailPrivado.
     *
     * @return mixed
     */
    public function getEmailPrivado()
    {
        return $this->emailPrivado;
    }

    /**
     * Sets the value of emailPrivado.
     *
     * @param mixed $emailPrivado the email privado
     *
     * @return self
     */
    public function _setEmailPrivado($emailPrivado)
    {
        $this->emailPrivado = $emailPrivado;

        return $this;
    }

    /**
     * Gets the value of emailPublico.
     *
     * @return mixed
     */
    public function getEmailPublico()
    {
        return $this->emailPublico;
    }

    /**
     * Sets the value of emailPublico.
     *
     * @param mixed $emailPublico the email publico
     *
     * @return self
     */
    public function _setEmailPublico($emailPublico)
    {
        $this->emailPublico = $emailPublico;

        return $this;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    public function _setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets the value of foto.
     *
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Sets the value of foto.
     *
     * @param mixed $foto the foto
     *
     * @return self
     */
    public function _setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }
}


?>