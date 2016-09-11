<?php
session_start();
require 'instagramapi/Instagram.php';
require 'inconfig.php';
//verifica se existe a sessao, caso contrario redireciona para o botão de login
if(isset($_SESSION['in_access_token']) && !empty($_SESSION['in_access_token'])) {
    //pega o token
	$instagram->setAccessToken($_SESSION['in_access_token']);
         //pegando minhas fotos, self é minhas proprias fotos e as 5 ultimas postadas
	$r = $instagram->getUserMedia('self', 5);
        //mostrando as fotos
	foreach($r->data as $foto) {
                 //link da foto
		$link = $foto->link;
                //resolucao baixa da foto
		$img = $foto->images->low_resolution->url;
                //leganda da foto
		$legenda = $foto->caption->text;

		echo '<a href="'.$link.'"><img src="'.$img.'" border="0" /><br/>'.$legenda.'</a><br/><br/>';

	}

} else {
        //instagram ele tem uma url de login não precisa criar a classe login
	$loginUrl = $instagram->getLoginUrl();
	echo '<a href="'.$loginUrl.'">Login com Instagram</a>';
}