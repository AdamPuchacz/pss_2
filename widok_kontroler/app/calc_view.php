<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>
<?php 
if(!isset($kwota)) $kwota = "";
if(!isset($procent)) $procent = "";
if(!isset($lata)) $lata = "";
?>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">
		Kwota:
		<input id="id_x" type="number" name="kwota" value="<?php print($kwota); ?>" autocomplete="off"/><br />
	</label>
	<label>
		Procent:
		<input id="procent"	type="number" name="procent" value="<?php print($procent); ?>" autocomplete="off"/><br/>
	</label>
	<label for="id_y">
		Na ile lat: 
		<input id="id_y" type="number" name="lata" value="<?php print($lata); ?>" autocomplete="off"/><br />
	</label>
	<input type="submit" value="Oblicz ratę" />
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
<?php echo 'Wynik: '.$result.' zł'; ?>
</div>
<?php } ?>
<style>
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
  		margin: 0;
	}
</style>

</body>
</html>