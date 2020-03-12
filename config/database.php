<?php

class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'restomelly'
	];

	public function data(){
		return $this->db;
	}
}