<?php
require_once("../model/Plan.php");
require_once("config.php");
/**
* Clase PlanDAO, maneja la conexion y la interaccion con la base de Datos así,
* manejando los datos que se almacenan en la base de datos, como el CRUD
* Ejecuatando las consultas y extrayendo los datos correctos y filtrados desde la base de datos
*/
class PlanDAO{
    /**
    * Funcion Constructor PlanDAO
    * 
    */
    public function __construct()
    {

    }
    /**
    * Metodo que lista los planes que son mas recomendados para el usuario dado por los intereses que este tenga
    */
    public function listarPlanesRecomendados($idUsuario){
        global $db;
        $usuario= $db->proteger($idUsuario);
        $sql1="SELECT `Interes_idInteres` idInteres FROM `Usuario_has_Interes` WHERE `Usuario_has_Interes` .`Usuario_idUsuario` = ".$usuario.";";
        $result1=  $db->ejecutarConsulta($sql1);
        $whereIntereses="";
        while ($fila = $db->obtenerFila($result1)){
            $whereIntereses .= " OR `Plan_has_Interes`.`Interes_idInteres` =".$fila['idInteres']." ";			
        }
        $sql2="SELECT COUNT(*) num, 
        `idPlan` idPlan, 
        `Establecimiento`.`nombre` nombreEstablecimiento,
        `Plan`.`nombre` nombrePlan,
        `Plan`.`valor` valor,
        `Plan`.`descuento` descuento,
        `Plan`.`descripcion` descripcion,
        `Foto`.`url`
        FROM `Plan` 
        INNER JOIN `Plan_has_Interes` ON `Plan`.`idPlan` = `Plan_has_Interes`.`Plan_idPlan`
        INNER JOIN `Establecimiento`ON `Establecimiento`.`idEstablecimiento` = `Plan`.`Establecimiento`
        INNER JOIN `Plan_has_Foto` ON `Plan`.`idPlan` = `Plan_has_Foto`.`Plan_idPlan` 
        INNER JOIN `Foto` ON `Plan_has_Foto`.`Foto_idFoto` = `Foto`.`idFoto`
        WHERE 1=1 
        ".$whereIntereses." GROUP BY `idPlan` ORDER BY `num` DESC";
        $result2=  $db->ejecutarConsulta($sql2);
        $planes = array();
        while ($fila = $db->obtenerFila($result2))
        {   
            $plan = array('idPlan' => $fila['idPlan'] ,
                'nombreEstablecimiento' => $fila['nombreEstablecimiento'],
                'nombrePlan' => $fila['nombrePlan'],
                'valor' => $fila['valor'],
                'descripcion' => $fila['descripcion'],
                'descuento' => $fila['descuento'],
                'img' => $fila['url'] );
            array_push($planes, $plan);
        }
        return $planes;
    }
    /**
    *	Metodo que Busca los Planes recomendados de los usuarios
    */
    public function buscarPlanesRecomendados($idUsuario, $busqueda){
        global $db;
        $usuario= $db->proteger($idUsuario);
        $buscar = $db->proteger($busqueda);
        $keys= explode(" ", $buscar);
        $sql1="SELECT `Interes_idInteres` idInteres FROM `Usuario_has_Interes` WHERE `Usuario_has_Interes` .`Usuario_idUsuario` = ".$usuario.";";
        $result1=  $db->ejecutarConsulta($sql1);
        $whereIntereses="";

        while ($fila = $db->obtenerFila($result1)){
            $whereIntereses .= " OR `Plan_has_Interes`.`Interes_idInteres` =".$fila['idInteres']." ";
        }
        $primero=true;
        $whereBusqueda ="";
        if(sizeof($keys)>1){
            foreach ($keys as $valor) {
                if(strlen($valor)>2){
                    if($primero)
                        $whereBusqueda = " `Establecimiento`.`nombre` LIKE '%".$valor."%'  OR `Plan`.`nombre` LIKE '%".$valor."%'  OR `Plan`.`descripcion` LIKE '%".$valor."%'";
                    else
                        $whereBusqueda .= " OR `Establecimiento`.`nombre` LIKE '%".$valor."%'  OR `Plan`.`nombre` LIKE '%".$valor."%'  OR `Plan`.`descripcion` LIKE '%".$valor."%'";
                    $primero = false;
                }
            }
        }else{
            $whereBusqueda = " `Establecimiento`.`nombre` LIKE '%".$keys[0]."%'  OR `Plan`.`nombre` LIKE '%".$keys[0]."%'  OR `Plan`.`descripcion` LIKE '%".$keys[0]."%'";
        }
        $sql2="SELECT COUNT(*) num, 
        `idPlan` idPlan, 
        `Establecimiento`.`nombre` nombreEstablecimiento,
        `Plan`.`nombre` nombrePlan,
        `Plan`.`valor` valor,
        `Plan`.`descuento` descuento,
        `Plan`.`descripcion` descripcion,
        `Foto`.`url`
        FROM `Plan` 
        INNER JOIN `Plan_has_Interes` ON `Plan`.`idPlan` = `Plan_has_Interes`.`Plan_idPlan`
        INNER JOIN `Establecimiento`ON `Establecimiento`.`idEstablecimiento` = `Plan`.`Establecimiento`
        INNER JOIN `Plan_has_Foto` ON `Plan`.`idPlan` = `Plan_has_Foto`.`Plan_idPlan` 
        INNER JOIN `Foto` ON `Plan_has_Foto`.`Foto_idFoto` = `Foto`.`idFoto`
        WHERE (
        ".$whereBusqueda."
        ) AND
        (1=1 ".$whereIntereses.") GROUP BY `idPlan` ORDER BY `num` DESC";
        $result2=  $db->ejecutarConsulta($sql2);
        $planes = array();
        while ($fila = $db->obtenerFila($result2))
        {   
            $plan = array('idPlan' => $fila['idPlan'] ,
                'nombreEstablecimiento' => $fila['nombreEstablecimiento'],
                'nombrePlan' => $fila['nombrePlan'],
                'valor' => $fila['valor'],
                'descripcion' => $fila['descripcion'],
                'descuento' => $fila['descuento'],
                'img' => $fila['url'] );
            array_push($planes, $plan);
        }
        return $planes;
    }

