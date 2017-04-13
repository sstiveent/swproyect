<?php
require_once("Establecimiento.php");
require_once("Interes.php");
require_once("Foto.php");
class Plan{
	private $idPLan;
	private $establecimiento;
	private $nombre;
	private $valor;
	private $descuento;
	private $fechaInicialDescuento;
	private $fechaFinalDescuento;
	private $fechaInicialDisponibilidad;
	private $fechaFinalDisponibilidad;
    private $interes;
    private $foto;

	function __construct()
	{
		
	}


    /**
     * Gets the value of idPLan.
     *
     * @return mixed
     */
    public function getIdPLan()
    {
        return $this->idPLan;
    }

    /**
     * Sets the value of idPLan.
     *
     * @param mixed $idPLan the id plan
     *
     * @return self
     */
    public function _setIdPLan($idPLan)
    {
        $this->idPLan = $idPLan;

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
     * Gets the value of valor.
     *
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Sets the value of valor.
     *
     * @param mixed $valor the valor
     *
     * @return self
     */
    public function _setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Gets the value of descuento.
     *
     * @return mixed
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Sets the value of descuento.
     *
     * @param mixed $descuento the descuento
     *
     * @return self
     */
    public function _setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Gets the value of fechaInicialDescuento.
     *
     * @return mixed
     */
    public function getFechaInicialDescuento()
    {
        return $this->fechaInicialDescuento;
    }

    /**
     * Sets the value of fechaInicialDescuento.
     *
     * @param mixed $fechaInicialDescuento the fecha inicial descuento
     *
     * @return self
     */
    public function _setFechaInicialDescuento($fechaInicialDescuento)
    {
        $this->fechaInicialDescuento = $fechaInicialDescuento;

        return $this;
    }

    /**
     * Gets the value of fechaFinalDescuento.
     *
     * @return mixed
     */
    public function getFechaFinalDescuento()
    {
        return $this->fechaFinalDescuento;
    }

    /**
     * Sets the value of fechaFinalDescuento.
     *
     * @param mixed $fechaFinalDescuento the fecha final descuento
     *
     * @return self
     */
    public function _setFechaFinalDescuento($fechaFinalDescuento)
    {
        $this->fechaFinalDescuento = $fechaFinalDescuento;

        return $this;
    }

    /**
     * Gets the value of fechaInicialDisponibilidad.
     *
     * @return mixed
     */
    public function getFechaInicialDisponibilidad()
    {
        return $this->fechaInicialDisponibilidad;
    }

    /**
     * Sets the value of fechaInicialDisponibilidad.
     *
     * @param mixed $fechaInicialDisponibilidad the fecha inicial disponibilidad
     *
     * @return self
     */
    public function _setFechaInicialDisponibilidad($fechaInicialDisponibilidad)
    {
        $this->fechaInicialDisponibilidad = $fechaInicialDisponibilidad;

        return $this;
    }

    /**
     * Gets the value of fechaFinalDisponibilidad.
     *
     * @return mixed
     */
    public function getFechaFinalDisponibilidad()
    {
        return $this->fechaFinalDisponibilidad;
    }

    /**
     * Sets the value of fechaFinalDisponibilidad.
     *
     * @param mixed $fechaFinalDisponibilidad the fecha final disponibilidad
     *
     * @return self
     */
    public function _setFechaFinalDisponibilidad($fechaFinalDisponibilidad)
    {
        $this->fechaFinalDisponibilidad = $fechaFinalDisponibilidad;

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