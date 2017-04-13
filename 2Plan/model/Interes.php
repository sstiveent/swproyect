<?php
require_once("Foto.php");
class Interes{
	private $idInteres;
	private $nombre;
	private $foto;

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
    private function _setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }
}
?>