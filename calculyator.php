<?php

$age = (int)$_POST['first'];
	    
		$d;
		if ($age >=18 && $age <=30) { 
		$d =  ('для молодежи') ;}
		else {
		$d =  ('для всех возрастов') ; }
		
		
	
    
	
?>
<form action="" method="post">
<input type="textbox" name="first" required>

<input type="submit" name="submit">
</form>
<?php
		echo $d;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>

<style>
  body { background: url(123/lednik_led_sneg_136034_3840x2160.jpg); background-size: cover } 

</style> 
	
</body>
</html>