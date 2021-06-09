<?php

class Estudiante {
	public function __construct($doc, $fName, $lName, $email, $age) {
		$this->doc = $doc;
		$this->firstName = $fName;
		$this->lastName = $lName;
		$this->email = $email;
		$this->age = $age;
	}
	public function calcularNotaFinal() {
		return "10/10";
	}
}
