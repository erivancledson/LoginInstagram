<?php
use MetzWeb\Instagram\Instagram;
$instagram = new Instagram(array(
        //client id
	'apiKey' => '13557d673566467aa18aa031d7ddec00',
         // cliente secret
	'apiSecret' => 'c37d107e6a334cdb9a7d66f257cf65f4',
	'apiCallback' => 'http://localhost/in/callback.php'
));