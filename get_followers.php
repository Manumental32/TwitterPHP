<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "455825342-XOiRo2asy2OjXqq3r4lcYlOEebvByYQVkPNvRSbF",
    'oauth_access_token_secret' => "vBY1Bu4GSDDP5hTVXxcoKKaQwq5tRz7Wue1J4QlwPhGWZ",
    'consumer_key' => "mN9V9zJHyywhhmph1RNLWPcjw",
    'consumer_secret' => "CTPedBrCi6VeorMhxSQVZcNfUoGm0euiGGZH9tWx2rcff2zYbQ"
);

//followers
$url = 'https://api.twitter.com/1.1/followers/list.json';
$getfield = '?username=ManuelAquino32&skip_status=1';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
