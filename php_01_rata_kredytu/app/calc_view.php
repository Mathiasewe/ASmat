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
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php isset($kwota)?print($kwota):print(""); ?>" /><br />
	</div>
<div class="form-row">
	<label for="id_liczba_lat">Liczba lat: </label>
	<input id="id_liczba_lat" type="text" name="liczba_lat" value="<?php isset($liczba_lat)?print($liczba_lat):print(""); ?>" /><br />
	</div>
	<div class="form-row">	
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php isset($oprocentowanie)?print($oprocentowanie):print(""); ?>" /><br />
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
<?php echo 'Miesieczna rata: '.$zaokraglona; ?>
</div>
<?php } ?>

</body>
</html>