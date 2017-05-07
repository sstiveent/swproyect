<?php

class Ciudad
{
    private $idCiudad;
    private $nombre;
    
    function __construct()
    {

    }

    /**
    * Gets the value of idCiudad.
    *
    * @return mixed
    */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
    * Sets the value of idCiudad.
    *
    * @param mixed $idCiudad the id ciudad
    *
    * @return self
    */
    public function _setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;

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
}
?>