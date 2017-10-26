<?php
$argv[0];

$conexion=mysqli_connect("localhost", "root", "","test");
 
if(!$conexion){
 echo "no se ha podido conectar con el servidor".mysql_error();
}else{
    echo "hemos conectado al servidor"."\n";
}
asort($datos);
$sql="SELECT estudiante.cedula, estudiante.nombre, estudiante.apellidos ,carreras.codigo,matricula.fecha,matricula.hora
FROM (estudiante INNER JOIN estudiante_carrera ON estudiante.id = estudiante_carrera.id_estudiante) INNER JOIN carreras ON carreras.id = estudiante_carrera.id_carrera INNER JOIN matricula on matricula.id_estudiante = estudiante_carrera.id_estudiante;";
$result = mysqli_query($conexion,$sql); 
if (!$result) { 
    $message = 'Invalid query: ' . mysql_error() . " "; 
    $message = 'Whole query: ' . $sql;
    die($message); 
    } 
    if($argv[1]){
    	$fp = fopen("C:/xampp/htdocs/rally2/'".$argv[1]."'", "w");
    $texto = "Cedula; Nombre; Apellidos; Carrera; Fecha \n";
    fputs($fp,$texto);
    while ($row =mysqli_fetch_assoc($result)) { 
   
   $fp = fopen("C:/xampp/htdocs/rally2/'".$argv[1]."'", "a+");
   if(!$fp){
       echo"archivo no encontrado";
   }else{
     
     fputs($fp,$row["cedula"]."; ");
     fputs($fp,$row["nombre"]."; ");  
     fputs($fp,$row["apellidos"]."; "); 
     fputs($fp,$row["codigo"]."; "); 
     fputs($fp,$row["fecha"]."; "); 
     fputs($fp,$row["hora"]."; "); 
     fclose($fp);
   }
 }
}else{
	echo "No existe una archivo de salida";
    

    } 

    
    mysqli_close($conexion);