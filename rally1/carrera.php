<?php
class carrera{
	var $id;
	var $name;
	var $code;

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

	function set_code($code){
		$this->code=$code;
	}

	function get_code(){
		return $this->code;
	}
}
