<?php

/**
* Clase BaseDatos, maneja la conexion y la interaccion con la base de Datos así,
* como las variable que se permitan para la conexión a la fuente de los Datos
*
*/
class BaseDatos
{
    private $servidor;  //Variable que Guarda el Servidor que maneja las conexiones y la interaccion
    private $puerto;    //Variable que maneja el puerto de conexion
    private $usuario;   //Usuario qye se conectara a la base de datos
    private $clave; //Clave o Contraseña que se requiere para la conexion a la base de datos
    private $dbName;    //Variable que representa la base de datos con la cual se va a interactuar
    private $conexion;  //conexion a la base de datos

    /**
    * Funcion Contructor de la Clase BaseDatos
    *
    */
    public function __construct($servidor, $puerto, $usuario, $clave, $dbName) {
        $this->servidor = $servidor;
        $this->puerto = $puerto;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->dbName = $dbName;
        $this->conexion = null;

    }

    // Conectar a la base de datos
    public function conectar() {
        $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->dbName);

        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }else{
            $charset = mysqli_set_charset ( $this->conexion , "utf8" );
        }



    }

    // Ejecutar una consulta
    public function ejecutarConsulta($consulta) {
        $this->conectar();
        $sql = $consulta;
        if ($resultado = mysqli_query($this->conexion, $sql)) {
            $this->desconectar();
            return $resultado;
        }else{
            $this->desconectar();
            return null;
        }
    }
    public function ejecutarMultiConsulta($consulta) {
        $this->conectar();
        $sql = $consulta;
        if ($resultado = mysqli_multi_query($this->conexion, $sql)) {
            $this->desconectar();
            return $resultado;
        }else{
            $this->desconectar();
            return null;
        }
    }
    // Traer el array de datos
    public function obtenerFila($resultado) {
        return mysqli_fetch_array($resultado);
    }

    // Traer cantidad de filas
    public function numeroFilas($resultado) {
        return mysqli_num_rows($resultado);
        //return $resultado->num_rows;
    }

    public function proteger($string) {
        $this->conectar();
        return mysqli_real_escape_string ($this->conexion , $string);
        $this->desconectar();
        

    }
    public function desconectar(){
        mysqli_close($this->conexion);
    }

    public function __destruct() {

    }
}
?>
