<?php 
    session_start();

    require_once "conector.php";

    $obj = new Conectar();
    
    $conexion = $obj->conexion();

    $sql = "SELECT t_materias.nombreMateria, t_docentes.nombreDocente, t_materias.carrera, t_semestre.semestre, t_horarios.aula, t_horarios.idHorario FROM ((`t_horarios` INNER JOIN t_materias ON t_horarios.id_materia = t_materias.idMateria) INNER JOIN t_docentes ON t_horarios.idDocente = t_docentes.idDocentes) INNER JOIN t_semestre ON t_materias.m_semestre = t_semestre.idSemestre";

    $consulta = $conexion->prepare($sql);

    $consulta->execute();

    $resultado = $consulta->get_result();

    

    while($datos = $resultado->fetch_assoc()){
        $cont_dt['data'][]=$datos;
    };
    
    $datosJSON = json_encode($cont_dt, JSON_UNESCAPED_UNICODE);
    
    echo $datosJSON;

    $conexion->close();
?>