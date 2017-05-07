<?php
require_once("Foto.php"); // Se requiere una Foto o Imagen representativa de cada interes en Particular
/**
* Clase Interes, la cual representa un interes en particular
*
*/
class Interes{
    private $idInteres;    //Id o Codigo de representacion de un interes en Particular
    private $nombre;   //Nombre que representa el Interes
    private $foto; // Foto o Imagen que representa el Interes


    /**
    * Funcion Constrcutor de la Clase Interes
    *
    */
    public function __construct()
    {

    }


    /**
    * Gets the value of idInteres.
    *
    * @return mixed
    */
    public function getIdInteres()
    {
        return $this->idInteres;
    }

    /**
    * Sets the value of idInteres.
    *
    * @param mixed $idInteres the id interes
    *
    * @return self
    */
    public function _setIdInteres($idInteres)
    {
        $this->idInteres = $idInteres;

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