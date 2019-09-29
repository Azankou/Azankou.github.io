<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="textbox" name="name" required>

<input type="submit" name="submit">
</form>
<style>
  body { background: url(123/doroga_asfalt_les_148184_3840x2160.jpg); background-size: cover } 

</style>
</body>
</html>
<?php
$arr = array('<p><font size="10" color="White" face="Arial">Криминальное чтиво</font>.</p>', '<p><font size="10" color="White" face="Arial">Титаник</font>.</p>' , '<p><font size="10" color="White" face="Arial">Скуби ду</font>.</p>');
$qwerty = $_POST['name'];
 
if ($qwerty == 'боевик') {
	echo $arr[0];

} elseif ($qwerty == 'комедия') {
	echo $arr[2];
} elseif ($qwerty == 'драмма') {
	echo $arr[1];
}





?>
