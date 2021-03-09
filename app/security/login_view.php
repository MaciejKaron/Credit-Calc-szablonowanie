<?php require_once dirname(__FILE__) .'/../../config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sing Up</title>
	<link rel="stylesheet" href="http://localhost/Credit-Calc-szablonowanie/css/login.css">
</head>
<body>
	
<div class="login">
<form action="http://localhost/Credit-Calc-szablonowanie/app/security/login.php" method="post" class="pure-form pure-form-stacked">
    <input type="text" placeholder="Username" id="id_login" name="login" value=<?php out($form['login']) ?> >  
  <input type="text" placeholder="Password" id="id_pass" name="pass"  >  
  <input type="submit" value="Sign In">
</form>
</div>


<div class="errors">
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($err)) {
	if (count ( $err ) > 0) {
	echo '<ol class="err">';
		foreach ( $err as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
</div>

<div class="shadow"></div>

<div class="txt"><h1>pass:vip vip / user user</h1></div>

</body>
</html>



