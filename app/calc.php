<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';
           


function getParams(&$form){
	$form['amount'] = isset($_REQUEST ['amount']) ? $_REQUEST['amount'] : null;
	$form['years'] = isset($_REQUEST ['years']) ? $_REQUEST['years'] : null;
	$form['percentages'] = isset($_REQUEST ['percentages']) ? $_REQUEST['percentages'] : null;
}


// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku


function validate(&$form,&$messages,&$hide_intro){
	if ( ! (isset($form['amount']) && isset($form['years']) && isset($form['percentages']))) {
		return false;
	}

	$hide_intro = true;
	

if ( $form['amount'] == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $form['years'] == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ( $form['percentages'] == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (count( $messages ) != 0) return false; 
	
	// sprawdzenie, czy są liczbami całkowitymi
	if (! is_numeric( $form['amount'] )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $form['years'] )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $form['years'] )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	
	if (count($messages) != 0) {
		return false;
	}else{
		return true;
	}


}

// 3. wykonaj zadanie jeśli wszystko w porządku


function process(&$form,&$messages,&$result){
	global $role;
	
	$form['amount'] = intval($form['amount']);
	$form['years'] = intval($form['years']);
	$form['percentages'] = floatval($form['percentages']);
	
	//wykonanie operacji
	if ($role == 'vip'){
		$result = ($form['amount']/($form['years']*12)) + ($form['amount']/($form['years']*12) * ($form['percentages']/100));
	}else{
		$messages [] = 'Tylko Vip może korzystać z kalkulatora. Zaloguj się lub zakup vipa za 5$ aby uzyskać dostęp !';
	}
    

}

$form = null;
$result = null;
$messages = array();
$hide_intro = false;

getParams($form);
if(validate($form,$messages,$hide_intro)){
	process($form,$messages,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$amount,$years,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';