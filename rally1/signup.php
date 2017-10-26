<?php
include("estudiante.php");
include("est_carrera.php");
include("matricula.php");
  if($_POST) {
    $estudiante = new estudiante();
    $est_carr = new est_carrera();
    $matricula = new matricula();
    $estudiante->set_name($_REQUEST['name']);
    $estudiante->set_last($_REQUEST['lastname']);
    $estudiante->set_cedula($_REQUEST['cedula']);
    $est_carr->set_id_estudiante($_REQUEST['cedula']);
    $est_carr->set_id_carrera($_REQUEST['scarrera']);
    
    date_default_timezone_set('America/Costa_Rica');
    $fecha = date("Y-m-d H:i:s");
    
    $matricula->set_fecha($fecha);

    $connection = mysqli_connect('localhost', 'root', '', 'test');

    $sql = "INSERT INTO estudiante(`cedula`, `nombre`, `apellidos`) VALUES ('".$estudiante->get_cedula()."','".$estudiante->get_name()."', '".$estudiante->get_last()."')";

    mysqli_query($connection, $sql);

    $id=mysqli_insert_id($connection);

    $sql = "INSERT INTO estudiante_carrera(`id_estudiante`, `id_carrera`) VALUES ( $id,'".$est_carr-> get_id_carrera()."')";

    mysqli_query($connection, $sql);

    
    $sql =" INSERT INTO `matricula`( `id_estudiante`, `fecha`) VALUES ($id,'".$matricula-> get_fecha()."')";
    mysqli_query($connection, $sql);

    mysqli_close($connection);
    header('Location: /pages/?status=success');
  } else {
    header('Location: /pages/?status=error');
  }




