<?php
class est_carrera{
	var $id;
	var $id_estudiante;
	var $id_carrera;

	function set_id($id){
		$this->id=$id;
	}

	function get_id(){
		return $this->id;
	}

	function set_id_estudiante($id_estudiante){
		$this->id_estudiante=$id_estudiante;
	}

	function get_id_estudiante(){
		return $this->id_estudiante;
	}

	function set_id_carrera($id_carrera){
		$this->id_carrera=$id_carrera;
	}

	function get_id_carrera(){
		return $this->id_carrera;
	}
    
}