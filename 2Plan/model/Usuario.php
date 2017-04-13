<?php
require_once("Interes.php");
class Usuario {
	private $idUsuario;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
	private $idGoogle;
	private $idFacebook;
	private $email;
	private $referido;
	private $interes;


	public function __construct()
	{
		
	}



    /**
     * Gets the value of idUsuario.
     *
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Sets the value of idUsuario.
     *
     * @param mixed $idUsuario the id usuario
     *
     * @return self
     */
    public function _setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

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
     * Gets the value of apellido.
     *
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Sets the value of apellido.
     *
     * @param mixed $apellido the apellido
     *
     * @return self
     */
    public function _setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Gets the value of fechaNacimiento.
     *
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Sets the value of fechaNacimiento.
     *
     * @param mixed $fechaNacimiento the fecha nacimiento
     *
     * @return self
     */
    public function _setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Gets the value of idGoogle.
     *
     * @return mixed
     */
    public function getIdGoogle()
    {
        return $this->idGoogle;
    }

    /**
     * Sets the value of idGoogle.
     *
     * @param mixed $idGoogle the id google
     *
     * @return self
     */
    public function _setIdGoogle($idGoogle)
    {
        $this->idGoogle = $idGoogle;

        return $this;
    }

    /**
     * Gets the value of idFacebook.
     *
     * @return mixed
     */
    public function getIdFacebook()
    {
        return $this->idFacebook;
    }

    /**
     * Sets the value of idFacebook.
     *
     * @param mixed $idFacebook the id facebook
     *
     * @return self
     */
    public function _setIdFacebook($idFacebook)
    {
        $this->idFacebook = $idFacebook;

        return $this;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    public function _setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the value of referido.
     *
     * @return mixed
     */
    public function getReferido()
    {
        return $this->referido;
    }

    /**
     * Sets the value of referido.
     *
     * @param mixed $referido the referido
     *
     * @return self
     */
    public function _setReferido($referido)
    {
        $this->referido = $referido;

        return $this;
    }

    /**
     * Gets the value of interes.
     *
     * @return mixed
     */
    public function getInteres()
    {
        return $this->interes;
    }

    /**
     * Sets the value of interes.
     *
     * @param mixed $interes the interes
     *
     * @return self
     */
    public function _setInteres($interes)
    {
        $this->interes = $interes;

        return $this;
    }
}
?>