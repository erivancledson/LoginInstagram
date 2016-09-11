<?php
session_start();
require 'instagramapi/Instagram.php';
require 'inconfig.php';
//verifica se tem o code
//isset é para verificar
if(isset($_GET['code'])) {
    //pega o codigo e troca ele pelo o access_token
	$code = $_GET['code'];
        //nome da minha sessao = in_access_token
	$_SESSION['in_access_token'] = $instagram->getOAuthToken($code);
}

header("Location: index.php");