<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Rata kredytu</title>
<style>
    .form-row {
        margin-bottom: 10px; //odstęp między wierszami
    }
    .form-row label, .form-row input {
        display: inline-block; 
		width: 120px;
    }
</style>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<div class="form-row">
	<label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="x" value="<?php isset($x)?print($x):print(""); ?>" /><br />
	</div>
<div class="form-row">
	<label for="id_y">Liczba lat: </label>
	<input id="id_y" type="text" name="y" value="<?php isset($y)?print($y):print(""); ?>" /><br />
	</div>
	<div class="form-row">	
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php isset($z)?print($z):print(""); ?>" /><br />
	</div>
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>