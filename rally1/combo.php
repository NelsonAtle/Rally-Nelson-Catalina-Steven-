<?php
include('conexion.php'); 
include('carrera.php');
$carrera = new carrera();
$sql="SELECT*FROM carreras";
$result = mysqli_query($conexion,$sql);
echo "<script languaje= 'Javascript'>"; 

while ($row =mysqli_fetch_assoc($result)) { 
    $carrera->set_id($row["id"]);
    $carrera->set_name($row["nombre"]);
    $carrera->set_code($row["codigo"]);
     echo "
                var lista = document.createElement('option');
                atributo = document.createAttribute('value');
                atributo.value = '".$carrera->get_id()."';
                lista.innerHTML= '".$carrera->get_name()."';
                lista.setAttributeNode(atributo);
                atributo = document.createAttribute('name');
                atributo.value = '".$carrera->get_code()."';
                lista.setAttributeNode(atributo);
                
                
                ";
    echo "var contenido = document.querySelector('#combo');
          contenido.appendChild(lista);";
}
echo "</script>"; 