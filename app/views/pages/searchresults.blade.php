@extends('layouts.default')
@section('content')
@stop

<?php

$settings = array(
    'oauth_access_token' => "32661138-nFEcD5qcsse7wCW8RskmH1XiM4kkv04yNfViVCBqQ",
    'oauth_access_token_secret' => "SJCQTzg9637hamVqCVoFw0gOVx0oBULCq4OPf5qhnoOMW",
    'consumer_key' => "mbhxCseUprBbO49TZ5Ee3XJIM",
    'consumer_secret' => "w57Vz4a5HJv5W5Tqe54BgBgiCOUnwQS2pasb8JdFeOe0ptGT6I"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=#nerd';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

var_dump($response);