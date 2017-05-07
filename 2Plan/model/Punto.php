<?php

/**
* Clase Punto, la cual representa el Punatje dado a un Establecimiento por una Usuario consumidor
*
*/
class Punto{
    private $codigo;   //Codigo o Id de respresentacion del Puntaje dado
    private $establecimiento;  //Establecimiento al cual se le da el Puntaje
    private $usuario;  //Usuario consumidor que se encuentra registrado en el aplicativo
    private $puntos; //puntaje dado por el Usuario al Establecimiento

    /**
    * Funcion Constructor de la Clase Punto
    *
    */
    public function __construct()
    {

    }


    /**
    * Gets the value of codigo.
    *
    * @return mixed
    */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
    * Sets the value of codigo.
    *
    * @param mixed $codigo the codigo
    *
    * @return self
    */
    public function _setCodigo($codigo)
    {
        $this->codigo = $codigo;

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
    * Gets the value of puntos.
    *
    * @return mixed
    */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
    * Sets the value of puntos.
    *
    * @param mixed $puntos the puntos
    *
    * @return self
    */
    public function _setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }   
}
?>