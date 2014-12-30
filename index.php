<?php

//ver keys en https://apps.twitter.com/app/7721176/keys

ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "Falta",
    'oauth_access_token_secret' => "Falta",
    'consumer_key' => "Falta",
    'consumer_secret' => "Falta"
);

// url
// $url = 'https://api.twitter.com/1.1/blocks/create.json';
$url = "https://api.twitter.com/1.1/statuses/update.json";

// tipo de metodo
$requestMethod = 'POST';

//tweet
$postfields = array('status' => 'Mi tweet enviado desde PHP');

// instancia de la conexion con twitter
$twitter = new TwitterAPIExchange ($settings);

// enviamos el tweet
$response = $twitter->buildOauth($url, $requestMethod)
                    ->setPostfields($postfields)
                    ->performRequest();