    public function obtenerPlan($idPlan){
        global $db;
        $plan= $db->proteger($idPlan);
        $sql1="SELECT `Plan`.`nombre` nombrePlan,
        `valor`, `descuento`,
        `descripcion`,
        `Establecimiento`.`nombre` nombreEstablecimiento, `direccion`,
        `email_publico`,
        `url`,
        `alt` 
        FROM `Plan` INNER JOIN `Establecimiento` ON `Plan`.`Establecimiento` = `Establecimiento`.`idEstablecimiento` 
        INNER JOIN `Plan_has_Foto` ON `Plan`.`idPlan` = `Plan_has_Foto`.`Plan_idPlan` 
        INNER JOIN `Foto` ON `Plan_has_Foto`.`Foto_idFoto` = `Foto`.`idFoto` WHERE `Plan` .`idPlan` = ".$idPlan.";";
        $result=  $db->ejecutarConsulta($sql1);
        if($fila=$db->obtenerFila($result)){
            $alt =  !is_null($fila['alt'])?$fila['alt']:"";
            $response = array(
                'nombrePlan'=>$fila[0],
                'valor'=>$fila[1],
                'descuento'=>$fila[2],
                'descripcion'=>$fila[3],
                'nombreEstablecimiento'=>$fila[4],
                'direccion'=>$fila[5],
                'email'=>$fila[6],
                'url'=>$fila[7],
                'alt'=>$alt
                );
            return $response;
        }else {
            return 0;
        }
    }

