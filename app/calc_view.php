<?php require_once dirname(__FILE__) .'/../config.php';?>
<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>

<h2 class="content-head is-center">Credit Calculator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">
	<form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
			<label for="id_amount">Amount:</label>
			<input id="id_amount" type="text" placeholder="AMOUNT" name="amount" value=<?php out($form['amount']) ?> >		
			<label for="id_years">Years</label>
			<input id="id_years" type="text" placeholder="YEARS" name="years" value=<?php out($form['years']) ?> >
			<label for="id_percentages">Percentages:</label>
			<input id="id_percentages" type="text" placeholder="PERCENTAGES" name="percentages" value=<?php out($form['percentages']) ?> >
			<button class="pure-button" type="submit">Calculate</button>
		</form>
		</div>

<div class="l-box-lrg pure-u-1-2">

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>


<?php if (isset($result)){ ?>
	<h4>Wynik</h4>
	<p class="res">
<?php print($result); ?>
	</p>
<?php } ?>

</div>
</div>

<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>