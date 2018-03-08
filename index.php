<?php include 'test.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple calculator</title>
	<style type="text/css">
		input {
			margin-bottom: 10px;
			margin-left: 20px;
			width: 250px;
		}
		#result {
			margin-left: 45px;
		}
		#select {
			text-align: center;
			width: 265px;
			margin-bottom: 10px;
			margin-left: 25px;
		}
		#calculate {
			font-size: 18px;
			width: 270px;
			margin-left: 100px;
		}
		form {
			width: 500px;
			margin: 50px auto;
			padding: 20px;
			border: 5px solid #f20606;
			border-radius: 10px;
		}
		h2 {
			margin: 0 auto;
			width: 250px;
			margin-top: -40px;
			background: white;
		}
		.div {
			padding: 30px;
		}
	</style>
</head>
<body style="text-align: center;">
	<form method="post" >
		<h2>simple calculator</h2>
		<div class="div">
			number A<input type="text" name="numA" value="<?php echo $numA;?>"> <br>
			Operator<select id="select" name="select">
				<option value="add">Addition(+)</option>
				<option value="sub">Subtract(-)</option>
			</select><br>
			number B<input type="text" name="numB" value="<?php echo $numB;?>"><br>
			Result <input type="text" name="result" disabled value="<?php echo $result;?>" id="result"><br>
			<input type="submit" name="calculate" value="Calculate" id="calculate"><br>
		</div>
	</form>
</body>
</html>
