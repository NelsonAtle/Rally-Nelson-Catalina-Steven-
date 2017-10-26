<?php
class matricula{
	var $id;
	var $fecha;
    var $estudiante;

	function set_id($id){
		$this->id=$id;
	}

	function get_id(){
		return $this->id;
	}


	function set_fecha($fecha){
		$this->fecha=$fecha;
	}

	function get_fecha(){
		return $this->fecha;
	}
    
    function set_estudiante($estudiante){
		$this->estudiante=$estudiante;
	}

	function get_estudiante(){
		return $this->estudiante;
	}
}
