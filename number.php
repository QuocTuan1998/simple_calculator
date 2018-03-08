<?php

	/**
	* 
	*/
	class Number{
		
		var $numA;
		var $numB;

		function getNumA() {
			return $this->numA;
		}

		function getNumB() {
			return $this->numB;
		}

		function setNumA($value) {
			$this->numA = $value;
		}

		function setNumB($value) {
			$this->numB = $value;
		}

		function add($numA, $numB) {
			return $numA + $numB;
		}

		function sub($numA, $numB) {
			return $numA - $numB;
		}

	}

?>