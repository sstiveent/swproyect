<?php

/**
* Clase Foto, la cual representa las imagenes de Establecimientos, Intereses, Planes
*
*/
class Foto {
	private $idFoto; // Id o Codigo de Representación de la Foto o Imagen
	private $url; //Url, Direccion donde se almaceno la imagen
	private $alt;




    /**
    * Función Constructor de la Clase "Foto"
    *
    */
	public function __construct()
	{
		
	}



    /**
     * Gets the value of idFoto.
     *
     * @return mixed
     */
    public function getIdFoto()
    {
        return $this->idFoto;
    }

    /**
     * Sets the value of idFoto.
     *
     * @param mixed $idFoto the id foto
     *
     * @return self
     */
    public function _setIdFoto($idFoto)
    {
        $this->idFoto = $idFoto;

        return $this;
    }

    /**
     * Gets the value of url.
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the value of url.
     *
     * @param mixed $url the url
     *
     * @return self
     */
    public function _setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets the value of alt.
     *
     * @return mixed
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Sets the value of alt.
     *
     * @param mixed $alt the alt
     *
     * @return self
     */
    public function _setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }
}
?>