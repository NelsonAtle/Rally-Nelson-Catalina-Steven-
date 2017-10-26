<?php
class estudiante{
	var $id;
	var $name;
	var $lastname;
    var $cedula;

	function set_id($id){
		$this->id=$id;
	}

	function get_id(){
		return $this->id;
	}

	function set_name($name){
		$this->name=$name;
	}

	function get_name(){
		return $this->name;
	}

	function set_last($last){
		$this->lastname=$last;
	}

	function get_last(){
		return $this->lastname;
	}
    
    function set_cedula($cedula){
		$this->cedula=$cedula;
	}

	function get_cedula(){
		return $this->cedula;
	}
}
