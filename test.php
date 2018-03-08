<?php
	// echo "string";
	// die;
	include 'number.php';
	
	$number = new number();
	$numA = 0;
	$numB = 0;
	// if (isset($_POST["numA"]) && isset($_POST["numB"]) && isset($_POST["select"]))) {
		
		$numA = $_POST["numA"];

		$numB = $_POST["numB"];

		$select = $_POST["select"];

		if (is_numeric($numA) && is_numeric($numB)) {
			$number->setNumA($numA);
			$number->setNumB($numB);
			switch ($select) {
				case 'add':
					$result = $number->add($numA, $numB);
					$selectOption = $_POST["select"];
					break;
				case 'sub':
					$result = $number->sub($numA, $numB);
					$selectOption = $_POST["select"];
					break;
			}
		}

	// }

?>