<?php
require_once dirname(__FILE__).'/../../config.php';


function getParamsLogin(&$form){
	$form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}


function validateLogin(&$form,&$err){
	
	if ( ! (isset($form['login']) && isset($form['pass']))) {
		return false;
	}

	if ( $form['login'] == "") {
		$err [] = 'Nie podano loginu';
	}
	if ( $form['pass'] == "") {
		$err [] = 'Nie podano hasła';
	}


	if (count ( $err ) > 0) {
		return false;
	}
	
	
	
	if ($form['login'] == "vip" && $form['pass'] == "vip") {
		session_start();
		$_SESSION['role'] = 'vip';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
		else{
		$err [] = 'Niepoprawny login lub hasło';
		return false; 
	}

}


$form = array();
$err = array();


getParamsLogin($form);

if (!validateLogin($form,$err)) {
	include _ROOT_PATH.'/app/security/login_view.php';
} else { 
	
	
	
	header("Location: http://localhost/Credit-Calc-szablonowanie");
	

}