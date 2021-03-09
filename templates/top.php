<?php require_once dirname(__FILE__) .'/../config.php';
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/php1_calcv4/css/layouts/marketing.css">
    <link rel="stylesheet" href="http://localhost/php1_calcv4/css/main.css">
    
    <?php if ($hide_intro) { ?>
    
    <link rel="stylesheet" href="http://localhost/php1_calcv4/css/style_hide_intro.css">
    <?php } ?>
    
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<script src="http://localhost/php1_calcv4/js/jquery.min.js"></script>
	<script src="http://localhost/php1_calcv4/js/softscroll.js"></script>
</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">START</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">SCROLL UP</a></li>
            <li class="pure-menu-selected"><a href="http://localhost/php1_calcv4/app/security/login.php">SIGN UP</a></li>
            <li class="pure-menu-selected"><a href="http://localhost/php1_calcv4/app/security/logout.php">LOG OUT</a></li>

            <li class="pure-menu-selected"> <?php print_r($_SESSION); ?> </li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">CREDIT CALCULATOR</h1>
        <p class="splash-subhead">
             _____________
        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Let's go!</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">
