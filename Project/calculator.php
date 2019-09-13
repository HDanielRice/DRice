<?php
$result = 0;
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$num1 = $_POST["num1"];
		$oprt = $_POST["oprt"];
		$num2 = $_POST["num2"];
			
	if($oprt == "+"){
		$result = $num1 + $num2;
	}
	
	elseif($oprt == "-"){
		$result = $num1 - $num2;
	}
	
	elseif($oprt == "/"){
		$result = $num1 / $num2;
	}
	
	elseif($oprt == "*" || $oprt == "x" || $oprt == "X"){
		$result = $num1 * $num2;
	}
	
	elseif($oprt == "%"){
		$result = $num1 % $num2;
	}
	
	}

?>

<!DOCTYPE html>
<head>
	<title>CALCULATOR</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<center>
		<h1>SIMPLE CALCULATOR</h1>


		<form method = "POST" action = "#">
			<div class = "text-center bold">
			<input type = "text" name = "num1" placeholder = "First number">
			</div>

			<div class = "text-center bold">
			<input type = "text" name = "oprt" placeholder = "Operator +,-,x,/,%">
			</div>

			<div class = "text-center bold">
			<input type = "text" name = "num2" placeholder = "Second number">
			</div>

			<div class = "text-center bold">
			<input type = "result" name = "result" placeholder = "<?=$result?>">
			</div>

			<br>
			<button type = "submit" class = "btn">Calculate</button>

			<div class = "footer">
			<P>&copy Rice 2019</p>
			</div>


		</form>
	</center>
</body>