    public function comentarPlan($idPlan, $idUsuario, $comentario){
        global $db;
        $idPlanP = $db->proteger($idPlan);
        $idUsuarioP = $db->proteger($idUsuario);
        $comentarioP = $db->proteger($comentario);
        $sql= "SELECT * FROM `Calificacion` WHERE `Usuario` = ".$idUsuarioP." AND `Plan` = ".$idPlanP."";
        $result=  $db->ejecutarConsulta($sql);
        if($result && $db->numeroFilas($result) == 0){
            $sql2 = "INSERT INTO `Calificacion` (`idCalificacion`, `Plan`, `Usuario`, `calificacion`, `comentario`) VALUES (NULL, '".$idPlan."', '".$idUsuarioP."', NULL, '".$comentarioP."');";
        }else{
            $sql2 = "UPDATE `Calificacion` SET `comentario` = '".$comentarioP."' WHERE `Calificacion`.`Plan` = ".$idPlanP." AND `Calificacion`.`Usuario` = ".$idUsuario.";"	;
        }
        $result2 = $db->ejecutarConsulta($sql2);
        return $result2?1:-1;
    }

    public function calificarPlan($idPlan, $idUsuario, $calificacion){
        global $db;
        $idPlanP = $db->proteger($idPlan);
        $idUsuarioP = $db->proteger($idUsuario);
        $calificacionP = $db->proteger($calificacion);
        $sql= "SELECT * FROM `Calificacion` WHERE `Usuario` = ".$idUsuarioP." AND `Plan` = ".$idPlanP."";
        $result=  $db->ejecutarConsulta($sql);
        if($result && $db->numeroFilas($result) == 0){
            $sql2 = "INSERT INTO `Calificacion` (`idCalificacion`, `Plan`, `Usuario`, `calificacion`, `comentario`) VALUES (NULL, '".$idPlan."', '".$idUsuarioP."', '".$calificacionP."', NULL);";
        }else{
            $sql2 = "UPDATE `Calificacion` SET `calificacion` = '".$calificacionP."' WHERE `Calificacion`.`Plan` = ".$idPlanP." AND `Calificacion`.`Usuario` = ".$idUsuario.";"	;
        }
        $result2=  $db->ejecutarConsulta($sql2);
        return $result2?1:-1;
    }

    public function obtenerCalificacionPlan($idPlan){
        global $db;
        $idPlanP = $db->proteger($idPlan);
        $sql = "SELECT AVG(`Calificacion`.`calificacion`), COUNT(`Calificacion`.`calificacion`) FROM `Calificacion` INNER JOIN `Plan` ON `Plan`.`idPlan` = `Calificacion`.`Plan` WHERE `Plan`.`idPlan` = ".$idPlanP.";";
        $result = $db->ejecutarConsulta($sql);
        $fila = $db->obtenerFila($result);
        $calificacion = round($fila[0]);
        $estrellas =array();
        for ($i=0; $i < $calificacion; $i++) { 
            $estrella="&#9733;";
            array_push($estrellas, $estrella);
        }
        return array('estrellas' => $estrellas, 'totalVotos' => $fila[1]);
    }

    public function obtenerCalificacionUsuario($idPlan, $idUsuario){
        global $db;
        $idPlanP = $db->proteger($idPlan);
        $idUsuarioP = $db->proteger($idUsuario);
        $sql ="SELECT `calificacion` FROM `Calificacion` WHERE `Usuario` = ".$idUsuarioP." AND `Plan` = ".$idPlanP.";";

        $result = $db->ejecutarConsulta($sql);
        $fila = $result?$db->obtenerFila($result):null;
        return !is_null($fila)?$fila[0]:0;
    }

    public function obtenerComentariosPlan($idPlan){
        global $db;
        $idPlanP= $db->proteger($idPlan);
        $sql ="SELECT `comentario`, `Usuario`.`nombre` 
        FROM `Calificacion` 
        INNER JOIN `Usuario` ON `Usuario`.`idUsuario` = `Calificacion`.`Usuario`
        WHERE `Calificacion`.`Plan` = ".$idPlanP." AND `comentario` IS NOT NULL;";

        $result = $db->ejecutarConsulta($sql);
        $comentarios = array();
        while($fila= $db->obtenerFila($result)){
            $comentario = array('nombre' => $fila[1],
                'comentario' => $fila[0]);
            array_push($comentarios, $comentario);
        }
        return $comentarios;
    }
}
?>