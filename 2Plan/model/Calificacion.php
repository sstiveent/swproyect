<?php
require_once("Usuario.php");    //Se requiere un Usuario para realizar la Calificacion
require_once("Establecimiento.php");    // Se requiere un Establecimiento al cual se le realiza una calificacion
/**
* Clase Calificacion, la cual representa un dato Calificativo con Comentario de un Usuario particular sobre un Establecimeinto
*
*/
class Calificacion{
	private $idCalificacion; // Id o Codigo de respresentacion de la Claificacion hecha
	private $usuario; //Usuario quien realiza dicha Calificacion
	private $establecimiento; //Establecimiento al cual se le realiza la calificacion
	private $Calificacion; //Calificacion hecha
	private $comentario; //Comentario realizado en la Calificacion

    /**
    * Funcion Constructor de la clase Calificacion
    *
    */
	public function __construct()
	{
		
	}



    /**
     * Gets the value of idCalificacion.
     *
     * @return mixed
     */
    public function getIdCalificacion()
    {
        return $this->idCalificacion;
    }

    /**
     * Sets the value of idCalificacion.
     *
     * @param mixed $idCalificacion the id calificacion
     *
     * @return self
     */
    public function _setIdCalificacion($idCalificacion)
    {
        $this->idCalificacion = $idCalificacion;

        return $this;
    }

    /**
     * Gets the value of usuario.
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Sets the value of usuario.
     *
     * @param mixed $usuario the usuario
     *
     * @return self
     */
    public function _setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Gets the value of establecimiento.
     *
     * @return mixed
     */
    public function getEstablecimiento()
    {
        return $this->establecimiento;
    }

    /**
     * Sets the value of establecimiento.
     *
     * @param mixed $establecimiento the establecimiento
     *
     * @return self
     */
    public function _setEstablecimiento($establecimiento)
    {
        $this->establecimiento = $establecimiento;

        return $this;
    }

    /**
     * Gets the value of Calificacion.
     *
     * @return mixed
     */
    public function getCalificacion()
    {
        return $this->Calificacion;
    }

    /**
     * Sets the value of Calificacion.
     *
     * @param mixed $Calificacion the calificacion
     *
     * @return self
     */
    public function _setCalificacion($Calificacion)
    {
        $this->Calificacion = $Calificacion;

        return $this;
    }

    /**
     * Gets the value of comentario.
     *
     * @return mixed
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Sets the value of comentario.
     *
     * @param mixed $comentario the comentario
     *
     * @return self
     */
    public function _setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }
}
?>